<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="_images/favicon.ico">

    <title>Darst Ranch Vineyards</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="_css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="_css/timeline.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Lightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="_css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <button onclick="topFunction()" id="scrollTop" title="Go to top">&nbsp;^&nbsp;</button>
<!--Section 1-->
  <section>
      <?php include_once("header.php");?>
  </section>  
<!--Section 2-->
  <a name="honey"></a>
  <section id="about" style="background-color:#e6e7e8; padding-top: 30px;">
    <div class="container" >
      <div class="row" style="margin-top: 100px; min-height: 200px;">
        <div class ="col-md-8">
          <h4>Make a Reservation</h4>
          <form class="form reservation-form">
            <div class="form-group">
              <input type="text" class="form-control reservation-name" placeholder="Name">
            </div>
            <div class="form-group">
              <div class="input-group-btn select" id="select1">
               <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="selected">Select</span> <span class="caret"></span></button>
                <ul class="dropdown-menu option reservation-day" role="menu">
                  <li id="1"><a href="#">Today</a></li>
                  <li id="2"><a href="#">Tomorrow</a></li>
                </ul>
              </div>
            </div>
            <button class="btn btn-default reservation-button">Set Reservation</button>
          </form>
        </div>
      </div>
      <hr>
      <div class="row" style="min-height: 200px;">
        <div class="col-md-8">
          <h4>Reservation List</h4>
          <ul class="reservations"></ul>
        </div>
      </div>    
  <!--Query DB-->
      <script id="reservation-template" type="text/x-handlebars-template">
        <li data-id="{{reservationId}}">
          <p>Hi, {{name}}. Your reservation is all set for {{day}}.</p>
        </li>
      </script>
    </div>
  </section>
  <!--Section 3-->
  <section>
    <?php include_once("footer.php");?>  
  </section>

  <!-- handlebars -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
 
  <!-- Firebase -->
  <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-app.js"></script>
  <!-- Add additional services you want to use -->
  <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-database.js"></script>
  
  <!--Firebase hosting -->
  <!-- <script  src="/__/firebase/5.0.4/firebase-app.js"></script>
  <script  src="/__/firebase/5.0.4/firebase-auth.js"></script>
  <script  src="/__/firebase/5.0.4/firebase-database.js"></script>
  <script  src="/__/firebase/5.0.4/init.js"></script> -->

 <!-- Custom JS -->
  <script src="_scripts/script.js"></script>
  <script src="_scripts/db.js"></script>
  
  <script>
    $('body').on('click','.option li',function(){
      var i = $(this).parents('.select').attr('id');
      var v = $(this).children().text();
      var o = $(this).attr('id');
      $('#'+i+' .selected').attr('id',o);
      $('#'+i+' .selected').text(v);
    });
  </script>

</body>
</html>