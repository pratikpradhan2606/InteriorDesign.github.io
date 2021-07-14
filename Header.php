<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <script>
document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}

</script>
  </head>
  <body oncontextmenu="return false">
  <style>        
    .crousal{
        background-image:url('IMG/.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height:600px;   
    }
    .nav-ele{
        background:rgb(250,245,252);
        box-shadow:gray 0.3px 2px 0.3px 0.3px;
        border-radius:5%;
        padding-left:5px;
        padding-right:5px;
        width:120px;
        text-align:center;
        margin-left:5px;
        margin-right:5px;
    }
    .nav-ele:hover{
        color:white;
        transition:1s;
        transform:scale(1.06);
        background-color: #55ACEE;

    }
    </style>
    <script>
        // function closeArea(){
        // var data=document.getElementById("closeMenu");
        // data.style.display="None";
        // }
    </script>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white ">
  <a class="navbar-brand" href="#">
    <img src="IMG/logo.jpg" width="110" height="50" class="d-inline-block" alt="">
    Mark Design
  </a>
  
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ml-auto">
    <div class="nav-ele">
      <li class="nav-item active nav-ele-click">
        <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </div>
    <div class="nav-ele">
      <li class="nav-item active">
        <a class="nav-link" href="Service.php">Services</a>
      </li>
    </div>
    <div class="nav-ele">
      <li class="nav-item active">
        <a class="nav-link" href="AboutUs.php">About Us</a>
      </li>
    </div>
    <div class="nav-ele">
      <li class="nav-item active">
        <a class="nav-link" href="ContactForm.php">Contact Us</a>
      </li>
    </div>
    </ul>
    
  </div>
</nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
   