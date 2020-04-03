<?php

$conn_string = "host=ec2-34-206-252-187.compute-1.amazonaws.com port=5432 dbname=
d6h1k3ljq7om31 user=ckvufwvwcpnqzo password=a6c9b2bb3a2014167744ea944a2685f67dccf7e36bf082e9f30330f77a956273";
$dbconn = pg_connect($conn_string);
if (isset($POST['username'])) {
    $username = $POST['username'];
}
if (isset($POST['pass'])) {
    $pass = $POST['pass'];
}
$result = pg_query($dbconn, "select * from tbl_user where username = '" . $username . "' and password = '" . $pass . "'");
if (!$result) {
    echo "Login failed";
} else {
    echo "Login successfully";
}
?>
