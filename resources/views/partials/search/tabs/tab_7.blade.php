<div id="tab7" class="tab-pane">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_support_count', 'عدد المساعدات') !!}
                {!! Form::select('case_support_count', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6'], null, array('placeholder' => 'لا شيء', 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('support_source_category', 'القائم بالمساعده') !!}
            {!! Form::select('support_source_category', ['جمعية خيرية' => 'جمعية خيرية',
             'أهل الخير' => 'أهل الخير',
             'الأهل أو الأقارب' => 'الأهل أو الأقارب',
             'أخرى' => 'أخرى',
             ], null, array('placeholder' => 'لا شيء', 'class' => 'form-control select2 form_input', 'style' => 'width:100%', 'onchange' => 'if($(this).val()=="أخرى"){$("#other1").show();}else{$("#other1").hide();}')) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('support_source_name', 'اسم المصدر') !!}
                {!! Form::select('support_source_name', ['لا أعلم' => 'جمعية خيرية',
                 'مصر الخير' => 'مصر الخير',
                 'رساله' => 'رساله',
                 'بنك الطعام' => 'بنك الطعام',
                 'الأورمان' => 'الأورمان',
                 'عمار الأرض' => 'عمار الأرض',
                 'أخرى' => 'أخرى',
                 ], null, array('placeholder' => 'لا شيء', 'class' => 'form-control select2 form_input', 'style' => 'width:100%', 'onchange' => 'if($(this).val()=="أخرى"){$("#other2").show();}else{$("#other2").hide();}')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('support_type', 'نوع المساعده') !!}
                {!! Form::select('support_type', [
                 'غذاء' => 'غذاء',
                 'بطاطين' => 'بطاطين',
                 'بناء سقف' => 'بناء سقف',
                 'توصيل مياه' => 'توصيل مياه',
                 'أثاث للمنزل' => 'أثاث للمنزل',
                 'أخرى' => 'أخرى',
                 ], null, array('placeholder' => 'لا شيء', 'class' => 'form-control select2 form_input', 'style' => 'width:100%', 'onchange' => 'if($(this).val()=="أخرى"){$("#other3").show();}else{$("#other3").hide();}')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('support_period', 'تكرار المساعدة') !!}
                {!! Form::select('support_period', [
                 'مره واحده' => 'مره واحده',
                 'موسمية' => 'موسمية',
                 'شهرية' => 'شهرية',
                 'لا أعلم' => 'لا أعلم',
                 'أخرى' => 'أخرى',
                 ], null, array('placeholder' => 'لا شيء', 'class' => 'form-control select2 form_input', 'style' => 'width:100%', 'onchange' => 'if($(this).val()=="أخرى"){$("#other4").show();}else{$("#other4").hide();}')) !!}
            </div>
        </div>
    </div>
</div>
