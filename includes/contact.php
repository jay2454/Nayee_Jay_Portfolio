<?php
                        
                        if(isset($_POST['submit'])){

                            $user_Firstname = $_POST['Firstname'];
                            $user_Lastname = $_POST['Lastname'];
                            $user_email = $_POST['email'];
                            $user_message = $_POST['message'];

                            $email_from = 'noreply@jaynayee.com';
                            $email_subject = 'New Form Submission';
                            $email_body = "First Name: $user_Firstname.\n".
                                          "Last Name: $user_Lastname.\n".
                                          "Email id: $user_email.\n".
                                        "user message: $user_message.\n";
                            
                            $to_email = "jaynayee32@gmail.com";
                            $headers = "From: $email_from \r\n";
                            $headers = "Reply-To: $user_email \r\n";

                        
                            $userIp = $_SERVER['REMOTE_ADDR'];
                            $url = "https://www.google.com/recaptcha/api/siteverify?
                            secret=$secretkey&response=$responseKey&remoteip=$userIp";

                            $response = file_get_contents($url);
                            $response = json_decode($response);

                            if ($response->success)
                            {
                                mail($to_email,$email_subject,$email_body,$headers);
                                echo "Message sent succesfully";
                            }else{
                                echo "<span>Inavlid Captcha, Please Try Again</span>"; 
                            }
                              



                        }
                        
                        ?>