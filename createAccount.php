<style> <?php include('styling/generalStyling.css') ?> </style>
<?php include('db.php') ?>

<?php include('includes/header.php') ?>
<?php include('includes/navigation.php') ?>

<div class="mainWrap">
    <h1>Create a new Account</h1>
    <div class="formWrap">

        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); } ?>

        <form action="database/create_account.php" method="POST">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" name="category" class="form-control" placeholder="Category" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" name="title" class="form-control" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input type="text" name="price" placeholder="Price" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-text">.00</span>
            </div>

            <div class="input-group">
            <span class="input-group-text">With textarea</span>
            <textarea class="form-control" name="description" placeholder="Please provide a description for the account" aria-label="With textarea"></textarea>
            </div>
            
            <input type="submit" class="btn btn-success btn-lg formButton" name="create_account" value="Create Account">
        </form>
    </div>

</div>


<?php include('includes/footer.php') ?>
