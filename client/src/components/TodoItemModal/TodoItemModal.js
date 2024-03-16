import axios from 'axios';
import { useEffect, useRef, useState } from 'react';
import { AiOutlineClose } from 'react-icons/ai';
import { useDispatch, useSelector } from 'react-redux';
import { setOpenListItemModal, setOpenModal } from '../../redux/features/userSlice';
import systemApi from '../../api/systemApi';
import { useNavigate } from 'react-router-dom';

function TodoItemModal({}) {
    const { openListItemModal, todoListID, todoItemID, todoItemEditType } = useSelector((state) => state.user);
    const userID = localStorage.userID;
    const modalRef = useRef();
    const modalMenuRef = useRef();
    const [inputValue, setInputValue] = useState();
    const dispatch = useDispatch();

    useEffect(() => {
        if (openListItemModal) {
            modalRef.current.style.opacity = '1';
            modalRef.current.style.pointerEvents = 'visible';
            modalMenuRef.current.style.transform = 'translateY(0px)';
        } else {
            modalRef.current.style.opacity = '0';
            modalRef.current.style.pointerEvents = 'none';
            modalMenuRef.current.style.transform = 'translateY(-400px)';
        }
    }, [openListItemModal]);

    const handleSetValue = (e) => {
        const name = e.target.name;
        const value = e.target.value;

        setInputValue((values) => ({
            ...values,
            [name]: value,
            user_id: userID,
            todo_list_id: todoListID,
        }));
    };

    const handleSubmit = () => {
        switch (todoItemEditType) {
            case 'add':
                createNewTodoListItem();
                break;
            case 'edit':
                updateTodoListItem();
                break;
            default:
                break;
        }
    };

    const handleCloseModal = () => {
        setInputValue({});
        dispatch(setOpenListItemModal(false));
    };

    const createNewTodoListItem = async () => {
        if (inputValue !== undefined) {
            let response = null;
            try {
                response = await systemApi.createTodoItem(inputValue);
                setInputValue({});
                window.location.reload();
            } catch (error) {
                console.log(error);
            }
        } else {
            alert('Hãy nhập công việc!');
        }
    };

    const updateTodoListItem = async () => {
        if (inputValue !== undefined) {
            let response = null;
            try {
                response = await systemApi.updateTodoListItem(todoItemID, inputValue);
                setInputValue({});
                window.location.reload();
            } catch (error) {
                console.log(error);
            }
        } else {
            alert('Hãy nhập nội dung!');
        }
    };

    return (
        <>
            <div
                ref={modalRef}
                className="fixed top-0 left-0 right-0 z-50 h-screen mx-[-64px] flex items-center transition duration-300 ease-in-out opacity-0 pointer-events-none justify-center"
                style={{ backgroundColor: 'rgba(127,127,127, 0.4)' }}
            >
                <div
                    ref={modalMenuRef}
                    className="w-[400px] h-[440px] translate-y-[-400px] transition duration-300 ease-in-out p-6 flex flex-col bg-[#fff] rounded"
                >
                    <button onClick={handleCloseModal} className="block w-full outline-none">
                        <AiOutlineClose className="text-xl float-right hover:cursor-pointer" />
                    </button>

                    {todoItemEditType == 'edit' ? (
                        <h3 className="mb-4 text-2xl font-semibold">Chỉnh sửa task</h3>
                    ) : (
                        <h3 className="mb-4 text-2xl font-semibold">Thêm task</h3>
                    )}
                    <label>Nội dung</label>
                    <input
                        name="task"
                        onChange={(e) => handleSetValue(e)}
                        className="py-[4px] px-2 mt-2 mb-4 rounded border-2 border-[#BDC5D1] outline-none"
                    />
                    <button
                        onClick={handleSubmit}
                        className="w-[80px] mt-4 mx-auto border-[1px] border-[#333] bg-[#E8F2FF] hover:bg-[#3550AF] hover:text-[#E8F2FF] rounded text-lg transition duration-200"
                    >
                        Lưu
                    </button>
                </div>
            </div>
        </>
    );
}

export default TodoItemModal;
