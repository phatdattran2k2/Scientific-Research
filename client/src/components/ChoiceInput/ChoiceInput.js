import { Editor } from 'react-draft-wysiwyg';
import { useState } from 'react';
import { EditorState } from 'draft-js';
import { convertToHTML } from 'draft-convert';
import 'react-draft-wysiwyg/dist/react-draft-wysiwyg.css';

function ChoiceInput({ answer }) {
    const [inputs, setInputs] = useState();

    const [editorState, setEditorState] = useState(() => EditorState.createEmpty());
    return (
        <>
            <span className="block my-2 text-lg">Đáp án {answer}</span>
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
                    editorStyle={{ height: '40px', overflow: 'hidden', margin: '4px 0px 4px 0px' }}
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

export default ChoiceInput;
