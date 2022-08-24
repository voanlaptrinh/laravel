@extends('admin.master')
@section('content')
    <div class="">
        <a href="{{route('admin.product.create')}}"><button class="btn btn-success">Tạo mới</button></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>images</th>
                {{-- <th>describe</th> --}}
                <th>category_id</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th colspan="2">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
                <tr>


                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nameProduct }}</td>
                    <td>{{ $item->price }}</td>
                    {{-- <td>{{ $item->status }}</td> --}}
                    <td>
                        @if ($item->status == 1)
                        <a href="{{ route('admin.product.status', $item) }}"><button class="btn btn-primary">Hết hàng</button></a>
                    @else
                        <a href="{{ route('admin.product.status', $item) }}"><button class="btn btn-success">Còn hàng</button></a>
                    @endif
                    <td><img src="{{asset($item->images) }}" alt="" width="80px"></td>
                    {{-- <td>{{ $item->describe }}</td> --}}
                    <td>{{isset($item->category) ? $item->category->name : ''}}</td>

                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>

                    <td>
                        <form action="{{ route('admin.product.edit', $item->id) }}" method="post">
                            @csrf
                            @method('GET')
                            <button class="btn btn-warning">Chỉnh sửa</button>

                        </form>
                    </td>
        
                    <td>
                        <form action="{{ route('admin.product.delete', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Xóa</button>

                        </form>
                    </td>



                </tr>
            @endforeach
          
        </tbody>
       
    </table>
    <div >
        {{ $product->links()}}
     </div>
@endsection
