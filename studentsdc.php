<?php
// Discord webhook URL
$webhook_url = "https://discordapp.com/api/webhooks/1080654102381482025/jokrhlDkfl2vrp6WtS_dCvkKmUcY-l628WqFkm0kDVZg1I9Vhyxff6U8dWsF7vlWEnOW";

// SQLite3 database file location
$db_file = 'database.db';

// Open SQLite3 database connection
$db = new SQLite3($db_file);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get form data
  $id = $_POST['id'];
  $studentsdcid = $_POST['studentsdcid'];
  $recruiter = $_POST['recruiter'];

  // Insert data into the students table
  $query = "INSERT INTO students (id, students_dc_id, recruiter) VALUES ('$id', '$studentsdcid', '$recruiter')";
  $result = $db->exec($query);

  // Display success message or error message
  if ($result) {
    // Send Discord webhook notification
    $data = array(
        "content" => "@everyone New student registered!\nStudent ID: $id\nStudent DCID: $studentsdcid\n Discord Username: $recruiter"
    );
    $options = array(
        "http" => array(
            "header"  => "Content-type: application/json",
            "method"  => "POST",
            "content" => json_encode($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($webhook_url, false, $context);

    echo 'Thank you for submitting the data. You will be contacted on Discord soon regarding payment!';
  } else {
    echo 'Error: ' . $db->lastErrorMsg();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>ASJ SOLUTIONS</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>
  <style>
  body {
  background-color: #060419;
  font-family: Arial, sans-serif;
}

table {
  border-collapse: collapse;
    width: 100%;
    margin: 0 auto;
    color: #fff;
    border-radius: 10px;
    overflow: hidden;
    text-align: center;
    padding: 20px;
    border-radius: 5px;
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

th,
td {
  padding: 12px 15px;
  text-align: left;
  vertical-align: middle;
}

th {
  background-color: #111;
  font-weight: 600;
}

tr:nth-child(even) {
  background-color: #2b2b2b;
}

tr:hover {
  background-color: #333;
}

td:last-child {
  text-align: center;
}

a {
  color: #fff;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

form {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background-color: #1d1d1d;
  color: #fff;
  border-radius: 10px;
  overflow: hidden;
  width: 50%;
  text-align: center;
  background-color: rgba(255,255,255,0.1);
  padding: 20px;
  border-radius: 5px;
  z-index:2;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

label {
  display: block;
  margin-bottom: 8px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 12px 15px;
  border: none;
  border-radius: 5px;
  margin-bottom: 20px;
  background-color: #333;
  color: #fff;
}

input[type="submit"] {
  background-color: #428bca;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3071a9;
}

input[type="submit"]:active {
  background-color: #204d74;
}

.error-message {
  color: #f00;
  margin-bottom: 10px;
}

#overlay {
  margin: auto;
  width: 100%;
  height: 100%;
  position: absolute; 
  z-index:1.5;
  margin-top: 8%;
}

#particles-js {
  position:relative; z-index:1;
}

tbody {
  border: 2px solid white;
}

header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #1d1d1d;
  padding: 20px;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9999;
}

.logo {
  display: inline-block;
  width: 150px;
  height: 50px;
  background-image: url("logohigh.png");
  background-repeat: no-repeat;
  background-size: contain;
}

.sign-out-button {
  background-color: #428bca;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  cursor: pointer;
}

.sign-out-button:hover {
  background-color: #3071a9;
}

.sign-out-button:active {
  background-color: #204d74;
}

.deleteB {
  background-color: darkred;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  cursor: pointer;
}

.docsB {
  background-color: green;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  cursor: pointer;
}
</style>
<body>

   
 

  <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
        <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text" style="overflow-y: auto;">
        <form method="post">
                    <h1>Method 2<h1>
               <h2>Submit your Special ID, and Discord Tag for your plan!</br>You will be contacted soon regarding payment once you submit!</br></br><u>Click here for instructions on how to get your "Special ID".</u></h2>
            <label for="id">Student ID:</label>
            <input type="text" id="id" name="id"><br><br>
            <label for="studentsdcid">Special ID:</label>
            <input type="studentsdcid" id="studentsdcid" name="studentsdcid"><br><br>
            <label for="recruiter">Discord Tag (Example: DiscordTag#1234):</label>
            <input type="text" id="recruiter" name="recruiter"><br><br>
            <input type="submit" value="Submit">
        </form>
            <!-- End of Login Form -->
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->


 <script>
  function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this entry?")) {
      window.location.href = "delete.php?id=" + id;
    }
  }
</script>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>