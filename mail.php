   <?php
$to_email = "patilmeghna012@gmail.com";
$subject = "Paypal Invoice Email Test via PHP";
$body =     
          "Dear Customer!
      Your order has been placed successfully.Kindly check your invoice given below:
     
      INVOICE id:- 6NK15273YA489844G
      Intent:- CAPTURE
      Address:- Counttry_Code: US
      Email address:- patilmeghna012@gmail.com
      Given_name:- Meghna
      Surname:- Patil
      Payer_id:- ZDKEX6SSJAR2J
      Purchase_units:- 1 (Canon EOS 200D)
      Status: Completed 
      Update_Time:- 2021-02-08T14:24:19Z";
$headers = "From: patilmeghna012@gmail.com";

 mail($to_email, $subject, $body, $headers);

    if (time_nanosleep(2,500000) === true)
    {
    echo ("Email sent to $to_email...");
    }

 
 else {
    echo "Email sending failed...";
}
?>