<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\TestsDone;


class StaticalChartController extends Controller
{

    public function getUserActivities(Request $req) 
    {
        $testDones = count(TestsDone::where('user_id', $req->userID)->get());
        $history = TestsDone::select('*', \DB::raw("tests_done.id as tdid"))
                    ->where('user_id', $req->userID)->rightJoin('tests', 'tests.id', '=', 'tests_done.test_id')
                    ->orderBy('tests_done.created_at', 'DESC')
                    ->get();
        $highestScore = TestsDone::where('user_id', $req->userID)->orderBy('score', 'DESC')->pluck('score')->first();
        $average = TestsDone::where('user_id', $req->userID)->selectRaw("SUM(score) as total")->first();

        return response()->json([
            'tests' => $testDones,
            'average_score' => $average->total/$testDones,
            'highest_score' => $highestScore,       
            'history' => $history      
        ]);
    }

    public function getStaticalData(Request $req)
    {
        $start = Carbon::now()->startOfMonth()->format('d-m-y');
        $end = Carbon::now()->endOfMonth()->format('d-m-y');

        switch ($req->option) {
            case '30':       
                $query = TestsDone::where([['user_id', $req->userID], ['created_at', '>=', Carbon::today()->subDays(30)]])
                    ->orderBy('created_at', 'asc')
                    ->groupBy(TestsDone::raw("DATE(created_at)"))
                    ->selectRaw("DATE(created_at) as day,  SUM(number_correct_answer) as total")
                    ->get();
                return response()->json([
                    'code' => 200,
                    'data' => $query
                ]);
                break;
            case '60':
                $query = TestsDone::where([['user_id', $req->userID], ['created_at', '>=', Carbon::today()->subDays(60)]])
                    ->orderBy('created_at', 'asc')
                    ->groupBy(TestsDone::raw("DATE(created_at)"))
                    ->selectRaw("DATE(created_at) as day,  SUM(number_correct_answer) as total")
                    ->get();
                return response()->json([
                    'code' => 200,
                    'data' => $query
                ]);
            default:
                $query = TestsDone::where([['user_id', $req->userID], ['created_at', '>=', Carbon::today()->subDays(30)]])
                    ->orderBy('created_at', 'asc')
                    ->groupBy(TestsDone::raw("DATE(created_at)"))
                    ->selectRaw("DATE(created_at) as day,  SUM(number_correct_answer) as total")
                    ->get();
                return response()->json([
                    'code' => 200,
                    'data' => $query
                ]);
                break;
        }
    }
}
