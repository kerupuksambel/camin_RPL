<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class FormModel extends Model
{
    public function __construct(){
        $this->FILE_PATH = "public/db/phone.json";
    }

    public function fetch(){
        $raw_json = Storage::get($this->FILE_PATH);
        return json_decode($raw_json, true);
    }

    public function write($array){
        $old_file = $this->fetch();
        array_push($old_file, $array);
        
        if(Storage::put($this->FILE_PATH, json_encode($old_file))){
            return "Data input success!";
        }else{
            return "Data input failed.";
        }
    }
}
