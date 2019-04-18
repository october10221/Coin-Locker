<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Locker as Locker;


class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locker = Locker::get();
        return view("index", ["locker"=>$locker]);
    }

    public function rentlocker()
    {
        $input = Input::all();
        $datestart = date("Y-m-d H:i:s");
        $dateend = date('Y-m-d H:i:s', strtotime('+'.$input['hour'].'Hours', strtotime($datestart)));

        Locker::where('name_locker',$input['namelocker'] )
                ->update(
                    [
                        'status_locker' => 1,
                        'date_start' => $datestart,
                        'date_end' => $dateend,
                        'renter' => $input['user'],
                    ]);
        
        return redirect()->back()->with('alert', 'บันทึกข้อมูลสำเร็จ!');
    }


    public function setdefault()
    {
        Locker::where('status_locker',1)
                ->update(
                        [
                            'status_locker' => 0,
                            'renter' => 0,
                        ]);
         return redirect()->back()->with('alert', 'คืนค่าข้อมูลสำเร็จ!');
    }

    public function getdatalocker()
    { 
        $input = Input::all();
        $locker = Locker::where('name_locker',$input['id'])->get();

        if($locker[0]['renter'] == auth()->user()->name){
            return 1;
        }
        return 'เสียใจด้วย Locker นี้ถูกใช้ไปแล้ว (Locker จะว่างเมื่อ'.$locker[0]['date_end'].' )';
    }


    public function returnlocker()
    {
        $input = Input::all();
        Locker::where('name_locker',$input['id'])
                ->update(
                        [
                            'status_locker' => 0,
                            'renter' => 0,
                        ]);
         return 0;
    }





}
