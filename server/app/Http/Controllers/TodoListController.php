<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Todo;
use App\Models\TodoList;


class TodoListController extends Controller
{
    public function show(Request $request)
    {
        $todoList = Todo::where('todo_id', $request->todoID)->with('todoItem')->get();
        return $todoList;
    }

    public function showTodoList($id)
    {
        $todoList = TodoList::where('id', $id)->first();
        return $todoList;
    }

    public function update(Request $request, $id)
    {
        $update = TodoList::where('id', $id)->update([
            'name' => $request->data['name'],
            'schedule_type' => $request->data['schedule_type'],
            'schedule' => $request->data['schedule'],
            'updated_at' => Carbon::now()
        ]);

        if ($update) {
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ]);
        } else {
            return response()->json([
                'code' => 401,
                'message' => 'error'
            ]);
        }
    }

    public function store(Request $request)
    {
        $data = $request->params['data']; 
        switch (Arr::exists($data, 'schedule_type')) {
            case true:
                $new = TodoList::create([
                    'todo_id' => $data['todo_id'],
                    'name' => $data['name'],
                    'schedule_type' => $data['schedule_type'],
                    'schedule' => $data['day'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

                if ($new) {
                    return response()->json([
                        'code' => 200,
                        'data' => 'success'
                    ]);
                }
                break;
            case false:
                $new = TodoList::create([
                    'todo_id' => $data['todo_id'],
                    'name' => $data['name'],
                    'schedule_type' => 'day-in-week',
                    'schedule' => $data['day'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

                if ($new) {
                    return response()->json([
                        'code' => 200,
                        'data' => 'success'
                    ]);
                }
                break;
            default:
                # code...
                break;
        }
    }

    public function destroy($id)
    {
        $remove = TodoList::where('id', $id)->delete();

        if ($remove) {
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ]);
        } else {
            return response()->json([
                'code' => 401,
                'message' => 'error'
            ]);
        }
    }
}
