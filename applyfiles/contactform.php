<?php
    $name =$_POST['name'];
    $emailId =$_POST['emailid'];
    $regno =$_POST['RegNo'];
    $descri =$_POST['desc'];
    $phno =$_POST['phno'];
    $gpa =$_POST['cgpa'];

    $email_from = 'hareeshraji7081@gmail.com';

    $email_subject = "Application for alumini";

    $email_body = "New Application recieved.\n".
                    "Applicant's Details are :-\n". 
                        "Applicant's Name : $name.\n".
                            "Applicant's RegNo:  $regno.\n".
                                "Applicant's Phone No: $phno.\n".
                                    "Applicant's GPA: $gpa.\n".
                                      "Applicant's E-mail : $emailId.\n";
                                          "Description that the applicant provided provided us : $descri.\n";

    $email_body1 = "Thanks For Applying in ComeBack.\n".
                        "Your Details are :-\n". 
                            "Name : $name.\n".
                                "RegNo:  $regno.\n".
                                    "Phone No: $phno.\n".
                                        "Your GPA: $gpa.\n".
                                            "Description that you have provided us : $descri.\n";


    $to = "hareeshraji708@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $emailId \r\n";

    mail($to,$email_subject,$email_body,$headers);

    mail($emailId,$email_subject,$email_body1,$headers);

    header("Location: http://comeback-alums.ml/");

?>