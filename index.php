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
        <textarea id="response"></textarea>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
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

                var wsUrl;
                wsUrl = "proxy.php?send_cookies=0&user_agent=Apache-HttpClient/4.1.1 (java 1.5)&mode=native&url=http%3A%2F%2F145.48.6.81%3A9001%2FHartigeHapProftaak-Planning-context-root%2FPersoneelsbManagerPort%3Fwsdl";
                wsUrl = "proxy2.php?url=145.48.6.81%3A9001%2FHartigeHapProftaak-Planning-context-root%2FPersoneelsbManagerPort%3Fwsdl";

                var soapRequest = '<?xml version="1.0" encoding="utf-8"?><soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:bus="http://BusinessLogic/"><soapenv:Header/><soapenv:Body><bus:getComboMedewerker/></soapenv:Body></soapenv:Envelope>';

                $.ajax({
                    type: "POST",
                    url: wsUrl,
                    contentType: "text/xml",
                    dataType: "xml",
                    data: soapRequest,
                    cache: false,
                    success: processSuccess,
                    error: processError
                });

        });

        function processSuccess(data, status, req) {
            if (status == "success")
                $("#response").text($(req.responseXML).find("HelloResult").text());
        }

        function processError(data, status, req) {
            alert(req.responseText + " " + status);
        }  

    </script>

  </body>
</html>
