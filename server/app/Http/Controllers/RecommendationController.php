<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Tests;
use App\Models\TestGenres;
use App\Models\TestsDone;
use App\Models\Recommend;

use Illuminate\Support\Collection;

class RecommendationController extends Controller
{
    public function getRecommendationData(Request $req) {
        $history = TestsDone::select('user_id', 'test_id', 'score')->get();
        $output = collect($history)
            ->groupBy('user_id')
            ->map(function ($grouped) {
                $result = [];
                $result[] = $grouped[0]['user_id'];
                $result[] = collect($grouped)
                    ->pluck('score', 'test_id')
                    ->toArray();
                return $result;
            })
            ->values()
            ->toArray();   
            
        return $output;    
    }

    public function show(Request $request)
    {
        $result = [];
        $getData = Recommend::where('user_id', $request->userID)->select('item_id')->get();

        foreach ($getData as $item) {
            $tests = Tests::where('id', $item->item_id)->with('participants', 'genre')->orderBy('id', 'desc')->get();
            $new = $tests->map(function ($item, $key) { 
                // map tests to get genre_id and find genre_name -> pass new key to the $new 
                $item->genre_name = TestGenres::where('id', $item->genre->genre_id)->pluck('name')->first(); 
                return $item;
            });

            $result[] = $new;
        }

        $tests = Tests::with('participants', 'genre')->orderBy('id', 'desc')->get();

        if ($result) {
            return response()->json([
                'code' => 200,
                'data' => $result
            ]);
        } else {
            return response()->json([
                'code' => 401,
                'data' => 'empty'
            ]);
        }
    }

    public function recommendQuestion(Request $request)
    {
        $userId = $request->userID;

        $latestTestId = DB::table('tests_done')
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->first();
 
        $query = DB::table('questions')
            ->join('question_type', 'id', '=', 'question_type.question_id')
            ->join('types', 'question_type.type_id', '=', 'types.id')
            ->join('tests_done', 'tests_done.user_id', '=', DB::raw($userId))
            ->join('answers', function ($join) use ($userId, $latestTestId) {
                $join->on('tests_done.test_id', '=', 'answers.test_id');
                $join->on('tests_done.test_id', '=', DB::raw($latestTestId->test_id));
                $join->on('tests_done.user_id', '=', 'answers.user_id');
                $join->on('answers.question_id', '=', 'questions.id');
                $join->where('answers.test_done_id', '=', DB::raw($latestTestId->id));
            })
            ->where('answers.isRight', '=', 0)
            ->get();
        
        $collection = collect($query);
        $uniqueCollection = $collection->unique('type_id')->pluck('type_id', 'name');
        $uniqueArray = $uniqueCollection->toArray();

        if ($query) {
            return response()->json([
                'code' => 200,
                'data' => $uniqueArray
            ]);
        } else {
            return response()->json([
                'code' => 401,
                'data' => 'empty'
            ]);
        }
        }
}
