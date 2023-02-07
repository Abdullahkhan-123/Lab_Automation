<?php include('partial/header.php') ?>

<style>
  #not-allow 
  {
    cursor: not-allowed;
  }
</style>

<?php

    $ID = $_GET['ID'];
                    
    $select = "SELECT * FROM `product` WHERE `ID`='$ID' AND `Status`='1'";
    
    $run=mysqli_query($conn,$select);
    
    $rowI = mysqli_num_rows($run);
    $No = 1;
    
    if($rowI)
    {
      while($row = mysqli_fetch_assoc($run))
        {
          $ID = $row['ID'];
          $Product = $row['PName'];
          $image = $row['image'];
          $Code = $row['UniqueC'];
          $Date = $row['Date'];
          $Checking = $row['Checking'];
          $SrsToCpri = $row['SrsToCpri'];
          $Desc = $row['Desc'];
          $Spec = $row['Spec'];


        }
      }
?>
      <div class="container-fluid col-lg-9 col-md-8 col-sm-7 m-auto mt-5 bg-grey">
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4">
            <img src="<?php echo $productimg,$image?>">
          </div>
          <div class="col-sm-8">
            <h2><?php echo $Product ?></h2><br>
            <h4><strong>Specfictaion:</strong> <?php echo $Spec ?></h4><br>
            <p><strong>Description:</strong><?php echo $Desc?> </p>

            <?php

                if($_SESSION['Type']=='Srs')
                {
                  if($SrsToCpri=='0')
                  {
                    ?>
                      <div class="col-12 text-center">
                        <p>For Sent To CPRI Department click the button</p>
                        <button type="button" class="btn btn-dark" name="submit" onclick="window.location.href='SendToCpri.php?ID=<?php echo $ID ?>'">Sent SRS <i style="font-size:18px" class="fa">&#xf064;</i></button>
                      </div>
                    <?php
                  } 
                  else
                  {
                    ?>
                      <div class="col-12 text-center">
                        <p class="text-danger">This product is already Sent To CPRI Department!</p>
                        <button type="button" id="not-allow" class="btn btn-dark" name="submit">Sent SRS <i style="font-size:18px" class="fa">&#xf064;</i></button>
                      </div>
                    <?php
                  }           
                }
                elseif($_SESSION['Type']=='Cpri')
                {

                  $select = "SELECT * FROM `srstocpri` WHERE `ProductID`='$ID' AND `Status`='1'";
    
                  $run=mysqli_query($conn,$select);
                  
                  $rowI = mysqli_num_rows($run);
                  $No = 1;
                  
                  if($rowI)
                  {
                    while($row = mysqli_fetch_assoc($run))
                      {
                        $Rg = $row['ID'];
                        $Checking = $row['Checking'];
                        $ProductID = $row['ProductID'];

                        if($Checking=='0')
                        {
                          ?>
                            <div class="col-12 text-center">
                              <p>You have to Approve Or Reject this Product using these button</p>
                              <button type="button" class="btn btn-success" name="submit" onclick="window.location.href='Capproveproduct.php?ID=<?php echo $ProductID ?>&&Rg=<?php echo $Rg ?>'">Approve CPRI <i style="font-size:18px" class="fa">&#xf05d;</i></button>
                              <button type="button" class="btn btn-danger" name="submit" onclick="window.location.href='Cprirejectproduct.php?ID=<?php echo $ProductID ?>&&Rg=<?php echo $Rg ?>'">Reject CPRI <i style="font-size:18px" class="fa">&#xf2d4;</i></button>
                            </div>
                          <?php
                        }
                        else
                        {
                          ?>
                            <div class="col-12 text-center">
                              <p class="text-danger">This product owner is already reseved his answer please check your list</p>
                              <button type="button" id="not-allow" class="btn btn-success" name="submit">Approve CPRI <i style="font-size:18px" class="fa">&#xf05d;</i></button>
                              <button type="button" id="not-allow" class="btn btn-danger" name="submit">Reject CPRI <i style="font-size:18px" class="fa">&#xf2d4;</i></button>
                            </div>
                          <?php
                        }
                        
                        


                      }
                    }


                  
                  }

            ?>      
          </div>    
        </div>
      </div>

<?php include('partial/footer.php') ?>