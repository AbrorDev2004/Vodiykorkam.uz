@extends('layouts.admin')
@section('content')
<div class="container">
	<div class="col-md-12"> <a href="{{route('portfolio.create')}}" class="btn btn-primary">Create</a>
		<div class="card">
			<div class="card-body">
				<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
						<div class="col-sm-12">
							<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
								<thead>
									<tr role="row">
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> ID </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> title</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> Description </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> Images </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> Buttons </th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($portfolios as $portfolio)
									<tr class="odd">
										<td>{{$portfolio->id}}</td>
										<td>{{$portfolio->title}}</td>
										<td>{{$portfolio->description}}</td>
                                        <td><img src="/admin_r/images/{{$portfolio->image}} " width="351px" alt=""></td>
										<td>
											<a href="{{route('portfolio.show', $portfolio->slug)}}" class="btn btn-primary">Show</a>
											<br>
											<br>
											<a href="{{route('portfolio.edit', $portfolio->id)}}" class="btn btn-success ali">Edit</a>
											<br>
											<br>
											<form action="{{route('portfolio.destroy', $portfolio->id)}}" method="POST">
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
