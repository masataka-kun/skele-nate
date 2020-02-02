<!-- エラーメッセージ。なければ表示しない -->
@if ($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<!-- フォーム -->
<!-- <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
     @csrf -->
<!-- アップロードした画像。なければ表示しない -->
<!-- @isset ($filename) -->
<!-- <div>
        <img src="{{ asset('storage/' . $filename) }}">
    </div>
    @endisset -->

<!-- <label for="photo">画像ファイル:</label>
    <input type="file" class="form-control" name="file">
    <br>
    <hr>
     {{ csrf_field() }} 
    <button class="btn btn-success"> Upload </button> -->
<!-- </form> -->
<!-- <form action="/bbs" method="POST" enctype="multipart/form-data" class="post_form">
    <img src="data:image/png;base64,<?= image ?>">
    <div class="form_parts">
        <input type="file" name="image">
        <br>
        <br>
        <textarea name="comment" rows="4" cols="40"></textarea>
        <br>
        {{ csrf_field() }}
        <button class="btn btn-success">投稿</button>
    </div>
</form> -->
<form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
    @csrf
    <input id="image" type="file" name="image">
    <button type="submit">
        アップロード
    </button>
</form>
@foreach($images as $image)
<div>
    <img src="data:image/png;base64,{{ $image->image }}" alt="image" style="width: 30%; height: auto;">
</div>
@endforeach