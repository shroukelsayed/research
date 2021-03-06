<div id="tab5" class="tab-pane">
    <div class="row">
    <div class="col-md-4">
    <div class="form-group">
    {!! Form::label('case_referral_sum', 'عدد الأقارب') !!}
    {!! Form::text('case_referral_sum', null, array('class' => 'form-control form_input')) !!}
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
        {!! Form::label('roommate_gender', 'النوع (ذكر-أنثى)') !!}<br>
        {!! Form::select('roommate_gender', ['نعم' => 'نعم', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
        {!! Form::label('roommate_age', 'السن') !!}
        {!! Form::text('roommate_age', null, array('class' => 'form-control form_input')) !!}
    </div>
    </div>
    <div class="col-md-4">

    <div class="form-group">
        {!! Form::label('roommate_relativity', 'صلة القرابة') !!}
        {!! Form::select('roommate_relativity', ['الأم/الأب' => 'الأم/الأب', 'والد الزوج/والد الزوجة' => 'والد الزوج/والد الزوجة', 'زوجة الإبن/زوج الإبنة' => 'زوجة الإبن/زوج الإبنة', 'أخ/أخت' => 'أخ/أخت', 'أخ الزوجة/أخت الزوجة' => 'أخ الزوجة/أخت الزوجة', 'حفيد/حفيدة' => 'حفيد/حفيدة', 'أخرى' => 'أخرى'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
    </div>
    </div>

    </div>

    <div class="row">
    <div class="col-md-4">
    <div class="form-group">
        {!! Form::label('roommate_relationship', 'الحاله الاجتماعية') !!}
        {!! Form::select('roommate_relationship', ['أعزب' => 'أعزب', 'متزوج' => 'متزوج', 'مطلق' => 'مطلق', 'أرمل' => 'أرمل', 'منفصل' => 'منفصل'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
    </div>
    </div>


    <div class="col-md-4">
    <div class="form-group">
        {!! Form::label('roommate_education_status', 'الحاله التعليمية') !!}
        {!! Form::select('roommate_education_status', ['أمي (غير متعلم)' => 'أمي (غير متعلم)', 'يقرأ ويكتب' => 'يقرأ ويكتب', 'تعليم أساسي' => 'تعليم أساسي', 'متوسط' => 'متوسط', 'فوق متوسط' => 'فوق متوسط', 'جامعي' => 'جامعي'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-md-4">
    <div class="form-group">
    {!! Form::label('roommate_profession', 'بيشتغل إيه؟') !!}
    {!! Form::text('roommate_profession', null, array('class' => 'form-control form_input')) !!}
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
        {!! Form::label('roommate_is_ill', 'يعاني من مرض؟') !!}<br>
        <input type="checkbox" name="roommate_is_ill" value="" class="form_input" onchange="if($(this).is(':checked')){ $(this).val('1');}else{ $(this).val('');}">
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-md-4">
    <div class="form-group">
        {!! Form::label('roommate_illness_type', 'نوع المرض') !!}
        {!! Form::select('roommate_illness_type', [
        "أمراض كبر السن والشيخوخة" => "أمراض كبر السن والشيخوخة",
        "إعاقة (حركية، سمعية، بصرية)" => "إعاقة (حركية، سمعية، بصرية)",
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
        ], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
        {!! Form::label('roommate_illness_prevent_movement', '‏هل هذا المرض يعيق الحركة') !!}
        {!! Form::select('roommate_illness_prevent_movement', ['نعم بشكل كلي' => 'نعم بشكل كلي', 'نعم بشكل جزئي' => 'نعم بشكل جزئي', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
        {!! Form::label('roommate_illness_need_monthly_support', '‏هل تحتاج إلي علاج شهري') !!}<br>
        {!! Form::select('roommate_illness_need_monthly_support', ['نعم' => 'نعم', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-md-4">
    <div class="form-group">
        {!! Form::label('roommate_illness_is_national_support', '‏‏هل تأخذ علاج على نفقة الدولة') !!}
        {!! Form::select('roommate_illness_is_national_support', ['نعم كل العلاج' => 'نعم كل العلاج', 'نعم  جزء من العلاج' => 'نعم  جزء من العلاج', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
        {!! Form::label('roommate_illness_monthly_amount', '‏تكلفة العلاج الشهري') !!}
        {!! Form::select('roommate_illness_monthly_amount', ['أقل من 100 جنية' => 'أقل من 100 جنية', 'من 100 إلى أقل من 300' => 'من 100 إلى أقل من 300', 'من 300 إلى أقل من 600' => 'من 300 إلى أقل من 600', 'أكثر من 600' => 'أكثر من 600'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
        {!! Form::label('roommate_illness_affordable', '‏هل تقوم بشراء العلاج ‏') !!}
        {!! Form::select('roommate_illness_affordable', ['نعم كل العلاج' => 'نعم كل العلاج', 'نعم  جزء من العلاج' => 'نعم  جزء من العلاج', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-md-4">
    <div class="form-group">
        {!! Form::label('roommate_illness_need_operation', '‏هل تحتاج إلي عملية') !!}<br>
        {!! Form::select('roommate_illness_need_operation', ['نعم' => 'نعم', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
    </div>
    </div>

    </div>

</div>
