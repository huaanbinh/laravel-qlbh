extends('sanpham/them_moi')
extends('sanpham/them_moi')
@section('upload')
<form method="POST" action="{{route('do-multiupload')}}" enctype="multipart/form-data">
@csrf
    <input type="file" multiple name="hinh_anh[]"/>
    <button type="submit">
        Upload
    </button>
</form>
@endsection