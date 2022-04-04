<?php

include "Database.php";

$db = new Database();

//Insert
// $db->insert('students', ['name'=>'sanchit','age'=>25,'city'=>'mumbai']);

// echo "Inserted results are:";
// print_r($db->getresult());

//Update
$db->update('students', ['name'=>'test','age'=>20,'city'=>'pune'],'id="3"');

echo "Inserted results are:";
print_r($db->getresult());