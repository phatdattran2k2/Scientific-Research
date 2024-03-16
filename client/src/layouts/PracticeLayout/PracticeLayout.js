import { useState, useEffect, useRef } from 'react';
import { AiTwotoneCalendar } from 'react-icons/ai';
import systemApi from '../../api/systemApi';
import ExamList from '../../components/ExamList/ExamList';
import { Link } from 'react-router-dom';

function PraticeLayout() {
    const userID = localStorage.userID;
    const [recommend, setRecommend] = useState([]);
    const [improve, setImprove] = useState([]);
    const [activeTabIndex, setActiveTabIndex] = useState(0);
    const [tabUnderlineWidth, setTabUnderlineWidth] = useState(0);
    const [tabUnderlineLeft, setTabUnderlineLeft] = useState(0);

    const tabsRef = useRef([]);
    const tabsLabel = [
        { label: 'Dành cho bạn', content: 'basic' },
        { label: 'Bài tập', content: 'password' },
    ];

    const backgrounds = {
        combine: {
            label: 'Bài tập ghép câu',
            background: '/combine.jpg',
        },
        pronunciation: {
            label: 'Bài tập phát âm',
            background: '/pronun.jpg',
        },
        stress: {
            label: 'Tìm nhấn âm',
            background: '/stress.jpg',
        },
        opposite: {
            label: 'Tìm câu trái nghĩa',
            background: '/opposite.jpg',
        },
        complete: {
            label: 'Hoàn thành câu',
            background: '/complete.jpg',
        },
        correct: {
            label: 'Chọn câu chính xác nhất',
            background: '/correct.jpg',
        },
        closestMeaning: {
            label: 'Tìm từ đồng nghĩa',
            background: '/closestMeaning.jpg',
        },
        blank: {
            label: 'Điền vào ô trống',
            background: '/blank.jpg',
        },
        reading: {
            label: 'Đọc hiểu',
            background: '/reading.jpg',
        },
        correction: {
            label: 'Tìm vị trí sai trong câu',
            background: '/correction.jpg',
        },
        closestMeaningSentence: {
            label: 'Chọn câu đồng nghĩa',
            background: '/closestMeaningSentence.jpg',
        },
    };

    useEffect(() => {
        const getRecommend = async () => {
            let response = null;
            try {
                response = await systemApi.getRecommendTest(userID);
                if (response.code == 200) {
                    setRecommend(response.data);
                } else {
                    setRecommend([]);
                }
            } catch (error) {
                console.log(error);
            }
        };

        const getRecommendTypeOfQuestion = async () => {
            let response = null;
            try {
                response = await systemApi.getRecommendTypeOfQuestion(userID);
                if (response.code == 200) {
                    console.log(response.data);
                    setImprove(response.data);
                } else {
                    setImprove([]);
                }
            } catch (error) {
                console.log(error);
            }
        };
        getRecommend();
        getRecommendTypeOfQuestion();

        function setTabPosition() {
            const currentTab = tabsRef.current[activeTabIndex];
            tabsRef.current.filter((prev) => {
                if (prev !== currentTab) {
                    prev.style.color = '#8c98a4';
                }
            });
            currentTab.style.color = '#35509a';
            setTabUnderlineLeft(currentTab?.offsetLeft ?? 0);
            setTabUnderlineWidth(currentTab?.clientWidth ?? 0);
        }

        setTabPosition();
        window.addEventListener('resize', setTabPosition);

        return () => window.removeEventListener('resize', setTabPosition);
    }, [activeTabIndex]);

    return (
        <>
            <div className="w-full min-h-screen bg-[#fff]">
                <div className="w-full h-[160px] flex flex-col justify-center rounded bg-gradient-to-r from-[#FFF] to-[#98CCFE]">
                    <div className="flex items-center h-3/5 px-[100px]">
                        <AiTwotoneCalendar className="text-4xl" />
                        <h3 className="ml-2 text-3xl font-semibold">Luyện tập</h3>
                    </div>
                    <div className="relative h-2/5 px-[100px] flex border-b-[2px]">
                        {tabsLabel.map((tab, idx) => (
                            <button
                                key={idx}
                                ref={(el) => (tabsRef.current[idx] = el)}
                                className="block mr-2 pr-4 pb-2 text-xl text-[#8c98a4] hover:text-[#35509a] font-medium"
                                onClick={() => setActiveTabIndex(idx)}
                            >
                                {tab.label}
                            </button>
                        ))}
                        <span
                            className="absolute bottom-0 block h-0.5 bg-[#35509a] transition-all duration-300"
                            style={{ left: tabUnderlineLeft, width: tabUnderlineWidth }}
                        />
                    </div>
                </div>
                <div className="grid grid-cols-12 px-[100px]">
                    <div className="col-span-10">
                        <ExamList data={recommend} type="recommend" />
                    </div>
                    <div className="col-span-2 mt-6 py-4">
                        {Object.keys(improve).map((item, index) => (
                            <Link
                                key={index}
                                to={`/exercise/${item}`}
                                className="block w-full h-[160px] mb-4 border-[1px] rounded-lg shadow-md cursor-pointer overflow-hidden"
                            >
                                <div
                                    style={{ backgroundImage: `url(${backgrounds[item].background})` }}
                                    className="h-4/6 bg-cover bg-center "
                                ></div>
                                <h3 className="mt-2 px-2 text-base font-semibold">{backgrounds[item].label}</h3>
                            </Link>
                        ))}
                    </div>
                </div>
            </div>
        </>
    );
}

export default PraticeLayout;
