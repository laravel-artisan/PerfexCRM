@extends('theme.default')

@section('content')

<div class="row">
							@if ($errors->any())
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div><br/>
							@endif
							<div class="col-xl-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Update Currency</h4>
									<form method="POST" class="form-horizontal m-t-20" action="{{url('edit/currency/'.$id)}}">
									<input type="hidden" value="{{csrf_token()}}" name="_token" />
                                        <div class="form-group">
                                            <label for="userName">Currency Name*</label>
                                           <input type="text" class="form-control" name="name" value="{{$currency->currency_name}}" /><br>
										   <label for="userName">Currency Symbol*</label>
                                           <input type="text" class="form-control" name="symbol" value="{{$currency->symbol}}" />
                                        </div>
                                        <div class="form-group text-right m-b-0">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">{{ __('Update') }}</button>
                                           
                                        </div>
										{{csrf_field()}}
									  {{method_field('PUT')}}
                                    </form>
                                </div>
                            </div><!-- end col -->
							
</div>


			
			
			

@endsection
