import axios from 'axios';
import { useEffect, useRef, useState } from 'react';
import { useDispatch } from 'react-redux';
import { Link, useNavigate } from 'react-router-dom';
import { AiOutlineMail, AiOutlineLock } from 'react-icons/ai';
import PuffLoader from 'react-spinners/PuffLoader';
import systemApi from '../../api/systemApi';

function SignupLayout({ callback }) {
    const errorRef = useRef();

    const [inputs, setInputs] = useState([]);
    const [error, setError] = useState();

    const handleSwitchLayout = () => {
        callback('signin');
    };

    const input = [
        { name: 'name', type: 'text', placeholder: 'Full name', error: 'none' },
        { name: 'email', type: 'text', placeholder: 'Email', error: 'Email đã tồn tại' },
        { name: 'password', type: 'password', placeholder: 'Password', error: 'none' },
        {
            name: 'confirm_password',
            type: 'password',
            placeholder: 'Confirm password',
            error: 'Password chưa chính xác',
        },
    ];

    const handleChange = (event) => {
        const name = event.target.name;
        const value = event.target.value;
        setInputs((values) => ({ ...values, [name]: value }));
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        authenticate();
    };

    const authenticate = async () => {
        errorRef.current.style.display = 'none';
        let response = null;
        try {
            response = await systemApi.signUp(inputs);
            switch (response.code) {
                case 400:
                    if (response.message == 'Email is existed') {
                        errorRef.current.style.display = 'block';
                        setError('Email đã tồn tại');
                    } else {
                        errorRef.current.style.display = 'block';
                        setError('Mật khẩu chưa chính xác');
                    }
                    break;
                default:
                    alert("Đăng ký thành công")
                    handleSwitchLayout()
                    break;
            }
        } catch (error) {
            console.error();
        }
    };

    return (
        <>
            <div className="w-full h-[500px] flex justify-center my-4 items-center">
                <div className="w-96 bg-grey-lighter min-h-screen flex flex-col">
                    <div className="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                        <div className="bg-white px-6 py-4 rounded-lg shadow-md text-black w-full">
                            <div className="mb-4">
                                <h3 className="text-center text-lg font-bold mt-10 mb-2 my-2 text-[#2D033B] uppercase">
                                    Welcome to EFE
                                </h3>
                                <h5 className="text-xs text-center text-[#A8A8A8]">
                                    Enter your informations to create your account
                                </h5>
                            </div>
                            <form autoComplete="off" onSubmit={(e) => handleSubmit(e)}>
                                {input.map((item, index) => (
                                    <div key={index}>
                                        <input
                                            required
                                            type={item.type}
                                            className="block w-full mb-4 p-3 outline-none border border-grey-light bg-[#ededed] text-[#2D033B] text-sm rounded"
                                            onChange={(e) => handleChange(e)}
                                            name={item.name}
                                            placeholder={item.placeholder}
                                        />
                                    </div>
                                ))}
                                <button
                                    // onClick={(e) => handleSubmit(e)}
                                    className="w-full h-9 mt-3 rounded text-sm bg-blue-500 text-[#fefefe] transition ease-in-out delay-150 hover:cursor-pointer hover:brightness-125 duration-300"
                                >
                                    ĐĂNG KÝ
                                </button>
                            </form>
                            <h3 ref={errorRef} className="text-center hidden mt-2 text-red-600">
                                {error}
                            </h3>
                            <div className="mt-3 mx-auto text-center text-[#A8A8A8]">
                                Đã có tài khoản?
                                <button onClick={handleSwitchLayout} className="ml-1 underline">
                                    Đăng nhập ngay
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}

export default SignupLayout;
