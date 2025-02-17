<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Website Design</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/slider.css" rel="stylesheet">

</head>

<body>
<style>
    .news_item {
        color: black;
    }

    .news_item:hover {
        color: blue;
    }
    
</style>
<?php
require_once('incs/conn.php');
$query = "SELECT slider_id, slider_path, slider_title FROM web_slider";
$result = mysqli_query($conn, $query);


$images = [];

while ($row = $result->fetch_assoc()) {
  $slider_id = $row['slider_id'];
  $slider_path = $row['slider_path'];
  $slider_title = $row['slider_title'];

  
  $imagePath = '../admin_dashboard/' . $slider_path;
  
 
  $images[] = $imagePath;
}
?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-0"
        style="background: linear-gradient(135deg, #1a1a1a,rgb(112, 90, 90));">
        <div class="container" style="height:100px; ">
            <div>
                <img src="images/developer_logo.jpg"
                    style="width:70px; height: 50px; margin-left: -260px; border-radius:5px;">
            </div>
            <a class="navbar-brand fw-bold" href="#" style="font-size:40px; margin-left:-170px; ">Web TechFusion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbarNav">
                <ul class="navbar-nav ms-auto me-2 nav_links">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
   
    <div class="carousel-indicators">
        <?php
        
        foreach ($images as $index => $imagePath) {
            $activeClass = ($index == 0) ? ' active' : '';
            echo '<button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="' . $index . '" class="' . $activeClass . '" aria-label="Slide ' . ($index + 1) . '"></button>';
        }
        ?>
    </div>

    
    <div class="carousel-inner">
        <?php
       
        foreach ($images as $index => $imagePath) {
            $activeClass = ($index == 0) ? ' active' : '';
            echo '<div class="carousel-item' . $activeClass . '">';
            echo '<img src="' . $imagePath . '" class="d-block w-100" alt="..." style="height:800px">';
            echo '<div class="text-overlay" ><p>'. $slider_title .'</p></div>';
           
            echo '</div>';
        }
        ?>
    </div>

  
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

    <div class="container mt-4">
        <div class="row">

            <div class="col-md-4 ">
                <h4 style="margin-left:-160px; display-inline:block; font-size:32px;">Latest News</h4>
                <div class="news-sidebar" style="height:600px; width:390px;">

                    <div class="news-list">
                    <?php
