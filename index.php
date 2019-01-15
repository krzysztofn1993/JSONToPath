<?php

function createStructure($path){
    echo __DIR__;
    $file = file_get_contents("json.json") or exit("Couldn't load file");
    $decoded = json_decode($file, true);
    checkArray($decoded);
}

function checkArray($array){
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            if (isset($value["type"])) {
                $type = $value["type"];
                if($type === "dir"){
                    mkdir($value["path"], null, true) or exit("Couldnt create dir $value[path]");
                    checkArray($value["components"]);
                }else{
                    touch("$value[path]") or exit("Couldnt create file $value[path]");
                }
            }else{
                checkArray($value);
            }
        }
    }
}


createStructure('C:\xampp\htdocs\Projects\JSONtoPath');
