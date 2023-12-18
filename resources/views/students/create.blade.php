@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Form Input Data Mahasiswa</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama lengkap"></br>
        <label>NIM</label></br>
        <input type="text" name="nim" id="nim" class="form-control" placeholder="Mis.2222222222"></br>
        <label>Cita-Cita</label></br>
        <input type="text" name="citacita" id="citacita" class="form-control" placeholder="Mis.Dokter"></br>
        <label>Hobi</label></br>
        <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Mis.Belajar"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop