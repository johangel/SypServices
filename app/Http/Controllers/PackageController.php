<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
class PackageController extends Controller
{
    public function index(){
      $products = Package::orderBy('id', 'DESC')->paginate();
      return view('packages.index', compact('packages'));
    }

    public function PackageCreateView(){
      return view('packages.register');
    }

    public function PackageDetailsCreateView(){
      return view('packages.details');
    }
}
