import { useState } from 'react';
import { useDispatch } from 'react-redux';
import { setModalType, setOpenEdit, setOpenModal, setTodoID } from '../../redux/features/userSlice';
import TodoList from '../TodoList/TodoList';
import TodoModal from '../TodoModal/TodoModal';
import { FaRegEdit, FaPlus } from 'react-icons/fa';
import TodoEditModal from '../TodoEditModal/TodoEditModal';

function Todo({ data, type }) {
    const dispatch = useDispatch();

    const handleOpenModal = (value) => {
        dispatch(setTodoID(value));
        dispatch(setOpenModal(true));
        dispatch(setModalType('todo-list'));
    };

    const handleEdit = (id) => {
        dispatch(setOpenEdit(true));
        dispatch(setTodoID(id));
        dispatch(setModalType('todo'));
    };

    return (
        <>
            {type == 'todo-page' ? (
                <>
                    {data.map((item, index) => (
                        <div key={index} className="w-full min-h-[200px] my-4 p-4 border-[2px] rounded">
                            <div className="w-full pb-2 mb-4 border-b-[2px]">
                                <div className="flex items-center">
                                    <h3 className="text-xl font-semibold">{item.name}</h3>
                                    <FaRegEdit
                                        onClick={() => handleEdit(item.id)}
                                        className="ml-2 text-2xl text-[#3550AF] cursor-pointer"
                                    />
                                </div>
                                <span className="italic">{item.description}</span>
                            </div>
                            <div>
                                <button
                                    onClick={() => handleOpenModal(item.id)}
                                    className="w-[150px] py-[1px] flex items-center outline-none bg-[#F7FAFF] border-[2px] rounded transition duration-300 hover:bg-[#3550AF] hover:text-[#fff]"
                                >
                                    <FaPlus className="mx-2" />
                                    <span>Thêm Todo-list</span>
                                </button>
                            </div>
                            <div className="flex">
                                {item.todo_list.map((list, index) => (
                                    <TodoList data={list} key={index} type="todo-page" />
                                ))}
                            </div>
                            <TodoModal />
                            <TodoEditModal />
                        </div>
                    ))}
                </>
            ) : (
                <>
                    <div className="flex">
                        {data?.map((item, index) => (
                            <div
                                key={index}
                                className="min-w-[200px] min-h-[180px] my-2 mr-2 p-4 bg-[#fff] border-[2px] rounded shadow-md"
                            >
                                <div className="w-full pb-2 mb-4 border-b-[2px]">
                                    <div className="flex items-center">
                                        <h3 className="text-base font-semibold">{item.name}</h3>
                                    </div>
                                    <span className="text-sm italic">{item.description}</span>
                                </div>
                                <div className="flex">
                                    {item.todo_list.map((list, index) => (
                                        <TodoList data={list} key={index} type="home-page" />
                                    ))}
                                </div>
                            </div>
                        ))}
                    </div>
                </>
            )}
        </>
    );
}

export default Todo;
