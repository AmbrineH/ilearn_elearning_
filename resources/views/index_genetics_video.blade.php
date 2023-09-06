@section('content')
<header>
    @extends('layout')
@include ('navbar')
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<div class= "container">
</br>

<div class="container-fluid"><h3 style = "text-align: center;"> Browse Interractive Lessons</h3></div>

<div class="container">
  <div class="row">  
    <div class="col-12 col-sm-12 col-lg-12">
    <div class="p-3 mb-2 bg-primary text-white"> <h5 > Mendelian Genetics</h5> 

      <ul class="list-group" >
        <span class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style = "display: inline-block;">
          <div class="flex-column" >
          Mendel and His Contribution </div>
          <div class="image-parent">
          <a href="{{ route ('mendel_genetics')}}" > <span style ="font-weight:normal; font-size: 14px" class="badge badge-primary badge-pill"> Video Lectures</span> </a>

            </span>         
        </ul>

        <ul class="list-group" >
        <span class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style = "display: inline-block;">
          <div class="flex-column" >
          Mendel's Law of Dominance</div>
          <div class="image-parent">
          <a href="{{ route ('lawdominance')}}" > <span style ="font-weight:normal; font-size: 14px" class="badge badge-primary badge-pill"> Video Lectures</span> </a>

            </span>         
        </ul>

        <ul class="list-group" >
        <span class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style = "display: inline-block;">
          <div class="flex-column" >
          Mendel's Law of Segregation</div>
          <div class="image-parent">
          <a href="{{ route ('lawsegregation')}}" > <span style ="font-weight:normal; font-size: 14px" class="badge badge-primary badge-pill"> Video Lectures</span> </a>

            </span>         
        </ul>

        <ul class="list-group" >
        <span class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style = "display: inline-block;">
          <div class="flex-column" >
          Mendel's Law of Independent Assortment</div>
          <div class="image-parent">
          <a href="{{ route ('lawassortment')}}" > <span style ="font-weight:normal; font-size: 14px" class="badge badge-primary badge-pill"> Video Lectures</span> </a>

            </span>         
        </ul>

    </div>
    </div>

    <div class="col-12 col-sm-12 col-lg-12">
    </br>
    <div class="p-3 mb-2 bg-secondary text-white"> <h5 > Deviations from Mendel's Law</h5> 
      <ul class="list-group" >
        <span class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style = "display: inline-block;">
          <div class="flex-column" >
          Deviations from Mendel's Laws</div>
          <div class="image-parent">
          <a href="{{ route ('nonmendel_genetics')}}" > <span style ="font-weight:normal; font-size: 14px" class="badge badge-primary badge-pill"> Video Lectures</span> </a>

            </span>         
        </ul>
        <ul class="list-group" >
        <span class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style = "display: inline-block;">
          <div class="flex-column" >
          Incomplete Dominance</div>
          <div class="image-parent">
          <a href="{{ route ('incompletedominance')}}" > <span style ="font-weight:normal; font-size: 14px" class="badge badge-primary badge-pill"> Video Lectures</span> </a>

            </span>         
        </ul>
        <ul class="list-group" >
        <span class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style = "display: inline-block;">
          <div class="flex-column" >
          Co-Dominance</div>
          <div class="image-parent">
          <a href="{{ route ('codominance')}}" > <span style ="font-weight:normal; font-size: 14px" class="badge badge-primary badge-pill"> Video Lectures</span> </a>

            </span>         
        </ul>

        <ul class="list-group" >
        <span class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style = "display: inline-block;">
          <div class="flex-column" >
          Multiple Alleles (Example 1)</div>
          <div class="image-parent">
          <a href="{{ route ('multipleallele1')}}" > <span style ="font-weight:normal; font-size: 14px" class="badge badge-primary badge-pill"> Video Lectures</span> </a>

            </span>         
        </ul>

        <ul class="list-group" >
        <span class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style = "display: inline-block;">
          <div class="flex-column" >
          Multiple Alleles (Example 2)</div>
          <div class="image-parent">
          <a href="{{ route ('multipleallele2')}}" > <span style ="font-weight:normal; font-size: 14px" class="badge badge-primary badge-pill"> Video Lectures</span> </a>

            </span>         
        </ul>

        <ul class="list-group" >
        <span class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style = "display: inline-block;">
          <div class="flex-column" >
          Multiple Alleles (Example 3)</div>
          <div class="image-parent">
          <a href="{{ route ('multipleallele3')}}" > <span style ="font-weight:normal; font-size: 14px" class="badge badge-primary badge-pill"> Video Lectures</span> </a>

            </span>         
        </ul>
        <ul class="list-group" >
        <span class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style = "display: inline-block;">
          <div class="flex-column" >
          Pleitropic Genes (Example 3)</div>
          <div class="image-parent">
          <a href="{{ route ('pleitropic')}}" > <span style ="font-weight:normal; font-size: 14px" class="badge badge-primary badge-pill"> Video Lectures</span> </a>

            </span>         
        </ul>
    </div>
</div>
  </div>
</div>

