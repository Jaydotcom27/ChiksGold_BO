<style> <?php include('styling/generalStyling.css') ?> </style>
<?php include('db.php') ?>

<?php include('includes/header.php') ?>
<?php include('includes/navigation.php') ?>

<div class="mainWrap">
    <h1>Orders Overview</h1>
    <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); } ?>
        
    <div class="cardContainer">       
        <?php 
            $query = "SELECT * FROM orders";
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
                <!-- <div class="card-body">
                    <a href="buyAccount.php?id=<?php echo $orders['ID']?>" class="card-link btn btn btn-success">  <i class="fas fa-shopping-cart"></i> Buy</a> 
                    <a href="editAccount.php?id=<?php echo $orders['ID']?>" class="card-link btn btn-secondary">  <i class="fa fa-marker"></i> Edit</a>
                    <a href="database/delete_account.php?id=<?php echo $orders['ID']?>" class="card-link btn btn-danger">  <i class="fa fa-trash-alt"></i> Delete</a>
                </div> -->
            </div>
        <?php }  ?>
</div>
            

<?php include('includes/footer.php') ?>
