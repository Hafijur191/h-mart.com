<?php 
include "connection.php"; 

function Show_Sub_Category($cat_id){
    global $db;
    $sub_cat_sql = "SELECT * FROM mart_category WHERE c_parent = '$cat_id' ";
           $sub_cat_res = mysqli_query($db,$sub_cat_sql);
           while($row = mysqli_fetch_assoc($sub_cat_res)){
                    $cat_id     = $row['ID'];
                    $cat_name   = $row['c_name'];
                    $cat_image  = $row['c_image'];
                    $cat_status = $row['c_status'];

                    ?>
                    <tr>
                    <th scope="row"><?php echo '-'; ?></th>
                    <td>
                        <img src="assets/img/products/category/<?php echo $cat_image; ?>" width="30" alt="">
                    </td>
                    <td><?php echo '<i class="bi bi-arrow-return-right"></i>' .$cat_name; ?></td>
                    <td>
                        <?php if($cat_status == 0)echo '<span class="badge bg-danger">Inactive</span>';else echo '<span class="badge bg-success">Active</span>'; ?>
                    </td>
                    <td>
                        <a href=""><i class="bi bi-pencil-square text-success"></i></a>
                        <a href=""><i class="bi bi-trash text-danger"></i></a>
                    </td>
                  </tr>
                    <?php
           }
}

?>