<?php
$imgstr = $_REQUEST['data'];
if (!preg_match('/data:([^;]*);base64,(.*)/', $imgstr, $matches)) {
    die("error");
}
$file = base64_decode($matches[2]);
$filename = time() . '.jpg';
file_put_contents($filename,$file);
echo json_encode(['status'=>true,'data'=>$filename]);
exit;