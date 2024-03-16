import { memo, useEffect, useRef, useState } from 'react';
import { ToastContainer, toast } from 'react-toastify';

import { convertToHTML } from 'draft-convert';
import { Editor } from 'react-draft-wysiwyg';
import { EditorState, ContentState } from 'draft-js';
import htmlToDraft from 'html-to-draftjs';

import systemApi from '../../api/systemApi';
import { AiFillEdit, AiFillDelete } from 'react-icons/ai';

function UserNoteItem({ data, state }) {
    const [edit, setEdit] = useState(false);

    const contentBlock = htmlToDraft(data.note);
    const [editorState, setEditorState] = useState(
        EditorState.createWithContent(ContentState.createFromBlockArray(contentBlock.contentBlocks)),
    );

    useEffect(() => {
        setEditorState(state);
    }, [state]);

    const handleConvert = () => {
        const updateNote = async () => {
            let response = null;
            try {
                response = await systemApi.updateNote(data.id, convertToHTML(editorState.getCurrentContent()));
                response.code == 200 ? toast.success('Đã lưu ghi chú') : toast.error('Lưu ghi chú thất bại');
                // response.code = 200 ? window.location.reload() : console.error();
                setEdit(false);
            } catch (error) {
                console.log(error);
            }
        };
        updateNote();
    };

    return (
        <li className="w-full mb-4">
            <div className="grid grid-cols-12 flex items-center">
                <div className="col-span-10 flex items-center text-center ">
                    <span className="block text-[#f47425] text-lg font-semibold">{data.heading}</span>
                </div>
                <div className=" flex items-center justify-end col-span-2">
                    <button onClick={() => setEdit(!edit)} className="mr-4 outline-none">
                        <AiFillEdit className="text-2xl text-[#BFBFBF] hover:text-current" />
                    </button>
                    <button className="outline-none">
                        <AiFillDelete className="text-2xl text-[#BFBFBF] hover:text-current" />
                    </button>
                </div>
            </div>
            {!edit ? (
                <div
                    className="mt-2 h-[200px] overflow-scroll mb-4 p-4 bg-[#ECEDEF] w-full rounded overflow-scroll"
                    dangerouslySetInnerHTML={{ __html: convertToHTML(editorState.getCurrentContent()) }}
                ></div>
            ) : (
                <div className="mt-2 mb-4 pt-2 pl-2 bg-[#fff] rounded">
                    <div className="p-2 border-2 border-[#999]">
                        <Editor
                            toolbar={{
                                options: ['inline', 'list'],
                                inline: {
                                    inDropdown: false,
                                    className: undefined,
                                    component: undefined,
                                    dropdownClassName: undefined,
                                    options: ['bold', 'italic'],
                                },
                                list: {
                                    inDropdown: false,
                                    className: undefined,
                                    component: undefined,
                                    dropdownClassName: undefined,
                                    options: ['unordered', 'ordered'],
                                },
                            }}
                            editorStyle={{ height: '100px', margin: '4px 0px 4px 0px' }}
                            editorState={editorState}
                            toolbarClassName="toolbarClassName"
                            wrapperClassName="wrapperClassName"
                            editorClassName="editorClassName"
                            onEditorStateChange={setEditorState}
                        />
                    </div>
                    <div className="flex mt-2 justify-end items-center">
                        <button
                            onClick={() => setEdit(false)}
                            className="p-2 mr-2 cursor-pointer outline-none transition duration-300 hover:brightness-90 rounded bg-[#ECEDEF] tex-[#333]"
                        >
                            Hủy bỏ
                        </button>
                        <button
                            onClick={handleConvert}
                            className="w-[60px] p-2 cursor-pointer outline-none transition duration-300 hover:brightness-125 rounded bg-[#F05123] text-[#fff]"
                        >
                            Lưu
                        </button>
                    </div>
                    <ToastContainer autoClose={2000} hideProgressBar={true} theme="light" pauseOnFocusLoss={false} />
                </div>
            )}
        </li>
    );
}

export default memo(UserNoteItem);
