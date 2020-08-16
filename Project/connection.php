<?php

$con= new PDO('mysql:host=localhost;dbname=dbnotice','root','');

echo "successeful";

$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>