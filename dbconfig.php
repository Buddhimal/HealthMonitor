<?php
require __DIR__ . '/firebase/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)->withServiceAccount(__DIR__ . '/firebase/healthtrack-94267-firebase-adminsdk-upk50-668e8185d4.json');

$database = $factory->createDatabase();

$data = [
    'name' => "Hello",
    'email' => "asd",
    'phone' => "Adas",
];

//$ref = "contact/";
//$postdata = $database->getReference($ref)->push($data);
//
//if ($postdata) {
//    echo "Data Inserted Successfully";
//} else {
//    echo  "Data Not Inserted. Something Went Wrong.!";
//}

$reference = $database->getReference('contact/');



//function getDate(){
//    $snapshot = $reference->getSnapshot();
//
//    $value = $snapshot->getValue();
//
//    var_dump($value);
//}


?>