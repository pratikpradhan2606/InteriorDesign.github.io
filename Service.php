<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Services</title>
    <style>
        .card:hover{
            background-color:rgb(30,15,40);
            color:white;
            transition:2s;
            transform: scale(1.05);  
        }

    </style>

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
  <?php include('Header.php');?>
<br><br><br>

    <div class="container mt-5">
    <center><i><h3>OUR SERVICES</h3>Interior Design Studio</i></center><hr>
    <div class="card-group ">
        <div class="card m-2 border">
            <img class="card-img-top" src="IMG/Service1.png"alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Art Installation</h5>
            <p class="card-text">Mark Design provides service of Art installation to their Clients at very low cost with best services</p>
            <p class="card-text"><small class="text-muted">Art Installation at Mark Design Studio</small></p>
            </div>
        </div>
        <div class="card m-2 border">
            <img class="card-img-top" src="IMG/Service2.png"alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Graphics Design</h5>
            <p class="card-text">Mark Design provides service of Graphics Design to their Clients at very low cost with best services</p>
            <p class="card-text"><small class="text-muted">Graphics Design at Mark Design Studio</small></p>
            </div>
        </div>
        <div class="card m-2 border">
            <img class="card-img-top" src="IMG/Service3.png"alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Designing and Printing Media</h5>
            <p class="card-text">Mark Design provides service of Designing and Printing Media to their Clients at very low cost with best services</p>
            <p class="card-text"><small class="text-muted">Designing and Printing Media at Mark Design Studio</small></p>
            </div>
        </div>
</div>
     
    </div>
    <div class="container mt-5">
    <center><i><h3>Portfolio</h3>Work Done for Clients</i></center><hr>
    <div class="card-group ">
        <div class="card m-2 border">
            <img class="card-img-top" src="IMG/Client1.jpg"alt="Card image cap">
            <p class="card-text p-4"><small class="text-muted">
                    We do all kinds of advertisements boards, Banners and No Parking Boards at high quality and on time delivery!
        <br>
        Callus @ +91 9632 66 2000 with your requirements and to get the best quote!📱</small></p>
                </div>
        <div class="card m-2 border">
            <img class="card-img-top" src="IMG/Client2.jpg"alt="Card image cap">
            <p class="card-text p-4"><small class="text-muted">“Design can be art. Design can be simple. That’s why it’s so complicated.” –Paul Rand
            <br>
        We Mark Designs make complicated art simple for our customers!🥰
        <br>
        Call +91 9632 66 2000 with your requirements and to get a personalised quote!</small></p>
                </div>
        <div class="card m-2 border">
            <img class="card-img-top" src="IMG/Client3.jpg"alt="Card image cap">
            <p class="card-text p-4"><small class="text-muted">
            We Mark Designs make complicated art simple for our customers!🥰
            <br>
            Call +91 9632 66 2000 with your requirements and to get a personalised quote!</small></p>
        </div>
        </div>
</div>
     
    </div>
   

    
    <?php include('Footer.php');?>
    <style>
        @media only screen and (max-width:968px){

            .footer_style{
                display:None;
            }
            .social{
                display:None;
            }
        }
        @media only screen and (max-width:1500px){

        .footer_style{
            top:200%;
        }
        .social{
                display:None;
            }
}
    </style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>