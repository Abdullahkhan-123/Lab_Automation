<?php

require('../config/constant.php');

    $ID = $_GET['ID'];

    $del = "UPDATE `product` SET `SrsToCpri`='1' WHERE `ID`='$ID'";

    $run = mysqli_query($conn,$del);

    if($run==TRUE)
    {        
        $Unique = bin2hex(random_bytes(6));

        $sql = "INSERT INTO `srstocpri`(`ProductID`, `UniqueC`, `Status`) VALUES ('$ID','$Unique','1')";

        $run = mysqli_query($conn,$sql);

        if($sql==TRUE)
        {
            echo "<script>
                alert('Product succesfully Send To CPRI Department!')
                window.location.href='Srsproducts.php';
            </script>";
        }        
        else
        {
            echo "<script>
                alert('Product Not Send To CPRI Department! for Cpri Table reason')
                window.location.href='Srsproducts.php';
            </script>";
        }
    }
    else
    {
        echo "<script>
                alert('Product Not Send To CPRI Department! for Product Table reason')
                window.location.href='Srsproducts.php';
            </script>";
    }


?>