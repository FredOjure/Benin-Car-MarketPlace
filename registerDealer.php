<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        Create a new dealer account
        <form action="newDealer" method="POST">
         Email:
         <input type="text" name="Email" value="" />
         Confirm Email:
         <input type="text" name="confirmEmail" value="" />
         Choose a password:
        <input type="text" name="password" value="" />
        Enter 8-20 letters and/or
        number;case sensitive
        
        Re-enter password:
        <input type="text" name="confirmPassword" value="" />
        <input type="checkbox" name="termsAndConditions" value="ON" disabled="disabled" />
        I accept terms of the privacy statement and dealer agreement
        
        <?php
        // put your code here
        ?>
    </body>
</html>
