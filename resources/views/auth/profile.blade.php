<h1>{{ Auth::user()->name }}</h1>
<h1>{{ Auth::user()->avatar }}</h1>
<form action="{{route('postFile')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="avatar">
    <input type="submit" name="upload" value="Upload File">
</form>