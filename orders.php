<style> <?php include('styling/generalStyling.css') ?> </style>
<?php include('db.php') ?>

<?php include('includes/header.php') ?>
<?php include('includes/navigation.php') ?>

<div class="mainWrap">
    <h1>Orders Overview</h1>
    <h5>Filter your data</h5>
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Payment Method
                </button>
            </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <form class="filterGroup" name="paymentSearchForm" method="POST" action="orders.php">
                Filter by Payment Method: <input type="text" name="payment_input" value="" />
                <input type="submit" name="paymentSearch" value="Filter">
                </form>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFive">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Total Price Range
                </button>
            </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
                <form name="rangeSearchForm" method="POST" action="orders.php">
                Filter by range: <input type="text" name="rangeFrom_input" value="" /> <input type="text" name="rangeTo_input" value="" />
                <input type="submit" name="rangeSearch" value="Filter">
                </form>            
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Order Account
                </button>
            </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                <form name="accountSearchForm" method="POST" action="orders.php">
                Filter by Account: <input type="text" name="account_input" value="" />
                <input type="submit" name="accountSearch" value="Filter">
                </form>
            </div>
            </div>
        </div>
    </div>
    <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); } ?>
        
    <div class="cardContainer">       
        <?php 
            $query = "SELECT * FROM orders ";
            if(isset($_POST['paymentSearch'])){
                $payment_term = $_POST['payment_input'];
                $query .= "WHERE paymentmethod = '{$payment_term}'";
            } 
            if(isset($_POST['rangeSearch'])){
                $range_termFrom = $_POST['rangeFrom_input'];
                $range_termTo = $_POST['rangeTo_input'];
                $query .= "WHERE total BETWEEN {$range_termFrom} AND {$range_termTo}";
            }
            if(isset($_POST['accountSearch'])){
                $account_term = $_POST['account_input'];
                $query .= "WHERE orderaccount = '{$account_term}'";
            }
            $result_orders = mysqli_query($conn, $query);
            while($orders = mysqli_fetch_array($result_orders)){ ?>
            <div class="card accountCard" style="width: 20rem;">
                <span class="badge bg-success">Paid</span>
                <div class="card-body">
                    <h5 class="card-title">Order #<?php echo $orders['ID'] ?></h5>
                    <p class="card-text">Paid with <?php echo $orders['PaymentMethod'] ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Account ID: <?php echo $orders['OrderAccount'] ?></li>
                    <li class="list-group-item">Total Paid Price: <?php echo $orders['Total'] ?></li>
                </ul>
            </div>
        <?php }  ?>
</div>
            

<?php include('includes/footer.php') ?>
