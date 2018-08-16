@extends('app')

@section('content')

    {{--<!-- page title -->--}}
    {{--<header id="page-header">--}}
    {{--<h1>اضافة بحث جديد</h1>--}}
    {{--</header>--}}
    {{--<!-- /page title -->--}}

    <div id="content" class="padding-20">

    <!-- will be used to show any messages -->
    @if (count($errors->all()) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li><h4>{{ $error }}</h4></li>
            @endforeach
            </ul>
        </div>
    @elseif (Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
    @else
    @endif

    {!! Form::open(['url'=> url('cases/'.$case->id.'/update') , 'method' => 'patch', 'enctype' => 'multipart/form-data' ]) !!}


    <!-- Stacked Left -->
        <div id="panel-ui-tan-l2" class="panel panel-default">

            <div class="panel-heading">

      <span class="elipsis"><!-- panel title -->
          تعديل استمارة <strong>{{$case->name}} </strong>
      </span>

                <!-- right options -->
                <ul class="options pull-right list-inline">
                    {{--<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>--}}
                    <li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
                    {{--<li><a href="#" class="opt panel_close" data-confirm-title="Confirm" data-confirm-message="Are you sure you want to remove this panel?" data-toggle="tooltip" title="Close" data-placement="bottom"><i class="fa fa-times"></i></a></li>--}}
                </ul>
                <!-- /right options -->


            </div>

            <!-- panel content -->
            <div class="panel-body">

                <div class="row tabs nomargin">

                    <!-- tabs -->
                    <div class="col-md-3 col-sm-3 nopadding-right nopadding-left">
                        <ul class="nav nav-tabs nav-stacked">
                            <li class="active">
                                <a href="#tab_1" data-toggle="tab">
                                    بيانات خاصة بالمحافظة
                                </a>
                            </li>
                            <li>
                                <a href="#tab_2" data-toggle="tab">
                                    <span class="badge badge-warning pull-right">*</span>
                                    بيانات خاصة برب الأسرة
                                </a>
                            </li>
                            <li>
                                <a href="#tab_3" data-toggle="tab">
                                    بيانات خاصة بالزوجة/الزوج
                                </a>
                            </li>
                            <li>
                                <a href="#tab_4" data-toggle="tab">
                                    بيانات خاصة بالأبناء
                                </a>
                            </li>
                            <li>
                                <a href="#tab_5" data-toggle="tab">
                                    بيانات خاصة بالأقارب الموجودين بالسكن
                                </a>
                            </li>
                            <li>
                                <a href="#tab_6" data-toggle="tab">
                                    الدخل ومصادره
                                </a>
                            </li>
                            <li>
                                <a href="#tab_7" data-toggle="tab">
                                    المساعدات
                                </a>
                            </li>
                            <li>
                                <a href="#tab_8" data-toggle="tab">
                                    الديون
                                </a>
                            </li>
                            <li>
                                <a href="#tab_9" data-toggle="tab">
                                    النفقات
                                </a>
                            </li>
                            <li>
                                <a href="#tab_10" data-toggle="tab">
                                    بيانات خاصة بالممتلكات
                                </a>
                            </li>
                            <li>
                                <a href="#tab_11" data-toggle="tab">
                                    بيانات خاصة بالمنزل
                                </a>
                            </li>
                            <li>
                                <a href="#tab_12" data-toggle="tab">
                                    وصف الحمام
                                </a>
                            </li>
                            <li>
                                <a href="#tab_13" data-toggle="tab">
                                    وصف محتويات المنزل
                                </a>
                            </li>
                            <li>
                                <a href="#tab_14" data-toggle="tab">
                                    احتياجات الحالة
                                </a>
                            </li>
                            <li>
                                <a href="#tab_15" data-toggle="tab">
                                    ملحوظات اضافية
                                </a>
                            </li>
                            <!-- <li>
                                <a href="#tab_16" data-toggle="tab">
                                    معلومات المراجعة
                                </a>
                            </li>
                            <li>
                                <a href="#tab_17" data-toggle="tab">
                                    معلومات الطباعة
                                </a>
                            </li>
                            <li>
                                <a href="#tab_18" data-toggle="tab">
                                    معلومات التأليف
                                </a>
                            </li>
                            <li>
                                <a href="#tab_19" data-toggle="tab">
                                    خيارات النشر
                                </a>
                            </li> -->
                        </ul>
                    </div>

                    <!-- tabs content -->
                    <div class="col-md-9 col-sm-9 nopadding-right nopadding-left">
                        <div class="tab-content">

                            @include('partials.case.edit.tab_1')
                            @include('partials.case.edit.tab_2')
                            @include('partials.case.edit.tab_3')
                            @include('partials.case.edit.tab_4')
                            @include('partials.case.edit.tab_5')
                            @include('partials.case.edit.tab_6')
                            @include('partials.case.edit.tab_7')
                            @include('partials.case.edit.tab_8')
                            @include('partials.case.edit.tab_9')
                            @include('partials.case.edit.tab_10')
                            @include('partials.case.edit.tab_11')
                            @include('partials.case.edit.tab_12')
                            @include('partials.case.edit.tab_13')
                            @include('partials.case.edit.tab_14')
                            @include('partials.case.edit.tab_15')
                            <!-- @include('partials.case.edit.tab_16')
                            @include('partials.case.edit.tab_17')
                            @include('partials.case.edit.tab_18')
                            @include('partials.case.edit.tab_19') -->

                        </div>
                    </div>

                </div>

            </div>
            <!-- /panel content -->

        </div>
        <!-- /Stacked Left -->
        <input name="case_typer_id" type="hidden" value="{{$case->typer_id}}">
        {!! Form::submit('تعديل', array('class' => 'btn btn-primary form-control')) !!}

        {!! Form::close() !!}


        {{-- <div class="form-group">
          {!! Form::label('role', 'الصلاحيات') !!}
          <select class="form-control" name="roles[]" multiple>
           @foreach ($roles as $role)
           <option value="{{ $role->id }}">{{ $role->role }}</option>
           @endforeach

         </select>

       </div>

       <div class="form-group">
         <select class="form-control" name="status">
          <option value="0">موقوف</option>
          <option value="1">يعمل</option>
         </select>
       </div> --}}

    </div>
@endsection
