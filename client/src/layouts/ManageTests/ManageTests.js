import 'react-draft-wysiwyg/dist/react-draft-wysiwyg.css';
import AddNewTest from '../../components/AddNewTest/AddNewTest';
import AddNewReading from '../../components/AddNewReading/AddNewReading';
import AddNewQuestion from '../../components/AddNewQuestion/AddNewQuestion';

function ManageTests() {
    return (
        <>
            <div className="w-full p-4">
                <AddNewTest />

                <AddNewReading />

                <AddNewQuestion />
            </div>
        </>
    );
}

export default ManageTests;
