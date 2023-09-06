<div> @extends('layout') </div>

@include ('navbar')

</head>
        <!-- Services-->
        <section class="page-section" style="padding-top: 60px;" >
            <div class="container">
            <div class="row">

            <div class="col-md-2 col-sm-2 col-xs-2" style="text-align:center; color: grey; padding-top: 60px;">
    
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6" style="text-align:center; padding-top: 10px; color: grey">
                    <h3>Deviations from Mendels Laws</h3>
                    <button id="myBtn">What are they?</button>

            </div>
                                               <!-- The Modal -->
                                              <div id="myModal" class="modal">

                                                <!-- Modal content -->
                                                <div class="modal-content">
                                                  <span class="close">&times;</span>
                                                  <p> <h3> What are Deviations from Mendel's Laws? </h3> 
                                                          <ul>
                                                              <li> These are types of inheritance where the laws of mendel do not apply</li>
                                                              <li> THese include 
                                                          <ol> 
                                                          <li> Incomplete dominance </li>
                                                          <li> Multiple alleles </li>
                                                          <li> Co-dominance </li>
                                                         etc 

                                                          </ol>
                                                          </ul>
                                                      </p>
                                                </div>

                                              </div>
        
            <div class="col-md-2 col-sm-2 col-xs-2" style=" text-align: justify; vertical-align: middle;">
                    <h2 class="section-heading "><img src="img/nonmendel.jpg" alt="Mendel"  style="width:100%"; > </h2>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3" style=" text-align: justify;">
            </div>

        </div>
                <div class="row" style=" text-align: justify; ">
                    
                        <div class="col-md-4 col-sm-4 col-xs-4" style=" text-align: justify; outline-style: double;">
                        <h4 class="my-3">Incomplete Dominance</h4>
                        <p class="text-muted"> A form of gene interaction where in both the alleles of a gene at any locus are expressed partially. This results in an intermediate phenotype different from both parents.</p>

                        <a href="{{ route('incompletedominance') }}">
                        Interactive Example
                        </a>
                    </div> 
                    <div class="col-md-4 col-sm-4 col-xs-4" style=" text-align: justify; outline-style: double;">
                    <h4 class="my-3">Co-dominance </h4>
                        <p class="text-muted"> Both the alleles of a gene in a heterozygote are fully expressed resulting in a phenotype that contains both traits.</p>

                    <a href="{{ route('codominance') }}">
                      Interactive Example
                    </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4" style=" text-align: justify; outline-style: double;">

                        <h4 class="my-3">Multiple Alleles</h4>
                        <p class="text-muted">More than just the typical two alleles that usually code for a certain characteristic in a species.</p>
                        

                        <a href="{{ route('multipleallele1') }}"> <p> Interactive Example  </p></a>
                        <a href="{{ route('multipleallele2') }}"> <p> Interactive Example  </p></a>
                        <a href="{{ route('multipleallele3') }}"> <p> Interactive Example </p></a>
                    </div>
                </div>

                          <div class="row" style=" text-align: justify; ">
                    
                        <div class="col-md-4 col-sm-4 col-xs-4" style=" text-align: justify; outline-style: double;">
                        <h4 class="my-3">Pleitropic Genes</h4>
                        <p class="text-muted"> A pleiotropic gene is a single gene that controls more than one trait.</p>

                        <a href="{{ route('pleitropic') }}">
                        <p> Interractive Example </p>
                        </a>

                    </div> 
                    <div class="col-md-4 col-sm-4 col-xs-4" style=" text-align: justify; outline-style: double;">
                    <h4 class="my-3"> </h4>
                        <p class="text-muted"> </p>

                    <a href="">
                    </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4" style=" text-align: justify; outline-style: double;">
                        <h4 class="my-3"></h4>
                        <p class="text-muted"></p>

                        <a href=""> <p>  </p></a>

                </div>
            </div>
        </section>
    </div>
    </body>
</html>


