import axios from 'axios';
import { useEffect, useRef, useState } from 'react';
import config from '../../config/config';
import { useDispatch } from 'react-redux';
import { Link, useNavigate } from 'react-router-dom';
import { AiOutlineMail, AiOutlineLock } from 'react-icons/ai';
import { setUserAccount } from '../../redux/features/userSlice';
import systemApi from '../../api/systemApi';

function SigninLayout({ callback }) {
    const [inputs, setInputs] = useState([]);
    const [forgotPassword, setForgotPassword] = useState(false);
    const errorRef = useRef();
    const nav = useNavigate();
    const dispatch = useDispatch();

    const handleSwitchLayout = () => {
        callback('signup');
    };

    const handleChange = (event) => {
        const name = event.target.name;
        const value = event.target.value;
        setInputs((values) => ({ ...values, [name]: value }));
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        if (forgotPassword) {
            errorRef.current.innerText = '';
            changePassword();
        } else {
            // console.log(inputs);
            authenticate();
        }
    };

    const authenticate = async () => {
        try {
            axios.post('http://localhost/QuizApp/server/public/api/signin', inputs).then((res) => {
                if (res.data.code == 401) {
                    errorRef.current.style.display = 'block';
                } else {
                    switch (res.data.user) {
                        case 'admin':
                            // localStorage.setItem('userID', res.data.user.id);
                            window.sessionStorage.setItem('userID', res.data.user.id);
                            nav(config.routes.admin);
                            break;
                        default:
                            localStorage.setItem('userID', res.data.user.id);
                            localStorage.setItem('avatar', res.data.user.avatar);
                            dispatch(setUserAccount(res.data.user));
                            nav(config.routes.home);
                            break;
                    }
                }
            });
        } catch (error) {
            console.log(error);
        }
    };

    const changePassword = async () => {
        let response = null;
        try {
            response = await systemApi.forgotPassword(inputs);
            switch (response.code) {
                case 400:
                    errorRef.current.style.display = 'block';
                    if (response.message == 'Account is not authenticate') {
                        errorRef.current.innerText = 'Tài khoản chưa đăng ký';
                    } else {
                        errorRef.current.innerText = 'Mật khẩu chưa chính xác';
                    }
                    break;
                default:
                    alert('Thay đổi mật khẩu thành công');
                    window.location.reload();
                    break;
            }
        } catch (error) {
            console.error();
        }
    };

    return (
        <>
            {forgotPassword ? (
                <div className="w-full h-[500px] flex justify-center my-4 items-center">
                    <div className="w-96 h-full p-4 bg-white rounded-xl flex flex-col items-center shadow-lg">
                        <div className="mb-4">
                            <h3 className="text-center text-lg font-bold mt-10 mb-2 my-2 text-[#2D033B] uppercase">
                                Welcome to EFE
                            </h3>
                            <h5 className="text-xs text-[#A8A8A8]">Enter your credentials to access your account</h5>
                        </div>
                        <div className="flex items-center">
                            <button className="w-[50px] h-[50px] mx-4 border-2 border-[#E6E6E6] flex justify-center items-center rounded-lg ">
                                <img src="/google.svg" alt="google" className="w-[30px]" />
                            </button>
                            <button className="w-[50px] h-[50px] mx-4 border-2 border-[#E6E6E6] flex justify-center items-center rounded-lg">
                                <img src="/facebook.svg" alt="facebook" className="w-[30px]" />
                            </button>
                        </div>
                        <div className="w-full h-[40px] flex items-center justify-center">
                            <hr className="w-[40%] border-[1px] border-[#D1D1D1]" />
                            <span className="pb-[1px] mx-2 text-[#A8A8A8]">Or</span>
                            <hr className="w-[40%] border-[1px] border-[#D1D1D1]" />
                        </div>
                        <form
                            onSubmit={handleSubmit}
                            className="w-72 flex flex-col justify-center items-center"
                            autoComplete="off"
                        >
                            <div className="w-full h-9 mb-3 flex items-center justify-center bg-[#ededed] rounded">
                                <AiOutlineMail className="mx-auto" />
                                <input
                                    required
                                    onChange={handleChange}
                                    type="text"
                                    className="w-10/12 h-9 pl-2 bg-[#ededed] rounded outline-none text-[#2D033B] text-sm"
                                    placeholder="Email"
                                    name="email"
                                    defaultValue=""
                                    autoComplete="off"
                                />
                            </div>
                            <div className="w-full h-9 mb-3 flex items-center justify-center bg-[#ededed] rounded">
                                <AiOutlineLock className="mx-auto" />
                                <input
                                    required
                                    onChange={handleChange}
                                    type="password"
                                    className="w-10/12 h-9 pl-2 bg-[#ededed] rounded outline-none text-[#2D033B] text-sm"
                                    placeholder="Mật khẩu mới"
                                    name="password"
                                    autoComplete="off"
                                />
                            </div>
                            <div className="w-full h-9 flex items-center justify-center bg-[#ededed] rounded">
                                <AiOutlineLock className="mx-auto" />
                                <input
                                    required
                                    onChange={handleChange}
                                    type="password"
                                    className="w-10/12 h-9 pl-2 bg-[#ededed] rounded outline-none text-[#2D033B] text-sm"
                                    placeholder="Xác nhận mật khẩu"
                                    name="confirm_password"
                                    autoComplete="off"
                                />
                            </div>
                            <h3 ref={errorRef} className="hidden mt-2 text-red-600 text-center"></h3>
                            <button className="w-full h-9 mt-3 rounded text-sm bg-blue-500 text-[#fefefe] transition ease-in-out delay-150 hover:cursor-pointer hover:brightness-125 duration-300">
                                XÁC NHẬN
                            </button>
                        </form>
                        <div className="mt-3 text-[#A8A8A8]">
                            Quay lại
                            <button onClick={() => setForgotPassword(false)} className="ml-1 underline">
                                Đăng nhập
                            </button>
                        </div>
                    </div>
                </div>
            ) : (
                <div className="w-full h-[500px] flex justify-center my-4 items-center">
                    <div className="w-96 h-full p-4 bg-white rounded-xl flex flex-col items-center shadow-lg">
                        <div className="mb-4">
                            <h3 className="text-center text-lg font-bold mt-10 mb-2 my-2 text-[#2D033B] uppercase">
                                Welcome to EFE
                            </h3>
                            <h5 className="text-xs text-[#A8A8A8]">Enter your credentials to access your account</h5>
                        </div>
                        <div className="flex items-center">
                            <button className="w-[50px] h-[50px] mx-4 border-2 border-[#E6E6E6] flex justify-center items-center rounded-lg ">
                                <img src="/google.svg" alt="google" className="w-[30px]" />
                            </button>
                            <button className="w-[50px] h-[50px] mx-4 border-2 border-[#E6E6E6] flex justify-center items-center rounded-lg">
                                <img src="/facebook.svg" alt="facebook" className="w-[30px]" />
                            </button>
                        </div>
                        <div className="w-full h-[40px] flex items-center justify-center">
                            <hr className="w-[40%] border-[1px] border-[#D1D1D1]" />
                            <span className="pb-[1px] mx-2 text-[#A8A8A8]">Or</span>
                            <hr className="w-[40%] border-[1px] border-[#D1D1D1]" />
                        </div>
                        <form
                            onSubmit={handleSubmit}
                            className="w-72 flex flex-col justify-center items-center"
                            autoComplete="off"
                        >
                            <div className="w-full h-9 mb-3 flex items-center justify-center bg-[#ededed] rounded">
                                <AiOutlineMail className="mx-auto" />
                                <input
                                    required
                                    onChange={handleChange}
                                    type="text"
                                    className="w-10/12 h-9 pl-2 bg-[#ededed] rounded outline-none text-[#2D033B] text-sm"
                                    placeholder="Email"
                                    name="email"
                                    defaultValue=""
                                    autoComplete="off"
                                />
                            </div>
                            <div className="w-full h-9 flex items-center justify-center bg-[#ededed] rounded">
                                <AiOutlineLock className="mx-auto" />
                                <input
                                    required
                                    onChange={handleChange}
                                    type="password"
                                    className="w-10/12 h-9 pl-2 bg-[#ededed] rounded outline-none text-[#2D033B] text-sm"
                                    placeholder="Mật khẩu"
                                    name="password"
                                    autoComplete="off"
                                />
                            </div>
                            <h3 ref={errorRef} className="hidden mt-2 text-red-600 text-center">
                                Email hoặc mật khẩu chưa chính xác
                            </h3>
                            <div className="w-full">
                                <button
                                    onClick={() => setForgotPassword(true)}
                                    className="float-right mt-3 underline text-[#A8A8A8]"
                                >
                                    Quên mật khẩu?
                                </button>
                            </div>
                            <button className="w-full h-9 mt-3 rounded text-sm bg-blue-500 text-[#fefefe] transition ease-in-out delay-150 hover:cursor-pointer hover:brightness-125 duration-300">
                                ĐĂNG NHẬP
                            </button>
                        </form>
                        <div className="mt-3 text-[#A8A8A8]">
                            Chưa có tài khoản?
                            <button onClick={handleSwitchLayout} className="ml-1 underline">
                                Đăng ký ngay
                            </button>
                        </div>
                    </div>
                </div>
            )}
        </>
    );
}

export default SigninLayout;
