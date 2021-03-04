<?php

$items = DB::select('select * from Lub');

foreach($items as $item){
    return $item;
}
    public function item($item){
        echo $item;
    }
?>
