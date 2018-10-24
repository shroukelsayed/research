<div id="tab_8" class="tab-pane">
    <h4>الديون</h4>
    <div class="row">
        <div class="col-md-6">
            {{-- case_income_amount         text --}}
            <div class="form-group">
                {!! Form::label('case_debts_total_range', 'اجمالى الديون (فئات)') !!}
                {!! Form::select('case_debts_total_range', ['0' => 'لا يوجد', '1000' => 'أقل من ألف جنية', '5000' => 'من ألف إلى 5 ألاف', '10000' => 'من 10 ألاف إلى 20 ألف', '30000' => 'من 20 ألف إلى 30 ألف', '40000' => 'من 30 ألف إلى 40 ألف', '50000' => 'من 40 ألف إلى 50 ألف', '60000' => 'أكثر من 50 ألف'], old('case_debts_total_range') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
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
                <a href="#" class="btn btn-primary" onclick="
                var cloneIndex = $('.debt').first().clone().insertAfter('.debt:last').find('input:text').val('').end();$('#del').show(); 
                                $('.debt').last().find('.remove').show();$('.debt').last().find('.remove').attr('onclick','deleteDebt('+cloneIndex+',$(this))');">+</a>
            </div>
        </div>
    </div>
    <div id="debts">
        <div class="debt">
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

            <div class="row">
                <div class="col-md-6">
                    <div id="inc4">
                        <div class="form-group">
                            {!! Form::label('inc4', 'حذف إبن') !!}<br>
                            <a href="#" class="btn btn-primary remove" hidden>-</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
        </div>
    </div>
</div>

<script type="text/javascript">
    
   
    function deleteDebt(i,div){
        // console.log(i);
        div.closest(".debt").remove();
    }



</script>