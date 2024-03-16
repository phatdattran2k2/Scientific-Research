import { createSlice } from '@reduxjs/toolkit';

const initialState = {
    submit: false,
    newQuestion: '',
    answers: [],
};
const adminSlice = createSlice({
    name: 'admin',
    initialState,
    reducers: {
        setSubmit: (state, action) => {
            state.submit = action.payload;
        },
        setNewQuestion: (state, action) => {
            state.newQuestion = action.payload;
        },
    },
});

export const { setSubmit, setNewQuestion } = adminSlice.actions;

export default adminSlice.reducer;
