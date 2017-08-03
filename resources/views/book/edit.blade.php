@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">	
	<center><h1>Data Book</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Book
		<div class="panel-title pull-right">
			<a href="{{URL::previous() }}">Kembali</a></div>
			</div>
			
			<div class="panel-body">
				<form action="{{route('book.update',$book->id)}}" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-label">Title</label>
						<input type="text" name="title" class="form-control" required="" value="{{$book->title}}">
					</div>

					
					<div class="form-group">
						<label class="control-label">amount</label>
						<input type="text" name="amount" class="form-control" required="" value="{{$book->amount}}"></textarea>
					</div>

					<div class="form-group">
					<label class="control-label">nama author</label>
					<select class="form-control" name="author_id">
					@foreach($author as $data)
					<option value="{{$data->id}}">{{$data->nama}}</option>
					@endforeach
					</select>
				</div>

				<div class="form-group">
						<label class="control-label">cover</label>						
						<input type="file" name="cover" class="form-control" required="" value="{{$book->cover}}">
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