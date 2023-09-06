@section('content')
<header>
<div> @extends('layout') </div>

@include ('navbar')

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class = "container">
<div class = "row" >
<div class="col-md-5 col-sm-5 col-xs-10">
<a href="" style ="font-weight:normal;"> 
  <div class="card">
    <img src="img/genetics.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Genetics</h5>
      <p class="card-text">Click here to access resources for Genetics which is the study of variation and heridity</p>
      </br>
      <a href="{{ route ('index_genetics')}}" > <span style ="font-weight:normal; font-size: 14px" class="badge badge-info badge-pill"> Interractive Lectures </span> </a>
      <a href="{{ route ('index_genetics_video')}}" > <span style ="font-weight:normal; font-size: 14px" class="badge badge-info badge-pill"> Video Lectures </span> </a>
    </div>
  </div>
</div>
</br>

  <div class="col-md-5 col-sm-5 col-xs-10">

  <a href="{{ route ('lpm')}}"> 
  <div class="card">

    <img src="img/LPM.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Animal Husbandry</h5>
      <p class="card-text">Learn more about the science of animal husbandry iuncluding livestock production and management. </p>
      </br>
      <a href="{{ route ('index_genetics')}}" > <span style ="font-weight:normal; font-size: 14px;" class="badge badge-info badge-pill"> Interractive Lectures </span> </a>
      <a href="{{ route ('index_genetics_video')}}" > <span style ="font-weight:normal; font-size: 14px" class="badge badge-info badge-pill"> Video Lectures </span> </a>
   
    </div>
  </div>
</div>
