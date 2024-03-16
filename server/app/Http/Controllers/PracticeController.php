<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Models\TestDetail;
use App\Models\Questions;
use App\Models\QuestionWithType;
use App\Models\TypeOfQuestions;
use App\Models\ReadingTests;

class PracticeController extends Controller
{
    public function getQuestions(Request $request)
    {
        switch ($request->name) {
            case 'blank':
                $blankReadings = [];
                $texts = Questions::where('reading_test_id', '!=', 'null')->where('content', null)->inRandomOrder()->pluck('reading_test_id')->take($request->amount);
                foreach ($texts as $text) {
                    $blankReadings[] = ReadingTests::where('id', $text)->with('questions')->first();
                }
                return response()->json([
                    'code' => 200,
                    'data' => $blankReadings,
                ]);
                break;
            case 'reading':
                $array = [];
                $readings = Questions::where('reading_test_id', '!=', 'null')->where('content', '!=', 'null')->inRandomOrder()->pluck('reading_test_id')->take($request->amount);
                foreach ($readings as $reading) {
                    $array[] = ReadingTests::where('id', $reading)->with('questions')->first();
                } 
                return response()->json([
                    'code' => 200,
                    'data' => $array,
                ]);
                break;
            default:
                $id = TypeOfQuestions::where('name', $request->name)->pluck('id');
                $question = QuestionWithType::where('type_id', $id)->inRandomOrder()->with('types','questions')->get()->take($request->amount);
                
                return response()->json([
                    'code' => 200,
                    'data' => $question,
                ]);
                break;
        }
    }

    public function getResults(Request $request)
    {
        $answers = [];
        $choices = $request->params['data'];

        foreach ($choices as $item) {
            $answers[] = Questions::where('id', $item['id'])->first();
        }

        $result = array_map(function ($item1, $item2) {
            $item2['choice'] = $item1['choice'];
            return $item2;
        }, $choices, $answers);
        
        return $result;
    }
}
