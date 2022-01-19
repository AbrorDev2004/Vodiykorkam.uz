@extends('layouts.admin') 
@section('content')
<div class="container">
	<div class="col-md-12"> <a href="{{route('slider.create')}}" class="btn btn-primary"> Create</a>
		<div class="card">
			<div class="card-body">
				<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
						<div class="col-sm-12">
							<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
								<thead>
									<tr role="row">
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> ID </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> Name</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="">Izoh </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> image </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> tahrirlash </th>
									</tr>
								</thead>
								<tbody> 
                                    @foreach ($sliders as $item)
									<tr class="odd">
										<td>{{$item->id}}</td>
										<td>{{$item->title}}</td>
										<td>{{$item->description}}</td>
                                        <td><img src="/admin_r/images/{{$item->image}} " width="351px" alt=""></td>
										<td><a href="{{route('slider.edit', $item->id)}}" class="btn btn-success">Edit</a>
											<br>
											<br>
											<form action="{{route('slider.destroy', $item->id)}}" method="POST"> 
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