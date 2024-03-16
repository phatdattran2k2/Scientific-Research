import { useState } from 'react';
import SigninLayout from '../SigninLayout/SigninLayout';
import SignupLayout from '../SignupLayout/SignupLayout';

function AuthLayout() {
    const [layout, setLayout] = useState('signin');

    const handleChangeLayout = (value) => {
        setLayout(value);
    };

    switch (layout) {
        case 'signin':
            return <SigninLayout callback={handleChangeLayout} />;
            break;
        case 'signup':
            return <SignupLayout callback={handleChangeLayout} />;
            break;
    }
}

export default AuthLayout;
