<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $search_term = $request->input('q');

        if ($search_term) {
            $results = Restaurant::where('name', 'LIKE', '%'.$search_term.'%')->paginate(10);
        } else {
            $results = Restaurant::paginate(10);
        }

        return $results;
    }

    public function search(Request $request)
    {
        $term = $request->input('term');
        $options = Restaurant::where('name', 'like', '%'.$term.'%')->get()->pluck('name', 'id');

        return $options;
    }

    public function show($id)
    {
        return Restaurant::find($id);
    }
    
    public function showList(Request $request,$view='list')
    {
        $search_term = $request->input('q');
        if ($search_term) {
            $results = Restaurant::where('name', 'LIKE', '%'.$search_term.'%')->paginate(10);
        } else {
            $results = Restaurant::paginate(10);
        }
        return view('ajax-restaurant-list')->with('results',$results);
    }
}
