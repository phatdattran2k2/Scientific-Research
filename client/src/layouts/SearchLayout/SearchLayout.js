import { useEffect, useState, useRef } from 'react';
import { useParams } from 'react-router-dom';
import { useDispatch } from 'react-redux';
import systemApi from '../../api/systemApi';
import ExamList from '../../components/ExamList/ExamList';

function SearchLayout() {
    const { value } = useParams();
    const [result, setResult] = useState();

    const handleChange = (e) => {
        switch (e.target.value) {
            case 'popular':
                const popular = [...result].sort((a, b) => (a.participants.amount > b.participants.amount ? -1 : 1));
                setResult(popular);
                break;
            case 'latest':
                const latest = [...result].sort((a, b) => (new Date(b.created_at) - new Date(a.created_at)));
                setResult(latest);
                break;
        }
    };

    useEffect(() => {
        const postSearch = async () => {
            let response = null;
            try {
                response = await systemApi.postSearch(value);
                setResult(response.data);
                console.log(response.data);
            } catch (error) {
                console.log(error);
            }
        };
        postSearch();
    }, []);

    return (
        <>
            <div className="min-h-[600px] p-4 bg-[#FFF] rounded-lg">
                <h3 className="pb-[12px] text-xl font-semibold">Kết quả tìm kiếm cho: {value}</h3>
                <div className="grid grid-cols-12 gap-2">
                    {result?.length !== 0 ? (
                        <>
                            <div className="col-span-10">
                                <ExamList data={result} type="search" />
                            </div>
                            <div className="col-span-2 pt-2">
                                <div className="flex">
                                    <select
                                        onChange={(e) => handleChange(e)}
                                        className="w-full p-2 rounded border-[1px] outline-none shadow-md"
                                    >
                                        <option disabled>- Sắp xếp -</option>
                                        <option value="popular">Phổ biến</option>
                                        <option value="latest">Mới nhất</option>
                                    </select>
                                </div>
                            </div>
                        </>
                    ) : (
                        <div className="col-span-10">
                            <h3 className="text-lg ">Không có kết quả</h3>
                        </div>
                    )}
                </div>
            </div>
        </>
    );
}

export default SearchLayout;
