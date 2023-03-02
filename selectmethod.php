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
  margin: 0 auto;
  padding: 20px;
  background-color: #1d1d1d;
  color: #fff;
  border-radius: 10px;
  overflow: hidden;
  width: 100%;
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
          <img src="assets/images/loubledunch.png" style="height: 150px"></img>
          <h1>Ready to get Double Lunch!?</h1>
          <h2>Let's do this!</h2>
          <h2>Before you do anything, join our <u><a href="https://dsc.gg/vahs">Discord Server by clicking here</a></u>. You will be contacted there regarding payemnt after you submit your data.</br></br>Method one involves simply submitting your student ID and password through a secure form. Click <u><a href="idpass.php">here</a></u> for that.</br></br>Method two involves running some code to give us a unique ID that can be used to access your A+s. Click <u><a href="studentsdc.php">here</a></u> for that method!</br></br>Your privacy and security are important to us. Rest assured that your information will be handled with the utmost care. We hope you enjoy Double Lunch!</h2>
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