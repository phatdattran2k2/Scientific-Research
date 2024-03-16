import { useEffect, useState } from 'react';
import { useDispatch } from 'react-redux';
import ExamList from '../../components/ExamList/ExamList';
import systemApi from '../../api/systemApi';
import Search from '../../components/Search/Search';
import { Link } from 'react-router-dom';
import { setAuth } from '../../redux/features/userSlice';
import TodoMenu from '../../components/TodoMenu/TodoMenu';

function HomeLayout() {
    const userID = localStorage.userID;
    const [recommend, setRecommend] = useState([]);
    const [popularTests, setPopularTests] = useState([]);
    const [newestTests, setNewestTests] = useState([]);
    const [user, setUser] = useState();

    const dispatch = useDispatch();

    useEffect(() => {
        const getUserName = async () => {
            let response = null;
            try {
                response = await systemApi.getUserAccount(userID);
                setUser(response.data);
                dispatch(setAuth(true));
            } catch (error) {
                console.log(error);
            }
        };
        const getRecommend = async () => {
            let response = null;
            try {
                response = await systemApi.getRecommendTest(userID);
                if (response.code == 200) {
                    setRecommend(response.data);
                } else {
                    setRecommend([]);
                }
            } catch (error) {
                console.log(error);
            }
        };
        const getPopularExams = async () => {
            let response = null;
            try {
                response = await systemApi.getPopularTest();
                setPopularTests(response.data);
            } catch (error) {
                console.log(error);
            }
        };

        const getNewestExams = async () => {
            let response = null;
            try {
                response = await systemApi.getNewestTests();
                setNewestTests(response.data);
            } catch (error) {
                console.log(error);
            }
        };

        if (userID !== undefined) {
            getUserName();
            getRecommend();
            getPopularExams();
            getNewestExams();
        } else {
            getPopularExams();
            getNewestExams();
        }
    }, []);

    return (
        <>
            <div>
                {userID !== undefined ? (
                    <div className="grid grid-cols-12">
                        <h3 className="col-span-4 mt-6 mb-[12px] text-2xl font-semibold">Xin chào, {user?.name}!</h3>
                        <Search />
                    </div>
                ) : (
                    <div className="grid grid-cols-12">
                        <h3 className="col-span-4 mt-6 mb-[12px] text-2xl font-semibold"></h3>
                        <Search />
                    </div>
                )}
                <h3 className="mt-6 mb-[12px] text-2xl font-semibold">Lịch học của bạn</h3>
                {userID == null ? (
                    <>
                        <span className="block mb-6 italic">
                            Hãy{' '}
                            {
                                <Link to="/register" className="italic text-[#35509a]">
                                    Đăng nhập
                                </Link>
                            }{' '}
                            và tạo lịch học cho riêng bạn nhé
                        </span>
                    </>
                ) : (
                    <TodoMenu data={user?.todos} />
                )}
            </div>
            {userID !== undefined ? (
                <>
                    {recommend.length !== 0 && (
                        <>
                            <h3 className="pb-[12px] text-xl font-semibold">Đề xuất cho bạn *</h3>
                            <ExamList data={recommend} type="recommend" />
                        </>
                    )}

                    <h3 className="mt-6 pb-[12px] text-xl font-semibold">Đề nổi bật</h3>
                    <ExamList data={popularTests} />
                    <h3 className="mt-6 pb-[12px] text-xl font-semibold">Đề mới nhất</h3>
                    <ExamList data={newestTests} />
                </>
            ) : (
                <>
                    <h3 className="mt-6 pb-[12px] text-xl font-semibold">Đề nổi bật</h3>
                    <ExamList data={popularTests} />
                    <h3 className="mt-6 pb-[12px] text-xl font-semibold">Đề mới nhất</h3>
                    <ExamList data={newestTests} />
                </>
            )}
        </>
    );
}

export default HomeLayout;
