@extends('app')

@section('content')
	
	<br><br><br><br><br><br>

	<div class="row">
		<div class="col-md-3"></div>
    	<div class="col-md-6">
            @if($followings->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>اسم التابع</th>
                            <th>كود التابع </th>                            
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($followings as $following)
                            <tr>
                                <!-- <td>{{$following->id}}</td> -->
                                <td>{{$following->name}}</td>
                                <td>{{$following->code}}</td>
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
		        <h1><i class="glyphicon glyphicon-plus"></i> اضافة تابع جديد </h1>
		    <!-- </div> -->
		    <!-- <br><br><br> -->
		   
		    <div class="row">
		        <div class="col-md-9">

		            <form action="{{ url('store-following') }}" method="POST">
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
		                        <label style="float: right;">اسم التابع </label>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-9">
		                        {{ Form::select('district_id', $districts,null,['required' => true , 'class' => 'form-control' , 'placeholder' => 'اختر القرية'])  }}

		                        @if ($errors->has('district_id'))
		                            <span class="alert-danger">
		                                <strong>{{ $errors->first('district_id') }}</strong>
		                            </span>
		                        @endif
		                    </div>
		                    <div class="col-md-3">
		                        <label style="float: right;">القرية</label>
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
