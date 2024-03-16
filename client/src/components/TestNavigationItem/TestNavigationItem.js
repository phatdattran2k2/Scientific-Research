import { useDispatch, useSelector } from 'react-redux';
import { setNavigate } from '../../redux/features/testSlice';
import { memo, useEffect, useRef, useState } from 'react';

function TestNavigationItem({ data, answersData }) {
    const dispatch = useDispatch();
    const buttonRef = useRef();
    const { flags, answerChoices } = useSelector((state) => state.tests);
    const [style, setStyle] = useState();

    useEffect(() => {
        if (flags.find((item) => item == data.question_order)) {
            setStyle('h-[30px] rounded border-[1px] bg-[#FFAD3B] text-[#fafafa]');
        } else if (answerChoices.find((item) => item.id == data.question_id)) {
            setStyle('h-[30px] rounded border-[1px] bg-[#3550AF] text-[#fafafa]');
        } else {
            setStyle('h-[30px] rounded border-[1px] border-[#94BEDC]');
        }
    });

    useEffect(() => {
        if (answersData !== undefined) {
            answersData.map((item) => {
                if (item.question_id == data.question_id) {
                    if (item.isRight) {
                        buttonRef.current.style.backgroundColor = '#97DBFF';
                    } else {
                        buttonRef.current.style.backgroundColor = '#FBC8C5';
                    }
                }
            });
        }
    }, []);

    const handleNavigate = () => {
        dispatch(setNavigate(data.question_order));
    };

    return (
        <>
            <button ref={buttonRef} onClick={handleNavigate} className={style}>
                {data.question_order}
            </button>
        </>
    );
}

export default memo(TestNavigationItem);
