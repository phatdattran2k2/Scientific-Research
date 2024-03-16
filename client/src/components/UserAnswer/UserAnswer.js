import { useEffect, useRef, useState } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { AiOutlineCheck, AiOutlineClose } from 'react-icons/ai';
import TextWrapper from '../TextWrapper/TextWrapper';
import { revertAll } from '../../redux/features/revertAll';
import { setNavigate, setNavigateClear } from '../../redux/features/testSlice';

function UserAnswer({ data, result, reading }) {
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
    const { navigate, flags } = useSelector((state) => state.tests);
    const [text, setText] = useState(undefined);

    const dispatch = useDispatch()

    useEffect(() => {
        Object.keys(reading).map((item) => {
            if (reading[item].id == data.question_id) {
                setText(reading[item].reading_test.content);
            }
        });
    }, []);

    useEffect(() => {
        result.map((item) => {
            if (item.question_id == data.questions.id && item.isRight) {
                if (item.answer.charAt(3) === 'A') {
                    handleChecked('A', true);
                } else if (item.answer.charAt(3) === 'B') {
                    handleChecked('B', true);
                } else if (item.answer.charAt(3) === 'C') {
                    handleChecked('C', true);
                } else {
                    handleChecked('D', true);
                }
            } else if (item.question_id == data.questions.id && item.isRight == 0) {
                if (item.answer.charAt(3) === 'A') {
                    handleChecked('A', false);
                } else if (item.answer.charAt(3) === 'B') {
                    handleChecked('B', false);
                } else if (item.answer.charAt(3) === 'C') {
                    handleChecked('C', false);
                } else {
                    handleChecked('D', false);
                }
                handleShowCorrectAnswer(item.correct_answer.charAt(3));
            }
        });

        handleScroll();
    });

    const handleScroll = () => {
        if (data.question_order == navigate) {
            questionRef.current.style.backgroundColor = '#3550AF';
            questionRef.current.style.color = 'white';
            ref.current.scrollIntoView({ behavior: 'smooth', block: 'center', inline: 'center' });
            if (flags.find((item) => item == data.question_order)) {
                setTimeout(() => {
                    questionRef.current.style.backgroundColor = '#FFAD3B';
                    questionRef.current.style.color = '#fafafa';
                    dispatch(revertAll())
                }, 2000);
            } else {
                setTimeout(() => {
                    questionRef.current.style.backgroundColor = '#E8F2FF';
                    questionRef.current.style.color = '#3550AF';
                    dispatch(revertAll())
                }, 2000);
            }
        }
    };

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
            {text !== undefined ? <TextWrapper data={text} header={data.types.description} /> : undefined}
            {data.type_id !== 9 && data.type_id !== 8 ? (
                <h4 className="px-2 mb-2 font-semibold">{data.types.description}</h4>
            ) : undefined}
            <div ref={ref} className="px-4 my-4">
                {data.questions.content !== null ? (
                    <>
                        <div className="flex">
                            <span
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
                            <div ref={aWrapperRef} className="flex items-center p-2 rounded-sm">
                                <input
                                    onChange={() => handleChecked()}
                                    ref={aRef}
                                    value={data.questions.answer_a}
                                    disabled
                                    type="radio"
                                    name="a"
                                    className="cursor-pointer"
                                />
                                <label
                                    dangerouslySetInnerHTML={{ __html: data.questions.answer_a }}
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
                                    value={data.questions.answer_b}
                                    disabled
                                    type="radio"
                                    name="b"
                                    className="cursor-pointer"
                                />
                                <label
                                    dangerouslySetInnerHTML={{ __html: data.questions.answer_b }}
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
                                    value={data.questions.answer_c}
                                    disabled
                                    type="radio"
                                    name="c"
                                    className="cursor-pointer"
                                />
                                <label
                                    dangerouslySetInnerHTML={{ __html: data.questions.answer_c }}
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
                                    value={data.questions.answer_d}
                                    disabled
                                    type="radio"
                                    name="d"
                                    className="cursor-pointer"
                                />
                                <label
                                    dangerouslySetInnerHTML={{ __html: data.questions.answer_d }}
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
                                {data.question_order}
                            </span>
                            <form className="w-full pl-2 flex flex-col justify-center">
                                <div ref={aWrapperRef} className="flex items-center p-2 rounded-sm">
                                    <input
                                        onChange={() => handleChecked()}
                                        ref={aRef}
                                        value={data.questions.answer_a}
                                        disabled
                                        type="radio"
                                        name="a"
                                        className="cursor-pointer"
                                    />
                                    <label
                                        dangerouslySetInnerHTML={{ __html: data.questions.answer_a }}
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
                                        value={data.questions.answer_b}
                                        disabled
                                        type="radio"
                                        name="b"
                                        className="cursor-pointer"
                                    />
                                    <label
                                        dangerouslySetInnerHTML={{ __html: data.questions.answer_b }}
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
                                        value={data.questions.answer_c}
                                        disabled
                                        type="radio"
                                        name="c"
                                        className="cursor-pointer"
                                    />
                                    <label
                                        dangerouslySetInnerHTML={{ __html: data.questions.answer_c }}
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
                                        value={data.questions.answer_d}
                                        disabled
                                        type="radio"
                                        name="d"
                                        className="cursor-pointer"
                                    />
                                    <label
                                        dangerouslySetInnerHTML={{ __html: data.questions.answer_d }}
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

export default UserAnswer;
