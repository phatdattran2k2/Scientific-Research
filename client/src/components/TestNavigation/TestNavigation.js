import { memo } from 'react';
import TestNavigationList from '../TestNavigationList/TestNavigationList';
import TestTimer from '../TestTimer/TestTimer';
import CreateNote from '../CreateNote/CreateNote';

function TestNavigation({ width, type, start }) {
    return (
        <>
            <div style={{ width: width }} className="fixed h-[600px] flex flex-col rounded-lg bg-[#FFF] shadow-lg">
                {type !== 'result' ? (
                    <>
                        <TestTimer run={start} />
                        <TestNavigationList />
                    </>
                ) : (
                    <>
                        <span className="block my-2 px-2 font-semibold text-lg">Câu</span>
                        {type === 'result' ? (
                            <>
                                <TestNavigationList type="result" />
                                <CreateNote />
                            </>
                        ) : (
                            <TestNavigationList />
                        )}
                    </>
                )}
            </div>
        </>
    );
}

export default memo(TestNavigation);
