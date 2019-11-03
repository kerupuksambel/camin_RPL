<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormModel;

class FormController extends Controller
{
    public function index(){
        $data = new FormModel();
        if(!empty($data->fetch())){
            $res = array('result' => $data->fetch());
        }else{
            $res = array('result' => NULL);
        }
        return view('list', $res);
    }

    public function add(){
        return view('add');
    }

    public function submit(Request $request){
        $request->validate([
            'nama' => 'required',
            'no_telp' => 'required|numeric',
        ]);

        $sent = array(
            'Nama' => $request->input('nama'),
            'No_HP' => $request->input('no_telp'),
            'Pekerjaan' => $request->input('pekerjaan'),
        );

        $form = new FormModel();
        $res = $form->write($sent);
        return redirect('/');
    }
}
