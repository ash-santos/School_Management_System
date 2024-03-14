<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];

    echo "<script type= 'text/javascript'>
    
    alert('$message');

    </script>";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<nav>
    <label class="logo">AAAAR Academy</label>

    <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Admission</a></li>
        <li><a href="login.php" class="btn btn-success">Login</a></li>
    </ul>
</nav>
<div class>
    <label class="img_text" for="">A community with high expectation and high academic achievement.</label>
    <img class="main_img" src="student_management.png" alt="">

</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
        <img class="welcome_img" src="anime-school.gif" alt="">

        </div>

        <div class="col-md-8">
            <h1>Welcome to sample text Academy</h1>

            <p>Our school's mission is to learn leadership, the common core, and relationships for life. Our mission is to provide a safe, disciplined learning environment that empowers all students to develop their full potential. We feel strongly about helping to build leaders that have the ability to succeed in whatever endeavor they undertake. Winning is not always the measure of success. Our students understand the "Win, win" philosophy and use it in their daily life. Common standards keeps us focused on learning appropriate content and preparing our students to graduate. Last but just as importantly, setting examples for our students of meaningful and lasting relationships will go with them throughout their lifetime.</p>
            

        </div>

    </div>

</div>

<center>
    <h1>Our Teachers</h1>
</center>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="teacher" src="teacher1.jpg" alt="">
            <p>
            Alhaitham is a member of the Haravatat of the Sumeru Akademiya and the Akademiya's Scribe, responsible for documenting their findings and drafting ordinances.
            </p>

        </div>

        <div class="col-md-4">
            <img class="teacher" src="teacher2.jpg" alt="">
            <p>
            The languid but knowledgeable Librarian of the Knights of Favonius, deemed by Sumeru Akademiya to be their most distinguished graduate in the past two centuries.
            </p>
            

        </div>

        <div class="col-md-4">
            <img class="teacher" src="teacher3.jpg" alt="">
            <p>
            A mysterious expert contracted by the Wangsheng Funeral Parlor. Extremely knowledgeable in all things.
            </p>

        </div>

    </div>

</div>


<center>
    <h1>Our Courses</h1>
</center>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="teacher" src="course1.gif" alt="">\
            <h3>Visual Arts</h3>

        </div>

        <div class="col-md-4">
            <img class="teacher" src="course2.gif" alt="">
            <h3>Computer Science</h3>
            

        </div>

        <div class="col-md-4">
            <img class="teacher" src="course3.gif" alt="">
            <h3>Business Administration</h3>
           

        </div>

    </div>

</div>

<center>
    <h1>Admission Form</h1>
</center>

<div align= "center" class="admission_form">
    <form action="data_check.php" method="POST">
        <div class="margin">
            <label class="label_text" for="">Name</label>
            <input class="input_design" type="text" name="name">
        </div>

        <div class="margin">
            <label class="label_text" for="">Email</label>
            <input class="input_design" type="text" name="email">
        </div>

        <div class="margin">
            <label class="label_text" for="">Phone</label>
            <input class="input_design" type="text" name="phone">
        </div>

        <div class="margin">
            <label class="label_text" for="">Message</label>
            <textarea class="input_text" name="message" id="" cols="30" rows="10"></textarea>
        </div>

        <divclass="margin">
            <label class="label_text" for=""></label>
            <input class="btn btn-primary" type="submit" value="Apply" name="apply">
        </div>
        
    </form>
    

</div>




</body>
</html>