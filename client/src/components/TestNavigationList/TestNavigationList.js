import { memo, useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import systemApi from '../../api/systemApi';
import TestNavigationItem from '../TestNavigationItem/TestNavigationItem';
import ResultNavigationItem from '../ResultNavigationItem/ResultNavigationItem';

function TestNavigationList({ type }) {
    const { testID, resultID } = useParams();
    const [list, setList] = useState();
    const [answers, setAnswers] = useState();

    useEffect(() => {
        if (type == 'result') {
            getAnswers();
        } else {
            getList();
        }
    }, []);

    const getList = async () => {
        let response = null;
        try {
            response = await systemApi.getDetailList(testID);
            setList(response.data);
        } catch (error) {
            console.log(error);
        }
    };

    const getAnswers = async () => {
        let response = null;
        try {
            response = await systemApi.getAnswers(resultID);
            setAnswers(response.data);
            getList();
        } catch (error) {
            console.log(error);
        }
    };

    return (
        <div className="grid grid-cols-5 gap-2 px-2 mt-2">
            {type == 'result'
                ? list?.map((item) => <ResultNavigationItem key={item.question_id} data={item} answersData={answers} />)
                : list?.map((item) => <TestNavigationItem key={item.question_id} data={item} answersData={answers} />)}
        </div>
    );
}

export default memo(TestNavigationList);
