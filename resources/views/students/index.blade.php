@extends ('layout/main')

@section('title','Daftar Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <div class="mt-3">
          <h1>Daftar Mahasiswa</h1>
          <a href="/students/create" class="btn btn-primary my-1">Tambah Data</a>

          @if(session('status'))
            <div class="alert alert-success">
              {{session('status')}}
            </div>
          @endif
          <table class="table table-bordered border-primary">
              <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Action</th>

                </tr>
              </thead>
              <tbody>
                  @foreach($students as $student)
                  <tr>
                      <th scope="row">{{$student->id}}</th>
                      <th scope="row">{{$student->nama}}</th>
                      <th scope="row">{{$student->NIM}}</th>
                      <td>
                      <a href="/students/{{$student->id}}"><button type="button" class="btn btn-info">Detail</button></a>
                      
                    @endforeach
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>    
  </div>
@endsection