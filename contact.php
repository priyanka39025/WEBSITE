<!DOCTYPE html>
<html>
<head>
	<title> PRIYANKA </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
	
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Tourist Attractions</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">contact</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="jumbotron">
  <h1>INDIA</h1>
  <p>The land of culture and heritage</p>
</div>
<section class = "my-5">
<div class = "py-5">
  <h2 class = "text-center"> Contact us </h2>
</div>
<div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>user</label>
      <input type="text" name="user"  autocomplete = "off" class = "form-control">
       </div>

       <div class="form-group">
      <label>email</label>
      <input type="text" name="email"  autocomplete = "off" class = "form-control">
       </div>

       <div class="form-group">
      <label>mobile</label>
      <input type="text" name="mobile"  autocomplete = "off" class = "form-control">
       </div>

       <div class="form-group">
      <label>comment</label>
      <textarea class ="form-control" name="comment"></textarea>
       </div>
       <button type="submit" class="btn btn-success">Submit</button>
 <button class="btn btn-success"><a style = "color: white;" href="get_info.php">See Data</a></button>
    </form>
</div>
</section>
</body>
</html>