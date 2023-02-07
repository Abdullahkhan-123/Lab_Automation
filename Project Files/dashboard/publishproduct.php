<?php include('partial/header.php') ?>

<style>
    #tr{
        cursor:pointer;    
    }
    #tr:hover{
        cursor:pointer;
        background-color: rgb(184 189 187 / 50%);
        color:black;
    }
</style>

<!-- Start Recent Sales -->
<div class="m-auto col-lg-9 col-md-8 col-sm-9 ">
<div class="card col-span-2 xl:col-span-1">
        <div class="card-header">Your Product Process
            <p>You can check your product details to click your product and also you can check the bluid ponits</p>
        </div>


        <?php

            if(isset($_GET['Code']))
            {
                    ?>

                    <table class="table-auto w-full text-left">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2 border-r">Config</th>
                                        <th class="px-4 py-2 border-r">product</th>
                                        <th class="px-4 py-2 border-r">Image</th>
                                        <th class="px-4 py-2 border-r">Code</th>
                                        <th class="px-4 py-2">Upload date </th>                    
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600">
                                        <?php
                                        
                                            $select = "SELECT * FROM `product` WHERE `UserID`='$_SESSION[ID]' AND `Status`='1' AND `Checking`='1' AND `UniqueC`='$_GET[Code]'";
                                                
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

                                                    ?>
                                                    <tr id="tr" onclick="window.location.href='reason.php?ID=<?php echo $ID ?>'">                                 
                                                    <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                                                    <td class="border border-l-0 px-4 py-2"><?php echo $Product ?></td>
                                                    <td class="border border-l-0 px-4 py-2">
                                                        <img src="<?php echo $productimg,$image ?>" style="height:90px; width:150px; margin:auto;">                                    
                                                    </td>
                                                    <td class="border border-l-0 px-4 py-2"><?php echo $Code ?></td>
                                                    <td class="border border-l-0 border-r-0 px-4 py-2"><?php echo $Date ?></td>
                                                </tr>                            
                                                <?php
                                                }
                                            }
                                    
                                        ?>                        
                                </tbody>
                            </table>

                    <?php
            }
            else
            {
                ?>

                        <table class="table-auto w-full text-left">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2 border-r">Config</th>
                                        <th class="px-4 py-2 border-r">product</th>
                                        <th class="px-4 py-2 border-r">Image</th>
                                        <th class="px-4 py-2 border-r">Code</th>
                                        <th class="px-4 py-2">Upload date </th>                    
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600">
                                        <?php
                                        
                                            $select = "SELECT * FROM `product` WHERE `UserID`='$_SESSION[ID]' AND `Status`='1' AND `Checking`='1'";
                                                
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

                                                    ?>
                                                    <tr id="tr" onclick="window.location.href='reason.php?ID=<?php echo $ID ?>'">                                 
                                                    <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                                                    <td class="border border-l-0 px-4 py-2"><?php echo $Product ?></td>
                                                    <td class="border border-l-0 px-4 py-2">
                                                        <img src="<?php echo $productimg,$image ?>" style="height:90px; width:150px; margin:auto;">                                    
                                                    </td>
                                                    <td class="border border-l-0 px-4 py-2"><?php echo $Code ?></td>
                                                    <td class="border border-l-0 border-r-0 px-4 py-2"><?php echo $Date ?></td>
                                                </tr>                            
                                                <?php
                                                }
                                            }
                                    
                                        ?>                        
                                </tbody>
                            </table>

                <?php
            }

        ?>
    </div>
</div>
    <!-- End Recent Sales -->

<?php include('partial/footer.php') ?>