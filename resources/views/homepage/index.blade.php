@extends('layouts.master')

@section('content')

<div class="front px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">

    <h1 class="display">Explore Features</h1>
    <p class="leads">Our web application helps you to save time and be more productive in AI implementation.</p>
    <a class="btn btn-transparent" href="http://localhost:8000/register"> Join Now </a>
    <a class="btn btn-light" href="http://localhost:8000/questions"> Browse </a>
</div>

<div class="main-content-area">
        <!-- =-=-=-=-=-=-= How It Work  =-=-=-=-=-=-= -->
        <section class="custom-padding" id="how-it-work">
            <div class="container" id="mid">
            
                <!-- title-section -->
                <div class="main-heading text-center">
                
                    <h2>How  It Works </h2>
                    <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
                    </div>
                    <p>Cras varius purus in tempus porttitor ut dapibus efficitur sagittis cras vitae lacus metus nunc vulputate facilisis nisi
                        <br> eu lobortis erat consequat ut. Aliquam et justo ante. Nam a cursus velit</p>
                </div>

                <!-- End title-section -->
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-xs-12  center-responsive"> <img src="css/step1.png" class="img-responsive" alt="">
                        <h4><a href="http://localhost:8000/register">Create An Account</a></h4>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12 center-responsive get-arrow"> <img src="css/step2.png" class="img-responsive" alt="">
                        <h4><a href="http://localhost:8000/login">Post Your Question</a></h4>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12 center-responsive get-arrow"> <img src="css/step3.png" class="img-responsive" alt="">
                        <h4><a href="http://localhost:8000/questions"> Find Your Solution</a></h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end container -->
        </section>
        
        
    </div>

        
</div>
@endsection