<!doctype html>
<html lang="en">
  
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
     
      body {font-family: Arial, Helvetica, sans-serif;}
      * {box-sizing: border-box;}
      
      /* Full-width input fields */
      input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
      }
      
      /* Add a background color when the inputs get focus */
      input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }
      
      /* Set a style for all buttons */
      button {
        background-color: blue;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
      }
      
      button:hover {
        opacity:1;
      }
      
      /* Extra styles for the cancel button */
      .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
      }
      
      /* Float cancel and signup buttons and add an equal width */
      .cancelbtn, .signupbtn {
        float: left;
        width: 50%;
      }
      
      /* Add padding to container elements */
      .container {
        padding: 16px;
      }
      
      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: #474e5d;
        padding-top: 50px;
      }
      
      /* Modal Content/Box */
      .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
      }
      
      /* Style the horizontal ruler */
      hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
      }
       
      /* The Close Button (x) */
      .close {
        position: absolute;
        right: 35px;
        top: 15px;
        font-size: 40px;
        font-weight: bold;
        color: #f1f1f1;
      }
      
      .close:hover,
      .close:focus {
        color: #f44336;
        cursor: pointer;
      }
      
      /* Clear floats */
      .clearfix::after {
        content: "";
        clear: both;
        display: table;
      }
      
      /* Change styles for cancel button and signup button on extra small screens */
      @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
           width: 100%;
        }
      }</style>
    <title>Hello, world!</title>
  </head>
  <body>
     
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <img src="{{asset('image/1.jpg')}}" class="img-fuild rounded-circle" alt=""style="width: 50px;">
                <a class="navbar-brand" href="#"></a>&nbsp;
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index2.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.html">Menu</a>
                      </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle bg-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                        <a class="dropdown-item" href="delivery.html">Delivery</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href=""></a>
                      </div>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="contact us.html" >Contact us</a>
                          </li>
                  </ul>
                 
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button style="width: auto;" class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                  </form> 
                 <button onclick="document.getElementById('id01').style.display='block'" style="width: auto;">Sign Up</button>
                </div>
              </nav>

                  
        <div class="container-fluid">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{asset('image/bnr3.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('image/bnr5.jpg')}}"class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('image/bnr5.jpg')}}"class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                          </nav>
                      </div>
        </div>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">      
        <div class="container-fluid" >
            <div class="w3-animate-zoom">
            <div class="row" style="padding:50px">
                <div class="col-md-4" style="text-align: center"><form action="menu.html"><button style="float: right;"class="btn btn-white btn-xs"><img src="{{asset('image/fried chicken.jpg')}}" class="img-fuild" width="250" height="250" alt=""></button></form></div>
                <div class="col-md-4" style="text-align: center"><form action="menu.html"><button style="float: right;"class="btn btn-white btn-xs"><img src="{{asset('image/hfnnc1.jpg')}}" class="img-fuild" width="250" height="250" alt=""></button></form></div>
                <div class="col-md-4" style="text-align: center"><form action="menu.html"><button style="float: right;"class="btn btn-white btn-xs"><img src="{{asset('image/bnr4.jpg')}}" class="img-fuild" width="250" height="250" alt=""></button></form></div>
            </div>
         </div>
            <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="email"><b>Phone No.</b></label>
      <input type="text" placeholder="Enter Phoneno" name="phoneno" required>

      <label for="email"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="address" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

             <div class="row" style="left:0;bottom: 0;">
                <div class="col-md-12 bg-info">
                        한옥 <br>
                        16, Jalan Seri Putra 1, 
                        Bandar Putra, 
                        81000 Kulai, Johor.<br>
                        07-660 0628<br>
                        www.nsit.com.my
                        <div style="float: right;">
                          <img src="{{asset('image/logo.png')}}" alt="" width="100px">
                      </div>
                </div>
              </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>