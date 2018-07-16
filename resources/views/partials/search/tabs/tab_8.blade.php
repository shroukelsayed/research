<div id="tab8" class="tab-pane">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_debts_total_range', 'اجمالى الديون (فئات)') !!}
                {!! Form::select('case_debts_total_range', ['لا يوجد' => 'لا يوجد', 'أقل من ألف جنية' => 'أقل من ألف جنية', 'من ألف إلى 5 ألاف' => 'من ألف إلى 5 ألاف', 'من 10 ألاف إلى 20 ألف' => 'من 10 ألاف إلى 20 ألف', 'من 20 ألف إلى 30 ألف' => 'من 20 ألف إلى 30 ألف', 'من 30 ألف إلى 40 ألف' => 'من 30 ألف إلى 40 ألف', 'من 40 ألف إلى 50 ألف' => 'من 40 ألف إلى 50 ألف', 'أكثر من 50 ألف' => 'أكثر من 50 ألف'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('debt_reason', 'سبب الدين') !!}
                {!! Form::text('debt_reason', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('debt_refund_method', '‏طريقة السداد') !!}
                {!! Form::select('debt_refund_method', ['شهرى' => 'شهرى',
                 'حسب الظروف' => 'حسب الظروف',
                 'لا يتم السداد' => 'لا يتم السداد',
                 ], null, array('placeholder' => 'لا شيء', 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>

</div>
