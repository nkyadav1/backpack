<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller {

    public function index(Request $request) {
        $search_term = $request->input('q');

        if ($search_term) {
            $results = Order::where('name', 'LIKE', '%' . $search_term . '%')->paginate(10);
        } else {
            $results = Order::paginate(10);
        }

        return $results;
    }

    public function search(Request $request) {
        $term = $request->input('term');
        $options = Order::where('name', 'like', '%' . $term . '%')->get()->pluck('name', 'id');

        return $options;
    }

    public function show($id) {
        return Order::find($id);
    }

    public function showList(Request $request, $view = 'list') {
        $search_term = $request->input('q');
        if ($search_term) {
            $results = Order::where('name', 'LIKE', '%' . $search_term . '%')->paginate(10);
        } else {
            $results = Order::paginate(10);
        }
        return view('ajax-orders-list')->with('results', $results->toArray());
    }

    public function detailView($id) {
        $data = $this->show($id);
        return view('orders-detail')->with('data', $data);
    }

    /**
     * 
     * @param Request $request
     */
    public function bookTable(Request $request) {
        $data = $request->all();
        unset($data['_token']);
        $result = Order::create($data);
        return $result;
    }
    
}
