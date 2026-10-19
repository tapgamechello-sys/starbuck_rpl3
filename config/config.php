<?php
$koneksi = mysqli_connect("localhost", "root", "", "starbuck_rpl3") or
die("could not connect to the database");

var_dump($koneksi);