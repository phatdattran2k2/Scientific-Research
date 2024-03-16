<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\UserNotes;
use App\Models\Tests;

class UserNoteController extends Controller
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
        $getName = Tests::where('id', $request->testID)->pluck('name')->first();

        if (empty(UserNotes::where('heading', $getName)->first())) {
            $storeNote = UserNotes::create([
                'user_id' => $request->userID,
                'heading' => $getName,
                'note' => $request->params['data'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            if ($storeNote) {
                return response()->json([
                    'code' => 200,
                    'status' => 'success'
                ]);
            } else {
                return response()->json([
                    'code' => 401,
                    'status' => 'error'
                ]);
            }
        } else {
            $prevData = UserNotes::where('heading', $getName)->pluck('note')->first();
            $updateNote = UserNotes::where('heading', $getName)->update([
                'note' => $prevData .' '. "<br>" .' '.  $request->params['data']
            ]);
            if ($updateNote) {
                return response()->json([
                    'code' => 200,
                    'status' => 'success'
                ]);
            } else {
                return response()->json([
                    'code' => 401,
                    'status' => 'error'
                ]);
            }
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
        //
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
    public function update(Request $request)
    {
        $update = UserNotes::where('id', $request->noteID)->update([
            'note' =>$request->params['data']
        ]);

        if ($update) {
            return response()->json([
                'code' => 200,
                'status' => 'updated'
            ]);
        } else {
            return response()->json([
                'code' => 401,
                'status' => 'error'
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
        //
    }
}
