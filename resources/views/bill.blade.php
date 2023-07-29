@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Bill Reciept in Laravel</title>
      <style>
        .result{
         color:red;
        }
        td
        {
          text-align:center;
        }
      </style>
   </head>
   <body>
    
                    <section class="mt-3" align="center" >
                        <div class="container-fluid">
                        <h4 class="text-center" style="color:green"> ใบเสร็จ </h4>
                        {{-- <h6 class="text-center"> Shine Metro Mkadi Naka (New - Delhi)</h6> --}}
                        <div class="row" >
                            <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">  
                <div class="card">
                            <div class="col-md-15  mt-10" style="background-color:#f5f5f5;">
                            <div class="p-4">
                                <div class="text-center">
                                    <h4>Receipt</h4>
                                </div>
                                <span class="mt-4"> Time : </span><span  class="mt-4" id="time"></span>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6 ">
                                        <span id="day"></span>  <span id="year"></span>
                                    </div>
                                    <form action="" method="GET">
                                    <div class="col-xs-6 col-sm-6 col-md-4 text-right ">
                                        
                                        <input id="idbill" type="text" name="billno" value="{{ $counts }}" class="form-control">
                                        
                                        <button type="submit" class="btn btn-primary mt-3">แสดง</button>
                                        <h1></h1>
                                        
                                    </div>
                                    </form>
                                </div>
                                
                                        <div class="card mt-4">
                                            <div class="card-body">
                                                <table class="table table-borderd">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                        
                                                            <th>ProductName</th>                                            
                                                            <th>Amount</th>                                            
                                                            <th>Price</th>                                            
                                                            <th>Tatal</th>                                            
                                                        </tr>
                                                    </thead>
                                                     @foreach ( $order_details as $order )

                                                    <tbody>
                                                         <td>{{ $order->id }}</td>

                                                            <td>{{ $order->product_name }}</td>
                                                            <td>{{ $order->amount }}</td>
                                                            <td>{{ $order->price }}</td>
                                                            <td>{{ $order->price * $order->amount }}</td>

                                                    </tbody>                             
                                                    
                                                </tr>
                                              
                                                @endforeach 
                                            </div>
                                        </div>
                                        
                                    
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
   </body>
</html>
<script>
    
     
      //add to cart 
      
          
        
 
            
      
 </script>
 <script>
    window.onload = displayClock();
 
     function displayClock(){
       var time = new Date().toLocaleTimeString();
       document.getElementById("time").innerHTML = time;
        setTimeout(displayClock, 1000); 
     }
</script>
@endsection