<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Local CSS -->
    <link rel="stylesheet" href="css/portfolio.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Inconsolata&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Icon CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <title>DK - Contact</title>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-light navbar-expand-md">
        <span><a id="navbar-brand" class="navbar-brand">Danny Kamman - Contact</a></span>
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#main-navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="main-navigation">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio.php">PORTFOLIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">CONTACT</a>
            </li>
          </ul>
        </div>

      </nav>
    </header>

    <div class="container">
      <div style="margin: 0 auto;">
        <table width="500">
          <tr>
            <th>Contact Gegevens</th>
          </tr>
          <tr>
            <td>Danny Kamman</td>
            <td>Kamman.Danny@gmail.com</td>
          </tr>
        </table>
      </div>
    </div>

  <div class="row">
    <div class="container-fluid fixed-bottom" style="background-color:yellow; height: 2.2em; line-height: 2.2em;">
      <div class="medialogo"><a href="https://www.linkedin.com/in/danny-kamman-651476145/" target="_blank"><i class="fab fa-linkedin-in"></i></a> <a href="#"><i class="fab fa-instagram"></i></a></div>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
