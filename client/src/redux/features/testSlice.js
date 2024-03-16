import { createSlice } from '@reduxjs/toolkit';
import { revertAll } from './revertAll';

const initialState = {
    loading: true,
    finish: false,
    answerChoices: [],
    navigate: null,
    flags: [],
    removeFlag: null,
    finishTime: {},
};

const testSlice = createSlice({
    name: 'tests',
    initialState,
    extraReducers: (builder) => builder.addCase(revertAll, () => initialState),
    reducers: {
        setAnswerChoices: (state, action) => {
            const id = action.payload.id;
            const choice = action.payload.choice;
            if (state.answerChoices.some((choice) => choice.id === id)) {
                let prevChoice = state.answerChoices.find((prev) => prev.id === id);
                prevChoice.choice = choice;
            } else {
                state.answerChoices.push({ id: id, choice: choice });
            }
        },
        setNavigate: (state, action) => {
            state.navigate = action.payload;
        },
        setLoading: (state, action) => {
            state.loading = action.payload;
        },
        setFlags: (state, action) => {
            var array = [...state.flags];
            switch (action.payload.type) {
                case 'add':
                    array = [...array, action.payload.payload];
                    state.flags = [...array];
                    break;
                case 'remove':
                    // remove item
                    return {
                        ...state,
                        flags: state.flags.filter((item) => item !== action.payload.payload),
                    };
            }
        },
        setFinishTime: (state, action) => {
            state.finishTime = action.payload;
        },
    },
});

export const { setAnswerChoices, setNavigate, setLoading, setFlags, setRemoveFlag, setFinishTime } = testSlice.actions;

export default testSlice.reducer;
