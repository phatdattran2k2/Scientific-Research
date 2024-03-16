import { Link, useNavigate } from 'react-router-dom';
import { useDispatch } from 'react-redux';
import { FaRegUserCircle } from 'react-icons/fa';
import { memo, useEffect, useState } from 'react';
import { setUserAccount } from '../../redux/features/userSlice';
import config from '../../config/config';

const HoverText = () => {
    const dispatch = useDispatch();
    const handleSignOut = () => {
        dispatch(setUserAccount({}));
        localStorage.clear();
        window.location.replace('http://localhost:3000/');
    };

    return (
        <div className="absolute min-w-[140px] min-h-[80px] px-2 rounded left-[-40px] bg-[#F5F6FF] shadow-lg text-center">
            <Link
                to={config.routes.userAccount}
                className="block my-2 hover:bg-[#3550AF] hover:text-[#E8F2FF] transition duration-200"
            >
                <span className="text-lg">Trang cá nhân</span>
            </Link>
            <button
                onClick={handleSignOut}
                className="w-full hover:bg-[#3550AF] hover:text-[#E8F2FF] text-lg transition duration-200"
            >
                Đăng xuất
            </button>
        </div>
    );
};

function Header() {
    const userID = localStorage.userID;
    const avatar = localStorage.avatar;
    const [isAuth, setIsAuth] = useState(false)
    const nav = useNavigate()

    useEffect(() => {
        userID !== undefined && setIsAuth(true)
    }, [])

    const [isHovering, setIsHovering] = useState(false);

    const handleMouseOver = () => {
        setIsHovering(true);
    };

    const handleMouseOut = () => {
        setIsHovering(false);
    };
    const shortcut = [
        { label: 'Luyện tập', destination: '/practice' },
        { label: 'Biểu đồ', destination: `/user/${userID}/chart` },
        { label: 'Lịch học', destination: '/studyplan/' },
    ];

    const asset = (path) => {
        return `http://localhost/QuizApp/server/storage/app/${path}`;
    };

    const handleNavigate = (destination) => {
        userID === undefined
            ? alert("Hãy đăng nhập để sử dụng tính năng!") 
            : window.location.replace(`http://localhost:3000${destination}`);
         
    }

    return (
        <>
            <div className="fixed grid grid-cols-12 w-full h-[60px] z-10 px-[64px] bg-[#FFF] shadow-lg drop-shadow-sm">
                <Link to={config.routes.home} className="col-span-4 cursor-pointer">
                    <h3 className="text-2xl  uppercase leading-[60px] font-bold">Luyện thi Tiếng Anh THPTQG</h3>
                </Link>
                <div className="col-span-8 flex justify-end items-center">
                    {shortcut.map((item, index) => (
                        <Link
                            onClick={() => handleNavigate(item.destination)}
                            key={index}
                            // to={userID === undefined ? alert("Hãy đăng nhập để sử dụng tính năng!") : item.destination}
                            // to={userID === undefined ? alert("Hãy đăng nhập để sử dụng tính năng!") : item.destination}
                            className={
                                index == shortcut.length - 1
                                    ? 'block px-4 outline-none font-semibold text-base text-[#AEAEAE]'
                                    : 'block px-4 outline-none font-semibold border-r-2 border-[#BABABA] text-base text-[#AEAEAE]'
                            }
                        >
                            {item.label}
                        </Link>
                    ))}
                    {userID == null ? (
                        <Link
                            to={config.routes.register}
                            className="block flex items-center w-[120px] h-[36px] ml-2 rounded bg-[#3550AF] hover:bg-[#1f305d] transition"
                        >
                            <span className="block w-full text-[#fff] text-center">Đăng nhập</span>
                        </Link>
                    ) : (
                        <>
                            {avatar == undefined || avatar == 'null' ? (
                                <div className="relative" onMouseOver={handleMouseOver} onMouseOut={handleMouseOut}>
                                    <Link to={config.routes.userAccount}>
                                        <FaRegUserCircle className="ml-6 rounded text-2xl transition-all hover:cursor-pointer hover:text-[#333]" />
                                    </Link>
                                    {isHovering && <HoverText />}
                                </div>
                            ) : (
                                <div className="relative" onMouseOver={handleMouseOver} onMouseOut={handleMouseOut}>
                                    <Link
                                        to={config.routes.userAccount}
                                        className="block ml-4 w-[40px] h-[40px] overflow-hidden"
                                    >
                                        <img
                                            className="w-full h-full rounded-full object-cover object-center"
                                            src={asset(avatar)}
                                            alt="avatar"
                                        />
                                    </Link>
                                    {isHovering && <HoverText />}
                                </div>
                            )}
                        </>
                    )}
                </div>
            </div>
        </>
    );
}

export default memo(Header);
