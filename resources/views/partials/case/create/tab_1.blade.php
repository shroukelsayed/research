<style>
    .mt-25 {
        margin-top: 25px!important;
    }    
    .remove-child-date-input {
        position: absolute;
        left: 5px;
        top: 15px;
        width: 20px;
        height: 20px;
        background: #f00;
        color: #fff;
        line-height: 20px;
        border-radius: 50%;
        text-align: center;
        cursor: pointer;
    }
    .remove-child-date-input i.fa {
        color: #fff;
    }
</style>

<div id="tab_1" class="tab-pane active">
    <h4>بيانات خاصة بالمحافظة</h4>
    <div class="row">
        <div class="col-md-6" >
            <div class="form-group">
                {!! Form::label('case_status', 'حالة الاستمارة') !!}
                {!! Form::select('case_status', [
                    'لم يتم البدئ في التنفيذ' => 'لم يتم البدئ في التنفيذ',
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
                    'بناء جدران (جزء من البيت)' => 'بناء جدران (جزء من البيت)'
                ], old('case_status[]') or null, [ 'class' => 'form-control select2' ,'multiple'=>'multiple','name'=>'case_status[]','placeholder'=>'لا شئ']) !!}
            </div>
        </div>
      </div>
    
      {{-- all dates container --}}
      <div class="dates row"></div>
  
    <div class="row">
       <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_researcher_name', 'اسم الباحث') !!}
                {!! Form::text('case_researcher_name', old('case_researcher_name') or null, array('class' => 'form-control')) !!}
            </div>
        </div>
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
                  old('case_governorate') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2')) !!}
            </div>
        </div>
    </div>
    <div class="row">
       
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_city', 'المركز') !!}
                {!! Form::select('case_city', ['أدفو' => 'أدفو', 'اطسا' => 'اطسا', 'الصف' => 'الصف', 'بني سويف' => 'بني سويف', 'نصر النوبة' => 'نصر النوبة', 'اطا' => 'اطا', 'اهنسيا' => 'اهنسيا', 'سمسطا' => 'سمسطا', 'قنا' => 'قنا', 'يوسف الصديق' => 'يوسف الصديق'], old('case_city') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_district', 'القرية') !!}
                {!! Form::select('case_district', ['الشودك' => 'الشودك',
                  'الشيخ علي' => 'الشيخ على',
                  'الفويرة' => 'الفويرة',
                  'القناوية' => 'القناوية',
                  'الكرملاوي' => 'الكرملاوي',
                  'النزل' => 'النزل',
                  'الها' => 'الها',
                  'بهنساوي' => 'بهنساوي',
                  'خليل بريك' => 'خليل بريك',
                  'سعيد بكير' => 'سعيد بكير',
                  'شويش' => 'شويش',
                  'عزبة الازهرى' => 'عزبة الازهرى',
                  'عزبة الدكتور بهجت' => 'عزبة الدكتور بهجت',
                  'عزبة بشرا الشرقية' => 'عزبة بشرا الشرقية',
                  'غمازة الكبرى' => 'غمازة الكبرى',
                  'كساب' => 'كساب',
                  'ميانه' => 'ميانه'], old('case_district') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_following', 'التابع') !!}
                {!! Form::select('case_following',[
                'الجوهرجى' => 'الجوهرجى',
                'الحجرى' => 'الحجرى',
                'الحجري' => 'الحجري',
                'الدكتور بهجت' => 'الدكتور بهجت',
                'الصمدي' => 'الصمدي',
                'الوكيل' => 'الوكيل',
                'عزبة العرب' => 'عزبة العرب',
                'عزبة العمدة' => 'عزبة العمدة',
                'عزبة القذافي' => 'عزبة القذافي',
                'عزبة محمود' => 'عزبة محمود',
                'مطيريد' => 'مطيريد',
                'ميانة' => 'ميانة',
                'وش الباب' => 'وش الباب',
                'يمانة' => 'يمانة'
                ], old('case_following') or null, array('class' => 'form-control select2')) !!}

            </div>
        </div>
          <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_real_date', 'التاريخ') !!}
                {!! Form::date('case_real_date', old('case_real_date') or null, array('class' => 'form-control')) !!}
            </div>
        </div>
    </div>
</div>

<script>
  $(document).ready(function(){  
    var i = 1;      

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
        // var $sel = $(this),
        // val = $(this).val(),
        // $opts = $sel.children(),
        // prevUnselected = $sel.data('unselected');
        // // create array of currently unselected 
        // var currUnselected = $opts.not(':selected').map(function() {
        //   return this.value
        // }).get();
        // // see if previous data stored
        // if (prevUnselected) {
        //   var unselected = currUnselected.reduce(function(a, curr) {
        //     if ($.inArray(curr, prevUnselected) == -1) {
        //       a.push(curr)
        //     }
        //     return a
        //   }, []);
        //   // "unselected" is an array if it has length some were removed
        //   if (unselected.length) {
        //       $("label:contains("+unselected+")").parents(".col-md-12").remove();
        //   }
        // }
        // $sel.data('unselected', currUnselected)
        // console.log( unselected );

        if ($(this).val() != null && $(this).val().length > 0 && unselected.length === 0) {
            // get selectedValue name
            var selectedValue = $("option:selected:last",this).val();
            // prepare template
            var template = `<div class="col-md-12 status-${i}">
                                <span class="child-dates">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>${selectedValue}</label>
                                            <input type="date" name="status_date[${i}][]" class="form-control">
                                        </div>
                                    </div>
                                </span>
                                <div class="col-md-6">
                                    <button class="btn btn-block btn-success mt-25 add-new-date-input" data-index="${i}" data-status="${selectedValue}">إضافة تاريخ جديد لحالة [ ${selectedValue} ]</button>
                                </div>
                            </div>`;

            // append date with selected value in [dates] container
            $('.dates').append(template);
            // $(".dates option[value='selectedValue']").remove();

            i = i +1;
        }
    });

    // add more date input for every status
    $('.dates').on('click', '.add-new-date-input', function(e) {
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

    // remove child date input
    $('.dates').on('click', '.remove-child-date-input', function() {
        $(this).parents('.col-md-6').remove();
    });  
     
  });
</script>
