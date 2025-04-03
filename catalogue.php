<?php require ('./addToPage/header.php'); 
    require_once './addToPage/database.php';
    $planetObj = new Planet();

    if(isset($_POST['update'])){
        $planetObj->updateRecord($_POST);
      }

?>

<main class="catalogue">
    
    <section>
        <h2 class="alt-color">How Does the Catalogue Work?</h2>
        <p class="alt-color">The Space Catalogue allows users to submit any object they find into our database! to add your own, click the gear icon in the celestial objects table. clicking the refresh button on any of the saved objects will allow you to edit that specific entry! Reminder, you can only edit or update saved items if you are registered and currently logged into our website. in order to register, simply click the planet at the top and scroll all the way down to the page. happy stargazing!</p>
    </section>

    <!-- table that displays list of stored space objects -->
    <section> 
        <div class="crudTable">

            <h2>Celestial Objects</h2>

            <table>
                <thead>
                    <tr>
                    <th><p>ID</p></th>
                    <th><p>Object Name</p></th>
                    <th><p>Object Type</p></th>
                    <th><p>User who Submitted</p></th>
                    <th><a href="add.php"><button><img src="./img/gear.png" /></button></a></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- replace with php code  -->
                    <?php 
                    $objects = $planetObj->displayData();
                    foreach($objects as $object){
                        if(empty($object['ID'])){
                            $object['ID'] = 0;
                            $object['objname'] = 'Earth';
                            $object['objtype'] = 'Planet';
                            $object['username'] = 'System';
                        }

                    ?>

                    <tr>
                        <td><?php echo $object['ID'] ?></td>
                        <td><?php echo $object['objname'] ?></td>
                        <td><?php echo $object['objtype'] ?></td>
                        <td><?php echo $object['username'] ?></td>
                        <td><a href="edit.php"><button><img src="./img/update_circle.png" /></button></a></td>
                    </tr>

                    <?php } ?>
                    
                </tbody>
            </table>
        </div>

        <div class="objectInfo">
            <!-- object image -->
            <div></div>

            <div>
            <!-- object name -->
             <h2>Jupiter</h2>
             <h3>Gas Giant</h3>
            <!-- object description -->
             <p>Jupiter is an orange gas giant located within our solar system. a note of interest is that jupiter has a red circle, which is an ever lasting storm inside of it!</p>
             </div>
        </div>
    </section>



</main>

<?php require ('./addToPage/footer.php'); ?>