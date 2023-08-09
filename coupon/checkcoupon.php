<?php

include "../connect.php";


// --------------------------variables------------------
$table = "coupon";                             // table name
$couponName = filterRequest("couponname");     // coupon name
$now = date("Y-m-d H:i:s");                    // coupon expiration date


//----------------------------functions-----------------
getData("coupon"  , "coupon_name = '$couponName' AND coupon_expiredate > '$now' AND coupon_count > 0  ") ;
