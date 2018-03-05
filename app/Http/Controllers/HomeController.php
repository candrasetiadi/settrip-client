<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale='')
    {
        if(!empty($locale)){
            app()->setLocale($locale, 'id');
        }

        /*banner (3)*/
        for($i=0 ; $i < 3 ; $i++)
        {
            $data['banner'][$i]['title'] = 'Temukan tempat wisata';
            $data['banner'][$i]['image'] = '/images/home-banner.jpeg'; 
        }

        /*recommended open trip (5)*/
        for($i=0 ; $i < 6 ; $i++)
        {
            $data['section1'][$i]['title'] = 'Title '. $i;
            $data['section1'][$i]['desc'] = 'Description '. $i;
            $data['section1'][$i]['destination'] = 'Destination '. $i;
            $data['section1'][$i]['price'] = 'Price'. $i;
            $data['section1'][$i]['dep_date'] = date('Y:m:d');
            $data['section1'][$i]['ret_date'] = date('Y:m:d');
            $data['section1'][$i]['image'] = '/images/home-banner.jpeg'; 
        }

        /*recommended plan (8)*/
        for($i=0 ; $i < 3 ; $i++)
        {
            $data['section2'][$i]['title'] = 'Temukan tempat wisata';
            $data['section2'][$i]['image'] = '/images/home-banner.jpeg'; 
        }
        
        return view('content.home.home', [ 'data' => $data ]);
    }
}
