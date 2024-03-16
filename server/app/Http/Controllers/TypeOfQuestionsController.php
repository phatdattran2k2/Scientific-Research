<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Models\TestDetail;
use App\Models\Questions;
use App\Models\QuestionWithType;
use App\Models\TypeOfQuestions;

class TypeOfQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = TypeOfQuestions::all();
        return response()->json([
            'code' => 200,
            'data' => $type
        ]);
    }

    public function getQuestions(Request $request)
    {
        $id = TypeOfQuestions::where('name', $request->name)->pluck('id');
        $question = QuestionWithType::where('type_id', $id)->inRandomOrder()->with('types','questions')->get()->take($request->amount);
        return response()->json([
            'code' => 200,
            'data' => $question,
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
        $questions = [];
        $withType = [];
        // $readingTest = [];

        $questions = TestDetail::where('test_id', $req->id)->get();

        foreach ($questions as $item) {
            $withType[] = QuestionWithType::where('question_type.question_id', $item['question_id'])
            ->rightJoin('test_detail', 'question_type.question_id', '=', 'test_detail.question_id')
            ->with('types', 'questions')->first();
        }

        foreach ($questions as $item) {
            $question = Questions::where('id', $item->question_id)->with('readingTest')->first();
            if ($question->reading_test_id != null) {
                $readingTest[] = $question;
            };
        }

        $collect = collect($readingTest);
        $uni = $collect->unique('reading_test_id');
        
        return response()->json([
            'questions' => $withType,
            'reading_text' => $uni
        ]);
    }

    public function test() {
        $item = TypeOfQuestions::with('test')->get();
        return $item;
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
