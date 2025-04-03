<?php require ('./addToPage/header.php'); 

    require_once "./addToPage/database.php";
    $spaceObj = new Planet();

    //edit our customer record
    if(isset($_GET['editId']) && !empty($_GET['editId'])){
        $editId = $_GET['editId'];
        $object = $spaceObj->displayRecordById($editId);
    } 

    //update the record in the customer table
    if(isset($_POST['update'])){
        $spaceObj->updateRecord($_POST);
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
    <form action="edit.php" method="POST">
        <div>
            <label for="newname">Object Name</label>
            <input type="text" name="newname" value="<?php echo $object['objname']; ?>" required="">
        </div>
        <div>
            <label for="newtype">Object Type</label>
            <select name="newtype" id="newtype" value="<?php echo $object['objtype']; ?>" placeholder="select the type of object" required="">
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
            <label for="newinfo">Description</label>
            <input type="text" name="newinfo" value="<?php echo $object['info']; ?>" placeholder="Enter a brief description" required="">
        </div>
        <input type="hidden" name="ID" value="<?php echo $object['ID']; ?>">
        <input type="submit" name="submit" style="float:right;" value="Submit">
    </form>

</main>



<?php require ('./addToPage/footer.php'); ?>