@extends('backend.layout.app')
@section('title', 'Konuşmacı Ekle')
@section('content')

    <div class="col-12 col-md-9">
        <div class="card">
            {{Form::open(['route' => 'speaker.store', 'enctype' => 'multipart/form-data'])}}
                <input type="hidden" name="project_id" value="{{ request('project_id') }}">
                <div class="card-header d-flex justify-content-between">
                    <x-add title="Konuşmacı"></x-add>
                    <div>
                        <a href="{{ route('speaker.index') }}" class="btn btn-tabler btn-sm btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
                            Konuşmacı Listesi
                        </a>

                        <x-back></x-back>
                        <x-save></x-save>
                    </div>
                </div>
                <div class="card-body">
                    <x-form-inputtext label="Konuşmacı Adı" name="speaker_name"/>
                    <x-form-inputtext label="Konu" name="speaker_subject"/>

                    <x-form-inputtext label="Konuşmacı Title" name="speaker_title"/>
                    <x-form-inputtext label="Görev Yeri" name="speaker_education"/>

            </div>

        </div>
    </div>

    <div class="col-12 col-md-3">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="15" y1="8" x2="15.01" y2="8" /><rect x="4" y="4" width="16" height="16" rx="3" /><path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" /><path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" /></svg>
                    Konuşmacı Kapak Resim
                </h4>
            </div>

            <div class="p-2">
                <x-form-file label="" name="image"></x-form-file>
            </div>
        </div>

        
    </div>
    {{Form::close()}}
@endsection

@section('customJS')
    <script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace( 'aciklama', {
            filebrowserUploadUrl: "{{ route('speaker.postUpload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
            height : 400,
            toolbar: [
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold']},
                { name: 'paragraph',items: [ 'BulletedList']},
                { name: 'colors', items: [ 'TextColor' ]},
                { name: 'styles', items: [ 'Format', 'FontSize']},
                { name: 'links', items : [ 'Link', 'Unlink'] },
                { name: 'insert', items : [ 'Image', 'Table']},
                { name: 'document', items : [ 'Source','Maximize' ]},
                { name: 'clipboard', items : [ 'PasteText', 'PasteFromWord' ]},
            ],
        });
    </script>
@endsection
