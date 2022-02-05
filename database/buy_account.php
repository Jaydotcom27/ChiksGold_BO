<?php
include("../db.php");
    if (isset($_POST['buy_account'])){
        $id = $_GET['id'];
        $orderAccount = $_POST['orderAccount'];
        $paymentMethod = $_POST['paymentMethod'];
        $total = $_POST['price'];

        echo($orderAccount);
        echo($paymentMethod);
        echo($total);


        $query = "INSERT INTO orders(OrderAccount, PaymentMethod, Total) VALUES ('$orderAccount', '$paymentMethod', '$total')";
        // $query = "UPDATE accounts SET status = 1 WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query failed");
        } else {
            $_SESSION['message'] = "Order created succesfully";
            $_SESSION['message_type'] = 'success';
            header("Location: http://localhost/ChiksGold_BO/accounts.php");
        }
    }
?>

