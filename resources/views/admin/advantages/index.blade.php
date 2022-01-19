@extends('layouts.admin') @section('content')
<div class="container">
	<div class="col-md-12"> <a href="{{route('advantages.create')}}" class="btn btn-primary">Advantages create</a>
		<div class="card">
			<div class="card-body">
				<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
						<div class="col-sm-12">
							<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
								<thead>
									<tr role="row">
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> ID </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> Title</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> Description </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> icon </th>
									</tr>
								</thead>
								<tbody> 
                                    @foreach ($advantagies as $advantages)
									<tr class="odd">
										<td>{{$advantages->id}}</td>
										<td>{{$advantages->title}}</td>
										<td>{{$advantages->description}}</td>
                                        <td>{{$advantages->image}}</td>
										<td><a href="{{route('advantages.edit', $advantages->id)}}" class="btn btn-success">Edit</a>
											<br>
											<br>
											<form action="{{route('advantages.destroy', $advantages->id)}}" method="POST"> 
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