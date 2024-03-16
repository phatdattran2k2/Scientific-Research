import { useEffect, useState } from 'react';
import { AiOutlinePlusCircle } from 'react-icons/ai';
import { useDispatch } from 'react-redux';
import {
    setModalType,
    setOpenEdit,
    setOpenListItemModal,
    setTodoListID,
    setTodoItemEditType,
} from '../../redux/features/userSlice';
import { FaRegEdit } from 'react-icons/fa';
import systemApi from '../../api/systemApi';
import TodoItem from '../TodoItem/TodoItem';
import TodoItemModal from '../TodoItemModal/TodoItemModal';

function TodoList({ data, type }) {
    const [schedule, setSchedule] = useState('');
    const [tasks, setTasks] = useState();
    const dispatch = useDispatch();

    const handleOpenModal = (value) => {
        dispatch(setTodoListID(value));
        dispatch(setOpenListItemModal(true));
        dispatch(setTodoItemEditType('add'));
    };

    useEffect(() => {
        switch (data.schedule_type) {
            case 'day-in-week':
                setSchedule(`Thứ ${data.schedule}`);
                break;
            case 'day-in-month':
                setSchedule(`Ngày trong tháng(${data.schedule})`);
            default:
                break;
        }
        getTasks();
    }, []);

    const getTasks = async () => {
        let res = null;
        try {
            res = await systemApi.getTask(data.id);
            setTasks(res.data);
        } catch (error) {
            console.log(error);
        }
    };

    const handleEdit = (id) => {
        dispatch(setOpenEdit(true));
        dispatch(setTodoListID(id));
        dispatch(setModalType('todo-list'));
    };

    return (
        <>
            {type == 'home-page' ? (
                <div className="w-full h-full mr-2 ">
                    <h3 className="min-w-[200px] font-semibold text-base">{schedule}</h3>
                    {tasks?.map((item, index) => (
                        <TodoItem data={item} key={index} type={type} />
                    ))}
                </div>
            ) : (
                <div className="min-w-[230px] min-h-[150px] mt-2 mr-2 p-2 bg-[#F8F9FA] rounded border-2 ">
                    <div className="flex">
                        <h3 className="font-semibold">
                            {data.name}: {schedule}
                        </h3>
                        <FaRegEdit
                            onClick={() => handleEdit(data.id)}
                            className="ml-2 text-xl text-[#3550AF] cursor-pointer"
                        />
                    </div>
                    <button
                        onClick={() => handleOpenModal(data.id)}
                        className="w-[140px] mt-2 flex text-sm items-center outline-none bg-[#F7FAFF] border-[2px] rounded"
                    >
                        <AiOutlinePlusCircle className="mx-2" />
                        <span>Thêm Task</span>
                    </button>
                    {tasks?.map((item, index) => (
                        <TodoItem data={item} key={index} type={type} />
                    ))}
                    <TodoItemModal type="add" />
                </div>
            )}
        </>
    );
}

export default TodoList;
