@extends('app')

@section('content')
		    <br><br><br>
		    <br><br><br>

	<div class="row">
		<div class="col-md-3"></div>
    	<div class="col-md-6">
            @if($govs->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>اسم المحافظة</th>
                            <th>كود المحافظة </th>                            
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($govs as $gov)
                            <tr>
                                <!-- <td>{{$gov->id}}</td> -->
                                <td>{{$gov->name}}</td>
                                <td>{{$gov->code}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
		<div class="col-md-3"></div>
    </div>
		    <br><br><br>
    <div class="row">
    	<div class="col-md-3"></div>
    	<div class="col-md-9">
	        <!-- <div class="page-header"> -->
		        <h1><i class="glyphicon glyphicon-plus"></i> اضافة محافظة جديدة </h1>
		    <!-- </div> -->
		   
		    <div class="row">
		        <div class="col-md-9">

		            <form action="{{ url('store-governorate') }}" method="POST">
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
		                        <label style="float: right;">اسم المحافظة </label>
		                    </div>
		                </div>
		               <!--  <div class="row">
		                    <div class="col-md-9">
		                        <input type="text" name="code" class="form-control" dir="rtl" autofocus>
		                        @if ($errors->has('code'))
		                            <span class="alert-danger">
		                                <strong>{{ $errors->first('code') }}</strong>
		                            </span>
		                        @endif
		                    </div>
		                    <div class="col-md-3">
		                        <label style="float: right;">كود المحافظة </label>
		                    </div>
		                </div> -->
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
