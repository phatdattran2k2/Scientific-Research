import { configureStore } from '@reduxjs/toolkit';
import testReducer from './features/testSlice';
import userReducer from './features/userSlice';
import adminReducer from './features/adminSlice';

export const store = configureStore({
    reducer: {
        user: userReducer,
        tests: testReducer,
        admin: adminReducer,
    },
    middleware: (getDefaultMiddleware) =>
        getDefaultMiddleware({
            serializableCheck: false,
        }),
});
