<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Paypal Payment Page</title>
     <link rel = "stylesheet" href= "paydemo.css">
</head>
<body>
    <div class ="container">
    <h1>Shopping Cart</h1>

    <div class ="row">
     <div class ="column side">
        
        <div class="img text-center">
         <img src="https://img.tatacliq.com/images/i4/1348Wx2000H/MP000000004686624_1348Wx2000H_20200404203337.jpeg" alt="" width="120">
          </div>
     </div>
   <div class = "title">
     <h4>Canon EOS 200D</h4> 
     <p>Electronics</p>
     
 </div>
 <div class="buttons">
     <button type="submit"><i class="fas fa-chevron-up"></i> </button>
    <input type="text" class="text" value="1">
    <button type="submit"><i class="fas fa-chevron-down"></i> </button>
</div>

   <div id ="choice">
     <a href="#">Save for later</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href = "#">Delete from cart</a>
   </div>
      <div class="or">OR</div>
        <div class="price">$349</div>
     

     <div class = "column middle">
         <div class="grid-container">
    <h3>Price Details</h3>
    <ul>
        <li class="flex justify-content-between">
            <label for="price">Products ( 3 items ) : </label>
            <span>&nbsp $499</span>
        </li>
        <li class="flex justify-content-between">
            <label for="price">Delivery Charges : </label>
            <span>&nbsp Free</span>
        </li>
        <br>
        <li class="flex justify-content-between">
            <label for="price">Amount Payable : </label>
            <span class="text-red font-title">&nbsp $499</span>
         </li>
         <li class = "flex justify-content-between">
         </li>
         </ul>
         <div id ="paypal-payment-button"></div>
         </div>
      </div>
    </div>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=AS6W4EUYSa_kBu8sFKiJS2PLubw3D-SPA2EmlVaM6vZN1XeGw_BmGO_zsyC1U79cbUBdSutdbFYUdrfD"></script>
<script src="index.js"></script>


</body>
</html>