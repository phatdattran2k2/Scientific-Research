import { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import systemApi from '../../api/systemApi';
import TestQuestion from '../TestQuestion/TestQuestion';
import TextWrapper from '../TextWrapper/TextWrapper';
import { useSelector, useDispatch } from 'react-redux';
import { setLoading } from '../../redux/features/testSlice';
import UserAnswer from '../UserAnswer/UserAnswer';

function TestPart({ data, part, questionData, resultData, reading }) {
    const { testID } = useParams();
    const [questions, setQuestions] = useState([]);
    const [newQuestionData, setNewQuestionData] = useState();
    const [secondQuestionData, setSecondQuestionData] = useState();
    const [blankText, setBlankText] = useState([]);
    const [text, setText] = useState([]);
    const [secondText, setSecondText] = useState([]);

    useEffect(() => {
        if (data.id == 8 || data.id == 9) {
            const getText = async () => {
                let response = null;
                try {
                    response = await systemApi.getReadingWithType(data.id, testID);
                    setText(response.reading_test.content);
                } catch (error) {
                    console.log(error);
                }
            };
            getText();
        }

        // if (data.id == 8) {
        //     const getText = async () => {
        //         let response = null;
        //         try {
        //             response = await systemApi.getReadingWithType(data.id, testID);
        //             console.log(response);
        //             // setText(response.reading_test.content);
        //             setBlankText(response.reading_test.content);
        //         } catch (error) {
        //             console.log(error);
        //         }
        //     };
        //     getText();
        // } else if (data.id == 9) {
        //     const getText = async () => {
        //         let response = null;
        //         try {
        //             response = await systemApi.getReadingWithType(data.id, testID);
        //             setText(response[0].content);
        //             setSecondText(response[1].content);
        //             setNewQuestionData(response[0].questions);
        //             setSecondQuestionData(response[1].questions);
        //         } catch (error) {
        //             console.log(error);
        //         }
        //     };
        //     getText();
        // }
        questionData.map((item) => {
            if (item.type_id == data.id) {
                setQuestions((current) => [...current, item]);
            }
        });
    }, []);

    return (
        <>
            <h4 className="px-4 font-semibold">
                Part {part}: {data.description}
            </h4>
            {/* {data?.id == 8 ? ( */}
            <>{blankText !== undefined ? <TextWrapper data={blankText} /> : undefined}</>
            {/* ) : (
                <>
                    <TextWrapper data={text} />
                </>
            )} */}
            {questions?.map((item, index) => (
                <div key={index}>
                    {resultData.length > 0 ? (
                        <UserAnswer data={item} index={index} result={resultData} />
                    ) : (
                        <TestQuestion data={item} index={index} result={resultData} />
                    )}
                </div>
            ))}
        </>
    );
}

export default TestPart;
