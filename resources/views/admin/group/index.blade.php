@extends('theme.default')

@section('content')


<div class="m-t-40 card-box">
               @if(\Session::has('success'))
				<div class="alert alert-success">
				{{\Session::get('success')}}
				</div>
			 @endif
			  <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">Group Management</h4>
									<p class="text-muted font-14 m-b-30">
                                     <a href="{{url('/create/group')}}"  class="btn btn-primary">Add Group</a>   
                                    </p>

                                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <tr>
											  <th>Group Name</th>
											</tr>
                                        </tr>
                                        </thead>


                                        <tbody>
                                       

                                           @foreach($group as $grp)
										<tr>
											<td>{{$grp->id}}</td>
											<td>{{$grp->group_name}}</td>
											<td>
											<a href="{{url('/edit/group')}}/{{$grp->id}}"  class="btn btn-primary">Edit</a>
											
											</td>
											<td>
											<form action="{{action('GroupController@destroy', $grp->id)}}" method="post">
											{{csrf_field()}}
											<input name="_method" type="hidden" value="DELETE">
											<button class="btn btn-danger" type="submit">Delete</button>
											</form>
											</td>
										</tr>
										@endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
              </div> <!-- end row -->
</div>
			
			

@endsection
