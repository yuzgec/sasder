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

                      {{--  <h2 class="font-weight-bold text-7 mt-2 mb-0">KAYIT FORMU</h2>
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
--}}

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
                @if($Detay->id == 9)
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

                                    <table>
                                        <tbody>
                                        <tr>
                                            <td colspan="2" style="background-color:#00509d ; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:25px; text-align:center;">
                                                <span style="font-size:19px"><span style="color:white"><strong>3 KASIM 2022, PERŞEMBE</strong></span></span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:center;"><span style="font-size:15px"><strong>SAAT</strong></span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black;  text-align:center;"><span style="font-size:15px"><strong>&nbsp;KONU/KONUŞMACI</strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:25px; text-align:left;"><span style="font-size:15px">08:00 - 13:00</span></td>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px">Kayıt ve Otele Yerleşme</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:25px;"><span style="font-size:15px"><strong>13:00 - 13:30</strong></span></td>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><strong>A&Ccedil;ILIŞ T&Ouml;RENİ</strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:25px;"><span style="font-size:15px">13:00 - 13:10</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Levent Yiğit</strong></span> <span style="font-size:11pt">- SASDER Y&ouml;netim Kurulu Başkanı</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:25px;"><span style="font-size:15px">13:10 - 13:20</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>İsmail Cinel</strong></span><span style="font-size:11pt"> - </span><span style="font-size:11pt">Kongre Bilimsel Kurul Başkanı, Acıbadem Ataşehir Hastanesi Yoğun Bakım Sorumlusu</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px;"><span style="font-size:15px">13:20 - 13:30</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Dr. Şuayip Birinci</strong></span> <span style="font-size:11pt">- T.C. Sağlık Bakanlığı, Sağlık Bakanı Yardımcısı</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:40px; text-align:left;"><span style="font-size:15px"><strong>13:30 - 14:30</strong></span></td>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black;  border-right:1px solid black;   "><span style="font-size:15px"><strong>TEMA KONUŞMACISI 1<br />
			Banu K&uuml;&ccedil;&uuml;kel- <span style="font-size:11pt">&nbsp;TOBB Sağlık Hizmetleri Meclisi Başkanı</span></strong></span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">14:30 - 14:45</span></td>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px">&Ccedil;ay - Kahve Molası</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:40px; text-align:left;"><span style="font-size:15px"><strong>14:45 - 16:00</strong></span></td>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black;  border-right:1px solid black;   "><span style="font-size:15px"><strong>PANEL 1: YENİ &Ccedil;AĞIN LİDERLİK ANLAYIŞI<br />
			Oturum Başkanı: İsmail Cinel - <span style="font-size:11pt">Kongre Bilimsel Kurul Başkanı, Acıbadem Ataşehir Hastanesi Yoğun Bakım Sorumlusu</span></strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:23px; text-align:left;"><span style="font-size:15px">14:45 - 15:05</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Ayşe Selen Kocabaş</strong></span><span style="font-size:11pt">-</span><span style="font-size:11pt"> Stratejik Danışman</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:23px; text-align:left;"><span style="font-size:15px">15:05 - 15:25</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Dr. Yılmaz Arg&uuml;den</strong></span> <span style="font-size:11pt">- ARGE Danışmanlık Y&ouml;netim Kurulu Başkanı</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:23px; text-align:left;"><span style="font-size:15px">15:25 - 15:45</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Murat Yeşildere </strong></span><span style="font-size:11pt">- Yetenek Avcısı, Egon Zehnder Kıdemli Ortak</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:23px; text-align:left;"><span style="font-size:15px">15:45 - 16:00</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px">Soru - Cevap - Değerlendirme</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">16:00 - 16:20</span></td>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px">&Ccedil;ay - Kahve Molası</span></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:40px; text-align:left;"><span style="font-size:15px"><strong>16:20 - 17:35</strong></span></td>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black;  border-right:1px solid black;   "><span style="font-size:15px"><strong>PANEL 2: NEDEN DEĞER TEMELLİ SAĞLIK<br />
			Oturum Başkanı: Haluk &Ouml;zsarı - <span style="font-size:11pt">Sağlık Bilimleri Fak&uuml;ltesi &Ouml;ğretim &Uuml;yesi</span></strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:25px; text-align:left;"><span style="font-size:15px">16:20 - 16:40</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Dr. Şuayip Birinci</strong></span> <span style="font-size:11pt">- T.C. Sağlık Bakanlığı, Sağlık Bakanı Yardımcısı</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:24px; text-align:left;"><span style="font-size:15px">16:40 - 17:00</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>G&ouml;khan Tuna &Ouml;zt&uuml;rk</strong></span> <span style="font-size:11pt">- Genel Sağlık Sigortası Genel M&uuml;d&uuml;r&uuml;</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:24px; text-align:left;"><span style="font-size:15px">17:00- 17:20</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Yelda Ulu Colin</strong></span> <span style="font-size:11pt">- Orta Avrupa ve T&uuml;rkiye B&ouml;lgesi Genel M&uuml;d&uuml;r&uuml;, Abbott Core Diagnostics</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:24px; text-align:left;"><span style="font-size:15px">17:20 - 17:35</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px">Soru - Cevap - Değerlendirme</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#ededed; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:43px; text-align:left;"><span style="font-size:15px"><strong>17:35-18:30</strong></span></td>
                                            <td style="background-color:#ededed; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;  "><span style="font-size:15px"><strong>Konferans:<br />
			Sağlıkta Mavi Okyanus Stratejisi ile Yalın Hastanecilik Yaklaşımı</strong></span></td>

                                        </tr>
                                        <tr>
                                            <td colspan="2" style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:25px; text-align:center;"><span style="font-size:15px"><strong>&nbsp;</strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px"><strong>21:30-22:30</strong></span></td>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;"><span style="font-size:15px"><strong>Sosyal Program / Stand-Up G&ouml;sterisi</strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="height:20px; text-align:left;">&nbsp;</td>
                                            <td style="text-align:left;">&nbsp;</td>

                                        </tr>
                                        <tr>
                                            <td style="height:20px; text-align:left;">&nbsp;</td>
                                            <td style="text-align:left;">&nbsp;</td>

                                        </tr>
                                        <tr>
                                            <td colspan="2" style="background-color:#00509d ; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:25px; text-align:center;"><span style="font-size:19px"><span style="color:white"><strong>4 KASIM 2022, CUMA</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px"><strong>SAAT</strong></span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black;  text-align:center;"><span style="font-size:15px"><strong>&nbsp;KONU/KONUŞMACI</strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:40px; text-align:left;"><span style="font-size:15px"><strong>09:00 -10:00</strong></span></td>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;  "><span style="font-size:15px"><strong>PANEL 3: BUG&Uuml;NDEN YARINA &Ouml;ZEL SAĞLIK SİGORTALARI<br />
			                                Oturum Başkanı : Can Kantar - <span style="font-size:11pt">Sigorta Medya Genel M&uuml;d&uuml;r&uuml;&nbsp;</span></strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">09:00 - 09:15</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Okan &Ouml;zdemir</strong></span><span style="font-size:11pt"> - </span><span style="font-size:11pt">Allianz Sağlık Sigortaları Genel M&uuml;d&uuml;r Yardımcısı</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">09:15 - 09:30</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Kerem Erberk</strong></span><span style="font-size:11pt"> -</span><span style="font-size:11pt"> Anadolu Sigorta Genel M&uuml;d&uuml;r Yardımcısı</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">09:30 - 09:45</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Atilla Oksay </strong></span><span style="font-size:11pt">- </span><span style="font-size:11pt">T&uuml;rkiye Sigorta Birliği Genel Sekreter Yardımcısı</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">09:45 - 10:00</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px">Soru - Cevap - Değerlendirme</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">10:00-10:15</span></td>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px">&Ccedil;ay - Kahve Molası</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:60px; text-align:left;"><span style="font-size:15px"><strong>10:15-11:10</strong></span></td>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black;  border-right:1px solid black;   "><span style="font-size:15px"><span style="font-size:11pt"><strong>SEKT&Ouml;R KONUŞUYOR :KAMU &amp; &Ouml;ZEL SAĞLIK HİZMET SUNUCULARI PERSPEKTİFİNDEN SAĞLIKTA GELECEĞİN VİZYONU</strong></span><br />
			<span style="font-size:11pt"><strong>Oturum Başkanı : Levent Yiğit - </strong></span><span style="font-size:11pt">SASDER Y&ouml;netim Kurulu Başkanı</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">10:15 - 10:35</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><strong>Kemal Memişoğlu<span style="font-size:11pt"> - </span><span style="font-size:11pt">İstanbul İl Sağlık M&uuml;d&uuml;r&uuml;</span></strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">10:35 - 10:55</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Reşat Bahat </strong></span><span style="font-size:11pt">- </span><span style="font-size:11pt">OHSAD Başkanı</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">10:55 - 11:10</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px">Soru - Cevap - Değerlendirme</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:40px; text-align:left;"><span style="font-size:15px"><strong>11:10-12:00</strong></span></td>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;  "><span style="font-size:15px"><strong>PANEL 4: OBEZİTENİN FİNANSAL Y&Uuml;K&Uuml;<br />
			Oturum Başkanı: B&uuml;lent Antmen - <span style="font-size:11pt">Acıbadem Adana Hastanesi, &Ccedil;ocuk Hastalıkları Uzmanı</span></strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">11:10 - 11:30</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Simten Malhan - </strong></span><span style="font-size:11pt">Başkent &Uuml;niversitesi Sağlık Bilimleri Fak&uuml;ltesi Dekanı</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">11:30 - 11:50</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>&Ouml;mer Buğra Bahadır </strong></span><span style="font-size:11pt">- </span><span style="font-size:11pt">
                                                        Novo Nordisk Klinik Medikal ve Ruhsatlandırma Direkt&ouml;r&uuml;</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">11:50 - 12:00</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px">Soru - Cevap - Değerlendirme</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:23px; text-align:left;"><span style="font-size:15px">12:00-13:30</span></td>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;"><span style="font-size:15px">&Ouml;ğle Yemeği</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:35px; text-align:left;"><span style="font-size:15px"><strong>13:30-14:30</strong></span></td>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;"><span style="font-size:15px"><strong>Sunay Akın İle Söyleşi</strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:40px; text-align:left;"><span style="font-size:15px"><strong>14:30-16:10</strong></span></td>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;  "><span style="font-size:15px"><strong>PANEL 5: HASTANELERDE BUG&Uuml;N VE GELECEK<br />
			Oturum Başkanı: Ali Haberal - <span style="font-size:11pt">Başkent &Uuml;nivesitesi Sağlık Kuruluşları Direkt&ouml;r&uuml;</span></strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">14:30 - 14:50</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>G&ouml;khan Tuna &Ouml;zt&uuml;rk </strong></span><span style="font-size:11pt">- </span><span style="font-size:11pt">Genel Sağlık Sigortası Genel M&uuml;d&uuml;r&uuml;</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">14:50 - 15:10</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Serhat &Uuml;nal</strong></span><span style="font-size:11pt"> - </span><span style="font-size:11pt">Hacettepe &Uuml;niversitesi Tıp Fak&uuml;ltesi Rekt&ouml;r Yardımcısı</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">15:10 - 15:30</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Ahmet Demircan </strong></span><span style="font-size:11pt">- </span><span style="font-size:11pt">Gazi &Uuml;niversitesi Başhekimi</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">15:30 - 15:50</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Uğur Gen&ccedil;</strong></span><span style="font-size:11pt"> - </span><span style="font-size:11pt">Memorial Sağlık Grubu CEO</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">15:50 - 16:10</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;"><span style="font-size:15px">Soru - Cevap - Değerlendirme</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">16:10-16:30</span></td>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;"><span style="font-size:15px">&Ccedil;ay - Kahve Molası</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:40px;"><span style="font-size:15px"><strong>16:30-17:50</strong></span></td>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;  "><span style="font-size:15px"><strong>PANEL 6: İLA&Ccedil; END&Uuml;STRİSİNİ GELECEKTE NE BEKLİYOR?<br />
			Oturum Başkanı: Simten Malhan - <span style="font-size:11pt">Başkent &Uuml;niversitesi Sağlık Bilimleri Fak&uuml;ltesi Dekanı</span></strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px;"><span style="font-size:15px">16:30 - 16:50</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Tuncay Alkan</strong></span><span style="font-size:11pt"> - </span><span style="font-size:11pt">Genel Sağlık Sigortası Genel M&uuml;d&uuml;rl&uuml;ğ&uuml;, İla&ccedil; Daire Başkanı</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px;"><span style="font-size:15px">16:50 - 17:10</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>G&ouml;zde G&uuml;ll&uuml;oğlu</strong></span><span style="font-size:11pt"> - </span><span style="font-size:11pt">MSD T&uuml;rkiye Genel M&uuml;d&uuml;r&uuml;</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">17:10 - 17:30</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Oğuz Akandil</strong></span><span style="font-size:11pt"> - </span><span style="font-size:11pt">Nobel İla&ccedil; Genel M&uuml;d&uuml;r&uuml;</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">17:30 - 17:50</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;"><span style="font-size:15px">Soru - Cevap - Değerlendirme</span></td>

                                        </tr>
                                        <tr>
                                            <td colspan="2" style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:20px; text-align:center;"><span style="font-size:15px">&nbsp;</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px"><strong>20:30-23:30</strong></span></td>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;"><span style="font-size:15px"><strong>Gala Yemeği &amp; Orkestra Programı</strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="height:20px; text-align:left;">&nbsp;</td>
                                            <td style="text-align:left;">&nbsp;</td>

                                        </tr>
                                        <tr>
                                            <td colspan="2" style="background-color:#00509d ; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:25px; text-align:center;"><span style="font-size:19px"><span style="color:white"><strong>5 KASIM 2022, CUMARTESİ</strong></span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px"><strong>SAAT&nbsp;</strong></span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black;  text-align:center;"><span style="font-size:15px"><strong>KONU/KONUŞMACI</strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:61px;"><span style="font-size:15px"><strong>09:30-10:45</strong></span></td>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;  "><span style="font-size:15px"><strong>PANEL 7: GELECEĞİN SAĞLIĞI SAĞLIĞIN GELECEĞİ<br />
			Oturum Başkanı: Metin &Ccedil;akmak&ccedil;ı</strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">09:30-09:50</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Tolga Tuncer</strong></span><span style="font-size:11pt"> - </span><span style="font-size:11pt">G&uuml;ven Future Genel M&uuml;d&uuml;r&uuml;</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">09:50-10:10</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Mehmet Ali Kaşifoğlu</strong></span><span style="font-size:11pt"> - </span><span style="font-size:11pt">Hacettepe &Uuml;niversitesi Tıp Fak&uuml;ltesi Tıbbi Genetik Anabilim Dalı Başkanı&nbsp;</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">10:10-10:30</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Cem Sungur</strong></span><span style="font-size:11pt"> - </span><span style="font-size:11pt">Acıbadem &Uuml;niversitesi &Ouml;ğretim G&ouml;revlisi</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">10:30-10:45</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;"><span style="font-size:15px">Soru - Cevap - Değerlendirme</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">10:45-11:00</span></td>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;"><span style="font-size:15px">&Ccedil;ay - Kahve Molası</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:60px;"><span style="font-size:15px"><strong>11:00-12:00</strong></span></td>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;  "><span style="font-size:15px"><strong>PANEL 8 : YAŞLANAN N&Uuml;FUS VE ARTAN SAĞLIK HARCAMALARI<br />
			Oturum Başkanı: Vildan Kandemir B&uuml;t&uuml;n - <span style="font-size:11pt">Okyanus Yaşlı Bakım Merkezleri Kurucusu ve Uluslararası Geriatri Danışmanı</span></strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px;"><span style="font-size:15px">11:00-11:15</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>B&uuml;lent Saka </strong></span><span style="font-size:11pt">- </span><span style="font-size:11pt">İstanbul &Uuml;niversitesi İstanbul Tıp Fak&uuml;ltesi İ&ccedil; Hastalıkları&nbsp;</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px;"><span style="font-size:15px">11:15-11:30</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="color:red"><span style="font-size:11pt"><strong>Murat İş&ccedil;i</strong></span> <span style="font-size:11pt"><span style="color:red">-</span></span><span style="font-size:11pt"> Nestle Health Science T&uuml;rkiye Medikal Departman Y&ouml;neticisi</span></span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px;"><span style="font-size:15px">11:30-11:45</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>&Ouml;zden G&uuml;d&uuml;k</strong></span><span style="font-size:11pt"> - </span><span style="font-size:11pt">Y&uuml;ksek İhtisas &Uuml;niversitesi Dr.&Ouml;ğr. &Uuml;yesi</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px;"><span style="font-size:15px">11:45-12:00</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px">Soru - Cevap - Değerlendirme</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">12:00-13:30</span></td>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;"><span style="font-size:15px">&Ouml;ğle Yemeği</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">12:00-14:00</span></td>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;"><span style="font-size:15px">B2B</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:40px;"><span style="font-size:15px"><strong>14:00-15:00</strong></span></td>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;  "><span style="font-size:15px"><strong>TEMA KONUŞMACISI 2<br />
			                                Konuşmacı: Mustafa &Ccedil;etiner - <span style="font-size:11pt">Acıbadem Maslak Hastanesi, Hematoloji Uzmanı</span></strong></span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">15:00-15:15</span></td>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;"><span style="font-size:15px">&Ccedil;ay - Kahve Molası</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:40px;"><span style="font-size:15px"><strong>15:15 - 16:30</strong></span></td>
                                            <td style="background-color:#e7e6e6; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;  "><span style="font-size:15px"><strong>PANEL 9 : TIBBİ CİHAZ VE MALZEME SEKT&Ouml;R&Uuml;NDEKİ SORUNLAR VE &Ccedil;&Ouml;Z&Uuml;M &Ouml;NERİLERİ<br />
			                                    Oturum Başkanı: Kemal Yaz - <span style="font-size:11pt">T&Uuml;MDEF Y&ouml;netim Kurulu Başkanı</span></strong></span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">15:15 - 15:30</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Fatih Topuz</strong></span><span style="font-size:11pt"> - </span><span style="font-size:11pt">TİTCK Tıbbi Cihaz Onaylanmış Kuruluş ve Klinik Araştırmalar Dairesi Başkanı</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">15:30 - 15:45</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Mustafa Yıldırım</strong></span><span style="font-size:11pt"> -&nbsp; </span><span style="font-size:11pt">GE Healthcare TCA Genel M&uuml;d&uuml;r&uuml;</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">15:45 - 16:00</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Serhan Acar </strong></span><span style="font-size:11pt">- </span><span style="font-size:11pt">Boston Scientific T&uuml;rkiye,Orta Asya ve Pakistan B&ouml;lge Direkt&ouml;r&uuml;</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">16:00 - 16:15</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px"><span style="font-size:11pt"><strong>Uğur Mumay </strong></span><span style="font-size:11pt">- </span><span style="font-size:11pt">SEİS Y&ouml;netim Kurulu Başkan Yardımcısı</span></span></td>

                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">16:15 - 16:30</span></td>
                                            <td style="border-bottom:1px solid black;  border-right:1px solid black; "><span style="font-size:15px">Soru - Cevap - Değerlendirme</span></td>

                                        </tr>
                                        <tr>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black;  height:20px; text-align:left;"><span style="font-size:15px">16:30-16:45</span></td>
                                            <td style="background-color:#ffc000; border-bottom:1px solid black;  border-right:1px solid black;  text-align:left;"><span style="font-size:15px">Kapanış</span></td>

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

