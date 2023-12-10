<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Broker;

class AppController extends Controller
{
    public function index () {
        return view('index');
    }

    public function showBroker () {
        $brokers = Broker::all();
        return view('showBroker', compact('brokers'));
    }

    public function addBroker () {
        return view('addBroker');
    }

    public function editBroker ($id) {
        $data['broker'] = Broker::find($id);
        return view('editBroker', $data);
    }

    public function updateBroker (Request $request, $id) {
        $param = $request->all();
        unset($param['_token']);
        unset($param['_method']);
        Broker::where('id', $id)->update($param);
        return redirect()->route('showBroker');
    }
    
    public function logout () {
        return view('logout');
    }

    public function insertBroker (Request $request) {
        $param = $request->all();
        unset($param['_token']);
        Broker::create($param);
        return redirect()->route('showBroker');
    }

    public function deleteBroker (Request $request, $id) {
        $param = $request->all();
        Broker::where('id', $id)->delete($param);
        return redirect()->route('showBroker');
    }

}
