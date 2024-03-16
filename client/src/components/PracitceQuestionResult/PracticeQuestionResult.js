import { useEffect, useRef, useState } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { AiOutlineCheck, AiOutlineClose } from 'react-icons/ai';
import TextWrapper from '../TextWrapper/TextWrapper';

function PracticeQuestionResult({ data, index }) {
    const aWrapperRef = useRef();
    const bWrapperRef = useRef();
    const cWrapperRef = useRef();
    const dWrapperRef = useRef();

    const aRef = useRef();
    const bRef = useRef();
    const cRef = useRef();
    const dRef = useRef();

    const iconARef = useRef();
    const iconBRef = useRef();
    const iconCRef = useRef();
    const iconDRef = useRef();

    const iconAWrongRef = useRef();
    const iconBWrongRef = useRef();
    const iconCWrongRef = useRef();
    const iconDWrongRef = useRef();

    const ref = useRef();
    const questionRef = useRef();

    useEffect(() => {
        if (data.choice == data.correct_answer) {
            if (data.choice.charAt(3) === 'A') {
                handleChecked('A', true);
            } else if (data.choice.charAt(3) === 'B') {
                handleChecked('B', true);
            } else if (data.choice.charAt(3) === 'C') {
                handleChecked('C', true);
            } else {
                handleChecked('D', true);
            }
        } else if (data.choice !== data.correct_answer) {
            if (data.choice.charAt(3) === 'A') {
                handleChecked('A', false);
            } else if (data.choice.charAt(3) === 'B') {
                handleChecked('B', false);
            } else if (data.choice.charAt(3) === 'C') {
                handleChecked('C', false);
            } else {
                handleChecked('D', false);
            }
            handleShowCorrectAnswer(data.correct_answer.charAt(3));
        }
    }, []);

    const handleChecked = (value, boolean) => {
        switch (boolean) {
            case true:
                switch (value) {
                    case 'A':
                        aRef.current.setAttribute('checked', true);
                        aWrapperRef.current.style.backgroundColor = '#97DBFF';
                        iconARef.current.style.display = 'block';
                        break;
                    case 'B':
                        bRef.current.setAttribute('checked', true);
                        bWrapperRef.current.style.backgroundColor = '#97DBFF';
                        iconBRef.current.style.display = 'block';
                        break;
                    case 'C':
                        cRef.current.setAttribute('checked', true);
                        cWrapperRef.current.style.backgroundColor = '#97DBFF';
                        iconCRef.current.style.display = 'block';
                        break;
                    case 'D':
                        dRef.current.setAttribute('checked', true);
                        dWrapperRef.current.style.backgroundColor = '#97DBFF';
                        iconDRef.current.style.display = 'block';
                        break;
                }
                break;
            case false:
                switch (value) {
                    case 'A':
                        aRef.current.setAttribute('checked', true);
                        aWrapperRef.current.style.backgroundColor = '#FBC8C5';
                        iconAWrongRef.current.style.display = 'block';
                        break;
                    case 'B':
                        bRef.current.setAttribute('checked', true);
                        bWrapperRef.current.style.backgroundColor = '#FBC8C5';
                        iconBWrongRef.current.style.display = 'block';
                        break;
                    case 'C':
                        cRef.current.setAttribute('checked', true);
                        cWrapperRef.current.style.backgroundColor = '#FBC8C5';
                        iconCWrongRef.current.style.display = 'block';
                        break;
                    case 'D':
                        dRef.current.setAttribute('checked', true);
                        dWrapperRef.current.style.backgroundColor = '#FBC8C5';
                        iconDWrongRef.current.style.display = 'block';
                        break;
                }
                break;
        }
    };

    const handleShowCorrectAnswer = (value) => {
        switch (value) {
            case 'A':
                aRef.current.setAttribute('checked', true);
                aWrapperRef.current.style.backgroundColor = '#97DBFF';
                iconARef.current.style.display = 'block';
                break;
            case 'B':
                bRef.current.setAttribute('checked', true);
                bWrapperRef.current.style.backgroundColor = '#97DBFF';
                iconBRef.current.style.display = 'block';
                break;
            case 'C':
                cRef.current.setAttribute('checked', true);
                cWrapperRef.current.style.backgroundColor = '#97DBFF';
                iconCRef.current.style.display = 'block';
                break;
            case 'D':
                dRef.current.setAttribute('checked', true);
                dWrapperRef.current.style.backgroundColor = '#97DBFF';
                iconDRef.current.style.display = 'block';
                break;
        }
    };

    return (
        <>
            <div ref={ref} className="px-4 my-4">
                {data.content !== null ? (
                    <>
                        <div className="flex">
                            <span
                                ref={questionRef}
                                className="block w-[30px] h-[30px] cursor-pointer text-center text-sm leading-[30px] font-semibold text-[#3550AF] rounded-full bg-[#E8F2FF] "
                            >
                                {index + 1}
                            </span>
                            <h4 dangerouslySetInnerHTML={{ __html: data.content }} className="w-full ml-2"></h4>
                        </div>
                        <form className="w-full pl-10 mt-2 flex flex-col justify-center">
                            <div ref={aWrapperRef} className="flex items-center p-2 rounded-sm">
                                <input
                                    onChange={() => handleChecked()}
                                    ref={aRef}
                                    value={data.answer_a}
                                    disabled
                                    type="radio"
                                    name="a"
                                    className="cursor-pointer"
                                />
                                <label
                                    dangerouslySetInnerHTML={{ __html: data.answer_a }}
                                    className="w-full ml-2 text-black cursor-default"
                                ></label>
                                <div ref={iconARef} className="hidden">
                                    <AiOutlineCheck className="text-[#fafafa] text-lg" />
                                </div>
                                <div ref={iconAWrongRef} className="hidden">
                                    <AiOutlineClose />
                                </div>
                            </div>
                            <div ref={bWrapperRef} className="flex items-center p-2 rounded-sm">
                                <input
                                    onChange={() => handleChecked()}
                                    ref={bRef}
                                    value={data.answer_b}
                                    disabled
                                    type="radio"
                                    name="b"
                                    className="cursor-pointer"
                                />
                                <label
                                    dangerouslySetInnerHTML={{ __html: data.answer_b }}
                                    className="w-full ml-2 text-black cursor-default"
                                ></label>
                                <div ref={iconBRef} className="hidden">
                                    <AiOutlineCheck className="text-[#fafafa] text-lg" />
                                </div>
                                <div ref={iconBWrongRef} className="hidden">
                                    <AiOutlineClose />
                                </div>
                            </div>
                            <div ref={cWrapperRef} className="flex items-center p-2 rounded-sm">
                                <input
                                    onChange={() => handleChecked()}
                                    ref={cRef}
                                    value={data.answer_c}
                                    disabled
                                    type="radio"
                                    name="c"
                                    className="cursor-pointer"
                                />
                                <label
                                    dangerouslySetInnerHTML={{ __html: data.answer_c }}
                                    className="w-full ml-2 text-black cursor-default"
                                ></label>
                                <div ref={iconCRef} className="hidden">
                                    <AiOutlineCheck className="text-[#fafafa] text-lg" />
                                </div>
                                <div ref={iconCWrongRef} className="hidden">
                                    <AiOutlineClose />
                                </div>
                            </div>
                            <div ref={dWrapperRef} className="flex items-center p-2 rounded-sm">
                                <input
                                    onChange={() => handleChecked()}
                                    ref={dRef}
                                    value={data.answer_d}
                                    disabled
                                    type="radio"
                                    name="d"
                                    className="cursor-pointer"
                                />
                                <label
                                    dangerouslySetInnerHTML={{ __html: data.answer_d }}
                                    className="w-full ml-2 text-black cursor-default"
                                ></label>
                                <div ref={iconDRef} className="hidden">
                                    <AiOutlineCheck className="text-[#fafafa] text-lg" />
                                </div>
                                <div ref={iconDWrongRef} className="hidden">
                                    <AiOutlineClose />
                                </div>
                            </div>
                        </form>
                    </>
                ) : (
                    <>
                        <div className="flex">
                            <span
                                ref={questionRef}
                                className="block w-[30px] h-[30px] cursor-pointer text-center text-sm leading-[30px] font-semibold text-[#3550AF] rounded-full bg-[#E8F2FF] "
                            >
                                {index + 1}
                            </span>
                            <form className="w-full pl-2 flex flex-col justify-center">
                                <div ref={aWrapperRef} className="flex items-center p-2 rounded-sm">
                                    <input
                                        onChange={() => handleChecked()}
                                        ref={aRef}
                                        value={data.answer_a}
                                        disabled
                                        type="radio"
                                        name="a"
                                        className="cursor-pointer"
                                    />
                                    <label
                                        dangerouslySetInnerHTML={{ __html: data.answer_a }}
                                        className="w-full ml-2 text-black cursor-default"
                                    ></label>
                                    <div ref={iconARef} className="hidden">
                                        <AiOutlineCheck className="text-[#fafafa] text-lg" />
                                    </div>
                                    <div ref={iconAWrongRef} className="hidden">
                                        <AiOutlineClose />
                                    </div>
                                </div>
                                <div ref={bWrapperRef} className="flex items-center p-2 rounded-sm">
                                    <input
                                        onChange={() => handleChecked()}
                                        ref={bRef}
                                        value={data.answer_b}
                                        disabled
                                        type="radio"
                                        name="b"
                                        className="cursor-pointer"
                                    />
                                    <label
                                        dangerouslySetInnerHTML={{ __html: data.answer_b }}
                                        className="w-full ml-2 text-black cursor-default"
                                    ></label>
                                    <div ref={iconBRef} className="hidden">
                                        <AiOutlineCheck className="text-[#fafafa] text-lg" />
                                    </div>
                                    <div ref={iconBWrongRef} className="hidden">
                                        <AiOutlineClose />
                                    </div>
                                </div>
                                <div ref={cWrapperRef} className="flex items-center p-2 rounded-sm">
                                    <input
                                        onChange={() => handleChecked()}
                                        ref={cRef}
                                        value={data.answer_c}
                                        disabled
                                        type="radio"
                                        name="c"
                                        className="cursor-pointer"
                                    />
                                    <label
                                        dangerouslySetInnerHTML={{ __html: data.answer_c }}
                                        className="w-full ml-2 text-black cursor-default"
                                    ></label>
                                    <div ref={iconCRef} className="hidden">
                                        <AiOutlineCheck className="text-[#fafafa] text-lg" />
                                    </div>
                                    <div ref={iconCWrongRef} className="hidden">
                                        <AiOutlineClose />
                                    </div>
                                </div>
                                <div ref={dWrapperRef} className="flex items-center p-2 rounded-sm">
                                    <input
                                        onChange={() => handleChecked()}
                                        ref={dRef}
                                        value={data.answer_d}
                                        disabled
                                        type="radio"
                                        name="d"
                                        className="cursor-pointer"
                                    />
                                    <label
                                        dangerouslySetInnerHTML={{ __html: data.answer_d }}
                                        className="w-full ml-2 text-black cursor-default"
                                    ></label>
                                    <div ref={iconDRef} className="hidden">
                                        <AiOutlineCheck className="text-[#fafafa] text-lg" />
                                    </div>
                                    <div ref={iconDWrongRef} className="hidden">
                                        <AiOutlineClose />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </>
                )}
            </div>
        </>
    );
}

export default PracticeQuestionResult;
