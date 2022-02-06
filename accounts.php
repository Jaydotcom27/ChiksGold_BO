<style> <?php include('styling/generalStyling.css') ?> </style>
<?php include('db.php') ?>

<?php include('includes/header.php') ?>
<?php include('includes/navigation.php') ?>

<div class="mainWrap">
    <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-warning fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php session_unset(); } ?>
    <h1>Accounts Overview</h1>
    <h5>Filter your data</h5>
    <div class="innerWrap">
    <div class="accordion filterRange" id="accordionExample">
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
                Filter by title: <input type="text" name="title_input" class="form-control" value="" />
                <input type="submit" name="titleSearch" class="btn btn-primary" value="Filter">
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
                <form class="filterGroup" name="categorySearchForm" method="POST" action="accounts.php">
                Filter by category: <input type="text" name="category_input" class="form-control" value="" />
                <input type="submit" name="categorySearch" class="btn btn-primary value="Filter">
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
                <form class="filterGroup" name="statusSearchForm" method="POST" action="accounts.php">
                Filter by status: 
                <select name="status_input" value="" class="custom-select">
                <option value="1">Sold</option>
                <option value="0">Available</option>
                </select>  
                <input type="submit" name="statusSearch" class="btn btn-primary value="Filter">
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
                <form class="filterGroup" name="descriptionSearchForm" method="POST" action="accounts.php">
                Filter by description: <input type="text" name="description_input" class="form-control" value="" />
                <input type="submit" name="descriptionSearch" class="btn btn-primary value="Filter">
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
                <form class="filterGroup" name="rangeSearchForm" method="POST" action="accounts.php">
                Filter by range: <input type="number" placeholder="From" name="rangeFrom_input" class="form-control" value="" /> <input type="number" placeholder="To" name="rangeTo_input" class="form-control" value="" />
                <input type="submit" name="rangeSearch" class="btn btn-primary value="Filter">
                </form>            
            </div>
            </div>
        </div>
        <a href="/ChiksGold_BO/createAccount.php"><button type="button" class="btn btn-dark btn-lg btn-block mt-btn" style="bg-color:#626377;">Create new Account</button></a>
    </div>  
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
                    <li class="list-group-item"><i class="fas fa-gamepad px-2" style="color:#626377;"></i><?php echo $account['Category'] ?></li>
                    <li class="list-group-item"><i class="fas fa-coins px-2" style="color:#626377;"></i><?php echo $account['Price'] ?></li>
                    <?php if($account['Status'] == 0){?>
                        <span class="badge badge-success">Available</span>
                    <?php } else { ?>
                        <span class="badge badge-primary">Sold</span>
                    <?php } ?>
                </ul>
                <div class="card-body">
                    <?php if($account['Status'] == 0){?>
                        <a href="buyAccount.php?id=<?php echo $account['ID']?>" class="card-link btn btn btn-success">  <i class="fas fa-shopping-cart"></i> Buy</a> 
                    <?php } ?>
                    <a href="editAccount.php?id=<?php echo $account['ID']?>" class="card-link btn btn-dark">  <i class="fa fa-marker"></i> Edit</a>
                    <a href="database/delete_account.php?id=<?php echo $account['ID']?>" class="card-link btn btn-danger">  <i class="fa fa-trash-alt"></i> Delete</a>
                </div>
            </div>
        <?php }  ?>
    </div>
</div>
            

<?php include('includes/footer.php') ?>
