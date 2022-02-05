<?php
include("../db.php");
    if (isset($_POST['edit_account'])){
        $id = $_GET['id'];
        $category = $_POST['category'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $status = $_POST['status'];

        $query = "UPDATE accounts SET category = '$category', title ='$title', price = '$price', description = '$description', status = '$status' WHERE id = $id";



        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query failed");
        } else {
            $_SESSION['message'] = "Account updated succesfully";
            $_SESSION['message_type'] = 'success';
            header("Location: http://localhost/ChiksGold_BO/accounts.php");
        }
    }
?>

