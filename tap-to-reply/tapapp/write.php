<?php session_start();
$ep = $_POST['ep'];
$en = $_POST['en'];
$up = $_POST['up'];
$un = $_POST['un'];

$myObj = new stdClass();
$myObj->ep = $ep;
$myObj->en = $en;
$myObj->up = $up;
$myObj->un = $un;

//var_dump($myObj);
$myJSON = json_encode($myObj);
//var_dump($myJSON);

$f = fopen('responses.json', 'w');
if (fwrite($f, $myJSON)) {
    // echo "success";
    fclose($f);
    
   
    
    echo "<script>window.location.replace('tapapp2.php');</script>";
    die();
} else {
    fclose($f);
    echo "failed to write";
    echo "<br><a href='tapapp2.php'>back to app</a>";
}