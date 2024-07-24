<html>
    <head>
        <title>
            Welcome to my website.
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
            *{
                margin:0;
                padding:0;
                box-sizing: border-box;
            }

        .card-img-top{
        height:50%;
        width:150px ;
        object-fit:contain;
        position:relative;
        display: block;
        margin-left: auto;
        margin-right: auto;
}
.logo{
    width:8%;
    height:8%;
}
            </style>
    </head>
    <body>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg  navbar-dark bg-success bg-gradient">
                <div class="container-fluid ">
                    <img src ="./img/logo.jfif " alt="" class="logo">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-light" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-light" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-light" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-light" href="#"><i class="fa fa-shopping-cart" ></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-light" href="#">Total Price : 100/-</a>
                        </li>
                        </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light " type="submit">Search</button>
                    </form>
                    </div>
                </div>
                </nav>

                <!--second child-->
                <nav class="navbar navbar-expand-lg   navbar-dark bg-dark  bg-gradient">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
            <a class="nav-link text-light" href="#">Welcome Guest</a> 
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="#">Login</a> 
                </li>
            </ul>
            </nav>

                <!--third child-->
                    <div class=bg-success bg-gradient>
                        <h3 class="text-center text-light">Online Store</h3>
                        <p class="text-center text-light">Life is too short to wear boring clothes.</p>
                    </div>
                <!--fourth child-->
                    <div class="row">
                    <div class="col-md-10">
                <!--products-->
            <div class="row">
                <div class="col-md-4 mb-2">
                <div class="card" >
    <img class="card-img-top" src="./img/222.jfif" alt="">
    <div class="card-body">
    <h5 class="card-title"><h5>Woolen Sweater</h5>
    <p class="card-text">Womens Durable and comfy sweater. </p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
    </div>
</div>
                </div>
                <div class="col-md-4 mb-2">
                <div class="card" >
    <img class="card-img-top" src="./img/leather.jfif" alt="">
    <div class="card-body">
    <h5 class="card-title"><h5>Leather jacket</h5>
    <p class="card-text"> Classic and stylish  medium-brown leather jacket.</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
</div>
</div>
                </div>
                <div class="col-md-4 mb-2">
                <div class="card" >
    <img class="card-img-top" src="./img/444.jfif" alt="">
    <div class="card-body">
    <h5 class="card-title"><h5>Printed T-Shirt</h5>
    <p class="card-text">Black printed t-shirt for men</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
    </div>
</div>
                </div>
                <div class="col-md-4 mb-2">
                <div class="card" >
    <img class="card-img-top" src="./img/555.jfif" alt="">
    <div class="card-body">
    <h5 class="card-title"><h5>Formal Shirt</h5>
    <p class="card-text">Atlantic Star Mens Casual & Formal Shirt Sky Blue Colour Pure Chambray Fabric</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
    </div>
</div>
                </div>
                <div class="col-md-4 mb-2">
                <div class="card" >
    <img class="card-img-top" src="./img/cargo.png" alt="">
    <div class="card-body">
    <h5 class="card-title"><h5>Cargo Pant</h5>
    <p class="card-text">Mens Elasticated Cargo Combat lightweight Cotton Work Trouser</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
    </div>
</div>
                </div>
                <div class="col-md-4 mb-2">
                <div class="card" >
    <img class="card-img-top" src="./img/111.png" alt="">
    <div class="card-body">
    <h5 class="card-title"><h5>Double Layer Jacket</h5>
    <p class="card-text">Double layer jacket in color black_pink.</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
    </div>
</div>
                </div>
            
            </div>
</div>
                
<div class="col-md-2 bg-secondary p-0">
    <ul class="navbar-nav me-auto">
        <li class="nav-item bg-success">
            <a href="" class="nav-link text-light text-center"><h4>Delivary Brands</h4></a>
        </li>
        <li class="nav-item bg-dark  bg-gradient">
            <a href="" class="nav-link text-light text-center"><h4> Brands1</h4></a>
        </li>
        <li class="nav-item bg-dark  bg-gradient">
            <a href="" class="nav-link text-light text-center"><h4>Brands2</h4></a>
        </li>
        <li class="nav-item bg-dark  bg-gradient">
            <a href="" class="nav-link text-light text-center"><h4>Brands3</h4></a>
        </li>
        <li class="nav-item bg-dark  bg-gradient">
            <a href="" class="nav-link text-light text-center"><h4> Brands4</h4></a>
        </li>
    
    <!-- categories to be displayed -->
    <li class="nav-item bg-success">
            <a href="" class="nav-link text-light text-center"><h4>Categories</h4></a>
        </li>
        <li class="nav-item bg-dark  bg-gradient">
            <a href="" class="nav-link text-light text-center"><h4> Categories1</h4></a>
        </li>
        <li class="nav-item bg-dark  bg-gradient">
            <a href="" class="nav-link text-light text-center"><h4>Categories2</h4></a>
        </li>
        <li class="nav-item bg-dark  bg-gradient">
            <a href="" class="nav-link text-light text-center"><h4>Categories3</h4></a>
        </li>
        <li class="nav-item bg-dark  bg-gradient">
            <a href="" class="nav-link text-light text-center"><h4> Categories4</h4></a>
        </li>
    </ul>
</div>
    <!-- last child -->
                        <div class="bg-success p-3 text-center">
                            <p>All rights reserved  Designed by Shristi Tandukar-2023</p>
                        </div>
        
    </body>
</html>