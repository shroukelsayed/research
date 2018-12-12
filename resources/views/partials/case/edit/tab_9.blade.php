<div id="tab_9" class="tab-pane">
    <h4>النفقات</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('expenses_house_rent', 'إيجار السكن') !!}
                {!! Form::number('expenses_house_rent', $case->expenses_house_rent, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('expenses_farm_rent', 'أيجار أرض زراعية') !!}
                {!! Form::number('expenses_farm_rent', $case->expenses_farm_rent, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_treatment', 'العلاج والكشف') !!}
                {!! Form::number('case_expenses_treatment', $case->expenses_treatment, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_detergent', 'الصابون والمنظفات') !!}
                {!! Form::number('case_expenses_detergent', $case->expenses_detergent, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_school_subscription', 'مصاريف المدارس') !!}
                {!! Form::number('case_expenses_school_subscription', $case->expenses_school_subscription, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_child_course', 'دروس الأبناء') !!}
                {!! Form::number('case_expenses_child_course', $case->expenses_child_course, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_water_receipt', 'فاتورة المياه') !!}
                {!! Form::number('case_expenses_water_receipt', $case->expenses_water_receipt, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_electricity_receipt', 'فاتورة الكهرباء') !!}
                {!! Form::number('case_expenses_electricity_receipt', $case->expenses_electricity_receipt, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_clothes', 'الملابس') !!}
                {!! Form::number('case_expenses_clothes', $case->expenses_clothes, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_phone_credit', 'رصيد التلفون') !!}
                {!! Form::number('case_expenses_phone_credit', $case->expenses_phone_credit, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_debts', 'سداد ديون') !!}
                {!! Form::number('case_expenses_debts', $case->expenses_debts, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_transportation', 'المواصلات') !!}
                {!! Form::number('case_expenses_transportation', $case->expenses_transportation, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_pets_food', 'أكل المواشي') !!}
                {!! Form::number('case_expenses_pets_food', $case->expenses_pets_food, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_smoking', 'التدخين') !!}
                {!! Form::number('case_expenses_smoking', $case->expenses_smoking, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_food', 'إجمالي نفقات الطعام') !!}
                {!! Form::number('case_expenses_food', $case->expenses_food, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_other', 'نفقات أخرى (وضح)') !!}
                {!! Form::number('case_expenses_other', $case->expenses_other, array('class' => 'form-control expenses')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_total_category', 'اجمالى نفقات الأسرة (فئات)') !!}
                {!! Form::select('case_expenses_total_category',['أقل من 300 جنية' => 'أقل من 300 جنية', 'من 300 إلى أقل من 600' => 'من 300 إلى أقل من 600', 'من 600 إلى أقل من 900' => 'من 600 إلى أقل من 900', 'من 900 إلى أقل من 1200' => 'من 900 إلى أقل من 1200',  'من 1200 إلى  1500' => 'من 1200 إلى  1500', 'أكثر من 1500' => 'أكثر من 1500', 'أخرى' => 'أخرى'] , $case->expenses_total_category, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_expenses_total', 'اجمالى النفقات') !!}
                {!! Form::number('case_expenses_total', $case->expenses_total, array('class' => 'form-control')) !!}
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
        
    $(".expenses").blur( function () {
        var expenses_total = 0;
        expenses_total  +=  Number($(":input[name='expenses_house_rent']").val()) + Number($(":input[name='expenses_farm_rent']").val()) + 
                            Number($(":input[name='case_expenses_treatment']").val()) + Number($(":input[name='case_expenses_detergent']").val()) +
                            Number($(":input[name='case_expenses_school_subscription']").val()) + Number($(":input[name='case_expenses_child_course']").val()) +
                            Number($(":input[name='case_expenses_water_receipt']").val()) + Number($(":input[name='case_expenses_electricity_receipt']").val()) +
                            Number($(":input[name='case_expenses_clothes']").val()) + Number($(":input[name='case_expenses_phone_credit']").val()) +
                            Number($(":input[name='case_expenses_debts']").val()) + Number($(":input[name='case_expenses_transportation']").val()) +
                            Number($(":input[name='case_expenses_pets_food']").val()) + Number($(":input[name='case_expenses_smoking']").val()) +
                            Number($(":input[name='case_expenses_food']").val()) + Number($(":input[name='case_expenses_other']").val());
        $(":input[name='case_expenses_total']").val(expenses_total);
    });


</script>