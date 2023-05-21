@extends('layouts.user')

@section('title')
about
@endsection

@section('content')
<!--hero section start-->
<section class="hero-section ptb-100 background-img">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <h1 class="text-white mb-0">About Page</h1>
                    <div class="custom-breadcrumb">
                        <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                            <li class="list-inline-item breadcrumb-item">Pages</li>
                            <li class="list-inline-item breadcrumb-item active">About</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hero section end-->

<!--overflow block start-->
<div class="overflow-hidden">
    <!--about us section start-->
    <section id="about" class="about-us ptb-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7">
                    <div class="about-content-left section-heading">
                        <h2>ABOUT WISDOM EDUCATION
                        </h2>

                        <div class="single-feature mb-4 mt-5">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci a eveniet aliquid
                                impedit nihil distinctio rem vitae doloremque, ad alias laborum eum, neque voluptates
                                quas, hic soluta. Modi earum hic quos aliquam eaque nihil sequi, laudantium facilis
                                eligendi quas similique vel minus nesciunt cumque beatae soluta ab quasi dolore! Sequi,
                                earum. Impedit veritatis blanditiis obcaecati, aliquam unde nisi provident eius debitis
                                repellendus adipisci nulla earum soluta placeat excepturi? Eum, placeat, reprehenderit
                                molestias natus distinctio cum numquam iure, explicabo voluptate temporibus aut quasi!
                                Cum, itaque expedita maiores ullam assumenda nisi voluptas! Magnam dolor laboriosam
                                dignissimos pariatur recusandae in incidunt non saepe?
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content-right">
                        <img src="{{ asset('img/logo-sepatulola.png') }}" alt="about us" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->
</div>
<!--overflow block end-->
@endsection