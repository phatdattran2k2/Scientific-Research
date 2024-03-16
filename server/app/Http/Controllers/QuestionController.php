<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Questions;
use App\Models\TypeOfQuestions;
use App\Models\TestDetail;
use App\Models\Tests;
use App\Models\QuestionWithType;
use App\Models\ReadingTests;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        // $token = $req->header('token');
        // if (empty($token)) {
        //     return response()->json([
        //         'code' => 401,
        //         'message' => 'No token provided'
        //     ]);
        // } else {
            $questions = Questions::with('type')->get();
            return response()->json([
                'code' => 200,
                'data' => $questions
            ]);
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $correctAnswer = '';

        switch ($request->correct_answer) {
            case 'A':
                $correctAnswer = $request->answer_a;
                break;
            case 'B':
                $correctAnswer = $request->answer_b;
                break;
            case 'C':
                $correctAnswer = $request->answer_c;
                break;
            case 'D':
                $correctAnswer = $request->answer_d;
                break;
        }

        if (ReadingTests::where('id', $request->reading)->exists()) {
            $id = DB::table('questions')->insertGetId([
                'reading_test_id' => $request->reading,
                'content' => $request->question_content,
                'answer_a' => $request->answer_a,
                'answer_b' => $request->answer_b,
                'answer_c' => $request->answer_c,
                'answer_d' => $request->answer_d,
                'correct_answer' => $correctAnswer,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        } else {
            $id = DB::table('questions')->insertGetId([
                'reading_test_id' => null,
                'content' => $request->question_content,
                'answer_a' => $request->answer_a,
                'answer_b' => $request->answer_b,
                'answer_c' => $request->answer_c,
                'answer_d' => $request->answer_d,
                'correct_answer' => $correctAnswer,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
      
        $insertQuestionType = QuestionWithType::insert([
            'question_id' => $id,
            'type_id' => $request->question_type,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if (Tests::where('id', $request->belongs_to)->exists()) {
            $insertIntoTestDetail = TestDetail::insert([
                'test_id' => $request->belongs_to,
                'question_id' => $id,
                'question_order' => $request->question_order,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        if ($insertIntoTestDetail && $insertQuestionType) {
            return response()->json([
                'code' => 200,
                'message' => "success"
            ]);
        } else {
            return response()->json([
                'code' => 500,
                'message' => "error"
            ]);
        }  
    }

    public function createQuestion(Request $request)
    {
        {

            $correctAnswer = '';
    
            switch ($request->correct_answer) {
                case 'A':
                    $correctAnswer = $request->answer_a;
                    break;
                case 'B':
                    $correctAnswer = $request->answer_b;
                    break;
                case 'C':
                    $correctAnswer = $request->answer_c;
                    break;
                case 'D':
                    $correctAnswer = $request->answer_d;
                    break;
            }
    
            if (ReadingTests::where('id', $request->reading)->exists()) {
                $id = DB::table('questions')->insertGetId([
                    'reading_test_id' => $request->reading,
                    'content' => $request->question_content,
                    'answer_a' => $request->answer_a,
                    'answer_b' => $request->answer_b,
                    'answer_c' => $request->answer_c,
                    'answer_d' => $request->answer_d,
                    'correct_answer' => $correctAnswer,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            } else {
                $id = DB::table('questions')->insertGetId([
                    'reading_test_id' => null,
                    'content' => $request->question_content,
                    'answer_a' => $request->answer_a,
                    'answer_b' => $request->answer_b,
                    'answer_c' => $request->answer_c,
                    'answer_d' => $request->answer_d,
                    'correct_answer' => $correctAnswer,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
          
            $insertQuestionType = QuestionWithType::insert([
                'question_id' => $id,
                'type_id' => $request->question_type,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    
            if (Tests::where('id', $request->belongs_to)->exists()) {
                $insertIntoTestDetail = TestDetail::insert([
                    'test_id' => $request->belongs_to,
                    'question_id' => $id,
                    'question_order' => $request->question_order,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
    
            if ($insertIntoTestDetail && $insertQuestionType) {
                return response()->json([
                    'code' => 200,
                    'message' => "success"
                ]);
            } else {
                return response()->json([
                    'code' => 500,
                    'message' => "error"
                ]);
            }  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
            $question = Questions::where('id', $req->id)->first();
            $type = TypeOfQuestions::where('id', $question->type->type_id)->first();
            $array = array(
                'question' => $question,
                'type' => $type,
            );
            return response()->json([
                'code' => 200,
                'data' => (object) $array
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
