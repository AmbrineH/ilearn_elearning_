@section('content')
<header>
<div> @extends('layout') </div>

@include ('navbar')

</header>

<body>

<div class="container">
  <h1 align ="center" > <b> Deviation from Mendel's Law: Co-dominance </b></h1>
  
  <div class="row">
    <div class="col-md-5 col-sm-5 col-xs-5">
      <div class="thumbnail">
          <img src="img/shorthorn_red.png" alt="Lights" style="width:100%">
      </div>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">
          <img src="img/cross.jpg" alt="" style="width:100%; ">
    </div>
    <div class="col-md-5 col-sm-5 col-xs-5">
      <div class="thumbnail">
          <img src="img/shorthorn_white.png" alt="Lights" style="width:100%">
      </div>
    </div>
  </div>
</div>
<div class="container">


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
          <img src="img/res_allele_shorthorn.png" alt="Lights" style="width:100%">

      </div>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">
    </div>
    <div class="col-md-5 col-sm-5 col-xs-5">
      <div >
          <img src="img/dom_allele_shorthorn.png" alt="Lights" style="width:100%">
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
          <img src="img/shorthorn_roan.png" alt="Lights" style="width:100%">

      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3">
      <div >
      </div>
    </div>
</div>

<div id="btnID2">
  <div class="container">
    <br>
    <br>
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-4" style="text-align:center" >
            <form action="incomplete_dom.php">
                <input type="submit" class="btn btn-light" value="Previous" />
            </form>    
    </div>
    
    <div class="col-md-4 col-sm-4 col-xs-4 " style="text-align:center" >
          <button type="button"  class="btn btn-light"
              onClick="refreshPage()">
              Start over </b>
          </button>        
    </div>
    <div class="col-md-4 col-sm-4 col-xs-4 " style="text-align:center" >
        <form action="multiple_alleles.php">
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



