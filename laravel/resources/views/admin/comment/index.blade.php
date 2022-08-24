@extends('admin.master')
@section('content')
@if(session()->has('success'))
<div class="alert alert-success text-center">
  {{ session()->get('success') }}
</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Nội dung</th>
            <th colspan="2">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($comment_list as $item)
            <tr>


                <td>{{ $item->id }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->content }}</td>
                <td>{{ $item->created_at }}</td>
                
                <td>
                    <form action="{{ route('admin.comment.delete', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Xóa</button>

                    </form>
                </td>
            </tr>
        @endforeach
      
    </tbody>
   
</table>

@endsection