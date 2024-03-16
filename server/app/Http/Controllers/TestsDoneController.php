<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\Questions;
use App\Models\Tests;
use App\Models\TestDetail;
use App\Models\TestsDone;
use App\Models\Answers;
use App\Models\Participants;

class TestsDoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $history = TestsDone::all('user_id', 'test_id', 'score')->sortBy("user_id");
        return $history;
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
        $result = [];
        $numberCorrect = 0;
        $score = 0;
        $minutes = 60 - $request->time['minutes'];
        $seconds = 60 - $request->time['seconds'];
        $completion = $minutes.":".$seconds;

        // loop answers
        foreach($request->data as $item) {
            // fix attempt property on array -> $item['key']
            $check = Questions::where([['id', '=', $item['id']], ['correct_answer', '=', $item['choice']]])->exists();
            $result[] = (object)['id' => $item['id'], 'isRight' => $check];
        };

        // number correct
        foreach($result as $resultItem) {
            if ($resultItem->isRight) {
                $numberCorrect++;
            }
        };

        $score = $numberCorrect*0.2;
        
         // add to table TestsDone
        $addToTestsDone = TestsDone::insert([
            'user_id' => $request->userID,
            'test_id' => $request->testID,
            'completion_time' => $completion,
            'number_correct_answer' => $numberCorrect,
            'score' => $score,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if (Participants::where('test_id', $request->testID)->exists()) {
            $increase = Participants::where('test_id', $request->testID)->first();
            $increaseParticipant = Participants::where('test_id', $request->testID)->update([
                'amount' => $increase->amount + 1,
                'updated_at' => Carbon::now(),
            ]);
        } else  {
            $increaseParticipant = Participants::where('test_id', $request->testID)->insert([
                'amount' => 1,
                'updated_at' => Carbon::now(),
            ]);
        }

        // add to answers table
        foreach($request->data as $item) {
            $latestID = TestsDone::where('user_id', $request->userID)->latest()->orderBy('id', 'DESC')->pluck('id')->first();
            $addToAnswers = Answers::insert([
                'user_id' => $request->userID, 
                'test_done_id' => $latestID,
                'test_id' => $request->testID,
                'question_id' => $item['id'],
                'answer' => $item['choice'],
                'isRight' => Questions::where([['id', '=', $item['id']], ['correct_answer', '=', $item['choice']]])->exists(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        
        return response()->json([
            'code' => 200,
            'result' => $latestID
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
        $test = Tests::where('id', $req->testID)->first();
        $result = TestsDone::where([['id', $req->resultID], ['user_id', $req->userID]])->first();
        $result->count = count(Answers::where('test_done_id', $req->resultID)->get());
        $result->countWrong = count(Answers::where([['test_done_id', $req->resultID], ['isRight', 0]])->get());
        return response()->json([
            'test' => $test,
            'result' => $result,
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
