<div id="tab_4" class="tab-pane">
    <h4>بيانات خاصة بالأبناء</h4>
    <div id="childs">
        <div class="child">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_name[]', 'الاسم') !!}
                        {!! Form::text('child_name[]', old('child_name[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_gender[]', 'النوع (ذكر-أنثى)') !!}<br>
                        {!! Form::select('child_gender[]', ['ذكر' => 'ذكر', 'أنثى' => 'أنثى'], old('child_gender[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_age[]', 'السن') !!}
                     <!-- <input type="number"  id="child_age" name="child_age[]" min="0" value="child_age[]" step=".1" class="form-control"> -->

                        {!! Form::number('child_age[]', old('child_age[]') or null, array('class' => 'form-control child_age','step'=>".1")) !!}
                    </div>
                </div>
               <!--  <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_national_id[]', 'رقم البطاقة') !!}
                        {!! Form::text('child_national_id[]', old('child_national_id[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_relationship_status[]', 'الحاله الاجتماعية') !!}
                        {!! Form::select('child_relationship_status[]', ['أعزب' => 'أعزب', 'متزوج' => 'متزوج', 'مطلق' => 'مطلق', 'أرمل' => 'أرمل', 'منفصل' => 'منفصل'], old('child_relationship_status[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_education_status[]', 'الحاله التعليمية') !!}
                        {!! Form::select('child_education_status[]', ['أدون سن التعليم' => 'دون سن التعليم', 'في الابتدائية (1-2-3)' => ' في الابتدائية (1-2-3)', 'في الابتدائية (4-5-6)' => 'في الابتدائية (4-5-6)', 'في الإعدادية' => 'في الإعدادية', 'في الثانوية/ دبلوم' => 'في الثانوية/ دبلوم', 'في الجامعة' => 'في الجامعة' ,'متسرب'=>'متسرب' , 'امي'=>'امي' ,'‬ ‫يقر‬أ‫ و يكتب' => '‬ ‫يقر‬أ‫ و يكتب','انهي التعليم الأساسي (اعدادي)'=>'انهي التعليم الأساسي (اعدادي)','انهي التعليم الثانوي/ دبلوم/ الجامعي'=>'انهي التعليم الثانوي/ دبلوم/ الجامعي'], old('child_education_status[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_work_status[]', 'المهنة') !!}
                        {!! Form::select('child_work_status[]', ['لا يعمل' => 'لا يعمل', 'يعمل بشكل متقطع (المواسم/ الاجازات)' => 'يعمل بشكل متقطع (المواسم/ الاجازات)', 'يعمل بشكل دائم (سواء ارزقي او دائم)' => 'يعمل بشكل دائم (سواء ارزقي او دائم)', 'أخرى' => 'أخرى'], old('child_work_status[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_profession[]', 'وصف المهنة') !!}
                        {!! Form::text('child_profession[]', old('child_profession[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_is_ill[]', 'يعاني من مرض؟') !!}<br>
                        {!! Form::select('child_is_ill[]', ['نعم' => 'نعم', 'لا' => 'لا'], old('child_is_ill[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
               
                   <div class="col-md-6">
                      <div class="form-group">
                        {!! Form::label('child_illness_type', 'نوع المرض') !!}
                        {!! Form::select('child_illness_type', [
                        "أمراض كبر السن والشيخوخة" => "أمراض كبر السن والشيخوخة",
                        "إعاقة حركية" => "إعاقة حركية",
                        "إعاقة سمعية" => "إعاقة سمعية",
                        "إعاقة بصرية" => "إعاقة بصرية",
                        "امراض نفسية وعصبية" => "امراض نفسية وعصبية",
                        "امراض عقلية" => "امراض عقلية",
                        'امراض بصرية (عيون)'=>'امراض بصرية (عيون)',
                        "امراض عظام وعمود فقري" => "امراض عظام وعمود فقري",
                        "أنميا وسوء تغذية" => "أنميا وسوء تغذية",
                        "أمراض السكر والضغط" => "أمراض السكر والضغط",
                        "أمراض القلب" => "أمراض القلب",
                        "أمراض الرقة والجهاز التنفسي" => "أمراض الرقة والجهاز التنفسي",
                        "امراض المعدة والجهاز الهضمي" => "امراض المعدة والجهاز الهضمي",
                        "اورام سرطانية" => "اورام سرطانية",
                        "امراض الكلى والفشل الكلوي" => "امراض الكلى والفشل الكلوي",
                        "امراض الكبد وفيروس C" => "امراض الكبد وفيروس C",
                        "امراض جلدية" => "امراض جلدية",
                        "امراض اخرى" => "امراض اخرى"
                        ], old('child_illness_type[]') or null, array('multiple'=>'multiple', 'class' => 'form-control  select2 drawChild', 'style' => 'width:100%','name'=>'child_illness_type[0][]')) !!}
                      </div>
                  </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_illness_description[]', 'وصف الحالة المرضية') !!}
                        {!! Form::text('child_illness_description[]', old('child_illness_description[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_illness_prevent_movement[]', '‏هل هذا المرض يعيق الحركة') !!}
                        {!! Form::select('child_illness_prevent_movement[]', ['نعم بشكل كلي' => 'نعم بشكل كلي', 'نعم بشكل جزئي' => 'نعم بشكل جزئي', 'لا' => 'لا'], old('child_illness_prevent_movement[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_illness_need_monthly_support[]', '‏هل تحتاج إلي علاج شهري') !!}<br>
                        {!! Form::select('child_illness_need_monthly_support[]', ['نعم' => 'نعم', 'لا' => 'لا'], old('child_illness_need_monthly_support[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_illness_is_national_support[]', '‏‏هل تأخذ علاج على نفقة الدولة') !!}
                        {!! Form::select('child_illness_is_national_support[]', ['نعم كل العلاج' => 'نعم كل العلاج', 'نعم  جزء من العلاج' => 'نعم  جزء من العلاج', 'لا' => 'لا'], old('child_illness_is_national_support[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_illness_treatment_monthly_amount[]', '‏تكلفة العلاج الشهري') !!}
                        {!! Form::select('child_illness_treatment_monthly_amount[]', ['أقل من 100 جنية' => 'أقل من 100 جنية', 'من 100 إلى أقل من 300' => 'من 100 إلى أقل من 300', 'من 300 إلى أقل من 600' => 'من 300 إلى أقل من 600', 'أكثر من 600' => 'أكثر من 600'], old('child_illness_treatment_monthly_amount[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_illness_affordable[]', '‏هل تقوم بشراء العلاج ‏') !!}
                        {!! Form::select('child_illness_affordable[]', ['نعم كل العلاج' => 'نعم كل العلاج', 'نعم  جزء من العلاج' => 'نعم  جزء من العلاج', 'لا' => 'لا'], old('child_illness_affordable[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_illness_need_operation[]', '‏هل تحتاج إلي عملية') !!}<br>
                        {!! Form::select('child_illness_need_operation[]', ['نعم' => 'نعم', 'لا' => 'لا'], old('child_illness_need_operation[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
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
    <div class="row">
        <div class="col-md-6">
            <div id="inc4">
                <div class="form-group">
                    {!! Form::label('inc4', 'أضف إبن') !!}<br>
                    <a href="#" class="btn btn-primary" onclick="drawChild()">+</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    
    function drawChild(){

        var cloneIndex = $(".drawChild").length;
        console.log(cloneIndex);

        var newdiv = $('.child').first().clone().insertAfter('.child:last').find('input:text').val("").end().find('.child_age').val("").end();
        // $(newdiv).appendTo('#childs');

        $('.drawChild').select2().last().attr('name','child_illness_type['+cloneIndex+'][]');
        
        $('.child').last().find('.remove').show();
        $('.child').last().find('.remove').attr('onclick','deleteChild('+cloneIndex+',$(this))');


        $('.drawChild').last().next().next().remove();
    }

    function deleteChild(i,div){
        // console.log(i);
        div.closest(".child").remove();
    }



</script>