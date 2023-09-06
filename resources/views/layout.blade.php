<!DOCTYPE html>
<html>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
<head>

    <title>i-Learn</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
        @media screen 

  
        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
        }
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }

         /* Set display to none for image*/
    #image {
      display: none;
    }
       #image1 {
      display: none;
    }

           #image2 {
      display: none;
    }

  #image3 {
      display: none;
    }

   #image4 {
      display: none;
    }

    #image5 {
      display: none;
    }
    #image6 {
      display: none;
    }
    #image7 {
      display: none;
    }
    #footer { 
   text-align: center;
   vertical-align: middle;
  background-color: #e4f5f5; 

  position:fixed;
  bottom:0;
  left:0;
  right:0; 
   margin: auto 

}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


    </style>
</head>
  
@yield('content')
     
</body>
</html>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function show() {

/* Access image by id and change
the display property to block*/
document.getElementById('image')
    .style.display = "block";

document.getElementById('btnID')
    .style.display = "none";

var element = document.getElementById("btnID1");

element.scrollIntoView({behavior: "smooth"});
}

  function show1() {

/* Access image by id and change
the display property to block*/
document.getElementById('image1')
    .style.display = "block";

document.getElementById('btnID1')
    .style.display = "none";

var element = document.getElementById("btnID2");

element.scrollIntoView({behavior: "smooth"});
}

  function show2() {

/* Access image by id and change
the display property to block*/
document.getElementById('image2')
    .style.display = "block";

document.getElementById('btnID2')
    .style.display = "none";

var element = document.getElementById("image2");

element.scrollIntoView({behavior: "smooth"});
}

function show_b() {

/* Access image by id and change
the display property to block*/
document.getElementById('blank')
    .style.display = "block";

document.getElementById('btnIDb')
    .style.display = "none";

var element = document.getElementById("blank");

element.scrollIntoView({behavior: "smooth"});
}

function show3() {

/* Access image by id and change
the display property to block*/
document.getElementById('image3')
    .style.display = "block";

document.getElementById('btnID3')
    .style.display = "none";

document.getElementById('blank')
    .style.display = "none";

var element = document.getElementById("btnID4");

element.scrollIntoView({behavior: "smooth"});
}

function show4() {

/* Access image by id and change
the display property to block*/
document.getElementById('image4')
    .style.display = "block";

document.getElementById('btnID4')
    .style.display = "none";

var element = document.getElementById("image4");

element.scrollIntoView({behavior: "smooth"});
}

function show5() {

/* Access image by id and change
the display property to block*/
document.getElementById('image5')
    .style.display = "block";

document.getElementById('btnID5')
    .style.display = "none";


element.scrollIntoView({behavior: "smooth"});
}


function show6() {

/* Access image by id and change
the display property to block*/
document.getElementById('image6')
    .style.display = "block";

document.getElementById('btnID6')
    .style.display = "none";

document.getElementById('blank')
    .style.display = "none";

var element = document.getElementById("btnID7");

element.scrollIntoView({behavior: "smooth"});
}

  function show7() {

/* Access image by id and change
the display property to block*/
document.getElementById('image7')
    .style.display = "block";

document.getElementById('btnID7')
    .style.display = "none";

var element = document.getElementById("image7");

element.scrollIntoView({behavior: "smooth"});
}

function refreshPage(){
window.location.reload();
} 

</script>


