
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
 
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                <img src="image/1.jpg" class="img-fuild rounded-circle" alt=""style="width: 50px;">
                <a class="navbar-brand" href="#"></a>&nbsp;
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{ url('main') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('viewlist') }}">Menu</a>
                      </li>
                    
                    <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact-us') }}">Contact us</a>
                          </li>
                          <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('search.product') }} ">
            {{ csrf_field() }}
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="searchProduct">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

                  </ul>
                  
                </div>
              </nav>
        
        <div class="container-fluid" style="margin-top: 10px">
            <div class="row">
                <div class="col-md-2">
                    <ul class="list-group">
                        <li class="list-group-item active">Food</li>
                        <li class="list-group-item">Yangnyeom Chikin</li>
                        <li class="list-group-item">Chijeu Chikin/Maeun Chijeu Chikin</li>
                        <li class="list-group-item">Maekju</li>
                        <li class="list-group-item">Ddukbokki</li>
                        <li class="list-group-item">Bulgogi</li>
                        <li class="list-group-item">Samgyeopsal</li>
                        <li class="list-group-item">Hoeddeok</li>
                        <li class="list-group-item">Gimbap</li>
                        <li class="list-group-item">Naengmyeon</li>
                    </ul>
                </div>
                <div class="col-md-1"></div>

                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <div class="col-md-8">
                    <div class="card border-0">
                        <div class="w3-animate-zoom">
                        <div class="row">
                        
                   @yield('content')
                   </div>
                        </div>
                    </div>   
                </div>
              </div>
              </div>
  
                <div class="col-md-1"></div>
      
                <div class="row" style="left:0;bottom: 0;">
                    <div class="col-md-12 bg-warning">
                            Korean Food <br>
                            16, Jalan Seri Putra 1, 
                            Bandar Putra, 
                            81000 Kulai, Johor.<br>
                            07-660 0628<br>
                            www.nsit.com.my
                            <div style="float: right;">
                              <img src="image/logo.png" alt="" width="100px">
                          </div>
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