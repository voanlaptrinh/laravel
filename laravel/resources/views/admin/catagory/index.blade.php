@extends('admin.master')
@section('content')
<div class="">
    <a href="{{route('admin.category.create')}}"><button class="btn btn-success">Tạo mới</button></a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th colspan="2">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $item)
            <tr>


                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
            
             
                <td>
                 <form action="{{route('admin.category.edit', ['id'=>$item->id]) }}" method="POST">
                     @csrf
                     @method('GET')
               <td> <button class="btn btn-warning">Chỉnh sửa</button></td>
                
                 </form>

                 <form action="{{route('admin.category.delete',  $item->id)}}" method="post">
                     @csrf
                     @method('DELETE')
                     <td> <button class="btn btn-danger">Xóa</button></td>
                 </form>
                 
             </td>



            </tr>
        @endforeach
    </tbody>
</table>
@endsection