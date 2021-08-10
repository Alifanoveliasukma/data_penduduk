@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Tambah Data | Project Penduduk</div>
                <form action="/dashboard/{{ $penduduk->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="">
                                <label for="">NIK</label><br>
                                <input value="{{$penduduk->nik}}" class="form-control" type="number" id="" required name="nik" >
                            </div>
                            <div class="mt-2">
                                <label for="">Nama</label><br>
                                <input value="{{$penduduk->nama}}" class="form-control" type="text" id="nama" required name="nama" >
                            </div>
                            <div class="">
                                <label for="">Jenis Kelamin</label><br>
                                <select name="jk" id="jk" :value="old('jk')" class="form-control" required>
                                    <option selected disable>{{ $penduduk->jk }}</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="">Jalan</label><br>
                                <textarea class="form-control" id="jalan" required name="jalan" rows="3">{{ $penduduk->jalan }}</textarea>
                            </div>
                            <div class="mt-2">
                                <label for="">RT/RW</label><br>
                                <input value="{{$penduduk->rt_rw}}"class="form-control" type="text" id="rt_rw" required name="rt_rw">
                            </div>
                            <div class="mt-2">
                                <label for="">Desa</label><br>
                                <input value="{{$penduduk->desa}}"class="form-control" type="text" id="desa" required name="desa">
                            </div>
                            <div class="mt-2">
                                <label for="">Kecamatan</label><br>
                                <input value="{{$penduduk->kecamatan}}"class="form-control" type="text" id="kecamatan" required name="kecamatan">
                            </div>
                            <div class="mt-2">
                                <label for="">Kabupaten/Kota</label><br>
                                <input value="{{$penduduk->kabupaten}}"class="form-control" type="text" id="kabupaten" required name="kabupaten">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mt-2">
                                <label for="">Agama</label>
                                <select name="agama" id="agama" :value="old('agama')" class="form-control" required>
                                    <option selected disabled>{{ $penduduk->agama }}</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
        
                            <div class="mt-2">
                                <label for="">Pekerjaan</label><br>
                                <input value="{{$penduduk->pekerjaan}}" class="form-control" type="text" id="pekerjaan" required name="pekerjaan">
                                </div>
                        </div>
                    </div>
                    <div class="mt-2">
                    <input type="submit" Value="Save">
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection