import axios from 'axios';
import { useEffect, useRef, useState } from 'react';
import { AiOutlineClose } from 'react-icons/ai';
import { useDispatch, useSelector } from 'react-redux';
import { setOpenModal } from '../../redux/features/userSlice';
import systemApi from '../../api/systemApi';
import { useNavigate } from 'react-router-dom';

function TodoModal({}) {
    const { openModal, modalType, todoID } = useSelector((state) => state.user);
    const userID = localStorage.userID;
    const modalRef = useRef();
    const modalMenuRef = useRef();
    const [inputValue, setInputValue] = useState();
    const dispatch = useDispatch();

    useEffect(() => {
        if (openModal) {
            modalRef.current.style.opacity = '1';
            modalRef.current.style.pointerEvents = 'visible';
            modalMenuRef.current.style.transform = 'translateY(0px)';
        } else {
            modalRef.current.style.opacity = '0';
            modalRef.current.style.pointerEvents = 'none';
            modalMenuRef.current.style.transform = 'translateY(-400px)';
        }
    }, [openModal]);

    const handleSetValue = (e) => {
        const name = e.target.name;
        const value = e.target.value;
        if (modalType == 'todo-list') {
            setInputValue((values) => ({
                ...values,
                [name == '' ? 'schedule_type' : name]: value,
                user_id: userID,
                todo_id: todoID,
            }));
        } else {
            setInputValue((values) => ({ ...values, [name == '' ? 'schedule_type' : name]: value, user_id: userID }));
        }
    };

    const handleSubmit = () => {
        switch (modalType) {
            case 'todo':
                createNewTodo();
                break;
            case 'todo-list':
                createNewTodoList();
                break;
            default:
                break;
        }
    };

    const handleCloseModal = () => {
        setInputValue({});
        dispatch(setOpenModal(false));
    };

    const createNewTodo = async () => {
        let response = null;
        try {
            response = await systemApi.createTodo(inputValue);
            setInputValue({});
            window.location.reload();
        } catch (error) {
            console.log(error);
        }
    };

    const createNewTodoList = async () => {
        if (inputValue.day) {
            let response = null;
            try {
                response = await systemApi.createTodoList(inputValue);
                setInputValue({});
                window.location.reload();
            } catch (error) {
                console.log(error);
            }
        } else {
            alert('Hãy nhập thời gian!');
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
                    className="w-[440px] h-[460px] translate-y-[-400px] transition duration-300 ease-in-out p-6 flex flex-col bg-[#fff] rounded"
                >
                    <button onClick={handleCloseModal} className="block w-full outline-none">
                        <AiOutlineClose className="text-xl float-right hover:cursor-pointer" />
                    </button>
                    {modalType == 'todo' ? (
                        <>
                            <h3 className="mb-4 text-2xl font-semibold">Tạo lịch học</h3>
                            <label>Tên/tiêu đề</label>
                            <input
                                name="title"
                                onChange={(e) => handleSetValue(e)}
                                className="py-[4px] px-2 mt-2 mb-4 rounded border-2 border-[#BDC5D1] outline-none"
                            />
                            <label>Mô tả</label>
                            <input
                                name="description"
                                onChange={(e) => handleSetValue(e)}
                                className="h-[80px] pt-[4px] pb-[34px] align-top px-2 mt-2 mb-4 rounded border-2 border-[#BDC5D1] outline-none"
                            />
                        </>
                    ) : (
                        <>
                            <h3 className="mb-4 text-2xl font-semibold">Tạo To-do list</h3>
                            <h3 className="mb-4 text-base font-semibold">
                                Bạn sẽ thực hiện todo-list này vào lúc nào?
                            </h3>
                            <span className="italic mb-4 text-base">
                                Nhập 2,3,4...8 cho thứ 2,3,4...CN. Nhập 1-31 cho các ngày trong tháng. Cách nhau bằng
                                dấu phẩy.
                            </span>
                            <div className="flex items-center">
                                <div>
                                    <label>Dạng schedule</label>
                                    <select
                                        onChange={(e) => handleSetValue(e)}
                                        defaultValue={'day-in-week'}
                                        className="h-[35px] mt-[8px] mb-[16px] py-[4px] px-[8px] border-[#BDC5D1] rounded outline-none  border-2"
                                    >
                                        <option value="day-in-week">Ngày trong tuần</option>
                                        <option value="day-in-month">Ngày trong tháng</option>
                                    </select>
                                </div>
                                <div>
                                    <label>Ngày schedule</label>
                                    <input
                                        name="day"
                                        onChange={(e) => handleSetValue(e)}
                                        className="py-[4px] px-2 mt-2 mb-4 rounded border-2 border-[#BDC5D1] outline-none"
                                    />
                                </div>
                            </div>
                            <label>Tên/tiêu đề</label>
                            <input
                                name="name"
                                onChange={(e) => handleSetValue(e)}
                                className="py-[4px] px-2 mt-2 mb-4 rounded border-2 border-[#BDC5D1] outline-none"
                            />
                        </>
                    )}
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

export default TodoModal;
