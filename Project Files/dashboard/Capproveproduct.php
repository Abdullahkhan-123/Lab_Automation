<?php include('partial/header.php') ?>

<div class="card text-center m-auto col-lg-9 col-md-8 col-sm-9 ">
  <div class="card-header">
    Before sumitting this form please check the product one more time
  </div>
  <div class="card-body">
    <h5 class="card-title">Your Approvel will helpful for product owner</h5>    
        <form action="" method="POST">
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="exampleInputEmail1" class="form-label">Reason</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="Reason" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3 col-6">
                    <label for="exampleInputEmail1" class="form-label">Need For Approve</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="Need" aria-describedby="emailHelp" required>    
                </div>
            </div>

            <div class="mb-3 col-12">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <textarea class="form-control" placeholder="Description" id="floatingTextarea2" name="Desc" style="height: 100px" required></textarea>                
            </div>

            <div class="col-12 mb-4">
            <button type="submit" class="btn btn-dark" name="submit">Approve <i style="font-size:18px" class="fa">&#xf046;</i></button>            
            </div>

        </form>

  <div class="card-footer text-muted">
    Your answer will show SRS Department and also show this the product owner
  </div>
</div>


<?php include('partial/footer.php') ?>

<?php

    if(isset($_POST['submit']))
    {
        $Reason = $_POST['Reason'];
        $Need = $_POST['Need'];        
        $Desc = $_POST['Desc'];        
        $Unique = bin2hex(random_bytes(5));
        $ProductID = $_GET['ID'];

        $sql = mysqli_query($conn,
        "INSERT INTO `cpritable`(`Reason`, `Need`, `Desc`, `ProductID`, `UniqueC`, `Status`, `Checking`) VALUES 
                                ('$Reason','$Need','$Desc','$ProductID','$Unique','1','1')");

        if($sql==TRUE)
        {
                $sql1 = mysqli_query($conn,
                    "UPDATE `product` SET `Checking`='1' WHERE `ID`=$_GET[ID]");
            if($sql1==TRUE)
            {
                $sql2 = mysqli_query($conn,
                    "UPDATE `srstocpri` SET `Checking`='1' WHERE `ID`=$_GET[Rg]");

                    if($sql2==TRUE)
                    {
                        echo "<script>
                            alert('Product Approve succesfully');
                            window.location.href='Cdetapprove.php';
                        </script>";
                    }              
                    else
                    {
                        echo "<script>
                            alert('Product Not Approve For SrsToCpri Table issue');
                            window.location.href='Capproveproduct.php';
                        </script>";
                    }          
            }
            else
                {
                echo "<script>
                    alert('Product not Approve Product Table issue');
                    window.location.href='Capproveproduct.php';
                </script>";
                }
        }        
    }




?>