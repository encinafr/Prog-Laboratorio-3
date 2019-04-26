<?php
require_once "remeras.json";
if($_POST)
{
$arrayRemeras = json_decode("remeras.json");
echo json_encode($arrayRemeras);
}
?>