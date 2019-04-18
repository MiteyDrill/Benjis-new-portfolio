<?php
include('main_header.php');


//check if url variable is correct
if(isset($_GET['id'])){

    //initialize variable
    $intId = 0;
    
    //checks to see if id is set
    $id = preg_replace('#[^0-9]#i',"", $_GET['id'] );

    // connection parameter
    $connect = mysqli_connect("localhost", "root", "", "products");

    //created a template
    $sql = "SELECT * FROM product WHERE id=?;";

    //prepared statement
    $stmt = mysqli_stmt_init($connect);

    //prepare the prepared statement
        //check if the statement works for the template
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL Statement failed";
    } else {

        //'bind' parameters to the 'placeholder' (statement, type[s], data)
        mysqli_stmt_bind_param($stmt, 'i', $id);

        //run sql query - run paramters inside database
        mysqli_stmt_execute($stmt);

        //take results from executed statement and put them in a variable
        $result = mysqli_stmt_get_result($stmt);

        

       $row = mysqli_fetch_assoc($result);
        ?>
        
        <!-- Html -->

        <main id='product-wrapper'>
            <div id='product-central'>
                <img src="<?php echo ".". $row["img_location"] ?>" style="width: 300px; height: 300px" href="product image"/>
                <div  id='product-wrap'>
                    <h2><?php echo $row["title"] ?></h2>
                    <p><?php echo $row["description"] ?></p>
                </div>
            </div>
         </main>

        <?php
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