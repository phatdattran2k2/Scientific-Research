import axios from 'axios';
import { useDispatch, useSelector } from 'react-redux';
import { useTimer } from 'react-timer-hook';
import { useNavigate, useParams } from 'react-router-dom';
import { revertAll } from '../../redux/features/revertAll';
import { useEffect } from 'react';

function TestTimer({ run }) {
    const { testID } = useParams();
    const userID = localStorage.userID;

    const { answerChoices } = useSelector((state) => state.tests);

    const dispatch = useDispatch();
    const navigate = useNavigate();
    const expiryTimestamp = new Date();

    expiryTimestamp.setMinutes(expiryTimestamp.getMinutes() + 60);

    const { seconds, minutes, pause, start } = useTimer({
        expiryTimestamp,
        onExpire: () => console.warn('onExpire called'),
    });

    useEffect(() => {
        if (run) {
            start();
        }
    }, [run]);

    const handleSubmitTest = () => {
        pause();
        let response = null;
        const postAnswer = async () => {
            try {
                response = await axios.post(
                    `http://localhost/QuizApp/server/public/api/user/${userID}/submit/test/${testID}`,
                    {
                        userID: userID,
                        testID: testID,
                        data: answerChoices,
                        time: { minutes: minutes, seconds: seconds },
                    },
                );
                if (response.data.code == 200) {
                    dispatch(revertAll());
                    navigate(`/test/${testID}/result/${response.data.result}/user/${userID}`);
                }
            } catch (error) {
                console.log(error);
            }
        };
        postAnswer();
    };

    return (
        <>
            <h3 className="p-2 text-lg text-center">Thời gian còn lại</h3>
            <span className="block font-semibold text-lg text-center">
                00:{minutes}:{seconds}
            </span>
            <button
                onClick={handleSubmitTest}
                className="block my-2 mx-auto w-[160px] h-[36px] rounded border-2 bg-[#3550AF] text-[#E8F2FF] text-center leading-[36px] transition duration-700 hover:opacity-80"
            >
                NỘP BÀI
            </button>
        </>
    );
}

export default TestTimer;
