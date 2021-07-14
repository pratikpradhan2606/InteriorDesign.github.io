<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contact Us</title>
    <style>

body{
        background-image:url('IMG/Home.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height:600px; 
        
    }
    .mainbox{
        box-shadow:whitesmoke 1px 1px 2px 2px;
    }
</style><script>
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
  <?php include('Header.php');?><br><br><br>
    <!--Section: Contact v.2-->
    <div class="container col-lg-7 col-sm-9 col-md-7 border mt-5 bg-white mainbox">
    <section class="mb-2">

    <!--Section heading-->
    <h2 class="h1-responsive text-center my-4 "><i>Contact us</i></h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5 text-info"><i>Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</i></p>

    <div class="row">

        <!--Grid column-->
        <div class="col-lg-8 col-md-9 mb-md-0 mb-5 text-dark">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                           
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                        <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>
            
            <div class="text-center text-md-left" style="left:35%; position:relative;">
                <a class="btn btn-primary pl-4 pr-4 mt-3 text-white" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center text-info">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <b>Address :</b>
                    <p>128, Kamakshi Nilaya, 1st Flr, 5th Cross, Varanasi Main Rd, Ramamurthy Nagar 560036</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <b>Contact on :</b>
                    <p>+91 96326 62000</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <b>Email :</b>
                    <p>info@markdesigns.in</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

    </section>
</div>
    <!--Section: Contact v.2-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>