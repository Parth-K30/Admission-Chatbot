<?php
$conn = mysqli_connect('localhost', 'root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

    $name= mysqli_real_escape_string($conn,$_POST['name']);
    $email= mysqli_real_escape_string($conn,$_POST['email']);
    $number=$_POST['number'];
    $date=$_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form` (name, email , number, date)
    VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
          $message[] = 'appointment made successfully';
          }else{
            $message[] = 'appointment failed';
           }
        }
?>

    

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Bootstrap</title>
</head>

<body>
    <!-- Navbar Portion -->
    <nav class=" navbar navbar-expand-md md-fixed-top">
        <a href="#" class="navbar-brand  ml-3">Dental<span>Care</span>.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#btn">
            <i class="bx bx-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="btn">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a href="#home" class="nav-link mx-3">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link mx-3">About</a>
                </li>
                <li class="nav-item">
                    <a href="#services" class="nav-link mx-3">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#reviews" class="nav-link mx-3">Reviews</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link mx-3">Contact</a>
                </li>
            </ul>
            <button type="button" class="btn btn-default mr-3">Make Appointment</button>
        </div>
        </div>
    </nav>
    <!--Home Section Starts here-->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content">
                    <h3>Let us Brighten your smile</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ut eaque aliquam illum quis minus.
                    </p>
                    <a href="#contact" class="link-btn btn-default">Make appointment</a>
                </div>
            </div>
        </div>
    </section>

    <!--About Sectin Starts Here-->

    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="dentist2.jpg" class="w-100 mb-4 md-0" alt="">
                </div>
                <div class="col-md-6 content">
                    <span>About Us</span>
                    <h3>True HealthCare For Your Family</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eveniet, voluptatem sunt natus
                        tempora adipisci quisquam pariatur voluptate aliquid placeat dignissimos officia. Quibusdam
                        voluptatem consectetur saepe culpa dolores laborum.
                    </p>
                    <a href="#contact" class="link-btn btn-default">Make Appointment</a>
                </div>
            </div>
        </div>
    </section>

    <!--Services Section Starts Here-->
    <section class="services" id="services">
        <h1 class="heading">our services</h1>
        <div class="box-container container">
            <div class="box">
                <img src="braces.png" alt="">
                <h3>Alignment Specialist</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere, exercitationem!</p>
            </div>
            <div class="box">
                <img src="dental-cleaning.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere, exercitationem!</p>
            </div>
            <div class="box">
                <img src="dental-implant.png" alt="">
                <h3>Root Canal</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere, exercitationem!</p>
            </div>
            <div class="box">
                <img src="dentist-chair.png" alt="">
                <h3>Live Dental Advisory</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere, exercitationem!</p>
            </div>
            <div class="box">
                <img src="dentist-tools.png" alt="">
                <h3>Teeth Polishing</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere, exercitationem!</p>
            </div>
            <div class="box">
                <img src="dentist.png" alt="">
                <h3>Cavity Inspection</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere, exercitationem!</p>
            </div>
        </div>
    </section>

    <!--Specialist Section starts here-->

    <section class="process">
        <h1 class="heading">Our Specialities</h1>
        <div class="box-container container">
            <div class="box">
                <img src="chair.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, ratione?</p>
            </div>

            <div class="box">
                <img src="anesthesia.png" alt="">
                <h3>Pediatric Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="box">
                <img src="den1.jpg" alt="">
                <h3>Dental Implants</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti quo consequatur recusandae.</p>
            </div>
        </div>
    </section>

    <!-- MAKE APPOINTMENT PART -->
    <section class="contact_form" id="contact">
        <h1 class="heading">Make Appointment</h1>
        <form action="<?php echo $_SERVER[ 'PHP_SELF']; ?>" method="post">
            <?php
            if(isset($message)){
                foreach ($message as $message){
            echo '<p class="message">'.$message.'</p>';
            }
        }
            ?>
            <p class="message">'.$message.'</p>
            <span class="contact-span">Your Name: </span>
            <input type="text" name="name" placeholder="enter your name" class="box">
            <span class="contact-span">Your Email: </span>
            <input type="email" name="email" placeholder="enter your email" class="box">
            <span class="contact-span">Your Number: </span>
            <input type="number" name="number" placeholder="Enter your number" class="box">
            <span class="contact-span">Appointment Date: </span>
            <input type="datetime-local" name="date" class="box">
            <input type="submit" value="make appointment" class="link-btn btn-default" name="submit">
        </form>
    </section>










    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>