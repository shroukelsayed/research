<div id="tab6" class="tab-pane">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_income_source_count', 'عدد مصادر الدخل') !!}<br>
                {!! Form::text('case_income_source_count', null, array('id' => 'all', 'class' => 'form-control form_input', 'onchange' => 'console.log($(this).val());if($(this).val() != null && $(this).val() >= 1){$("#sources").show();$("#inc").show();}else{$("#sources").hide();$("#inc").hide();}')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_income_amount_category', 'اجمالى دخل الأسرة (فئات)') !!}
                {!! Form::select('case_income_amount_category', ['أقل من 300 جنية' => 'أقل من 300 جنية', 'من 300 إلى أقل من 600' => 'من 300 إلى أقل من 600', 'من 600 إلى أقل من 900' => 'من 600 إلى أقل من 900', 'من 900 إلى أقل من 1200' => 'من 900 إلى أقل من 1200', 'من 1200 إلى أقل من 1500' => 'من 1200 إلى أقل من 1500', 'أكثر من 1500' => 'أكثر من 600', 'أخرى' => 'أخرى'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                المصدر
                <br>
                {!! Form::select('income_source_type', ['شغلك' => 'شغلك',
                 'شغل الزوجة' => 'شغل الزوجة',
                 'شغل ابنك' => 'شغل ابنك',
                 'تربية مواشي/طيور' => 'تربية مواشي/طيور',
                 'أرض زراعية (بيع محاصيل)' => 'أرض زراعية (بيع محاصيل)',
                 'مشروع صغير' => 'مشروع صغير',
                 'معاش' => 'معاش',
                 'أقارب عايشين معاكوا في البيت' => 'أقارب عايشين معاكوا في البيت',
                 'بيع ممتلكات' => 'بيع ممتلكات',
                 'مدخرات' => 'مدخرات',
                 'مساعدات مادية من جمعيات' => 'مساعدات مادية من جمعيات',
                 'مساعدات مادية من افراد' => 'مساعدات مادية من افراد',
                 'مصادر دخل أخرى' => 'مصادر دخل أخرى',
                 ], null, array('placeholder' => 'لا شيء', 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('income_source_flow', 'نوع المصدر‏') !!}
                {!! Form::select('income_source_flow', ['غير مستقر' => 'غير مستقر', 'شبه مستقر' => 'شبه مستقر', 'مستقر' => 'مستقر'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
</div>
