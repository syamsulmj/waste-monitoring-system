<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DustBin;
use App\User;

class DataController extends Controller
{
    public function index() {

      if(session('login?')) {
        return view(
          'datacontrol.index'
        );
      }
      else {
        return redirect()->action('HomeController@login');
      }

    }

    public function create(Request $request) {
      $request->validate([
        'staff-id' => 'required',
        'location' => 'required'
      ]);

      $staff_id = $request->input('staff-id');
      $location = $request->input('location');

      if(DustBin::count()) {
        $get_dust_bin_id = DustBin::all()->last()->dust_bin_id;
        $getLastID = substr($get_dust_bin_id, strpos($get_dust_bin_id, '-') + 1 ) + 1;
        $dust_bin_id = "DB-".$getLastID;
      }
      else {
        $dust_bin_id = "DB-1";
      }

      DustBin::create([
        'dust_bin_id' => $dust_bin_id,
        'operator' => $staff_id,
        'location' => ucwords($location),
        'status' => false
      ]);

      return redirect()->action('HomeController@index');
    }

    public function update_status($dust_bin_id, $status) {

      $update = [
        'status' => $status
      ];

      if(DustBin::where('dust_bin_id', $dust_bin_id)->count() > 0) {

        DustBin::where('dust_bin_id', $dust_bin_id)->update($update);

        $json_data = array(
          'success' => true
        );

        return json_encode($json_data, JSON_PRETTY_PRINT);
      }
      else {
        $json_data = array(
          'success' => false
        );

        return json_encode($json_data, JSON_PRETTY_PRINT);
      }
    }
}
