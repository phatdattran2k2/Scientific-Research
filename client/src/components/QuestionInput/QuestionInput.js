import { Editor } from 'react-draft-wysiwyg';
import { useState } from 'react';
import { EditorState } from 'draft-js';
import { convertToHTML } from 'draft-convert';
import 'react-draft-wysiwyg/dist/react-draft-wysiwyg.css';
import { useDispatch, useSelector } from 'react-redux';
import { setNewQuestion } from '../../redux/features/adminSlice';
import { useEffect } from 'react';

function QuestionInput({}) {
    const [editorState, setEditorState] = useState(() => EditorState.createEmpty());
    const { submit } = useSelector((state) => state.admin);
    const dispatch = useDispatch();
    let content = convertToHTML(editorState.getCurrentContent());
    useEffect(() => {
        if (submit) {
            // dispatch(setNewQuestion(content));
            console.log(submit);
        }
    });

    return (
        <>
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
                    editorState={editorState}
                    toolbarClassName="toolbarClassName"
                    wrapperClassName="wrapperClassName"
                    editorClassName="editorClassName"
                    onEditorStateChange={setEditorState}
                />
            </div>
        </>
    );
}

export default QuestionInput;
