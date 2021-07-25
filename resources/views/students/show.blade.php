@extends ('layout/main')

@section('title','Detail Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <div class="mt-3">
          
          <div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><h4>Detail Mahasiswa</h4></li>
    <li class="list-group-item">{{$student->nama}}<br> {{$student->NIM}}<br> {{$student->Jurusan}}<br> {{$student->email}}</li>
    <li class="list-group-item"> 
        <a href="{{$student->id}}/edit" class="btn btn-success">Edit</a>

        <form action="{{$student->id}}" method="post" class="d-inline">
          @method('delete')
          @csrf
        <button type="submit" class="btn btn-danger">Delete</button></a></li>
        <a href="/students">Kembali</a>
        </form>
        
      </ul>
</div>
          
        </div>
      </div>
    </div>    
  </div>
@endsection