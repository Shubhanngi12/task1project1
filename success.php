<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sucessful</title>
    <link rel="stylesheet" href="paydemo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
         <i class="fa fa-check-square-o" style="font-size:200px;color:rgb(0, 255, 106)"></i>
          <h2>Your payment is Done Sucessfully, Thankyou!
            Kindly check your email for invoice.</h2>

            
</div>
    
<script>
    function pageRedirect() {
        window.location.replace("http://localhost/mytestapp/mail.php");
    }      
    setTimeout("pageRedirect()", 100);
</script>
</body>
</html>
