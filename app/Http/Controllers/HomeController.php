<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $products = Product::all();
        if($products = Product::all()){
        return view('home')->with('productsView', $products);  // home = home.blade.php (หน้า user หลังจากล็อกอิน)
        }

    }

    public function adminHome()
    {
        return view('adminHome');  // adminHome = adminHome.blade.php (หน้า admin หลังจากล็อกอิน)
    }

    
    



}
