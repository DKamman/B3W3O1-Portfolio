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

    <title>DK - Portfolio</title>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-light navbar-expand-md">
        <span><a id="navbar-brand" class="navbar-brand">Danny Kamman - Portfolio</a></span>
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
      <div class="row">

        <div class="col-sm">
          <div class="card mx-auto">
            <img class="card-img-top" src="img/portfolio/planningtool.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Planningtool</h5>
              <p class="card-text"><i>"Planningtool"</i> is een opdracht uit blok 3. Je moest door middel van PHP en SQL een applicatie maken waarmee je kan planningsitems kan maken. Deze werden opgeslagen en bijgehouden in een database.</p>
              <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#Modal1">Meer Info</button>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Planningtool</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="modalimages text-center">
                    <span><img style="width: 49%; height: auto;" src="img/portfolio/planningtool.png" alt="planningtool img"></span>
                    <span><img style="width: 49%; height: auto;" src="img/portfolio/planningtoolcode.png" alt="planningtool code"><span>
                  </div>
                    <p class="modaltext">
                      Voor dit project moest je door middel van PHP en SQL een applicatie in elkaar zetten waar mensen evenementen mee kunnen plannen. In dit geval een bordspel evenement.
                      Met deze opdracht leerde je SQL gebruiken en hoe je je database kan aanspreken via PHP.
                    <p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-sm">
          <div class="card mx-auto">
            <img class="card-img-top" src="img/portfolio/goedemorgen.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Goedemorgen</h5>
              <p class="card-text"><i>"Goedemorgen"</i> is een project uit blok 3 en het diende als een introductie in PHP.</p>
              <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#Modal2">Meer Info</button>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Goedemorgen</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="modalimages text-center">
                    <span><img style="width: 49%; height: auto;" src="img/portfolio/goedemorgen.png" alt="planningtool img"></span>
                    <span><img style="width: 49%; height: auto;" src="img/portfolio/goedemorgencode.png" alt=""><span>
                  </div>
                  <p class="modaltext">
                    Met dit project was het de bedoeling dat, liggend aan de tijd van de dag, er Goedemorgen, Goedemiddag of Goedeavond zou komen te staan.
                    Dit project was een introductie in PHP en bestaat daarom ook grotendeels uit PHP.
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


      <div class="row">

        <div class="col-sm">
          <div class="card mx-auto">
            <img class="card-img-top" src="img/portfolio/adventuregame.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Adventure Game</h5>
              <p class="card-text"><i>"Adventure Game"</i> is een project uit blok 2. Doormiddel van JavaScript moest je een meerkeuze spel maken.</p>
              <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#Modal3">Meer Info</button>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Adventure Game</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="modalimages text-center">
                    <span><img style="width: 49%; height: auto;" src="img/portfolio/adventuregame.png" alt="planningtool img"></span>
                    <span><img style="width: 49%; height: auto;" src="img/portfolio/adventurecode.png" alt=""><span>
                  </div>
                  <p class="modaltext">
                    Dit project was specifiek bedoeld om je kennis over JavaScript te testen. Het project bestaat daarom grotendeels uit JavaScript. Het is een meer keuze spel dat bestaat uit tien aparte levels.
                    Aan de hand van welke keuze je maakt komen er verschillende scenario's op gang.
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-sm">
          <div class="card mx-auto">
            <img class="card-img-top" src="img/portfolio/lingo.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Lingo</h5>
              <p class="card-text"><i>"Lingo"</i> is een project uit blok 2 waarbij je het spel Lingo moest namaken.</p>
              <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#Modal4">Meer Info</button>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Lingo</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="modalimages text-center">
                    <span><img style="width: 49%; height: auto;" src="img/portfolio/lingo.png" alt="planningtool img"></span>
                    <span><img style="width: 49%; height: auto;" src="img/portfolio/lingocode.png" alt=""><span>
                  </div>
                  <p class="modaltext">
                    Zoals de naam al laat blijken was de opdracht om het spel, Lingo, na te maken.
                      Net zoals Adventure game bestaat dit project vooral uit JavaScript. De applicatie kiest een woord uit een al aangemaakte lijst van woorden.
                      Je krijgt de eerste letter te zien waarna je woorden moet gaan typen om het goede woord te raden. Als een letter op de verkeerde plek staat word het vak geel,
                      klopt de letter dan word het vak oranje.
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>



      <div class="row">

        <div class="col-sm">
          <div class="card mx-auto">
            <img class="card-img-top" src="img/portfolio/grid.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Overall Grid</h5>
              <p class="card-text"><i>"Overall Grid"</i> is een opdracht uit blok 1. De opdracht was om van een voorbeeld een website na te bouwen. Dit door middel van een grid.</p>
              <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#Modal5">Meer Info</button>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="Modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Overall Grid</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="modalimages text-center">
                    <span><img style="width: 49%; height: auto;" src="img/portfolio/grid.png" alt="planningtool img"></span>
                    <span><img style="width: 49%; height: auto;" src="img/portfolio/gridcode.png" alt="planningtool code"><span>
                  </div>
                    <p class="modaltext">
                      Deze opdracht bestaat uit HTML en CSS. Het doel was om een website na te bouwen en daardoor te leren hoe je met een CSS grid werkt.
                    <p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-sm">
          <div class="card mx-auto">
            <img class="card-img-top" src="img/portfolio/responsive.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Responsive Website</h5>
              <p class="card-text"><i>"Responsive Website"</i> is een project uit blok 2. Net zoals Overall Grid was het de bedoeling om een website na te maken, alleen deze keer responsive.</p>
              <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#Modal6">Meer Info</button>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="Modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Responsive Website</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="modalimages text-center">
                    <span><img style="width: 49%; height: auto;" src="img/portfolio/responsive.png" alt="planningtool img"></span>
                    <span><img style="width: 49%; height: auto;" src="img/portfolio/responsivecode.png" alt=""><span>
                  </div>
                  <p class="modaltext">
                    Het doel van deze opdracht was om  een responsive website te creëren met behulp van alle kennis die je voorafgaand hebt vergaard.
                    De website en binnen liggende elementen moesten zich ordenen liggend aan de grote van het scherm of venster.
                    De opdracht bestaat uit HTML, CSS en JavaScript.
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

          <?php include "inc/footer.php" ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
