@extends('layouts.appadmin')
@section('content')
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
  
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
    

<html lang="en">
<head>
    <div style="text-align: center">
    <a class="btn btn-primary" style="text-align:center" href="{{route('report_detail',['download'=>'pdf'])}}">Download PDF</a>
    </div>
    <br>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <h1 style="text-align:center">รายงานการสั่งซื้อ</h1>
</head>

<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                

                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-borderd">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Order_id</th>
                                    <th>Product_id</th>
                                    <th>Product_name</th>
                                    <th>Amount</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php 
                                $con = mysqli_connect("localhost","root","","sell2");

                                

                                    $query = "SELECT * FROM order_details";
                                    $query_run = mysqli_query($con, $query);

                                  
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['id']; ?></td>
                                                <td><?= $row['order_id']; ?></td>
                                                <td><?= $row['product_id']; ?></td>
                                                <td><?= $row['product_name']; ?></td>
                                                <td><?= $row['amount']; ?></td>
                                                <td><?= $row['price']; ?></td>
                                                <td><?= $row['price'] * $row['amount']; ?></td>

                                            </tr>
                                            <?php
                                        }
                                    
                                    
                                
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



</body>
</html>
@endsection

