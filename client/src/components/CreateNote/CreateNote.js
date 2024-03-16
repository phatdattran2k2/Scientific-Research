import { useEffect, useState } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { BsJournalPlus } from 'react-icons/bs';
import { setOpenNote } from '../../redux/features/userSlice';

function CreateNote() {
    const dispatch = useDispatch();

    const handleOpenNoteWrapper = () => {
        dispatch(setOpenNote(true));
    };

    return (
        <>
            <button
                onClick={handleOpenNoteWrapper}
                className="block flex items-center mt-4 mx-auto w-[160px] h-[36px] rounded bg-[#F05123] text-[#fff] text-base text-center leading-[36px] transition duration-300 hover:brightness-125"
            >
                <BsJournalPlus className="mx-4" />
                Thêm ghi chú
            </button>
        </>
    );
}

export default CreateNote;
