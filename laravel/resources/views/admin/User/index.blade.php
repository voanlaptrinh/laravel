@extends('admin.master')
@section('content')
   
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>birthday</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
              
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>


                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->birthday }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    {{-- <td>{{ $item->status==0? "khóa" :"Mở" }}</td> --}}
                    <td>
                        @if ($user->status == 1)
                        <a href="{{ route('admin.users.status', $user) }}"><button class="btn btn-primary">Đang hoạt động</button></a>
                    @else
                        <a href="{{ route('admin.users.status', $user) }}"><button class="btn btn-danger">Đã khóa</button></a>
                    @endif
                    </td>
                    

                    



                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <div>
        {{ $users->links() }}
    </div> --}}
@endsection
