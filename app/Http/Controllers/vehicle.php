<?php

namespace App\Http\Controllers;

//for input and redirect actions
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

//for update method/action
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;

use App\Http\Requests;

use App\Driver; //This pulls our models so we can use its class to interact eith database.

class vehicle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pull vehicles.
        $driver = Driver::all();

        //return the view with them.
        return view('vehicle.vehicles', ['drivers' => $driver]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //get the driver object
      $driver = Driver::find($id);

      //check if driver exist if not direct to admin page
      if($driver == null){return redirect()->route('/vehicle');}

      //Show profile page
      return View('vehicle.detect')->withDriver($driver);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //get the friver id
      $driver = Driver::find($id);

      //check if driver exist if not direct to admin page
      if($driver == null){return redirect()->route('/vehicle');}

      //or else return the edit view.
      return View('vehicle.detect')->withDriver($driver);
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
      //Validate the inputed Data
      $this->validate($request, array(
      'alcohol_status' => 'required|integer',
      'speed_status' => 'required|integer',
      ));

      //get the friver id
      $driver = Driver::find($id);

      //save new changes to database
      $driver->alcohol_status = $request->input('alcohol_status');
      $driver->speed_status = $request->input('speed_status');

      $alcohol_level = 5;
         $sensor = Input::get('alcohol_status');

        if($alcohol_level <= preg_replace( "/\r|\n/", "", $sensor)){

          //pull vehicles.
          $driver = Driver::all();

          //return the view with them.
          return view('vehicle.vehicles', ['drivers' => $driver]);

        }else {
          //record the results to database.
          $driver->save();
        }



      //set flash message with success message
      Session::flash('success', 'information updated');

      //pull vehicles.
      // $driver = Driver::all();

      //return the view with them.
      // return view('vehicle.vehicles', ['drivers' => $driver]);

      //redirect with a flash message to drivers(admin)
      return redirect()->route('vehicles');
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
