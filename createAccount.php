<style> <?php include('styling/generalStyling.css') ?> </style>
<?php include('db.php') ?>

<?php include('includes/header.php') ?>
<?php include('includes/navigation.php') ?>

<div class="mainWrap">
    <h1>Create a new Account</h1>
    <div class="formWrap">

        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'];?> fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <a href="/ChiksGold_BO/accounts.php" class="alert-link"> Go to accounts</a>
            </div>
        <?php session_unset(); } ?>

        <form action="database/create_account.php" method="POST">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-gamepad"></i></span>
            <!-- <input type="text" name="category" class="form-control" placeholder="Category" aria-label="Username" aria-describedby="basic-addon1"> -->
            <select name="category" value="" class="custom-select" placeholder="Category">
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
            <input type="text" name="title" class="form-control" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text"><i class="fas fa-coins"></i></span>
            <input type="number" name="price" placeholder="Price" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-text">.00</span>
            </div>

            <div class="input-group">
            <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
            <textarea class="form-control" name="description" placeholder="Please provide a description for the account" aria-label="With textarea"></textarea>
            </div>
            
            <input type="submit" class="btn btn-success btn-lg formButton" name="create_account" value="Create Account">
        </form>
    </div>

</div>


<?php include('includes/footer.php') ?>
