<?php
    $name =$_POST['name'];
    $emailId =$_POST['emailid'];
    $regno =$_POST['RegNo'];
    $descri =$_POST['desc'];
    $phno =$_POST['phno'];
    $gpa =$_POST['cgpa'];

    $email_from = 'hareeshraji7081@gmail.com';

    $email_subject = "Application for alumini";

    $email_body = "I am $name.\n". 
                    "My Register Number is $regno.\n". 
                     "Contact me at $phno.\n". 
                      "My GPA $gpa.\n". 
                       " $descri.\n". 
                        "E-mail : $emailId.\n";

    $to = "hareeshraji708@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $emailId \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>