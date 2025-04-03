<?php require ('./addToPage/header.php'); 
      require ('./addToPage/footer.php');

    //   if user enters page without being signed in, do not show them anything and tell them to leave
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



<section class="title">
    <div>
        <h1>Welcome, <?php echo $_SESSION['username'];?></h1>
        <h3>What would you like to do today?<h3>
    </div>
</section>

<main class="admin">
    
    <section>
        <div>
            <h2>Current registered Users:</h2>

        </div>
        <div>
            <h2>Current registered Space Objects:</h2>

        </div>


    </section>


</main>