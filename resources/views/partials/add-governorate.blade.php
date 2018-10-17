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
                            <th>اسم المحافظة</th>
                            <th>كود المحافظة </th>                            
                            <th>اختيارات </th>                            
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($govs as $gov)
                            <tr>
                                <td>{{$gov->name}}</td>
                                <td>{{$gov->code}}</td>
                                <td>
									<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="drawdev({{ $gov->id}},{{$gov->code }},'{{$gov->name }}');"><i class="fa fa-pencil-square-o"></i> تعديل</button>
                            		<div id="addChild-{{$gov->code}}"></div>
					            </td>
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
		                        <input type="text" name="name" class="form-control" dir="rtl" autofocus required="">
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


	<script type="">
	    

	    function drawdev(id,code,name){

	        html ="<div class='modal fade' id='myModal' role='dialog'><form id='form' action='{{ url("edit-gov") }}' method='POST' ><div class='modal-dialog'><div class='modal-content'><div class='modal-header'><button type='button' class='close' data-dismiss='modal'>&times;</button><h4 class='modal-title'>تعديل</h4></div>";

	        html +='<div class="modal-body"><input type="hidden" name="id" value="'+id+'"><input type="hidden" name="_token" value="{{ csrf_token() }}">';
	        
	        html += '<div class="row"><div class="col-md-3"><label> اسم المحافظة</label></div><div class="col-md-9"><input type="text" name="name" class="form-control" value="'+name+'" required autofocus></div></div></div>';

	        html +="<div class='modal-footer'><button type='submit' class='btn btn-primary'>حفظ</button><button type='button' class='btn btn-default' data-dismiss='modal'>الغاء</button></div></div></div></form></div>";
	           
	        $('#addChild-'+code).append(html)

	    }

	</script>
@endsection
