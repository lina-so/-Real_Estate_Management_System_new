<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Realestate;
use RealRashid\SweetAlert\Facades\Alert;



class ReserveController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
  
    {
        $reserve = DB::select('select * from reserves');
        // dd($reserve);
        return view('admin.reserve',compact('reserve'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reserve($id)
    {
        // $reals=DB::select('select status from realestates where id = ?', [$id]);

        $reals = DB::Table('realestates')->select('status','id')->where('id',$id)->get();  

        $user_id=Auth::id();
        $real_id=$id;
        $reserve= new Reserve;
        $reserve->is_reserve=1;
        $reserve->user_id=$user_id;
        $reserve->real_id=$real_id;
        $reserve->save();

        Alert::success('Realestate Reserved Successfuly','You have 24 hours to finish your reservation');
        $days=4;
        $dateReserve=$reserve->created_at->addDays($days);
        // $dateReserve=$reserve->created_at->addDays($days)->format('d-m-Y');
        // $dateReserve=$reserve->created_at;

        

        $pend="pending";
        DB::update('update realestates set status = ? where id = ?',[$pend,$id]);
        DB::update('update realestates set end_r_date = ? where id = ?',[$dateReserve,$id]);
     


        $status=$reals;
        // dd($dateReserve);
        
        // $date = Carbon::createFromFormat('Y.m.d', $reserve->created_at);
        // $daysToAdd = 5;
        // $date = $date->addDays($daysToAdd);
        // // dd($date);
        // dd($reserve->created_at);


        return redirect()->route('show')->with('mess','The property has been successfully Reserved, and now you have 4 days before the Reserving period ends');
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
     * @param  \App\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function show(Reserve $reserve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserve $reserve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserve $reserve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id , $real_id)
    {
        // dd($user_id);
        $user = DB::delete('delete  from reserves where user_id=? and real_id=?',[$user_id,$real_id]);
        return redirect()->route('reserve-show')->with('success','Reservation deleted successfully');
    }

}
