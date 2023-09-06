@section('content')
<header>
<div> @extends('layout') </div>

@include ('navbar')

</header>

<body>

<div class="container">
  <h1 align ="center" > <b> Deviation from Mendel's Law: Incomplete Dominance </b></h1>
  
  <div class="row">
    <div class="col-md-5 col-sm-5 col-xs-5">
      <div class="thumbnail">
          <img src="img/snapdragon_red.png" alt="Lights" style="width:100%">

      </div>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">
          <img src="img/cross.jpg" alt="Lights" style="width:100%; ">
    </div>
    <div class="col-md-5 col-sm-5 col-xs-5">
      <div class="thumbnail">
          <img src="img/snapdragon_white.png" alt="Lights" style="width:100%">
      </div>
    </div>
  </div>
</div>
<div class="container" >

<div  "col-md-12 col-sm-12 col-xs-12" align="center">

  <button type="button"  class="btn btn-light btn-lg btn-block"
      onclick="show()" id="btnID">
    Click to see the <b> "Alleles" </b>
  </button>

</div>
</div>
<div class="container" id ="image">

  <div  class="row">
    <div class="col-md-5 col-sm-5 col-xs-5">
      <div >
          <img src="img/res_allele_snapdragon.png" alt="Lights" style="width:100%">

      </div>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">
    </div>
    <div class="col-md-5 col-sm-5 col-xs-5">
      <div >
          <img src="img/dom_allele_snapdragon.png" alt="Lights" style="width:100%">
      </div>
    </div>
  </div>
<div class = "col-md-12 col-sm-12 col-xs-12" align="center">

<button type="button"  class="btn btn-light btn-lg btn-block"
      onclick="show1()" id="btnID1">
    Click to see the <b> "F1 Generation" </b>
</button>

</div>
<div class="container" id ="image1">
  <div  class="row" >
    <div class="col-md-3 col-sm-3 col-xs-3 " >
      <button type="button"   class="btn btn-outline-dark">
     <b> F1 Gen </b>
  </button>
      <div>
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
            <div >
          <img src="img/snapdragon_pink.png" alt="Lights" style="width:100%">

      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3">
      <div >
      </div>
    </div>
</div>

<div id="btnID2" >
  <div class="container">
  <div class="row">  
   <hr> 
    <hr>
    <hr>
    <div class="col-md-4 col-sm-4 col-xs-4" style="text-align:center" >
        <hr> 
    <hr>
    <hr>
            <form action="law_ind_assortment.php">
                <input type="submit" class="btn btn-light" value="Previous" />
            </form>    
    </div>
    
    <div class="col-md-4 col-sm-4 col-xs-4 " style="text-align:center" >
        <hr> 
    <hr>
    <hr>
          <button type="button"  class="btn btn-light"
              onClick="refreshPage()">
              Start over </b>
          </button>        
    </div>
    <div class="col-md-4 col-sm-4 col-xs-4 " style="text-align:center" >
        <hr> 
    <hr>
    <hr>
        <form action="law_codominance.php">
                <input type="submit" class="btn btn-light" value="Next" />
        </form>    
    </div>      
    </div>
  </div>


</div>



    </div>






  </div>

</div>
  </div>

</div>

  </div>
</div>
          </div>
      </div>
    </div>
  </div>
</div>

</body>




