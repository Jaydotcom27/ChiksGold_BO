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
            <select name="category" value="" class="custom-select" placeholder="Category">
                <option selected value="<?php echo $category; ?>">Select game category</option>
                <option value="League of Legends">League of Legends</option>
                <option value="Diablo III">Diablo III</option>
                <option value="Runescape 2">Runescape 2</option>
                <option value="Runescape 3">Runescape 3</option>
                <option value="World of Warcraft">World of Warcraft</option>
                <option value="WOW Classic">WOW Classic</option>
            </select>
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
            <select value="" name="status" class="custom-select">
                <option selected value="<?php echo $status; ?>">Select account status</option>
                <option value="1">Sold</option>
                <option value="0">Available</option>
            </select>            
            </div>

            <input type="submit" class="btn btn-success btn-lg formButton" name="edit_account" value="Edit Account">
        </form>
    </div>

</div>


<?php include('includes/footer.php') ?>
