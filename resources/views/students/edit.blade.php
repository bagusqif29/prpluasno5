@extends ('layout/main')

@section('title','Ubah Data')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Form Ubah Data</h1>
        <form method="post" action="/students/{{$student->id}}">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="nama">Nama </label>
            <input type="text" class="form-control " id ="nama"
            placeholder="Masukan nama" name="nama" value="{{$student->nama}}">
        </div>
        <div class="form-group">
            <label for="nama">NIM </label>
            <input type="number" class="form-control " id ="NIM"
            placeholder="Masukan NIM (10 digit)" name="NIM"  value="{{$student->NIM}}">
        </div>
        <div class="form-group">
            <label for="nama">Jurusan </label>
            <input type="text" class="form-control " id ="Jurusan"
            placeholder="Masukan Jurusan" name="Jurusan"  value="{{$student->Jurusan}}">
        </div>
        <div class="form-group">
            <label for="nama">Email </label>
            <input type="email" class="form-control " id ="email"
            placeholder="Masukan Email" name="email"  value="{{$student->email}}">
        </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
    
          
        </div>
      </div>
    </div>    
  </div>
@endsection