@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row d-flex pt-4">
        <h4 class="h2">Data Kelas</h4>
    </div>
</div> 

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card border-0">
            <div class="card-body">
              <div class="d-flex px-2 py-2">
                <div>
                <a href="" class="btn btn-warning">Tambah Kelas</a>
                </div>
              </div>
              <div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Level</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($customerss as $Customers)
                    <tr>
                        <td>({$customers->nama})</td>
                        <td>({$customers->email})</td>
                        <td>({$customers->level})</td>
                      <th>
                        <a href="" class="btn btn-primary">Detail</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                      </th>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
    
@endsection