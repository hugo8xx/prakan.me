<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Package;
use App\Car;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::paginate(20);

        return view('package.index',[
            'packages' => $packages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = Car::updateOrCreate([
            'license_no' => $request->get('license_no') 
        ], [
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'engine_no' => $request->get('engine_no'),
            'year' => $request->get('year'),
            'brand' => $request->get('brand'),
            'model' => $request->get('model')
        ]);
        
        $package = new Package;

        $package->policy_no = $request->get('policy_no');
        $package->date_start = $request->get('date_start');
        $package->date_stop = $request->get('date_stop');
        $package->covered = $request->get('covered');
        $package->deduct = $request->get('deduct');
        $package->price = $request->get('price');
        $package->user_id = Auth::user()->id;

        $car->packages()->save($package);

        return redirect()->ronte('package.index')->with('success','เพิ่มข้อมูลเรียบร้อย');
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
