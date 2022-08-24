@extends('admin.master')


@section('content')
<form action="{{route('admin.category.update', $category->id)}}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" value="{{$category->name}}" name="name"  aria-describedby="name" >
       
    </div>
    <button type="submit" class="btn btn-primary">Sửa mới</button>
    <button type="reset" class="btn btn-warning">Nhập lại</button>
</form>
@endsection