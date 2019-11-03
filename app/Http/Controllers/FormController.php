<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormModel;

class FormController extends Controller
{
    public function index(){
        $data = new FormModel();
        $res = array('result' => $data->fetch());
        return view('list', $res);
    }

    public function add(){
        return view('add');
    }

    public function submit(Request $request){
        $sent = array(
            'Nama' => $request->input('nama'),
            'No_HP' => $request->input('no_telp'),
            'Pekerjaan' => $request->input('pekerjaan'),
        );

        $form = new FormModel();
        $res = $form->write($sent);
        echo $res;
    }
}
