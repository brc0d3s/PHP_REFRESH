<?php
$email = "brc0d3s@gmail.com";

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid email";
}else{
    echo "valid email";
}
?>