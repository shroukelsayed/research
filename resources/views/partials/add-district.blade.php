@extends('app')

@section('content')

    <div class="row">
    	<div class="col-md-3"></div>
    	<div class="col-md-9">
	        <div class="page-header">
		        <h1><i class="glyphicon glyphicon-plus"></i> اضافة محافظة جديدة </h1>
		    </div>
		    <br><br><br>
		   
		    <div class="row">
		        <div class="col-md-9">

		            <form action="{{ url('store-district') }}" method="POST">
		                <input type="hidden" name="_token" value="{{ csrf_token() }}">
		                <div class="row">
		                    <div class="col-md-9">
		                        <input type="text" name="name" class="form-control" dir="rtl" autofocus>
		                        @if ($errors->has('name'))
		                            <span class="alert-danger">
		                                <strong>{{ $errors->first('name') }}</strong>
		                            </span>
		                        @endif
		                    </div>
		                    <div class="col-md-3">
		                        <label style="float: right;">اسم القرية </label>
		                    </div>
		                </div>
		                <br>
		                <div class="row">
		                    <div class="col-md-9">
		                        <input type="text" name="code" class="form-control" dir="rtl" autofocus>
		                        @if ($errors->has('code'))
		                            <span class="alert-danger">
		                                <strong>{{ $errors->first('code') }}</strong>
		                            </span>
		                        @endif
		                    </div>
		                    <div class="col-md-3">
		                        <label style="float: right;">كود القرية </label>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-9">
		                        {{ Form::select('city_id', $govs,null,['class' => 'form-control' , 'placeholder' => 'اختر المركز'])  }}

		                        @if ($errors->has('city_id'))
		                            <span class="alert-danger">
		                                <strong>{{ $errors->first('city_id') }}</strong>
		                            </span>
		                        @endif
		                    </div>
		                    <div class="col-md-3">
		                        <label style="float: right;">المركز</label>
		                    </div>
		                </div>
		                <br>

		                <br>
		                <div class="well well-sm">
		                    <button type="submit" class="btn btn-primary">حفظ</button>
		                    <a class="btn btn-link pull-right" href="{{ route('home') }}"><i class="glyphicon glyphicon-backward"></i> السابق</a>
		                </div>
		            </form>

		        </div>
		    </div>
		</div>
    </div>

@endsection
