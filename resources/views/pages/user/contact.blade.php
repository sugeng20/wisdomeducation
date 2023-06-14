@extends('layouts.user')

@section('title')
Kontak
@endsection

@section('content')
<!--body content wrap start-->
<!--hero section start-->
<section class="hero-section ptb-100 background-img">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <h1 class="text-white mb-0">Halaman Kontak</h1>
                    <div class="custom-breadcrumb">
                        <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                            <li class="list-inline-item breadcrumb-item">Halaman</li>
                            <li class="list-inline-item breadcrumb-item active">Kontak</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hero section end-->
<!--contact us section start-->
<section id="contact" class="contact-us  ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-3 message-box d-none">
                <div class="alert alert-danger"></div>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('img/kontak.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-7">
                <div class="section-heading">
                    <h3>Mari Berkolaborasi</h3>
                    <p>
                        Jika Anda memiliki pertanyaan, tim support kami akan dengan senang hati membantu Anda. Anda
                        dapat menghubungi kami
                        dengan mengisi form di bawah ini.
                    </p>
                </div>
                <div class="footer-address">
                    <h6><strong>Head Office</strong></h6>
                    <p>
                        Jl. Rawamangun Muka, RT.11/RW.14, Rawamangun, Pulo Gadung, Kota Jakarta Timur, Daerah Khusus
                        Ibukota Jakarta 13220
                    </p>
                    <ul>
                        <li><span>Phone: (021) 4898486</span></li>
                        <li><span>Email : <a href="mailto:humas@unj.ac.id">humas@unj.ac.id</a></span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12 text-center">
                <iframe
                    src="https://docs.google.com/forms/d/e/1FAIpQLSdEDlMLgkYZU_rrZ141lrdPP2-_pBMKsagJcvuME-kI1apbdQ/viewform?embedded=true"
                    width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                <p class="form-message"></p>
            </div>
        </div>
    </div>
</section>
<!--contact us section end-->
<!--body content wrap end-->
</div>
<!--overflow block end-->
@endsection