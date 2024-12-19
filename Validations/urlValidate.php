<?php
$url = "https://brc0d3s.com";

if(!filter_var($url, FILTER_VALIDATE_URL)){
    echo "Invalid url";
}else{
    echo "valid url";
}
?>