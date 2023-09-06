@section('content')
<header>
<div> @extends('layout') </div>

@include ('navbar')

</header>
<body>

<div class="container">
  <h1 align ="center" > <b> Deviation from Mendel's Law: Multiple Alleles </b></h1>
  
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-4">
      <div class="thumbnail">
          <img src="img/aablood.png" alt="dominant" style="width:100%">

      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-4">
            <div class="thumbnail">
          <img src="img/bbblood.png" alt="Lights" style="width:100%; ">
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-4">
      <div class="thumbnail">
          <img src="img/ooblood.png" alt="recessive" style="width:100%">
      </div>
    </div>
  </div>
</div>
<div class="container">


<div class=  "col-md-12 col-sm-12 col-xs-12" align="center">

  <button type="button"  class="btn btn-light btn-lg btn-block"
      onclick="show()" id="btnID">
    Click to see the <b> "Alleles" </b>
  </button>

</div>
</div>
<div class="container">
  <div id ="image" class="row">
        <div  class="row row d-flex justify-content-between">
    <div class="col-md-4 col-sm-4 col-xs-4">
      <div >
          <img src="img/a_allele.png" alt="Lights" style="width:100%">
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-4">
        <img src="img/b_allele.png" alt="Lights" style="width:100%">

    </div>
    <div class="col-md-4 col-sm-4 col-xs-4">
      <div >
          <img src="img/o_allele.png" alt="Lights" style="width:100%">
      </div>
    </div>
</div>
<div  "col-md-12 col-sm-12 col-xs-12" align="center">

<button type="button"  class="btn btn-light btn-lg btn-block"
      onclick="show1()" id="btnID1">
    Click to see the <b> "Allele Combinations" </b>
</button>
<div class="container"> </div>

</div>
<div class="container">
  <div id ="image1" class="row align-items-center" >

    <div class="col-md-12 col-sm-12 col-xs-12 " id ="btnID2" >
    <hr> 
    <hr>
    <hr>
          <img src="img/all_alleles_blood.png" alt="f21" style="width:100%">
    <hr> 
    <hr>
    <hr>
    </div>


  <div class="container">
   <hr> 
    <hr>
    <hr>
  <div class="row">
    <hr> 
    <hr>
    <hr>

    <div class="col-md-4 col-sm-4 col-xs-4" style="text-align:center" >
            <form action="incomplete_dom.php">
                <input type="submit" class="btn btn-light" value="Previous" />
            </form>    </div>
    


    <div class="col-md-4 col-sm-4 col-xs-4 " style="text-align:center" >
          <button type="button"  class="btn btn-light"
              onClick="refreshPage()">
              Start over </b>
          </button>        
    </div>


    <div class="col-md-4 col-sm-4 col-xs-4 " style="text-align:center" >
        <form action="example1_multiple_alleles.php">
                <input type="submit" class="btn btn-light" value="Example 1" />
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
  </div>
</div>
</div>
</div>
  </div>

</div>

  </div>
</div>


</body>




