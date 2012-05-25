<?php
session_start(); // You need to call this in order to have global vars
$_SESSION['user'] = ''; // Session var

define("ROOT", $_SERVER["DOCUMENT_ROOT"]); // Gets root path

include(ROOT."/model/class.conexion.php"); // includes global scripts based on root path
include(ROOT."/view/class.view.php");
include(ROOT."/view/class.table.php");
error_reporting(E_ALL); // Get all errors (Report all)
ini_set('display_errors', '1'); // Show all errors on the screen
