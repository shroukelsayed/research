<div id="tab_1" class="tab-pane active">
    <h4>بيانات خاصة بالمحافظة</h4>
    <div class="row">
        <div class="col-md-6" >
            <div class="form-group">
                {!! Form::label('case_status', 'حالة الاستمارة') !!}
                {!! Form::select('case_status', ['لم يتم البدئ في التنفيذ' => 'لم يتم البدئ في التنفيذ',
                 'جاري تجميع الملفات' => 'جاري تجميع الملفات',
                 'جاري التنفيذ' => 'جاري التنفيذ',
                 'تم دفع الرسوم' => 'تم دفع الرسوم',
                 'تم تقديم الملفات' => 'تم تقديم الملفات',
                 'تم تجميع الملفات' => 'تم تجميع الملفات',
                 'تم تنفيذ ادخال عداد' => 'تم تنفيذ ادخال عداد',
                 'توصيل المياه' => 'توصيل المياه',
                 'هدم وبناء كامل'=>'هدم وبناء كامل',
                 'محارة'=>'محارة',
                 'دهان'=>'دهان',
                 'فرش'=>'فرش',
                 'ملابس'=>'ملابس',
                 'تم تنفيذ سقف' => 'تم تنفيذ سقف',
                 'تم تنفيذ توزيع بطاطين' => 'تم تنفيذ توزيع بطاطين',
                 'تم تنفيذ مشروع نفسي اتعلم' => 'تم تنفيذ مشروع نفسي اتعلم',
                 'تم تنفيذ مشروع لا للجوع' => 'تم تنفيذ مشروع لا للجوع',
                 'بناء جدران (جزء من البيت)' => 'بناء جدران (جزء من البيت)'],$case_status, [ 'class' => 'form-control select2' ,'multiple'=>'multiple','name'=>'case_status[]','placeholder'=>'لا شئ']) !!}
            </div>
        </div>
        <div class="col-md-6" ></div>
    </div>
      <?php 
          $i = 0;
      ?>
      @foreach($case_status_date as $key => $status)
        <div class="row dates oldDates">
          <div class="col-md-12 old-status-{{$i}}">
              <span class="child-dates">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label>{{$key}}</label>
                          <input type="hidden" name="old_case_status[]" value="{{$key}}">
                          @foreach($status as $s => $s_date)
                            <input type="date" name="old_status_date[{{$i}}][{{$s}}]" class="form-control" value="{{$s_date}}">
                          @endforeach
                      </div>
                  </div>
              </span>
              <div class="col-md-6">
                  <button class="btn btn-block btn-success mt-25 add-new-date-input" data-index="{{$i}}" data-status="{{$key}}">إضافة تاريخ جديد لحالة [ {{$key}} ]</button>
              </div>
          </div>
        </div>
        <?php $i++; ?>
      @endforeach

     
                 
    {{-- all dates container --}}
    <div class="dates newDates row"></div>

      <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_researcher_name', 'اسم الباحث') !!}
                {!! Form::text('case_researcher_name', $case->researcher_name, array('class' => 'form-control')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_governorate', 'المحافظة') !!}
                {!! Form::select('case_governorate', ['القاهرة' => 'القاهرة',
                  'الجيزة' => 'الجيزة',
                  'الإسكندرية' => 'الإسكندرية',
                  'القليوبية' => 'القليوبية',
                  'الدقهلية' => 'الدقهلية',
                  'الشرقية' => 'الشرقية',
                  'الغربية' => 'الغربية',
                  'المنوفية' => 'المنوفية',
                  'البحيرة' => 'البحيرة',
                  'كفر الشيخ' => 'كفر الشيخ',
                  'دمياط' => 'دمياط',
                  'بورسعيد' => 'بورسعيد',
                  'الإسماعيلية' => 'الإسماعيلية',
                  'السويس' => 'السويس',
                  'الفيوم' => 'الفيوم',
                  'بني سويف' => 'بني سويف',
                  'المنيا' => 'المنيا',
                  'أسيوط' => 'أسيوط',
                  'سوهاج' => 'سوهاج',
                  'قنا' => 'قنا',
                  'الأقصر' => 'الأقصر',
                  'أسوان' => 'أسوان',
                  'شمال سيناء' => 'شمال سيناء',
                  'جنوب سيناء' => 'جنوب سيناء',
                  'مطروح' => 'مطروح',
                  'البحر الاحمر' => 'البحر الاحمر',
                  'الوادي الجديد' => 'الوادي الجديد'],
                  $case->governorate, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_city', 'المركز') !!}
                {!! Form::select('case_city', ['1' => 'أدفو    كود رقم  1', 
                '2' => 'اطسا    كود رقم  2', 
                '3' => 'الصف    كود رقم  3', 
                '4' => 'بني سويف    كود رقم  4', 
                '5' => 'نصر النوبة    كود رقم  5', 
                '6' => 'اطا    كود رقم  6', 
                '7' => 'اهنسيا    كود رقم  7', 
                '8' => 'سمسطا    كود رقم 8', 
                '9' => 'قنا    كود رقم  9', 
                '10' => 'يوسف الصديق  كود رقم  10'], $case->city, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_district', 'القرية') !!}
                {!! Form::select('case_district', ['1' => 'الشودك   كود رقم  1',
                  '2' => 'الشيخ على   كود رقم 2 ',
                  '3' => 'الفويرة   كود رقم 3 ',
                  '4' => 'القناوية   كود رقم 4 ',
                  '5' => 'الكرملاوي   كود رقم 5 ',
                  '6' => 'النزل   كود رقم 6 ',
                  '7' => 'الها   كود رقم 7 ',
                  '8' => 'بهنساوي   كود رقم 8 ',
                  '9' => 'خليل بريك   كود رقم 9 ',
                  '10' => 'سعيد بكير   كود رقم 10 ',
                  '11' => 'شويش   كود رقم 11 ',
                  '12' => 'عزبة الازهرى   كود رقم 12 ',
                  '13' => 'عزبة الدكتور بهجت   كود رقم 13 ',
                  '14' => 'عزبة بشرا الشرقية   كود رقم 14 ',
                  '15' => 'غمازة الكبرى   كود رقم 15 ',
                  '16' => 'كساب   كود رقم 16 ',
                  '17' => 'ميانه كود رقم 17 '], $case->district, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_following', 'التابع') !!}
                {!! Form::select('case_following',[
                '1' => 'الجوهرجى   كود رقم  1',
                '2' => 'الحجرى   كود رقم  2',
                '3' => 'الحجري   كود رقم  3',
                '4' => 'الدكتور بهجت   كود رقم  4',
                '5' => 'الصمدي   كود رقم  5',
                '6' => 'الوكيل   كود رقم  6',
                '7' => 'عزبة العرب   كود رقم  7',
                '8' => 'عزبة العمدة   كود رقم  8',
                '9' => 'عزبة القذافي   كود رقم  9',
                '10' => 'عزبة محمود   كود رقم  10',
                '11' => 'مطيريد   كود رقم  11',
                '12' => 'ميانة   كود رقم  12',
                '13' => 'وش الباب   كود رقم  13',
                '14' => 'يمانة   كود رقم  14'
                ], $case->following, array('class' => 'form-control')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_real_date', 'التاريخ') !!}
                {!! Form::date('case_real_date', $case->real_date, array('class' => 'form-control')) !!}
            </div>
        </div>
    </div>

</div>
<script>
  $(document).ready(function(){        
 
  var i =0;
 
  $("#case_status").on("select2:unselect", function (evt) {

        var element = evt.params.data.element;
        var $element = $(element);

        $("label:contains("+element.value+")").parents(".col-md-12").remove();

    });

    $("#case_status").on("select2:select", function (evt) {
        var element = evt.params.data.element;
        var $element = $(element);
        
        $element.detach();
        $(this).append($element);

        // when deselect an option delete refrence div
        var unselected = [];

        if ($(this).val() != null && $(this).val().length > 0 && unselected.length === 0) {
            // get selectedValue name
            var selectedValue = $("option:selected:last",this).val();
            // prepare template
            var template = `<div class="col-md-12 status-${i}">
                                <div class="col-md-6">
                                    <span class="child-dates">
                                        <div class="form-group">
                                            <label>${selectedValue}</label>
                                            <input type="date" name="status_date[${i}][]" class="form-control">
                                        </div>
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-block btn-success mt-25 add-new-date-input" data-index="${i}" data-status="${selectedValue}">إضافة تاريخ جديد لحالة [ ${selectedValue} ]</button>
                                </div>
                            </div>`;

            // append date with selected value in [dates] container
            $('.newDates').append(template);
            // $(".dates option[value='selectedValue']").remove();

            i = i +1;
        }
    });

    // add more date input for every status
    $('.newDates').on('click', '.add-new-date-input', function(e) {
        // prevent Button Default to prevent submit form
        e.preventDefault();
        // get status name
        var selectedValue = $(this).data('status');
        // get index of this status in selectedValues ARRAY
        var selectedIndex = $(this).data('index');
        // prepaire child date template
        var template = `<div class="col-md-6">
                            <span class="remove-child-date-input"><i class="fa fa-times"></i></span>
                            <div class="form-group">
                                <label>${selectedValue}</label>
                                <input type="date" name="status_date[${selectedIndex}][]" class="form-control">
                            </div>
                        </div>`;
        // append date in child date container
        $(`.status-${selectedIndex} .child-dates`).append(template);
    });

    $('.oldDates').on('click', '.add-new-date-input', function(e) {
        // prevent Button Default to prevent submit form
        e.preventDefault();
        // get status name
        var selectedValue = $(this).data('status');
        // get index of this status in selectedValues ARRAY
        var selectedIndex = $(this).data('index');
        // prepaire child date template
        var template = `<div class="col-md-6">
                            <span class="remove-child-date-input"><i class="fa fa-times"></i></span>
                            <div class="form-group">
                                <label>${selectedValue}</label>
                                <input type="date" name="old_status_date[${selectedIndex}][]" class="form-control">
                            </div>
                        </div>`;
        // append date in child date container
        $(`.old-status-${selectedIndex} .child-dates`).append(template);
    });

    // remove child date input
    $('.newDates').on('click', '.remove-child-date-input', function() {
        $(this).parents('.col-md-6').remove();
    });


    // remove child date input
    $('.oldDates').on('click', '.remove-child-date-input', function() {
        $(this).parents('.col-md-6').remove();
    });  
  
  
});
</script>