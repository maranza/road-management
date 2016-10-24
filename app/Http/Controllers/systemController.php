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
// use App\Http\Response;

use App\Driver; //This pulls our models so we can use its class to interact eith database.

class systemController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //code to view the home page and pull records from database.
        return View('pages.home', ['drivers' => Driver::All() ]);
    }



   /**
    *  Home page action
    */
    public function admin(){



      //code to view the admin page and pull records from database(To change and make template for this).
      return View('pages.admin.admin', ['drivers' => Driver::All() ]);
    }



   /**
    *  Display the map with nodes (as cars) showing
    */
    public function map(){
      // code to view the map
      return View('pages.map');
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
        //validate inputs
        $this->validate($request, array(
        'name' => 'required',
        'surname' => 'required',
        'gender' => 'required',
        'age' => 'required',
        'cell' => 'required',
        'email' => 'required',
        'address' => 'required',
        'car' => 'required',
        'model' => 'required',
        'color' => 'required',
        'license' => 'required',
        ));

        //store to database
        $driver = new Driver;

        $driver->name = $request->name;
        $driver->surname = $request->surname;
        $driver->gender = $request->gender;
        $driver->age = $request->age;
        $driver->cell = $request->cell;
        $driver->email = $request->email;
        $driver->address = $request->address;
        $driver->car = $request->car;
        $driver->model = $request->model;
        $driver->color = $request->color;
        $driver->license = $request->license;
        $driver->save();
        //redirect

        //set flash message with success message
        Session::flash('added', 'information Added');

        //redirect
        return redirect()->route('/admin');

        // = Input::get('name');

        // $driver->name = Input::get('name');
        // $driver->surname = Input::get('surname');
        // $driver->gender = Input::get('gender');
        // $driver->age = Input::get('age');
        // $driver->cell = Input::get('cell');
        // $driver->email = Input::get('email');
        // $driver->address = Input::get('address');
        // $driver->car = Input::get('car');
        // $driver->color = Input::get('color');
        // $driver->license = Input::get('license');
        // $driver->save();


    }


    public function profile(){
      return View('pages.profile');
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
      if($driver == null){return redirect()->route('/admin');}

      //Show profile page
      return View('pages.profile')->withDriver($driver);
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
        if($driver == null){return redirect()->route('/admin');}

        //or else return the edit view.
        return View('pages.admin.edit')->withDriver($driver);
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
        'name' => 'required',
        'surname' => 'required',
        'gender' => 'required',
        'age' => 'required',
        'cell' => 'required',
        'email' => 'required',
        'address' => 'required',
        'car' => 'required',
        'model' => 'required',
        'color' => 'required',
        'license' => 'required',
        ));

        //get the friver id
        $driver = Driver::find($id);

        //save new changes to database
        $driver->name = $request->input('name');
        $driver->surname = $request->input('surname');
        $driver->gender = $request->input('gender');
        $driver->age = $request->input('age');
        $driver->cell = $request->input('cell');
        $driver->email = $request->input('email');
        $driver->address = $request->input('address');
        $driver->car = $request->input('car');
        $driver->model = $request->input('model');
        $driver->color = $request->input('color');
        $driver->license = $request->input('license');
        $driver->save();

        //set flash message with success message
        Session::flash('success', 'information updated');

        //redirect with a flash message to drivers(admin)
        return redirect()->route('/admin');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //get the friver id
      $driver = Driver::find($id);

      //delete the info.
      $driver->delete();

      //redirect
      return redirect()->route('/admin');
    }



    public function sensor(){
      return View('sensor', ['drivers' => Driver::All() ]);
    }

    public function detect(Request $request, $id){
      //get the friver id
      $driver = Driver::find($id);

      $driver->alcohol_status = $request->input('alcohol_status');
      $driver->speed_status = $request->input('speed_status');
      $driver->save();

      //set flash message with success message
      Session::flash('success', 'information updated');

      //redirect with a flash message to drivers(admin)
      return redirect()->route('/admin');


    }

    /**
    *This is the sensor input
    *for speed
    *
    */
    // public function sensor(){
    //   $alcohol_level = 5;
    //   $sensor = Input::get('sensor');
    //
    //   if($alcohol_level <= preg_replace( "/\r|\n/", "", $sensor)){
    //     // Display relevent message.
    //   }else {
    //     //record the results to database.
    //   }
    // }
    //
    //
    // /**
    // *This is the speedometer input
    // *for speed
    // *
    // */
    // public function sensor(){
    //   $alcohol_level = 5;
    //   $sensor = Input::get('sensor');
    //
    //   if($alcohol_level <= preg_replace( "/\r|\n/", "", $sensor)){
    //     // Display relevent message.
    //   }else {
    //     //record the results to database.
    //   }
    // }

}
