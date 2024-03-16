import { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import ResultItem from '../ResultItem/ResultItem';
import { AiOutlineLineChart } from 'react-icons/ai';

function UserResultList({ data, type }) {
    // const userID = window.sessionStorage.getItem('id');
    const userID = localStorage.userID;

    const [list, setList] = useState(data);
    const [currentList, setCurrentList] = useState(1);
    const [resultPerList] = useState(5);

    const indexOfLastResult = currentList * resultPerList;
    const indexOfFirstResult = indexOfLastResult - resultPerList;
    const currentResults = list?.slice(indexOfFirstResult, indexOfLastResult);

    useEffect(() => {
        setList(data);
    }, [data]);

    const paginate = (listNumber) => {
        setCurrentList(listNumber);
    };

    const listNumbers = [];

    for (let i = 1; i <= Math.ceil(list?.length / resultPerList); i++) {
        listNumbers.push(i);
    }

    return (
        <>
            <table className="w-full overflow-hidden min-h-[500px] table-auto">
                <thead>
                    <tr>
                        <th className="py-2 px-2 border-r-[1px] font-semibold text-[#383838] text-lg">Mã đề thi</th>
                        <th className="py-2 font border-r-[1px] font-semibold text-[#383838] text-lg">Đề thi</th>
                        <th className="py-2 px-2 border-r-[1px] font-semibold text-[#383838] text-lg">Kết quả</th>
                        <th className="py-2 px-2 border-r-[1px] font-semibold text-[#383838] text-lg">
                            Thời gian làm bài
                        </th>
                        <th className="py-2 px-2  font-semibold text-[#383838] text-lg"></th>
                    </tr>
                </thead>
                <tbody>
                    {currentResults?.map((item, index) => (
                        <ResultItem key={index} data={item} number={index} />
                    ))}
                </tbody>
            </table>
            <div className="mt-4">
                <ul className="flex items-center justify-center">
                    {listNumbers.map((number) => (
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
            {type !== 'chart' ? (
                <Link
                    to={`/user/${userID}/chart`}
                    className="flex items-center justify-center w-full mt-4 p-2 border-2 border-[#333] bg-[#E8F2FF] hover:bg-[#3550AF] hover:text-[#E8F2FF] rounded-full text-lg transition duration-200"
                >
                    <AiOutlineLineChart className="mr-4" />
                    Xem thống kê kết quả luyện thi
                </Link>
            ) : undefined}
        </>
    );
}

export default UserResultList;
