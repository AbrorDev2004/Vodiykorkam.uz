@extends('layouts.admin') 
@section('content')
<div class="container">
	<div class="col-md-12"> <a href="{{route('about.create')}}" class="btn btn-primary">About create</a>
		<div class="card">
			<div class="card-body">
				<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
						<div class="col-sm-12">
							<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
								<thead>
									<tr role="row">
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> ID </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> Title</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> Images </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> Buttons </th>
									</tr>
								</thead>
								<tbody> 
                                    @foreach ($abouts as $about)
									<tr class="odd">
										<td>{{$about->id}}</td>
										<td>{{$about->title}}</td>
                                        <td><img src="/admin_r/images/{{$about->image}} " width="351px" alt=""></td>
										<td>
											<a href="{{route('about.show', $about->id)}}" class="btn btn-primary ali" >Show</a>   
											<br>
											<br>
											<a href="{{route('about.edit', $about->id)}}" class="btn btn-success ali">Edit</a>
											<br>
											<br>
											<form action="{{route('about.destroy', $about->id)}}" method="POST"> 
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