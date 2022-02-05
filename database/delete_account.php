<?php
    include("../db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM accounts WHERE ID = $id";
        $result = mysqli_query($conn, $query);
        if (!$result){
            die("Query Failed");
        } else {
            $_SESSION['message'] = "Account deleted succesfully";
            $_SESSION['message_type'] = 'success';
            header("Location: http://localhost/ChiksGold_BO/accounts.php");
        }
    }
?>