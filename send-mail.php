<?php

header('Content-Type: text/plain; charset=\"iso-8859-1\"');
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
//ini_set('SMTP', 'myserver');
//ini_set('smtp_port', 25);
//echo "Welcome!!!";
//print_r($_POST);
//exit;

if ($_POST['formName'] == 'Contact') {
//    echo "ContactForm"; exit;
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $message = "Name: ". $username."<br />". "Email: ".$email."<br />"."Mobile No: ".$phone."<br />"."Message: "."\r\n".$_POST['message'];
    $subject = $_POST['subject'];
    $headers = "From:  $username<$email>" . "\r\n" .
            "Reply-To: $email" . "\r\n" .
            "MIME-Version: 1.0\r\n" .
            "Content-Type: text/html; charset=iso-8859-1\n" .
            'X-Mailer: PHP/' . phpversion();

    $to = 'info@quicktalent.in';

    if (mail($to, $subject, $message, $headers)) {
        $sent = true;
        echo "Mail Sent Successfully!!!!<br>";
        echo "You will be redirected to the home page shortly!!!";
        header('Refresh: 3; URL=http://demo.thinkatronics.com/quicktalent/contact.php');
        exit;
    }
}

if ($_POST['applyForm'] == 'Apply') {
    //    echo "ContactForm"; exit;
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
       
        $education = $_POST['education'];
        $skills = $_POST['skills'];
        $experience = $_POST['experience'];
        $qualities = $_POST['qualities'];


        $message = "Basic Information : "."<br />". "First Name: ". $fname."<br />". "Last Name: ".$lname."<br />"."Email: ".$email."<br />"."Mobile No: ".$phone."<br />"."address: ".$address."<br />"."Qualities: "."<br />"."Education: ".$education."<br />"."Skills: ".$skills."<br />"."Experience: ".$experience."<br />"."Qualities: ".$qualities."<br />"."Message: "."<br />".$_POST['message'];
        $subject = $_POST['subject'];
        $headers = "From:  $username<$email>" . "\r\n" .
                "Reply-To: $email" . "\r\n" .
                "MIME-Version: 1.0\r\n" .
                "Content-Type: text/html; charset=iso-8859-1\n" .
                'X-Mailer: PHP/' . phpversion();
    
        $to = 'info@quicktalent.in';
    
        if (mail($to, $subject, $message, $headers)) {
            $sent = true;
            echo "Mail Sent Successfully!!!!<br>";
            echo "You will be redirected to the home page shortly!!!";
            header('Refresh: 3; URL=http://demo.thinkatronics.com/quicktalent/apply-now.php');
            exit;
        }
    }

    if ($_POST['Order'] == 'Place') {
        //    echo "ContactForm"; exit;
            $name = $_POST['name'];
            $website = $_POST['website'];
            $phone = $_POST['phone'];
            
            $address = $_POST['address'];
           
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $mobile = $_POST['mobiles'];
            $paddress = $_POST['paddress'];

            $special = $_POST['special'];
            $location = $_POST['location'];
            $rate = $_POST['rate'];
            $position = $_POST['position'];
            $open = $_POST['noopen'];
            $msg = $_POST['message'];

            $message = "<b>"."Company Details : "."</b>"."<br />". "Company Name: ". $name."<br />". "Website: ".$website."<br />"."Phone: ".$phone."<br />"."address: ".$address."<br />"."<b>"."Contact Person: "."</b>"."<br />"."First Name:".$fname."<br />"."Last Name:".$lname."<br />"."Email:".$email."<br />"."Mobile:".$mobile."<br />"."Social:".$paddress."<br />"."<b>"."Talent Details"."</b>"."<br />"."Specilization :".$special."<br />"."Position :".$position."<br />"."Job Location :".$location."<br />"."No of Openings :".$open."<br />"."Pay Rate Range :".$rate."<br />"."Job Description :".$msg."<br />";
            $subject = $_POST['subject'];
            $headers = "From:  $username<$email>" . "\r\n" .
                    "Reply-To: $email" . "\r\n" .
                    "MIME-Version: 1.0\r\n" .
                    "Content-Type: text/html; charset=iso-8859-1\n" .
                    'X-Mailer: PHP/' . phpversion();
        
            $to = 'info@quicktalent.in';
        
            if (mail($to, $subject, $message, $headers)) {
                $sent = true;
                echo "Mail Sent Successfully!!!!<br>";
                echo "You will be redirected to the home page shortly!!!";
                header('Refresh: 3; URL=http://demo.thinkatronics.com/quicktalent/place-job.php');
                exit;
            }
        }

?>