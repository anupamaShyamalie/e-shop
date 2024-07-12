<?php

$conn = mysqli_connect('localhost', 'root', '', 'mystore');

if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
