<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class ProductController extends Controller
{
    public function productpage()
    {

        $usertype=Auth::user()->usertype;


        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            $data=product::paginate(9);
            $user=auth()->user();
            $count=cart::where('phone',$user->phone)->count();

            return view('user.productpage',compact('data','count'));
        }
    }
}
