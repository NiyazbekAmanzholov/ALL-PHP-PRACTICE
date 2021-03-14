@extends('layouts.adminLayout')

@section('content')

<div class="card-body"> 
	<div class="rowContainer"><h5>Редактировать категорию</h5></div>  
		   <div class="row rowContainer">
		        <div class="col-md-8 form rowBlock header main">
		            <form class="form-horizontal" method="POST" action="/admin/category/edit/{{$id->id}}">
		                {{ csrf_field() }}

		                <div style="padding-top: 3%;" class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
		                    <label for="category" class="col-md-4 control-label">Редактировать категорию</label>

		                    <div class="col-md-12">
		                        <input id="category" type="text" class="form-control" name="category" value="{{$id->category}}" required autofocus>

		                        @if ($errors->has('category'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('category') }}</strong>
		                            </span>
		                        @endif
		                    </div>
		                </div>

		                <div class="form-group">
		                    <div class="col-md-12 col-md-offset-4">
		                        <button type="submit" class="btn btn-primary">
		                            Редактировать
		                        </button>
		                    </div>
		                </div>
		            </form>
		        </div>
		    </div>
        </div>
    </div>
</div>
@endsection