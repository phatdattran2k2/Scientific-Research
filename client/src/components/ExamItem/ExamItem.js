import { useEffect, useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import config from '../../config/config';
import { FaUserCheck } from 'react-icons/fa6';
import { CiClock2, CiCircleList } from 'react-icons/ci';

function ExamItem({ data, type }) {
    const userID = localStorage.userID;
    const [style, setStyle] = useState('');
    const nav = useNavigate();

    useEffect(() => {
        switch (type) {
            case 'recommend':
                setStyle(
                    'col-span-3 flex flex-col h-[280px] py-2 px-4 rounded-lg border-[1px] shadow-md transition duration-200 hover:scale-105 hover:shadow-xl cursor-pointer',
                );
                break;
            case 'search':
                setStyle(
                    'col-span-2 flex flex-col h-[310px] py-2 px-4 rounded-lg border-[1px] shadow-md transition duration-200 hover:scale-105 hover:shadow-xl cursor-pointer',
                );
                break;
            default:
                setStyle(
                    'col-span-2 flex flex-col h-[310px] py-2 px-4 rounded-lg border-[1px] shadow-md transition duration-200 hover:scale-105 hover:shadow-xl cursor-pointer',
                );
                break;
        }
    });

    const handleAttemptTest = (e) => {
        e.preventDefault();
        if (userID !== undefined) {
            nav(`/test/${data.id}`);
        } else {
            alert('Hãy đăng nhập để làm bài!');
            nav(config.routes.register);
        }
    };

    return (
        <div className={style}>
            <h4 className="min-h-[50px] mb-2 text-base font-semibold">{data.name}</h4>
            <div className="h-3/5 mb-2 flex flex-col">
                <span className="mb-2 text-sm text-[#AEAEAE]">Bộ đề: {data.genre_name}</span>
                <span className="min-h-[30px] mb-2 text-sm text-[#AEAEAE]">Loại đề: {data.genre_name}</span>
                <div className="flex items-center mb-2">
                    <CiClock2 className="text-sm text-[#AEAEAE]" />
                    <span className="block ml-2 text-sm text-[#AEAEAE]">60 phút</span>
                </div>
                <div className="flex items-center mb-2">
                    <CiCircleList className="text-sm text-[#AEAEAE]" />
                    <span className="block ml-2 text-sm text-[#AEAEAE]">50 câu</span>
                </div>
                <div className="flex items-center mb-4">
                    <FaUserCheck className="text-sm text-[#AEAEAE]" />
                    <span className="block ml-2 text-sm text-[#AEAEAE]">{data.participants.amount}</span>
                </div>
            </div>
            <Link
                // to={userID !== undefined ? `/test/${data.id}` : config.routes.register}
                onClick={(e) => handleAttemptTest(e)}
                className="block mx-auto w-[128px] h-[36px] rounded border-2 border-[#94BEDC] text-base text-center leading-[36px] transition duration-700 hover:opacity-50"
            >
                Làm bài
            </Link>
        </div>
    );
}

export default ExamItem;
