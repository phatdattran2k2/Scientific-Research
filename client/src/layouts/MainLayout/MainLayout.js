import { useEffect, useState } from 'react';
import Header from '../../components/Header/Header';
import HomeLayout from '../HomeLayout/HomeLayout';
import ExamLayout from '../ExamLayout/ExamLayout';
import ResultLayout from '../ResultLayout/ResultLayout';
import UserAccountLayout from '../UserAccountLayout/UserAccountLayout';
import StaticalChartLayout from '../StaticalChartLayout/StaticalChartLayout';
import SearchLayout from '../SearchLayout/SearchLayout';
import UserAccountSettingsLayout from '../UserAccountSettingsLayout/UserAccountSettingsLayout';
import TodoLayout from '../TodoLayout/TodoLayout';
import AuthLayout from '../AuthLayout/AuthLayout';
import AdminLayout from '../AdminLayout/AdminLayout';
import { AiFillInstagram, AiFillFacebook, AiFillLinkedin } from 'react-icons/ai';
import PraticeLayout from '../PracticeLayout/PracticeLayout';
import ExerciseLayout from '../ExerciseLayout/ExerciseLayout';
import ForgotPasswordLayout from '../ForgotPasswordLayout/ForgotPasswordLayout';

function MainLayout({ type }) {
    const [layout, setLayout] = useState();

    useEffect(() => {
        switch (type) {
            case 'register':
                setLayout(<AuthLayout />);
                break;
            case 'home':
                setLayout(<HomeLayout />);
                break;
            case 'test':
                setLayout(<ExamLayout />);
                break;
            case 'result':
                setLayout(<ResultLayout />);
                break;
            case 'account':
                setLayout(<UserAccountLayout />);
                break;
            case 'staticalChart':
                setLayout(<StaticalChartLayout />);
                break;
            case 'search':
                setLayout(<SearchLayout />);
                break;
            case 'account-settings':
                setLayout(<UserAccountSettingsLayout />);
                break;
            case 'plan':
                setLayout(<TodoLayout />);
                break;
            case 'admin':
                setLayout(<AdminLayout />);
                break;
            case 'practice':
                setLayout(<PraticeLayout />);
                break;
            case 'exercise':
                setLayout(<ExerciseLayout />);
                break;
            case 'forgot':
                setLayout(<ForgotPasswordLayout/>)
                break;
            default:
                setLayout(<HomeLayout />);
                break;
        }
    }, [type]);
    // ECEDEF
    return (
        <>
            <Header />
            <div className="w-full pt-[70px] pb-[32px] px-[64px] bg-[#F5F6FF] overflow-hidden">{layout}</div>
            {type !== 'test' && type !== 'result' ? (
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
                                <li className="text-[#677788] hover:underline mr-2 min-w-[20px] cursor-pointer">
                                    Liên hệ
                                </li>
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
            ) : undefined}
        </>
    );
}

export default MainLayout;
