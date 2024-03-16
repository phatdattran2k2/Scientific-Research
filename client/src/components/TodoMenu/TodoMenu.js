import axios from 'axios';
import { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import systemApi from '../../api/systemApi';
import Todo from '../Todo/Todo';
import config from '../../config/config';

function TodoMenu({ data }) {
    const userID = localStorage.userID;
    const [todos, setTodos] = useState();

    useEffect(() => {
        getTodos();
    }, []);

    const getTodos = async () => {
        let response = null;
        try {
            response = await systemApi.getTodos(userID);
            setTodos(response.data);
        } catch (error) {
            console.log(error);
        }
    };

    return (
        <>
            {data?.length !== 0 ? (
                <>
                    <Todo type="home-page" data={todos} />
                    <Link to={config.routes.todo} className="block w-[160px] mt-2 mb-6 italic text-lg text-[#35509a]">
                        Xem lịch học của tôi
                    </Link>
                </>
            ) : (
                <span className="block mb-6 italic">
                    Bạn không có lịch học hôm nay, hãy vào{' '}
                    {
                        <Link to={config.routes.todo} className="italic text-[#35509a]">
                            Lịch học của tôi
                        </Link>
                    }{' '}
                    để tạo mới nhé
                </span>
            )}
        </>
    );
}

export default TodoMenu;
