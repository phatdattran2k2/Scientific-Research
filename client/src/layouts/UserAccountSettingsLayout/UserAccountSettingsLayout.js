import axios from 'axios';
import { useEffect, useRef, useState } from 'react';
import systemApi from '../../api/systemApi';

function UserAccountSettingsLayout() {
    const id = localStorage.userID;

    const [file, setFile] = useState();
    const [inputValue, setInputValue] = useState();
    const [account, setAccount] = useState();
    const [activeTabIndex, setActiveTabIndex] = useState(0);
    const [tabUnderlineWidth, setTabUnderlineWidth] = useState(0);
    const [tabUnderlineLeft, setTabUnderlineLeft] = useState(0);

    const tabsRef = useRef([]);
    const tabsLabel = [
        { label: 'Thông tin cơ bản', content: 'basic' },
        { label: 'Thay đổi mật khẩu', content: 'password' },
    ];

    useEffect(() => {
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

        function setTabPosition() {
            const currentTab = tabsRef.current[activeTabIndex];
            tabsRef.current.filter((prev) => {
                if (prev !== currentTab) {
                    prev.style.color = '#8c98a4';
                }
            });
            currentTab.style.color = '#35509a';
            setTabUnderlineLeft(currentTab?.offsetLeft ?? 0);
            setTabUnderlineWidth(currentTab?.clientWidth ?? 0);
        }

        setTabPosition();
        window.addEventListener('resize', setTabPosition);

        return () => window.removeEventListener('resize', setTabPosition);
    }, [activeTabIndex]);

    const handleImage = (file) => {
        setFile(file[0]);
    };

    const handleInput = (event) => {
        const name = event.target.name;
        const value = event.target.value;
        setInputValue((values) => ({ ...values, [name]: value }));
    };

    const handleSubmit = () => {
        var formData = new FormData();

        if (inputValue?.name !== undefined) {
            formData.append('name', inputValue.name);
            formData.append('image', file);
            axios
                .post(`http://localhost/QuizApp/server/public/api/user/${id}/update`, formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                })
                .then((res) => {
                    if (res.data.code == 200) {
                        if (res.data.avatar) {
                            localStorage.setItem('avatar', res.data.new_avatar);
                        }
                        alert('Cập nhật thành công!');
                        window.location.reload();
                    }
                });
        } else if (inputValue?.currentPassword !== undefined) {
            formData.append('currentPassword', inputValue.currentPassword);
            formData.append('newPassword', inputValue.newPassword);
            axios
                .post(`http://localhost/QuizApp/server/public/api/user/${id}/changePassword`, formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                })
                .then((res) => {
                    if (res.data.code == 200) {
                        alert('Cập nhật mật khẩu thành công!');
                        window.location.reload();
                    } else {
                        alert('Mật khẩu không chính xác!');
                    }
                });
        } else if (file) {
            formData.append('image', file);
            axios
                .post(`http://localhost/QuizApp/server/public/api/user/${id}/update`, formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                })
                .then((res) => {
                    if (res.data.code == 200) {
                        localStorage.setItem('avatar', res.data.new_avatar);
                        alert('Cập nhật ảnh đại diện thành công!');
                        window.location.reload();
                    }
                });
        } else {
            alert('Hãy nhập thông tin!');
        }
    };

    return (
        <>
            <div className="w-[768px] min-h-[580px] mt-[32px] pt-[16px] pb-4 px-4 mx-auto bg-[#fff] ">
                <h3 className="text-3xl font-semibold">Cập nhật thông tin</h3>
                <div className="w-full mt-[32px] px-4">
                    <div className="relative flex border-b-[2px] mb-4">
                        {tabsLabel.map((tab, idx) => (
                            <button
                                key={idx}
                                ref={(el) => (tabsRef.current[idx] = el)}
                                className="block mr-2 pr-4 pb-2 text-xl text-[#8c98a4] hover:text-[#35509a] "
                                onClick={() => setActiveTabIndex(idx)}
                            >
                                {tab.label}
                            </button>
                        ))}
                        <span
                            className="absolute bottom-0 block h-0.5 bg-[#35509a] transition-all duration-300"
                            style={{ left: tabUnderlineLeft, width: tabUnderlineWidth }}
                        />
                    </div>
                    {tabsLabel[activeTabIndex].content == 'basic' ? (
                        <>
                            <div className="flex flex-col">
                                <span className="block py-2 text-lg">
                                    Email: {account?.email} <i>(Hệ thống không hỗ trợ đổi email)</i>
                                </span>
                                <label className="text-lg">Tên tài khoản</label>
                                <input
                                    type="text"
                                    name="name"
                                    onChange={(e) => handleInput(e)}
                                    defaultValue={account?.name}
                                    className="py-[4px] px-2 mt-2 mb-4 rounded border-2 border-[#BDC5D1] outline-none"
                                />
                                <label className="text-lg">Đổi ảnh đại diện</label>
                                <input
                                    className="w-[300px] mt-2"
                                    type="file"
                                    name="image"
                                    onChange={(e) => handleImage(e.target.files)}
                                />
                                <button
                                    onClick={handleSubmit}
                                    className="w-[140px] mt-4 mx-auto border-[1px] border-[#333] bg-[#E8F2FF] hover:bg-[#3550AF] hover:text-[#E8F2FF] rounded-full text-lg transition duration-200"
                                >
                                    Cập nhật
                                </button>
                            </div>
                        </>
                    ) : (
                        <>
                            <div className="flex flex-col">
                                <label className="text-lg">Mật khẩu hiện tại</label>
                                <input
                                    type="password"
                                    name="currentPassword"
                                    // onChange={(e) => setInputValue(e.target.value)}
                                    onChange={(e) => handleInput(e)}
                                    className="py-[4px] px-2 mt-2 mb-4 rounded border-2 border-[#BDC5D1] outline-none"
                                    placeholder="Mật khẩu hiện tại"
                                />
                                <label className="text-lg">Mật khẩu mới</label>
                                <input
                                    type="password"
                                    name="newPassword"
                                    onChange={(e) => handleInput(e)}
                                    className="py-[4px] px-2 mt-2 mb-4 rounded border-2 border-[#BDC5D1] outline-none"
                                    placeholder="Mật khẩu mới"
                                />
                                <button
                                    onClick={handleSubmit}
                                    className="w-[140px] mt-4 mx-auto border-[1px] border-[#333] bg-[#E8F2FF] hover:bg-[#3550AF] hover:text-[#E8F2FF] rounded-full text-lg transition duration-200"
                                >
                                    Cập nhật
                                </button>
                            </div>
                        </>
                    )}
                </div>
            </div>
        </>
    );
}

export default UserAccountSettingsLayout;
