



@extends('layout.app')

@section('conten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{$guru->nama }}</div>

                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Kelas</td>
                                    <td>{{$guru->kelas }}</td>
                                </tr>
                                <tr>
                                    <td>NIS</td>
                                    <td>{{$guru->nis }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>{{$guru->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>{{$guru->alamat }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="{{ route('guru.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
