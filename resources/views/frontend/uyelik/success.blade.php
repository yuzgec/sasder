@extends('frontend.layout.app')
@section('title', 'Üye Ol | '.config('app.name'))
@section('content')
    @include('frontend.layout.header2')

    <div class="container container-xl-custom py-4 mb-3 mt-2"  style="background:#ced4da">

        <div class="row mb-2">
            <div class="col-12">
                Üyelik talebimiz tarafımıza ulaşmıştır. Başvurunuz değerlendirildikten sonra mail yolu ile sizlere dönüş yapılacaktır.
            </div>
        </div>
    </div>
    @endsection
