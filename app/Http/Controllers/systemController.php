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
        return View('pages.admin.admin', ['drivers' => Driver::All() ]);
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
        // $this->validate($request, array(
        // 'name' => 'required',
        // 'surname' => 'required',
        // 'gender' => 'required',
        // 'age' => 'required',
        // 'cell' => 'required',
        // 'email' => 'required',
        // 'address' => 'required',
        // 'car' => 'required',
        // 'model' => 'required',
        // 'color' => 'required',
        // 'license' => 'required',
        // ));

        //store to database
        $driver = new Driver;

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
        // $edited = Driver::create('id', $id)->get();
        // $driver = new Driver;
        //
        $target = Driver::find($id);
        if($target == null){return redirect::to('pages.admin');}

        return View('pages.admin.edit', ['driver' => Driver::find($id) ]);
    }

    public function editor(){
      return View('pages.admin.edit',  ['driver' => Driver::find($id) ]);
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
