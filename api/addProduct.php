<?php
//session_start();

header('Access-Control-Allow-Origin: *');
include '../backend/dbConnection.php';
$conn = getDatabaseConnection("movie");

// checks whether admin has logged in
// if no user is redirected back to index.php
//if (!isset($_SESSION['adminName'])) {
//    header('location: ../index.php'); //sends users to login screen if they haven't logged in
//}

$np = array();

// $np[":name"] = $_GET["name"];
// $np[":description"] = $_GET["description"];
// $np[":poster"] = $_GET["poster"];
// $np[":backdrop"] = $_GET["backdrop"];
// $np[":rating"] = $_GET["rating"];
// $np[":price"] = $_GET["price"];

$name = $_GET["name"];
$desc = $_GET['description'];
$back = $_GET["backdrop"];
$poster = $_GET["poster"];
$rating = $_GET["rating"];
$price = $_GET["price"];

$sql = "INSERT INTO itemTable (name, description, poster, backdrop, rating, price) 
        VALUES ('$name', '$desc', '$poster', '$back', $rating, $price)";
// print($sql);

$stmt = $conn->prepare($sql);
$stmt->execute();
?>