<div id="tab_9" class="tab-pane">
    <h4>النفقات</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_house_rent', 'إيجار السكن') !!}
                {!! Form::text('case_expenses_house_rent', old('case_expenses_house_rent') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_farm_rent', 'أيجار أرض زراعية') !!}
                {!! Form::text('case_expenses_farm_rent', old('case_expenses_farm_rent') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_treatment', 'العلاج والكشف') !!}
                {!! Form::text('case_expenses_treatment', old('case_expenses_treatment') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_detergent', 'الصابون والمنظفات') !!}
                {!! Form::text('case_expenses_detergent', old('case_expenses_detergent') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_school_subscription', 'مصاريف المدارس') !!}
                {!! Form::text('case_expenses_school_subscription', old('case_expenses_school_subscription') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_child_course', 'دروس الأبناء') !!}
                {!! Form::text('case_expenses_child_course', old('case_expenses_child_course') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_water_receipt', 'فاتورة المياه') !!}
                {!! Form::text('case_expenses_water_receipt', old('case_expenses_water_receipt') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_electricity_receipt', 'فاتورة الكهرباء') !!}
                {!! Form::text('case_expenses_electricity_receipt', old('case_expenses_electricity_receipt') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_clothes', 'الملابس') !!}
                {!! Form::text('case_expenses_clothes', old('case_expenses_clothes') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_phone_credit', 'رصيد التلفون') !!}
                {!! Form::text('case_expenses_phone_credit', old('case_expenses_phone_credit') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_debts', 'سداد ديون') !!}
                {!! Form::text('case_expenses_debts', old('case_expenses_debts') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_transportation', 'المواصلات') !!}
                {!! Form::text('case_expenses_transportation', old('case_expenses_transportation') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_pets_food', 'أكل المواشي') !!}
                {!! Form::text('case_expenses_pets_food', old('case_expenses_pets_food') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_smoking', 'التدخين') !!}
                {!! Form::text('case_expenses_smoking', old('case_expenses_smoking') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_food', 'إجمالي نفقات الطعام') !!}
                {!! Form::text('case_expenses_food', old('case_expenses_food') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_other', 'نفقات أخرى (وضح)') !!}
                {!! Form::text('case_expenses_other', old('case_expenses_other') or null, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_total_category', 'اجمالى نفقات الأسرة (فئات)') !!}
                {!! Form::select('case_expenses_total_category', ['أقل من 300 جنية' => 'أقل من 300 جنية', 'من 300 إلى أقل من 600' => 'من 300 إلى أقل من 600', 'من 600 إلى أقل من 900' => 'من 600 إلى أقل من 900', 'من 900 إلى أقل من 1200' => 'من 900 إلى أقل من 1200',  'من 1200 إلى  1500' => 'من 1200 إلى  1500', 'أكثر من 1500' => 'أكثر من 1500', 'أخرى' => 'أخرى'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_total', 'اجمالى النفقات') !!}
                {!! Form::text('case_expenses_total', old('case_expenses_total') or null, array('class' => 'form-control')) !!}
            </div>
        </div>
    </div>

</div>

    <script type="text/javascript">
        
        $(".expenses").blur( function () {
            var expenses_total = Number($(":input[name='case_expenses_total']").val());
            if($(this).val() != ''){
                expenses_total += Number($(this).val());
            }
            $(":input[name='case_expenses_total']").val(expenses_total);
        });


    </script>