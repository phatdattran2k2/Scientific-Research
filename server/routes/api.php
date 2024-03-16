<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Users;
use App\Models\UserNotes;
use App\Models\TypeOfQuestions;
use App\Models\Questions;
use App\Models\QuestionWithType;

use App\Http\Controllers\AnswersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserNoteController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\TestDetailController;
use App\Http\Controllers\TestsDoneController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReadingTestsController;
use App\Http\Controllers\TypeOfQuestionsController;
use App\Http\Controllers\StaticalChartController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\TodoItemController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\PracticeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Recommend
Route::get('/recommend', [RecommendationController::class, 'getRecommendationData']);
Route::get('/recommend/{userID}/question', [RecommendationController::class, 'recommendQuestion']);


// Auth
Route::post('signin', [AuthController::class, 'signin']);
Route::post('signup', [AuthController::class, 'signup']);
Route::post('forgotpassword', [AuthController::class, 'forgotPassword']);

// Search
Route::post('/search/{searchValue}', [TestsController::class, 'search']);

// Get recommend for user
Route::get('user/{userID}/recommend', [RecommendationController::class, 'show']);

// get 
Route::get('/tests', [TestsController::class, 'index']);

// get all tests
Route::get('/all/tests', [TestsController::class, 'getAllTests']);

// get popular tests
Route::get('/popular', [TestsController::class, 'getPopularTests']);

// get newest tests
Route::get('/newest', [TestsController::class, 'getNewestTests']);

// get specific Test
Route::get('/test/{id}', [TestsController::class, 'show']);

// get type of question
Route::get('/types', [TypeOfQuestionsController::class, 'index']);

// get question based on type
Route::get('/type/{name}/questions/{amount}', [PracticeController::class, 'getQuestions']);

// post answers
Route::post('/submit/questions', [PracticeController::class, 'getResults']);


// get detail of Test
Route::get('/detail/{id}', [TestsController::class, 'getDetail']);

// get specific detail of question
Route::get('/question/{id}/detail', [QuestionController::class, 'show']);

// get the types in the Test test
Route::get('/types/test/{id}', [TypeOfQuestionsController::class, 'show']);

// get the questions from each type in specific tests
Route::get('/test/{testID}/type/{typeID}/questions', [TypeOfQuestionsController::class, 'getQuestion']);

// get reading text
Route::get('/reading/{id}', [ReadingTestsController::class, 'show']);

// get reading text with question type
Route::get('/type/{typeID}/test/{testID}/reading', [ReadingTestsController::class, 'getTextWithType']);

// get Test detail
Route::get('/testdetail/{id}/list', [TestDetailController::class, 'show']);

// post data
Route::post('/user/{userID}/submit/test/{testID}', [TestsDoneController::class, 'store']);

// get result
Route::get('test/{testID}/result/{resultID}/user/{userID}', [TestsDoneController::class, 'show']);

// get user's answers
Route::get('result/{resultID}/answers', [AnswersController::class, 'show']);
Route::get('answers/{id}', [AnswersController::class, 'getAnswers']);

// post note
Route::post('user/{userID}/test/{testID}', [UserNoteController::class, 'store']);
// update note
Route::post('note/{noteID}/update', [UserNoteController::class, 'update']);

// get user account
Route::get('user/{id}', [UsersController::class, 'show']);

// get data for statical chart data
Route::get('user/{userID}/activities', [StaticalChartController::class, 'getUserActivities']);
Route::get('user/{userID}/chart', [StaticalChartController::class, 'getStaticalData']);

// User's profile
Route::post('user/{id}/update', [UsersController::class, 'update']);
Route::post('user/{id}/changePassword', [UsersController::class, 'changePassword']);

// Create todo
Route::post('todo/create', [TodoController::class, 'store']);

// Get user's todo
Route::get('user/{userID}/todo', [TodoController::class, 'show']);
Route::get('todo/{id}', [TodoController::class, 'showTodo']);

// Edit user's todo
Route::post('todo/{id}/update', [TodoController::class, 'update']);

// Create todo list
Route::post('todolist/create', [TodoListController::class, 'store']);

// Edit todo list
Route::post('todolist/{id}/update', [TodoListController::class, 'update']);

// Create todo item
Route::post('todoitem/create', [TodoItemController::class, 'store']);

// Edit todo item
Route::post('todoitem/{id}/update', [TodoItemController::class, 'update']);

// Get todo item
Route::get('todoitem/{id}', [TodoItemController::class, 'show']);

// Get todo list
Route::get('todo/{todoID}/todolist', [TodoListController::class, 'show']);

// Get todo list edit type
Route::get('todolist/{id}', [TodoListController::class, 'showTodoList']);

// Get todo task
Route::get('todolist/{id}/tasks', [TodoItemController::class, 'show']);

// Delete todo
Route::delete('todo/{id}/remove', [TodoController::class, 'destroy']);
Route::delete('todolist/{id}/remove', [TodoListController::class, 'destroy']);
Route::delete('todoitem/{id}/remove', [TodoItemController::class, 'destroy']);

// Change status todo item
Route::post('todoitem/{id}/status', [TodoItemController::class, 'updateStatus']);

// Admin
Route::get('reading', [ReadingTestsController::class, 'index']);
Route::post('/test/add', [TestsController::class, 'createTest']);
Route::post('/reading/add', [ReadingTestsController::class, 'store']);
Route::post('/question/add', [QuestionController::class, 'store']);