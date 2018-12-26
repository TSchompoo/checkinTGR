<?php
session_start();
$team = $_SESSION['teamStraff'];
?>
<html>
<head>
    <title>TESA2019</title>
	<link rel="icon" type="image/png" href="assets/img/icon_esa.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-straff.css">
    <link href='https://fonts.googleapis.com/css?family=Passion+One|Roboto|Oxygen|Open+Sans+Condensed:300|Cantarell|Ubuntu' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=K2D|Kanit|Prompt" rel="stylesheet">

</head>
<body>

<div class="header">
<?php


 echo "<div class=\"main-center-head\">
   <h1 style=\"font-size:20px; \"> พี่เลี้ยงประจำทีม  <h1>
   <h style=\"font-size:30px; \">".$team."</p> 
   </div>"
?>
</div>
<div class="slideshow-container">

<div class="main-back mySlides fade">

<?php
			$conn = mysqli_connect("localhost", "root", "", "plearnja_tgr2019");
			mysqli_query($conn, "SET NAMES UTF8");
			$sql="SELECT s.* FROM team_register t , staff s WHERE t.Team_Name Like '%$team%' AND t.Team_ID = s.Team_ID";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0 )
            {
                
           while($show = mysqli_fetch_assoc($result)) 
            { 
              
        
?>
         <div class="main-center">
             <img class="img-straff" src="assets/img/icons/001-human.png">   <!-- ใส่รูป โดย ใช้ s.Staff_Pic ; -->
           <br><br>  
<?php
            echo "ชื่อเล่น : ".$show['Staff_NickName']."<br>";
            echo "เบอร์โทร : ".$show['Staff_Tell']."<br>";   

         ?>
         </div>
          <?php
        }
        }
        $conn->close();
    ?>
            <!-- <div class="main-center">
       <img class="img-straff" src="assets/img/icons/002-human-1.png">
       <br><br>
            ชื่อเล่น : ปอม <br>
           เบอร์โทร : 0812345688<br>
      </div>  -->
   
    
</div>
</div>
<br>


<?php
include_once 'footer.php';
?>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>