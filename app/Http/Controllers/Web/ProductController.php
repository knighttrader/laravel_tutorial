<?php 

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
  public function index(Request $request)
  {
    // dd("Test Me");
    // var_dump(["test me", "another test"
    // ]);
    // dd(["test me", "another test"
    // ]);
    // dd($request->name);
    // dd($request->input("name"));
    // dd($request->all());
    $data = $request->all();
    // $data['office'] = "RebelWorks";

    $rules = [
      "name" => "required|min:7"
    ];

    $customMessage = [
      "name.required" => "butuh.nama"
    ];

    $validation = Validator::make($data, $rules, $customMessage);

    if($validation->fails()) {
      dd($validation->errors()->messages());
    }
    
    return view('product.index', compact("data"));
  }

  public function create()
  {
  	return view('product.create');
  }

  public function show($id)
  {
  	return view('product.show', compact('id'));
  }
}