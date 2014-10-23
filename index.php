<?php
include('controller/User.php');

$rout = $_GET['rout'];
$action = $_GET['action'];

$object->{$action}();
