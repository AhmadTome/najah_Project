<?php

namespace App\Http\Controllers;

use App\electricalwater;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class electrical extends Controller
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



        $imagcount=1;
        if($request->hasFile('images')){
            //return $request->file('images');
            foreach($request->file('images') as $file) {
                $ext=$file->getClientOriginalExtension();
                $date=date('Ymd_His');
                $imagename =time().'_'.$date.'_'.($imagcount++).'.'.$ext ;
                $file->move(public_path().'/uploads', $imagename);

                $user=new electricalwater;
                $user->name=Input::get('name');
                $user->address=Input::get('address');
                $user->streetname=Input::get('streetname');
                $user->buildingname=Input::get('buldingname');
                $user->hod=Input::get('hodnumber');
                $user->tel=Input::get('telnumber');
                $user->idperson=Input::get('personid');
                $user->note=Input::get('note');

                $user->attachment='/uploads/'.$imagename;

                $user->type="electrical";
                $user->save();
            }
        }

        return redirect()->to('/electrical_line');
    }


    public function storewater(Request $request){
        $user = new electricalwater;
        $user->name=Input::get('name');
        $user->address=Input::get('address');
        $user->streetname=Input::get('streetname');
        $user->buildingname=Input::get('buldingname');
        $user->hod=Input::get('hodnumber');
        $user->tel=Input::get('telnumber');
        $user->idperson=Input::get('personid');
        $user->note=Input::get('note');
        $user->attachment=Input::get('attachment');
        $user->type="water";

        if($user->save() ){
            session()->flash("notif","تم تقديم طلب خط المياه بنجاح");
        }else{
            session()->flash("notif","لم يتم الارسال لحدوث خطأ ما");
        }
        return redirect()->to('/water_line');
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
