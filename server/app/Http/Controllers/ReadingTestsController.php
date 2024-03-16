<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\Tests;
use App\Models\TestDetail;
use App\Models\ReadingTests;
use App\Models\QuestionWithType;
use App\Models\Questions;

class ReadingTestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = ReadingTests::select('id')->get();
        return $id;
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
        $insert = ReadingTests::insert([
            'content' => $request->content,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if ($insert) {
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ]);
        } else {
            return response()->json([
                'code' => 500,
                'message' => 'error'
            ]);
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
        $reading = ReadingTests::where('id', $req->id)->with('questions')->first();
        return response()->json([
            'code' => 200,
            'data' => $reading
        ]);
    }

    public function getTextWithType(Request $req) {
        $testDetail = [];
        $readingID = [];
        $readingText = [];
        $getQuestionsQuery = QuestionWithType::where('type_id', $req->typeID)->pluck('question_id');

        switch ($req->typeID) {
            case 8:
                foreach ($getQuestionsQuery as $item) {
                    $testDetail[] = TestDetail::where([['question_id', $item], ['test_id', $req->testID]])->pluck('question_id')->first();
                }
                $first = head(array_filter($testDetail));
                $question = Questions::where('id', $first)->with('readingTest')->first();
                return $question;
                break;
            case 9:
                $getQuestionsQuery = QuestionWithType::where('type_id', $req->typeID)->pluck('question_id');
                foreach ($getQuestionsQuery as $item) {
                    $testDetail[] = TestDetail::where([['question_id', $item], ['test_id', $req->testID]])->pluck('question_id')->first();
                }
         
                foreach (array_filter($testDetail) as $item) {
                    $readingID[] = Questions::where('id', $item)->pluck('reading_test_id')->first();
                }
        
                foreach (array_values(array_unique($readingID)) as $id) {
                    $readingText[] = ReadingTests::where('id', $id)->with('questions')->first();
                };

                return $readingText;
                break;
        }

  

       
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
