import { Link } from 'react-router-dom';
import { useDispatch } from 'react-redux';
import { FaRegUserCircle } from 'react-icons/fa';
import { useState } from 'react';
import { setUserAccount } from '../../redux/features/userSlice';
import config from '../../config/config';
import { AiFillInstagram, AiFillFacebook, AiFillLinkedin } from 'react-icons/ai';
import ManageTests from '../ManageTests/ManageTests';
import ManageUsers from '../ManageUsers/ManageUsers';

function AdminLayout() {
    const dispatch = useDispatch();

    const handleSignOut = () => {
        dispatch(setUserAccount({}));
        window.sessionStorage.clear();
        window.location.replace('http://localhost:3000/');
    };

    const [layout, setLayout] = useState(<ManageTests />);

    const handleChangeLayout = (value) => {
        switch (value) {
            case 'manage-tests':
                setLayout(<ManageTests />);
                break;
            case 'manage-users':
                setLayout(<ManageUsers />);
                break;
        }
    };

    return (
        <>
            <div className="fixed grid grid-cols-12 w-full h-[60px] z-10 px-[64px] bg-[#FFF] shadow-lg drop-shadow-sm">
                <Link to={config.routes.home} className="col-span-4 cursor-pointer">
                    <h3 className="text-2xl  uppercase leading-[60px] font-bold">Luyện thi Tiếng Anh THPTQG</h3>
                </Link>
                <div className="col-span-8 flex justify-end items-center">
                    <button
                        onClick={handleSignOut}
                        className="block flex items-center w-[120px] h-[36px] ml-2 rounded bg-[#3550AF] hover:bg-[#1f305d] transition"
                    >
                        <span className="block w-full text-[#fff] text-center">Đăng xuất</span>
                    </button>
                </div>
            </div>
            <div className="w-full min-h-[700px] pt-[70px] pb-[32px] px-[64px] bg-[#F5F6FF] overflow-scroll">
                <div className="w-full grid grid-cols-12 gap-4 bg-[#fff]">
                    <div className="col-span-4 flex flex-col items-start p-4 border-r-[1px]">
                        <button className="block mb-2" onClick={() => handleChangeLayout('manage-tests')}>
                            <span className="text-xl font-semibold hover:text-[#35509a]">Quản lý đề thi</span>
                        </button>
                    </div>
                    <div className="col-span-8">{layout}</div>
                </div>
            </div>
            <footer className="w-full h-[300px]">
                <div
                    style={{ backgroundImage: 'url("/bg_footer.jpg")' }}
                    className="w-full h-full grid grid-cols-12 bg-cover bg-bottom bg-no-repeat py-[20px] px-[64px]"
                >
                    <div className="col-span-3">
                        <h3 className="text-xl font-semibold uppercase">English For Everyone</h3>
                        <span className="block mt-2 text-sm">@2023</span>
                        <ul className="mt-2 flex items-center">
                            <li className="hover:underline mr-2 min-w-[20px] cursor-pointer">
                                <AiFillFacebook className="text-2xl" />
                            </li>
                            <li className="hover:underline mr-2 min-w-[20px] cursor-pointer">
                                <AiFillInstagram className="text-2xl" />
                            </li>
                            <li className="hover:underline mr-2 min-w-[20px] cursor-pointer">
                                <AiFillLinkedin className="text-2xl" />
                            </li>
                        </ul>
                    </div>
                    <div className="col-span-3">
                        <h3 className="text-lg font-semibold">Về chúng tôi</h3>
                        <ul>
                            <li className="text-[#677788] hover:underline mr-2 min-w-[20px] cursor-pointer">Liên hệ</li>
                            <li className="text-[#677788] hover:underline mr-2 min-w-[20px] cursor-pointer">
                                Điều khoản bảo mật
                            </li>
                            <li className="text-[#677788] hover:underline mr-2 min-w-[20px] cursor-pointer">
                                Điều khoản sử dụng
                            </li>
                        </ul>
                    </div>
                    <div className="col-span-3">
                        <h3 className="text-lg font-semibold">Khóa học Online</h3>
                        <ul>
                            <li className="text-[#677788] hover:underline mr-2 min-w-[20px] cursor-pointer">
                                Chiến lược làm bài - Từ vựng - Ngữ pháp - Luyện nghe
                            </li>
                            <li className="text-[#677788] hover:underline mr-2 min-w-[20px] cursor-pointer">
                                Từ vựng và ngữ pháp cơ bản
                            </li>
                            <li className="text-[#677788] hover:underline mr-2 min-w-[20px] cursor-pointer">
                                Thực hành luyện tập{' '}
                            </li>
                        </ul>
                    </div>
                    <div className="col-span-3">
                        <h3 className="text-lg font-semibold">Hỗ trợ</h3>
                        <ul>
                            <li className="text-[#677788] hover:underline mr-2 min-w-[20px] cursor-pointer">
                                Hướng dẫn sử dụng
                            </li>
                            <li className="text-[#677788] hover:underline mr-2 min-w-[20px] cursor-pointer">
                                Chăm sóc khách hàng
                            </li>
                            <li className="text-[#677788] hover:underline mr-2 min-w-[20px] cursor-pointer">
                                Phản hồi ứng dụng
                            </li>
                        </ul>
                    </div>
                    <div className="mt-6 col-span-12">
                        <h3 className="text-lg font-semibold">Địa chỉ</h3>
                        <ul>
                            <li className="text-[#677788] hover:underline mr-2 min-w-[20px] cursor-pointer">
                                Trụ sở chính: 148/274/11/1E, đường 3/2, Hưng Lợi, Ninh Kiều, Cần Thơ
                            </li>
                        </ul>
                    </div>
                    <div className="col-span-12 mt-2 text-center">
                        <h3>
                            @2023 - Bản quyền thuộc về CNG Corporation. Giấy chứng nhận Đăng ký doanh nghiệp số:
                            012345678, cấp bởi Sở kế hoạch và đầu tư TP. Cần Thơ
                        </h3>
                    </div>
                </div>
            </footer>
        </>
    );
}

export default AdminLayout;
