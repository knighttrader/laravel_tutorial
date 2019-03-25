<?php 

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
  public function index()
  {
  	return view('product.index');
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