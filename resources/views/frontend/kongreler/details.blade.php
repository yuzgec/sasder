@extends('frontend.layout.app')
@section('title', $Detay->title. ' SASDER Ulusal Kongre | '.config('app.name'))
@section('content')
    @include('frontend.layout.header2')


    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container container-xl-custom">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark">{{ $Detay->title }}</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="/">Anasayfa</a></li>
                        <li><a href="{{route('kongrelerimiz')}}">Kongrelerimiz</a></li>
                        <li class="active">{{ $Detay->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container container-xl-custom py-4  mt-2 resimler"  >
        @include('frontend.layout.uyeol')
        <div class="row mt-3">
                <div class="col-md-{{ $Days->count() > 0 ? 8 : 12 }}">
                    {!! $Detay->desc !!}
                </div>

                <div class="col-lg-4">
                    @if($Detay->form == 1)
                        <h2 class="font-weight-bold text-7 mt-2 mb-0">KAYIT FORMU</h2>
                        <form class="contact-form-recaptcha-v3" action="{{ route('form') }}" method="POST">
                            <input type="hidden" name="title" value="Başvuru">
                            @csrf
                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-label mb-1 text-2">Adınız Soyadınız</label>
                                    <input type="text" maxlength="100" class="form-control text-3 h-auto py-2  @if($errors->has('name')) is-invalid @endif" name="name">
                                    @if($errors->has('name'))
                                        <div class="invalid-feedback">{{$errors->first('name')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-label mb-1 text-2">Email Adresiniz</label>
                                    <input type="email" maxlength="100" class="form-control text-3 h-auto py-2  @if($errors->has('email')) is-invalid @endif" name="email">
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">{{$errors->first('email')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-label mb-1 text-2">Telefon Numaranız</label>
                                    <input type="text"  maxlength="100" class="form-control text-3 h-auto py-2 @if($errors->has('phone')) is-invalid @endif"  name="phone">
                                    @if($errors->has('phone'))
                                        <div class="invalid-feedback">{{$errors->first('phone')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-label mb-1 text-2">Firma Kurum Adı</label>
                                    <input type="text"  maxlength="100" class="form-control text-3 h-auto py-2" name="company">
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

                     @else
                    <div class="tabs">
                        <ul class="nav nav-tabs">
                            @foreach($Days as $item)
                            <li class="nav-item">
                                <a class="nav-link @if ($loop->first) active @endif" href="#degistir{{ seo($item->id) }}" data-bs-toggle="tab">{{ $item->speaker_day }}</a>
                            </li>
                           @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach($Days as $item)

                            <div id="degistir{{ seo($item->id) }}" class="tab-pane @if ($loop->first) active @endif">

                               <table class="table table-bordered table-striped">
                                    <tbody>
                                    @foreach($Konusmacilar->where('speaker_day', $item->speaker_day) as $row)
                                    <tr>
                                        @if($Detay->id != 8 )
                                        <td>{{ $row->speaker_name }}</td>
                                        @endif
                                        <td class="justify-content-center">{{ $row->speaker_subject }}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endforeach

                        </div>

                    </div>
                     @endif
                </div>
                @if($Detay->form == 1)
                    <div class="col-md-12">
                    <div class="tabs tabs-bottom tabs-center tabs-simple">
                        <ul class="nav nav-tabs">
                            <li class="nav-item active">
                                <a class="nav-link active" href="#genel" data-bs-toggle="tab">Genel Bilgiler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#program" data-bs-toggle="tab">Bilimsel Program</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#kayit" data-bs-toggle="tab">Kayıt - Konaklama - Transfer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#banka" data-bs-toggle="tab">Banka Hesap Bilgileri</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="genel">
                                <div class="">
                                    {!! $Detay->tab1 !!}
                                 </div>
                            </div>
                            <div class="tab-pane" id="program">
                                <div class="">
                                    <iframe src="/9.pdf" width="100%" height="2400px"></iframe>
                                </div>
                            </div>
                            <div class="tab-pane" id="kayit">
                                <div class="">
                                    {!! $Detay->tab2 !!}
                                </div>
                            </div>
                            <div class="tab-pane" id="banka">
                                <div class="">
                                    {!! $Detay->tab3 !!}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endif
                <div class="col-md-12">
                    <div class="masonry-loader masonry-loader-showing">
                    <div class="masonry" data-plugin-masonry data-plugin-options="{'itemSelector': '.masonry-item'}" >

                        <div class="lightbox"
                             data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                            @foreach($Detay->getMedia('gallery') as $item)
                            <a class="masonry-item p-2" href="{{ $item->getUrl() }}">
                               <img src="{{ $item->getUrl() }}" alt="{{ $Detay->title }}" class="img-fluid">
                            </a>
                            @endforeach
                        </div>
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

        $(document).ready(function() {
            $("img").addClass("img-fluid");
            $("table").addClass("table table-hover table-striped table-bordered");
        })
    </script>
    @endsection
@section('CustomCSS')
    <style>
        table tr td{
            font-size: 10px !important;
        }
        iframe{
            width: 100% !important;
        }
    </style>
@endsection

