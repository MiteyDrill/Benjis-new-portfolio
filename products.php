<?php
include("./main_header.php");
/*<body>*/


//database

// connection parameter
$connect = mysqli_connect("localhost", "root", "", "products");


// select from query
$query = "SELECT * FROM product ORDER BY id ASC";

//functions grabs data from database
$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0){

    //display page
    ?>
    <!--container start-->
    <main id='product-page-wrapper'>
    <?php


    while($row = mysqli_fetch_array($result)){
        //product
        ?>

            <div class='product-container'>
                <img src="<?php echo ".". $row["img_location"] ?>" style="width: 300px; height: 300px" href="product image"/>
                <div class='product-details'>
                    <h2><?php echo $row["title"] ?></h2>
                    <p><?php echo $row["description"] ?></p>
                    <a href=".\product?id=<?php echo $row["id"] ?>">Details</a>
                </div>
            </div>

        <?php
    }
    ?>

    </main> <!--container end-->

<?php
} else {
    echo "No results found";
}

?>



<?php
/*</body>*/
include("./footer.php");
?>
