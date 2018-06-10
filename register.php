<!DOCTYPE html>
<html lang="de">
  <head>
    <!-- ######################################## BOOTSTRAP TEIL 1 ######################################## -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->

    <link rel="icon" type="image/png" href="../favicon.png" sizes="64x64">

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Unterstützung für Media Queries und HTML5-Elemente in IE8 über HTML5 shim und Respond.js -->
    <!-- ACHTUNG: Respond.js funktioniert nicht, wenn du die Seite über file:// aufrufst -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- ######################################## ENDE BOOTSTRAP TEIL 1######################################## -->
    <title>Hofelich Home</title>
  </head>
  <body>
<!-- DEVELOPE FROM HERE-->
<div class="row">
  <div class="col-sm-offset-4 col-sm-4 text-center">
    <h1>Hofelich Home</h1>
    <h6>Bitte registieren Sie sich um fortzufahren.</h6>
  </div>
</div>

<div class="row"><div class="col-sm-12 hidden-xs"><br></div></div>

<div class="container well">
  <form class="form-horizontal" method="POST">
  <div class="form-group">

    <label for="username" class="col-sm-4 control-label">Benutzername</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="username" placeholder="Benutzername">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-4 control-label">Passwort</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="password" placeholder="Passwort">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-offset-4 col-md-4">
      <button type="submit" class="btn btn-default">Registrieren</button>
      <a href="../index.php" class="btn btn-default">Zurück zum Login</a>
    </div>
   </div>
</form>
</div>
<!-- UNTIL HERE-->
    <!-- ######################################## BOOTSTRAP TEIL 2 ######################################## -->
    <!-- jQuery (wird für Bootstrap JavaScript-Plugins benötigt) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Binde alle kompilierten Plugins zusammen ein (wie hier unten) oder such dir einzelne Dateien nach Bedarf aus -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- ######################################## ENDE BOOTSTRAP TEIL 2 ######################################## -->
  </body>
</html>
