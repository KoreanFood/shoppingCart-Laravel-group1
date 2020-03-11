@extends('template')
@section('content')
@foreach($products as $product)
                    <div class="row">
                        <div class="col-md-6"><img src="{{asset('image/')}}/{{$product->image}}" width="50" alt="" class="img-fluid">                        </div>
                        <div class="col-md-6">
                        <form action="{!! URL::to('paypal') !!}" method="post">
                        {{csrf_field()}}
                            <h5 class="card-title"> {{$product->name}}</h5>
                            <p>{{$product->description}}</p>
                            <div style="height: 100px">Quantity <input type="number" id="qty" value="1" min="1" max="10">Available stock: {{$product->quantity}}
                            </div>
                            <input type="hidden" id="price" value="{{$product->price}}">
                            <input type="hidden" id="amount" name="amount" value="">
                            <input type="hidden" id="amount" name="amount" >
                            <script>
                            function cal(){
                                document.getElementById("amount").value=document.getElementById("qty").value*document.getElementById("price").value;
                            }
                            </script>
                            <div style="height: 100px">RM{{$product->price}} <button type="submit" onClick="cal()" style="float:right" class="btn btn-danger btn-xs">Buy Now</button>
                            </form></div>
                        </div>
                    </div> 
@endforeach
@endsection   
                </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row" >
            <div class="col-md-12 bg-info"  >
                    NSIT Academy <br>
                    No.16, Jalan Sri Putra 1,
                    Bandar Putra, 
                    81000 Kulai, Johor <br>
                    607-6600628
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