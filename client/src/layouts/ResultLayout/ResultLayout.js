import { useParams } from 'react-router-dom';
import { useEffect, useRef, useState } from 'react';
import TestContent from '../../components/TestContent/TestContent';
import systemApi from '../../api/systemApi';
import TestNavigation from '../../components/TestNavigation/TestNavigation';
import PuffLoader from 'react-spinners/PuffLoader';
import NoteWrapper from '../../components/NoteWrapper/NoteWrapper';
import { AiOutlineCheck } from 'react-icons/ai';
import { BiBullseye } from 'react-icons/bi';
import { CiClock2 } from 'react-icons/ci';
import { FaCheckCircle, FaTimesCircle, FaMinusCircle } from 'react-icons/fa';

function ResultLayout() {
    const { testID, resultID, userID } = useParams();
    const [result, setResult] = useState();
    const [header, setHeader] = useState();
    const [spinner, setSpinner] = useState(true);
    const [test, setTest] = useState();
    const [noteWidth, setNoteWidth] = useState(0);
    const [width, setWidth] = useState(0);

    useEffect(() => {
        getResult();
    }, []);

    const getResult = async () => {
        let response = null;
        try {
            response = await systemApi.getResult(testID, resultID, userID);
            if (response.test.name.includes('Đề thi THPTQG', 0)) {
                setHeader('Đề thi Trung học Phổ thông Quốc Gia');
            }
            setTest(response.test);
            setResult(response.result);
            setSpinner(false);
        } catch (error) {
            console.log(error);
        }
    };

    return (
        <div className="relative min-h-screen">
            {spinner ? (
                <div className="w-full min-h-screen flex justify-center items-center">
                    <PuffLoader loading={spinner} size={40} aria-label="Loading Spinner" data-testid="loader" />
                    <span className="ml-2 font-semibold text-xl text-[#333]">Loading....</span>
                </div>
            ) : (
                <>
                    <div className="flex items-center justify-center mb-2">
                        <h3 className="text-center font-semibold text-2xl">
                            Kết quả: {test.period} - {header}
                        </h3>
                    </div>
                    <div className="grid grid-cols-12 gap-4 h-full">
                        <div
                            ref={(noteWrapperRef) => {
                                if (noteWrapperRef) {
                                    setNoteWidth(noteWrapperRef.clientWidth);
                                }
                            }}
                            className="col-span-10 bg-[#FFF] rounded-lg p-4"
                        >
                            <div className="grid grid-rows-4 grid-flow-col p-2 mb-2 gap-4">
                                <div className="row-span-4 flex flex-col justify-center bg-[#F7F9F8] px-[12px] shadow-lg">
                                    <div className="flex mb-4">
                                        <AiOutlineCheck className="w-[20px] h-[20px] mr-4" />
                                        <span className="w-28 block text-lg mr-6">Kết quả làm bài</span>
                                        <span className="block text-lg">{result?.number_correct_answer}/50</span>
                                    </div>
                                    <div className="flex mb-4">
                                        <BiBullseye className="w-[20px] h-[20px] mr-4" />
                                        <span className="w-28 block text-lg mr-6">Độ chính xác</span>
                                        <span className="block text-lg">
                                            {((result?.number_correct_answer / 50) * 100).toFixed()}%
                                        </span>
                                    </div>
                                    <div className="flex mb-4">
                                        <CiClock2 className="w-[20px] h-[20px] mr-4" />
                                        <span className="w-28 block text-lg mr-6">Thời gian hoàn thành</span>
                                        <span className="block text-lg">{result?.completion_time} s</span>
                                    </div>
                                </div>
                                <div className="row-span-2 col-span-10 grid grid-cols-3 gap-4">
                                    <div className="py-2 flex flex-col items-center justify-center round shadow-md">
                                        <FaCheckCircle className="mb-2 text-lime-600 text-2xl" />
                                        <span className="text-lime-600">Trả lời đúng</span>
                                        <span className="font-semibold">{result?.number_correct_answer}</span>
                                        <span className="">câu hỏi</span>
                                    </div>
                                    <div className="py-2 flex flex-col items-center justify-center round shadow-md">
                                        <FaTimesCircle className="mb-2 text-red-600 text-2xl" />
                                        <span className="text-red-600">Trả lời sai</span>
                                        <span className="font-semibold">{result?.countWrong}</span>
                                        <span className="">câu hỏi</span>
                                    </div>
                                    <div className="py-2 flex flex-col items-center justify-center round shadow-md">
                                        <FaMinusCircle className="mb-2 text-stone-600 text-2xl" />
                                        <span className="text-stone-600">Bỏ qua</span>
                                        <span className="font-semibold">{50 - result?.count}</span>
                                        <span className="">câu hỏi</span>
                                    </div>
                                </div>
                                <div className="row-span-2 col-span-10 round shadow-md flex flex-col items-center justify-center">
                                    <span className="mt-2 font-semibold text-2xl mb-5">Tổng</span>
                                    <span className="text-7xl text-[#FFD32C]">{result?.score}</span>
                                </div>
                            </div>
                            <TestContent type="result" />
                        </div>
                        <NoteWrapper width={noteWidth} />
                        <div
                            ref={(divWrapper) => {
                                if (divWrapper) {
                                    setWidth(divWrapper.clientWidth);
                                }
                            }}
                            className="relative col-span-2 "
                        >
                            <TestNavigation width={width} type="result" />
                        </div>
                    </div>
                </>
            )}
        </div>
    );
}

export default ResultLayout;
