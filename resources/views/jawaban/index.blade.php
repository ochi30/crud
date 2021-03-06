@extends('adminlte.master')
@section('index_jawaban')
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Kumpulan Jawaban</h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width:200px">Judul</th>
                    <th>Jawaban</th>
                    <th style="width:160px">Waktu</th>
                    <th style="width:80px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jawaban as $key => $tanya)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $tanya->judul }}</td>
                    <td>{{ $tanya->isi }}</td>
                    <td>{{ $tanya->created_at }}</td>
                    <td>
                        <a href="/jawaban/edit/{{ $tanya->id }}" class="badge bg-warning"><i class="fas fa-edit"></i></a>
                        <form action="/jawaban/{{$tanya->id }}" method="post" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="badge bg-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="ml-3">
        <a href="/pertanyaan" class="btn btn-sm btn-primary">Daftar Pertanyaan</a>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
    </div>
</div>
@endsection
