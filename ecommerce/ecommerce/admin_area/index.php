<html>
    <head>
        <title>
          Admin Dashboard.
        </title>
    
        <!--bootstrap css link-->
        <link rel="stylesheet" href= " https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"/>
        <!--front awesome link -->
        <link rel="stylesheet" href= " https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"/>
        <!--bootstrap js link -->
        <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
        <!--css style-->
        <link rel="stylesheet" href="style.css">
        <style>
          .admin_image{
          height:100px;
          width:120px ;
          object-fit:contain;

}
          </style>
    </head>
    <body>
      <!-- navbar -->
        <div class="container-fluid p-0">
          <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid p-0 ">
          <img src="./images/logo.jfif " alt="" class="admin_image">
          <nav class="navbar navbar-expand-lg ">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="" class="nav-link text-light">Welcome Guest</a>
              </li>
            </ul>
</nav>
</div>
</nav>
<div class="bg-light">
  <h4 class="text-light text-center p-3 bg-dark bg-gradient">Manage Details</h4>
</div>
<!-- third child -->
<div class="row ">
            <div class="col-md-12 bg-success p-1 d-flex align-items ">
              <div >
                <a href="#" ><img src="./images/admin-logo-3.png"  alt="" class="admin_image"></a>
                <p class="bg-success text-light text-center">Admin</p>
              </div>
              <div class="button text-center bg-success">
                <div class="p-3"> 
                <button class="my-3"><a href="" class="nav-link text-light bg-success my-1"></a>Insert Products</button>
                <button><a href="" class="nav-link text-light bg-success my-1"></a>View Prdouct</button>
                <button><a href="index.php?insert_category" class="nav-link text-light bg-success my-1">Insert Categories</a></button>
                <button><a href="" class="nav-link text-light bg-success my-1">View Categories</a></button>
                <button><a href="index.php?insert_brand" class="nav-link text-light bg-success my-1">Insert Brands</a></button>
                <button><a href="" class="nav-link text-light bg-success my-1"></a>View Brand</button>
                <button><a href="" class="nav-link text-light bg-success my-1"></a>All Orders</button>
                <button><a href="" class="nav-link text-light bg-success my-1"></a>All Payemnts</button>
                <button><a href="" class="nav-link text-light bg-success my-1"></a>List User</button>
                <button><a href="" class="nav-link text-light bg-success my-1"></a>Log Out</button>
              </div>
            </div>
          </div>
          <!-- fourth class -->
          <div class="container my-5">
            <?php
            if(isset($_GET['insert_category']))
            {
              include('insert_categories.php');
            }
            if(isset($_GET['insert_brand']))
            {
              include('insert_brands.php');
            }
            ?>
          </div> 

</div>

  <!-- last child -->
  <div class="bg-success p-3 text-center">
                            <p>All rights reserved  Designed by Shristi Tandukar-2023</p>
                        </div>
          
    
        </body>

</html>