import axios from 'axios';
import { useState, useEffect } from 'react';
import { AiOutlineLineChart } from 'react-icons/ai';
import systemApi from '../../api/systemApi';
import LineChart from '../../components/LineChart/LineChart';
import { FaBookOpen } from 'react-icons/fa';
import UserResultList from '../../components/UserResultList/UserResultList';

function StaticalChartLayout() {
    // const userID = window.sessionStorage.getItem('id');
    const userID = localStorage.userID;

    const [option, setOption] = useState('30');
    const [data, setData] = useState();

    useEffect(() => {
        getACtivities();
    }, []);

    const getACtivities = async () => {
        let response = null;
        try {
            response = await systemApi.getUserActivities(userID);
            setData(response);
        } catch (error) {
            console.log(error);
        }
    };

    const handleOnChange = (event) => {
        switch (event.target.value) {
            case '60':
                setOption('60');
                break;
            default:
                setOption('30');
                break;
        }
    };

    return (
        <>
            <div className="w-full min-h-[680px] mt-[32px] pb-4 mx-auto bg-[#fff]">
                <div className="w-full h-[100px] bg-gradient-to-b from-[#FBFDFF] to-[#E9F2FF]">
                    <div className="w-[1000px] mx-auto flex h-[100px] items-center p-4 ">
                        <AiOutlineLineChart className="text-4xl mr-2" />
                        <h3 className="text-4xl font-semibold">Thống kê kết quả</h3>
                    </div>
                </div>
                <div className="w-[1000px] mx-auto p-4">
                    <div className="flex flex-col mb-4">
                        <h3 className="text-lg mb-2">Lọc kết quả:</h3>
                        <div className="flex">
                            <select
                                onChange={handleOnChange}
                                className="w-[200px] h-[36px] px-2 mr-2 border-2 border-[#333] rounded "
                            >
                                <option value="30">30 ngày</option>
                                <option value="60">60 ngày</option>
                            </select>
                            <button className="block w-[100px] h-[36px] rounded bg-[#3550AF] text-[#E8F2FF] text-center leading-[36px] transition duration-700 hover:opacity-80">
                                Tìm kiếm
                            </button>
                        </div>
                    </div>
                    <ul className="flex mb-4">
                        <li className="w-[180px] flex flex-col items-center mr-4 p-6 border-[1px] shadow rounded">
                            <span className="text-lg text-[#677788]">Số đề đã làm</span>
                            <span className="font-bold text-2xl">{data?.tests}</span>
                            <span>đề thi</span>
                        </li>
                        <li className="w-[180px] flex flex-col items-center mr-4 p-6 border-[1px] shadow rounded">
                            <span className="text-lg text-[#677788]">Điểm trung bình</span>
                            <span className="font-bold text-2xl">{data?.average_score.toFixed(2)}</span>
                            <span>điểm</span>
                        </li>
                        <li className="w-[180px] flex flex-col items-center mr-4 p-6 border-[1px] shadow rounded">
                            <span className="text-lg text-[#677788]">Điểm cao nhất</span>
                            <span className="font-bold text-2xl">{data?.highest_score}</span>
                            <span>điểm</span>
                        </li>
                    </ul>
                    {data?.tests !== 0 ? (
                        <>
                            <LineChart option={option} />
                            <div className="mt-4">
                                <h3 className="mb-2 text-xl font-semibold">Danh sách đề thi đã làm:</h3>
                                <UserResultList data={data?.history} type="chart" />
                            </div>
                        </>
                    ) : undefined}
                </div>
            </div>
        </>
    );
}

export default StaticalChartLayout;
