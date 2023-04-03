<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\AboutUs;


class AboutController extends Controller
{
    public function about()
    {

        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            $user=auth()->user();
            $count=cart::where('phone',$user->phone)->count();

            return view('user.about',compact('count'));
        }
    }
}
