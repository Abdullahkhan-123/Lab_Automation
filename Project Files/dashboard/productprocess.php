<?php include('partial/header.php'); ?>

<!-- Start Recent Sales -->
<div class="m-auto col-lg-9 col-md-8 col-sm-9 ">
<div class="card col-span-2 xl:col-span-1">
        <div class="card-header">Your Product Process
            <p>If the product will approve the dougth colour will be green if
                 the rejecte the dougth colour will be red and if the product
                  dougth colour will yellow the product in the process</p>
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
                                    
                                        $select = "SELECT * FROM `product` WHERE `UserID`='$_SESSION[ID]' AND `Status`='1' AND UniqueC='$_GET[Code]'";
                                            
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
                                                <tr> 
                                                <?php
                                                
                                                    if($Checking=='1')
                                                    {
                                                        ?>
                                                            <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                                                        <?php
                                                    }                                    
                                                    elseif($Checking=='0')
                                                    {
                                                        ?>
                                                            <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i class="fad fa-circle"></i></td>
                                                        <?php
                                                }
                                                elseif($Checking=='2')
                                                {
                                                    ?>
                                                        <td class="border border-l-0 px-4 py-2 text-center text-red-500"><i class="fad fa-circle"></i></td>
                                                    <?php
                                                }


                                            ?>
                                            
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
                                
                                    $select = "SELECT * FROM `product` WHERE `UserID`='$_SESSION[ID]' AND `Status`='1'";
                                        
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
                                            <tr> 
                                            <?php
                                            
                                                if($Checking=='1')
                                                {
                                                    ?>
                                                        <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                                                    <?php
                                                }                                    
                                                elseif($Checking=='0')
                                                {
                                                    ?>
                                                        <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i class="fad fa-circle"></i></td>
                                                    <?php
                                                }
                                                elseif($Checking=='2')
                                                {
                                                    ?>
                                                        <td class="border border-l-0 px-4 py-2 text-center text-red-500"><i class="fad fa-circle"></i></td>
                                                    <?php
                                                }


                                            ?>
                                            
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