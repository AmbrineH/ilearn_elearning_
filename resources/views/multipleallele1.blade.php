@section('content')
<header>
<div> @extends('layout') </div>

@include ('navbar')

</header>
<body>
<body>

<div class="container">
  <h1 align ="center" > <b> Deviation from Mendel's Law: Multiple Alleles </b></h1>
  
  
<div class="container">
<body>

<div class="container">
  <h1 align ="center" > <b> Example 1: AA X BB </b></h1>
  
  <div class="row">
    <div class="col-md-5 col-sm-5 col-xs-5">
      <div class="thumbnail">
          <img src="img/aablood.png" alt="Lights" style="width:100%">
      </div>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">
          <img src="img/cross.jpg" alt="Lights" style="width:100%; ">
    </div>
    <div class="col-md-5 col-sm-5 col-xs-5">
      <div class="thumbnail">
          <img src="img/bbblood.png" alt="Lights" style="width:100%">
      </div>
    </div>
  </div>
</div>
<div class="container">


<div class= "col-md-12 col-sm-12 col-xs-12" align="center">

  <button type="button"  class="btn btn-light btn-lg btn-block"
      onclick="show3()" id="btnID3">
    Click to see the <b> "Alleles" </b>
  </button>

</div>
</div>
<div class="container">

  <div id ="image3" class="row">
  <div  class="row row d-flex justify-content-between">
    <div class="col-md-5 col-sm-5 col-xs-5">
      <div>
          <img src="img/a_allele.png" alt="Lights" style="width:100%">

      </div>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">
    </div>
    <div class="col-md-5 col-sm-5 col-xs-5">
      <div >
          <img src="img/b_allele.png" alt="Lights" style="width:100%">
      </div>
    </div>
</div>

<div  class= "col-md-12 col-sm-12 col-xs-12" align="center">

<button type="button"  class="btn btn-light btn-lg btn-block"
      onclick="show4()" id="btnID4">
    Click to see the <b> "F1 Generation" </b>
</button>

</div>
<div class="container">
  <div id ="image4" class="row align-items-center" >
    <div class="row">
    <div class="col-md-3 col-sm-3 col-xs-3 " >

      <button type="button"   class="btn btn-outline-dark">
     <b> F1 Gen </b>
  </button>
      <div >

      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
            <div >
          <img src="img/abblood.png" alt="Lights" style="width:100%">

      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3">
      <div >
      </div>
    </div>
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
            <form action="law_ind_assortment.php">
                <input type="submit" class="btn btn-light" value="Previous" />
            </form>    </div>
    


    <div class="col-md-4 col-sm-4 col-xs-4 " style="text-align:center" >
          <button type="button"  class="btn btn-light"
              onClick="refreshPage()">
              Start over </b>
          </button>        
    </div>


    <div class="col-md-4 col-sm-4 col-xs-4 " style="text-align:center" >
        <form action="example2_multiple_alleles.php">
                <input type="submit" class="btn btn-light" value="Example 2" />
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





