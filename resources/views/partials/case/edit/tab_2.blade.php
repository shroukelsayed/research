<div id="tab_2" class="tab-pane">
    <h4>بيانات خاصة برب الأسرة</h4>
    <div class="row">
        <div class="col-md-6">
            {{-- name               text --}}
            <div class="form-group">
                {!! Form::label('case_name', 'الاسم') !!}
                {!! Form::text('case_name', $case->name, array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-md-6">
            {{-- gender             bool[male,female] --}}
            <div class="form-group">
                {!! Form::label('case_gender', 'النوع (ذكر-أنثى)') !!}<br>
                {!! Form::select('case_gender', ['ذكر' => 'ذكر', 'أنثى' => 'أنثى'], $case->gender, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {{-- age                text --}}
            <div class="form-group">
                {!! Form::label('case_age', 'السن') !!}
                {!! Form::text('case_age', $case->age, array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-md-6">
            {{-- national_id        text --}}
            <div class="form-group">
                {!! Form::label('case_national_id', 'رقم البطاقة') !!}
                {!! Form::text('case_national_id', $case->national_id, array('class' => 'form-control','maxlength' =>"14")) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {{-- ralationship       select[single,..] --}}
            <div class="form-group">
                {!! Form::label('case_relationship_status', 'الحاله الاجتماعية') !!}
                {!! Form::select('case_relationship_status', ['أعزب' => 'أعزب', 'متزوج' => 'متزوج', 'مطلق' => 'مطلق', 'أرمل' => 'أرمل', 'منفصل' => 'منفصل'], $case->relationship_status, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            {{-- edu_status       select[single,..] --}}
            <div class="form-group">
                {!! Form::label('case_education_status', 'الحاله التعليمية') !!}<br>
                {!! Form::select('case_education_status', ['أدون سن التعليم' => 'دون سن التعليم', 'في الابتدائية (1-2-3)' => ' في الابتدائية (1-2-3)', 'في الابتدائية (4-5-6)' => 'في الابتدائية (4-5-6)', 'في الإعدادية' => 'في الإعدادية', 'في الثانوية/ دبلوم' => 'في الثانوية/ دبلوم', 'في الجامعة' => 'في الجامعة' ,'متسرب'=>'متسرب' , 'امي'=>'امي','‬ ‫يقر‬أ‫ و يكتب' => '‬ ‫يقر‬أ‫ و يكتب' ,'انهي التعليم الأساسي (اعدادي)'=>'انهي التعليم الأساسي (اعدادي)','انهي التعليم الثانوي/ دبلوم/ الجامعي'=>'انهي التعليم الثانوي/ دبلوم/ الجامعي'], $case->education_status, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {{-- work_status       select[single,..] --}}
            <div class="form-group">
                {!! Form::label('case_work_status', 'المهنة') !!}
                {!! Form::select('case_work_status', ['لا يعمل' => 'لا يعمل', 'يعمل بشكل متقطع (المواسم/ الاجازات)' => 'يعمل بشكل متقطع (المواسم/ الاجازات)', 'يعمل بشكل دائم (سواء ارزقي او دائم)' => 'يعمل بشكل دائم (سواء ارزقي او دائم)', 'أخرى' => 'أخرى'], $case->work_status, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            {{-- profession         text --}}
            <div class="form-group">
                {!! Form::label('case_profession', 'وصف المهنة') !!}
                {!! Form::text('case_profession', $case->profession, array('class' => 'form-control')) !!}
            </div>
        </div>
    </div>
    @if( $case->national_id_front != null || $case->national_id_back != null)
    <div class="row">
        <div class="col-md-6">
            <img src="{{asset('uploads/'.$case->national_id_front)}}" style="width: 100%">
        </div>
        <div class="col-md-6">
            <img src="{{asset('uploads/'.$case->national_id_back)}}" style="width: 100%">
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <!-- fancy primary -->
            {!! Form::label('case_national_id_front', 'صورة وجه البطاقة') !!}
            <div class="fancy-file-upload fancy-file-primary">
                <i class="fa fa-upload"></i>
                <input type="file" class="form-control" name="case_national_id_front" onchange="jQuery(this).next('input').val(this.value);" />
                <input type="text" class="form-control" name="case_national_id_front_old" placeholder="no file selected" value="{{$case->national_id_front}}" readonly="" />
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
                <input type="text" class="form-control" name="case_national_id_back_old" placeholder="no file selected" value="{{$case->national_id_back}}" readonly="" />
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
                {!! Form::text('case_phone', $case->phone, array('class' => 'form-control','maxlength' =>"11")) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_is_ill', 'يعاني من مرض؟') !!}<br>
                {!! Form::select('case_is_ill', ['نعم' => 'نعم', 'لا' => 'لا'], $case->is_ill, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
      
          <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_illness_type', 'نوع المرض') !!}
                {!! Form::select('case_illness_type[]', [
                "أمراض كبر السن والشيخوخة" => "أمراض كبر السن والشيخوخة",
                "إعاقة حركية" => "إعاقة حركية",
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
                ], json_decode($case->illness_type), array('multiple'=>'multiple', 'class' => 'form-control  select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_illness_description', 'وصف الحالة المرضية') !!}
                {!! Form::text('case_illness_description', $case->illness_description, array('class' => 'form-control')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_illness_prevent_movement', '‏هل هذا المرض يعيق الحركة') !!}
                {!! Form::select('case_illness_prevent_movement', ['نعم بشكل كلي' => 'نعم بشكل كلي', 'نعم بشكل جزئي' => 'نعم بشكل جزئي', 'لا' => 'لا'], $case->illness_prevent_movement, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_monthly_treatment', '‏هل تحتاج إلي علاج شهري') !!}<br>
                {!! Form::select('case_need_monthly_treatment', ['نعم' => 'نعم', 'لا' => 'لا'], $case->need_monthly_treatment, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_has_national_support', '‏‏هل تأخذ علاج على نفقة الدولة') !!}
                {!! Form::select('case_has_national_support', ['نعم كل العلاج' => 'نعم كل العلاج', 'نعم  جزء من العلاج' => 'نعم  جزء من العلاج', 'لا' => 'لا'], $case->has_national_support, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_treatment_monthly_amount', '‏تكلفة العلاج الشهري') !!}
                {!! Form::select('case_treatment_monthly_amount', ['أقل من 100 جنية' => 'أقل من 100 جنية', 'من 100 إلى أقل من 300' => 'من 100 إلى أقل من 300', 'من 300 إلى أقل من 600' => 'من 300 إلى أقل من 600', 'أكثر من 600' => 'أكثر من 600'], $case->treatment_monthly_amount, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_treatment_affordable', '‏هل تقوم بشراء العلاج ‏') !!}
                {!! Form::select('case_treatment_affordable', ['نعم كل العلاج' => 'نعم كل العلاج', 'نعم  جزء من العلاج' => 'نعم  جزء من العلاج', 'لا' => 'لا'], $case->treatment_affordable, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_operation', '‏هل تحتاج إلي عملية') !!}<br>
                {!! Form::select('case_need_operation', ['نعم' => 'نعم', 'لا' => 'لا'], $case->need_operation, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
</div>
