import PracticeQuestion from '../../components/PracticeQuestion/PracticeQuestion';
import PracticeQuestionResult from '../../components/PracitceQuestionResult/PracticeQuestionResult';

function ReadingPracticeWrapper({ data, result, viewResult }) {
    return (
        <>
            <div dangerouslySetInnerHTML={{ __html: data.content }} className="px-4 my-2 text-lg"></div>
            {viewResult ? (
                <>
                    {result?.map((item, index) => (
                        <PracticeQuestionResult key={index} index={index} data={item} />
                    ))}
                </>
            ) : (
                <>
                    {data.questions.map((item, index) => (
                        <PracticeQuestion key={index} index={index} data={item} />
                    ))}
                </>
            )}
        </>
    );
}

export default ReadingPracticeWrapper;
