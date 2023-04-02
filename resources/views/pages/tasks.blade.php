@extends('layout.app')
@section('heading')
<div class="card-header">
	<span class="card-title">Basic Justified Tab</span>
</div>
@endsection
@section('content')  
@if(Session::has('message'))
<p class="alert alert-success">
<span class="text-white">
	{{ Session::get('message')}}
	</span>
</p>
@endif
<h3>Tasks</h3>
<a href="{{ url('tasks/create') }}" class="btn btn-info">Add New Task</a>
 
<div class="mt-1"> 
	<div class="bg-white p-1">
	<table class="table table-condensed table-bordered   w-100">
		<thead class="bg-primary text-white">
			<th>
				Action
			</th>
			<th>Title</th>
			<th>Description</th>
			<th>Due Date</th>
			
		</thead>
		<tbody>
			 @foreach($tasks as $row)
			 <tr>
			 <td>
				<div class="dropdown">
					<button class="btn btn-outline-secondary dropdown-toggle btn-sm" type="button"   data-toggle="dropdown" >
					<i class="icon-cog"></i>
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> 
						<a href="{{ route('tasks.edit', $row->id ) }}" class="dropdown-item">Edit</a> 
						<a href="{{ route('tasks.show', $row->id ) }}" class="dropdown-item btn">View</a>  
						<form method="post" id="delete-form" action="{{ route('tasks.destroy', $row->id )}}">
							@csrf
							@method('DELETE')
							
						</form>
							<button type="submit"   
							onclick="event.preventDefault();
							if(confirm('Sure Wan to delete')){
								document.getElementById('delete-form').submit();
							}  
                            " class="dropdown-item">
								Delete
							</button> 
					 
						
					</div>
					</div> 
				  
				</td>
				<td>
					{{ $row->title }}
				</td>
				<td>
					{{ $row->description}}
				</td>
				<td>
					{{ $row->due_date }}
				</td>
				
			 </tr>
			 @endforeach
		</tbody>
	</table> 
	</div>
</div>
		 
		 
 
 
	 

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