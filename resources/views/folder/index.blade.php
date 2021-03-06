@extends('template.home')
@section('content')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success')}}
</div>
@endif

<a href="{{ route('trash.create')}}" class="btn btn-info btn-sm">Tambah Nama</a>
    <br><br>

    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Slug</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($trash as $result => $hasil)
            <tr>
                    <td>{{ $result + $trash->firstitem() }}</td>
                    <td>{{ $hasil->name }}</td>
                    <td>{{ $hasil->slug }}</td>
                    <td>
                        <form action="{{ route('trash.destroy' , $hasil->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('trash.edit', $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $trash->links() }}

@endsection
