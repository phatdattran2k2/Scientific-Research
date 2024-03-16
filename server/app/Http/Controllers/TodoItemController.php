<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoItem;
use Carbon\Carbon;

class TodoItemController extends Controller
{
    public function show ($id)
    {
        $task = TodoItem::where('todo_list_id', $id)->get();
        return response()->json([
            'code' => 200,
            'data' => $task
        ]);
    }

    public function update(Request $request, $id)
    {
        $update = TodoItem::where('id', $id)->update([
            'task' => $request->data['task'],
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

    public function updateStatus(Request $request, $id)
    {
        switch ($request->value) {
            case 'true':
                $update = TodoItem::where('id', $id)->update([
                    'status' => 'completed',
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
                break;
            case 'false':
                $update = TodoItem::where('id', $id)->update([
                    'status' => 'uncompleted',
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
                break;
        }
        
    }

    public function store(Request $request)
    {
        $data = $request->params['data']; 
        $new = TodoItem::create([
            'todo_list_id' => $data['todo_list_id'],
            'task' => $data['task'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if ($new) {
            return response()->json([
                'code' => 200,
                'data' => 'success'
            ]);
        }
    }

    public function destroy($id)
    {
        $remove = TodoItem::where('id', $id)->delete();

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
