<?php require ('./addToPage/header.php'); 

    require_once "./addToPage/database.php";
    $spaceObj = new Planet();

    // insert record in the customer table
    if(isset($_POST['submit'])){
    $spaceObj->insertData($_POST);
    }

    if(!isset($_SESSION['username'])){
        echo "
        <section class='title'>
        <div>
            <h1>You are not Signed in! Please sign in to view this page.</h1>
        </div>
        </section>
        ";   
        exit();
    }

?>



<!--  -->
<main class="addnup">
    <form action="add.php" method="POST">
        <div>
            <label for="objname">Object Name</label>
            <input type="text" name="objname" placeholder="Enter name of object" required="">
        </div>
        <div>
            <label for="objtype">Object Type</label>
            <select name="objtype" id="objtype" placeholder="select the type of object" required="">
                <option value="planet">Planet</option>
                <option value="giant">Gas Giant</option>
                <option value="star">Star</option>
                <option value="asteroid">Asteroid</option>
                <option value="comet">Comet</option>
                <option value="meteor">Meteor</option>
                <option value="blackhole">Black Hole</option>
            </select>
        </div>
        <div>
            <label for="info">Description</label>
            <input type="text" name="info" placeholder="Enter a brief description" required="">
        </div>
        
        <input type="submit" name="submit" style="float:right;" value="Submit">
    </form>

</main>



<?php require ('./addToPage/footer.php'); ?>