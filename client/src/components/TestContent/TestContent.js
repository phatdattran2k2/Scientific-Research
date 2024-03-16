import { memo, useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import PuffLoader from 'react-spinners/PuffLoader';
import systemApi from '../../api/systemApi';
import TestQuestion from '../TestQuestion/TestQuestion';
import UserAnswer from '../UserAnswer/UserAnswer';

function TestContent({ type }) {
    const { testID, resultID } = useParams();

    const [questions, setQuestions] = useState();
    const [result, setResult] = useState([]);
    const [reading, setReading] = useState([]);
    const [spinner, setSpinner] = useState(false);

    useEffect(() => {
        setSpinner(true);

        const getQuestion = async () => {
            let response = null;
            try {
                response = await systemApi.getTypes(testID);
                setQuestions(response.questions);
                setReading(response.reading_text);
                setSpinner(false);
            } catch (error) {
                console.log(error);
            }
        };
        getQuestion();

        const getResult = async () => {
            let response = null;
            try {
                response = await systemApi.getUserAnswer(resultID);
                setQuestions(response.questions);
                setReading(response.reading_text);
                setResult(response.answers);
            } catch (error) {
                console.log(error);
            }
        };

        if (type == 'result') {
            getResult();
        }
    }, []);

    return (
        <>
            {spinner ? (
                <div className="w-full flex justify-center items-center ">
                    <PuffLoader loading={spinner} size={40} aria-label="Loading Spinner" data-testid="loader" />
                    <span className="ml-2 text-[#333]">Loading....</span>
                </div>
            ) : (
                <div className="">
                    {questions?.map((item, index) => (
                        <div key={index}>
                            {/* {result.length > 0 ? (
                                <UserAnswer data={item} index={index} result={result} reading={reading} />
                            ) : (
                                <TestQuestion key={index} data={item} reading={reading} index={index} answer={result} />
                            )} */}
                            {type == 'result' ? (
                                <UserAnswer data={item} index={index} result={result} reading={reading} />
                            ) : (
                                <TestQuestion key={index} data={item} reading={reading} index={index} answer={result} />
                            )}
                        </div>
                    ))}
                </div>
            )}
        </>
    );
}

export default memo(TestContent);
