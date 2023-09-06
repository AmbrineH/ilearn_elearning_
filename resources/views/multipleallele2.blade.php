@section('content')
<header>
<div> @extends('layout') </div>

@include ('navbar')

</header>
<body>

<!DOCTYPE html>
<html lang="en">

<body>

<div class="container">
  <h1 align ="center" > <b> Multiple Alleles: Example 2</b></h1>
  
  <div class="row">
    <div class="col-md-5 col-sm-5 col-xs-5">
      <div class="thumbnail">
          <img src="img/aoblood.png" alt="Lights" style="width:100%">

      </div>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">
          <img src="img/cross.jpg" alt="Lights" style="width:100%; ">
    </div>
    <div class="col-md-5 col-sm-5 col-xs-5">
      <div class="thumbnail">
          <img src="img/boblood.png" alt="Lights" style="width:100%">
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
<div class="container">

  <div id ="image" class="row">
  <div  class="row row d-flex justify-content-between">

    <div class="col-md-5 col-sm-5 col-xs-5">
      <div >
          <img src="img/ao_alleles.png" alt="Lights" style="width:100%">

      </div>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">
    </div>
    <div class="col-md-5 col-sm-5 col-xs-5">
      <div >
          <img src="img/bo_alleles.png" alt="Lights" style="width:100%">
      </div>
    </div>
</div>



 <!-- f3 generation  -->
<button type="button"  class="btn btn-light btn-lg btn-block"
      onclick="show2()" id="btnID2">
    Click to see <b> "the punnet square" </b>
</button>

</div>
<div id ="image2" class="container">

  <div  class="row align-items-center" >

<div  class="row align-items-center " style="text-align: center;">
  <h3> <b> Punnet Square </b> </h3>
</div>

<div id ="blank" class="container">

  <div  class="row align-items-center" >
    <div class="col-md-1 col-sm-1 col-xs-1">
            <div>
      </div>
    </div>

    <div class="col-md-10 col-sm-10 col-xs-10">
            <div>
          <img src="img/punnetblood.gif" alt="Lights" style="width:100%">
      </div>
    </div>
      <div class="col-md-1 col-sm-1 col-xs-1">
            <div>
      </div>
    </div>
  </div>

  <button type="button"  class="btn btn-light btn-lg btn-block"
      onclick="show3()" id="btnID3">
    Click to fill the <b> "Punnet Square" </b>
</button>


</div>

<div id ="image3" class="container">

  <div class="row align-items-center" >
    <div class="col-md-3 col-sm-3 col-xs-3 " >
      <button type="button"   class="btn btn-outline-dark">
     <b> F2 Gen </b>
  </button>
    </div>
  </div>
  <div  class="row align-items-center" >

    <div class="col-md-12 col-sm-12 col-xs-12">
            <div>
          <img src="img/punnetblood_filled.gif" alt="Lights" style="width:100%">
      </div>
    </div>


<button type="button"  class="btn btn-light btn-lg btn-block"
      onclick="show4()" id="btnID4">
    Click to see the <b> "Ratios" </b>
</button>

<div class="container">
  <div id ="image4" class="row align-items-center">
    <div class ="row">
      <div class="col-md-2 col-sm-3 col-xs-2 " >
      <button type="button"   class="btn btn-outline-dark">
     <b> Phenotypic & Genotypic </b>
    </button>
  </div>

    <div class="col-md-10 col-sm-10 col-xs-10">
        <div>
          <img src="img/phen_gen_blood.gif" alt="Lights" style="width:100%">
      </div>
    </div>

    <br>
    <br>
    </div>

  <div class="container">

  <div class="row">


    <div class="col-md-4 col-sm-4 col-xs-4" style="text-align:center" >
            <form action="example1_multiple_alleles.php">
                <input type="submit" class="btn btn-light" value="Previous" />
            </form>    </div>
    


    <div class="col-md-4 col-sm-4 col-xs-4 " style="text-align:center" >
          <button type="button"  class="btn btn-light"
              onClick="refreshPage()">
              Start over </b>
          </button>        
    </div>


    <div class="col-md-4 col-sm-4 col-xs-4 " style="text-align:center" >
        <form action="law_dominance.php">
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

</body>




