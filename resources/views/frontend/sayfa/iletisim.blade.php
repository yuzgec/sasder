@extends('frontend.layout.app')
@section('title', 'İletişim | '.config('app.name'))
@section('customCSS')
    <style>
        .animation-ctn{
            text-align:center;
            margin-top:25px;
        }
        @-webkit-keyframes checkmark {
            0% {
                stroke-dashoffset: 100px
            }

            100% {
                stroke-dashoffset: 200px
            }
        }
        @-ms-keyframes checkmark {
            0% {
                stroke-dashoffset: 100px
            }

            100% {
                stroke-dashoffset: 200px
            }
        }
        @keyframes checkmark {
            0% {
                stroke-dashoffset: 100px
            }

            100% {
                stroke-dashoffset: 0px
            }
        }
        @-webkit-keyframes checkmark-circle {
            0% {
                stroke-dashoffset: 480px

            }

            100% {
                stroke-dashoffset: 960px;

            }
        }
        @-ms-keyframes checkmark-circle {
            0% {
                stroke-dashoffset: 240px
            }

            100% {
                stroke-dashoffset: 480px
            }
        }
        @keyframes checkmark-circle {
            0% {
                stroke-dashoffset: 480px
            }

            100% {
                stroke-dashoffset: 960px
            }
        }
        @keyframes colored-circle {
            0% {
                opacity:0
            }

            100% {
                opacity:100
            }
        }
        .inlinesvg .svg svg {
            display: inline
        }
        .icon--order-success svg polyline {
            -webkit-animation: checkmark 0.25s ease-in-out 0.7s backwards;
            animation: checkmark 0.25s ease-in-out 0.7s backwards
        }
        .icon--order-success svg circle {
            -webkit-animation: checkmark-circle 0.6s ease-in-out backwards;
            animation: checkmark-circle 0.6s ease-in-out backwards;
        }
        .icon--order-success svg circle#colored {
            -webkit-animation: colored-circle 0.6s ease-in-out 0.7s backwards;
            animation: colored-circle 0.6s ease-in-out 0.7s backwards;
        }
    </style>
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{ config('settings.facebookPixel') }}');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"  src="https://www.facebook.com/tr?id={{ config('settings.facebookPixel') }}&ev=PageView&noscript=1"/></noscript>

    <script>fbq('track', 'Purchase', {value: 1, currency: 'TRY'});</script>
@endsection
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
            @if(request('durum')  == 'basarili')
            <div class="col-12 offset-md-3 col-md-6">
                <div class="card">
                    <div class="animation-ctn">
                        <div class="icon icon--order-success svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="154px" height="154px">
                                <g fill="none" stroke="#00509d" stroke-width="2">
                                    <circle cx="77" cy="77" r="72" style="stroke-dasharray:480px, 480px; stroke-dashoffset: 960px;"></circle>
                                    <circle id="colored" fill="#00509d" cx="77" cy="77" r="72" style="stroke-dasharray:480px, 480px; stroke-dashoffset: 960px;"></circle>
                                    <polyline class="st0" stroke="#fff" stroke-width="10" points="43.5,77.8 63.7,97.9 112.2,49.4 " style="stroke-dasharray:100px, 100px; stroke-dashoffset: 200px;"/>
                                </g>
                            </svg>
                        </div>
                        <h2 class="font-weight-bold">Mesajınız bize başarıyla ulaşmıştır.</h2>
                        <p>Mesajınız ile ilgili olarak sizlere kısa süre içerisinde dönüş yapılacaktır.</p>
                        <a href="{{ route('home') }}" title="Anasayfa" class="btn btn-xl btn-outline btn-rounded btn-primary d-none d-sm-block btn-arrow-effect-1 text-1 ms-3 font-weight-bold text-uppercase">Anasayfa</a>
                    </div>
                </div>
            </div>
            @else
            <div class="col-12">
                <h2 class="font-weight-bold text-7 mt-2 mb-0">Bizimle İletişime Geçiniz.</h2>
                <p class="mb-4">Aşağıdaki formu kullanarak bize hızlı bir şekilde e-mail gönderebilirsiniz!</p>
                <form class="contact-form-recaptcha-v3" action="{{ route('form') }}" method="POST">
                    <input type="hidden" name="title" value="İletişim">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label class="form-label mb-1 text-2">Adınız Soyadınız</label>
                            <input value="{{old('name')}}" type="text" class="form-control text-3 h-auto py-2  @if($errors->has('name')) is-invalid @endif" name="name">
                            @if($errors->has('name'))
                                <div class="invalid-feedback">{{$errors->first('name')}}</div>
                            @endif
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label class="form-label mb-1 text-2">Telefon Numaranız</label>
                            <input value="{{old('phone')}}"  type="text" class="form-control text-3 h-auto py-2  @if($errors->has('phone')) is-invalid @endif" name="phone">
                            @if($errors->has('phone'))
                                <div class="invalid-feedback">{{$errors->first('phone')}}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label class="form-label mb-1 text-2">Email Adresiniz</label>
                            <input value="{{old('email')}}" type="text" class="form-control text-3 h-auto py-2  @if($errors->has('email')) is-invalid @endif" name="email">
                            @if($errors->has('email'))
                                <div class="invalid-feedback">{{$errors->first('email')}}</div>
                            @endif
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label class="form-label mb-1 text-2">Konu</label>
                            <input value="{{old('subject')}}" type="text" class="form-control text-3 h-auto py-2  @if($errors->has('subject')) is-invalid @endif" name="subject">
                            @if($errors->has('subject'))
                                <div class="invalid-feedback">{{$errors->first('subject')}}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2">Mesajınız</label>
                            <textarea maxlength="5000"  rows="5" class="form-control text-3 h-auto py-2" name="message">{{old('message')}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col d-flex align-items-center">
                            <input type="checkbox" id="onay" name="onay" required>
                            <label for="onay" class="text-1">K.V.K.K. <a data-bs-toggle="modal" data-bs-target="#largeModal" style="text-decoration:underline">şartlarını</a> okudum ve onaylıyorum.</label><br>
                            <button type="submit" class="btn btn-primary btn-modern" style="margin-left:15px">Gönder</button>
                        </div>
                    </div>
                </form>

            </div>
            @endif
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
@section('CustomJS')
    <script>
        $('input[type="checkbox"]').on('change', function(){
            this.value ^= 1;
        });
    </script>
@endsection
