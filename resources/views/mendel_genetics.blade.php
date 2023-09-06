<div> @extends('layout') </div>

@include ('navbar')

</head>
        <!-- Services-->
        <section class="page-section" style="padding-top: 60px;" >
            <div class="container">
            <div class="row">

            <div class="col-md-2 col-sm-2 col-xs-2" style="text-align:center; color: grey; padding-top: 60px;">
    
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6" style="text-align:center; padding-top: 40px; color: grey">
                    <h3> Mendel and his Laws of Heredity</h3>
                     <button id="myBtn">Why is he famous?</button>
            </div>

                                              <!-- The Modal -->
                                              <div id="myModal" class="modal">

                                                <!-- Modal content -->
                                                <div class="modal-content">
                                                  <span class="close">&times;</span>
                                                  <p> <h3> Who was Gregor John Mendel? </h3> 
                                                    <h4>Father of Genetics </h4>
                                                      <b> Born: 1822; Died: 1884</b>
                                                          <ul>
                                                              <li> Worked on pea plants to discover the fundamental laws of inheritance.</li>
                                                              <li> He was the first one to find out that : 
                                                          <ol> 
                                                          <li> Genes are found within individuals in pairs </li>
                                                          <li> Genes are inherited as distinct units, one from each parent. </li>
                                                          <li> He gave mathematical patterns of inheritance from one generation to the next. </li>
                                                          </ol>
                                                          </ul>
                                                      </p>
                                                </div>

                                              </div>
        
            <div class="col-md-2 col-sm-2 col-xs-2" style=" text-align: justify;">
                    <h2 class="section-heading "><img src="img/mendel.jpg" alt="Mendel"  style="width:100%"; > </h2>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3" style=" text-align: justify;">
            </div>

        </div>
                <div class="row" style=" text-align: justify; ">
                    
                        <div class="col-md-4 col-sm-4 col-xs-4" style=" text-align: justify; outline-style: double;">
                        <h4 class="my-3">Law of dominance</h4>
                        <p class="text-muted"> In a heterozygote, one allele conceals the presence of another allele for the same characteristic.</p>
                        <a href="{{ route('lawdominance') }}">
                          Interactive Example
                        </a>
                    </div> 
                    <div class="col-md-4 col-sm-4 col-xs-4" style=" text-align: justify; outline-style: double;">
                      <h4 class="my-3">Law of segregation </h4>
                        <p class="text-muted">All individuals possess two alleles for a trail out of which only one allele is passed on to the offspring.</p>
                    <a href="{{ route('lawsegregation') }}">
                        Interactive Example
                        
                    </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4" style=" text-align: justify; outline-style: double;">

                        <h4 class="my-3">Law of independent assortment</h4>
                        <p class="text-muted">The innheritance of any pair of genes from the parent is independent of  the inheritance of any other pair.</p>
                    <a href="{{ route('lawassortment') }}">
                        Interactive Example

                    </a>
                    </div>
                </div>
            </div>
        </section>
    </div>


