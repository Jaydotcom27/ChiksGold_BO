<?php
include("../db.php");

    if (isset($_POST['create_account'])){
        $category = $_POST['category'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        $query = "INSERT INTO accounts(category, title, price, description) VALUES ('$category', '$title', '$price', '$description')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query failed");
        } else {
            $_SESSION['message'] = "Account created succesfully";
            $_SESSION['message_type'] = 'success';
            header("Location: http://localhost/ChiksGold_BO/createAccount.php");
        }
    }
?>

