<?php
require 'master/PHPMailerAutoload.php'; 
if(isset($_POST['send']))
        {
            $name=$_POST['name'];
            $mail=$_POST['email'];
            $mailto = $mail;
            $mailSub = "This also you can get it from the form page...";
            $mailMsg = "hello this is the temporary mail .....".$name;
            $mail = new PHPMailer();
            $mail ->IsSmtp();
            $mail ->SMTPDebug = 0;
            $mail ->SMTPAuth = true;
            $mail ->SMTPSecure = 'ssl';
            $mail ->Host = "smtp.gmail.com";
            $mail ->Port = 465; // or 587
            $mail ->IsHTML(true);
            $mail ->Username = "yourmail@gmail.com";
            $mail ->Password = "yourpassword";
            $mail ->SetFrom("yourmail@gmail.com");
            $mail ->Subject = $mailSub;
            $mail ->Body = $mailMsg;
            $mail ->AddAddress($mailto);

            if($mail->Send())
             {
                 echo "<script>";
                 echo "alert('Mail Sent successfully....');";
                 echo "window.location.href='index.html';</script>";
             }
            else
             {
                  echo "<script>";
                 echo "alert('Mail not Sent successfully....');";
                 echo "window.location.href='index.html';</script>";              
             }
                    
         }

      else
      {
          echo "<script>alert('There is an error in the  form...');window.location.href=`index.html`;</script>";
          header('Location : index.php');
      }
   
    

?>


   

