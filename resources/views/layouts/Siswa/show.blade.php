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
                                <label for="">Masukan Nama Siswa</label>

                            </div>
                            <div class="col-md-12">
                            <input type="text" value="{{$siswa->nama}}" readonly name="nama" >

                            </div>
                            <div class="col-md-4">
                                <br>
                                <label for="">Masukan kelas</label>

                            </div>
                            <div class="col-md-12">
                                <input type="text" value="{{$siswa->kelas}}" readonly name="kelas">

                            </div>

                        </div>
                        <br>

                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
