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

			<div class = "panel-body">
				<form action="{{route('book.show',$book->id)}}" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
                  {{csrf_field()}}
                   <div class="form-group">
					<center><img src="{{asset('img/'.$book->cover.'')}}" width="100px" height="100px"></center>
					</div>

                
					<div class="form-group">
						<label class="control-label">Title</label>
						<input type="text" name="title" class="form-control" value="{{$book->title}}" readonly="" >
					</div>

					<div class="form-group">
						<label class="control-label">author</label>						
						<input type="text" name="author" class="form-control" value="{{$book->author->nama}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-label">amount</label>
						<input type="text" name="amount" class="form-control" value="{{$book->amount}}" readonly="" >
					</div>

					
					
				
				</form>
		
			</div>
			</div>
			</div>
			</div>
@endsection
		