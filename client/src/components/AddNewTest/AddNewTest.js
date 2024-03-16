import { useState, useEffect } from 'react';
import 'react-draft-wysiwyg/dist/react-draft-wysiwyg.css';
import systemApi from '../../api/systemApi';
import axios from 'axios';

function AddNewTest() {
    const [inputs, setInputs] = useState();
    const [selected, setSelected] = useState('');

    const handleSelected = (e) => {
        setSelected(e.target.value);
    };

    const handleChange = (e) => {
        const name = e.target.name;
        const value = e.target.value;
        setInputs((values) => ({ ...values, [name]: value }));
    };

    const handleSubmit = () => {
        const data = {
            test_name: inputs.test_name,
            test_period: inputs.test_period,
            test_type: selected,
            duration: inputs.duration,
            total_question: inputs.total_question,
        };

        const isEmptyOrNull = isKeyEmptyOrNull(data);

        if (isEmptyOrNull) {
            alert('Hãy điền thông tin đầy đủ!');
        } else {
            axios.post('http://localhost/QuizApp/server/public/api/test/add', { data }).then((res) => {
                res.data.code == '200'
                    ? alert('Thêm đề thi mới thành công!')
                    : alert('Thêm dề thi mới thất bại hãy kiếm tra lại dữ liệu!');
                window.location.reload();
            });
        }
    };

    const isKeyEmptyOrNull = (object) => {
        const keys = Object.keys(object);

        for (const key of keys) {
            if (object[key] == '' || object[key] == null) {
                return true;
            }
        }

        return false;
    };

    return (
        <>
            <h3 className="text-lg pb-2 font-semibold mb-2 border-b-2 border-[#35509a]">Thêm đề thi</h3>
            <div className="">
                <div className="flex items-center">
                    <label className="w-[140px] text-lg">Tên đề thi</label>
                    <input
                        onChange={(e) => handleChange(e)}
                        className="max-w-[200px] ml-4 px-2 rounded border-2 border-[#BDC5D1] outline-none"
                        type="text"
                        required
                        placeholder="Tên đề"
                        name="test_name"
                    />
                </div>
                <div className="flex items-center mt-4">
                    <label className="w-[140px] text-lg">Năm</label>
                    <input
                        onChange={(e) => handleChange(e)}
                        className="max-w-[200px] ml-4 px-2 rounded border-2 border-[#BDC5D1] outline-none"
                        type="text"
                        required
                        placeholder="Năm"
                        name="test_period"
                    />
                </div>
                <div className="flex items-center mt-4">
                    <span className="block w-[140px]">Loại đề *</span>
                    <select
                        name="test_type"
                        value={selected}
                        onChange={handleSelected}
                        className="ml-4 text-lg border-2 rounded outline-none "
                    >
                        <option disabled value="">
                            - Loại đề -
                        </option>
                        <option value="1">Đề thi chính thức</option>
                        <option value="2">Đề thi thử</option>
                    </select>
                </div>
                <div className="flex items-center mt-4">
                    <label className="w-[140px] text-lg">Thời lượng làm bài</label>
                    <input
                        onChange={(e) => handleChange(e)}
                        className="max-w-[200px] ml-4 px-2 rounded border-2 border-[#BDC5D1] outline-none"
                        type="text"
                        required
                        placeholder="Thời lượng"
                        name="duration"
                    />
                </div>
                <div className="flex items-center mt-4">
                    <label className="w-[140px] text-lg">Số câu hỏi</label>
                    <input
                        onChange={(e) => handleChange(e)}
                        className="max-w-[200px] ml-4 px-2 rounded border-2 border-[#BDC5D1] outline-none"
                        type="text"
                        required
                        placeholder="Số lượng"
                        name="total_question"
                    />
                </div>
                <button
                    onClick={() => handleSubmit('new-test')}
                    className="mt-4 ml-4 block flex items-center w-[80px] text-[#fff] h-[36px] ml-2 rounded bg-[#3550AF] hover:bg-[#1f305d] transition"
                >
                    <span className="block w-full text-[#fff] text-center">Thêm</span>
                </button>
            </div>
        </>
    );
}

export default AddNewTest;
