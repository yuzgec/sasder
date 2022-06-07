@extends('frontend.layout.app')
@section('title', 'İletişim | '.config('app.name'))
@section('content')
    @include('frontend.layout.header2')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container container-xl-custom">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark">İletişim</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="active">İletişim</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container container-xl-custom py-4">

        <div class="row mb-2">
            <div class="col">

                <h2 class="font-weight-bold text-7 mt-2 mb-0">Bizimle İletişime Geçiniz.</h2>
                <p class="mb-4">Aşağıdaki formu kullanarak bize hızlı bir şekilde e-mail gönderebilirsiniz!</p>

                <form class="contact-form-recaptcha-v3" action="php/contact-form-recaptcha-v3.php" method="POST">

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2">Adınız Soyadınız</label>
                            <input type="text" maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2">Email Adresiniz</label>
                            <input type="email" maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2">Konu</label>
                            <input type="text"  maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2">Mesajınız</label>
                            <textarea maxlength="5000"  rows="5" class="form-control text-3 h-auto py-2" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col d-flex align-items-center">
                            <input type="checkbox" id="onay" name="onay" value="0">
                            <label for="onay" class="text-1">&nbsp;&nbsp; KVKK <a data-bs-toggle="modal" data-bs-target="#largeModal" style="">şartlarını</a> okudum kabul ederim.</label><br>
                            <button type="submit" class="btn btn-primary btn-modern" style="margin-left:15px">Gönder</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card card-border card-border-bottom bg-color-light">
                    <div class="card-body">
                        <h4 class="card-title mb-1 text-4 font-weight-bold">Adres</h4>
                        <p class="card-text">Merkez Efendi Mah. Mevlana Cad. Aktaş Blok No:108 D:58 Zeytinburnu/İstanbul</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card card-border card-border-bottom bg-color-light">
                    <div class="card-body">
                        <h4 class="card-title mb-1 text-4 font-weight-bold">Telefon  - Faks</h4>
                        <p class="card-text"><br>0212 543 93 50/51 - 0212 543 93 50/51<br></p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card card-border card-border-bottom bg-color-light">
                    <div class="card-body">
                        <h4 class="card-title mb-1 text-4 font-weight-bold">E-Posta</h4>
                        <p class="card-text"><br>info@sasder.org<br></p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">{{ $Cookies->title }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    {!! $Cookies->desc !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>

@endsection
