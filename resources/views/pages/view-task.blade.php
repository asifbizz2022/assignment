@extends('layout.app')
@section('heading')
<div class="card-header">
	<span class="card-title">Basic Justified Tab</span>
</div>
@endsection
@section('content')   
 
<a href="{{ url('tasks') }}" class="btn  btn-info my-1">Home</a>
 
@foreach($tasks as $row)

<div class="card m-0">
	<div class="card-body ">
		<table class="  table-bordered"> 
			<tr>
				<td>
					<b>Title</b>
				</td>
				<td>
					{{$row->title}}
				</td>
			</tr>
			<tr>
				<td>
					<b>Description</b>
				</td>
				<td>
					{{$row->description}}
				</td>
			</tr>
		</table> 
	</div>
</div>
@endforeach
 
	 

@endsection
@section('footer')
@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		 
		 $('.select').select2();
	});
</script>
@endsection