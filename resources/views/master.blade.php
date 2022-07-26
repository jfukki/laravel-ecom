<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, Laravel</title>
<style>

    .login-form-custom
    {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding:80px 60px 80px 60px;
        margin-top:20px;
    }

    .register-form-custom
    {
       background-color: #F8F9FA;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding:80px 60px 80px 60px;
        margin-top: 60px !important;
    }

    .slide-image
    {
      height: 400px !important;

    }

    .custom-products-slider
    {
      height: 600px !important;
    }

    .slide-text
    {
      background-color:  #35443585;
    }


    .trending-product-card
    {
      height: 500px !important;
      padding: 20px;
      margin:10px;
    }


    .trending-product-img
    {
      height: 300px !important;
      padding: 10px;
    }

    .product-detail-text-area
    {
      border: 1px solid #30414B;
      background-color: whitesmoke;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      border-radius:20px;
      padding: 40px;
    }

.product-detail-img
{

  
  height: 550px;
  

}

.product-detail-main-card
{
  background-color: whhite;
  padding:40px;
}

.my-custom-cart-list
{

      border: 1px solid #30414B;
      background-color: whitesmoke;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      border-radius:20px;
      padding: 40px;

}


.top-margin
{
  margin-top:60px !important;
}

.cartList-img
{
  width:60px;
}

.order-now-card
{
      border: 1px solid #30414B;
      background-color: whitesmoke;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      border-radius:20px;
      padding: 40px;
}

.order-now-address-card
{
      border: 1px solid #30414B;
      background-color: whitesmoke;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      border-radius:20px;
      padding: 40px;
}


</style>


  </head>
  <body>

  {{View::make ('header') }}

    @yield("content")

  {{View::make ('footer') }}

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>