<?php

namespace App\Http\Controllers;

use App\license;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class licenseController extends Controller
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
        $imagcount=1;
        if($request->hasFile('images')){
            //return $request->file('images');
            foreach($request->file('images') as $file) {
                $ext=$file->getClientOriginalExtension();
                $date=date('Ymd_His');
                $imagename =time().'_'.$date.'_'.($imagcount++).'.'.$ext ;
                $file->move(public_path().'/uploads', $imagename);

                $user=new license;

                $user->name=Input::get('name');
                $user->personid=Input::get('ID');
                $user->phonenumber=Input::get('phone');
                $user->streetname=Input::get('streetname');
                $user->buldingname=Input::get('buldingname');
                $user->hodnumber=Input::get('hodnumber');
                $user->buildaddress=Input::get('buldingaddress');
                $user->officename=Input::get('officename');

                $user->engineerdesigner=Input::get('engineerdesigner');
                $user->rebound=Input::get('rebound');
                $user->note=Input::get('note');
                $user->userid=session('user_id');

                $user->img='/uploads/'.$imagename;


                if($user->save() ){
                    session()->flash("notif","تم ارسال طلب الترخيص بنجاح");
                }else{
                    session()->flash("notif","لم يتم الارسال لحدوث خطأ ما");
                }
            }
        }else{

            $user=new license;

            $user->name=Input::get('name');
            $user->personid=Input::get('ID');
            $user->phonenumber=Input::get('phone');
            $user->streetname=Input::get('streetname');
            $user->buldingname=Input::get('buldingname');
            $user->hodnumber=Input::get('hodnumber');
            $user->buildaddress=Input::get('buldingaddress');
            $user->officename=Input::get('officename');

            $user->engineerdesigner=Input::get('engineerdesigner');
            $user->rebound=Input::get('rebound');
            $user->note=Input::get('note');
            $user->userid=session('user_id');

            $user->img='';


            if($user->save() ){
                session()->flash("notif","تم ارسال طلب الترخيص بنجاح");
            }else{
                session()->flash("notif","لم يتم الارسال لحدوث خطأ ما");
            }


        }

        return redirect()->to('/licenses');
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
}
