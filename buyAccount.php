<style> <?php include('styling/generalStyling.css') ?> </style>
<?php 
    include("db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM accounts WHERE ID = $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $category = $row['Category'];
            $title = $row['Title'];
            $price = $row['Price'];
            $description = $row['Description'];
            $status = $row['Status'];
        }
    }
?>
<?php include('includes/header.php') ?>
<?php include('includes/navigation.php') ?>

<div class="mainWrap">
    <h1>Buy Account</h1>
    <div class="formWrap">

        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'];?> fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); } ?>

        <form action="database/buy_account.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input readonly type="text" name="category" class="form-control" value="<?php echo $category; ?>" placeholder="Category" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <input hidden type="text" name="orderAccount" class="form-control" value="<?php echo $id; ?>" placeholder="ID" aria-label="ID" aria-describedby="basic-addon1">


            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input readonly type="text" name="title" class="form-control" value="<?php echo $title; ?>" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input readonly type="text" name="price" placeholder="Price"  class="form-control" value="<?php echo $price; ?>" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-text">.00</span>
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text">With textarea</span>
            <textarea readonly name="description" class="form-control" placeholder="Please provide a description for the account" aria-label="With textarea"><?php echo $description; ?></textarea>
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input readonly type="text" name="status" class="form-control" placeholder="Status" value="<?php echo $status; ?>" aria-label="Status" aria-describedby="basic-addon1">
            </div>

            <select name="paymentMethod" class="form-control " aria-label="Default select example">
                <option selected>Select a payment method</option>
                <option value="Credit Card">Credit Card</option>
                <option value="PayPal">PayPal</option>
                <option value="Crypto">Crypto</option>
            </select>
            
            <input type="submit" class="btn btn-success btn-lg formButton" name="buy_account" value="Buy Account">
        </form>
    </div>

</div>


<?php include('includes/footer.php') ?>
