<?php
    
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "storesss";

    $con = mysqli_connect($server,$user,$password,$db);

    if(!$con) {
        die("Connection Failed:".mysqli_connect_error());
    }
    if(!isset($_SESSION)){
      session_start();
    }

    if($con-> connect_error != 0){
      echo $con -> connect_error;
      exit();
    }

    $start = 0;

    $row_per_page = 4;

    $records = $con->query("SELECT * FROM items");
    $nr_of_rows = $records->num_rows;

    $pages = ceil($nr_of_rows /  $row_per_page);

    if(isset($_GET['page-nr'])){
      $page = $_GET['page-nr'] - 1;
      $start = $page * $row_per_page;
    }

    $result = $con->query("SELECT * FROM items LIMIT $start,$row_per_page");

?>
