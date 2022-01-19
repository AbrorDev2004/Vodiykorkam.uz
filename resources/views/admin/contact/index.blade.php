@extends('layouts.admin') 
@section('content')
<div class="container">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
						<div class="col-sm-12">
							<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
								<thead>
									<tr role="row">
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> ID </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> Name</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> Phone </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> Email </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> Message </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> buttons </th>
									</tr>
								</thead>
								<tbody> 
                                    @foreach ($contacts as $contact)
									<tr class="odd">
										<td>{{$contact->id}}</td>
										<td>{{$contact->name}}</td>
										<td>{{$contact->phone}}</td>
										<td>{{$contact->email}}</td>
										<td>{{$contact->message}}</td>
										<td>
											<form action="{{route('contact.destroy', $contact->id)}}" method="POST"> 
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