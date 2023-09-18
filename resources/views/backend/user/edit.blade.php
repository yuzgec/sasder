@extends('backend.layout.app')
@section('title', $Edit->getUser->name.' '. $Edit->surname .' | Kullanıcı Düzenle')
@section('content')
    {{Form::model($Edit, ["route" => ["user.update", $Edit->id],'enctype' => 'multipart/form-data'])}}
    @method('PUT')
    <div class="row">
        <div class="col-12 col-md-9">

            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="d-flex">
                        <h4 class="card-title justify-content-center align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            Kullanıcı Düzenle [ {{$Edit->getUser->name.' '. $Edit->surname }}]
                        </h4>
                    </div>
                    <div>
                        <a class="btn btn-tabler btn-sm p-2" href="{{  url()->previous() }}" title="Geri">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 18v-6a3 3 0 0 0 -3 -3h-10l4 -4m0 8l-4 -4" /></svg>
                            Geri
                        </a>
                        <button class="btn btn-tabler btn-sm p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
                            Kaydet
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <x-form-inputtext label="TCKN" name="tckn"/>


                    <div class="form-group mb-3 row">
                        <label class="form-label col-2 col-form-label">Adı</label>
                        <div class="col">
                            <input class="form-control" type="text" value="{{ $Edit->getUser->name }}">
                        </div>
                    </div>

                    <x-form-inputtext label="Soyadı" name="surname"/>
                    <x-form-inputtext label="D.Tarihi" name="birthday"/>

                   <div class="form-group mb-3 row">
                        <label class="form-label col-2 col-form-label">Email</label>
                        <div class="col">
                            <input class="form-control" type="text" value="{{ $Edit->getUser->email }}">
                        </div>
                    </div>

                    <div class="form-group mb-3 row">
                        <label class="form-label col-2 col-form-label">Telefon</label>
                        <div class="col">
                            <input class="form-control" type="text" value="{{ $Edit->getUser->phone }}">
                        </div>
                    </div>

                    <x-form-inputtext label="Çalıştığı Yer" name="workplace"/>
                    <x-form-inputtext label="Görevi" name="mission"/>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="15" y1="8" x2="15.01" y2="8" /><rect x="4" y="4" width="16" height="16" rx="3" /><path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" /><path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" /></svg>
                        Kullanıcı Resim
                    </h4>
                </div>
                <div class="card-body justify-content-center align-items-center">
                        <div class="col">
                            <img src="{{ (!$Edit->getFirstMediaUrl('slider')) ? '/backend/resimyok.jpg': $Edit->getFirstMediaUrl('slider')}}" class="img-fluid mb-2 mt-2" alt="Image">
                        </div>
                        <x-form-file label="" name="image"></x-form-file>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('customJS')
    <script type="text/javascript">
        $(document).ready(function() {
            $("img").addClass("img-fluid");
        })
    </script>
@endsection
