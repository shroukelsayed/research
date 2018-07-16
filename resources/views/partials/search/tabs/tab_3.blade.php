<div id="tab3" class="tab-pane">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('partner_name', 'الاسم') !!}
                {!! Form::text('partner_name', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('partner_gender', 'النوع (ذكر-أنثى)') !!}<br>
                {!! Form::select('partner_gender', ['ذكر' => 'ذكر', 'أنثى' => 'أنثى'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('partner_age', 'السن') !!}
                {!! Form::text('partner_age', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">

            {{-- 4-	رقم البطاقة --}}
            <div class="form-group">
                {!! Form::label('partner_national_id', 'رقم البطاقة') !!}
                {!! Form::text('partner_national_id', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('partner_relationship_status', 'الحاله الاجتماعية') !!}
                {!! Form::select('partner_relationship_status', ['أعزب' => 'أعزب', 'متزوج' => 'متزوج', 'مطلق' => 'مطلق', 'أرمل' => 'أرمل', 'منفصل' => 'منفصل'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('partner_education_status', 'الحاله التعليمية') !!}
                {!! Form::select('partner_education_status', ['أمي (غير متعلم)' => 'أمي (غير متعلم)', 'يقرأ ويكتب' => 'يقرأ ويكتب', 'تعليم أساسي' => 'تعليم أساسي', 'متوسط' => 'متوسط', 'فوق متوسط' => 'فوق متوسط', 'جامعي' => 'جامعي'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('partner_profession', 'بيشتغل إيه') !!}
                {!! Form::text('partner_profession', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('partner_phone', 'رقم الموبايل') !!}
                {!! Form::text('partner_phone', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('partner_is_ill', 'يعاني من مرض؟') !!}<br>
                <input type="checkbox" name="partner_is_ill" value="" class="form_input" onchange="if($(this).is(':checked')){ $(this).val('1');}else{ $(this).val('');}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('partner_illness_type', 'نوع المرض') !!}
                {!! Form::select('partner_illness_type', [
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
                {!! Form::label('partner_illness_prevent_movement', '‏هل هذا المرض يعيق الحركة') !!}
                {!! Form::select('partner_illness_prevent_movement', ['نعم بشكل كلي' => 'نعم بشكل كلي', 'نعم بشكل جزئي' => 'نعم بشكل جزئي', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('partner_illness_need_monthly_support', '‏هل تحتاج إلي علاج شهري') !!}<br>
                {!! Form::select('partner_illness_need_monthly_support', ['نعم' => 'نعم', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('partner_illness_is_national_support', '‏‏هل تأخذ علاج على نفقة الدولة') !!}
                {!! Form::select('partner_illness_is_national_support', ['نعم كل العلاج' => 'نعم كل العلاج', 'نعم  جزء من العلاج' => 'نعم  جزء من العلاج', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('partner_illness_monthly_amount', '‏تكلفة العلاج الشهري') !!}
                {!! Form::select('partner_illness_monthly_amount', ['أقل من 100 جنية' => 'أقل من 100 جنية', 'من 100 إلى أقل من 300' => 'من 100 إلى أقل من 300', 'من 300 إلى أقل من 600' => 'من 300 إلى أقل من 600', 'أكثر من 600' => 'أكثر من 600'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('partner_illness_affordable', '‏هل تقوم بشراء العلاج ‏') !!}
                {!! Form::select('partner_illness_affordable', ['نعم كل العلاج' => 'نعم كل العلاج', 'نعم  جزء من العلاج' => 'نعم  جزء من العلاج', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('partner_illness_need_operation', '‏هل تحتاج إلي عملية') !!}<br>
                {!! Form::select('partner_illness_need_operation', ['نعم' => 'نعم', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
</div>