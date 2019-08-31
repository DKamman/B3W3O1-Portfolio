<?php
//date in mm/dd/yyyy format; or it can be in other formats as well
$birthDate = "08/11/1996";
//explode the date to get month, day and year
$birthDate = explode("/", $birthDate);
//get age from date or birthdate
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
  ? ((date("Y") - $birthDate[2]) - 1)
  : (date("Y") - $birthDate[2]));



if (Date("d") >= 15 && Date("m") >= 07 && Date("Y") >= 2018) {
  $schoolYear = "eerste";
}
if (Date("d") >= 15 && Date("m") >= 07 && Date("Y") >= 2019) {
  $schoolYear = "tweede";
}
if (Date("d") >= 15 && Date("m") >= 07 && Date("Y") >= 2020) {
  $schoolYear = "derde";
}


 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Local CSS -->
    <link rel="stylesheet" href="./css/portfolio.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Inconsolata&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Icon CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <title>DK - Homepage</title>
  </head>
  <body>

    <?php include "inc/nav.html" ?>

    <div id="mainpage" class="container">
      <div class="row">
        <div class="col-md-6">
          <div id="maintext">
            <p>Welkom op mijn portfolio site.

              Mijn naam is Danny Kamman, <?php echo $age; ?> jaar. Ik ben een Applicatie- en Mediaontwikkelaar in opleiding aan het Davinci College in Dordrecht.
              Ik begin in september aan mijn <?php echo $schoolYear; ?> jaar. <br><br>
              Met de kennis die ik hier op doe zou ik graag aan de slag willen als Front-end en Back-end Developer.<br><br>
              Ik ben inmiddels bekend met de programmeer talen PHP, JavaScript, HTML en CSS.
              Ook ben ik bekend met database management en SQL.<br><br>
              Op de <a href="portfolio.php" id="portlink"><i>Portfolio</i></a> pagina worden een aantal van mijn school projecten weergeven.
            </p>

            <div class="medialogo">
              <a href="https://www.linkedin.com/in/danny-kamman-651476145/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>

          </div>
        </div>

        <div class="col-md-6">
          <div id="mainimage" class="text-center">
            <img class="rounded-circle img-fluid" style="max-width: 75%;" src="img/pasfoto2.jpg" alt="face">
          </div>
        </div>
      </div>


      <div class="row">
        <div class="container-fluid fixed-bottom" style="background-color:yellow; height: 2.2em; line-height: 2.2em;">
            <footer class="text-center">
              <span>
                <b>Danny Kamman</b> ©
                <?php if (date("Y") >= '2020') {
                  echo '2019 - ' , date("Y");
                }else{
                  echo date("Y");
                } ?>
              </span>
            </footer>
        </div>
    </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
