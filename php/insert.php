<?php
/**
 * Created by PhpStorm.
 * User: jrt
 * Date: 25-Feb-17
 * Time: 12:31 PM
 */

include 'config.php';    //    connecting to database


for( $i = 0 ; $i < 505 ; $i++ ) {
    $query = mysqli_query($con, "INSERT INTO systemsinfs6parts (sys_no) VALUES ('x.$i')");

    if ($query)
        echo 'done';
}