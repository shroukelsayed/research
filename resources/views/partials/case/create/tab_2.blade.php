<div id="tab_2" class="tab-pane">
    <h4>بيانات خاصة برب الأسرة</h4>
    <div class="row">
        <div class="col-md-6">
            {{-- name               text --}}
            <div class="form-group">
                {!! Form::label('case_name', 'الاسم') !!}
                {!! Form::text('case_name', old('case_name') or null, array('class' => 'form-control')) !!}
                 <span id='error3' style ="display:none;color: red;">يجب ادخال اسم الحالة </span>
            </div>
        </div>
        <div class="col-md-6">
            {{-- gender             bool[male,female] --}}
            <div class="form-group">
                {!! Form::label('case_gender', 'النوع (ذكر-أنثى)') !!}<br>
                {!! Form::select('case_gender', ['ذكر' => 'ذكر', 'أنثى' => 'أنثى'], old('case_gender') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {{-- age                text --}}
            <div class="form-group">
                {!! Form::label('case_age', 'السن') !!}

                {!! Form::text('case_age', old('case_age') or null, array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-md-6">
            {{-- national_id        text --}}
            <div class="form-group">
                {!! Form::label('case_national_id', 'رقم البطاقة') !!}
                {!! Form::text('case_national_id', old('case_national_id') or null, array('class' => 'form-control','maxlength' =>"14")) !!}
                 <span id='error' style ="display:none;color: red;">رقم البطاقة يجب ان يكون 14 رقم </span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {{-- ralationship       select[single,..] --}}
            <div class="form-group">
                {!! Form::label('case_relationship_status', 'الحاله الاجتماعية') !!}
                {!! Form::select('case_relationship_status', ['أعزب' => 'أعزب', 'متزوج' => 'متزوج', 'مطلق' => 'مطلق', 'أرمل' => 'أرمل', 'منفصل' => 'منفصل'], old('case_relationship_status') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            {{-- edu_status       select[single,..] --}}
            <div class="form-group">
                {!! Form::label('case_education_status', 'الحاله التعليمية') !!}<br>
                {!! Form::select('case_education_status', ['دون سن التعليم' => 'دون سن التعليم', 'في الابتدائية (1-2-3)' => ' في الابتدائية (1-2-3)', 'في الابتدائية (4-5-6)' => 'في الابتدائية (4-5-6)', 'في الإعدادية' => 'في الإعدادية', 'في الثانوية/ دبلوم' => 'في الثانوية/ دبلوم', 'في الجامعة' => 'في الجامعة' ,'متسرب'=>'متسرب' , 'امي'=>'امي','‬يقرأ ويكتب' => '‬ ‫يقر‬أ‫ و يكتب' ,'انهي التعليم الأساسي (اعدادي)'=>'انهي التعليم الأساسي (اعدادي)','انهي التعليم الثانوي/ دبلوم/ الجامعي'=>'انهي التعليم الثانوي/ دبلوم/ الجامعي'], old('case_education_status') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {{-- case_work_status       select[single,..] --}}
            <div class="form-group">
                {!! Form::label('case_work_status', 'المهنة') !!}
                {!! Form::select('case_work_status', ['لا يعمل' => 'لا يعمل', 'يعمل بشكل متقطع (المواسم/ الاجازات)' => 'يعمل بشكل متقطع (المواسم/ الاجازات)', 'يعمل بشكل دائم (سواء ارزقي او دائم)' => 'يعمل بشكل دائم (سواء ارزقي او دائم)', 'أخرى' => 'أخرى'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            {{-- profession         text --}}
            <div class="form-group">
                {!! Form::label('case_profession', 'وصف المهنة') !!}
                {!! Form::text('case_profession', old('case_profession') or null, array('class' => 'form-control')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- fancy primary -->
            {!! Form::label('case_national_id_front', 'صورة وجه البطاقة') !!}
            <div class="fancy-file-upload fancy-file-primary">
                <i class="fa fa-upload"></i>
                <input type="file" class="form-control" name="case_national_id_front" onchange="jQuery(this).next('input').val(this.value);" />
                <input type="text" class="form-control" placeholder="no file selected" readonly="" />
                <span class="button">Choose File</span>
                يجب أن يكون حجم الملفات أقل من 40 ميغابايت.
                أنواع الملفات المسموح بها: png gif jpg jpeg.
            </div>
        </div>
        <div class="col-md-6">
            <!-- fancy primary -->
            {!! Form::label('case_national_id_back', 'صورة ظهر البطاقة') !!}
            <div class="fancy-file-upload fancy-file-primary">
                <i class="fa fa-upload"></i>
                <input type="file" class="form-control" name="case_national_id_back" onchange="jQuery(this).next('input').val(this.value);" />
                <input type="text" class="form-control" placeholder="no file selected" readonly="" />
                <span class="button">Choose File</span>
                يجب أن يكون حجم الملفات أقل من 40 ميغابايت.
                أنواع الملفات المسموح بها: png gif jpg jpeg.
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {{-- phone              text --}}
            <div class="form-group">
                {!! Form::label('case_phone', 'رقم الموبايل') !!}
                {!! Form::text('case_phone', old('case_phone') or null, array('class' => 'form-control','maxlength' =>"11")) !!}
                 <span id='error2' style ="display:none;color: red;">رقم الموبايل يجب ان يكون 11 رقم</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_is_ill', 'يعاني من مرض؟') !!}<br>
                {!! Form::select('case_is_ill', ['نعم' => 'نعم', 'لا' => 'لا'], old('case_is_ill') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_illness_type', 'نوع المرض') !!}
                {!! Form::select('case_illness_type[]', [
                "أمراض كبر السن والشيخوخة" => "أمراض كبر السن والشيخوخة",
                "إعاقة حركية" => "إعاقة حركية ",
                "إعاقة سمعية" => "إعاقة سمعية",
                "إعاقة بصرية" => "إعاقة بصرية",
                "امراض نفسية وعصبية" => "امراض نفسية وعصبية",
                "امراض عقلية" => "امراض عقلية",
                "امراض عظام وعمود فقري" => "امراض عظام وعمود فقري",
                "امراض بصرية (عيون)"=>"امراض بصرية (عيون)",
                "أنميا وسوء تغذية" => "أنميا وسوء تغذية",
                "أمراض السكر والضغط" => "أمراض السكر والضغط",
                "أمراض القلب" => "أمراض القلب",
                "أمراض الرقة والجهاز التنفسي" => "أمراض الرقة والجهاز التنفسي",
                "امراض المعدة والجهاز الهضمي" => "امراض المعدة والجهاز الهضمي",
                "اورام سرطانية" => "اورام سرطانية",
                "امراض الكلى والفشل الكلوي" => "امراض الكلى والفشل الكلوي",
                "امراض الكبد وفيروس C" => "امراض الكبد وفيروس C",
                "امراض جلدية" => "امراض جلدية",
                "امراض اخرى" => "امراض اخرى"
                ], old('case_illness_type[]') or null, array('name' =>'case_illness_type[]','multiple'=>'multiple', 'class' => 'form-control  select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_illness_description', 'وصف الحالة المرضية') !!}
                {!! Form::text('case_illness_description', old('case_illness_description') or null, array('class' => 'form-control')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_illness_prevent_movement', '‏هل هذا المرض يعيق الحركة') !!}
                {!! Form::select('case_illness_prevent_movement', ['نعم بشكل كلي' => 'نعم بشكل كلي', 'نعم بشكل جزئي' => 'نعم بشكل جزئي', 'لا' => 'لا'], old('case_gender') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_illness_need_monthly_treatment', '‏هل تحتاج إلي علاج شهري') !!}<br>
                {!! Form::select('case_illness_need_monthly_treatment', ['نعم' => 'نعم', 'لا' => 'لا'], old('case_illness_need_monthly_treatment') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
           </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_illness_is_national_support', '‏‏هل تأخذ علاج على نفقة الدولة') !!}
                {!! Form::select('case_illness_is_national_support',['نعم كل العلاج' => 'نعم كل العلاج', 'نعم  جزء من العلاج' => 'نعم  جزء من العلاج', 'لا' => 'لا'], old('case_illness_is_national_support') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_illness_treatment_monthly_amount', '‏تكلفة العلاج الشهري') !!}
                {!! Form::select('case_illness_treatment_monthly_amount',['أقل من 100 جنية' => 'أقل من 100 جنية', 'من 100 إلى أقل من 300' => 'من 100 إلى أقل من 300', 'من 300 إلى أقل من 600' => 'من 300 إلى أقل من 600', 'أكثر من 600' => 'أكثر من 600'], old('case_illness_treatment_monthly_amount') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_treatment_affordable', '‏هل تقوم بشراء العلاج ‏') !!}
                {!! Form::select('case_treatment_affordable', ['نعم كل العلاج' => 'نعم كل العلاج', 'نعم  جزء من العلاج' => 'نعم  جزء من العلاج', 'لا' => 'لا'], old('case_treatment_affordable') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_operation', '‏هل تحتاج إلي عملية') !!}<br>
                {!! Form::select('case_need_operation', ['نعم' => 'نعم', 'لا' => 'لا'], old('case_need_operation') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    


    $("#case_national_id").on("keypress keyup blur",function (event) {    
       $(this).val($(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });

    $("#case_phone").on("keypress keyup blur",function (event) {    
       $(this).val($(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });

    $("#case_national_id").on('blur',(function(){
        var el = $('#case_national_id').val();
        if ( el.length ==0 || el.length ==14 ) {
            $('#error').hide();
        }else{
            $('#error').show();
            setTimeout(function() {
                $('#case_national_id').focus();
            }, 0);
        }
    })); 

    $("#case_phone").on('blur',(function(){
        var el = $('#case_phone').val();
        if ( el.length ==0 || el.length ==11 ) {
            $('#error2').hide();
        }else{
            $('#error2').show();
            setTimeout(function() {
                $('#case_phone').focus();
            }, 0);
        }
    })); 

    $("#case_name").on('blur',(function(){
        var el = $('#case_name').val();
        if ( el.length !=0  ) {
            $('#error3').hide();
        }else{
            $('#error3').show();
            setTimeout(function() {
                $('#case_name').focus();
            }, 0);
        }
    })); 

</script>