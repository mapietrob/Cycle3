<?php
//start the session - used for login
session_start();

//Error Reporting
error_reporting(E_ALL);
ini_set('display_errors','1');

//Include Files
require_once "connect.php";

//Initial Variable
$currentFile = basename($_SERVER['SCRIPT_FILENAME']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sandwich Order</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<header>
    <div id="branding">
        <img src='media/logo.png' alt='BG Logo' width='50' height='50'>
        <h1>The Sandwich Shack</h1>
    </div>

    <nav>
        <?php
        // Navigation Links
        echo ($currentFile == "index.php") ? "Home " : "<a href='index.php'>Home  </a>";
        echo ($currentFile == "viewOrders.php") ? "View Orders " : "<a href='viewOrders.php'>View Orders  </a>";
        ?>
    </nav>
</header>
<main>
    <h2><?php if(isset($pageName)) echo $pageName;?></h2>