<?php

include "Database.php";

$db = new Database();

$db->insert('students', ['name'=>'sanchit','age'=>25,'city'=>'mumbai']);

echo "Inserted results are:";
print_r($db->getresult());