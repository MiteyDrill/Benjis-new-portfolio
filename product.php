<?php
include('main_header.php');


//check if url variable is correct
if(isset($_GET['id'])){
    
    //checks to see if id is set
    $id = preg_replace('#[^0-9]#i',"", $_GET['id'] );

    // connection parameter
    $connect = mysqli_connect("localhost", "root", "", "products");


    $sql = mysqli_query($connect, "SELECT * FROM product WHERE id='$id' LIMIT 1");

    $productCount = mysqli_num_rows($sql);

    if($productCount > 0){

        while($row = mysqli_fetch_array($sql)){

        ?>
        


        <img src="<?php echo ".". $row["img_location"] ?>" style="width: 300px; height: 300px" href="product image"/>
        <h2><?php echo $row["title"] ?></h2>
        <p><?php echo $row["description"] ?></p>


        <?php
        }

    } else {

        echo "item does not exist";
        //redirect
        header('Location: ./products');
        exit();

    }
} else {
    echo "variable to render information missing";
}

// select from query
$query = "SELECT * FROM product ORDER BY id ASC";
?>



<?php
include('footer.php');
?>