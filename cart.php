<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <title>Cart</title>
</head>

<body>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
  <div class="header">
    <nav class="navbar navbar-expand-lg" id="nav1">
      <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo" id="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="signup.html">Sign up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">Log in</a>
          </li>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <img src="img/logo.png" alt="logo" id="logologin">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Username">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone
                        else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remember me</label>
                      <small id="emailHelp" class="form-text text-muted note">if you didn't sign up click here <a href="signup.html">Sign
                          up</a></small>
                    </div>
                  </form>
                </div>
                <div class="modal-footer justify-content-center">
                  <button type="button" class="btn btn-primary">Login</button>
                </div>
              </div>
            </div>
          </div>
          <li class="nav-item">
            <a class="nav-link " href="cart.html">Cart</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="second-bar">
      <div class="topnav">
        <a class="active" href="#home">Home</a> <a href="#about">About</a>
        <a href="#">Promotion</a>
        <a href="#contact">Author</a> <a href="#contact">Contact</a>
        <input type="text" placeholder="Search.." />
      </div>
    </div>
  </div>
  <div class="topic">
    <h2>Shopping Cart
    </h2>
  </div>
  <div class="container mb-4">
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col"> </th>
                <th scope="col">Product</th>
                <th scope="col">Available</th>
                <th scope="col" class="text-center">Quantity</th>
                <th scope="col" class="text-right">Price</th>
                <th> </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="img/1.jpg" style="height: 50px;" /> </td>
                <td>Culture Japan</td>
                <td>In stock</td>
                <td><input class="form-control" type="text" value="1" /></td>
                <td class="text-right">258 Baht</td>
                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
              </tr>
              <tr>
                <td><img src="img/2.png" style="height: 50px;" /> </td>
                <td>NY-1st-Time</td>
                <td>In stock</td>
                <td><input class="form-control" type="text" value="1" /></td>
                <td class="text-right">243 Baht</td>
                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
              </tr>
              <tr>
                <td><img src="img/3.png" style="height: 50px;" /> </td>
                <td>The Real Alaska</td>
                <td>In stock</td>
                <td><input class="form-control" type="text" value="1" /></td>
                <td class="text-right">243 Baht</td>
                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Sub-Total</td>
                <td class="text-right">771 Baht</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Shipping</td>
                <td class="text-right">50 Baht</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><strong>Total</strong></td>
                <td class="text-right"><strong>821 Baht</strong></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col mb-2">
        <div class="row">
          <div class="col-sm-12  col-md-6">
            <a href="index.html" class="btn btn-block btn-light" role="button">Continue Shopping</a>
          </div>
          <div class="col-sm-12 col-md-6 text-right">
            <a href="paymentmethod.html" class="btn btn-lg btn-block btn-success text-uppercase" role="button">Checkout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="my-footer">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
            <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
            <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
            <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
            <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
            <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
          </svg>
          <small class="d-block mb-3 text-white">© 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-white" href="#">Random feature</a></li>
            <li><a class="text-white" href="#">Cool stuff</a></li>
            <li><a class="text-white" href="#">Team feature</a></li>
            <li><a class="text-white" href="#">Stuff for developers</a></li>
            <li><a class="text-white" href="#">Another one</a></li>
            <li><a class="text-white" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-white" href="#">Locations</a></li>
            <li><a class="text-white" href="#">Privacy</a></li>
            <li><a class="text-white" href="#">Terms</a></li>
            <li><a class="text-white" href="#">Team</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>