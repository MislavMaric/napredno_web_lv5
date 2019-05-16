<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class RolesController extends Controller {

  public function insertform() {

      return view('roles');
  }

    public function insert (Request $request) {

        $roles = $request->input('roles');
        $user_id = $request->input('user_id');
        
        
        $data = array('roles'=>$roles, "user_id"=>$user_id);

        DB::table('roles')->insert($data);
        
        return redirect()->to('/home');

    }
}
