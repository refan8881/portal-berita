@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">create Siswa</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}
                        <form action="{{route('tabungan.update', $data->id)}}"method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Pilih Nama Siswa</label>

                            </div>
                            <div class="col-md-8">
                                <select name="siswa_id" class="form-control">
                                    @foreach ($siswa as $item)
                                <option value="{{$item->id}}"
                                    {{$item->id == $data->siswa_id ? 'selected' : ''}} >
                                    {{$item->nama}} - {{$item->kelas}}

                                    @endforeach

                                </select>

                            </div>
                            <div class="col-md-4">
                                <br>
                                <label for="">Masukan Jumlah Uang</label>

                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="jumlah_uang"
                            value="{{$data->jumlah_uang}}" required>


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
