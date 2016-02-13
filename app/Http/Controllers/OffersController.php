<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OffersController extends Controller
{
    public function index()
    {
        $req_categories = DB::table('categories')->select('id', 'name')->get();
        $categories = array();
        foreach($req_categories as $categorie) {
            $categories[$categorie->id] = $categorie->name;
        }
        return view('offer.offer', compact('categories'));
    }
}
