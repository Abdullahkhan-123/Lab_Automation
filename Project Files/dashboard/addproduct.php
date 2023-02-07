<?php include('partial/header.php') ?>

<div class="card text-center m-auto col-lg-9 col-md-8 col-sm-9 ">
  <div class="card-header">
    You are sending this product to SRS Department after testing the SRS department will sent to CPRI department CPRI department will publish or reject your product
  </div>
  <div class="card-body">
    <h5 class="card-title">Add Your Product Now</h5>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="Name" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3 col-6">
                    <label for="exampleInputEmail1" class="form-label">Product Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="Title" aria-describedby="emailHelp" required>    
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-6">
                    <label for="exampleInputEmail1" class="form-label">Product Specfication</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="Spec" aria-describedby="emailHelp" required>    
                </div>        
                <div class="mb-3 col-6">
                    <label for="exampleInputEmail1" class="form-label">Product Image</label>
                    <input type="file" class="form-control" id="inputGroupFile04" name="image" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>  
                </div>
            </div>

            <div class="mb-3 col-12">
                <label for="exampleInputEmail1" class="form-label">Product Description</label>
                <textarea class="form-control" placeholder="Description" id="floatingTextarea2" name="Desc" style="height: 100px" required></textarea>                
            </div>

            <div class="col-12 mb-4">
            <button type="submit" class="btn btn-dark" name="submit">Sent <i style="font-size:18px" class="fa">&#xf061;</i></button>            
            </div>

        </form>

  <div class="card-footer text-muted">
    You will recive your answer after 2 day's process
  </div>
</div>


<?php include('partial/footer.php') ?>

<?php

    if(isset($_POST['submit']))
    {
        $Name = $_POST['Name'];
        $Title = $_POST['Title'];
        $Spec = $_POST['Spec'];
        $Desc = $_POST['Desc'];        
        $Unique = bin2hex(random_bytes(5));        
        $UserID = $_SESSION['ID'];

        if(isset($_FILES['image']))
                {
                    $img_name = $_FILES['image']['name'];
                    $tmp_name = $_FILES['image']['tmp_name'];

                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);
                  
                    $extention = ['png', 'jpg', 'jpeg', 'jfif'];
                      if(in_array($img_ext, $extention)===TRUE)
                      {                        
                            $time = time();
                            $new_img_name = $time.$img_name;

                          if(move_uploaded_file($tmp_name, "Upload/ProductImg/".$new_img_name))
                          {            
                              $random_id = rand(time(), 10000000);

                              $sql = mysqli_query($conn,
                              "INSERT INTO `product`(`PName`, `Title`, `Spec`, `image`, `Desc`, `UniqueC`, `UserID`) VALUES 
                                                     ('$Name','$Title','$Spec','$new_img_name','$Desc','$Unique','$UserID')");

                              if($sql==TRUE)
                              {
                                echo "<script>
                                    alert('Product uploaded succesfully');
                                    window.location.href='productprocess.php';
                                </script>";
                              }
                              else
                              {
                                echo "<script>
                                    alert('Product not upload');
                                    window.location.href='addproduct.php';
                                </script>";
                              }

                          }
                      }
                      else{
                          echo "<script>
                              alert('Please select an image file jpg, jpeg, png, jfif');
                              window.location.href='addproduct.php';
                          </script>";
                      }

                }
                else{
                  echo "<script>
                      alert('Please select an image');
                      window.location.href='addproduct.php';
                  </script>";
              }

    }

?>