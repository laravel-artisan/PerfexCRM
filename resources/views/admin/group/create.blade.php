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
								</div><br />
							@endif
							<div class="col-xl-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Group</h4>
									<form method="POST" class="form-horizontal m-t-20" action="{{url('/create/group')}}">
									<input type="hidden" value="{{csrf_token()}}" name="_token" />
                                        <div class="form-group">
                                            <label for="userName">Group Name*</label>
                                            <input type="text" class="form-control" name="name"/>
                                        </div>
                                        <div class="form-group text-right m-b-0">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">{{ __('Create') }}</button>
                                            <button type="reset" class="btn btn-secondary waves-effect waves-light m-l-5">
                                                Cancel
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div><!-- end col -->
							
</div>	
@endsection