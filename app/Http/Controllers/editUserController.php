<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class editUserController extends Controller
{
    public function index()
    {
        /* $user = DB::table('users'); */

        return view('editUser', [
            'title' => "Edit User Page",
            'submenu' => "No",
            'data' => User::all()
            /* 'user' => $user */
        ]);

    }


    public function delete(Request $request)
    {
        User::destroy($request->id);
        return redirect('/editUser');
    }

    public function edittest(Request $request)
    {
        $flights = User::find($request->id);
        $flights->name = 'Paris to London';
        $flights->save();
        return redirect('/editUser');
    }

    public function mengubah(Request $request)
    {
        return view('editUser.mengubah', [
            'title' => "Edit User Page",
            'submenu' => "No",
            'id' => $request->id,
            'data' => User::find($request->id)
        ]);
    }

    public function ubahdata(Request $request)
    {
        $flights = User::find($request->id);
        $flights->username = $request->username;
        $flights->name = $request->name;
        $flights->email = $request->email;
        $flights->password = bcrypt($request->password);
        $flights->save();
        return redirect('/editUser');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$username = $request->username;
        $name = $request->name;

    		// mengambil data dari table pegawai sesuai pencarian data
		$user = User::where('username','like',"%".$username."%")->where('name','like',"%".$name."%")->get();

    		// mengirim data pegawai ke view index
		return view('editUser.cari',[
            'data' => $user,
            'title' => "Edit User Page",
            'submenu' => "No"
        ]);

	}
}
