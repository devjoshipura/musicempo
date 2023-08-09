<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location:index.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Music Emporium | Product</title>
        <?php
        include('./common/style.php')
        ?>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php
            include('./common/menu.php')
            ?>
            <?php
            include('./common/sidebar.php')
            ?>
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Product</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Product</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Add Product</h3>
                                            </div>
                                            <form action="product_process.php" method="post" enctype="multipart/form-data">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"> Product Name </label>
                                                        <input type="text" name="productname" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Product Image</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="productimage" class="custom-file-input" id="exampleInputFile">
                                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                                    file</label>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Product Price </label>
                                                        <input type="number" name="productprice" class="form-control" id="exampleInputEmail1" placeholder="Enter Product price">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Product Description </label>
                                                        <textarea type="text" name="productdesc" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Description"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Select category</label>
                                                        <select class="form-control select2" name="categoryid" style="width: 100%;">
                                                            <option selected disabled>Select Category</option>
                                                            <?php
                                                            include_once('include/config.php');
                                                            $qry = "SELECT * FROM category";
                                                            $res = mysqli_query($conn, $qry);
                                                            while ($row = mysqli_fetch_row($res)) {
                                                            ?>
                                                                <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>

                                                            <?php
                                                            }
                                                            ?>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" name="submit" value="add" class="btn btn-primary col-md-12">Add</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Product Table</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Product Name</th>
                                                    <th>Category Name</th>
                                                    <th>Product Image</th>
                                                    <th>Product Price</th>
                                                    <th>Product Description</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include_once('include/config.php');
                                                $catcount = 1;
                                                $qry = "SELECT * FROM Product ORDER BY id ASC";
                                                $res = mysqli_query($conn, $qry);
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                    $cattqry = "SELECT * FROM category WHERE ID='" . $row['categoryid'] . "'";
                                                    $cattres = mysqli_query($conn, $cattqry);
                                                    $cattrow = mysqli_fetch_row($cattres);
                                                ?>
                                                    <tr>
                                                        <td><?php echo $catcount; ?></td>
                                                        <td><?php echo $row['productname']; ?></td>
                                                       <?php ?>
                                                        <td><?php echo $cattrow[1]; ?></td>
                    
                                                        <td><a href="<?php echo '../image/product/' . $row['productimage']; ?>" target="_blank"><img src="<?php echo '../image/product/' . $row['productimage']; ?>" height="100px" width="100px" alt="image of product"></a></td>
                                                        <td><?php echo $row['productprice']; ?></td>
                                                        <td><?php echo $row['productdesc']; ?></td>
                                                        <td><a href="product_edit.php?id=<?php echo $row['id']; ?>&val=edit"><i class="fas fa-edit"></i></a></td>
                                                        <td><a href="product_process.php?id=<?php echo $row['id']; ?>&val=del"><i class="fas fa-trash"></i></a></td>
                                                    </tr>
                                                <?php
                                                    $catcount++;
                                                }
                                                ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Product Name</th>
                                                    <th>Category Name</th>
                                                    <th>Product Image</th>
                                                    <th>Product Price</th>
                                                    <th>Product Description</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->


                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
            </div>
            <?php
            include('./common/footer.php')
            ?>
        </div>
        <?php
        include('./common/script.php')
        ?>
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    </body>

    </html>
<?php
}
?>