@extends('layouts.'.$layout)

@section('title')
faq
@endsection

@section('content')
<!--body content wrap start-->

<!--hero section start-->
<section class="hero-section ptb-100 background-img" <div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-9 col-lg-7">
            <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                <h1 class="text-white mb-0">FAQ Page</h1>
                <div class="custom-breadcrumb">
                    <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                        <li class="list-inline-item breadcrumb-item">Pages</a></li>
                        <li class="list-inline-item breadcrumb-item active">Faq</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--hero section end-->

<!--promo section start-->
<section class="promo-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-9">
                <div class="section-heading mb-5">
                    <h2>Frequently Asked Questions</h2>

                </div>
            </div>
        </div>
        <!--pricing faq start-->
        <div class="row">
            @foreach ($items as $item)
            <div class="col-lg-6">
                <div id="accordion{{$item->id}}" class="accordion accordion-faq">
                    <!-- Accordion card 1 -->
                    <div class="card">
                        <div class="card-header py-4" id="heading{{$item->id}}" data-toggle="collapse" role="button"
                            data-target="#collapse{{$item->id}}" aria-expanded="false"
                            aria-controls="collapse{{$item->id}}">
                            <h6 class="mb-0"><span class="ti-receipt mr-3"></span> {{ $item->judul }}</h6>
                        </div>
                        <div id="collapse{{$item->id}}" class="collapse" aria-labelledby="heading{{$item->id}}"
                            data-parent="#accordion{{$item->id}}">
                            <div class="card-body">
                                <p>{{ $item->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <!--pricing faq end-->
    </div>
</section>
<!--promo section end-->


</div>
<!--body content wrap end-->
</div>
<!--overflow block end-->
@endsection