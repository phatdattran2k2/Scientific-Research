<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

use App\Models\Users;
use App\Models\Tests;
use App\Models\TestsDone;
use App\Models\UserNotes;
use File;
class UsersController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Users::where('id', $id)->with('todos')->first();
        $history = TestsDone::select('*', \DB::raw("tests_done.id as tdid"))
                    ->where('user_id', $id)->rightJoin('tests', 'tests.id', '=', 'tests_done.test_id')
                    ->orderBy('tests_done.created_at', 'DESC')
                    ->get();
        $userNote = UserNotes::where('user_id', $id)->get();

        $user->exam_done = $history;
        $user->user_note = $userNote;

        return response()->json([
            'code' => 200,
            'data' => $user
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
        $account = Users::where('id', $id)->select('name','avatar', 'password')->first();

        if ($request->name) {
            if($request->hasFile('image')) {
                if ($account->avatar !== null) {
                    $remove = Storage::delete($account->avatar);
                }
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() .'.'.$extension;
                $path = $request->file('image')->store('public');
                $updateImage = Users::where('id', $id)->update(['avatar' => $path, 'updated_at' => Carbon::now()]);
                if ($updateImage) {
                    return response()->json([
                        'code' => 200,
                        'message' => 'success',
                        'new_avatar' => $path
                    ]);
                } else {
                    return response()->json([
                        'code' => 401,
                        'message' => 'error',
                    ]);
                }
                
                // $updateImage = Users::where('id', $id)
                //             ->update(['name' => $request->name,'avatar' => $path, 'updated_at' => Carbon::now()]);
                // if ($updateImage) {
                    return response()->json([
                        'code' => 200,
                        'message' => 'success',
                        'new_avatar' => $path
                    ]);
                // } else {
                    // return response()->json([
                        // 'code' => 401,
                        // 'message' => 'error',
                    // ]);
                // }
            } else {
                $updateName = Users::where('id', $id)
                            ->update(['name' => $request->name, 'updated_at' => Carbon::now()]);
                return response()->json([
                    'code' => 200,
                    'message' => 'success',
                ]);
            }     
        } else if($request->hasFile('image')) {
            if ($account->avatar !== null) {
                $remove = Storage::delete($account->avatar);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'.$extension;
            $path = $request->file('image')->store('public');
            $updateImage = Users::where('id', $id)->update(['avatar' => $path, 'updated_at' => Carbon::now()]);
            if ($updateImage) {
                return response()->json([
                    'code' => 200,
                    'message' => 'success',
                    'new_avatar' => $path
                ]);
            } else {
                return response()->json([
                    'code' => 401,
                    'message' => 'error',
                ]);
            }
        }       

    }

    public function changePassword(Request $request, $id)
    {
        $account = Users::where('id', $id)->first();
        $account = $account->makeVisible('password');

        if (Hash::check($request->currentPassword, $account->password)) {
            $updatePassword = Users::where('id', $id)->update(['password' => Hash::make($request->newPassword), 'updated_at' => Carbon::now()]);
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ]);
        } else {
            return response()->json([
                'code' => 401,
                'message' => 'Password do not matched'
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
