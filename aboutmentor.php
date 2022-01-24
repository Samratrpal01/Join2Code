<?php
session_start();
?>
<?php
    include 'link.php';  
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>J2C-videopage</title>
  <link rel="icon" href="https://drive.google.com/uc?export=download&id=1YCCMK9qmMg7ayFbQq8KljC6cJJZIYGc8" type="image/icon type">
<style>
    #profile{
        width:70%;
        height:100px;
        
        margin-top:2%;
        margin-left:4%;

    }

    body{
       
        background-color:#FFFDD0;
    }
    #information
    {
        margin-left:45%;
        margin-top:5%;
        font-size:50px;
    }
</style>
<style>
        html{
          scroll-behavior:smooth;
        }
    
    
        body {
            background-color: #17f9f2;
background-image: linear-gradient(315deg, #17f9f2 0%, #b0f9a9 74%);

            }
            
            
            .emp-profile {
                padding: 3%;
                margin-top: 0%;
                height:150%;
                border-radius: 0.5rem;
                background: #fff;
            }
            
            .profile-img {
                text-align: center;
                
            }
            
            .profile-img img {
                width: 90%;
                height: 100%;
            }
            
            .profile-img .file {
                position: relative;
                overflow: hidden;
                margin-top: -20%;
                width: 70%;
                border: none;
                border-radius: 0;
                font-size: 15px;
                background: #212529b8;
            }
            
            .profile-img .file input {
                position: absolute;
                opacity: 0;
                right: 0;
                top: 0;
            }
            
            .profile-head h5 {
                color: #333;
            }
            
            .profile-head h6 {
                color: #0062cc;
            }
            
            .profile-edit-btn {
                border: none;
                border-radius: 1.5rem;
                width: 70%;
                padding: 2%;
                font-weight: 600;
                color: #6c757d;
                cursor: pointer;
            }
            
            .proile-rating {
                font-size: 12px;
                color: #818182;
                margin-top: 5%;
            }
            
            .proile-rating span {
                color: #495057;
                font-size: 15px;
                font-weight: 600;
            }
            
            .profile-head .nav-tabs {
                margin-bottom: 5%;
            }
            
            .profile-head .nav-tabs .nav-link {
                font-weight: 600;
                border: none;
            }
            
            .profile-head .nav-tabs .nav-link.active {
                border: none;
                border-bottom: 2px solid #0062cc;
            }
            
            .profile-work {
                padding: 14%;
                margin-top: -15%;
            }
            
            .profile-work p {
                font-size: 12px;
                color: #818182;
                font-weight: 600;
                margin-top: 10%;
            }
            
            .profile-work a {
                text-decoration: none;
                color: #495057;
                font-weight: 600;
                font-size: 14px;
            }
            
            .profile-work ul {
                list-style: none;
            }
            
            .profile-tab label {
                font-weight: 600;
            }
            
            .profile-tab p {
                font-weight: 600;
                color: #0062cc;
            }
    
           
            #user_name{
                margin-left:55%;
            }
    }
    
    
    
    
    </style>
    
    </head>
    
    <body>
    
    
    
    <br>
    <br>
    
    
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4 col-sm-8">
                        <div class="profile-img" id="profile_pic">
                            
                        <img id="profile" src="profile.jpg"style="height:400%;width:100%;">
    
            
                
    
            
             
            
    
          
        
        
            
    
    
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4">
                        <div class="profile-head">
                            <h3 id=user_name>
                            About Rahul Pal
                          
                            </h3>
                          
                            <br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About You</a>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
    
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p id="username">Rahul Pal </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p id="Email"> Samratrpal01@gmai.com</p>
                                    </div>
                                </div>
    
    
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone No</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p id="Email">+91 7311157407 </script> </p>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-6">
                                        <label> D.O.B </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p id="Email"> 01-04-2020 </script> </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone No</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p id="Email">0524-2255792 </p>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-6">
                                        <label> Languages </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p id="Email"> C language </p>
                                        <p id="Email"> C++ language </p>
                                        <p id="Email"> JAVA  </p>
                                    </div>
                                </div>
                                
                               
    
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Know About</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p id="Email"> Data Structure</p>
                                        <p id="Email"> Algorithm</p>
                                    </div>
                                </div>

                               
                                </div>
    
                                <br>
    
                                
    
                            </div>
    
                        </div>
                    </div>
                </div>
            </form>
        </div>
    
    
    
    
    
    
    
    
    </body>
    
</html>
 
      
    
  