<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class FormModel extends Model
{
    public function __construct(){
        $this->FILE_PATH = "public/db/phone.json";
        $this->SECRET_NUM = 5;
    }

    public function fetch(){
        $raw_json = $this->decode(Storage::get($this->FILE_PATH));
        return json_decode($raw_json, true);
    }

    public function write($array){
        $old_file = $this->fetch();
        array_push($old_file, $array);
        
        if(Storage::put($this->FILE_PATH, $this->encode(json_encode($old_file)))){
            return true;
        }else{
            return false;
        }
    }

    private function decode($str){
        return base64_decode($str);
    }

    private function encode($str){
        return base64_encode($str);
    }
}
