 <?php
         $to      = "2017e088@eng.jfn.ac.lk"; // Send email to our user
                       $subject = 'Signup | Verification'; // Give the email a subject 
                        $message = '

                        balsal
                        '; // Our message above including the link

                        $headers = 'From: 2017e110@eng.jfn.ac.lk' . "\r\n"; // Set from headers
                    echo   mail($to, $subject, $message, $headers); //
        echo "all okay";

?>