import { useState, useRef } from 'react';
import { FaTimes } from 'react-icons/fa';
import systemApi from '../../api/systemApi';
import { useDispatch } from 'react-redux';
import { setOpenListItemModal, setTodoItemEditType, setTodoItemID } from '../../redux/features/userSlice';

function TodoItem({ data, type }) {
    const closeRef = useRef();
    const [isHovering, setIsHovering] = useState(false);

    const dispatch = useDispatch();

    const handleMouseOver = () => {
        setIsHovering(true);
    };

    const handleMouseOut = () => {
        setIsHovering(false);
    };

    const handleDelete = (id) => {
        const deleteTodoListItem = async () => {
            let response = null;
            try {
                response = await systemApi.deleteTodoItem(id);
                if (response.code == 200) {
                    window.location.reload();
                } else {
                    alert('Có lỗi xảy ra vui lòng thử lại sau!');
                    window.location.reload();
                }
            } catch (error) {
                console.log(error);
            }
        };
        deleteTodoListItem();
    };

    const handleOpenEdit = () => {
        dispatch(setOpenListItemModal(true));
        dispatch(setTodoItemID(data.id));
        dispatch(setTodoItemEditType('edit'));
    };

    const handleCheck = (e) => {
        let isChecked = e.target.checked;
        const updateTodoItemStatus = async () => {
            let response = null;
            try {
                switch (isChecked) {
                    case true:
                        response = await systemApi.updateTodoItemStatus(data.id, 'true');
                        break;
                    case false:
                        response = await systemApi.updateTodoItemStatus(data.id, 'false');
                    default:
                        break;
                }
            } catch (error) {
                console.log(error);
                alert('Có lỗi xảy ra vui lòng thử lại sau!');
            }
        };
        updateTodoItemStatus();
    };

    return (
        <>
            <div className="flex items-center" onMouseOver={handleMouseOver} onMouseOut={handleMouseOut}>
                <input
                    type="checkbox"
                    defaultChecked={data.status == 'completed' && 'checked'}
                    onChange={(e) => handleCheck(e)}
                    className={
                        data.status == 'completed'
                            ? 'w-[20px] h-[18px] my-2 mx-2 outline-none accent-lime-500 cursor-pointer'
                            : 'w-[20px] h-[18px] my-2 mx-2 outline-none cursor-pointer'
                    }
                />
                <label onClick={handleOpenEdit} className={data.status == 'completed' ? 'text-lime-500' : undefined}>
                    {data.task}
                </label>
                {isHovering && type !== 'home-page' && (
                    <div ref={closeRef} onClick={() => handleDelete(data.id)}>
                        <FaTimes className="ml-2 cursor-pointer" />
                    </div>
                )}
            </div>
        </>
    );
}

export default TodoItem;
