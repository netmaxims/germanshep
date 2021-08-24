<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pagecontroller extends Controller
{
    public function home() {
    	return view('home');
    }

    public function about() {
    	//$result = DB::table('mm_pages')->where('page_id',1);
    	$result = DB::select('select * from mm_pages where page_id=1');
    	return view('about',['pageData'=>$result]);
    }

    public function advertise() {
    	$result = DB::select('select * from mm_pages where page_id=4');
    	return view('about',['pageData'=>$result]);
    	return view(advertise);
    }

    public function blog() {
    	return view('blog');
    }

    public function contact() {
    	$result = DB::select('select * from mm_pages where page_id=2');
    	return view('copyright-info',['pageData'=>$result]);
    }

    public function faq() {
    	$result = DB::select('select * from mm_pages where page_id=11');
    	return view('faq',['pageData'=>$result]);
    }

    public function privacy_policy() {
    	$result = DB::select('select * from mm_pages where page_id=12');
    	return view('privacy-policy',['pageData'=>$result]);
    }

    public function site_news() {
    	$result = DB::select('select * from mm_pages where page_id=10');
    	return view('site-news',['pageData'=>$result]);
    }

    public function terms_of_use() {
    	$result = DB::select('select * from mm_pages where page_id=3');
    	return view('terms-of-use',['pageData'=>$result]);
    }

    public function copyright_info() {
    	$result = DB::select('select * from mm_pages where page_id=13');
    	return view('copyright-info',['pageData'=>$result]);
    }

}
