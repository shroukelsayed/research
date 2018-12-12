<div id="tab_6" class="tab-pane">
    <h4>الدخل ومصادره</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_income_amount', 'اجمالى دخل الأسرة') !!}
                {!! Form::text('case_income_amount', $case->income_amount, array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_income_amount_category', 'اجمالى دخل الأسرة (فئات)') !!}
                {!! Form::select('case_income_amount_category', 
                ['أقل من 300 جنية' => 'أقل من 300 جنية', 'من 300 إلى أقل من 600' => 'من 300 إلى أقل من 600', 'من 600 إلى أقل من 900' => 'من 600 إلى أقل من 900', 'من 900 إلى أقل من 1200' => 'من 900 إلى أقل من 1200',  'من 1200 إلى  1500' => 'من 1200 إلى  1500', 'أكثر من 1500' => 'أكثر من 1500', 'أخرى' => 'أخرى'], $case->income_amount_category, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_income_source_count', 'عدد مصادر الدخل') !!}<br>
                {!! Form::select('case_income_source_count', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], $case->income_source_count, array('placeholder' => 'لا شيء', 'id' => 'all', 'class' => 'form-control', 'onchange' => 'if($(this).val() != null && $(this).val() > 0){$(".source").slice(1).remove();$("#sources").show();var max=$(this).val()-1;while(max--){$(".source").first().clone().appendTo("#sources");}}else{$(".source").slice(1).remove();$("#sources").hide();}')) !!}
            </div>
        </div>

    </div> -->
    @if(sizeof($case->income) >0)
        @foreach($case->income as $key => $case->income)
            <div class="source">
                <h5>مصدر دخل</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            المصدر
                            <br>
                            {!! Form::select('income_source_type[]', ['شغلك' => 'شغلك',
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
                         ], $case->income->source_type, array('placeholder' => 'لا شيء', 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('income_notes[]', 'معلومات اضافيه') !!}
                            {!! Form::text('income_notes[]', $case->income->notes, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('income_monthly_amount[]', 'اجمالى الدخل الشهري منه') !!}
                            {!! Form::text('income_monthly_amount[]', $case->income->monthly_amount, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('income_source_flow[]', 'نوع المصدر‏') !!}
                            {!! Form::select('income_source_flow[]', ['غير مستقر' => 'غير مستقر', 'شبه-مستقر' => 'شبه مستقر', 'مستقر' => 'مستقر'], $case->income->source_flow, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div id="inc4">
                            <div class="form-group">
                                {!! Form::label('inc4', 'حذف مصدر‏') !!}<br>
                                    @if($key == 0)
                                        <a href="#" class="btn btn-primary remove">-</a>
                                    @else
                                        <a href="#" class="btn btn-primary remove" onclick='deleteSource("<?php echo $key; ?>",$(this))' >-</a>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        @endforeach
    @else
    <div id="sources" >
        <div class="source">
            <h5>مصدر دخل</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        المصدر
                        <br>
                        {!! Form::select('income_source_type[]', ['شغلك' => 'شغلك',
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
                         ],  null, array('placeholder' => 'لا شيء', 'class' => 'form-control', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('income_notes[]', 'معلومات اضافيه') !!}
                        {!! Form::text('income_notes[]',  null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('income_monthly_amount[]', 'اجمالى الدخل الشهري منه') !!}
                        {!! Form::text('income_monthly_amount[]', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('income_source_flow[]', 'نوع المصدر‏') !!}
                        {!! Form::select('income_source_flow[]', ['غير مستقر' => 'غير مستقر', 'شبه-مستقر' => 'شبه مستقر', 'مستقر' => 'مستقر'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="inc4">
                        <div class="form-group">
                            {!! Form::label('inc4', 'حذف مصدر‏') !!}<br>
                            <a href="#" class="btn btn-primary remove" hidden>-</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <div id="inc4">
                <div class="form-group">
                    {!! Form::label('inc4', 'أضف مصدر‏') !!}<br>
                    <a href="#" class="btn btn-primary" onclick="drawSource()">+</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    
    function drawSource(){

        var cloneIndex = $(".source").length;

        var newdiv = $('.source').first().clone().insertAfter('.source:last').find('input:text').val("").end();

        $('.source').last().find('.remove').show();
        $('.source').last().find('.remove').attr('onclick','deleteSource('+cloneIndex+',$(this))');



        $('.source').last().next().next().remove();

    }

    function deleteSource(i,div){
        // console.log(i);
        div.closest(".source").remove();
    }

</script>