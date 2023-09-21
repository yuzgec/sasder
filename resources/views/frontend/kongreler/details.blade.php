@extends('frontend.layout.app')
@section('title', $Detay->title. ' SASDER Ulusal Kongre | '.config('app.name'))
@section('content')
    @include('frontend.layout.header2')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container container-xl-custom">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark">SASDER {{ $Detay->title }}</h1>
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
                <div class="col-md-12">
                    {!! $Detay->desc !!}
                </div>

                {{--<div class="col-lg-4">

                      --}}{{--  <h2 class="font-weight-bold text-7 mt-2 mb-0">KAYIT FORMU</h2>
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
--}}{{--

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
                </div>--}}
                @if($Detay->id == 10)
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


                                    <div class="WordSection1">
                                        <table cellspacing="0" class="TableNormal" style="border-collapse:collapse; border:none; margin-left:9px">
                                            <tbody>
                                            <tr>
                                                <td colspan="2" style="background-color:#212b35; border-bottom:1px solid black; border-left:2px solid black; border-right:none; border-top:2px solid black; height:26px; vertical-align:top; width:725px">
                                                    <p style="margin-left:258px; margin-right:256px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:15.5pt"><span style="color:white">2 Kasım 2023 Perşembe</span></span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#212b35; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:26px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:5px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">Saat</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#212b35; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:26px; vertical-align:top; width:643px">
                                                    <p style="margin-left:216px; margin-right:214px; text-align:center"><span style="font-size:11pt"><strong><span style="color:white">PANEL Adı/Moderat&ouml;r/Konuşmacı</span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:23px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">12:30-13:30</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:23px; vertical-align:top; width:643px">
                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">A&Ccedil;ILIŞ T&Ouml;RENİ</span></span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">12:30-12:40</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Levent Yiğit </span></strong><span style="font-size:9.0pt">- Kongre Başkanı, SASDER YK Başkanı, Anadolu Sağlık Merkezi İş Geliştirme ve Satış Direkt&ouml;r&uuml;</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">12:40-13:00</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Prof. Dr. Simten Malhan </span></strong><span style="font-size:9.0pt">- Kongre Bilimsel Kurul Başkanı / G&uuml;ven Hastanesi Genel M&uuml;d&uuml;r&uuml;</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">13:00-13:30</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Dr. Şuayip Birinci </span></strong><span style="font-size:9.0pt">- TC. Sağlık Bakanlığı Bakan Yardımcısı</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:83px">
                                                    <p>&nbsp;</p>

                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">13:30-14:50</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:643px">
                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">PANEL 1:</span></span></strong></span></p>

                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">DOĞAL AFETLER / AFET Y&Ouml;NETİMİ / PANDEMİ (HALK SAĞLIĞI)</span></span></strong></span></p>

                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">Moderat&ouml;r: Leyla Şeker - </span></span></strong><span style="font-size:9.5pt"><span style="color:white">Lokman Hekim Sağlık Vakfı Y&ouml;netim Kurulu Başkanı</span></span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">13:30-13:50</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Prof. Dr. &Ouml;nder Erg&ouml;n&uuml;l </span></strong><span style="font-size:9.0pt">- Ko&ccedil; &Uuml;niversitesi Enfeksiyon Hastalıkları ve Klinik Mikrobiyoloji Anabilim Dalı</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">13:50-14:10</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Prof. Dr. Celal Şeng&ouml;r - </span></strong><span style="font-size:9.0pt">Akademisyen, Jeolog, Yazar</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">14:10-14:30</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Prof. Dr. Naci G&ouml;r&uuml;r - </span></strong><span style="font-size:9.0pt">İstanbul Teknik &Uuml;niversitesi Maden Fak&uuml;ltesi Jeoloji M&uuml;hendisliği B&ouml;l&uuml;m&uuml; &Ouml;ğretim &Uuml;yesi</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">14:30-14:50</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Tartışma</span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#585858; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">14:50-15:00</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#585858; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">KAHVE ARASI</span></span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">15:00-16:00</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Sunay Akın - </span></strong><span style="font-size:9.0pt">Şair, Yazar, Gazeteci, Araştırmacı ve Tiyatro Oyuncusu</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:83px">
                                                    <p>&nbsp;</p>

                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">16:00 - 16:50</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:643px">
                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">PANEL 2:</span></span></strong></span></p>

                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">CUMHURİYETİN 100. YILINDA SAĞLIK Y&Ouml;NETİMİ</span></span></strong></span></p>

                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">Moderat&ouml;r: Prof. Dr. Ahmet Demircan - </span></span></strong><span style="font-size:9.5pt"><span style="color:white">Gazi &Uuml;niversitesi Tıp Fak&uuml;ltesi</span></span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">16:00-16:20</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Banu K&uuml;&ccedil;&uuml;kel </span></strong><span style="font-size:9.0pt">- G&uuml;ven Sağlık Grubu Y&ouml;netim Kurulu Başkanlığı</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">16:20-16:40</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Hakan Adanalı </span></strong><span style="font-size:9.0pt">- CCN Group Y&ouml;netim Kurulu &Uuml;yesi</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">16:40-16:50</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Tartışma</span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#585858; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">16:50-17:00</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#585858; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">KAHVE ARASI</span></span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:83px">
                                                    <p>&nbsp;</p>

                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">17:00 - 18:00</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:643px">
                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">PANEL 3:</span></span></strong></span></p>

                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">DOĞAL AFETLERDE SAĞLIK SİSTEMİMİZ</span></span></strong></span></p>

                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">Moderat&ouml;r: Prof. Dr. Kemal Memişoğlu </span></span></strong><span style="font-size:9.5pt"><span style="color:white">- İstanbul İl Sağlık M&uuml;d&uuml;r&uuml;</span></span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">17:00-17:15</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Do&ccedil;. Dr. Eray &Ccedil;ınar </span></strong><span style="font-size:9.0pt">- Acil Sağlık Hizmetleri Genel M&uuml;d&uuml;rl&uuml;ğ&uuml; Genel M&uuml;d&uuml;r&uuml;</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">17:15-17:30</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Uzm. Dr. Yılmaz Aydın </span></strong><span style="font-size:9.0pt">- İstanbul İl Sağlık M&uuml;d&uuml;rl&uuml;ğ&uuml; Başkan Yardımcısı</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">17:30-17:45</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Do&ccedil;. Dr. Kurtuluş A&ccedil;ıksarı </span></strong><span style="font-size:9.0pt">-S&uuml;leyman Yal&ccedil;ın Şehir Hastanesi Acil Tıp Kliniği Eğitim Sorumlusu</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">17:45-18:00</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Tartışma</span></strong></span></p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <p>&nbsp;</p>

                                        <table cellspacing="0" class="TableNormal" style="border-collapse:collapse; border:none; margin-left:9px">
                                            <tbody>
                                            <tr>
                                                <td colspan="2" style="background-color:#212b35; border-bottom:1px solid black; border-left:2px solid black; border-right:none; border-top:2px solid black; height:26px; vertical-align:top; width:726px">
                                                    <p style="margin-left:277px; margin-right:275px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:15.5pt"><span style="color:white">3 Kasım 2023 Cuma</span></span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#212b35; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:26px; vertical-align:top; width:83px">
                                                    <p style="margin-left:30px; margin-right:27px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">Saat</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#212b35; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:26px; vertical-align:top; width:643px">
                                                    <p style="margin-left:216px; margin-right:214px; text-align:center"><span style="font-size:11pt"><strong><span style="color:white">PANEL Adı/Moderat&ouml;r/Konuşmacı</span></strong></span></p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div style="page-break-after:always">&nbsp;</div>

                                    <div class="WordSection2">
                                        <table cellspacing="0" class="TableNormal" style="border-collapse:collapse; border:none; margin-left:8px">
                                            <tbody>
                                            <tr>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:51px; vertical-align:top; width:83px">
                                                    <p>&nbsp;</p>

                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">09:30-10:45</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:51px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">PANEL 4:</span></span></strong></span></p>

                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">CUMHURİYET&#39;İN 100. YILINDA SAĞLIK İLETİŞİMİ</span></span></strong></span></p>

                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">Moderat&ouml;r : Meri İstroti - </span></span></strong><span style="font-size:9.5pt"><span style="color:white">Liv Hospital Grup Koordinat&ouml;r&uuml;</span></span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">09:30-09:50</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Dr. İbrahim Ersoy </span></strong><span style="font-size:9.0pt">- Gazeteci, Medimagazin Gazetesi</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">09:50-10:10</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Yeşim Sert </span></strong><span style="font-size:9.0pt">&ndash; Gazeteci, Anadolu Ajansı</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">10:10-10:30</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Ziyneti Kocabıyık </span></strong><span style="font-size:9.0pt">&ndash; T&uuml;rkiye Gazetesi Sağlık Edit&ouml;r&uuml;</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">10:30-10:45</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Tartışma</span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#585858; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">10:45-10:55</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#585858; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">KAHVE ARASI</span></span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:83px">
                                                    <p>&nbsp;</p>

                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">10:55-13:05</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">PANEL 5:</span></span></strong></span></p>

                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">CUMHURİYETİN 100. YILINDA SAĞLIK SEKT&Ouml;R&Uuml;NDE DİJİTALLEŞME VE YENİ TEKNOLOJİLER</span></span></strong></span></p>

                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">Moderat&ouml;r: Prof. Dr. Melih Bulut</span></span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">10:55-11:15</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Fatma Zakaryan </span></strong><span style="font-size:9.0pt">- (CGM) CompuGroup Medical T&uuml;rkiye Genel M&uuml;d&uuml;r&uuml;</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">11:15-11:35</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Nadya G&uuml;her </span></strong><span style="font-size:9.0pt">- Eczacıbaşı Evital Medikal Direkt&ouml;r&uuml;, DİSADER Genel Sekreteri</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">11:35-11:55</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Dr. Erhan Bulutcu </span></strong><span style="font-size:9.0pt">- Amerikan Hastanesi CEO</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">11:55-12:15</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Okan &Ouml;zdemir </span></strong><span style="font-size:9.0pt">- Allianz Sağlık Sigortaları Genel M&uuml;d&uuml;r Yardımcısı</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">12:15-12:35</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Recai Serdar Gemici </span></strong><span style="font-size:9.0pt">- Co-Founder &amp; CEO Albert Health</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">12:35-12:55</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Yavuz &Ouml;lken - </span></strong><span style="font-size:9.0pt">Axa Sigorta Y&ouml;netim Kurulu Başkan Vekili &amp; CEO</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">12:55-13:05</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Tartışma</span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#a9d08e; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">13:05-14:00</span></strong></span></p>
                                                </td>
                                                <td style="background-color:#a9d08e; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">&Ouml;ĞLE ARASI</span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#585858; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">14:45-15:00</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#585858; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">KAHVE ARASI</span></span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:83px">
                                                    <p>&nbsp;</p>

                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">15:00-16:10</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">PANEL 6:</span></span></strong></span></p>

                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">CUMHURİYETİN 100. YILINDA İLA&Ccedil; SEKT&Ouml;R&Uuml;</span></span></strong></span></p>

                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">Moderat&ouml;r: Prof. Dr. B&uuml;lent Antmen</span></span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">15:00-15:20</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Dr. &Uuml;mit Dereli </span></strong><span style="font-size:9.0pt">&ndash; AIFD Araştırmacı İla&ccedil; Firmaları Derneği Genel Sekreteri</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">15:20-15:40</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Savaş Malko&ccedil; </span></strong><span style="font-size:9.0pt">&ndash; IES İla&ccedil; End&uuml;strisi İşverenler Sendikası Genel Sekreteri</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">15:40-16:00</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Sami T&uuml;rkoğlu </span></strong><span style="font-size:9.0pt">&ndash; TİSD T&uuml;rkiye İla&ccedil; Sanayi Derneği Y&ouml;netim Kurulu &Uuml;yesi</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">16:00-16:10</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><span style="font-size:9.0pt">Tartışma</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; vertical-align:top; width:83px">
                                                    <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">16:10-17:10</span></strong></span></p>
                                                </td>
                                                <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:33px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt">B2B</span></strong></span></p>

                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt">Sigorta Şirketi - Sağlık Kurumları G&ouml;r&uuml;şmeleri</span></strong></span></p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <p>&nbsp;</p>

                                        <table cellspacing="0" class="TableNormal" style="border-collapse:collapse; border:none; margin-left:9px">
                                            <tbody>
                                            <tr>
                                                <td colspan="2" style="background-color:#212b35; border-bottom:1px solid black; border-left:2px solid black; border-right:none; border-top:2px solid black; height:26px; vertical-align:top; width:725px">
                                                    <p style="margin-left:258px; margin-right:256px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:15.5pt"><span style="color:white">4 Kasım 2023 Cumartesi</span></span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#212b35; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:26px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:5px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">Saat</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#212b35; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:26px; vertical-align:top; width:643px">
                                                    <p style="margin-left:216px; margin-right:214px; text-align:center"><span style="font-size:11pt"><strong><span style="color:white">PANEL Adı/Moderat&ouml;r/Konuşmacı</span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:83px">
                                                    <p>&nbsp;</p>

                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">09:30-10:30</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:643px">
                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">PANEL 7:</span></span></strong></span></p>

                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">CUMHURİYETİN 100. YILINDA SAĞLIK EĞİTİMİ</span></span></strong></span></p>

                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">Moderat&ouml;r: Prof. Dr. Haluk &Ouml;zsarı</span></span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:27px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">09:30-09:50</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:27px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Prof. Dr. Necmettin &Uuml;nal </span></strong><span style="font-size:9.0pt">- Ankara &Uuml;niversitesi Tıp Fak&uuml;ltesi &Ouml;ğr. &Uuml;yesi</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">09:50-10:10</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Prof. Dr. Ruşen Keleş </span></strong><span style="font-size:9.0pt">- Kent Bilimci, Araştırmacı, Yazar</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">10:10-10:30</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Tartışma</span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#585858; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">11:10-11:35</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#585858; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">KAHVE ARASI</span></span></strong></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:83px">
                                                    <p>&nbsp;</p>

                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">11:35-13:15</span></span></strong></span></p>
                                                </td>
                                                <td style="background-color:#8496af; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:643px">
                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">PANEL 8:</span></span></strong></span></p>

                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">CUMHURİYETİN 100. YILINDA SİGORTACILIK SEKT&Ouml;R&Uuml;NDE S&Uuml;RD&Uuml;R&Uuml;LEBİLİRLİK VE VERİMLİLİK</span></span></strong></span></p>

                                                    <p style="margin-left:3px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">Moderat&ouml;r: Levent Yiğit - </span></span></strong><span style="font-size:8.5pt"><span style="color:white">Kongre Başkanı, SASDER YK Başkanı, Anadolu Sağlık Merkezi İş Geliştirme ve Satış Direkt&ouml;r&uuml;</span></span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">11:35-11:55</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Oktay Atay </span></strong><span style="font-size:9.0pt">- Allianz Sigorta Sağlık Grup Direkt&ouml;r&uuml;</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">11:55-12:15</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">&Ccedil;ağatay &Ccedil;ınar </span></strong><span style="font-size:9.0pt">- Sompo Sigorta Saglik Sigortalari Direkt&ouml;r&uuml; , TSB Sağlık Komitesi Bşk. Yrd .</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">12:15-12:35</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Tuğba G&ouml;ken&ccedil; Buldu </span></strong><span style="font-size:9.0pt">- T&uuml;rkiye Sigorta Sağlık Sigortaları Genel M&uuml;d&uuml;r Yardımcısı</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">12:35-12:55</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Emre Bayram </span></strong><span style="font-size:9.0pt">- Mapfre Bireysel Sigortalar Teknik Genel M&uuml;d&uuml;r Yardımcı</span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                    <p style="margin-left:8px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">12:55-13:15</span></span></p>
                                                </td>
                                                <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                    <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Tartışma</span></strong></span></p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div style="page-break-after:always">&nbsp;</div>

                                    <table cellspacing="0" class="TableNormal" style="border-collapse:collapse; border:none; margin-left:8px">
                                        <tbody>
                                        <tr>
                                            <td style="background-color:#a9d08e; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:20px; vertical-align:top; width:83px">
                                                <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">13:15-14:10</span></strong></span></p>
                                            </td>
                                            <td style="background-color:#a9d08e; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:20px; vertical-align:top; width:643px">
                                                <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">&Ouml;ĞLE YEMEĞİ</span></strong></span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#585858; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">14:50-15:10</span></span></strong></span></p>
                                            </td>
                                            <td style="background-color:#585858; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">KAHVE ARASI</span></span></strong></span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#8496af; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:83px">
                                                <p>&nbsp;</p>

                                                <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">16:00-17:20</span></span></strong></span></p>
                                            </td>
                                            <td style="background-color:#8496af; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:51px; vertical-align:top; width:643px">
                                                <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">PANEL 9:</span></span></strong></span></p>

                                                <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">CUMHURİYETİN 100. YILINDA SAĞLIK TURİZMİ</span></span></strong></span></p>

                                                <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">Moderat&ouml;r: Dr. Reşat Bahat - </span></span></strong><span style="font-size:9.5pt"><span style="color:white">OHSAD Genel Başkanı</span></span></span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">15:10-15:30</span></span></p>
                                            </td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Aygen Yenig&uuml;n </span></strong><span style="font-size:9.0pt">&ndash; DEİK Dış Ekonomik İlişkiler Kurulu Afrika B&ouml;lg. Başkanı</span></span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">15:30-15:50</span></span></p>
                                            </td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Alperen Ka&ccedil;ar </span></strong><span style="font-size:9.0pt">&ndash; TC. Ticaret Bakanlığı Genel M&uuml;d&uuml;r Yardımcısı</span></span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">15:50-16:10</span></span></p>
                                            </td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">Tarik A&ccedil;ıkalın </span></strong><span style="font-size:9.0pt">- Remed Asistans Sağlık Genel M&uuml;d&uuml;r&uuml;</span></span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:83px">
                                                <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><span style="font-size:9.0pt">16:10-16:20</span></span></p>
                                            </td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; vertical-align:top; width:643px">
                                                <p style="margin-left:2px"><span style="font-size:11pt"><span style="font-size:9.0pt">Tartışma</span></span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#8496af; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:76px; vertical-align:top; width:83px">
                                                <p>&nbsp;</p>

                                                <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt"><span style="color:white">16:20-16:50</span></span></strong></span></p>
                                            </td>
                                            <td style="background-color:#8496af; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:76px; vertical-align:top; width:643px">
                                                <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">PANEL 10:</span></span></strong></span></p>

                                                <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">KRONIK BİR HASTALIĞA FARKLI BİR BAKIŞ</span></span></strong></span></p>

                                                <p style="margin-left:2px; margin-right:386px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt"><span style="color:white">Moderat&ouml;r: Prof. Dr. Simten Malhan Konuşmacı: Prof. Dr. Tevfik Ecder</span></span></strong></span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; vertical-align:top; width:83px">
                                                <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">16:50-18:00</span></strong></span></p>
                                            </td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:33px; vertical-align:top; width:643px">
                                                <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt">B2B</span></strong></span></p>

                                                <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt">Sigorta Şirketi - Sağlık Kurumları G&ouml;r&uuml;şmeleri</span></strong></span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; vertical-align:top; width:83px">
                                                <p style="margin-left:7px; margin-right:6px; text-align:center"><span style="font-size:11pt"><strong><span style="font-size:9.0pt">18:00-19:00</span></strong></span></p>
                                            </td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:33px; vertical-align:top; width:643px">
                                                <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt">GERİ &Ouml;DEME DOSYALARINDA FARMAKOEKONOMİK DEĞERLENDİRME KURSU</span></strong></span></p>

                                                <p style="margin-left:2px"><span style="font-size:11pt"><strong><span style="font-size:9.5pt">Prof. Dr. Simten Malhan</span></strong></span></p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

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
            $("table").addClass("table table-hovered table-striped table-bordered table-responsive");
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

