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
    <link rel="stylesheet" type="text/css" href="_css/styles.css">
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
    <style>
    #map {
    min-height: 500px;
    width: 100%;
    /*position: absolute !important;*/
    /*bottom: 0px;*/
    }
    </style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<button onclick="topFunction()" id="scrollTop" title="Go to top">&nbsp;^&nbsp;</button>
<!--Section 1-->
  <section>
      <?php include_once("header.php");?>
  </section>  
<!--Section 2-->
  <a name="welcome" ></a>
    <div class="cover-img"></div>
      <div class="row" style="margin:0; padding:0">
        <div class="col-md-12" style="margin:0; padding:0">
          <div class="wrapper">  
            <p class="welcome">Welcome to Darst Ranch Vineyards</p>
          </div>
        </div>
      </div>
<!-- Section 3 -->
  <a name="intro"></a>
  <section id="intro" >
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <img class="intro" src="_images/intro.jpg" width=100% style="margin-top:5%;" >
        </div>  
        <div class="col-lg-6 col-md-12">
          <p style="display: block; margin-top:20px;margin-right:auto; margin-left: auto;text-align: center; line-height: 1.5em; padding:10px;">
          In the summer of 2016, surrounded by 36 acres of rolling pastures with live and post oak trees, Paul and Nancy Darst found a picturesque pond, a spectacular 100+ year old live oak tree, and a quaint little house in Austin County. The near constant cooling breeze during the heat of the summer and the great hilltop views of some 30 miles outside of Houston proved they found just the right place to combine their love of the country and their interest in wine. </p>
          <p style="display: block; margin-right:auto; margin-left: auto; text-align: center; padding:10px;">Darst Ranch Vineyards was established in 2017 in Kenney, Texas.
          </p>
        </div>
      </div>
    </div>
  </section>
<!-- Section 4 -->
  <a name="about"></a>
  <section id="about" style="background-color:#e6e7e8; padding-top: 30px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center" style="padding:10px 0px">
          <h2 class="section-heading text-uppercase"></h2>
          <h3 class="section-subheading text-muted">Our Story</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
          <!--parent()-->
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="_images/timeline-1.jpg" alt="">
              </div>
              <!--parent()-->
              <div class="timeline-panel">
                <!--parent()-->
                <div class="timeline-heading">
                  <h4><a name="timeline-1" >Summer 2016</a></h4>
                  <h4 class="subheading">The Lande</h4>
                </div>
                <div class="timeline-body" style="display:block;">
                  <p>A new journey more text here about how fun and beautiful everything is.</p>&nbsp;<a class="timestamp" href="#timeline-2"><i class="fa fa-arrow-down fa-lg"></i></a>
                </div>
              </div>
            </li>
          <!--next-->
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="_images/timeline-2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4><a name="timeline-2">2017</a></h4>
                  <h4 class="subheading">We've got Honey!</h4>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>&nbsp;<a class="timestamp" href="#timeline-3"><i class="fa fa-arrow-down fa-lg"></i></a>
                </div>
              </div>
            </li>
          <!--next-->
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="_images/timeline-3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4><a name="timeline-3">March 31, April 1-2, 2017</a></h4>
                  <h4 class="subheading">Phase I Planting</h4>
                </div>
                <div class="timeline-body" >
                  <p style="text-align: center;">THANKS to our volunteers! We couldn’t have done it without them!<br/>Rico Adams, Debbie Fussell, Karen Shouse, Barbara and Steve Hall, Thomas Klettke, George Quintero, Grady Jarl, Luz and Joe Darst, Betsy and Gig Runge, Thomas Wang, Lisa Gertsch and Derek Dumas</p>&nbsp;<a class="timestamp" href="#timeline-4"><i class="fa fa-arrow-down fa-lg"></i></a>
                  </div>
              </div>
            </li>
          <!--next-->
            <li class="timeline-inverted" >
              <div class="timeline-image" style="margin-top: 30px;">
                <img class="rounded-circle img-fluid" src="_images/timeline-4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4><a name="timeline-4">Feb. 16-17-18, 2018</a></h4>
                  <h4 class="subheading">Phase II Planting</h4>
                </div>
                <div class="timeline-body" >
                  <p style="text-align: center;">Special THANKS to Sue Arrigo, Thomas Klettke, George Quintero, Amber Reed, Barbara Hall, Frieda Hale, Grady Jarl, Pat Reinhardt, Shaunae Trustee, Denise Gaspard, Cynthia Piro, Mike McCall, Lilly Gilmer, Dan Collins, Joe Darst, Elsie Biron, Beau Biron, Tony Parsons, Michael Parsons III and John Darst</p>&nbsp;<a class="timestamp-last" href="#timeline-5"><i class="fa fa-arrow-down fa-lg"></i></a>
                </div>
              </div>
            </li>
          <!--next-->
            <li class="timeline-inverted" style="margin-bottom: 80px;">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="_images/timeline-5.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4><a name="timeline-5">Be Part of our story! <br/>WE'RE PICKING IN JULY</a></h4>
                </div>
              </div>  
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<!-- Section 5 -->
  <a name="vineyard"></a>
  <section id="vineyard">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><a name="gallery">The Vineyard</a></h2>
        </div>  
      </div>  
        <div class="row" >
          <div class="col-lg-8 col-md-12" style="padding:0px;">
            <img src="_images/vineyard-1.jpg" style="display: block; margin-right:auto; margin-left: auto; width: 100%;" >
          </div>
          <div class="col-lg-4 col-md-12">
            <p style="margin-right:auto; margin-left: auto; margin-top:10px; padding:10px;">We selected a location at the top of the hill on the ranch. The soil is a sandy loam of varying depths sitting atop a layer of clay. The sand allows water from our drip irrigation system to penetrate down through the root zones. Combined with the slope of the hill, the sand allows water to not only move down through the root zone but to also "flow" downhill  through the sand once it reaches the clay.  This facilitates moving water between rows and to vines below.  The two acres of vines are planted in a North to South orientation to capitalize on both the drying and cooling effect of the near constant winds.</p>
          </div>
      </div>
    </div>
  </section>
