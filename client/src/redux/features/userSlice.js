import { createSlice } from '@reduxjs/toolkit';

const initialState = {
    isAuth: false,
    userAccount: {},
    openNote: false,
    openModal: false,
    openListItemModal: false,
    modalType: undefined,
    todoID: undefined,
    todoListID: undefined,
    openEdit: false,
    todoItemID: undefined,
    todoItemEditType: undefined,
    currentResult: [],
    submit: false,
};
const userSlice = createSlice({
    name: 'user',
    initialState,
    reducers: {
        setAuth: (state, action) => {
            state.isAuth = action.payload;
        },
        setUserAccount: (state, action) => {
            state.userAccount = action.payload;
        },
        setOpenNote: (state, action) => {
            state.openNote = action.payload;
        },
        setOpenModal: (state, action) => {
            state.openModal = action.payload;
        },
        setModalType: (state, action) => {
            state.modalType = action.payload;
        },
        setTodoID: (state, action) => {
            state.todoID = action.payload;
        },
        setTodoListID: (state, action) => {
            state.todoListID = action.payload;
        },
        setOpenListItemModal: (state, action) => {
            state.openListItemModal = action.payload;
        },
        setOpenEdit: (state, action) => {
            state.openEdit = action.payload;
        },
        setTodoItemID: (state, action) => {
            state.todoItemID = action.payload;
        },
        setTodoItemEditType: (state, action) => {
            state.todoItemEditType = action.payload;
        },
        setCurrentResult: (state, action) => {
            state.currentResult = action.payload;
        },
        setSubmit: (state, action) => {
            state.submit = action.payload;
        },
    },
});

export const {
    setAuth,
    setUserAccount,
    setOpenNote,
    setOpenModal,
    setModalType,
    setTodoID,
    setTodoListID,
    setOpenListItemModal,
    setOpenEdit,
    setTodoItemID,
    setTodoItemEditType,
    setCurrentResult,
    setSubmit,
} = userSlice.actions;

export default userSlice.reducer;
