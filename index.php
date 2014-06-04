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
          <a class="navbar-brand" href="#">VH12 Proftaak</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Werknemersoverzicht</a></li>
            <li><a href="add.php">Werknemer toevoegen</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="page-header">
        <h1>Werknemersoverzicht</h1>  
      </div>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="">
        <p>Hieronder vindt u de werknemers van het St. Matthews Hospital.</p>
        <table class="table table-striped no-more-tables" id="employeestable">
          <thead>
            <tr>
              <th class="numeric">id</th>
              <th>Functie</th>
              <th>Naam</th>
              <th>Geboren</th>
              <th>Geslacht</th>
              <th>Adres</th>
              <th>Postcode</th>
              <th>Plaats</th>
              <th class="numeric">Telefoon</th>
              <th class="numeric">Contracturen</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>



  <script type="text/javascript">
        $(document).ready(function () {

                $.ajax({
                    type: "GET",
                    url: 'proxy.php?service=getSuperComboMedewerker',
                    cache: false,
                    success: processSuccess,
                    error: processError
                });

        });

        function processSuccess(data, status, req) {
          $(data).find('werknemer').each(function(){
            jQuery("#employeestable tbody").append(
              '<tr>' +
                '<td data-title="id" class="numeric">'                  + $(this).find('id').text() + '</td>' +
                '<td data-title="Functie">'                             + $(this).find('jobname').text() + '</td>' +
                '<td data-title="Naam">'                           + $(this).find('firstname').text() + ' ' + $(this).find('surname').text() + '</td>' +
                '<td data-title="Geboren">'                           + $(this).find('birthdate').text() + '</td>' +
                '<td data-title="Geslacht">'                                 + $(this).find('sex').text() + '</td>' +
                '<td data-title="Adres">'                              + $(this).find('street').text() + ' ' + $(this).find('housenumber').text() + '</td>' +
                '<td data-title="Postcode">'                          + $(this).find('postalcode').text() + '</td>' +
                '<td data-title="Stad">'                                + $(this).find('city').text() + '</td>' +
                '<td data-title="Telefoon" class="numeric">'         + $(this).find('phonenumber').text() + '</td>' +
                '<td data-title="Contracturen" class="numeric">'       + $(this).find('contracthours').text() + '</td>' +
              '</tr>'
            );
        });

            if (status == "success")
                $("#response").text($(req.responseXML).find("HelloResult").text());
        }

        function processError(data, status, req) {
            alert(req.responseText + " " + status);
        }  

    </script>

  </body>
</html>
