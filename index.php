<?php


$conn = mysqli_connect('localhost','root','','contact_db') or die ('connection failed');

if(isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date)
    VALUES('$name','$email','$number','$date')") or die('query failed');

    if($insert){
        $message[] = 'appointment made successfully';
    }else{
        $message[] = 'appointment failed';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Clinic</title>
   
<link rel="stylesheet" href="https://cdnjs.com/libraries/font-awesome">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
<body>
    <!-- header section starts -->

 <header class="header fixed-top">   
    <div class="container">

        <div class="row align-items-center justify-content-between">
        
            <a href="#" class="logo">Revolution Dental <span>Smile.</span></a>

            <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#tips">Health Tips</a>
            <a href="#contact">contact</a>
            </nav>

            <a href="#contact" class="link-btn">make appointment </a>
            <div id="menu-btn" class="fas fa-bars"></div>
</div>

</div>

</header>   

     <!-- header section ends -->

      <!-- home section starts -->
<section class="home" id="home">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>Have a Great Smile TODAY</h3>
                <p>Your Bright Smile Dental Clinic: Where exceptional care meets radiant smiles. Our experienced team is dedicated to providing comprehensive dental services in a comfortable and welcoming environment. From routine cleanings to advanced treatments, we prioritize your oral health and confidence. Discover the joy of a healthy, vibrant smile with us.</p>
                <a href="#contact" class="link-btn">make appointment </a>
            </div>
        </div>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts -->

<section class="about" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 image">
                <img src="images/main-icon.png" class="w-100 mb-5 mb-md-0" alt="">
            </div>

            <div class="col-md-6 content">
            <span>about us</span>
            <h3>True Healthcare For Your Family</h3>
            <p>At Yuna Dental Care, we are dedicated to delivering exceptional dental care with a personalized touch. With a team of experienced and compassionate professionals, we prioritize your oral health and overall well-being. Our state-of-the-art facility, combined with a commitment to the latest advancements in dentistry, ensures that you receive the highest quality of care. Whether you're seeking routine check-ups, advanced treatments, or a smile transformation, we're here to make your dental experience comfortable and rewarding."</p>
            <a href="#contact" class="link-btn">make appointment</a>
            </div>

        </div>
    </div>

</section>

<!-- about section ends -->

<!-- service section starts -->

<section class="services" id="services">
    <h1 class="heading">our services</h1>

    <div class="box-container container">

        <div class="box">
            <img src="images/icon-a.png" alt="">
            <h3>Preventive Care</h3>
            <p>Regular check-ups, cleanings, and screenings to maintain optimal oral health and prevent issues.</p>
           </div>

        <div class="box">
            <img src="images/icon-b.png" alt="">
            <h3>Restorative Dentistry</h3>
            <p>Repair and restore damaged teeth with treatments like fillings, crowns, and bridges.</p>
        </div>

        <div class="box">
                <img src="images/icon-c.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Enhance your smile's appearance with teeth whitening, veneers, and cosmetic bonding.</p>
          </div>

          <div class="box">
                <img src="images/icon-d.png" alt="">
                <h3>Orthodontics:</h3>
                <p>Correct misaligned teeth and bites using braces, clear aligners, or other orthodontic solutions.</p>
          </div>

          <div class="box">
                <img src="images/icon-e.png" alt="">
                <h3>Oral Surgery</h3>
                <p>Expertise in tooth extractions, wisdom teeth removal, and other oral surgical procedures.</p>
          </div>
          <div class="box">
                <img src="images/icon-f.png" alt="">
                <h3>Emergency Care</h3>
                <p>Prompt assistance for dental emergencies like toothaches, fractures, and more.</p>
          </div>
    </div>
</section>

<!-- service section ends -->

<!-- process section starts -->

<section class="process">
    <h1 class="heading">work process</h1>
    <div class="box-container container">

        <div class="box">
            <img src="images/icon-g.png" alt="">
            <h3>Appointment Scheduling</h3>
            <p>Patients can call or visit our clinic to schedule appointments. Our front desk staff assists in finding suitable dates and times.</p>
        </div>

        <div class="box">
            <img src="images/icon-h.png" alt="">
            <h3>Diagnostic Procedures</h3>
            <p>Depending on the patient's needs, we may perform X-rays, scans, and other diagnostic tests to assess their oral health thoroughly.</p>
        </div>

        <div class="box">
            <img src="images/icon-i.png" alt="">
            <h3>Treatment Planning</h3>
            <p>Based on the diagnosis, the dentist develops a personalized treatment plan. This may involve one or more dental services to address the patient's needs and preferences.</p>
        </div>

    </div>
</section>

<!-- process section ends -->

<!-- review section starts -->
<section class="reviews" id="tips">

    <h1 class="heading">Health Tips</h1>
    <div class="box-container container">

        <div class="box">
            <img src="images/icon-j.png" alt="">
            <h3>Brush Properly</h3>
            <p>Brush your teeth at least twice a day using fluoride toothpaste. Use a soft-bristle toothbrush and gentle, circular motions to avoid damaging your gums and enamel.
        </div>

        <div class="box">
            <img src="images/icon-k.png" alt="">
            <h3>Choose the Right Toothbrush</h3>
            <p>Opt for a toothbrush that fits comfortably in your mouth and has soft bristles. Replace it every 3-4 months or when bristles are frayed.
        </div>

        <div class="box">
            <img src="images/icon-l.png" alt="">
            <h3>Healthy Diet</h3>
            <p>Consume a balanced diet rich in fruits, vegetables, lean proteins, and whole grains. Limit sugary and acidic foods and drinks, as they can contribute to tooth decay and erosion.</p>

           </div>

    </div>

</section>


<!-- review section ends -->

<!--contact section starts -->



<section class="contact" id="contact">
    <h1 class="heading">make appointment</h1>

   <!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/revolutioncodes2023/consultation?hide_event_type_details=1" style="min-width:320px;height:700px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Calendly inline widget end -->
</section>

<!--contact section ends -->

<!--footer section starts -->

<section class="footer">
    <div class="box-container container">
        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <p>+123-456-7890</p>
            <p>+111-222-3333</p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>mindanao ave, manila philippines</p>
        </div>

        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>opening hours</h3>
            <p>8am to 10pm</p>
            <p>Mondays to Fridays</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email address</h3>
            <p>revolutioncodes@gmail.com</p>
            <p>revolutioncodes2@gmail.com</p>

        </div>
    </div>

        <div class="credit">&copy; copyright  @2023 <span><a href="http://www.revolutioncodes.com" target="_blank">Revolution Codes</span></a></div>
</section>

<!--footer section ends -->



<script src="script.js"></script>
</body>
</html>