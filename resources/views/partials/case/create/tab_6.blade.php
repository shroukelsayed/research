<div id="tab_6" class="tab-pane">
    <h4>الدخل ومصادره</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_income_amount', 'اجمالى دخل الأسرة') !!}
                {!! Form::text('case_income_amount', old('case_income_amount') or null, array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_income_amount_category', 'اجمالى دخل الأسرة (فئات)') !!}
                {!! Form::select('case_income_amount_category', ['300' => 'أقل من 300 جنية', '600' => 'من 300 إلى أقل من 600', '900' => 'من 600 إلى أقل من 900', '1200' => 'من 900 إلى أقل من 1200',  '1500' => 'من 1200 إلى  1500', '1600' => 'أكثر من 1500', 'أخرى' => 'أخرى'], old('case_income_amount_category') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_income_source_count', 'عدد مصادر الدخل') !!}<br>
                {!! Form::select('case_income_source_count', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], old('case_income_source_count') or null, array('placeholder' => 'لا شيء', 'id' => 'all', 'class' => 'form-control', 'onchange' => 'if($(this).val() != null && $(this).val() > 0){$(".source").slice(1).remove();$("#sources").show();var max=$(this).val()-1;while(max--){$(".source").first().clone().appendTo("#sources");}}else{$(".source").slice(1).remove();$("#sources").hide();}')) !!}
            </div>
        </div>
    </div> -->
    <div id="sources">
        <div class="source">
            <h5>مصدر دخل</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        المصدر
                        <br>
                        {!! Form::select('income_source_type[]', ['شغلك' => 'شغلك',
                             'الزوجة' => 'شغل الزوجة',
                             'ابنك' => 'شغل ابنك',
                             'مواشي' => 'تربية مواشي/طيور',
                             'محاصيل' => 'أرض زراعية (بيع محاصيل)',
                             'مشروع' => 'مشروع صغير',
                             'معاش' => 'معاش',
                             'أقارب' => 'أقارب عايشين معاكوا في البيت',
                             'بيع' => 'بيع ممتلكات',
                             'مدخرات' => 'مدخرات',
                             'جمعيات' => 'مساعدات مادية من جمعيات',
                             'افراد' => 'مساعدات مادية من افراد',
                             'other' => 'مصادر دخل أخرى',
                             ], old('income_source_type[]') or null, array('placeholder' => 'لا شيء', 'class' => 'form-control', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('income_notes[]', 'معلومات اضافيه') !!}
                        {!! Form::text('income_notes[]', old('income_notes[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('income_monthly_amount[]', 'اجمالى الدخل الشهري منه') !!}
                        {!! Form::text('income_monthly_amount[]', old('income_monthly_amount[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('income_source_flow[]', 'نوع المصدر‏') !!}
                        {!! Form::select('income_source_flow[]', ['غير-مستقر' => 'غير مستقر', 'شبه-مستقر' => 'شبه مستقر', 'مستقر' => 'مستقر'], old('income_source_flow[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control', 'style' => 'width:100%')) !!}
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

    <div class="row">
        <div class="col-md-6">
            <div id="inc3">
                <div class="form-group">
                    {!! Form::label('inc3', 'أضف مصدر‏') !!}<br>
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