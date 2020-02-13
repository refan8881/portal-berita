@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

             @if (session('message'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

            <div class="card">
                <div class="card-header">Ini Halaman Siswa</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}
                    <a href="{{ route('Siswa.create')}}"class="btn btn-primary"">
                    Tambah siswa
                    </a>
                    <table class="table">
                        <thead>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th >action</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->kelas}}</td>

                            <td>
                                <form action="{{ route('Siswa.destroy',$item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                            <a class="btn btn-info" href="{{route('Siswa.show',$item->id)}}">lihat</a>
                            <a class="btn btn-warning" href="{{route('Siswa.edit',$item->id)}}">edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
