@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">

      <div class="card border-0 shadow">
        <div class="card-body">
        <form action="{{route('')}}" enctype="multipart/form-data" method="POST">
          @csrf
          @if(session('success'))
            <div class="alert alert-success">
              {{ session('success')}}
            </div>
            @endif
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="" name=""class="form-control"  placeholder="">
                </div>

              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email"  class="form-control" id="" placeholder="" >
                </div>
        
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="">Level</label>
                    <input type="text" name="bagian" id="" class="form-control" placeholder="">
                </div>
            <div class="pt-2 mb-2">
              <button type="submit" class="btn btn-outline-info">
                  Save
              </button>
            </div>
         </form>
     </div>
 </div>
     </div>
            </div>
         </div>
@endsection