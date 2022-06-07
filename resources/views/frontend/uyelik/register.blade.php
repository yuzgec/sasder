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
                                    <input value="{{old('tckn')}}" type="text" class="form-control h-auto py-2 @if($errors->has('tckn')) is-invalid @endif" name="tckn"/>
                                    @if($errors->has('tckn'))
                                        <div class="invalid-feedback">{{$errors->first('tckn')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label class="form-label">Adı <span class="text-color-danger">*</span></label>
                                    <input value="{{old('name')}}" type="text" class="form-control h-auto py-2 @if($errors->has('name')) is-invalid @endif" name="name"/>
                                    @if($errors->has('name'))
                                        <div class="invalid-feedback">{{$errors->first('name')}}</div>
                                    @endif
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label class="form-label">Soyadı <span class="text-color-danger">*</span></label>
                                    <input value="{{old('surname')}}" type="text" class="form-control h-auto py-2 @if($errors->has('surname')) is-invalid @endif" name="surname"/>
                                    @if($errors->has('surname'))
                                        <div class="invalid-feedback">{{$errors->first('surname')}}</div>
                                    @endif
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label class="form-label">Doğrum Tarihi <span class="text-color-danger">*</span></label>
                                    <input value="{{old('birthday')}}" type="date" class="form-control h-auto py-2 @if($errors->has('birthday')) is-invalid @endif" name="birthday"/>
                                    @if($errors->has('birthday'))
                                        <div class="invalid-feedback">{{$errors->first('birthday')}}</div>
                                    @endif
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label class="form-label">Eğitim Durumu <span class="text-color-danger">*</span></label>
                                    <div class="custom-select-1">
                                        <select class="form-select form-control h-auto py-2" name="education" required>
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
                                    <input value="{{old('workplace')}}"  type="text" class="form-control h-auto py-2 @if($errors->has('workplace')) is-invalid @endif" name="workplace" />
                                    @if($errors->has('workplace'))
                                        <div class="invalid-feedback">{{$errors->first('workplace')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-label">Görevi <span class="text-color-danger">*</span></label>
                                    <input value="{{old('mission')}}"  type="text" class="form-control h-auto py-2  @if($errors->has('mission')) is-invalid @endif"  name="mission" />
                                    @if($errors->has('mission'))
                                        <div class="invalid-feedback">{{$errors->first('mission')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label class="form-label">Cep Telefonu <span class="text-color-danger">*</span></label>
                                    <input value="{{old('phone')}}"  type="text" class="form-control h-auto py-2  @if($errors->has('phone')) is-invalid @endif" name="phone"/>
                                    @if($errors->has('phone'))
                                        <div class="invalid-feedback">{{$errors->first('phone')}}</div>
                                    @endif
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label class="form-label">Web Sayfası <span class="text-color-danger">*</span></label>
                                    <input type="text" class="form-control h-auto py-2" name="webpage"/>

                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Yıllık Aidat Tutarı <span class="text-color-danger">*</span></label>
                                    <input  type="text" class="form-control h-auto py-2" name="aidat" value="50₺" disabled/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Email Adresi <span class="text-color-danger">*</span></label>
                                    <input value="{{old('email')}}"  type="email" class="form-control h-auto py-2  @if($errors->has('email')) is-invalid @endif"  name="email"/>
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">{{$errors->first('email')}}</div>
                                    @endif

                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label">Parola<span class="text-color-danger">*</span></label>
                                    <input type="password" class="form-control h-auto py-2  @if($errors->has('password')) is-invalid @endif"  name="password"/>
                                    @if($errors->has('password'))
                                        <div class="invalid-feedback">{{$errors->first('password')}}</div>
                                    @endif
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
                                @if($errors->has('onay'))
                                    <div class="invalid-feedback">{{$errors->first('onay')}}</div>
                                @endif
                                <label for="onay" class="text-1">&nbsp;&nbsp; Üyelik <a data-bs-toggle="modal" data-bs-target="#largeModal" style="">şartlarını</a> okudum kabul ederim.</label><br>
                                <button type="submit" class="btn btn-primary btn-modern" style="margin-left:15px">Başvuru Formunu Onayla</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
        <div class="col-md-3"></div>
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
