import { memo, useEffect, useState } from 'react';
import { EditorState, ContentState } from 'draft-js';
import htmlToDraft from 'html-to-draftjs';
import UserNoteItem from '../UserNoteItem/UserNoteItem';

function UserNoteList({ data, type }) {
    const [list, setList] = useState(data);
    const [currentList, setCurrentList] = useState(1);
    const [resultPerList] = useState(type === 'result-page' ? 1 : 5);

    const indexOfLastResult = currentList * resultPerList;
    const indexOfFirstResult = indexOfLastResult - resultPerList;
    const currentResults = list?.slice(indexOfFirstResult, indexOfLastResult);

    const paginate = (listNumber) => {
        setCurrentList(listNumber);
    };

    useEffect(() => {
        setList(data);
    }, [data]);

    const listNumbers = [];

    for (let i = 1; i <= Math.ceil(list?.length / resultPerList); i++) {
        listNumbers.push(i);
    }

    return (
        <>
            <ul>
                {currentResults?.map((item, index) => (
                    <UserNoteItem
                        key={index}
                        data={item}
                        index={index + 1}
                        state={EditorState.createWithContent(
                            ContentState.createFromBlockArray(htmlToDraft(item.note).contentBlocks),
                        )}
                    />
                ))}
            </ul>
            <div className="mt-4">
                <ul className="flex items-center justify-center">
                    {listNumbers?.map((number) => (
                        <li
                            key={number}
                            className="w-[40px] h-[40px] mx-2 text-center hover:opacity-70 transition-all leading-[40px] rounded bg-[#3550AF] text-[#E8F2FF] cursor-pointer"
                            onClick={() => paginate(number)}
                        >
                            {number}
                        </li>
                    ))}
                </ul>
            </div>
        </>
    );
}

export default UserNoteList;
