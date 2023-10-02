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
                                <div>
                                    <table cellspacing="0" style="border-collapse:collapse; width:780px">
                                        <tbody>
                                        <tr>
                                            <td colspan="2" style="background-color:#222b35; border-bottom:none; border-left:1px solid black; border-right:none; border-top:1px solid black; height:44px; text-align:center; vertical-align:middle; white-space:nowrap; width:779px"><span style="font-size:24px"><span style="color:white"><strong>2 Kasım 2023 Perşembe</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#222b35; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:44px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>Saat</strong></span></span></td>
                                            <td style="background-color:#222b35; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>PANEL ADI - MODERAT&Ouml;R - KONUŞMACI&nbsp;</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:39px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>12:30-13:30</strong></span></span></td>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>A&Ccedil;ILIŞ T&Ouml;RENİ</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Levent Yiğit</strong></span></span><span style="font-size:10pt"><span style="color:black"> -</span></span><span style="font-size:10pt"><span style="color:black"> Kongre Başkanı, SASDER YK Başkanı, Anadolu Sağlık Merkezi İş Geliştirme ve Satış Direkt&ouml;r&uuml;</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Prof. Dr. Simten Malhan</strong></span></span><span style="font-size:10pt"><span style="color:black"> - </span></span><span style="font-size:10pt"><span style="color:black">Bilimsel Kongre Başkanı / G&uuml;ven Sağlıklı Yaşam Kamp&uuml;s&uuml; Genel M&uuml;d&uuml;r&uuml;</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Dr. Şuayip Birinci</strong></span></span><span style="font-size:10pt"><span style="color:black"> -</span></span><span style="font-size:10pt"><span style="color:black"> TC. Sağlık Bakanlığı Bakan Yardımcısı</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>13:30-14:50</strong></span></span></td>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>PANEL 1:<br />
			DOĞAL AFETLER / AFET Y&Ouml;NETİMİ / PANDEMİ (HALK SAĞLIĞI)<br />
			Moderat&ouml;r: Leyla Şeker - <span style="font-size:10pt"><span style="color:white">Lokman Hekim Sağlık Vakfı Y&ouml;netim Kurulu Başkanı</span></span></strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Prof. Dr. &Ouml;nder Erg&ouml;n&uuml;l </strong></span></span><span style="font-size:10pt"><span style="color:black">- </span></span><span style="font-size:10pt"><span style="color:black">Ko&ccedil; &Uuml;niversitesi&nbsp; Enfeksiyon Hastalıkları ve Klinik Mikrobiyoloji Anabilim Dalı</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Prof. Dr. Celal Şeng&ouml;r - </strong></span></span><span style="font-size:10pt"><span style="color:black">Akademisyen, Jeolog, Yazar</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Prof. Dr. Naci G&ouml;r&uuml;r - </strong></span></span><span style="font-size:10pt"><span style="color:black">İstanbul Teknik &Uuml;niversitesi Maden Fak&uuml;ltesi Jeoloji M&uuml;hendisliği B&ouml;l&uuml;m&uuml;&nbsp;</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><strong>Tartışma</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#595959; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:35px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>14:50-15:00</strong></span></span></td>
                                            <td style="background-color:#595959; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>KAHVE ARASI</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">15:00-16:00</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><strong>Sunay Akın - <span style="font-size:10pt"><span style="color:black">Şair, Yazar, Gazeteci, Araştırmacı ve Tiyatro Oyuncusu</span></span></strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>16:00 - 16:50</strong></span></span></td>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>PANEL 2:<br />
			CUMHURİYETİN 100. YILINDA SAĞLIK Y&Ouml;NETİMİ<br />
			Moderat&ouml;r: Prof. Dr. Ahmet Demircan - <span style="font-size:10pt"><span style="color:white">Gazi &Uuml;niversitesi Tıp Fak&uuml;ltesi&nbsp;</span></span></strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Banu K&uuml;&ccedil;&uuml;kel </strong></span></span><span style="font-size:10pt"><span style="color:black">- </span></span><span style="font-size:10pt"><span style="color:black">G&uuml;ven Sağlık Grubu Y&ouml;netim Kurulu Başkanı</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Hakan Adanalı</strong></span></span><span style="font-size:10pt"><span style="color:black"> - </span></span><span style="font-size:10pt"><span style="color:black">CCN Group Y&ouml;netim Kurulu &Uuml;yesi</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><strong>Tartışma</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#595959; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:35px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>16:50-17:00</strong></span></span></td>
                                            <td style="background-color:#595959; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>KAHVE ARASI</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>17:00 - 18:00</strong></span></span></td>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>PANEL 3:<br />
			DOĞAL AFETLERDE SAĞLIK SİSTEMİMİZ<br />
			Moderat&ouml;r: Prof. Dr. Kemal Memişoğlu<span style="font-size:10pt"><span style="color:white"> - İstanbul İl Sağlık M&uuml;d&uuml;r&uuml;</span></span></strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Do&ccedil;. Dr. Eray &Ccedil;ınar </strong></span></span><span style="font-size:10pt"><span style="color:black">-</span></span><span style="font-size:10pt"><span style="color:black"> Acil Sağlık Hizmetleri Genel M&uuml;d&uuml;rl&uuml;ğ&uuml; Genel M&uuml;d&uuml;r&uuml;</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Uzm. Dr. Yılmaz Aydın</strong></span></span><span style="font-size:10pt"><span style="color:black"> - </span></span><span style="font-size:10pt"><span style="color:black">İstanbul İl Sağlık M&uuml;d&uuml;rl&uuml;ğ&uuml; Başkan Yardımcısı</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Do&ccedil;. Dr. Kurtuluş A&ccedil;ıksarı</strong></span></span><span style="font-size:10pt"><span style="color:black"> -</span></span><span style="font-size:10pt"><span style="color:black">S&uuml;leyman Yal&ccedil;ın Şehir Hastanesi Acil Tıp Kliniği Eğitim Sorumlusu</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><strong>Tartışma</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:none; border-left:none; border-right:none; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap">&nbsp;</td>
                                            <td style="border-bottom:none; border-left:none; border-right:none; border-top:none; vertical-align:middle; white-space:normal; width:686px">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:none; border-left:none; border-right:none; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap">&nbsp;</td>
                                            <td style="border-bottom:none; border-left:none; border-right:none; border-top:none; vertical-align:middle; white-space:normal; width:686px">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:none; border-left:none; border-right:none; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap">&nbsp;</td>
                                            <td style="border-bottom:none; border-left:none; border-right:none; border-top:none; vertical-align:middle; white-space:normal; width:686px">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:none; border-left:none; border-right:none; border-top:none; height:50px; text-align:center; vertical-align:middle; white-space:nowrap">&nbsp;</td>
                                            <td style="border-bottom:none; border-left:none; border-right:none; border-top:none; vertical-align:middle; white-space:nowrap">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="background-color:#222b35; border-bottom:none; border-left:1px solid black; border-right:none; border-top:1px solid black; height:44px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:24px"><span style="color:white"><strong>3 Kasım 2023 Cuma</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#222b35; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:44px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>Saat</strong></span></span></td>
                                            <td style="background-color:#222b35; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>PANEL ADI - MODERAT&Ouml;R - KONUŞMACI&nbsp;</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>09:30-10:30</strong></span></span></td>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>PANEL 4:<br />
			CUMHURİYET&#39;İN 100. YILINDA SAĞLIK İLETİŞİMİ<br />
			Moderat&ouml;r : Meri İstiroti - <span style="font-size:10pt"><span style="color:white">Liv Hospital Grup Koordinat&ouml;r&uuml;</span></span></strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Dr. İbrahim Ersoy</strong></span></span><span style="font-size:10pt"><span style="color:black"> - </span></span><span style="font-size:10pt"><span style="color:black">&nbsp;Y&ouml;netmen</span></span><span style="font-size:10pt"><span style="color:black">, </span></span><span style="font-size:10pt"><span style="color:black">Gazeteci, Medimagazin Gazetesi</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Yeşim Sert Karaaslan</strong></span></span><span style="font-size:10pt"><span style="color:black"> &ndash; </span></span><span style="font-size:10pt"><span style="color:black">Anadolu Ajansı,Sağlık Muhabiri</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Ziyneti Kocabıyık</strong></span></span><span style="font-size:10pt"><span style="color:black"> &ndash; </span></span><span style="font-size:10pt"><span style="color:black">T&uuml;rkiye Gazetesi Sağlık Edit&ouml;r&uuml;</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><strong>Tartışma</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#595959; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:35px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>10:30-10:45</strong></span></span></td>
                                            <td style="background-color:#595959; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>KAHVE ARASI</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>10:45-12:30</strong></span></span></td>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>PANEL 5:<br />
			CUMHURİYETİN 100. YILINDA SAĞLIK SEKT&Ouml;R&Uuml;NDE DİJİTALLEŞME VE YENİ TEKNOLOJİLER<br />
			Moderat&ouml;r: Prof. Dr. Melih Bulut - Sağlıkta İşbirliği Platformu Kurucusu</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Fatma Zakaryan</strong></span></span><span style="font-size:10pt"><span style="color:black"> -</span></span><span style="font-size:10pt"><span style="color:black"> (CGM) CompuGroup Medical T&uuml;rkiye Genel M&uuml;d&uuml;r&uuml;</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Nadya G&uuml;her</strong></span></span><span style="font-size:10pt"><span style="color:black"> - </span></span><span style="font-size:10pt"><span style="color:black">Eczacıbaşı Evital Medikal Direkt&ouml;r&uuml;, DİSADER Genel Sekreteri&nbsp;</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Dr. Erhan Bulutcu</strong></span></span><span style="font-size:10pt"><span style="color:black"> - </span></span><span style="font-size:10pt"><span style="color:black">Amerikan Hastanesi CEO</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Okan &Ouml;zdemir </strong></span></span><span style="font-size:10pt"><span style="color:black">- </span></span><span style="font-size:10pt"><span style="color:black">Allianz Sağlık Sigortaları Genel M&uuml;d&uuml;r Yardımcısı</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Recai Serdar Gemici </strong></span></span><span style="font-size:10pt"><span style="color:black">- </span></span><span style="font-size:10pt"><span style="color:black">Co-Founder &amp; CEO&nbsp; Albert Health</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Yavuz &Ouml;lken - </strong></span></span><span style="font-size:10pt"><span style="color:black">Axa Sigorta Y&ouml;netim Kurulu Başkan Vekili &amp; CEO</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><strong>Tartışma</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#a9d08e; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:35px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><strong>12:30-13:30</strong></span></td>
                                            <td style="background-color:#a9d08e; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><strong>&Ouml;ĞLE ARASI</strong></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:76px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>13:30-14:15</strong></span></span></td>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>Y&Uuml;Z YILIN PANDEMİSİ: OBEZİTE<br />
			Konuşmacılar:<br />
			<span style="font-size:10pt"><strong>Jens Pii Olesen</strong></span><span style="font-size:10pt"><span style="color:black"> - Novo Nordisk T&uuml;rkiye Genel M&uuml;d&uuml;r ve Başkan Yardımcısı</span></span><br />
			<span style="font-size:10pt"><span style="color:black"><strong>Prof. Dr. Simten Malhan - </strong></span></span><span style="font-size:10pt"><span style="color:black">Bilimsel Kongre Başkanı / G&uuml;ven Sağlıklı Yaşam Kamp&uuml;s&uuml; Genel M&uuml;d&uuml;r&uuml;</span></span></strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#595959; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:35px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>14:15-14:30</strong></span></span></td>
                                            <td style="background-color:#595959; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>KAHVE ARASI</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>14:30-15:30</strong></span></span></td>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>PANEL 6:<br />
			CUMHURİYETİN 100. YILINDA İLA&Ccedil; SEKT&Ouml;R&Uuml;<br />
			Moderat&ouml;r: Prof. Dr. B&uuml;lent Antmen</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Dr. &Uuml;mit Dereli </strong></span></span><span style="font-size:10pt"><span style="color:black">&ndash; </span></span><span style="font-size:10pt"><span style="color:black">AIFD Araştırmacı İla&ccedil; Firmaları Derneği Genel Sekreteri</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Savaş Malko&ccedil;</strong></span></span><span style="font-size:10pt"><span style="color:black"> &ndash; </span></span><span style="font-size:10pt"><span style="color:black">IES İla&ccedil; End&uuml;strisi İşverenler Sendikası Genel Sekreteri&nbsp;</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Sami T&uuml;rkoğlu</strong></span></span><span style="font-size:10pt"><span style="color:black"> &ndash; </span></span><span style="font-size:10pt"><span style="color:black">TİSD T&uuml;rkiye İla&ccedil; Sanayi Derneği Y&ouml;netim Kurulu &Uuml;yesi</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black">Tartışma</span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:34px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><strong>15:30-16:30</strong></span></td>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><strong>B2B<br />
			Sigorta Şirketi - Sağlık Kurumları G&ouml;r&uuml;şmeleri</strong></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:none; border-left:none; border-right:none; border-top:none; height:50px; text-align:center; vertical-align:middle; white-space:nowrap">&nbsp;</td>
                                            <td style="border-bottom:none; border-left:none; border-right:none; border-top:none; vertical-align:middle; white-space:nowrap">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="background-color:#222b35; border-bottom:none; border-left:1px solid black; border-right:none; border-top:1px solid black; height:44px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:24px"><span style="color:white"><strong>4 Kasım 2023 Cumartesi</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#222b35; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:44px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>Saat</strong></span></span></td>
                                            <td style="background-color:#222b35; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>PANEL ADI - MODERAT&Ouml;R - KONUŞMACI&nbsp;</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>09:30-10:30</strong></span></span></td>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>PANEL 7:<br />
			CUMHURİYETİN 100. YILINDA SAĞLIK EĞİTİMİ<br />
			Moderat&ouml;r: Prof. Dr. Haluk &Ouml;zsarı</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Prof. Dr. Necmettin &Uuml;nal</strong></span></span><span style="font-size:10pt"><span style="color:black"> - </span></span><span style="font-size:10pt"><span style="color:black">Ankara &Uuml;niversitesi Tıp Fak&uuml;ltesi &Ouml;ğr. &Uuml;yesi</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Prof. Dr. Ruşen Keleş</strong></span></span><span style="font-size:10pt"><span style="color:black"> - </span></span><span style="font-size:10pt"><span style="color:black">Kent Bilimci, Araştırmacı, Yazar</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><strong>Tartışma</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#595959; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:35px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>11:10-11:35</strong></span></span></td>
                                            <td style="background-color:#595959; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>KAHVE ARASI</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:68px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>11:35-13:15</strong></span></span></td>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>PANEL 8:<br />
			CUMHURİYETİN 100. YILINDA SİGORTACILIK SEKT&Ouml;R&Uuml;NDE S&Uuml;RD&Uuml;R&Uuml;LEBİLİRLİK VE VERİMLİLİK<br />
			Moderat&ouml;r: Levent Yiğit - <span style="font-size:10pt"><span style="color:white">Kongre Başkanı, SASDER YK Başkanı, Anadolu Sağlık Merkezi İş Geliştirme ve Satış Direkt&ouml;r&uuml;</span></span></strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Oktay Atay</strong></span></span><span style="font-size:10pt"><span style="color:black"> - </span></span><span style="font-size:10pt"><span style="color:black">Allianz Sigorta Sağlık Grup Direkt&ouml;r&uuml;</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>&Ccedil;ağatay &Ccedil;ınar </strong></span></span><span style="font-size:10pt"><span style="color:black">- </span></span><span style="font-size:10pt"><span style="color:black">Sompo Sigorta Saglık Sigortaları Direkt&ouml;r&uuml; , TSB Sağlık Komitesi Başkan Yardımcısı</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Tuba G&ouml;ken&ccedil; Buldu</strong></span></span><span style="font-size:10pt"><span style="color:black"> - </span></span><span style="font-size:10pt"><span style="color:black">T&uuml;rkiye Sigorta Sağlık Sigortaları Genel M&uuml;d&uuml;r Yardımcısı</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Emre Bayram</strong></span></span><span style="font-size:10pt"><span style="color:black"> - </span></span><span style="font-size:10pt"><span style="color:black">Mapfre Bireysel Sigortalar Teknik Genel M&uuml;d&uuml;r Yardımcı</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><strong>Tartışma</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#a9d08e; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:35px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><strong>13:15-14:10</strong></span></td>
                                            <td style="background-color:#a9d08e; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><strong>&Ouml;ĞLE YEMEĞİ</strong></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#595959; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:35px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>14:50-15:10</strong></span></span></td>
                                            <td style="background-color:#595959; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>KAHVE ARASI</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:51px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>16:00-17:20</strong></span></span></td>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>PANEL 9:<br />
			CUMHURİYETİN 100. YILINDA SAĞLIK TURİZMİ<br />
			Moderat&ouml;r: Dr. Reşat Bahat - <span style="font-size:10pt"><span style="color:white">OHSAD Genel Başkanı</span></span></strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Aygen Yenig&uuml;n</strong></span></span><span style="font-size:10pt"><span style="color:black"> &ndash; </span></span><span style="font-size:10pt"><span style="color:black">DEİK Dış Ekonomik İlişkiler Kurulu Afrika B&ouml;lg. Başkanı&nbsp;</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Alperen Ka&ccedil;ar</strong></span></span><span style="font-size:10pt"><span style="color:black"> &ndash; </span></span><span style="font-size:10pt"><span style="color:black">TC. Ticaret Bakanlığı Genel M&uuml;d&uuml;r Yardımcısı</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black"><span style="font-size:10pt"><span style="color:black"><strong>Tarık A&ccedil;ıkalın</strong></span></span><span style="font-size:10pt"><span style="color:black"> - </span></span><span style="font-size:10pt"><span style="color:black">Remed Asistans Sağlık Genel M&uuml;d&uuml;r&uuml;</span></span></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px">&nbsp;</span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:black">Tartışma</span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:68px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><span style="color:white"><strong>16:20-16:50</strong></span></span></td>
                                            <td style="background-color:#8497b0; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><span style="color:white"><strong>PANEL 10:<br />
			KRONIK BİR HASTALIĞA FARKLI BİR BAKIŞ<br />
			Moderat&ouml;r: Prof. Dr. Simten Malhan<span style="font-size:10pt"><span style="color:white">- Bilimsel Kongre Başkanı / G&uuml;ven Sağlıklı Yaşam Kamp&uuml;s&uuml; Genel M&uuml;d&uuml;r&uuml;</span></span><br />
			<span style="font-size:10pt"><span style="color:white"><strong>Konuşmacı: Prof. Dr. Tevfik Ecder</strong></span></span></strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:34px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><strong>16:50-18:00</strong></span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><strong>B2B<br />
			Sigorta Şirketi - Sağlık Kurumları G&ouml;r&uuml;şmeleri</strong></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:34px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:13px"><strong>18:00-20:00</strong></span></td>
                                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:686px"><span style="font-size:13px"><strong>GERİ &Ouml;DEME DOSYALARINDA FARMAKOEKONOMİK DEĞERLENDİRMEDE İPU&Ccedil;LARI<br />
			Prof. Dr. Simten Malhan - <span style="font-size:10pt">Bilimsel Kongre Başkanı / G&uuml;ven Sağlıklı Yaşam Kamp&uuml;s&uuml; Genel M&uuml;d&uuml;r&uuml;</span></strong></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:none; border-left:none; border-right:none; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap">&nbsp;</td>
                                            <td style="border-bottom:none; border-left:none; border-right:none; border-top:none; vertical-align:middle; white-space:nowrap">&nbsp;</td>
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

