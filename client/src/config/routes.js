const routes = {
    home: '/',
    admin: '/admin',
    register: '/register',
    test: '/test/:testID',
    todo: '/studyplan/',
    practice: '/practice',
    testResult: 'test/:testID/result/:resultID/user/:userID',
    userAccount: '/my-account',
    userSetting: '/my-account/settings/',
    staticalChart: '/user/:userID/chart',
    searchResult: '/search/:value',
    exercise: '/exercise/:name',
    forgotPassword: '/forgot-password'
};

export default routes;
