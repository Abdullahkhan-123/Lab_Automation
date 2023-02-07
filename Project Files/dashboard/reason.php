<?php include('partial/header.php') ?>

<style>
  #not-allow 
  {
    cursor: not-allowed;
  }
</style>

<?php

    $ID = $_GET['ID'];
                    
    $select = "
    SELECT product.ID, product.PName, product.PName, product.Title,product.Spec, product.image, product.Desc,  cpritable.Reason, cpritable.Need, cpritable.Desc, cpritable.Date, cpritable.Checking, srstocpri.UniqueC
    FROM cpritable
    INNER JOIN product ON product.ID=cpritable.ProductID
    INNER JOIN srstocpri ON srstocpri.ProductID=cpritable.ProductID
    WHERE cpritable.ProductID='$ID' AND cpritable.Status='1'
    ";
    
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
          $Reason = $row['Reason'];
          $Need = $row['Need'];
          $Desc = $row['Desc'];
          $Date = $row['Date'];

        //   $SrsToCpri = $row['SrsToCpri'];

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
            <h4><?php echo $Date ?></h4><br>
            <p><?php echo $Desc ?></p>

            <?php                             
                // if($Checking=='2')
                // {
                ?>
                    <table class="table">

                        <tr>
                            <th>Reason </th>
                            <td>|</td>
                            <td><?php echo $Reason ?></td>
                        </tr>
                        <tr>
                            <th>Need</th>
                            <td>|</td>
                            <td><?php echo $Need ?></td>
                        </tr>                        
                        <tr>
                            <th>Date</th>
                            <td>|</td>
                            <td><?php echo $Date ?></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>|</td>
                            <td><?php echo $Desc ?></td>
                        </tr>

                    </table>
                    
          </div>    
        </div>
      </div>

<?php include('partial/footer.php') ?>