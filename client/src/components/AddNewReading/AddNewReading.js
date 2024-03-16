import { Editor } from 'react-draft-wysiwyg';
import { useState } from 'react';
import { EditorState } from 'draft-js';
import { convertToHTML } from 'draft-convert';
import 'react-draft-wysiwyg/dist/react-draft-wysiwyg.css';
import axios from 'axios';

function AddNewReading() {
    const [editorReadingState, setEditorReadingState] = useState(EditorState.createEmpty());

    // Set editor state cho nội dung reading
    const handleChangeReadingEditor = (editorState) => {
        setEditorReadingState(editorState);
    };

    const handleSubmit = () => {
        axios
            .post('http://localhost/QuizApp/server/public/api/reading/add', {
                content: convertToHTML(editorReadingState.getCurrentContent()),
            })
            .then((res) => {
                if (res.data.code == 200) {
                    alert('Thêm bài Reading thành công!');
                    window.location.reload();
                } else {
                    alert('Thêm bài Reading thất bại hãy kiểm tra lại dữ liệu');
                }
            });
    };

    return (
        <div className="mt-6">
            <h3 className="text-lg pb-2 font-semibold border-b-2 mb-2 border-[#35509a]">Thêm bài Reading</h3>
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
                    editorStyle={{ height: '200px', overflow: 'hidden', margin: '4px 0px 4px 0px' }}
                    editorState={editorReadingState}
                    toolbarClassName="toolbarClassName"
                    wrapperClassName="wrapperClassName"
                    editorClassName="editorClassName"
                    onEditorStateChange={handleChangeReadingEditor}
                />
                <button
                    onClick={() => handleSubmit('reading')}
                    className="block flex items-center w-[80px] text-[#fff] h-[36px] ml-2 rounded bg-[#3550AF] hover:bg-[#1f305d] transition"
                >
                    <span className="block w-full text-[#fff] text-center">Thêm</span>
                </button>
            </div>
        </div>
    );
}

export default AddNewReading;
