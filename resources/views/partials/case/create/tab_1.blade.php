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
                ], old('case_status[]') or null, [ 'class' => 'form-control select2' ,'multiple'=>'multiple','name'=>'case_status[]']) !!}
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
                {!! Form::label('case_real_date', 'التاريخ') !!}
                {!! Form::date('case_real_date', old('case_real_date') or null, array('class' => 'form-control')) !!}
            </div>
        </div>
    </div>
    <div class="row">
         <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_governorate', 'المحافظة') !!}
                {!! Form::select('case_governorate', $govs,
                  old('case_governorate') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2' ,'onchange' => 'getCities($(this).val())' )) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div id="div_city" class="form-group" style="display:none;">
                {!! Form::label('case_city', 'المركز') !!}
                <select id="case_city" name="case_city" class = 'form-control' onchange = 'getDistricts($(this).val())'></select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div id="div_district" class="form-group" style="display:none;">
                {!! Form::label('case_district', 'القرية') !!}
                 <select id="case_district" name="case_district" class = 'form-control' onchange = 'getFollowings($(this).val())'></select>
            </div>
        </div>
        <div class="col-md-6">
            <div id="div_follow" class="form-group" style="display:none;" >
                {!! Form::label('case_following', 'التابع') !!}
                <select id="case_follow" name="case_following" class = 'form-control'></select>
            </div>
        </div>
          
    </div>
</div>

<script>
    $(document).ready(function(){  
        var i = 0;      

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

    function getCities(gov_id) {        
        $.ajax({
            url: '/get-cities',
            type: "GET",
            data: {'governorate_id': gov_id},
            success:function(data) {  
                $('#div_city').show();
                $('#case_city').html('');
                var html = "<option value=''></option>";

                $.each(data, function (index, element) {
                    html += "<option value='" + element.code + "'>" + element.name + "</option>";
                });

                $('#case_city').append(html);
            }
        });
    }

    function getDistricts(city_id) {  
        $.ajax({
            url: '/get-districts',
            type: "GET",
            data: {'city_id': city_id},
            success:function(data) {  
                $('#div_district').show();
                $('#case_district').html('');
                var html = "<option value=''></option>";
                $.each(data, function (index, element) {
                    html += "<option value='" + element.code + "'>" + element.name + "</option>";
                });
                $('#case_district').append(html);
            }
        });
    }

    function getFollowings(district_id) {        
        $.ajax({
            url: '/get-followings',
            type: "GET",
            data: {'district_id': district_id},
            success:function(data) {  
                $('#div_follow').show();
                $('#case_follow').html('');
                var html = "<option value=''></option>";
                $.each(data, function (index, element) {
                    html += "<option value='" + element.code + "'>" + element.name + "</option>";
                });
                $('#case_follow').append(html);
            }
        });
    }


</script>
