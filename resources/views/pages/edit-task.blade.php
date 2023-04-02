@extends('layout.app')
@section('heading')
 
@endsection
@section('content')  
 
<a href="{{ url('tasks') }}" class="btn   btn-info my-1">Home</a>

@if(Session::has('message'))
<p class="alert alert-success">
	<span class="text-white">
	{{ Session::get('message')}}
	</span>
</p>
@endif

@foreach($tasks as $row)

<div class="card m-0">
	<div class="card-body">
		<h5>
			Edit Task
		</h5>
		 <hr>
		<form method="post" action="{{ route('tasks.update', $row->id) }}">
			@csrf 
			@method('PUT')
				<div class="form-group">
					<label for="">Title</label>
					<input type="text" name="title" value="{{$row->title}}" class="form-control form-sm" placeholder="Title" id="">
					<span class="text-danger">
					@error('title')
						<div class="error">{{ $message }}</div>
					@enderror
					</span>
				</div>

				<div class="form-group">
					<label for="">Description</label>
					<textarea name="description" id=""   cols="30" rows="5" class="form-control">
						{{$row->description}}
					</textarea>
					<span class="text-danger">
					@error('description')
						<div class="error">{{ $message }}</div>
					@enderror
					</span>
				</div>
			 
			<div class="form-group">
				<input type="submit" value="Update" class="btn btn-info  ">
			</div>
		 
		</form>
	</div>
</div> 
@endforeach

@endsection
@section('footer')
@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		 $('.table').DataTable();
		 $('.select').select2();
	});
</script>
@endsection