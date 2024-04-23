<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Option;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    

    public function loginPage(){
        return view("pages.login");
    }

    public function userLogin(){
        return  view("pages.userlogin");
    }

    public function addCars(){

        $brands = Brand::all();
        $colors = Option::all();
        $dealers = User::where("role", "=", "dealer")->get();
        return  view("pages.addCars",compact('brands','colors','dealers'));
    }

    public function history(){

        $userId = Auth::id();

        $customers = DB::table('sales')
        ->join('inventories', 'sales.inventory_id', '=', 'inventories.inventory_id')
        ->join('vehicles', 'inventories.vehicle_id', '=', 'vehicles.vehicle_id')
        ->join('brands', 'vehicles.brand_id', '=', 'brands.brand_id')
        ->join('users', 'sales.customer_id', '=', 'users.id')
        ->select(
            "sales.sale_id",
            "vehicles.model_name",
            "vehicles.body_type",
            "vehicles.price",
            "brands.name as brand_name",
            "vehicles.created_at",
        )
        ->get();


        return view("pages.history",compact('customers'));
    }
}
