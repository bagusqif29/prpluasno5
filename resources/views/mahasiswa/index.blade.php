@extends ('layout/main')

@section('title','Daftar Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <div class="mt-3">
          <h1>Daftar Mahasiswa</h1>

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
                  @foreach($mahasiswa as $mhs)
                  <tr>
                      <th scope="row">{{$mhs->id}}</th>
                      <th scope="row">{{$mhs->nama}}</th>
                      <th scope="row">{{$mhs->NIM}}</th>
                      <td>
                      <a href="/students/1"><button type="button" class="btn btn-info">Detail</button></a>
                      
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