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
    <h1>Edit an existing Account</h1>
    <div class="formWrap">

        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'];?> fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); } ?>

        <form action="database/edit_account.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-gamepad"></i></span>
            <input type="text" name="category" class="form-control" value="<?php echo $category; ?>" placeholder="Category" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-chess-queen"></i></span>
            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text"><i class="fas fa-coins"></i></span>
            <input type="number" name="price" placeholder="Price"  class="form-control" value="<?php echo $price; ?>" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-text">.00</span>
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
            <textarea name="description" class="form-control" placeholder="Please provide a description for the account" aria-label="With textarea"><?php echo $description; ?></textarea>
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-handshake"></i></span>
            <select name="status" value="<?php echo $status; ?>" class="custom-select">
            <option value="1">Sold</option>
            <option value="0">Available</option>
            </select>            
            </div>
            
            <!-- <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-handshake"></i></span>
            <input type="text" name="status" class="form-control" placeholder="Status" value="<?php echo $status; ?>" aria-label="Status" aria-describedby="basic-addon1">
            </div> -->


            
            <input type="submit" class="btn btn-success btn-lg formButton" name="edit_account" value="Edit Account">
        </form>
    </div>

</div>


<?php include('includes/footer.php') ?>
