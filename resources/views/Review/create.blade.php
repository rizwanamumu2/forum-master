@extends('layouts.master')

@section('js')
    <script>
        tinymce.init({
        selector: 'textarea#description',
        height: 500,
        plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
        });
    </script>
@endsection

@section('content')


<div class="container" style="margin-bottom:150px">
    <form  action="/review/store" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
        <div class="form-group">
            <label for="datasetName">Give A Title</label>
            <input type="text" class="form-control" id="" name="title" required>
        </div>
        
        <div class="form-group">
            <textarea name="description" id="description" class="form-control"  cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
        
    </form>
</div>

{{-- comment --}}

@endsection