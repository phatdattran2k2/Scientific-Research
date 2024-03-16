import { Editor } from 'react-draft-wysiwyg';
import { useState, useEffect } from 'react';
import { EditorState } from 'draft-js';
import { convertToHTML } from 'draft-convert';
import 'react-draft-wysiwyg/dist/react-draft-wysiwyg.css';
import systemApi from '../../api/systemApi';
import axios from 'axios';

function AddNewQuestion() {
    const [inputs, setInputs] = useState();

    const [editorQuestionState, setEditorQuestionState] = useState(EditorState.createEmpty());
    const [editorAnswerAState, setEditorAnswerAState] = useState(EditorState.createEmpty());
    const [editorAnswerBState, setEditorAnswerBState] = useState(EditorState.createEmpty());
    const [editorAnswerCState, setEditorAnswerCState] = useState(EditorState.createEmpty());
    const [editorAnswerDState, setEditorAnswerDState] = useState(EditorState.createEmpty());
    const [selectedReading, setSelectedReading] = useState('');
    const [selectedQuestionType, setSelectedQuestionType] = useState('');
    const [selectedBelongsToTest, setSelectedBelongsToTest] = useState('');
    const [selectedCorrectAnswer, setSelectedCorrectAnswer] = useState('');

    const [readingID, setReadingID] = useState();
    const [test, setTest] = useState();

    useEffect(() => {
        const getReadingID = async () => {
            let response = null;
            try {
                response = await systemApi.getAllReadingID();
                setReadingID(response);
            } catch (error) {
                console.error();
            }
        };

        const getAllTests = async () => {
            let response = null;
            try {
                response = await systemApi.getAllExams();
                setTest(response.data);
            } catch (error) {
                console.error();
            }
        };

        getReadingID();
        getAllTests();
    }, []);

    const handleSelected = (e, type) => {
        switch (type) {
            case 'reading':
                setSelectedReading(e.target.value);
                break;
            case 'question_type':
                setSelectedQuestionType(e.target.value);
                break;
            case 'belongsTo_test':
                setSelectedBelongsToTest(e.target.value);
                break;
            case 'correct_answer':
                setSelectedCorrectAnswer(e.target.value);
                break;
            default:
                break;
        }
    };

    const handleChange = (e) => {
        const name = e.target.name;
        const value = e.target.value;
        setInputs((values) => ({ ...values, [name]: value }));
    };

    // Set editor state cho nội dung câu hỏi
    const handleChangeEditorQuestion = (editorState) => {
        setEditorQuestionState(editorState);
    };

    // Set editor state cho đáp án
    const handleChangeEditorAnswerA = (editorState) => {
        setEditorAnswerAState(editorState);
    };
    const handleChangeEditorAnswerB = (editorState) => {
        setEditorAnswerBState(editorState);
    };
    const handleChangeEditorAnswerC = (editorState) => {
        setEditorAnswerCState(editorState);
    };
    const handleChangeEditorAnswerD = (editorState) => {
        setEditorAnswerDState(editorState);
    };

    const answers = [
        { name: 'A', state: editorAnswerAState, onChange: handleChangeEditorAnswerA },
        { name: 'B', state: editorAnswerBState, onChange: handleChangeEditorAnswerB },
        { name: 'C', state: editorAnswerCState, onChange: handleChangeEditorAnswerC },
        { name: 'D', state: editorAnswerDState, onChange: handleChangeEditorAnswerD },
    ];

    const handleSubmit = () => {
        const data = {
            reading: selectedReading,
            question_type: selectedQuestionType,
            belongs_to: selectedBelongsToTest,
            correct_answer: selectedCorrectAnswer,
            question_order: inputs.question_number,
            question_content: convertToHTML(editorQuestionState.getCurrentContent()),
            answer_a: convertToHTML(editorAnswerAState.getCurrentContent()),
            answer_b: convertToHTML(editorAnswerBState.getCurrentContent()),
            answer_c: convertToHTML(editorAnswerCState.getCurrentContent()),
            answer_d: convertToHTML(editorAnswerDState.getCurrentContent()),
        };
        const isEmptyOrNull = isKeyEmptyOrNull(data);
        if (isEmptyOrNull) {
            alert('Thông tin không được trống!');
        } else {
            axios.post('http://localhost/QuizApp/server/public/api/question/add', data).then((res) => {
                if (res.data.message == 'success') {
                    alert('Thêm câu hỏi thành công!');
                    window.location.reload();
                }
            });
        }
    };

    const isKeyEmptyOrNull = (object) => {
        const keys = Object.keys(object);

        for (const key of keys) {
            if (object[key] == '') {
                return true;
            }
        }

        return false;
    };

    return (
        <div className="mt-6">
            <h3 className="text-lg pb-2 font-semibold mb-2 border-b-2 border-[#35509a]">Thêm câu hỏi</h3>
            <div className="w-full grid grid-cols-12 gap-4">
                <div className="col-span-6">
                    <span className="block my-2 text-lg">Nội dung câu hỏi</span>
                    <div className="bg-[#F5F6FF] p-2">
                        <Editor
                            toolbar={{
                                options: ['inline', 'list'],
                                inline: {
                                    inDropdown: false,
                                    className: undefined,
                                    component: undefined,
                                    dropdownClassName: undefined,
                                    options: ['bold', 'italic'],
                                },
                                list: {
                                    inDropdown: false,
                                    className: undefined,
                                    component: undefined,
                                    dropdownClassName: undefined,
                                    options: ['unordered', 'ordered'],
                                },
                            }}
                            editorStyle={{ height: '140px', overflow: 'hidden', margin: '4px 0px 4px 0px' }}
                            editorState={editorQuestionState}
                            toolbarClassName="toolbarClassName"
                            wrapperClassName="wrapperClassName"
                            editorClassName="editorClassName"
                            onEditorStateChange={handleChangeEditorQuestion}
                        />
                    </div>
                    <div className="flex items-center mt-4">
                        <span className="block w-[120px] my-2 text-lg">Thuộc bài đọc*</span>
                        <select
                            required
                            name="reading_id"
                            value={selectedReading}
                            onChange={(e) => handleSelected(e, 'reading')}
                            className="ml-4 min-w-[50px] h-[30px] border-2 rounded outline-none "
                        >
                            <option disabled value="">
                                - ID bài đọc -
                            </option>
                            <option value="0" className="text-center">
                                Không
                            </option>
                            {readingID?.map((item, index) => (
                                <option key={index} className="text-center" value={item.id}>
                                    {item.id}
                                </option>
                            ))}
                        </select>
                    </div>
                    <div className="flex items-center mt-4">
                        <span className="block w-[120px] my-2 text-lg">Loại câu hỏi*</span>
                        <select
                            required
                            name="question_type"
                            value={selectedQuestionType}
                            onChange={(e) => handleSelected(e, 'question_type')}
                            className="ml-4 h-[30px] px-2 border-2 rounded outline-none "
                        >
                            <option disabled value="">
                                - Thể loại -
                            </option>
                            <option value="1">Kết hợp</option>
                            <option value="2">Phát âm</option>
                            <option value="3">Nhấn âm</option>
                            <option value="4">Trái nghĩa</option>
                            <option value="5">Hoàn thành câu</option>
                            <option value="6">Chọn câu đúng</option>
                            <option value="7">Chọn từ đồng nghĩa</option>
                            <option value="8">Điền vào ô trống</option>
                            <option value="9">Câu reading</option>
                            <option value="10">Chọn vị trí sai</option>
                            <option value="11">Chọn mệnh đề đồng nghĩa</option>
                        </select>
                    </div>
                    <div className="flex items-center mt-4">
                        <span className="block w-[120px] my-2 text-lg">Thuộc đề thi*</span>
                        <select
                            required
                            name="belongs_to_test"
                            value={selectedBelongsToTest}
                            onChange={(e) => handleSelected(e, 'belongsTo_test')}
                            className="ml-4 min-w-[240px] h-[30px] px-2 border-2 rounded outline-none "
                        >
                            <option disabled value="">
                                - Bài thi -
                            </option>
                            <option value="0">Không</option>
                            {test?.map((item, index) => (
                                <option key={index} className="" value={item.id}>
                                    {item.name}
                                </option>
                            ))}
                        </select>
                    </div>
                    <div className="flex items-center mt-4">
                        <span className="block w-[120px] my-2 text-lg">Câu số*</span>
                        <input
                            required
                            type="text"
                            name="question_number"
                            placeholder="Số thứ tự"
                            className="ml-4 px-2 rounded border-2 border-[#BDC5D1] outline-none"
                            onChange={handleChange}
                        />
                    </div>
                    <div className="flex items-center mt-4">
                        <span className="block w-[120px] my-2 text-lg">Đáp án đúng*</span>
                        <select
                            required
                            name="correct_answer"
                            value={selectedCorrectAnswer}
                            onChange={(e) => handleSelected(e, 'correct_answer')}
                            className="ml-4 min-w-[240px] h-[30px] px-2 border-2 rounded outline-none "
                        >
                            <option disabled value="">
                                - Đáp án đúng -
                            </option>
                            {answers.map((item, index) => (
                                <option key={index} value={item.name}>
                                    {item.name}
                                </option>
                            ))}
                        </select>
                    </div>
                </div>
                <div className="col-span-6">
                    {answers.map((item, index) => (
                        <div key={index}>
                            <span className="block my-2 text-lg">Đáp án {item.name}</span>
                            <div className="bg-[#F5F6FF] mb-2 p-2">
                                <Editor
                                    toolbar={{
                                        options: ['inline', 'list'],
                                        inline: {
                                            inDropdown: false,
                                            className: undefined,
                                            component: undefined,
                                            dropdownClassName: undefined,
                                            options: ['bold', 'italic'],
                                        },
                                        list: {
                                            inDropdown: false,
                                            className: undefined,
                                            component: undefined,
                                            dropdownClassName: undefined,
                                            options: ['unordered', 'ordered'],
                                        },
                                    }}
                                    editorStyle={{
                                        height: '40px',
                                        overflow: 'hidden',
                                        margin: '4px 0px 4px 0px',
                                    }}
                                    editorState={item.state}
                                    toolbarClassName="toolbarClassName"
                                    wrapperClassName="wrapperClassName"
                                    editorClassName="editorClassName"
                                    onEditorStateChange={item.onChange}
                                />
                            </div>
                        </div>
                        // <ChoiceInput key={index} onChange={handleChange} answer={item} />
                    ))}
                </div>
            </div>
            <button
                onClick={() => handleSubmit('question')}
                className="block flex items-center w-[80px] text-[#fff] h-[36px] mt-2 ml-2 rounded bg-[#3550AF] hover:bg-[#1f305d] transition"
            >
                <span className="block w-full text-[#fff] text-center">Thêm</span>
            </button>
        </div>
    );
}

export default AddNewQuestion;
