@extends ('layout/main')

@section('title','About')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <div class="mt-3">
          <table>
          <h5>
            <tr>
              <td>
                Nama
              </td>
              <td>
                :
              </td>
              <td>
                {{$nama}}
              </td>
            </tr>
          </h5>
          <h5>
            <tr>
              <td>
                NIM
              </td>
              <td>
                :
              </td>
              <td>
                {{$NIM}}
              </td>
            </tr>
          </h5>
          <h5>
            <tr>
              <td>
                Matkul
              </td>
              <td>
                :
              </td>
              <td>
                {{$matkul}}
              </td>
            </tr>
          </h5>
          <h5>
            <tr>
              <td>
                Kelas
              </td>
              <td>
                :
              </td>
              <td>
                {{$kelas}}
              </td>
            </tr>
          </h5>
          </table>
        </div>
      </div>
    </div>    
  </div>
@endsection