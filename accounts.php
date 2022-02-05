<style> <?php include('styling/generalStyling.css') ?> </style>
<?php include('db.php') ?>

<?php include('includes/header.php') ?>
<?php include('includes/navigation.php') ?>

<div class="mainWrap">
    <h1>Accounts Overview</h1>
    <div class="cardContainer">       

        <?php 
        $query = "SELECT * FROM accounts";
        $result_accounts = mysqli_query($conn, $query);

        while($account = mysqli_fetch_array($result_accounts)){ ?>
        <div class="card accountCard" style="width: 18rem;">
            <img src="https://chicks-products.s3.amazonaws.com/e7b25a55-2318-4c35-a287-533de0a00427" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $account['Title'] ?></h5>
                <p class="card-text"><?php echo $account['Description'] ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $account['Category'] ?></li>
                <li class="list-group-item"><?php echo $account['Price'] ?></li>
                <li class="list-group-item">A third item</li>
            </ul>
            <div class="card-body">
                <a href="edit_account.php" class="card-link">Edit</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


<?php include('includes/footer.php') ?>
