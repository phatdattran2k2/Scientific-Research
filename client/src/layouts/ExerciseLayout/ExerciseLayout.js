import { memo, useCallback, useEffect, useState } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { useParams } from 'react-router-dom';
import systemApi from '../../api/systemApi';
import PuffLoader from 'react-spinners/PuffLoader';
import PracticeQuestion from '../../components/PracticeQuestion/PracticeQuestion';
import PracticeQuestionResult from '../../components/PracitceQuestionResult/PracticeQuestionResult';
import ReadingPracticeWrapper from '../../components/ReadingPracticeWrapper/ReadingPracticeWrapper';

function ExerciseLayout() {
    const { name } = useParams();
    const [loading, setLoading] = useState(false);
    const [hidden, setHidden] = useState(true);
    const [submitted, setSubmitted] = useState(false);
    const [amount, setAmount] = useState('');
    const [questions, setQuestions] = useState();
    const [readings, setReadings] = useState();
    const [results, setResults] = useState();
    const { answerChoices } = useSelector((state) => state.tests);

    const type = {
        combine: {
            label: 'Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that best combines each pair of sentences in the following questions.',
        },
        pronunciation: {
            label: 'Mark the letter A, B, C, or D on your answer sheet to indicate the word whose underlined part differs from the other three in pronunciation in each of the following questions.',
        },
        stress: {
            label: 'Mark the letter A, B, C, or D on your answer sheet to indicate the word that differs from the other three in the postion of stress in each of the following questions.',
        },
        opposite: {
            label: 'Mark the letter A, B, C, or D on your answer sheet to indicate the word(s) OPPOSITE in meaning to the underlined word(s) in each of the following questions.',
        },
        complete: {
            label: 'Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that best completes each of the following exchanges.',
        },
        correct: {
            label: 'Mark the letter A, B, C, or D on your answer sheet to indicate the correct answer to each of the following questions.',
        },
        closestMeaning: {
            label: 'Mark the letter A, B, C, or D on your answer sheet to indicate the word CLOSEST in meaning to the underlined word in each of the following questions.',
        },
        blank: {
            label: 'Read the following passage and mark the letter A, B, C, or D on your answer sheet to indicate the correct word or phrase that best fits each of the numbered blanks.',
        },
        reading: {
            label: 'Read the following passage and mark the letter A, B, C, or D on your answer sheet to indicate the correct answer to each of the questions.',
        },
        correction: {
            label: 'Mark the letter A, B, C, or D on your answer sheet to indicate the underlined part that needs correction in each of the following questions.',
        },
        closestMeaningSentence: {
            label: 'Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that is closest in meaning to the each of the following questions.',
        },
    };

    const getQuestions = async () => {
        setLoading(true);
        let res = null;
        try {
            res = await systemApi.getQuestionBasedOnType(name, amount);
            if (name == 'reading' || name == 'blank') {
                setReadings(res.data);
            } else {
                setQuestions(res.data);
            }
            setLoading(false);
            setHidden(false);
        } catch (error) {
            console.error();
        }
    };

    const handleAmount = (e) => {
        setAmount(e.target.value);
    };

    const handleSubmit = () => {
        setSubmitted(false);
        getQuestions();
    };

    const handleSubmitQuestions = () => {
        setSubmitted(true);
        const getResults = async () => {
            setLoading(true);
            let res = null;
            try {
                res = await systemApi.submitQuestions(answerChoices);
                setLoading(false);
                setHidden(false);
                setResults(res);
            } catch (error) {
                console.error();
            }
        };
        getResults();
    };

    return (
        <>
            <div className="w-[768px] min-h-[680px] mt-[32px] pt-[16px] pb-4 px-4 mx-auto bg-[#fff]">
                <h3 className="text-center text-2xl font-semibold">Luyện tập</h3>
                <div className="bg-[#D8F0E2] mt-2 rounded flex">
                    <span className="block flex p-4">
                        Pro tips: Hình thức luyện tập giúp bạn tập trung cải thiện các dạng câu bạn thường sai sót khi
                        làm bài thi
                    </span>
                </div>
                <div className="flex border-b-[1px] pb-4 items-center mt-4">
                    {name !== 'reading' && name !== 'blank' ? (
                        <>
                            <span className="block w-[100px] my-2 text-lg font-medium">Số câu*</span>
                            <select
                                required
                                name="amount"
                                value={amount}
                                onChange={handleAmount}
                                className="ml-4 min-w-[120px] h-[30px] px-2 border-2 rounded outline-none "
                            >
                                <option disabled value="">
                                    - Số câu -
                                </option>
                                <option value="5">5 câu</option>
                                <option value="10">10 câu</option>
                            </select>
                            <button
                                onClick={handleSubmit}
                                className="w-[80px] ml-6 border-[1px] border-[#333] bg-[#E8F2FF] hover:bg-[#3550AF] hover:text-[#E8F2FF] rounded text-lg transition duration-200"
                            >
                                Xác nhận
                            </button>
                        </>
                    ) : (
                        <>
                            <span className="block w-[100px] my-2 text-lg font-medium">Số bài*</span>
                            <select
                                required
                                name="amount"
                                value={amount}
                                onChange={handleAmount}
                                className="ml-4 min-w-[120px] h-[30px] px-2 border-2 rounded outline-none "
                            >
                                <option disabled value="">
                                    - Số bài -
                                </option>
                                <option value="1">1 bài</option>
                                <option value="2">2 bài</option>
                            </select>
                            <button
                                onClick={handleSubmit}
                                className="w-[80px] ml-6 border-[1px] border-[#333] bg-[#E8F2FF] hover:bg-[#3550AF] hover:text-[#E8F2FF] rounded text-lg transition duration-200"
                            >
                                Xác nhận
                            </button>
                        </>
                    )}
                </div>
                {loading ? (
                    <div className="w-full flex justify-center items-center ">
                        <PuffLoader loading={loading} size={40} aria-label="Loading Spinner" data-testid="loader" />
                        <span className="ml-2 text-[#333]">Đang tải .......</span>
                    </div>
                ) : (
                    <>
                        {!hidden && (
                            <>
                                {submitted ? (
                                    <>
                                        <h4 className="my-2 text-lg font-semibold">{type[name].label}</h4>
                                        {name == 'reading' && name == 'blank' ? (
                                            <>
                                                {readings?.map((item, index) => (
                                                    <ReadingPracticeWrapper
                                                        result={results}
                                                        viewResult={true}
                                                        key={index}
                                                        data={item}
                                                    />
                                                ))}
                                            </>
                                        ) : (
                                            <>
                                                {results?.map((item, index) => (
                                                    <PracticeQuestionResult key={index} index={index} data={item} />
                                                ))}
                                            </>
                                        )}
                                    </>
                                ) : (
                                    <>
                                        <h4 className="my-2 text-lg font-semibold">{type[name].label}</h4>
                                        {name == 'reading' || name == 'blank' ? (
                                            <>
                                                {/* {console.log(name)} */}
                                                {readings?.map((item, index) => (
                                                    <ReadingPracticeWrapper key={index} data={item} />
                                                ))}
                                            </>
                                        ) : (
                                            <>
                                                {console.log('hello')}
                                                {questions?.map((item, index) => (
                                                    <PracticeQuestion key={index} index={index} data={item} />
                                                ))}
                                            </>
                                        )}
                                        <button
                                            onClick={handleSubmitQuestions}
                                            className="w-[140px] outline-none border-[1px] border-[#333] bg-[#E8F2FF] hover:bg-[#3550AF] hover:text-[#E8F2FF] rounded text-lg transition duration-200"
                                        >
                                            Kiểm tra kết quả
                                        </button>
                                    </>
                                )}
                            </>
                        )}
                    </>
                )}
            </div>
        </>
    );
}

export default memo(ExerciseLayout);
