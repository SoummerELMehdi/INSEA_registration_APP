<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Acceuil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    </head>

  <body>
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://images.unsplash.com/photo-1477238134895-98438ad85c30?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=davide-cantelli-e3Uy4k7ooYk-unsplash.jpg&w=1920" class="d-block w-100">
              <div class="carousel-caption">
                <h5>
                    <button type="button" class="btn btn-success" action = "'http://www.insea.ac.ma/';">INSEA</button>
                </h5>
                <p>Les ingénieurs de l’INSEA sont destinés à servir dans les administrations publiques, les organismes publics et semi-publics et le secteur privé.
 
                    L’INSEA accueille, outre les étudiants marocains, des étudiants d’autres pays, notamment ceux d’expression française.
                    A partir de 1995, l’Institut a mis en œuvre une réforme de son enseignement qui consiste à admettre sur concours, des étudiants issus des classes préparatoires ou titulaires du Certificat Universitaire des Etudes Supérieures en Mathématiques-Physique ou Physique et Sciences de l'Ingénieur en première année, et des étudiants titulaires d’une licence scientifique ou d’un diplôme d’ingénieur d’application, en deuxième année. A l’issue de trois ou deux années d’étude, ces étudiants obtiennent le diplôme d’ingénieur d’Etat dans l’une des options précitées.
                    L’enseignement dispensé à l’INSEA comprend des cours magistraux, des travaux dirigés ou pratiques, des séminaires, des conférences, des stages et des travaux de recherche.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://images.unsplash.com/photo-1519452575417-564c1401ecc0?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=nathan-dumlao-ewGMqs2tmJI-unsplash.jpg&w=1920" class="d-block w-100" >
              <div class="carousel-caption ">
                <h5>
                  <button type="button" class="btn btn-success" onclick="window.location.href = 'signup.php';">S'inscrire</button>
                </h5>
                <p>Inscrivez vous dans notre formation.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://images.unsplash.com/photo-1514832926019-2c0dd4b55227?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=loic-furhoff-qeIaMQP_xQE-unsplash.jpg&w=1920" class="d-block w-100" >
              <div class="carousel-caption">
                <h5>
                  <button type="button" class="btn btn-success" onclick="window.location.href = 'login.php';">Connection</button>
                </h5>
                  <p>Connectez vous apres votre inscription.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </body>
</html>