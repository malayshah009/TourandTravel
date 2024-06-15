<?php

namespace App\Http\Controllers;

use App\Models\Bookregistration;
use Illuminate\Http\Request;

class BookRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packagePrice = request()->query('packagePrice');
        $packageName = request()->query('packageName');
        return view('bookregis', compact(['packagePrice', 'packageName']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'month' => 'required',
            'parti1_name' =>'required',
            'parti1_bg' =>'required',
            'parti1_mobile' =>'required|min:11|numeric',
            'parti1_gender' =>'required',
            'parti1_age' =>'required',
        ]);

        $bookregis = new Bookregistration();
        // $bookregis->package=request('package');
        $bookregis->month=request('month');
        $bookregis->passenger=request('passenger');
        $bookregis->package_price=request('package_price');
        $bookregis->parti1_name=request('parti1_name');
        $bookregis->parti1_bg=request('parti1_bg');
        $bookregis->parti1_mobile=request('parti1_mobile');
        $bookregis->parti1_gender=request('parti1_gender');
        $bookregis->parti1_age=request('parti1_age');
        $bookregis->parti2_name=request('parti2_name');
        $bookregis->parti2_bg=request('parti2_bg');
        $bookregis->parti2_mobile=request('parti2_mobile');
        $bookregis->parti2_gender=request('parti2_gender');
        $bookregis->parti2_age=request('parti2_age');
        $bookregis->parti3_name=request('parti3_name');
        $bookregis->parti3_bg=request('parti3_bg');
        $bookregis->parti3_mobile=request('parti3_mobile');
        $bookregis->parti3_gender=request('parti3_gender');
        $bookregis->parti3_age=request('parti3_age');
        $bookregis->parti4_name=request('parti4_name');
        $bookregis->parti4_bg=request('parti4_bg');
        $bookregis->parti4_mobile=request('parti4_mobile');
        $bookregis->parti4_gender=request('parti4_gender');
        $bookregis->parti4_age=request('parti4_age');
        $bookregis->parti5_name=request('parti5_name');
        $bookregis->parti5_bg=request('parti5_bg');
        $bookregis->parti5_mobile=request('parti5_mobile');
        $bookregis->parti5_gender=request('parti5_gender');
        $bookregis->parti5_age=request('parti5_age');
        $bookregis->parti6_name=request('parti6_name');
        $bookregis->parti6_bg=request('parti6_bg');
        $bookregis->parti6_mobile=request('parti6_mobile');
        $bookregis->parti6_gender=request('parti6_gender');
        $bookregis->parti6_age=request('parti6_age');

        $packagePrice = (float) $bookregis->package_price;
        $passenger = (int) $bookregis->passenger;
        $bookregis->total_payment=$packagePrice*$passenger;
        // dd($bookregis->toArray());
        $bookregis->save();
        // dd($bookregis->toArray());
        return view('payment', compact('bookregis'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $bookregisdata = Bookregistration::all();
        return view('admin.bookregisdata',compact('bookregisdata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
