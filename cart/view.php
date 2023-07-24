<?php

include "../connect.php";
$userid = filterRequest("usersid");
$data = getAllData("cartview", "1=1", null, false);
$stmt = $con->prepare("SELECT SUM(itemsprice) AS totalprice , count(countitems) AS totalcount FROM `cartview`
WHERE cartview.cart_usersid =$userid
GROUP BY cart_usersid");
$stmt->execute();
$datapricecount = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode(array(
    "status" => "success",
    "datacart" => $data,
    "countprice" => $datapricecount
));
