@extends('admin.master')
@section('content')

<form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name"  aria-describedby="Name" >
    </div>
    <button type="submit" class="btn btn-primary">Tạo mới</button>
    <button type="reset" class="btn btn-warning">Nhập lại</button>
</form>
@endsection