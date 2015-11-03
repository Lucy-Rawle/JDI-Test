<?php require_once("php/backend.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Lucy's test for JDI.">
<meta name="author" content="Lucy Rawle">
<link rel="icon" href="../../favicon.ico">
<title>Lucy Rawle JDI Test</title>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/custom.css" rel="stylesheet">
<link href="/css/font-awesome.css" rel="stylesheet">
<link href="/css/font-awesome.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
<nav class="jdi-test-navbar navbar navbar-inverse navbar-fixed-top">
  <div class="nav-row row">
    <div class="user-login-header"> <i class="fa guest-icon fa-3x">&#xf007;</i>
      <div class="user-login-name">Guest</div>
      <div class="user-login-message">Not logged in</div>
    </div>
    <div class="navbar-brand-container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Logo"/></a> </div>
    </div>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
    <div class="nav-menu">
      <h3>Navigation</h3>
      <ul>
        <li><a href="#"><i class="fa fa-home"></i>Homepage</a></li>
        <li><a class="active" href="#"><i class="fa fa-arrow-circle-o-right"></i>Products</a></li>
        <ul class="sub-item">
          <li><a href="#">Example Sub Item</a></li>
        </ul>
        <li><a href="#"><i class="fa fa-question"></i>About Us</a></li>
        <li><a href="#"><i class="fa fa-pencil"></i>Blog</a></li>
        <li><a href="#"><i class="fa fa-list-alt"></i>Knowledgebase</a></li>
        <li><a href="#"><i class="fa fa-comments-o"></i>Support Forums</a></li>
      </ul>
      <h3>Accounts</h3>
      <ul>
        <li><a href="#"><i class="fa fa-user"></i>Register</a></li>
        <li><a href="#"><i class="fa fa-lock"></i>Login</a></li>
      </ul>
      <h3>Search</h3>
      <div class="search"><i class="fa fa-search"></i>
        <input type="text" value="" placeholder="Example..." />
      </div>
    </div>
  </div>
</nav>
<div class="main-container">
  <div class="main-row row">
    <div class="menu-right-body nav-menu">
      <h3>Navigation</h3>
      <ul>
        <li><a href="#"><i class="fa fa-home"></i>Homepage</a></li>
        <li><a class="active" href="#"><i class="fa fa-arrow-circle-o-right"></i>Products</a></li>
        <ul class="sub-item">
          <li><a href="#">Example Sub Item</a></li>
        </ul>
        <li><a href="#"><i class="fa fa-question"></i>About Us</a></li>
        <li><a href="#"><i class="fa fa-pencil"></i>Blog</a></li>
        <li><a href="#"><i class="fa fa-list-alt"></i>Knowledgebase</a></li>
        <li><a href="#"><i class="fa fa-comments-o"></i>Support Forums</a></li>
      </ul>
      <h3>Accounts</h3>
      <ul>
        <li><a href="#"><i class="fa fa-user"></i>Register</a></li>
        <li><a href="#"><i class="fa fa-lock"></i>Login</a></li>
      </ul>
      <h3>Search</h3>
      <div class="search"><i class="fa fa-search"></i>
        <input type="text" value="" placeholder="Example..." />
      </div>
    </div>
    <div id="main-content" class="main-content-container">
      <div class="row background">
        <div class="content">
          <div class="content-head">
            <div class="crumbtrail"><a href="#">Blog</a> / All Posts</div>
            <h1>Example Title</h1>
            <h2>An example of a subheading</h2>
          </div>
          <button id="add-car-button" type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#add-car-popup">Add Car</button>
          <div class="row car-row">
            <?php foreach($cars as $car): ?>
            <div class="col-md-4 col-xs-12"> <a href="#"><img src="/img/<?php echo $car['image']; ?>" /></a>
              <div class="item-details">
                <h3><?php echo $car['name']; ?></h3>
                <p><?php echo $car['text']; ?> <a href="#">Car news</a></p>
                <button type="button" class="edit-car-button btn btn-info btn-lg" data-toggle="modal" data-target="#edit-car-popup">Edit Car</button>
              </div>
            </div>
            <?php endforeach;?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="add-car-popup" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Car</h4>
      </div>
      <div class="modal-body">
        <h3>Upload an image</h3>
        <p>
          <input class="upload" type="file" name="pic" accept="image/*">
        </p>
        <h3>Enter a title</h3>
        <p>
          <input class="input" type="text">
        </p>
        <h3>Enter a description</h3>
        <p>
          <input class="input" type="text">
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-lg" data-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>
<div id="edit-car-popup" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header-2">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Car</h4>
      </div>
      <div class="modal-body">
        <h3>Upload an image</h3>
        <p>
          <input class="upload" type="file" name="pic" accept="image/*">
        </p>
        <h3>Enter a title</h3>
        <p>
          <input class="input" type="text" value="Example Car" >
        </p>
        <h3>Enter a description</h3>
        <p>
          <input class="input" type="text" value="Example car description">
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info btn-lg" data-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
