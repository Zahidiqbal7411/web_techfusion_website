<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link  href="../css/main.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .sidebar {
      background-color: #343a40;
      min-height: 100vh;
      padding-top: 30px;
      width:300px;
    }

    .sidebar .sidebar-heading {
      color: white;
      text-align: center;
      font-size: 24px;
    }

    .sidebar img {
      width: 100px;
      border-radius: 50%;
      display: block;
      margin: 0 auto;
    }

    .sidebar ul {
      list-style-type: none;
      padding-left: 0;
    }

    .sidebar ul li {
      padding: 10px 0;
      text-align: center;
    }

    .sidebar ul li a {
      color: white;
      text-decoration: none;
      font-size: 18px;
    }

    .sidebar ul li a:hover {
      background-color: #575757;
      border-radius: 5px;
    }

    .content {
      padding: 20px;
    }

    .card-row {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      
    }

    .card-col {
      flex: 1;
      padding: 0 10px;
      
    }

    .card {
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
      background-color: #fff;
      
    }

    .card-header {
      background-color: #343a40;
      color: #fff;
      font-size: 20px;
      font-weight: bold;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .card-body {
      padding: 20px;
      font-size: 16px;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      padding: 10px 20px;
      border-radius: 5px;
      width:200px;
      height:50px;
      font-weight:bold;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    .card ul {
      list-style-type: none;
      padding-left: 0;
    }

    .card ul li {
      margin-bottom: 10px;
      font-size: 16px;
    }

    .card ul li:hover {
      text-decoration: underline;
      cursor: pointer;
    }
    .card_items{
      height:200px;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    
    <div class="col-md-2">
      <div class="row">
        <div class="col-md-12 sidebar">
          <div class="sidebar-heading">
            <img src="../images/zahidiqbal.jpeg" alt="Admin Picture">
            <h4>Zahid Iqbal</h4>
          </div>
          <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Slider</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Marquee</a></li>
          </ul>
        </div>
      </div>
    </div>

    
    <div class="col-md-10">
      <div class="row" >
        <div class="row" >
          <div class="col-md-10" >
        <h1>Admin Dashboard</h1>
        </div>
        <div class="col-md-2" >
        <form action="logout.php" method="post">
         <button type="submit" name="logout" class="btn btn-danger" style="margin-left:160px; border-radius-5px;">Logout</button>
        </form>
        </div>
        </div>
        <div class="card mt-4">
          <div class="card-header">
            <h5 class="card-title">WebTechFusion Content Management System</h5>
          </div>
          <div class="card-body">
            <div class="row card-items">
              
              <div class="col-md-4">
                <div class="card slider_card">
                  <div class="card-header slider_header">Slider</div>
                  <div class="card-body">
                    <button class="btn btn-primary" onclick="slider()">Add Slider</button>
                    <hi>Hi</hi>
                  </div>
                </div>
              </div>

              
              <div class="col-md-4">
                <div class="card news_card">
                  <div class="card-header">Latest News</div>
                  <div class="card-body">
                    <button class="btn btn-primary" onclick="news()">Add Newss</button>
                  </div>
                </div>
              </div>

             
              <div class="col-md-4">
                <div class="card marquee_card">
                  <div class="card-header">Marquee</div>
                  <div class="card-body">
                    <button class="btn btn-primary" onclick="marquee()">Add Marquee</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
    require_once('slider.php');
    require_once('news.php');
    require_once('marquee.php');
    
    ?>
    </div>
  </div>
</div>

  
  

 <script>
    function slider() {
      let form1 = document.getElementById('slider_form');
        let form2 = document.getElementById('news_form');
        let form3 = document.getElementById('marquee_form');        

        console.log('slider');

        if( form1.style.display === 'none') {
          form1.style.display = 'block';
            form2.style.display = 'none';
            form3.style.display = 'none';
        } else {
          form1.style.display = 'none';
        }
    }

    function news() {
        let form1 = document.getElementById('slider_form');
        let form2 = document.getElementById('news_form');
        let form3 = document.getElementById('marquee_form');        

        console.log('news');
        
        if (form2.style.display === 'none') {
          form1.style.display = 'none';
            form2.style.display = 'block';
            form3.style.display = 'none';
        } else {
            form2.style.display = 'none';
        }
    }

    function marquee() {
      let form1 = document.getElementById('slider_form');
        let form2 = document.getElementById('news_form');
        let form3 = document.getElementById('marquee_form');   
        
        console.log('marquee');
        
        if (form3.style.display === 'none') {
            form1.style.display = 'none';
            form2.style.display = 'none';
            form3.style.display = 'block';
        } else {
            form3.style.display = 'none';
        }
    }

   
   
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
