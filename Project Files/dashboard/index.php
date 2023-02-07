<?php include('partial/header.php'); ?>
<style>
  #welcome{
    border-radius:5%;    
  }
</style>

  <!-- strat content -->
    <div class="bg-dark col-6 py-5 m-auto" id="welcome">

        <div class="m-auto text-white p-1 text-center">
        <h1>Welcome <?php echo $_SESSION['UserName'] ?></h1>
        </div>

    </div> 

    

<?php include('partial/footer.php'); ?>