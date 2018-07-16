@extends('app')

@section('content')

<!-- page title -->
<header id="page-header">
  <h1>اضافة مستخدم جديد</h1>
</header>
<!-- /page title -->

<div id="content" class="padding-20">

  <!-- if there are creation errors, they will show here -->
  {!! Html::ul($errors->all()) !!}

  {!! Form::open(['url'=> url('users') , 'method' => 'post' ]) !!}

  <div class="form-group">
    {!! Form::label('name', 'الاسم') !!}
    {!! Form::text('name', null, array('class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('email', 'البريد الاكتروني') !!}
    {!! Form::email('email', null, array('class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('password', 'كلمة المرور') !!}
    {!! Form::text('password', null, array('class' => 'form-control')) !!}
  </div>


  <div class="form-group">
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
 </div>

 {!! Form::submit('اضافه', array('class' => 'btn btn-primary form-control')) !!}

 {!! Form::close() !!}

</div>
@endsection
