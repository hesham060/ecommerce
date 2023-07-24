<?php


include "../connect.php";


$id = filterRequest("id");


getAllData("myfavorites", "favorite_usersid = ?  ", array($id));
