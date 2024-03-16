import { useEffect, useState } from 'react';
import systemApi from '../../api/systemApi';
import { Link } from 'react-router-dom';

function ResultItem({ data, number }) {
    const [color, setColor] = useState('');
    console.log(number);
    return (
        <>
            <tr
                style={number % 2 == 0 ? { backgroundColor: '#F8F9FA' } : undefined}
                className="h-[40px] border-b-[1px]"
            >
                <td className="text-center text-base border-b-[1px] border-r-[1px]">{data.id}</td>
                <td className="text-center text-base border-b-[1px] border-r-[1px]">{data.name}</td>
                <td className="text-center text-base border-b-[1px] border-r-[1px]">
                    {data.number_correct_answer}/50 (Điểm: {data.score})
                </td>
                <td className="text-center text-base border-b-[1px] border-r-[1px]">00:{data.completion_time}</td>
                <td className="text-center ">
                    <Link
                        to={`/test/${data.test_id}/result/${data.tdid}/user/${data.user_id}`}
                        className="text-[#6EB3F1] text-base hover:text-[#35509a] cursor-pointer"
                    >
                        Xem chi tiết
                    </Link>
                </td>
            </tr>
        </>
    );
}

export default ResultItem;
