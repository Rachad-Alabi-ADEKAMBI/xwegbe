<?php
    require_once 'frontend.php';
                    if(!empty($_POST)){
                        $db=dbConnect();

                        $errors = array ();

                        if(isset($_POST['email'], $_POST['pass'])
                            &&!empty($_POST['email'] && !empty($_POST['pass']))
                            ){
                                if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                                    $errors['email'] = 'Veuillez entrer un email correct';
                                }

                        
                            $sql = "SELECT * FROM `users` WHERE `email` = ?";

                            $query = $db -> prepare($sql);

                            $query->execute([verifyInput($_POST['email'])]);

                            $user = $query->fetch();

                            if(!$user){
                                $errors['email'] = 'Utilisateur/mot de passe incorrect';
                            }

                            if(!password_verify($_POST['pass'], $user['pass'])){
                                $errors['email'] = 'Utilisateur/mot de passe incorrect';
                            }

                            if(empty($errors)){

                                session_start(); 

                                $_SESSION['user'] = [
                                    "username" => $user['username'],
                                    "role" => $user['role']
                                ];
                                    header("Location: ../index.php?action=dashboardPage"); 
                            }         
                        } 
                            }               
                ?>
