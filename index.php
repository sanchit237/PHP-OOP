<?php

include "Database.php";

$db = new Database();

//Insert
$db->insert('students', ['name'=>'sanchit','age'=>25,'city'=>'mumbai']);
echo "Inserted results are:";

echo "<pre>";
print_r($db->getresult());
echo "</pre>";

//Update
$db->update('students', ['name'=>'test','age'=>20,'city'=>'pune'],'id="3"');
echo "Updated results are:";

echo "<pre>";
print_r($db->getresult());
echo "</pre>";

//Delete
$db->delete('students', 'id="3"');
echo "Deleted results are:";

echo "<pre>";
print_r($db->getresult());
echo "</pre>";

//Select
$db->select('students', ['name','city','age'],null,'name'); 
echo "Selected results are:";

echo "<pre>";
print_r($db->getresult());
echo "</pre>";