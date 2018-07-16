@extends('app')

@section('content')

<!-- page title -->
<header id="page-header">
  <h1>عرض بيانات العضو:
    {{ $user->name }}

    <!-- edit this user -->
    <a class="btn btn-small btn-info" href="{{ url('users/'.$user->id.'/edit') }}">
      <i class="fa fa-pencil-square-o"></i> Edit
    </a>

    <!-- delete the user -->
    {{ Form::open(array('url' => url('users/'.$user->id), 'class' => 'pull-right')) }}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
    {{ Form::close() }}

  </h1>

</header>
<!-- /page title -->

<div id="content" class="padding-20">


  <hr>
  <!-- will be used to show any messages -->
  @if (Session::has('message'))
  <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif


  <div class="">
    <dl class="dl-horizontal">
      <dt>الحاله:</dt><dd> {{ ($user->status) ? 'يعمل' : 'موقوف' }}</dd>
      <dt>الصلاحيه:</dt>
      @foreach ($user->getMyPermissions as $permission)
    <dd> {{ $permission->role }}</dd>
      @endforeach

      <dt>الإيميل:</dt><dd> {{ $user->email }}</dd>
      <dt>مسجل منذ:</dt><dd> {{ $user->created_at }}</dd>
      <dt>أخر وصول:</dt><dd> {{ $user->updated_at }}</dd>

     </dl>
   </div>

 </div>

 @endsection
