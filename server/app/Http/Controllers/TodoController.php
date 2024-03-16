<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = $request->params['data']; 
        if (!empty($data['description'])) {
            $new = Todo::create([
                'user_id' => $data['user_id'],
                'name' => $data['title'],
                'description' => $data['description'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        } else {
            $new = Todo::create([
                'user_id' => $data['user_id'],
                'name' => $data['title'],
                'description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        if ($new) {
            return response()->json([
                'code' => 200,
                'data' => 'success'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todo::where('user_id', $id)->with('todoList')->get();
        return response()->json([
            'code' => 200,
            'data' => $todo
        ]);
    }

    public function showTodo($id)
    {
        $todo = Todo::where('id', $id)->first();
        return response()->json([
            'code' => 200,
            'data' => $todo
        ]);
    }

    public function removeRecord($id)
    {
        $remove = Todo::where('id', $id)->delete();

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
        // return $request;
        $update = Todo::where('id', $id)->update([
            'name' =>  $request->data['title'],
            'description' =>  $request->data['description'],
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $remove = Todo::where('id', $id)->delete();

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