$news_query = "SELECT news_header FROM news";
$result = mysqli_query($conn, $news_query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Outputting the news header link with the CSS class
        echo '<a href="https://www.facebook.com" class="news_item" target="_blank" >' . $row['news_header'] . '</a><br>';
    }
} else {
    echo '<li>No links available</li>';
}
?>

                       

                    </div>
                </div>
            </div>


            <div class="col-md-8 card-container">
                <h1 class="mt-4 mb-5 fw-bold " style="margin-left:-200px; ">IT Technologies</h1>
                <div class="row card_row">
                    <div class="col-md-4 col-lg-3">
                        <div class="card custom-card card_div " style="width:700px; height:700px;">
                            <img src="images/mobile.jpg" class="card-img-top img " alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Mobile Application Development</h5>
                                <p class="card-text">World become advance and smart with mobile phones,tablets and smart
                                    watches</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="card  custom-card  card_div" style="margin-left:200px; width:700px; height:700px;">
                            <img src="images/web.jpg" class="card-img-top  img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Web Development</h5>
                                <p class="card-text">Every business and organization run through Web,Web make easy
                                    communication</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 ">
                        <div class="card custom-card card_div" style="margin-left:420px; width:700px; height:700px;">
                            <img src="images/ai3.jpg" class="card-img-top img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Generative AI</h5>
                                <p class="card-text">AI is one the best field nowadays, AI contains alot fields like
                                    Computer visions, Data Science</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid w-100 " id="marquee_div"
            style="background: linear-gradient(135deg, #1a1a1a, #4f4f4f); width:1920px !important; margin-left:-310px; height:130px;  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), 0 6px 16px rgba(0, 0, 0, 0.3); ">

            <div class="text-light p-3 mb-4 mt-5 rounded-3 ">
                <?php 
    $marquee_query="SELECT panel_text FROM panel";
    $result=mysqli_query($conn,$marquee_query);
    while($row=mysqli_fetch_assoc($result)){
  echo '<marquee class="fw-bold fs-5  mt-4" id="marquee">'.$row['panel_text'].'</marquee>';
   
    }
    ?>
            </div>
        </div>
        <div class="container-fluid" style="width:2000px; margin-left:-420px; ">
            <div class="testimonial-section py-5" style="margin-left:80px; margin-top:20px;">
                <h1 class="testimonial-title d-flex justify-content-center mb-4">My Team</h1>
                <div class="testimonial-row row justify-content-center">
                    <div class="col-md-3 col-lg-3 testimonial-card">
                        <div class="testimonial-image">
                            <img src="images/aftab_sb.png" class="testimonial-img circular-image mt-2" alt="Client 1">
                        </div>
                        <div class="testimonial-body text-center" style="font-size:13px;">
                            <p class="testimonial-text">"Working with this team has been a game-changer for us. They
                                brought our vision to life with amazing precision and skill."</p>
                            <p class="testimonial-title-text">Sir Aftab (Team Leader)</p>
                            <p class="testimonial-subtext">12+ years of experience in web development</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 testimonial-card" style="margin-left:45px;">
                        <div class="testimonial-image">
                            <img src="images/sherry.jpeg" class="testimonial-img circular-image mt-2" alt="Client 2">
                        </div>
                        <div class="testimonial-body text-center" style="font-size:13px;">
                            <p class="testimonial-text">"They were incredibly responsive and delivered everything we
                                wanted within the tight deadlines. Great team!"</p>
                            <h5 class="testimonial-title-text">Shehyar (Junior App Developer)</h5>
                            <p class="testimonial-subtext">2+ years of experience in web development</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 testimonial-card" style="margin-left:45px;">
                        <div class="testimonial-image">
                            <img src="images/srk.jpg" class="testimonial-img circular-image mt-2" alt="Client 3">
                        </div>
                        <div class="testimonial-body text-center" style="font-size:13px;">
                            <p class="testimonial-text">"The team’s professionalism and expertise in mobile app
                                development made all the difference in our project’s success."</p>
                            <h5 class="testimonial-title-text">Muneeb khan (Front-end Developer)</h5>
                            <p class="testimonial-subtext">2+ years of experience in web development</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 testimonial-card" style="margin-left:45px;">
                        <div class="testimonial-image">
                            <img src="images/srk.jpg" class="testimonial-img circular-image mt-2" alt="Client 4">
                        </div>
                        <div class="testimonial-body text-center" style="font-size:13px;">
                            <p class="testimonial-text">"The team’s professionalism and expertise in mobile app
                                development made all the difference in our project’s success."</p>
                            <h5 class="testimonial-title-text">Sharukh (Mobile App Developer)</h5>
                            <p class="testimonial-subtext">5+ years of experience in development</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <footer class="bg-dark text-white text-center p-3 footer">
            <div class="container-fluid ">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6" style="margin-top: 50px;">
                        <div class="social-links">
                            <a href="https://www.facebook.com/yourprofile" target="_blank">
                                <img src="images/facebook.jpg" alt="Facebook" class="social-icon rounded-3"
                                    style="width: 50px; height: 50px;">
                            </a>
                            <a href="https://www.linkedin.com/in/yourprofile" target="_blank">
                                <img src="images/linkdin.png" alt="LinkedIn" class="rounded-3"
                                    style="width: 50px; height: 50px;">
                            </a>
                            <a href="https://twitter.com/yourprofile" target="_blank">
                                <img src="images/twitter.png" alt="Twitter" style="width: 50px; height: 50px;">
                            </a>
                            <a href="https://www.instagram.com/yourprofile" target="_blank">
                                <img src="images/instagram.png" alt="Instagram" style="width: 50px; height: 50px;">
                            </a>
                            <a href="https://wa.me/yourphonenumber" target="_blank">
                                <img src="images/whatsapp.png" alt="WhatsApp" class="rounded-3"
                                    style="width: 50px; height: 50px;">
                            </a>
                        </div>
                        <p class="mt-4">&copy; 2025 Web Techfusion | All Rights Reserved</p>
                        <p class="mt-4">G13-2 Islamabad</p>
                    </div>
                </div>
            </div>
        </footer>




        <script>
        const marquee = document.getElementById('marquee');

        marquee.addEventListener('mouseenter', () => {
            marquee.stop();

        });

        marquee.addEventListener('mouseleave', () => {
            marquee.start(); // Restart the marquee when the mouse leaves
        });
        const carouselElement = document.getElementById('carouselExampleAutoplaying');
    const carousel = new bootstrap.Carousel(carouselElement, {
        ride: 'carousel',
        interval: 1500, // Set auto slide interval (1.5 seconds)
        wrap: true,     // Ensure continuous looping
    });

    // Handle when carousel reaches the last slide
    carouselElement.addEventListener('slide.bs.carousel', function (event) {
        const totalItems = carouselElement.querySelectorAll('.carousel-item').length;
        if (event.to === totalItems - 1) {
            carouselElement.querySelector('.carousel-indicators button').classList.add('active');
        }
    });
        </script>

        <!-- Correct Bootstrap 5 JS CDN Link -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

</body>

</html>