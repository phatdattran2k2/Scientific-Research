import { useDispatch, useSelector } from 'react-redux';
import { setNavigate } from '../../redux/features/testSlice';
import { memo, useCallback, useEffect, useRef, useState } from 'react';

function ResultNavigationItem({ data, answersData }) {
    const dispatch = useDispatch();
    const buttonRef = useRef();
    const [style, setStyle] = useState('border-[1px] border-[#94BEDC]');

    useEffect(() => {
        answersData.map((item) => {
            if (item.question_id == data.question_id) {
                if (item.isRight) {
                    buttonRef.current.style.backgroundColor = '#97DBFF';
                } else {
                    buttonRef.current.style.backgroundColor = '#FBC8C5';
                }
            }
        });
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

export default memo(ResultNavigationItem);
