<div id="tab_8" class="tab-pane">
    <h4>الديون</h4>
    <div class="row">
        <div class="col-md-6">
            {{-- case_income_amount         text --}}
            <div class="form-group">
                {!! Form::label('case_debts_total_range', 'اجمالى الديون (فئات)') !!}
                {!! Form::select('case_debts_total_range', ['لا يوجد' => 'لا يوجد', 'أقل من ألف جنية' => 'أقل من ألف جنية', 'من ألف إلى 5 ألاف' => 'من ألف إلى 5 ألاف', 'من 10 ألاف إلى 20 ألف' => 'من 10 ألاف إلى 20 ألف', 'من 20 ألف إلى 30 ألف' => 'من 20 ألف إلى 30 ألف', 'من 30 ألف إلى 40 ألف' => 'من 30 ألف إلى 40 ألف', 'من 40 ألف إلى 50 ألف' => 'من 40 ألف إلى 50 ألف', 'أكثر من 50 ألف' => 'أكثر من 50 ألف'], old('case_debts_total_range') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            {{-- case_income_amount         text --}}
            <div class="form-group">
                {!! Form::label('case_debts_total', 'اجمالى الديون') !!}
                {!! Form::text('case_debts_total', old('case_debts_total') or null, array('class' => 'form-control')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('add', 'أضف دين') !!}<br>
                <a href="#" class="btn btn-primary" onclick="$('#debt').first().clone().appendTo('#debts');$('#del').show();">+</a>
            </div>
        </div>
    </div>
    <div id="debts">
        <div id="debt">
            <h5>دين قسم فرعي</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('debts_amount[]', 'اجمالى الدين') !!}
                        {!! Form::text('debts_amount[]', old('debts_amount[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('debts_stay[]', 'المبلغ المتبقى') !!}
                        {!! Form::text('debts_stay[]', old('debts_stay[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('debts_reason[]', 'سبب الدين') !!}
                        {!! Form::text('debts_reason[]', old('debts_reason[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('debts_refund_method[]', '‏طريقة السداد') !!}
                        {!! Form::select('debts_refund_method[]', ['شهرى' => 'شهرى',
                         'حسب الظروف' => 'حسب الظروف',
                         'لا يتم السداد' => 'لا يتم السداد',
                         ], old('debts_refund_method[]') or null, array('placeholder' => 'لا شيء', 'class' => 'form-control ', 'style' => 'width:100%', 'onchange' => 'if($(this).val()=="أخرى"){$("#other1").show();}else{$("#other1").hide();}')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('debts_monthly_amount[]', 'في حالة الأقساط الشهرية قيمة القسط الشهري') !!}
                        {!! Form::text('debts_monthly_amount[]', old('debts_monthly_amount[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>