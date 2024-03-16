<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use DB;

use App\Models\Tests;
use App\Models\TestGenres;
use App\Models\TestDetail;
use App\Models\Questions;
use App\Models\Participants;
use App\Models\GenreWithTest;
use App\Exports\TestsExport;
use Maatwebsite\Excel\Facades\Excel;

class TestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $tests = Tests::with('participants', 'genre')->take(6)->get();
        $new = $tests->map(function ($item, $key) { 
            // map tests to get genre_id and find genre_name -> pass new key to the $new 
            $item->genre_name = TestGenres::where('id', $item->genre->genre_id)->pluck('name')->first(); 
            return $item;
        });
        return response()->json([
            'code' => 200,
            'data' => $new
        ]);
    }

    public function getAllTests(Request $req)
    {
        $tests = Tests::with('participants', 'genre')->orderBy('id', 'desc')->get();
        $new = $tests->map(function ($item, $key) { 
            // map tests to get genre_id and find genre_name -> pass new key to the $new 
            $item->genre_name = TestGenres::where('id', $item->genre->genre_id)->pluck('name')->first(); 
            return $item;
        });
        return response()->json([
            'code' => 200,
            'data' => $new
        ]);
    }

    public function getNewestTests()
    {
        $newestTests = Tests::orderBy('id', 'desc')->with('participants', 'genre')->take(6)->get();

        $new = $newestTests->map(function ($item, $key) { 
            // map tests to get genre_id and find genre_name -> pass new key to the $new 
            $item->genre_name = TestGenres::where('id', $item->genre->genre_id)->pluck('name')->first(); 
            return $item;
        });

        return response()->json([
            'code' => 200,
            'data' => $new
        ]);
    }
    

    public function getPopularTests() 
    {
        $array = [];
        $getTestId = Participants::orderBy('amount', 'desc')->take(6)->get();
        foreach($getTestId as $testId) {
            $array[] = Tests::where('id', $testId->test_id)->with('participants', 'genre')->first();
        }

        $collection = collect($array);

        $new = $collection->map(function ($item, $key) { 
            // map tests to get genre_id and find genre_name -> pass new key to the $new 
            $item->genre_name = TestGenres::where('id', $item->genre->genre_id)->pluck('name')->first(); 
            return $item;
        });

        return response()->json([
            'code' => 200,
            'data' => $new
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
    public function createTest(Request $request) 
    { 
        $createNewTest = DB::table('tests')->insertGetId([
            'name' => $request->data['test_name'],
            'period' => "[".  $request->data['test_period'] ."]",
            'duration' => $request->data['duration'],
            'number_question' => $request->data['total_question'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if ($createNewTest) {
            $insert = GenreWithTest::insert([
                'test_id' => $createNewTest,
                'genre_id' => $request->data['test_type'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            $createParticipants = Participants::insert([
                'test_id' => $createNewTest,
                'amount' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

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
        $test = Tests::where('id', $req->id)->first();
        return response()->json([
            'code' => 200,
            'data' => $test
        ]);
    }

    public function getQuestionDetail(Request $req) 
    {   
        $question = Questions::where('id', $req->id)->first();
        return response()->json([
            'code' => 200,
            'data' => $question
        ]);
    }

    public function getDetail(Request $req) 
    {
        $detail = TestDetail::where('test_id', $req->id)->get();
        
        $questions = [];
        $types = [];

        foreach($detail as $item) {
            // return all values
            $questions[] = Questions::where('id', $item->question_id)->with('type')->first();
        }

        return response()->json([
            'code' => 200,
            'data' => $questions,
        ]);
    }

    public function search(Request $req)
    {
        $query = Tests::where('name', 'LIKE', '%' . $req->params['value'] . '%')->with('participants', 'genre')->get();
  
        if ($query) {
            $new = $query->map(function ($item, $key) { 
                // map tests to get genre_id and find genre_name -> pass new key to the $new 
                $item->genre_name = TestGenres::where('id', $item->genre->genre_id)->pluck('name')->first(); 
                return $item;
            });
            return response()->json([
                'code' => 200,
                'data' => $new
            ]);
        } else {
            return response()->json([
                'code' => 404,
                'data' => 'Not found'
            ]);
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
