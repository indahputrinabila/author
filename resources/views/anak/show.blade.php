@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">	
	<center><h1>Data Anak</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Anak
		<div class="panel-title pull-right">
			<a href="{{URL::previous() }}">Kembali</a></div>
			</div>

			<div class = "panel-body">
				<form action="{{route('anak.show',$anak->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-label">Nama</label>
						<input type="text" name="a" class="form-control" value="{{$anak->nama}}" readonly="" >
					</div>

					<div class="form-group">
						<label class="control-label">Umur</label>						
						<input type="text" name="b" class="form-control" value="{{$anak->umur}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-label">Alamat</label>
						<input type="text" name="c" class="form-control" value="{{$anak->alamat}}" readonly="" >
					</div>

					<div class="form-group">
					<label class="control-label">nama orangtua</label>
					<input type="text" name="" class="form-control" name="d" value="{{$anak->orangtua->nama_ayah}} dan {{$anak->orangtua->nama_ibu}}" readonly="">
				</div>

					
				
<!-- 				</form>
 -->				
			</div>
			</div>
			</div>
			</div>
@endsection
		