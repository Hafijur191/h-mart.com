<?php include 'header.php'; ?>
<?php include 'menubar.php'; ?>



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Product Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <!-- my main code here -->
      <div class="row">
        <div class="col-lg-5">
            <!-- add category form -->
            <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New Category</h5>

              <!-- No Labels Form -->
              <form class="row g-3">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Category Name">
                </div>
                <div class="col-md-12">
                    <label for="">Choose your parent category</label>
                  <select id="inputState" class="form-select">
                    <option selected="">Choose category</option>
                    <option>Electronics</option>
                    <option>Cloths</option>
                    <option>Sports</option>
                  </select>
                </div>
                <div class="col-md-12">
                <div class="image-input c-img-file">
                    <small>Choose Category Image</small><br>
        <input type="file" id="choose-file" name="choose-file" accept="image/*" />
        <label for="choose-file">Select File</label>
        <div id="img-preview"></div>
                </div>
                </div>
                <div class="text-start">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form><!-- End No Labels Form -->

            </div>
          </div>
        </div>
        <div class="col-lg-7">
            <!-- all category table -->
            <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Categories Information</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php

                   $category_sql = "SELECT * FROM mart_category";
                   $category_res = mysqli_query($db,$category_sql);
                   $serial = 0;
                   while($row = mysqli_fetch_assoc($category_res)){
                    $cat_id     = $row['ID'];
                    $cat_name   = $row['c_name'];
                    $cat_image  = $row['c_image'];
                    $cat_parent = $row['c_parent'];
                    $cat_status = $row['c_status'];
                    $serial++;
                    ?>
                    <tr>
                    <th scope="row"><?php echo $serial; ?></th>
                    <td>
                        <img src="assets/img/products/category/<?php echo $cat_image; ?>" width="30" alt="">
                    </td>
                    <td><?php echo $cat_name; ?></td>
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
                    ?>
                  
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

 <?php include 'footer.php'; ?>