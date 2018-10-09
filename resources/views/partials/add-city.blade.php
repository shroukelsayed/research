@extends('app')

@section('content')
	
	<br><br><br><br><br><br>

	<div class="row">
		<div class="col-md-3"></div>
    	<div class="col-md-6">
            @if($cities->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>اسم المركز</th>
                            <th>كود المركز </th>                            
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($cities as $city)
                            <tr>
                                <!-- <td>{{$city->id}}</td> -->
                                <td>{{$city->name}}</td>
                                <td>{{$city->code}}</td>
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
		        <h1><i class="glyphicon glyphicon-plus"></i> اضافة مركز جديد </h1>
		    <!-- </div> -->
		    <!-- <br><br><br> -->
		   
		    <div class="row">
		        <div class="col-md-9">

		            <form action="{{ url('store-city') }}" method="POST">
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
		                        <label style="float: right;">اسم المركز </label>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-9">
		                        {{ Form::select('governorate_id', $govs,null,['required' => true , 'class' => 'form-control' , 'placeholder' => 'اختر المحافظة'])  }}

		                        @if ($errors->has('governorate_id'))
		                            <span class="alert-danger">
		                                <strong>{{ $errors->first('governorate_id') }}</strong>
		                            </span>
		                        @endif
		                    </div>
		                    <div class="col-md-3">
		                        <label style="float: right;">المحافظات</label>
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
