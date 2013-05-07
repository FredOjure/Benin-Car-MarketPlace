<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        Create a new dealer account<br/>
        <form action="newDealer" method="POST">
         Email:<br/>
         <input type="text" name="Email" value="" /><br/>
         Confirm Email:<br/>
         <input type="text" name="confirmEmail" value="" /><br/>
         Choose a password:<br/>
        <input type="text" name="password" value="" /><br/>
        Enter 8-20 letters and/or
        number;case sensitive<br/>
        
        Re-enter password:<br/>
        <input type="text" name="confirmPassword" value="" /><br/>
        <input type="checkbox" name="termsAndConditions" value="ON" disabled="disabled" />
        I accept terms of the privacy statement and dealer agreement
        
        <?php
        // put your code here
        ?>
    </body>
</html>
