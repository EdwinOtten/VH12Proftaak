<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>VH12 Proftaak</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- responsive tables -->
    <link href="css/no-more-tables.css" rel="stylesheet">

    <link href="css/datepicker.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      h1 { font-size: 32px; }
    </style>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" rel="home" href="#" title="VH12 Proftaak" style="padding-top: 6px;">
              <img style="max-width:100px; margin-top: -6px; max-height: 50px;" src="logo.png"> VH12 Proftaak
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Werknemersoverzicht</a></li>
            <li><a href="add.php">Werknemer toevoegen</a></li>
          </ul>
          <div class="hidden-xs" style="height: 26px; margin-top: 12px;float: right;z-index: 99;width: 44px;float: right;"><div style="background-color: rgb(230, 0, 0);height: 33.333%;width: 100%;"></div><div style="background-color: white;width: 100%;height: 33.333%;"></div><div style="background-color: rgb(69, 69, 253);width: 100%;  height: 33.333%;"></div></div>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="page-header">
        <h1>Werknemer toevoegen</h1>  
      </div>
      <div class="">
        <p>Hieronder kunt u een nieuwe werknemer toevoegen aan het St. Matthews Hospital.</p>
        <form role="form" id="addWerknemer">

          <div class="col-md-4">
            <div class="form-group" id="ID-form-group">
              <label for="ID">ID</label>
              <input type="number" name="ID" class="form-control" id="ID-form-control">
            </div>

            <div class="form-group">
              <label for="Functie">Functie</label>
              <input type="text" name="Functie" class="form-control">
            </div>

            <div class="form-group">
              <label for="Voornaam">Voornaam</label>
              <input type="text" name="Voornaam" class="form-control">
            </div>

            <div class="form-group">
              <label for="Achternaam">Achternaam</label>
              <input type="text" name="Achternaam" class="form-control">
            </div>

            <div class="form-group">
              <label for="Wachtwoord">Wachtwoord</label>
              <input type="password" name="Wachtwoord" class="form-control">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="Geboortedatum">Geboortedatum</label>
              <input placeholder="jjjj-mm-dd" type="text" name="Geboortedatum" class="form-control datepicker" data-date-format="yyyy-mm-dd">
              <span class="glyphicon glyphicon-calendar form-control-feedback" style="position: absolute; top: 35px; right: 24px;"></span>
            </div>

            <div class="form-group">
              <label for="Geslacht">Geslacht</label>
              <select type="text" name="Geslacht" class="form-control">
                <option value="M">man</option>
                <option value="V">vrouw</option>
              </select>
            </div>

            <div class="form-group">
              <label for="Straat">Straat</label>
              <input type="text" name="Straat" class="form-control">
            </div>

            <div class="form-group">
              <label for="Huisnummer">Huisnummer</label>
              <input type="text" name="Huisnummer" class="form-control">
            </div>

            <div class="form-group">
              <label for="Postcode">Postcode</label>
              <input type="text" name="Postcode" class="form-control">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="Stad">Stad</label>
              <input type="text" name="Stad" class="form-control">
            </div>

            <div class="form-group">
              <label for="Telefoon">Telefoon</label>
              <input type="tel" name="Telefoon" class="form-control">
            </div>

            <div class="form-group">
              <label for="Contacturen">Contacturen</label>
              <input type="number" name="Contacturen" class="form-control">
            </div>

            <div class="form-group">
              <label>&nbsp;</label><br />
              <button type="submit" class="btn btn-default" id="submit" data-loading-text="Toevoegen...">Voeg toe</button>
            </div>
            
          </div>

        </form>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>


  <script type="text/javascript">
        $(document).ready(function () {

          $('.datepicker').datepicker();

          $( "#addWerknemer" ).submit(function( event ) {
            $( "#submit" ).button('loading');
            $.post( "proxy.php?service=addWerknemer", $( "#addWerknemer" ).serialize())
              .done(function( data ) {
                console.log(data);
                // do nothing
            });
            $( "#submit" ).button('reset');
            event.preventDefault();
          });

          
          $( "#ID-form-control" ).bind('keyup mouseup', function () {
            var input = $(this).val();
            if (input.length > 0) {
              $.post( "proxy.php?service=employeeExists", { ID: input })
                .done(function( data ) {
                  validateID(data);
              });
            } else {
              $('#ID-form-group').removeClass('has-success');
              $('#ID-form-group').addClass('has-error');
              $('#ID-form-control-feedback').remove();
              $('#ID-form-group').append('<span id="ID-form-control-feedback" class="glyphicon glyphicon-remove form-control-feedback" style="position: absolute; top: 35px; right: 40px;"></span>');
            }
          }); 

        });

        function validateID(data) {
          if ($(data).find('return').text() == "true" ) {
            $('#ID-form-group').removeClass('has-success');
            $('#ID-form-group').addClass('has-error');
            $('#ID-form-control-feedback').remove();
            $('#ID-form-group').append('<span id="ID-form-control-feedback" class="glyphicon glyphicon-remove form-control-feedback" style="position: absolute; top: 35px; right: 40px;"></span>');
          } else {
            $('#ID-form-group').removeClass('has-error');
            $('#ID-form-group').addClass('has-success');
            $('#ID-form-control-feedback').remove();
            $('#ID-form-group').append('<span id="ID-form-control-feedback" class="glyphicon glyphicon-ok form-control-feedback" style="position: absolute; top: 35px; right: 40px;"></span>');
          }
        }

    </script>

  </body>
</html>
