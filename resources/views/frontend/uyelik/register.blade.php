@extends('frontend.layout.app')
@section('title', 'Üye Ol | '.config('app.name'))
@section('content')
    @include('frontend.layout.header2')
    <div class="container container-xl-custom py-4 mb-3 mt-2"  style="background:#ced4da">

        <div class="row mb-2">
            <div class="col-md-3"></div>
            <div class="col-12 col-md-6">
                <div class="text-center">
                    <h2 class="font-weight-bold text-7 mt-2 mb-0">SAĞLIK VE SİGORTA YÖNETİCİLERİ DERNEĞİ (SASDER) <br>ÜYE BAŞVURU FORMU</h2>
                </div>
                <form role="form" class="needs-validation p-3 " method="post" action="{{ route('uyeol') }}" >
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-4 mb-lg-0">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">T.C. Kimlik No <span class="text-color-danger">*</span></label>
                                    <input type="text" class="form-control h-auto py-2" name="tckn"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label class="form-label">Adı <span class="text-color-danger">*</span></label>
                                    <input type="text" class="form-control h-auto py-2" name="name"/>
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label class="form-label">Soyadı <span class="text-color-danger">*</span></label>
                                    <input type="text" class="form-control h-auto py-2" name="surname"/>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label class="form-label">Doğrum Tarihi <span class="text-color-danger">*</span></label>
                                    <input type="date" class="form-control h-auto py-2" name="birthday"/>
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label class="form-label">Eğitim Durumu <span class="text-color-danger">*</span></label>
                                    <div class="custom-select-1">
                                        <select class="form-select form-control h-auto py-2" name="education">
                                            <option  selected>Seçiniz...</option>
                                            <option value="1">İlkokul</option>
                                            <option value="2">Ortaokul</option>
                                            <option value="3">Lise</option>
                                            <option value="4">Yüksekokul</option>
                                            <option value="5">Lisan</option>
                                            <option value="6">Yüksek Lisans</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-label">Çalıştığı kurum veya son çalıştığı işyeri <span class="text-color-danger">*</span></label>
                                    <input type="text" class="form-control h-auto py-2" name="workplace" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-label">Görevi <span class="text-color-danger">*</span></label>
                                    <input type="text" class="form-control h-auto py-2" name="mission" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label class="form-label">Cep Telefonu <span class="text-color-danger">*</span></label>
                                    <input type="text" class="form-control h-auto py-2" name="phone"/>
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label class="form-label">Web Sayfası <span class="text-color-danger">*</span></label>
                                    <input type="text" class="form-control h-auto py-2" name="webpage"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Yıllık Aidat Tutarı <span class="text-color-danger">*</span></label>
                                    <input type="text" class="form-control h-auto py-2" name="firstName" value="50₺" disabled/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Email Adresi <span class="text-color-danger">*</span></label>
                                    <input type="email" class="form-control h-auto py-2" name="email"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Parola<span class="text-color-danger">*</span></label>
                                    <input type="password" class="form-control h-auto py-2" name="email"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Tekrar Parola<span class="text-color-danger">*</span></label>
                                    <input type="password" class="form-control h-auto py-2" name="email"/>
                                </div>
                            </div>

                        {{--    <div class="text-center">
                                <h2 class="font-weight-bold text-7 mt-2 mb-0">YÖNETİM KURULU BAŞKANLIĞINA</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia architecto dignissimos facere nemo ab magni, blanditiis, voluptate dolores ullam omnis nulla nobis, rerum magnam laudantium impedit qui praesentium earum libero.
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia architecto dignissimos facere nemo ab magni, blanditiis, voluptate dolores ullam omnis nulla nobis, rerum magnam laudantium impedit qui praesentium earum libero.</p>
                            </div>
--}}

                        </div>

                        <div class="row">
                            <div class="form-group col d-flex align-items-center">
                                <input type="checkbox" id="onay" name="onay" value="0">
                                <label for="onay" class="text-1">&nbsp;&nbsp; KVKK şartlarını okudum kabul ederim.</label><br>
                                <button type="submit" class="btn btn-primary btn-modern" style="margin-left:15px">Başvuru Formunu Onayla</button>
                            </div>
                        </div>

                    </div>


            </form>



        </div>
            <div class="col-md-3"></div>

        </div>

    </div>

@endsection
