import axios from 'axios';
import { useEffect, useRef, useState } from 'react';
import { useParams } from 'react-router-dom';
import { useDispatch, useSelector } from 'react-redux';
import { CiClock2, CiCircleList } from 'react-icons/ci';
import TestContent from '../../components/TestContent/TestContent';
import systemApi from '../../api/systemApi';
import TestNavigation from '../../components/TestNavigation/TestNavigation';
import ResultLayout from '../ResultLayout/ResultLayout';

function ExamLayout({}) {
    const { testID } = useParams();

    const [header, setHeader] = useState();
    const [test, setTest] = useState();
    const [width, setWidth] = useState(0);
    const [timeRunning, setTimeRunning] = useState(false);

    const getExam = async () => {
        let response = null;
        try {
            response = await systemApi.getExam(testID);
            if (response.data.name.includes('Đề thi THPTQG', 0)) {
                setHeader('Đề thi Trung học Phổ thông Quốc Gia');
            } else {
                setHeader('Đề thi thử Trung học Phổ thông Quốc Gia');
            }
            setTest(response.data);
            setTimeRunning(true);
        } catch (error) {
            console.log(error);
        }
    };

    useEffect(() => {
        getExam();
    }, []);

    return (
        <div className="min-h-screen">
            <div className="flex items-center justify-center mb-2">
                <span className="text-center text-2xl mr-2">{test?.period}</span>
                <h3 className="text-center font-semibold text-2xl">{header}</h3>
            </div>
            <div className="grid grid-cols-12 gap-4 h-full ">
                <div className="col-span-10 bg-[#FFF] rounded-lg shadow-lg">
                    <div className="flex items-center h-[60px] pl-4">
                        <CiClock2 className="text-sm  " />
                        <span className="block pr-2 ml-2 text-sm border-r-2 border-[#BABABA]">
                            Thời gian làm bài: {test?.duration}
                        </span>
                        <span className="block pr-2 ml-2 text-sm">{test?.number_question} câu hỏi</span>
                    </div>
                    <TestContent type="testing" />
                </div>
                <div
                    ref={(divWrapper) => {
                        if (divWrapper) {
                            setWidth(divWrapper.clientWidth);
                        }
                    }}
                    className="relative col-span-2 "
                >
                    <TestNavigation width={width} type="testing" start={timeRunning} />
                </div>
            </div>
        </div>
    );
}

export default ExamLayout;
