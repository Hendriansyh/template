@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Orangtua</h1></center>
	<div class="panel-heading">
	<div class="panel-panel-primary"
		Data Orangtua
		<div class="panel-title pull-right">
		<a href="{{URL::previous()}}">Kembali</a></div>
		</div>
		<div class="panel-body">
			<form action="{{route('orangtua.update',$ortu->id)}}" method="POST">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_field()}}">
				
				<div class="form-group">
					<label class="control-lable">Nama Ayah</label>
					<input type="text" name="a" class="form-control" value="{{$ortu->nama_ayah}}" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama Ibu</label>
					<input type="text" name="b" class="form-control" value="{{$ortu->nama_ibu}}"required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Umur Ayah</label>
					<input type="text" name="c" class="form-control" value="{{$ortu->umur_ayah}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Umur Ibu</label>
					<input type="text" name="d" class="form-control" value="{{$ortu->umur_ibu}}" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea class="form-control" rows="10" name="e" required="">{{$ortu->alamat}}
					</textarea>
					</div>
				<div class="form-group">
					<button type="submit" class="btn btn-succes">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>




			</form>


		</div>

	</div>




</div>
@endsection