@extends('template.home')
@section('content')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success')}}
</div>
@endif

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
                        <form action="{{ route('trash.hapus_permanent', $hasil->id )}} " method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('trash.restore', $hasil->id )}} " class="btn btn-info btn-sm">Restore</a>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $trash->links() }}

@endsection
