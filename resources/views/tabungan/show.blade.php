@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">show Siswa</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}

                        <div class="row">
                            <div class="col-md-4">
                                <label for=""> Nama Siswa</label>

                            </div>
                            <div class="col-md-12">
                            <input type="text" value="{{$data->siswa->nama}}" readonly name="nama" >

                            </div>
                            <div class="col-md-4">
                                <br>
                                <label for="">kelas</label>

                            </div>
                            <div class="col-md-12">
                                <input type="text" value="{{$data->siswa->kelas}}" readonly name="kelas">

                            </div>
                            <div class="col-md-4">
                                <br>
                                <label for=""> uang</label>
                                <div class="col-md-20">
                                <input class="form-control" type="text" name="jumlah_uang"
                            value="{{$data->jumlah_uang}}" required>


                            </div>


                        </div>
                        <br>

                    <a href="{{route('tabungan.index')}} " class="btn btn-danger" class="form-control">kembali</a>
                        <br>

                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
