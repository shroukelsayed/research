@extends('app')

@section('content')

<!-- page title -->
<header id="page-header">
  <h1>عرض جميع الحالات</h1>

</header>
<!-- /page title -->

<div id="content" class="padding-20">

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-danger">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>الاسم</th>
                <th>اسم الزوجه</th>
                <th>الباحث</th>
                <th>تاريخ البحث</th>

                <!-- <th>المحافظه</th> -->
                {{--<th>حالة الاستماره</th>--}}
                <th>رقم البحث</th>
                {{--<th>تاريخ التنفيذ</th>--}}
                <th>الحاله الإجتماعية</th>
                <th>العمليات</th>
            </tr>
        </thead>
        <tbody>
        @php $i = 1; @endphp
        @foreach ($cases as $case)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $case->name }}</td>
            
            <td>
                @if(count($case->partners))
                @foreach($case->partners as $partner)
                 {{ $partner->name}} ,
                @endforeach
                @endif

             </td>

          

            <td>{{ $case->researcher_name }}</td>
            <td>{{ $case->real_date }}</td>
            <!-- <td>{{ $case->governorate }}</td> -->
            <td>{{ $case->id }}</td>
            <td>{{ $case->relationship_status }}</td>
              <!-- we will also add show, edit, and delete buttons -->
            <td>
                <!-- show the nerd (uses the show method found at GET /clients/{id} -->
                <a class="btn btn-small btn-success" href="{{ url('cases/'.$case->id.'') }}">
                    <i class="fa fa-user-circle"></i> View
                </a>

                <!-- edit this nerd (uses the edit method found at GET /clients/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ url('cases/'.$case->id.'/edit') }}">
                    <i class="fa fa-pencil-square-o"></i> Edit
                </a>

                <!-- delete the nerd (uses the destroy method DESTROY /clients/{id} -->
              <!--   {{ Form::open(array('url' => url('cases/'.$case->id.''))) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }} -->

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$cases->links()}}

    {{-- pagination --}}

</div>


    
@endsection
