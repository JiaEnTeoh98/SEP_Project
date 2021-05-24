<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rider;
use App\Models\Cust;
use Illuminate\Support\Facades\DB;

class PickupandDeliveryController extends Controller
{
    //
    public function viewPendingList(Request $req){
        $id = Auth::id();
        $QuotationID = $req->id;
        $query = DB::select("select * from Quotations where id = '$QuotationID'");


        return view('RiderDeliverylist', compact('query'));
    }
}
