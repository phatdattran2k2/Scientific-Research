import { memo, useEffect, useRef, useState } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { setAnswerChoices, setFlags, setNavigate } from '../../redux/features/testSlice';
import TextWrapper from '../TextWrapper/TextWrapper';
import { revertAll } from '../../redux/features/revertAll';

function TestQuestion({ data, reading }) {
    const dispatch = useDispatch();
    const { navigate, flags } = useSelector((state) => state.tests);
    const [text, setText] = useState(undefined);
    const ref = useRef();
    const questionRef = useRef();
    
    useEffect(() => {
        Object.keys(reading).map((item) => {
            if (reading[item].id == data.question_id) {
                setText(reading[item].reading_test.content);
            }
        });
    }, []);

    useEffect(() => {
        handleScroll();
    }, [navigate]);

    const handleScroll = () => {
        if (data.question_order == navigate) {
            questionRef.current.style.backgroundColor = '#3550AF';
            questionRef.current.style.color = 'white';
            ref.current.scrollIntoView({ behavior: 'smooth', block: 'center', inline: 'center' });
            if (flags.find((item) => item == data.question_order)) {
                setTimeout(() => {
                    questionRef.current.style.backgroundColor = '#FFAD3B';
                    questionRef.current.style.color = '#fafafa';
                    dispatch(setNavigate('RESET_NAVIGATE'))
                }, 2000);
            } else {
                setTimeout(() => {
                    questionRef.current.style.backgroundColor = '#E8F2FF';
                    questionRef.current.style.color = '#3550AF';
                    dispatch(setNavigate('RESET_NAVIGATE'))
                }, 2000);
            }
        }
    };

    const handleChange = (id, answer) => {
        dispatch(setAnswerChoices({ id: id, choice: answer }));
    };

    const handlePreventCopy = (e) => {
        e.preventDefault();
    };

    const handleMark = () => {
        if (flags.find((item) => item == data.question_order)) {
            dispatch(setFlags({ type: 'remove', payload: data.question_order }));
            questionRef.current.style.backgroundColor = '#E8F2FF';
            questionRef.current.style.color = '#3550AF';
        } else {
            dispatch(setFlags({ type: 'add', payload: data.question_order }));
            questionRef.current.style.backgroundColor = '#FFAD3B';
            questionRef.current.style.color = '#fafafa';
        }
    };

    return (
        <>
            {text !== undefined ? <TextWrapper data={text} header={data.types.description} /> : undefined}
            {data.type_id !== 9 && data.type_id !== 8 ? (
                <h4 className="px-4 mb-2 font-semibold">{data.types.description}</h4>
            ) : undefined}
            <div ref={ref} className="px-4 my-4">
                {data.questions.content !== null ? (
                    <>
                        <div className="flex">
                            <span
                                onClick={handleMark}
                                ref={questionRef}
                                className="block w-[30px] h-[30px] cursor-pointer text-center text-sm leading-[30px] font-semibold text-[#3550AF] rounded-full bg-[#E8F2FF] "
                            >
                                {data.question_order}
                            </span>

                            <h4
                                dangerouslySetInnerHTML={{ __html: data.questions.content }}
                                className="w-full ml-2"
                            ></h4>
                        </div>
                        <form className="w-full pl-10 mt-2 flex flex-col justify-center">
                            <div className="p-2">
                                <input
                                    type="radio"
                                    name={data.questions.id}
                                    onChange={() => handleChange(data.questions.id, data.questions.answer_a)}
                                    className="cursor-pointer"
                                />
                                <label
                                    dangerouslySetInnerHTML={{ __html: data.questions.answer_a }}
                                    className="ml-2 text-black cursor-default"
                                    onCopy={(e) => handlePreventCopy(e)}
                                ></label>
                            </div>
                            <div className="p-2">
                                <input
                                    type="radio"
                                    name={data.questions.id}
                                    onChange={() => handleChange(data.questions.id, data.questions.answer_b)}
                                    className="cursor-pointer"
                                />
                                <label
                                    dangerouslySetInnerHTML={{ __html: data.questions.answer_b }}
                                    className="ml-2 text-black cursor-default"
                                    onCopy={(e) => handlePreventCopy(e)}
                                ></label>
                            </div>
                            <div className="p-2">
                                <input
                                    type="radio"
                                    name={data.questions.id}
                                    onChange={() => handleChange(data.questions.id, data.questions.answer_c)}
                                    className="cursor-pointer"
                                />
                                <label
                                    dangerouslySetInnerHTML={{ __html: data.questions.answer_c }}
                                    className="ml-2 text-black cursor-default"
                                    onCopy={(e) => handlePreventCopy(e)}
                                ></label>
                            </div>
                            <div className="p-2">
                                <input
                                    type="radio"
                                    name={data.questions.id}
                                    onChange={() => handleChange(data.questions.id, data.questions.answer_d)}
                                    className="cursor-pointer"
                                />
                                <label
                                    dangerouslySetInnerHTML={{ __html: data.questions.answer_d }}
                                    className="ml-2 text-black cursor-default"
                                    onCopy={(e) => handlePreventCopy(e)}
                                ></label>
                            </div>
                        </form>
                    </>
                ) : (
                    <>
                        <div className="flex">
                            <span
                                onClick={handleMark}
                                ref={questionRef}
                                className="block w-[30px] h-[30px] cursor-pointer text-center text-sm leading-[30px] font-semibold text-[#3550AF] rounded-full bg-[#E8F2FF] "
                            >
                                {data.question_order}
                            </span>
                            <form className="w-full pl-2 flex flex-col justify-center">
                                <div className="p-2">
                                    <input
                                        type="radio"
                                        name={data.questions.id}
                                        onChange={() => handleChange(data.questions.id, data.questions.answer_a)}
                                        className="cursor-pointer"
                                    />
                                    <label
                                        dangerouslySetInnerHTML={{ __html: data.questions.answer_a }}
                                        className="ml-2 text-black cursor-default"
                                        onCopy={(e) => handlePreventCopy(e)}
                                    ></label>
                                </div>
                                <div className="p-2">
                                    <input
                                        type="radio"
                                        name={data.questions.id}
                                        onChange={() => handleChange(data.questions.id, data.questions.answer_b)}
                                        className="cursor-pointer"
                                    />
                                    <label
                                        dangerouslySetInnerHTML={{ __html: data.questions.answer_b }}
                                        className="ml-2 text-black cursor-default"
                                        onCopy={(e) => handlePreventCopy(e)}
                                    ></label>
                                </div>
                                <div className="p-2">
                                    <input
                                        type="radio"
                                        name={data.questions.id}
                                        onChange={() => handleChange(data.questions.id, data.questions.answer_c)}
                                        className="cursor-pointer"
                                    />
                                    <label
                                        dangerouslySetInnerHTML={{ __html: data.questions.answer_c }}
                                        className="ml-2 text-black cursor-default"
                                        onCopy={(e) => handlePreventCopy(e)}
                                    ></label>
                                </div>
                                <div className="p-2">
                                    <input
                                        type="radio"
                                        name={data.questions.id}
                                        onChange={() => handleChange(data.questions.id, data.questions.answer_d)}
                                        className="cursor-pointer"
                                    />
                                    <label
                                        dangerouslySetInnerHTML={{ __html: data.questions.answer_d }}
                                        className="ml-2 text-black cursor-default"
                                        onCopy={(e) => handlePreventCopy(e)}
                                    ></label>
                                </div>
                            </form>
                        </div>
                    </>
                )}
            </div>
        </>
    );
}

export default memo(TestQuestion);
