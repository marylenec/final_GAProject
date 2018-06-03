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
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12" style="margin-top:100px; margin-bottom:100px;"> 
          <div class="ekko-lightbox-container">
            <a href="_images/honey-01.jpg" data-width='600'data-toggle="lightbox"  data-gallery="example-gallery3">
              <img src="_images/honey-01.jpg" class="img-fluid hover-gallery">
              <div class="middle">
                <div class="text">Click to view</div>
              </div>
            </a>  
            <div id="demo"></div>
          </div>
        </div>
      </div>
    </div>
    </section>   
<!--Section 3-->
  <section>
    <?php include_once("footer.php");?>
  </section>  
<!--Section 4-->
     
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="_scripts/ie10-viewport-bug-workaround.js"></script>

<!-- Custom JS-->
<script src="_scripts/script.js"></script>

<!--JS-->
<script>
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });

  var slides = ['honey-02.jpg','honey-03.jpg','honey-04.jpg','honey-05.jpg','honey-06.jpg','honey-07.jpg','honey-08.jpg','honey-09.jpg','honey-10.jpg','honey-11.jpg','honey-12.jpg'];
  var text ="";

  function loadImage(images) {

    for (i = 0; i < slides.length; i++) { 
      text += "<a href='_images/" + images[i] + "' data-toggle='lightbox' data-width='600' data-gallery='example-gallery3'> <img src='_images/"  + images[i] + " ' class='hide'></a>";
      // text += "<img src='_images/"  + images[i] + " '    class='img-fluid' style='width:100%; padding:10px; display:block; margin:0 auto;'>";
      console.log(text);
      }
    document.getElementById("demo").innerHTML = text;
  }

  window.loadImage(slides);
</script>

</body>
</html>