<?php
$con = new mysqli("localhost", "slutprojekt2", "abc123", "slutprojekt2");

if (!$con) {
    die(mysqli_error($con));
}
