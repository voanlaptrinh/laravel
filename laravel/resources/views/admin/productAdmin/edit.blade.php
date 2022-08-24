@extends('admin.master')


@section('content')
    <form action="{{route('admin.product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" value="{{$product->nameProduct}}" name="nameProduct"  aria-describedby="nameProduct" >
            @if ($errors->has('nameProduct'))
            <span style="color: red">{{ $errors->first('nameProduct') }}</span>
        @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Pice</label>
            <input type="number" class="form-control" value="{{$product->price}}" name="price"  aria-describedby="Pice">
            @if ($errors->has('price'))
            <span style="color: red">{{ $errors->first('price') }}</span>
        @endif
        </div>
        <div class="mb-3">
            <label class="form-label">status</label><br>
            <input type="radio"  name="status" value="0" {{$product->status == 0 ? 'checked':''}}>Còn hàng
            <input type="radio"  name="status" value="1" {{$product->status == 1 ? 'checked':''}}>Hết hàng
            @if ($errors->has('status'))
            <span style="color: red">{{ $errors->first('status') }}</span>
        @endif
        </div>
        
        <div class="mb-3">
            <label class="form-label">Ảnh đại diện</label>
            <img class="" src="{{asset($product->images)}}" name="avatar" alt="" width="250px">
            <input type="hidden" class="form-control" value="{{$product->images}}" name="avatar" aria-describedby="avatar">
            <input type="file" class="form-control" value="" name="avatar_up" aria-describedby="avatar">
            @if ($errors->has('avatar'))
            <span style="color: red">{{ $errors->first('avatar') }}</span>
        @endif
        </div>
        <div class="mb-3">
            <label class="form-label">describe</label>
            <input type="text" class="form-control" value="{{$product->describe}}" name="describe"  aria-describedby="describe">
            @if ($errors->has('describe'))
            <span style="color: red">{{ $errors->first('describe') }}</span>
        @endif
        </div>
     
        
        <div class="mb-3">
            <label class="form-label">category_id</label>
            <select name="category_id" id="">
                @foreach ($category_id as $item)
                <option {{$product->category_id == $item->id ? 'selected':''}} value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        

        <button type="submit" class="btn btn-primary">Tạo mới</button>
        <button type="reset" class="btn btn-warning">Nhập lại</button>
    </form>
    
@endsection