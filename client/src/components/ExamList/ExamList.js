import { useEffect, useState } from 'react';
import ExamItem from '../ExamItem/ExamItem';

function ExamList({ data, type }) {
    const [style, setStyle] = useState('');

    useEffect(() => {
        switch (type) {
            case 'recommend':
                setStyle(
                    'grid grid-cols-12 min-h-[360px] items-center gap-[34px] py-4 px-[32px] bg-[#FFFFFF] rounded-lg',
                );
                break;
            case 'search':
                setStyle(
                    'w-full min-h-[360px] grid grid-cols-10 items-center gap-[34px] py-4 px-[32px] bg-[#FFFFFF] rounded-lg',
                );
                break;
            default:
                setStyle(
                    'w-full min-h-[360px] grid grid-cols-12 items-center gap-[34px] py-4 px-[32px] bg-[#FFFFFF] rounded-lg',
                );
                break;
        }
    }, []);

    return (
        <div
            className={style}
            // className={
            //     type !== 'search'
            //         ? 'w-full min-h-[360px] grid grid-cols-6 overflow-y-scroll items-center gap-[34px] py-4 px-[32px] bg-[#FFFFFF] rounded-lg'
            //         : 'w-full min-h-[360px] grid grid-cols-5 items-center gap-[34px] py-4 px-[32px] bg-[#FFFFFF] rounded-lg'
            // }
            // className="grid grid-cols-12 min-h-[360px] items-center gap-[34px] py-4 px-[32px] bg-[#FFFFFF] rounded-lg"
        >
            {data?.map((item, index) => (
                <ExamItem data={type == 'recommend' ? item[0] : item} type={type} key={index} />
            ))}
        </div>
    );
}

export default ExamList;
