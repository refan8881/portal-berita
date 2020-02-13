@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit Siswa</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}
                        <form action="{{route('Siswa.update', $siswa->id)}}"method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Masukan Nama Siswa</label>

                            </div>
                            <div class="col-md-12">
                                <input type="text" value="{{$siswa->nama}}"name="nama" required>

                            </div>
                            <div class="col-md-4">
                                <br>
                                <label for="">Masukan kelas</label>

                            </div>
                            <div class="col-md-12">
                                <input type="text" value="{{$siswa->kelas}}"name="kelas"required>

                            </div>

                        </div>
                        <br>
                        <button class="btn btn-primary"type="submit">Simpan</button>
                        <button class="btn btn-primary"type="reset">reset</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
