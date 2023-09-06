@section('content')
<header>
<div> @extends('layout') </div>

@include ('navbar')

</header>

<body>

<div class="container">
  <h1 align ="center" > <b> Pleiotropic Genes </b></h1>
</div>
<div class="container">


<div class= "col-md-12 col-sm-12 col-xs-12" align="center">

  <button type="button"  class="btn btn-light btn-lg btn-block"
      onclick="show()" id="btnID">
    Click to see an example
  </button>

</div>
</div>
<div class="container">

  <div id ="image" class="row">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="thumbnail">
          <img src="img/marfan.gif" alt="dominant" style="width:100%">

      </div>
    </div>

  </div>


<div class=  "col-md-12 col-sm-12 col-xs-12" align="center">

<button type="button"  class="btn btn-light btn-lg btn-block"
      onclick="show7()" id="btnID7">
    Click to visualize <b> its effects</b>
</button>
</div>

<div class="container">
  <div id ="image7" class="row align-items-center" >

    <div class="col-md-12 col-sm-12 col-xs-12">
            <div>
          <img src="img/marfans_syndrome.gif" alt="Lights" style="width:100%">

      </div>
    </div>


<br>
<br>
  <div class="container">
    <hr> 
    <hr>
    <hr>
  <div class="row">

    <div class="col-md-4 col-sm-4 col-xs-4" style="text-align:center" >
            <form action="example2_multiple_alleles.php">
                <input type="submit" class="btn btn-light" value="Previous" />
            </form>    </div>
    

    <div class="col-md-4 col-sm-4 col-xs-4 " style="text-align:center" >
          <button type="button"  class="btn btn-light"
              onClick="refreshPage()">
              Start over </b>
          </button>        
    </div>


    <div class="col-md-4 col-sm-4 col-xs-4 " style="text-align:center" >
        <form action="incomplete_dom.php">
                <input type="submit" class="btn btn-light" value="Next" />
        </form>    
    </div>      
    </div>
  </div>

  </div>





<!-- php artisan serve --host 192.168.29.62 --port 80 -->


