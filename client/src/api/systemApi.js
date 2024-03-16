import axiosClient from './apiClient';

const systemApi = {
    signUp: (data) => {
        const url = '/signup';
        return axiosClient.post(url, { params: { data } });
    },
    forgotPassword: (data) => {
        const url = 'forgotpassword';
        return axiosClient.post(url, { params: { data } });
    },
    getExam: (testID) => {
        const url = `test/${testID}`;
        return axiosClient.get(url, { params: {} });
    },
    getRecommendTest: (id) => {
        const url = `user/${id}/recommend`;
        return axiosClient.get(url, { params: {} });
    },
    getRecommendTypeOfQuestion: (id) => {
        const url = `/recommend/${id}/question`;
        return axiosClient.get(url, { params: {} });
    },
    getExams: () => {
        const url = 'tests';
        return axiosClient.get(url, { params: {} });
    },
    getAllExams: () => {
        const url = '/all/tests';
        return axiosClient.get(url, { params: {} });
    },
    getPopularTest: () => {
        const url = '/popular';
        return axiosClient.get(url, { params: {} });
    },
    getNewestTests: () => {
        const url = '/newest';
        return axiosClient.get(url, { params: {} });
    },
    getQuestionDetail: (id) => {
        const url = `question/${id}/detail`;
        return axiosClient.get(url, { params: {} });
    },
    getDetail: (id) => {
        const url = `detail/${id}`;
        return axiosClient.get(url, { params: {} });
    },
    getTypes: (id) => {
        const url = `types/test/${id}`;
        return axiosClient.get(url, { params: {} });
    },
    getAllTypes: () => {
        const url = `/types`;
        return axiosClient.get(url, { params: {} });
    },
    getQuestionBasedOnType: (name, amount) => {
        const url = `/type/${name}/questions/${amount}`;
        return axiosClient.get(url, { params: {} });
    },
    submitQuestions: (data) => {
        const url = '/submit/questions';
        return axiosClient.post(url, { params: { data } });
    },
    // get question with own type
    getQuestionWithType: (id, testID) => {
        const url = `/test/${testID}/type/${id}/questions`;
        return axiosClient.get(url, { params: {} });
    },
    // get reading paragraph
    getReading: (id) => {
        const url = `reading/${id}`;
        return axiosClient.get(url, { params: {} });
    },
    //
    getReadingWithType: (id, testID) => {
        const url = `type/${id}/test/${testID}/reading`;
        return axiosClient.get(url, { params: {} });
    },
    // get question order from detail
    getDetailList: (id) => {
        const url = `testdetail/${id}/list`;
        return axiosClient.get(url, { params: {} });
    },
    // get result
    getResult: (testID, resultID, userID) => {
        const url = `test/${testID}/result/${resultID}/user/${userID}`;
        return axiosClient.get(url, { params: {} });
    },
    // get user's answers
    getUserAnswer: (resultID) => {
        const url = `result/${resultID}/answers`;
        return axiosClient.get(url, { params: {} });
    },
    getAnswers: (id) => {
        const url = `answers/${id}`;
        return axiosClient.get(url, { params: {} });
    },
    // post user's note
    postNote: (userID, testID, data) => {
        const url = `user/${userID}/test/${testID}`;
        return axiosClient.post(url, { params: { data } });
    },
    // get user account
    getUserAccount: (userID) => {
        const url = `user/${userID}`;
        return axiosClient.get(url, { params: {} });
    },
    // update note
    updateNote: (noteID, data) => {
        const url = `note/${noteID}/update`;
        return axiosClient.post(url, { params: { data } });
    },
    // get user data statical chart
    getUserActivities: (userID) => {
        const url = `user/${userID}/activities`;
        return axiosClient.get(url, { params: {} });
    },
    getStaticalData: (userID, option) => {
        const url = `user/${userID}/chart`;
        return axiosClient.get(url, { params: { option: option } });
    },
    // search
    postSearch: (searchValue) => {
        const url = `search/${searchValue}`;
        return axiosClient.post(url, { params: { value: searchValue } });
    },
    // User's profile
    postFile: (id, data) => {
        const url = `user/${id}/upload/avatar`;
        return axiosClient.post(url, { params: { image: 'hello' } });
    },
    // Create todo
    createTodo: (data) => {
        const url = 'todo/create';
        return axiosClient.post(url, { params: { data } });
    },
    // Get user's todo
    getTodos: (userID) => {
        const url = `user/${userID}/todo`;
        return axiosClient.get(url, { params: {} });
    },
    getTodo: (id) => {
        const url = `todo/${id}`;
        return axiosClient.get(url, { params: {} });
    },
    // Create todo list
    createTodoList: (data) => {
        const url = `todolist/create`;
        return axiosClient.post(url, { params: { data } });
    },
    // Create todo item
    createTodoItem: (data) => {
        const url = `todoitem/create`;
        return axiosClient.post(url, { params: { data } });
    },
    getTodoList: (id) => {
        const url = `todo/${id}/todolist`;
        return axiosClient.get(url, { params: {} });
    },
    getTodoListEditType: (id) => {
        const url = `todolist/${id}`;
        return axiosClient.get(url, { params: {} });
    },
    getTask: (id) => {
        const url = `todolist/${id}/tasks`;
        return axiosClient.get(url, { params: {} });
    },
    // Edit todo, todo-list, todo-list-item
    updateTodo: (data) => {
        const url = `todo/${data.todo_id}/update`;
        return axiosClient.post(url, { data });
    },
    updateTodoList: (data) => {
        const url = `todolist/${data.todo_list_id}/update`;
        return axiosClient.post(url, { data });
    },
    updateTodoListItem: (id, data) => {
        const url = `todoitem/${id}/update`;
        return axiosClient.post(url, { data });
    },
    // delete todo
    deleteTodo: (id) => {
        const url = `todo/${id}/remove`;
        return axiosClient.delete(url, { params: {} });
    },
    deleteTodoList: (id) => {
        const url = `todolist/${id}/remove`;
        return axiosClient.delete(url, { params: {} });
    },
    deleteTodoItem: (id) => {
        const url = `todoitem/${id}/remove`;
        return axiosClient.delete(url, { params: {} });
    },
    // update status todo item
    updateTodoItemStatus: (id, value) => {
        const url = `todoitem/${id}/status`;
        return axiosClient.post(url, { value });
    },
    // admin api
    getAllReadingID: () => {
        const url = `reading`;
        return axiosClient.get(url, {});
    },
    createTest: (data) => {
        const url = '/test/add';
        return axiosClient.post(url, { data });
    },
    createReading: (data) => {
        const url = '/reading/add';
        return axiosClient.post(url, { data });
    },
    createQuestion: (data) => {
        const url = '/question/add';
        return axiosClient.post(url, { data });
    },
};

export default systemApi;
