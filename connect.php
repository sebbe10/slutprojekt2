<?php
$con = new mysqli("localhost", "slutprojekt2", "abc123", "info");

if (!$con) {
    die(mysqli_error($con));
}
