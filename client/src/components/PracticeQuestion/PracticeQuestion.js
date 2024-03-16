import { memo, useEffect, useRef, useState } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { setAnswerChoices, setFlags } from '../../redux/features/testSlice';
import TextWrapper from '../TextWrapper/TextWrapper';

function PracticeQuestion({ index, data, pushValue }) {
    const dispatch = useDispatch();
    console.log('hello');
    const content = data.questions?.content || data.content;

    const handleChange = (id, answer) => {
        dispatch(setAnswerChoices({ id: id, choice: answer }));
    };

    return (
        <div key={index} className="px-4 my-4">
            {content ? (
                <>
                    <div className="flex">
                        <span className="block w-[30px] h-[30px] cursor-pointer text-center text-sm leading-[30px] font-semibold text-[#3550AF] rounded-full bg-[#E8F2FF] ">
                            {index + 1}
                        </span>
                        <h4
                            dangerouslySetInnerHTML={{ __html: data.content || data.questions.content }}
                            className="w-full ml-2"
                        ></h4>
                    </div>
                    <form className="w-full pl-10 mt-2 flex flex-col justify-center">
                        <div className="p-2">
                            <input
                                type="radio"
                                name={data.id || data.questions.id}
                                onChange={() =>
                                    handleChange(data.id || data.questions.id, data.answer_a || data.questions.answer_a)
                                }
                                className="cursor-pointer"
                            />
                            <label
                                dangerouslySetInnerHTML={{ __html: data.answer_a || data.questions.answer_a }}
                                className="ml-2 text-black cursor-default"
                            ></label>
                        </div>
                        <div className="p-2">
                            <input
                                type="radio"
                                name={data.id || data.questions.id}
                                onChange={() =>
                                    handleChange(data.id || data.questions.id, data.answer_b || data.questions.answer_b)
                                }
                                className="cursor-pointer"
                            />
                            <label
                                dangerouslySetInnerHTML={{ __html: data.answer_b || data.questions.answer_b }}
                                className="ml-2 text-black cursor-default"
                            ></label>
                        </div>
                        <div className="p-2">
                            <input
                                type="radio"
                                name={data.id || data.questions.id}
                                onChange={() =>
                                    handleChange(data.id || data.questions.id, data.answer_c || data.questions.answer_c)
                                }
                                className="cursor-pointer"
                            />
                            <label
                                dangerouslySetInnerHTML={{ __html: data.answer_c || data.questions.answer_c }}
                                className="ml-2 text-black cursor-default"
                            ></label>
                        </div>
                        <div className="p-2">
                            <input
                                type="radio"
                                name={data.id || data.questions.id}
                                onChange={() =>
                                    handleChange(data.id || data.questions.id, data.answer_d || data.questions.answer_d)
                                }
                                className="cursor-pointer"
                            />
                            <label
                                dangerouslySetInnerHTML={{ __html: data.answer_d || data.questions.answer_d }}
                                className="ml-2 text-black cursor-default"
                            ></label>
                        </div>
                    </form>
                </>
            ) : (
                <div key={index} className="flex">
                    <span className="block w-[30px] h-[30px] cursor-pointer text-center text-sm leading-[30px] font-semibold text-[#3550AF] rounded-full bg-[#E8F2FF] ">
                        {index + 1}
                    </span>
                    <form className="w-full pl-2 flex flex-col justify-center">
                        <div className="p-2">
                            <input
                                type="radio"
                                name={data.id || data.questions.id}
                                onChange={() =>
                                    handleChange(data.id || data.questions.id, data.answer_a || data.questions.answer_a)
                                }
                                className="cursor-pointer"
                            />
                            <label
                                dangerouslySetInnerHTML={{ __html: data.answer_a || data.questions.answer_a }}
                                className="ml-2 text-black cursor-default"
                            ></label>
                        </div>
                        <div className="p-2">
                            <input
                                type="radio"
                                name={data.id || data.questions.id}
                                onChange={() =>
                                    handleChange(data.id || data.questions.id, data.answer_b || data.questions.answer_b)
                                }
                                className="cursor-pointer"
                            />
                            <label
                                dangerouslySetInnerHTML={{ __html: data.answer_b || data.questions.answer_b }}
                                className="ml-2 text-black cursor-default"
                            ></label>
                        </div>
                        <div className="p-2">
                            <input
                                type="radio"
                                name={data.id || data.questions.id}
                                onChange={() =>
                                    handleChange(data.id || data.questions.id, data.answer_c || data.questions.answer_c)
                                }
                                className="cursor-pointer"
                            />
                            <label
                                dangerouslySetInnerHTML={{ __html: data.answer_c || data.questions.answer_c }}
                                className="ml-2 text-black cursor-default"
                            ></label>
                        </div>
                        <div className="p-2">
                            <input
                                type="radio"
                                name={data.id || data.questions.id}
                                onChange={() =>
                                    handleChange(data.id || data.questions.id, data.answer_d || data.questions.answer_d)
                                }
                                className="cursor-pointer"
                            />
                            <label
                                dangerouslySetInnerHTML={{ __html: data.answer_d || data.questions.answer_d }}
                                className="ml-2 text-black cursor-default"
                            ></label>
                        </div>
                    </form>
                </div>
            )}
        </div>
    );
}

export default memo(PracticeQuestion);
