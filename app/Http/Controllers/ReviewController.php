<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        return view('Contactus');
    }
    public function reviewstore(Request $data){
        $data -> validate([
            'ratings' =>'required',
            'rtitle' =>'required',
            'review' => 'required',
            'rimg' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $review = new Review();
        $review->ratings=$data->ratings;
        $review->rtitle=$data->rtitle;
        $review->review=$data->review;
       // $review->rimg=request('rimg');

        if($data->hasfile('rimg')){
            $file = $data->file('rimg');
            $ext = $file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move(public_path('images'),$filename);
            $review->rimg= $filename;
        }

        $review->save();
        return back();
    }

    public function reviews(){
        $reviews = Review::all();
        return view('admin.reviews',compact('reviews'));
       // return view('about',compact('reviews'));
    }

    public function deleterev($id){
        $review = Review::find($id);
        $review->delete();
        return redirect('/review');
    }














    // public function index(){
    //     return view('Contactus');
    // }
    // public function reviewstore(Request $data){
    //     $data -> validate([
    //         'ratings' =>'required',
    //         'rtitle' =>'required',
    //         'review' => 'required',
    //         'rimg' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
    //     ]);

    //     $review = new Review();
    //     $review->ratings=request('ratings');
    //     $review->rtitle=request('rtitle');
    //     $review->review=request('review');
    //     $review->rimg=request('rimg');

    //     // if($data->hasfile('image')){
    //     //     $file = $data->file('image');
    //     //     $ext = $file->getClientOriginalExtension();
    //     //     $filename=time().'.'.$ext;
    //     //     $file->move(public_path('images'),$filename);
    //     //     $review->rimg= $filename;
    //     // }

    //     $review->save();
    //     return back();
    // }

    // public function reviews(){
    //     $reviews = Review::all();
    //     return view('admin.reviews',compact('reviews'));
    //     return view('about',compact('reviews'));
    // }

    // public function deleterev($id){
    //     $review = Review::find($id);
    //     $review->delete();
    //     return redirect('/review');
    // }
}
