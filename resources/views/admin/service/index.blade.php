@extends('layouts.admin') 
@section('content')
<div class="container">
	<div class="col-md-12"> <a href="{{route('service.create')}}" class="btn btn-primary">Create</a>
		<div class="card">
			<div class="card-body">
				<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
						<div class="col-sm-12">
							<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
								<thead>
									<tr role="row">
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> ID </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> Name</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> Images </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> Buttons </th>
									</tr>
								</thead>
								<tbody> 
                                    @foreach ($services as $service)
									<tr class="odd">
										<td>{{$service->id}}</td>
										<td>{{$service->name}}</td>
                                        <td><img src="/admin_r/images/{{$service->image}} " width="351px" alt="" class="ali" ></td>
										<td>
											<a href="{{route('service.show', $service->slug)}}" class="btn btn-primary ali" >Show</a>   
											<br>
											<br>
											<a href="{{route('service.edit', $service->slug)}}" class="btn btn-success ali">Edit</a>
											<br>
											<br>
											<form action="{{route('service.destroy', $service->id)}}" method="POST"> 
                                                @csrf 
                                                @method('DELETE')
												<input type="submit" value="Delete" class="btn btn-danger ali"> 
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