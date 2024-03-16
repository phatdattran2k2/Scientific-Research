import { useDispatch } from 'react-redux';
import { setModalType, setOpenModal } from '../../redux/features/userSlice';
import { useEffect, useState } from 'react';
import systemApi from '../../api/systemApi';
import TodoModal from '../../components/TodoModal/TodoModal';
import Todo from '../../components/Todo/Todo';
import { AiTwotoneCalendar, AiOutlinePlus } from 'react-icons/ai';

function TodoLayout() {
    const userID = localStorage.userID;
    const [todo, setTodo] = useState([]);
    const dispatch = useDispatch();

    const handleOpenModal = () => {
        dispatch(setOpenModal(true));
        dispatch(setModalType('todo'));
    };

    useEffect(() => {
        const getTodo = async () => {
            let response = null;
            try {
                response = await systemApi.getTodos(userID);
                setTodo(response.data);
            } catch (error) {
                console.log(error);
            }
        };
        getTodo();
    }, []);

    return (
        <>
            <div className="w-full min-h-screen bg-[#fff]">
                <div className="w-full h-[100px] flex items-center rounded bg-gradient-to-r from-[#FFF] to-[#98CCFE]">
                    <div className="flex px-[100px]">
                        <AiTwotoneCalendar className="text-4xl" />
                        <h3 className="ml-2 text-3xl font-semibold">Lịch học</h3>
                        <button
                            onClick={handleOpenModal}
                            className="flex items-center w-[120px] ml-2 rounded bg-[#3550AF] hover:bg-[#1f305d] transition"
                        >
                            <AiOutlinePlus className="mx-2 text-[#fff]" />
                            <span className="text-[#fff]">Tạo lịch học</span>
                        </button>
                    </div>
                </div>
                <div className="py-2 px-[100px]">
                    {todo?.length !== 0 ? (
                        <Todo type="todo-page" data={todo} />
                    ) : (
                        <h3 className="mt-6 mb-[12px] text-xl italic">Hiện chưa có kế hoạch nào</h3>
                    )}
                </div>
            </div>
            <TodoModal />
        </>
    );
}

export default TodoLayout;
