<?php
/**
 * Created by PhpStorm.
 * User: jrt
 * Date: 27-Apr-17
 * Time: 4:44 PM
 */

$host = 'sql312.byethost15.com';
$user = 'b15_20021784';
$pass = 'inventory';
$db_name = 'b15_20021784_test';

$con = mysqli_connect($host, $user, $pass, $db_name) or die(mysqli_error());