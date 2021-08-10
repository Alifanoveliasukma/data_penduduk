@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Home | Data Penduduk') }}</div>

                <div class="card-body">
               
               
                <a href="/dashboard/create">Create</a>
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @elseif(session('status-danger'))
                        <div class="alert alert-danger">
                            {{ session('status-danger') }}
                        </div>
                    @endif

                    <table id="example" style="width:100%; background-color:#DEB887" class="display">
                        <thead>
                            <tr class="align-center">
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Agama</th>
                                <th>Pekerjaan</th>
                                
                                <th>Aksi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($penduduk as $dt)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dt->nik }}</td>
                                <td>{{ $dt->nama }}</td>
                                <td>{{ $dt->jk }}</td>
                                <td>{{ $dt->jalan }}, {{ $dt->rt_rw }}, desa {{ $dt->desa }}, kec {{ $dt->kecamatan }}, Kabupaten/kota {{ $dt->kabupaten }}</td>
                                <td>{{ $dt->agama }}</td>
                                <td>{{ $dt->pekerjaan }}</td>
                                <td>
                                    <a href="/dashboard/{{$dt->id}}/edit">Edit</a>
                                <form action="/dashboard/{{$dt->id}}" method="POST">
                                @method('DELETE')
                                @csrf 
                                <input type="submit" value="Delete">
                                </td>
                            
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
</form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection