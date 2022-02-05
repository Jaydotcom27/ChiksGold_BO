<style> <?php include('styling/generalStyling.css') ?> </style>
<?php include('db.php') ?>

<?php include('includes/header.php') ?>
<?php include('includes/navigation.php') ?>

<div class="mainWrap">
    <h1>Accounts Overview</h1>
    <h5>Filter your data</h5>
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Title
                </button>
            </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <form class="filterGroup" name="titleSearchForm" method="POST" action="accounts.php">
                Filter by title: <input type="text" name="title_input" value="" />
                <input type="submit" name="titleSearch" value="Filter">
                </form>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Category
                </button>
            </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                <form name="categorySearchForm" method="POST" action="accounts.php">
                Filter by category: <input type="text" name="category_input" value="" />
                <input type="submit" name="categorySearch" value="Filter">
                </form>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Status
                </button>
            </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                <form name="statusSearchForm" method="POST" action="accounts.php">
                Filter by status: <input type="text" name="status_input" value="" />
                <input type="submit" name="statusSearch" value="Filter">
                </form>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Description
                </button>
            </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
                <form name="descriptionSearchForm" method="POST" action="accounts.php">
                Filter by description: <input type="text" name="description_input" value="" />
                <input type="submit" name="descriptionSearch" value="Filter">
                </form>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFive">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Price Range
                </button>
            </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
                <form name="rangeSearchForm" method="POST" action="accounts.php">
                Filter by range: <input type="text" name="rangeFrom_input" value="" /> <input type="text" name="rangeTo_input" value="" />
                <input type="submit" name="rangeSearch" value="Filter">
                </form>            
            </div>
            </div>
        </div>
    </div>
    <!-- <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseTitle" role="button" aria-expanded="false" aria-controls="collapseTitle">
            Title
        </a>
        </p>
        <div class="collapse" id="collapseTitle">
        <div class="card card-body">
            <form name="titleSearchForm" method="POST" action="accounts.php">
            Filter by title: <input type="text" name="title_input" value="" />
            <input type="submit" name="titleSearch" value="Filter">
            </form>
        </div>
    </div>
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseCategory" role="button" aria-expanded="false" aria-controls="collapseCategory">
            Category
        </a>
        </p>
        <div class="collapse" id="collapseCategory">
        <div class="card card-body">
            <form name="categorySearchForm" method="POST" action="accounts.php">
            Filter by category: <input type="text" name="category_input" value="" />
            <input type="submit" name="categorySearch" value="Filter">
            </form>
        </div>
    </div>
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseStatus" role="button" aria-expanded="false" aria-controls="collapseStatus">
            Status
        </a>
        </p>
        <div class="collapse" id="collapseStatus">
        <div class="card card-body">
            <form name="statusSearchForm" method="POST" action="accounts.php">
            Filter by status: <input type="text" name="status_input" value="" />
            <input type="submit" name="statusSearch" value="Filter">
            </form>
        </div>
    </div>
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseDescription" role="button" aria-expanded="false" aria-controls="collapseDescription">
            Description
        </a>
        </p>
        <div class="collapse" id="collapseDescription">
        <div class="card card-body">
            <form name="descriptionSearchForm" method="POST" action="accounts.php">
            Filter by description: <input type="text" name="description_input" value="" />
            <input type="submit" name="descriptionSearch" value="Filter">
            </form>
        </div>
    </div>
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseRange" role="button" aria-expanded="false" aria-controls="collapseRange">
            Range
        </a>
        </p>
        <div class="collapse" id="collapseRange">
        <div class="card card-body">
            <form name="rangeSearchForm" method="POST" action="accounts.php">
            Filter by range: <input type="text" name="rangeFrom_input" value="" /> <input type="text" name="rangeTo_input" value="" />
            <input type="submit" name="rangeSearch" value="Filter">
            </form>
        </div>
    </div> -->

    <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); } ?>
        
    <div class="cardContainer">       
        <?php 
            $query = "SELECT * FROM accounts ";
            if(isset($_POST['titleSearch'])){
                $title_term = $_POST['title_input'];
                $query .= "WHERE title = '{$title_term}'";
            } 
            if(isset($_POST['categorySearch'])){
                $category_term = $_POST['category_input'];
                $query .= "WHERE category = '{$category_term}'";
            }
            if(isset($_POST['statusSearch'])){
                $status_term = $_POST['status_input'];
                $query .= "WHERE status = '{$status_term}'";
            }
            if(isset($_POST['descriptionSearch'])){
                $description_term = $_POST['description_input'];
                $query .= "WHERE description = '{$description_term}'";
            }
            if(isset($_POST['rangeSearch'])){
                $range_termFrom = $_POST['rangeFrom_input'];
                $range_termTo = $_POST['rangeTo_input'];
                $query .= "WHERE price BETWEEN {$range_termFrom} AND {$range_termTo}";
            }
            $result_accounts = mysqli_query($conn, $query);
            while($account = mysqli_fetch_array($result_accounts)){ ?>
            <div class="card accountCard" style="width: 22rem;">
                <img src="https://chicks-products.s3.amazonaws.com/e7b25a55-2318-4c35-a287-533de0a00427" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $account['Title'] ?></h5>
                    <p class="card-text"><?php echo $account['Description'] ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $account['Category'] ?></li>
                    <li class="list-group-item"><?php echo $account['Price'] ?></li>
                    <li class="list-group-item"><?php echo $account['Status'] ?></li>
                </ul>
                <div class="card-body">
                    <?php if($account['Status'] == 0){?>
                        <a href="buyAccount.php?id=<?php echo $account['ID']?>" class="card-link btn btn btn-success">  <i class="fas fa-shopping-cart"></i> Buy</a> 
                    <?php } ?>
                    <a href="editAccount.php?id=<?php echo $account['ID']?>" class="card-link btn btn-secondary">  <i class="fa fa-marker"></i> Edit</a>
                    <a href="database/delete_account.php?id=<?php echo $account['ID']?>" class="card-link btn btn-danger">  <i class="fa fa-trash-alt"></i> Delete</a>
                </div>
            </div>
        <?php }  ?>
</div>
            

<?php include('includes/footer.php') ?>
