import { memo, useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import systemApi from '../../api/systemApi';
import UserResultList from '../../components/UserResultList/UserResultList';
import UserNoteList from '../../components/UserNoteList/UserNoteList';
import { FaPencil } from 'react-icons/fa6';
import { useDispatch } from 'react-redux';
import { revertAll } from '../../redux/features/revertAll';

function UserAccountLayout() {
    const [account, setAccount] = useState();
    const [active, setActive] = useState('result');
    const id = localStorage.userID;
    const avatar = localStorage.avatar;
    const dispatch = useDispatch()
    
    useEffect(() => {
        dispatch(revertAll())
        const getAccount = async () => {
            let response = null;
            try {
                response = await systemApi.getUserAccount(id);
                setAccount(response.data);
            } catch (error) {
                console.log(error);
            }
        };
        getAccount();
    }, [id]);

    const handleChangeLayout = (value) => {
        setActive(value);
    };

    const asset = (path) => {
        return `http://localhost/QuizApp/server/storage/app/${path}`;
    };

    return (
        <>
            <div className="w-[768px] min-h-[680px] mt-[32px] pt-[16px] pb-4 mx-auto bg-[#fff] ">
                <div className="relative w-[126px] h-[126px] flex flex-col items-center mx-auto rounded-full bg-[#FEE2E4]">
                    {account?.avatar == null ? (
                        <img src="/user_icon.webp" alt="user_icon" className="p-[2px] border-[2px] rounded-full" />
                    ) : (
                        <img
                            src={asset(avatar)}
                            alt="avatar"
                            className="w-full h-full object-cover object-center p-[2px] border-[2px] rounded-full"
                        />
                    )}
                    <Link
                        to={`/my-account/settings/`}
                        className="p-2 bottom-0 right-0 absolute rounded-full bg-slate-50 cursor-pointer"
                    >
                        <FaPencil />
                    </Link>
                </div>
                <span className="block w-full text-center mt-2 text-2xl font-semibold ">{account?.name}</span>
                <div className="w-full  mt-[32px] px-4">
                    <div className="flex border-b-[2px] mb-4">
                        {active == 'result' ? (
                            <>
                                <Link
                                    className="pr-4 block pb-2 border-b-2 border-[#35509a]"
                                    onClick={() => handleChangeLayout('result')}
                                >
                                    <span className="text-xl text-[#35509a]">Kết quả luyện thi</span>
                                </Link>
                                <Link
                                    className='"pr-4 block pb-2 border-b-[0px] border-[#35509a] hover:border-b-[2px] border-[#35509a]'
                                    onClick={() => handleChangeLayout('note')}
                                >
                                    <span className="text-xl text-[#8c98a4] hover:text-[#35509a] ">
                                        Ghi chú cá nhân
                                    </span>
                                </Link>
                            </>
                        ) : (
                            <>
                                <Link className="mr-4" onClick={() => handleChangeLayout('result')}>
                                    <span className="block pb-2 text-xl text-[#8c98a4] hover:text-[#35509a]">
                                        Kết quả luyện thi
                                    </span>
                                </Link>
                                <Link
                                    className="pr-4 block pb-2 border-b-2 border-[#35509a]"
                                    onClick={() => handleChangeLayout('note')}
                                >
                                    <span className="text-xl text-[#35509a] ">Ghi chú cá nhân</span>
                                </Link>
                            </>
                        )}
                    </div>
                    <>
                        {active == 'result' ? (
                            <UserResultList data={account?.exam_done} />
                        ) : (
                            <UserNoteList data={account?.user_note} type="personal-page" />
                        )}
                    </>
                </div>
            </div>
        </>
    );
}

export default UserAccountLayout;
