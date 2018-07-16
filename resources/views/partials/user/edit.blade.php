@extends('app')

@section('content')

<!-- page title -->
<header id="page-header">
  <h1>تعديل مستخدم </h1>
</header>
<!-- /page title -->


<div id="content" class="padding-20">

  <!-- if there are creation errors, they will show here -->
  {!! Html::ul($errors->all()) !!}

  {!! Form::open(['url' => url('users/'.$user->id) , 'method' => 'patch']) !!}

  <div class="form-group">
    {!! Form::label('name', 'الاسم') !!}
    {!! Form::text('name', $user->name, array('class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('email', 'البريد الاكتروني') !!}
    {!! Form::text('email', $user->email, array('class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('password', 'كلمة المرور') !!}
    {!! Form::text('password', '', array('class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('role', 'الصلاحيات') !!}
    <select class="form-control" name="roles[]" multiple> 
     @foreach ($roles as $role)
     <option value="{{ $role->id }}" {{ (in_array($role->id , $userPermissions)) ? 'selected' : '' }} >{{ $role->role }}</option>
     @endforeach

   </select>
   
 </div>

 <div class="form-group">
   <select class="form-control" name="status">
    <option value="0" {{ ($user->status == 0) ? 'selected' : '' }}>موقوف</option>     
    <option value="1" {{ ($user->status == 1) ? 'selected' : '' }}>يعمل</option>     
   </select>
 </div>


 {!! Form::submit('تعديل', array('class' => 'btn btn-primary form-control')) !!}

 {!! Form::close() !!}

</div>
@endsection
