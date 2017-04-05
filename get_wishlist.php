<?php
require_once('classes/Weddis.php');
$weddis = new WEDDIS();
$images_arr = [];

$wl_suppliers_ids = array_keys($_POST);
foreach($wl_suppliers_ids as $sup_id){
$images_arr[$sup_id] = $weddis->getSupplierImage($sup_id);     
}

echo(json_encode($images_arr));
return 1;
?>