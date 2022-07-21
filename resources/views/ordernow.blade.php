@extends('master')

@section('content')

    <div class="container my-3">
        <div class="row">
            <div class="col-md-6 offset-md-3 order-now-card">
                <h2>Order Amount Detail</h2>
               <table class="table">
                         
                        <tbody>
                            <tr>
                           
                            <td>Amount </td>
                           
                            <td>USD: {{$total}}</td>
                            </tr>

                            <tr>
                           
                           <td>Tax </td>
                          
                           <td>0</td>
                           
                            </tr>
                            
                            <tr>
                           
                           <td>Delievery Charges </td>
                          
                           <td>USD: 10</td>
                           
                           </tr>

                           <tr>
                           
                           <td>Total Amount </td>
                          
                           <td>{{$total+10}}</td>
                           
                           </tr>
                            
                        </tbody>
                        </table>
            </div>
        </div>
        <!-- form here -->
        <div class="col-md-6 offset-md-3 top-margin order-now-address-card">
        <h4 class="my-3"> User Information</h4>
            <form action="orderplace" method="POST" >
                @csrf
                <div class="from-group">
                <textarea class="form-control" name="address" id="" cols="30" rows="2" placeholder="Please Enter Your Address Here"></textarea>
                </div>
                <label for="" class="my-3">Payment Method</label>
                <div class="form-check">
                    
                    <input class="form-check-input" value="Online Payment" type="radio" name="paymentmethod" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Online Payment
                    </label>
                    
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" value="EMI Payment" type="radio" name="paymentmethod" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        EMI Payment
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" value="Payment on Delievery" type="radio" name="paymentmethod" id="flexRadioDefault3" checked>
                    <label class="form-check-label" for="flexRadioDefault3">
                        Payment on Delievery
                    </label>
                </div>
                <button type="submit" class="btn btn-danger btn-sm my-3">Proceed Order</button>
            </form>
        </div>
        <!-- form here -->

    </div>

@endsection