@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">	
	<center><h1>Data Anak</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Orang tua
		<div class="panel-title pull-right">
			<a href="{{URL::previous() }}">Kembali</a></div>
			</div>
			
			<div class="panel-body">
				<form action="{{route('anak.update',$anak->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-label">Nama</label>
						<input type="text" name="a" class="form-control" required="" value="{{$anak->nama}}">
					</div>

					<div class="form-group">
						<label class="control-label">umur</label>						
						<input type="text" name="b" class="form-control" required="" value="{{$anak->umur}}">
					</div>

					<div class="form-group">
						<label class="control-label">alamat</label>
						<textarea type="text" name="c" class="form-control" required="" value="{{$anak->alamat}}"></textarea>
					</div>

					<div class="form-group">
					<label class="control-label">nama orangtua</label>
					<select class="form-control" name="d">
					@foreach($ortu as $data)
					<option value="{{$data->id}}">{{$data->nama_ayah}} dan {{$data->nama_ibu}}</option>
					@endforeach
					</select>
				</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>

				</form>
				
			</div>
			</div>
			</div>
			</div>
@endsection