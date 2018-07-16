@extends('app')

@section('content')
<div id="content" class="padding-20">
  <div class="tabs nomargin-top">

    <!-- tabs -->
    <ul class="nav nav-tabs">
      <li class="active">
        <a href="#tab1" data-toggle="tab" aria-expanded="false">
          <i class="fa fa-heart"></i> 1 - بيانات خاصة بالمحافظة
        </a>
      </li>
      <li class="">
        <a href="#tab2" data-toggle="tab" aria-expanded="true">
          <i class="fa fa-cogs"></i>2 - بيانات خاصة برب الاسرة
        </a>
      </li>
      <li class="">
        <a href="#tab3" data-toggle="tab" aria-expanded="true">
          <i class="fa fa-cogs"></i> 3 – بيانات خاصة بالزوج/ الزوجة
        </a>
      </li>
      <li class="">
        <a href="#tab4" data-toggle="tab" aria-expanded="true">
          <i class="fa fa-cogs"></i> 4 - بيانات خاصة بالأبناء
        </a>
      </li>
      <li class="">
        <a href="#tab5" data-toggle="tab" aria-expanded="true">
          <i class="fa fa-cogs"></i> 5 – بيانات خاصة بالأقارب المقيمين بالسكن
        </a>
      </li>
      <li class="">
        <a href="#tab6" data-toggle="tab" aria-expanded="true">
          <i class="fa fa-cogs"></i> 6 – الدخل ومصادره
        </a>
      </li>
      <li class="">
        <a href="#tab7" data-toggle="tab" aria-expanded="true">
          <i class="fa fa-cogs"></i> 7 – المساعدات
        </a>
      </li>
      <li class="">
        <a href="#tab8" data-toggle="tab" aria-expanded="true">
          <i class="fa fa-cogs"></i> 8 – الديون
        </a>
      </li>
      <li class="">
        <a href="#tab9" data-toggle="tab" aria-expanded="true">
          <i class="fa fa-cogs"></i> 9 – النفقات
        </a>
      </li>
      <li class="">
        <a href="#tab10" data-toggle="tab" aria-expanded="true">
          <i class="fa fa-cogs"></i> 10 – بيانات خاصة بالممتلكات
        </a>
      </li>
      <li class="">
        <a href="#tab11" data-toggle="tab" aria-expanded="true">
          <i class="fa fa-cogs"></i> 11 – بيانات خاصة بالمنزل
        </a>
      </li>
      <li class="">
        <a href="#tab12" data-toggle="tab" aria-expanded="true">
          <i class="fa fa-cogs"></i> 12 – وصف الحمام
        </a>
      </li>
      <li class="">
        <a href="#tab13" data-toggle="tab" aria-expanded="true">
          <i class="fa fa-cogs"></i> 13 – وصف محتويات المنزل
        </a>
      </li>
      <li class="">
        <a href="#tab14" data-toggle="tab" aria-expanded="true">
          <i class="fa fa-cogs"></i> 14 – احتياجات الحالة
        </a>
      </li>
      <li class="">
        <a href="#tab15" data-toggle="tab" aria-expanded="true">
          <i class="fa fa-cogs"></i> 15 – بحث عام
        </a>
      </li>
    </ul>

    <!-- tabs content -->
    <div class="tab-content">
      @include('partials.search.tabs.tab_1')
      @include('partials.search.tabs.tab_2')
      @include('partials.search.tabs.tab_3')
      @include('partials.search.tabs.tab_4')
      @include('partials.search.tabs.tab_5')
      @include('partials.search.tabs.tab_6')
      @include('partials.search.tabs.tab_7')
      @include('partials.search.tabs.tab_8')
      @include('partials.search.tabs.tab_9')
      @include('partials.search.tabs.tab_10')
      @include('partials.search.tabs.tab_11')
      @include('partials.search.tabs.tab_12')
      @include('partials.search.tabs.tab_13')
      @include('partials.search.tabs.tab_14')
      @include('partials.search.tabs.tab_15')
    </div>
    <button onclick="search()" class="btn btn-primary form-control">بحث</button>

  </div>
    <!-- panel content -->
  <div class="panel-body">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>م</th>
          <th>الاسم</th>
          <th>الحاله</th>
          <th>مسجل منذ</th>
          <th>العمليات</th>
        </tr>
      </thead>
      <tbody class="users" >
      </tbody>
    </table>
  </div>
</div>
      <!-- /panel content -->

    {{--</div>--}}
    {{--<!-- /Accordion -->--}}

  {{--</div>--}}

  @endsection

  <script type="text/javascript">
    function search()
    {
      var inputs_data = [];
      $(".form_input").each(function(key,obj){
          // if($(obj).val() != null && $(obj).val().length !== 0){
              inputs_data.push($(obj).attr('name') + ':' + $(obj).val());
          // }
      });
        // for(var i=0;i<document.getElementsByClassName('form_input').length;i++)
      // {

       // inputs_data[ document.getElementsByClassName('form_input')[i].name] =  document.getElementsByClassName('form_input')[i].value
     // }
     $.ajax({
      url: "{{ url('cases/search') }}",
      type: 'POST',
      // dataType: 'json',
      data: {inputs_data:inputs_data}
    })
     .done(function(data) {
      $('tbody.users tr').remove();
      $('tbody.users').append(data.data);
    })
     .fail(function() {
      console.log("error");
    })
     .always(function() {
      console.log("complete");
    });
   }


 </script>
