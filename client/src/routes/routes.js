import config from '../config/config';
import HomePage from '../pages/HomePage/HomePage';
import RegisterPage from '../pages/RegisterPage/RegisterPage';
import ExamPage from '../pages/ExamPage/ExamPage';
import ResultPage from '../pages/ResultPage/ResultPage';
import UserAccountPage from '../pages/UserAccountPage/UserAccountPage';
import StaticalChartPage from '../pages/StaticalChartPage/StaticalChartPage';
import SearchPage from '../pages/SearchPage/SearchPage';
import UserAccountSettingsPage from '../pages/UserAccountSettingsPage/UserAccountSettingsPage';
import StudyPlanPage from '../pages/StudyPlanPage/StudyPlanPage';
import AdminPage from '../pages/AdminPage/AdminPage';
import PracticePage from '../pages/PracticePage/PracticePage';
import ExercisePage from '../pages/ExercisePage/ExercisePage';
import ForgotPage from '../pages/ForgotPage/ForgotPage';

const routes = [
    {
        path: config.routes.register,
        component: RegisterPage,
    },
    {
        path: config.routes.home,
        component: HomePage,
    },
    {
        path: config.routes.todo,
        component: StudyPlanPage,
    },
    {
        path: config.routes.test,
        component: ExamPage,
    },
    {
        path: config.routes.testResult,
        component: ResultPage,
    },
    {
        path: config.routes.userAccount,
        component: UserAccountPage,
    },
    {
        path: config.routes.staticalChart,
        component: StaticalChartPage,
    },
    {
        path: config.routes.searchResult,
        component: SearchPage,
    },
    {
        path: config.routes.userSetting,
        component: UserAccountSettingsPage,
    },
    {
        path: config.routes.practice,
        component: PracticePage,
    },
    {
        path: config.routes.exercise,
        component: ExercisePage,
    },
    {
        path: config.routes.forgotPassword,
        component: ForgotPage
    },
    // admin
    {
        path: config.routes.admin,
        component: AdminPage,
    },
];

export { routes };
