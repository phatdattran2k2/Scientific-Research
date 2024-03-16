import { useDispatch, useSelector } from 'react-redux';
import { memo, useEffect, useRef, useState } from 'react';
import { useParams } from 'react-router-dom';
import { Editor } from 'react-draft-wysiwyg';
import { EditorState } from 'draft-js';
import { setOpenNote } from '../../redux/features/userSlice';
import { convertToHTML } from 'draft-convert';
import { ToastContainer, toast } from 'react-toastify';
import systemApi from '../../api/systemApi';
import 'react-toastify/dist/ReactToastify.css';
import 'react-draft-wysiwyg/dist/react-draft-wysiwyg.css';
import { AiOutlineClose } from 'react-icons/ai';
import UserNoteList from '../UserNoteList/UserNoteList';

function NoteWrapper() {
    const userID = localStorage.userID;
    const wrapperRef = useRef();
    const { testID } = useParams();
    const { openNote } = useSelector((state) => state.user);
    const [account, setAccount] = useState();
    const [editorState, setEditorState] = useState(() => EditorState.createEmpty());
    const dispatch = useDispatch();

    useEffect(() => {
        if (openNote == true) {
            wrapperRef.current.style.opacity = '1';
            wrapperRef.current.style.transform = 'translateX(860px)';
        } else {
            wrapperRef.current.style.opacity = '0.4';
            wrapperRef.current.style.transform = 'translateX(4000px)';
        }
        getAccount();
    }, [openNote]);

    const getAccount = async () => {
        let response = null;
        try {
            response = await systemApi.getUserAccount(userID);
            setAccount(response.data);
        } catch (error) {
            console.log(error);
        }
    };

    const handleConvert = () => {
        const postNote = async () => {
            let response = null;
            try {
                response = await systemApi.postNote(userID, testID, convertToHTML(editorState.getCurrentContent()));
                response.code == 200
                    ? toast.success('Đã thêm ghi chú') && dispatch(setOpenNote(false))
                    : toast.error('Thêm ghi chú thất bại');
            } catch (error) {
                console.log(error);
            }
        };
        postNote();
    };

    const handleCloseNoteWrapper = () => {
        dispatch(setOpenNote(false));
    };

    return (
        <div
            ref={wrapperRef}
            className="z-50 w-[600px] h-screen fixed p-6 top-0 translate-x-[1500px] opacity-40 transition duration-[1000ms] ease-linear bg-white shadow-2xl"
        >
            <div className="flex flex-col">
                <div className="flex w-full items-center justify-between">
                    <h3 className="text-xl font-semibold">Ghi chú của tôi</h3>
                    <AiOutlineClose onClick={handleCloseNoteWrapper} className="text-2xl cursor-pointer" />
                </div>
                <div className="h-[200px] rounded mt-4 p-2 bg-[#F5F6FF] overflow-hidden">
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
                            maxHeight: '160px',
                            margin: '4px 0px 4px 0px',
                            padding: '4px',
                            overflow: 'scroll',
                        }}
                        editorState={editorState}
                        toolbarClassName="toolbarClassName"
                        wrapperClassName="wrapperClassName"
                        editorClassName="editorClassName"
                        onEditorStateChange={setEditorState}
                    />
                </div>
                <ToastContainer autoClose={2000} hideProgressBar={true} theme="light" pauseOnFocusLoss={false} />
                <div className="mt-4 pb-2 flex items-center justify-end border-b-[1px] border-[#F05123] ">
                    <button
                        onClick={handleConvert}
                        className="p-2 cursor-pointer outline-none transition duration-300 hover:brightness-125 rounded bg-[#F05123] text-[#fff]"
                    >
                        Tạo ghi chú
                    </button>
                </div>
                <div className="mt-4 p-2">
                    <h3 className="mb-2 text-xl font-semibold">Các ghi chú khác</h3>
                    <UserNoteList type="result-page" data={account?.user_note} />
                </div>
            </div>
        </div>
    );
}

export default NoteWrapper;

{
    /* <>
<div
    style={{ width: width }}
    ref={wrapperRef}
    className="fixed bottom-0 h-[300px] opacity-60 translate-y-[1000px] transition duration-500 ease-linear col-span-10 bg-[#fff] border-t-2 border-l-2 border-r-2 rounded border-[#999999] p-2"
>
    <div className="h-2/3">
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
            editorStyle={{ maxHeight: '160px', margin: '4px 0px 4px 0px' }}
            editorState={editorState}
            toolbarClassName="toolbarClassName"
            wrapperClassName="wrapperClassName"
            editorClassName="editorClassName"
            onEditorStateChange={setEditorState}
        />
    </div>
    <div className="w-[165px] h-1/3 flex items-center justify-between float-right">
        <button
            onClick={handleCloseNoteWrapper}
            className="p-2 cursor-pointer outline-none transition duration-300 hover:brightness-90 rounded bg-[#ECEDEF] tex-[#333]"
        >
            Hủy bỏ
        </button>
        <button
            onClick={handleConvert}
            className="p-2 cursor-pointer outline-none transition duration-300 hover:brightness-125 rounded bg-[#F05123] text-[#fff]"
        >
            Tạo ghi chú
        </button>
    </div>
    <ToastContainer autoClose={2000} hideProgressBar={true} theme="light" pauseOnFocusLoss={false} />
</div>
</> */
}