<!-- Section 6 -->
  <section id="planting" >
    <div class="container">
      <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-6 col-xs-12">
          <div class="ekko-lightbox-container">
            <a href="_images/planting-1.jpeg" data-toggle="lightbox"  data-gallery="example-gallery">
              <img src="_images/planting-1.jpeg" class="img-fluid hover-gallery">
              <div class="middle">
                <div class="text">Planting Phase I Gallery</div>
              </div>
            </a>  
          </div>
          <a href="_images/planting-2.jpeg" data-toggle="lightbox" data-gallery="example-gallery" class="hide">
            <img src="_images/planting-2.jpeg" class="img-fluid">
          </a>
          <a href="_images/planting-3.jpeg" data-toggle="lightbox" data-gallery="example-gallery" class="hide">
            <img src="_images/planting-3.jpeg" class="img-fluid">
          </a>
          <a href="_images/planting-4.jpeg" data-toggle="lightbox" data-gallery="example-gallery" class="hide">
            <img src="_images/planting-4.jpeg" class="img-fluid">
          </a>
          <a href="_images/planting-5.jpeg" data-toggle="lightbox" data-gallery="example-gallery" class="hide">
            <img src="_images/planting-5.jpeg" class="img-fluid">
          </a>
        </div>
        <div class="col-md-6 col-xs-12">
          <h2><a name="gallery">Planting Phase I</a></h2>
          <p>After more than a year of looking, Paul and Nancy Darst found just the right place to combine their love of the country and their interest in wine.  In the summer of 2016 they landed on a hilltop in Austin County with 36 acres of rolling  pastures with live and post oak trees, a picturesque pond and a quaint little house that shares the hill top with a spectacular 100+ year old live oak tree. As inviting as all that represents, the best features are the near constant cooling breeze during the heat of the summer and the great hilltop views of 30+ miles not normally found so close to Houston. With that, Darst Ranch Vineyards was established in 2017 in Kenney, Texas.</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12">
          <div class="ekko-lightbox-container">
            <a href="_images/planting2-1.jpeg" data-toggle="lightbox"  data-gallery="example-gallery2">
              <img src="_images/planting2-1.jpeg" class="img-fluid hover-gallery">
                <div class="middle">
                  <div class="text">Planting Phase II Gallery</div>
                </div>
            </a>
          </div>
          <a href="_images/planting2-2.jpeg" data-toggle="lightbox" data-gallery="example-gallery2" class="hide">
            <img src="_images/planting2-2.jpeg" class="img-fluid">
          </a>
          <a href="_images/planting2-3.jpeg" data-toggle="lightbox" data-gallery="example-gallery2" class="hide">
            <img src="_images/planting2-3.jpeg" class="img-fluid">
          </a>
          <a href="_images/planting2-4.jpeg" data-toggle="lightbox" data-gallery="example-gallery2" class="hide">
            <img src="_images/planting2-4.jpeg" class="img-fluid">
          </a>
          <a href="_images/planting2-5.jpeg" data-toggle="lightbox" data-gallery="example-gallery2" class="hide">
            <img src="_images/planting2-5.jpeg" class="img-fluid">
          </a>
        </div>
        <div class="col-md-6 col-xs-12">
          <h2><a name="#">Planting Phase II</a></h2>
          <p>After more than a year of looking, Paul and Nancy Darst found just the right place to combine their love of the country and their interest in wine.  In the summer of 2016 they landed on a hilltop in Austin County with 36 acres of rolling  pastures with live and post oak trees, a picturesque pond and a quaint little house that shares the hill top with a spectacular 100+ year old live oak tree. As inviting as all that represents, the best features are the near constant cooling breeze during the heat of the summer and the great hilltop views of 30+ miles not normally found so close to Houston. With that, Darst Ranch Vineyards was established in 2017 in Kenney, Texas.</p>
        </div>
      </div>
    </div>
  </section>  
