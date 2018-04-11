

<?php
    
        // $fname=$_POST['name1'];
        // $cellnum=$_POST['phone1'];
        $mailid="abhijeetraut58@gmail.com";
        // $feedback=$_POST['feedback'];
        $mymail="smartih123@gmail.com";        

       
            $msg= "Hello Thank you for your feedback.With Regards Aashay Nirmit Team";
            $header = " From: $mailid \n\n Mail ID:".$mailid."\n\n Message: ";
            $header1 = "From: ".$mymail;
            $sub= "Feedback received from ";
            $sub1= "Feedback received";
            $result=@mail($mymail,$sub,$header);
            $result1=@mail($mailid,$sub1,$msg,$header1);
            

           if($result == TRUE && $result1 == TRUE) 
           {
              echo "cool"; 
           }



?>



