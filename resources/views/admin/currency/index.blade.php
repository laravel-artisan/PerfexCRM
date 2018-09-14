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
                                    <h4 class="m-t-0 header-title">Currency Management</h4>
									<p class="text-muted font-14 m-b-30">
                                     <a href="{{url('/create/currency')}}"  class="btn btn-primary">Add Currency</a>   
                                    </p>

                                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <tr>
											  <th>Currency Name</th>
											  <th>Currency Symbol</th>
											</tr>
                                        </tr>
                                        </thead>


                                        <tbody>
                                       

                                           @foreach($currency as $cur)
										<tr>
											<td>{{$cur->id}}</td>
											<td>{{$cur->currency_name}}</td>
											<td>{{$cur->symbol}}</td>
											<td>
											<a href="{{url('/edit/currency')}}/{{$cur->id}}"  class="btn btn-primary">Edit</a>
											
											</td>
											<td>
											<form action="{{action('CurrencyController@destroy', $cur->id)}}" method="post">
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
