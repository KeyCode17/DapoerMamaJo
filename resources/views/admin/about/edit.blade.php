@extends('admin.layouts.main')
@section('custom_title')
    {{ $about->title }}
@endsection
@section('adminstyles')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
@endsection
@section('admincontent')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit About</h1>
    </div>
    <div class="col-lg-8">
        <a href="/dashboard/about" class="btn btn-success"><span data-feather="arrow-left"></span> Back</a>
        <form method="POST" action="/dashboard/about/{{ $about->slug }}" enctype="multipart/form-data" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <input type="hidden" name="oldIcon" value="{{ $about->icon }}" readonly>
            </div>
            <div class="mb-3">
                <label for="index" class="form-label">Image</label>
                <input type="hidden" name="oldIndex" value="{{ $about->index }}">
                <img src="{{ Storage::url($about->index) }}" class="d-block index-preview img-fluid mb-3 col-sm-3 col-md-4 col-lg-5">
                <input class="form-control @error('index') is-invalid @enderror" name="index" type="file"
                    id="index" onchange="previewIndex()">
                @error('index')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $about->body) }}">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-5">Update</button>
        </form>
    </div>
    <script>
        function previewIcon(){
            const icon = document.querySelector('#icon');
            const iconPreview = document.querySelector('.icon-preview');

            iconPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(icon.files[0]);

            oFReader.onload = function(oFREvent){
                iconPreview.src = oFREvent.target.result;
            }
        }

        function previewIndex(){
            const index = document.querySelector('#index');
            const indexPreview = document.querySelector('.index-preview');

            indexPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(index.files[0]);

            oFReader.onload = function(oFREvent){
                indexPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection