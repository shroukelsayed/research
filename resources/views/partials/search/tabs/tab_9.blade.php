<div id="tab9" class="tab-pane">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_total_category', 'اجمالى نفقات الأسرة (فئات)') !!}
                {!! Form::select('case_expenses_total_category', ['أقل من 300 جنية' => 'أقل من 300 جنية', 'من 300 إلى أقل من 600' => 'من 300 إلى أقل من 600', 'من 600 إلى أقل من 900' => 'من 600 إلى أقل من 900', 'من 900 إلى أقل من 1200' => 'من 900 إلى أقل من 1200', 'من 1200 إلى أقل من 1500' => 'من 1200 إلى أقل من 1500', 'أكثر من 1500' => 'أكثر من 600', 'أخرى' => 'أخرى'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_total', 'اجمالى النفقات') !!}
                {!! Form::text('case_expenses_total', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_house_rent', 'إيجار السكن') !!}
                {!! Form::text('case_expenses_house_rent', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_farm_rent', 'أيجار أرض زراعية') !!}
                {!! Form::text('case_expenses_farm_rent', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_treatment', 'العلاج والكشف') !!}
                {!! Form::text('case_expenses_treatment', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_detergent', 'الصابون والمنظفات') !!}
                {!! Form::text('case_expenses_detergent', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_school_subscription', 'مصاريف المدارس') !!}
                {!! Form::text('case_expenses_school_subscription', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_child_course', 'دروس الأبناء') !!}
                {!! Form::text('case_expenses_child_course', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_water_receipt', 'فاتورة المياه') !!}
                {!! Form::text('case_expenses_water_receipt', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_electricity_receipt', 'فاتورة الكهرباء') !!}
                {!! Form::text('case_expenses_electricity_receipt', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_clothes', 'الملابس') !!}
                {!! Form::text('case_expenses_clothes', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_phone_credit', 'رصيد التلفون') !!}
                {!! Form::text('case_expenses_phone_credit', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_debts', 'سداد ديون') !!}
                {!! Form::text('case_expenses_debts', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_transportation', 'المواصلات') !!}
                {!! Form::text('case_expenses_transportation', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_pets_food', 'أكل المواشي') !!}
                {!! Form::text('case_expenses_pets_food', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_smoking', 'التدخين') !!}
                {!! Form::text('case_expenses_smoking', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_food', 'إجمالي نفقات الطعام') !!}
                {!! Form::text('case_expenses_food', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_other', 'نفقات أخرى (وضح)') !!}
                {!! Form::text('case_expenses_other', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
    </div>
</div>