import { useRef, useState } from 'react';
import { BiSearchAlt } from 'react-icons/bi';
import { useNavigate } from 'react-router-dom';

function Search() {
    const inputRef = useRef();
    const [searchValue, setSearchValue] = useState('');
    const navigate = useNavigate();

    const handleSearch = () => {
        navigate(`/search/${searchValue}`);
    };

    return (
        <>
            <div className="col-span-8 grid grid-cols-12 min-h-[40px] items-center my-4 border-[1px] shadow-md bg-[#fff] rounded-full overflow-hidden">
                <div className="col-span-11">
                    <input
                        ref={inputRef}
                        value={searchValue}
                        onChange={(e) => setSearchValue(e.target.value)}
                        className="w-11/12 pl-4 flex bg-transparent outline-none"
                        type="text"
                        placeholder="Tìm kiếm"
                    />
                </div>
                <div className="col-span-1 flex items-center justify-end">
                    <button onClick={handleSearch}>
                        <BiSearchAlt className="text-2xl ml-2 mr-2 transition-all hover:cursor-pointer hover:text-[#C147E9]" />
                    </button>
                </div>
            </div>
        </>
    );
}

export default Search;
