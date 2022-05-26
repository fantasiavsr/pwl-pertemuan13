<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\Category;

class editOrderController extends Controller
{
    public function index()
    {
        $data = order::with('category')->get();
       /*  $data2 = Category::all(); */
        return view('editOrder', [
            'data' => $data,
            /* 'data2' => $data2, */
            'title' => "Edit Order Page",
            'submenu' => "No"
        ]);
    }

    // public function showData($id)
    // {

    // }

    // public function update(Request $request)
    // {

    // }

    public function delete($id)
    {
        $data = order::find($id);
        $data ->delete();

        return redirect('/editOrder');
    }
}
