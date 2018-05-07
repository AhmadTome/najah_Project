<?php

namespace App\Http\Controllers;

use App\complian_suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class suggestioncontroller extends Controller
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
        session(['user_id' => Auth::user()->id]);

        $user = new complian_suggestion;
        $user->user_id=session('user_id');
        $user->type=Input::get('suggest_select');
        $user->title=Input::get('suggest_title');
        $user->text=Input::get('suggest_text');
        $user->kind_cs="suggestion";
        if($user->save() ){
            session()->flash("notif","تم ارسال الاقتراح بنجاح");
        }else{
            session()->flash("notif","لم يتم الارسال لحدوث خطأ ما");
        }
        return redirect()->to('/suggestion');
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

    public function rejectpost(Request $request){

        complian_suggestion::where('id', '=', $request->id)
            ->update(array('accept' =>"reject"));
    }
    public function acceptpost(Request $request){

        complian_suggestion::where('id', '=', $request->id)
            ->update(array('accept' =>"accept"));
    }
}
