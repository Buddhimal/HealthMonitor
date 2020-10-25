<?php


//use Kreait\Firebase\Database;
include 'dbconfig.php';

//class MyService
//{

//    public function __construct(Database $database)
//    {
//        $this->database = $database;
//    }


function index()
{
    $snapshot = $database->getSnapshot();

    $value = $snapshot->getValue();

    var_dump("Hello");
}


//}
//
//$ref = new MyService($database);
//$ref->index();