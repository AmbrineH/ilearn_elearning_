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

// Get the modal
var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}