<!-- Section 7 -->
  <section>   
    <div class="container" style="min-height:350px;">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h2 class="fruit-left"><a name="#">Fruits of our labor</a></h2>
          <p class="fruit-left">Sandy loam soil has proven to be ideal for growing Blanc du Bois vines and early indications are that our terroir is no exception.  This grape is an American hybrid created by John A. Mortenson at the University of Florida in 1968.</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <img class="fruit" src="_images/fruit-1.png" style="margin-top:20px; display:block; margin-left:auto; margin-right:auto;max-width:400px;" width=100% >
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <p class="fruit-right" >It was specifically developed to survive in southern and eastern coastal growing regions. Vintners are producing dry to semi-dry white wines of increasing quality.  Austin County has emerged as one of the most successful areas for growing this varietal.  In the spring of 2017 we planted our first three blocks of Blanc du Bois on grafted root stock (1103P) totaling 395 vines. </p>
        </div>
      </div>
    </div>
  </section>     
<!-- Section 8 -->
  <section id="contact" style="background-color:#e6e7e8;">
    <div class="container" >
      <div class="row">
        <div class="col-md-12">
          <h1><a name="map">Visit</a></h1>
        </div>
      </div>    
      <div class="row">
        <div class="col-md-6">  
          <div id="map" ></div>
        </div>
        <div class="col-md-6">
          <form style="padding:10px;" form action="#" method="POST">
            <div class="form-group">
              <label for="firstName">First Name</label>
              <input type="firstName" name="firstName" class="form-control" id="firstName" placeholder="First Name">
            </div>
            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input type="lastName" name="lastName" class="form-control" id="lastName" placeholder="Last Name">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="comment">Comment:</label>
            <textarea class="form-control" name="comment" rows="5" id="comment"></textarea>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="subscribe" id="subscribe">Subscribe to our newsletter
              </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <a class="btn btn-default" href="input.php">Make a Reservation</button>
          </form>
        </div>  
      </div>
    </div>
  </section>   
<!--Section 9-->
  <section>
    <?php include_once("footer.php");?>
  </section>  

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
</script>

<!-- Google Maps -->
<script src="_scripts/main-styled.js"></script>
<script async defer 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMhBDQdPCjD8wzRQAL-qp7l1jPI9bsHfQ&callback=initMap"></script>

</body>
</html>