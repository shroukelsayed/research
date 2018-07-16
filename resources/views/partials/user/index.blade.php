@extends('app')

@section('content')

<!-- page title -->
<header id="page-header">
  <h1>عرض جميع الأعضاء</h1>


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
                <th>رقم مسلسل</th>
                <th>الاسم</th>
                <th>الحاله</th>
                <th>البريد الاكتروني</th>
                <th>مسجل منذ</th>
                <th>أخر وصول</th>
                <th>العمليات</th>
            </tr>
        </thead>
        <tbody>

            @php
                $i = 1;
            @endphp
          @foreach ($users as $user)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ ($user->status == 0) ? 'موقوف' : 'يعمل' }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>
                <!-- show the nerd (uses the show method found at GET /clients/{id} -->
                <a class="btn btn-small btn-success" href="{{ url('users/'.$user->id.'') }}">
                    <i class="fa  fa-user-circle"></i> View
                </a>

                <!-- edit this nerd (uses the edit method found at GET /clients/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ url('users/'.$user->id.'/edit') }}">
                    <i class="fa fa-pencil-square-o"></i> Edit
                </a>

                @php
                    $userRole = \App\UserRole::where('user_id', $user->id)->first();
                @endphp
                @if($userRole['role_id'] != 1)
                <!-- delete the nerd (uses the destroy method DESTROY /clients/{id} -->
                {{ Form::open(array('url' => url('users/'.$user->id), 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
                @endif
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

{{-- pagination --}}

</div>
@endsection
