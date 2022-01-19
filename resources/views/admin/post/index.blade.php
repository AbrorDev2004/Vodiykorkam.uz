@extends('layouts.admin') 
@section('content')
<div class="container">
	<div class="col-md-12"> <a href="{{route('posts.create')}}" class="btn btn-primary">Create</a>
		<div class="card">
			<div class="card-body">
				<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
						<div class="col-sm-12">
							<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
								<thead>
									<tr role="row">
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> ID </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> Title</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> Status </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> Images </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> Buttons </th>
									</tr>
								</thead>
								<tbody> 
                                    @foreach ($posts as $post)
									<tr class="odd">
										<td>{{$post->id}}</td>
										<td>{{$post->title}}</td>
										<td>{!!$post->status == 1 ? '<span class="badge badge-info right">Active</span>' : '<span class="badge badge-danger right">No Active</span>'!!}</td>
                                        <td><img src="/admin_r/images/{{$post->image}} " width="150px" alt="" class="ali" ></td>
										<td>
											<a href="{{route('posts.show', $post->id)}}" class="btn btn-primary ali" >Show</a>   
											<br>
											<br>
											<a href="{{route('posts.edit', $post->id)}}" class="btn btn-success ali">Edit</a>
											<br>
											<br>
											<form action="{{route('posts.destroy', $post->id)}}" method="POST"> 
                                                @csrf 
                                                @method('DELETE')
												<input type="submit" value="Delete" class="btn btn-danger"> 
                                            </form>
										</td>
									</tr> 
                                    @endforeach
                            </div>
					</div>
					<!-- /.card-body -->
				</div>
			</div>
		</div> 
		@endsection