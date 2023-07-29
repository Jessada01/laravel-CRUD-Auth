<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Offcanvas navbar large">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Boyo Pet Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product">product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Basket">Basket</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="editprofile">Edit Profile</a></li>
                <li><a class="dropdown-item" href="logout">Logout</a></li>
              </ul>
            </li>
          </ul>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Edit Staff
                </div>
                <div class="card-body">
                    @if(Session::has('staff_updated'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('staff_updated')}}   
                    </div>
                    @endif
                    <form action="{{route('staff.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value ="{{$staff->id}}">
                        <div class="from-group">
                            <label for="name">name</label>
                            <input type="text" name="name" value = "{{$staff->name}}">
                        </div>
                        <div class="from-group">
                            <label for="file">Choose Profile Image</label>
                            <input type="file" name="file" onchange="previewFile(this)">
                            <img src="{{asset('image')}}/{{$staff->profileimage}}" id="previewImg" style="max-width: 120px;">
                        </div>
                        <button type="submit" class="btn btn-light">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>