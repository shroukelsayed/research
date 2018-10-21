<div id="tab_4" class="tab-pane">
    <h4>بيانات خاصة بالأبناء</h4>
    @if(sizeof($case->children) >0)
    @foreach($case->children as $key => $case->child)
    <?php $child = 'child_illness_type['.$key.'][]'; ?>
    <div id="childs">
        <div class="child">
        
            <div class="row">
                <div class="col-md-6">
                    {{-- case_name               text --}}
                    <div class="form-group">
                        {!! Form::label('child_name[]', 'الاسم') !!}
                        {!! Form::text('child_name[]', $case->child->name, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- child_gender             []bool[male,female] --}}
                    <div class="form-group">
                        {!! Form::label('child_gender[]', 'النوع (ذكر-أنثى)') !!}<br>
                        {!! Form::select('child_gender[]', ['1' => 'ذكر', '0' => 'أنثى'], $case->child->gender, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- child_age                []text --}}
                    <div class="form-group">
                        {!! Form::label('child_age[]', 'السن') !!}
                        {!! Form::number('child_age[]', $case->child->age, array('class' => 'form-control child_age','step'=>".1")) !!}

                    </div>
                </div>
                {{--<div class="col-md-6">--}}
                    {{-- child_national_id        []text --}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('child_national_id[]', 'رقم البطاقة') !!}--}}
                        {{--{!! Form::text('child_national_id[]', $case->child->national_id, array('class' => 'form-control')) !!}--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- child_ralationship       []select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('child_relationship_status[]', 'الحاله الاجتماعية') !!}
                        {!! Form::select('child_relationship_status[]', ['أعزب' => 'أعزب', 'متزوج' => 'متزوج', 'مطلق' => 'مطلق', 'أرمل' => 'أرمل', 'منفصل' => 'منفصل'], $case->child->relationship_status, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- child_edu_status       []select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('child_education_status[]', 'الحاله التعليمية') !!}
                        {!! Form::select('child_education_status[]', ['دون سن التعليم' => 'دون سن التعليم', 'حضانة' => 'حضانة', 'في الابتدائية (1-2-3)' => ' في الابتدائية (1-2-3)', 'في الابتدائية (4-5-6)' => 'في الابتدائية (4-5-6)', 'في الاعدادية' => 'في الإعدادية', 'في الثانوية/ دبلوم' => 'في الثانوية/ دبلوم', 'في الجامعة' => 'في الجامعة' ,'متسرب'=>'متسرب' , 'امي'=>'امي','‬يقر‬أ‫ ويكتب' => '‬ ‫يقر‬أ‫ و يكتب' ,'انهي التعليم الأساسي (اعدادي)'=>'انهي التعليم الأساسي (اعدادي)','انهي التعليم الثانوي/ دبلوم/ الجامعي'=>'انهي التعليم الثانوي/ دبلوم/ الجامعي'], $case->child->education_status, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- child_work_status       []select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('child_work_status[]', 'المهنة') !!}
                        {!! Form::select('child_work_status[]', ['لا يعمل' => 'لا يعمل', 'يعمل بشكل متقطع' => 'يعمل بشكل متقطع (المواسم/ الاجازات)', 'يعمل بشكل دائم' => 'يعمل بشكل دائم (سواء ارزقي او دائم)', 'other' => 'أخرى'], $case->child->work_status, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- child_profession         []text --}}
                    <div class="form-group">
                        {!! Form::label('child_profession[]', 'وصف المهنة') !!}
                        {!! Form::text('child_profession[]', $case->child->profession, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_is_ill[]', 'يعاني من مرض؟') !!}<br>
                        {!! Form::select('child_is_ill[]', ['1' => 'نعم', '0' => 'لا'], $case->child->is_ill, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('child_illness_type[]', 'نوع المرض') !!}
                            {!! Form::select($child, [
                            "أمراض كبر السن والشيخوخة" => "أمراض كبر السن والشيخوخة",
                            "إعاقة حركية" => "إعاقة حركية",
                            "إعاقة سمعية" => "إعاقة سمعية",
                            "إعاقة بصرية" => "إعاقة بصرية",
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
                            ], json_decode($case->child->illness_type), array( 'multiple'=>'multiple', 'class' => 'form-control  select2 drawChild', 'style' => 'width:100%')) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('child_illness_description[]', 'وصف الحالة المرضية') !!}
                            {!! Form::text('child_illness_description[]', $case->child->illness_description, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('child_illness_prevent_movement[]', '‏هل هذا المرض يعيق الحركة') !!}
                            {!! Form::select('child_illness_prevent_movement[]', ['كلي' => 'نعم بشكل كلي', 'جزئي' => 'نعم بشكل جزئي', 'لا' => 'لا'], $case->child->illness_prevent_movement, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('child_illness_need_monthly_support[]', '‏هل تحتاج إلي علاج شهري') !!}<br>
                            {!! Form::select('child_illness_need_monthly_support[]', ['1' => 'نعم', '0' => 'لا'], $case->child->need_monthly_treatment, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('child_illness_is_national_support[]', '‏‏هل تأخذ علاج على نفقة الدولة') !!}
                            {!! Form::select('child_illness_is_national_support[]', ['كل' => 'نعم كل العلاج', 'جزء' => 'نعم  جزء من العلاج', 'لا' => 'لا'], $case->child->has_national_support, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('child_illness_treatment_monthly_amount[]', '‏تكلفة العلاج الشهري') !!}
                            {!! Form::select('child_illness_treatment_monthly_amount[]', ['100' => 'أقل من 100 جنية', '300' => 'من 100 إلى أقل من 300', '600' => 'من 300 إلى أقل من 600', '700' => 'أكثر من 600'], $case->child->treatment_monthly_amount, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('child_illness_affordable[]', '‏هل تقوم بشراء العلاج ‏') !!}
                            {!! Form::select('child_illness_affordable[]', ['كل' => 'نعم كل العلاج', 'جزء' => 'نعم  جزء من العلاج', 'لا' => 'لا'], $case->child->treatment_affordable, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('child_illness_need_operation[]', '‏هل تحتاج إلي عملية') !!}<br>
                            {!! Form::select('child_illness_need_operation[]', ['1' => 'نعم', '0' => 'لا'], $case->child->need_operation, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <div id="inc4">
                        <div class="form-group">
                            {!! Form::label('inc4', 'حذف إبن') !!}<br>
                                @if($key == 0)
                                    <a href="#" class="btn btn-primary remove">-</a>
                                @else
                                    <a href="#" class="btn btn-primary remove" onclick='deleteChild("<?php echo $key; ?>",$(this))' >-</a>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
            <hr>

        </div>
    </div>
    @endforeach
    @else
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
                        {!! Form::select('child_gender[]', ['1' => 'ذكر', '0' => 'أنثى'], old('child_gender[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_age[]', 'السن') !!}
                        {!! Form::number('child_age[]', old('child_age[]') or null, array('class' => 'form-control child_age','step'=>".1")) !!}
                        
                        <!-- {!! Form::text('child_age[]', old('child_age[]') or null, array('class' => 'form-control')) !!} -->
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
                        {!! Form::select('child_education_status[]', ['أدون سن التعليم' => 'دون سن التعليم', 'في الابتدائية (1-2-3)' => ' في الابتدائية (1-2-3)', 'في الابتدائية (4-5-6)' => 'في الابتدائية (4-5-6)', 'في الاعدادية' => 'في الإعدادية', 'في الثانوية/ دبلوم' => 'في الثانوية/ دبلوم', 'في الجامعة' => 'في الجامعة' ,'متسرب'=>'متسرب' , 'امي'=>'امي','‬ ‫يقر‬أ‫ و يكتب' => '‬ ‫يقر‬أ‫ و يكتب' ,'انهي التعليم الأساسي (اعدادي)'=>'انهي التعليم الأساسي (اعدادي)','انهي التعليم الثانوي/ دبلوم/ الجامعي'=>'انهي التعليم الثانوي/ دبلوم/ الجامعي'], old('child_education_status[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_work_status[]', 'المهنة') !!}
                        {!! Form::select('child_work_status[]', ['لا يعمل' => 'لا يعمل', 'يعمل بشكل متقطع' => 'يعمل بشكل متقطع (المواسم/ الاجازات)', 'يعمل بشكل دائم' => 'يعمل بشكل دائم (سواء ارزقي او دائم)', 'other' => 'أخرى'], old('child_work_status[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
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
                        {!! Form::select('child_is_ill[]', ['1' => 'نعم', '0' => 'لا'], old('child_is_ill[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_illness_type[]', 'نوع المرض') !!}
                        {!! Form::select('child_illness_type[0][]', [
                        "أمراض كبر السن والشيخوخة" => "أمراض كبر السن والشيخوخة",
                        "إعاقة حركية" => "إعاقة حركية",
                        "إعاقة سمعية" => "إعاقة سمعية",
                        "إعاقة بصرية" => "إعاقة بصرية",
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
                        ], old('child_illness_type[]') or null, array('placeholder' => 'لا شيء','multiple' => 'multiple' , 'class' => 'form-control select2 drawChild', 'style' => 'width:100%')) !!}
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
                        {!! Form::select('child_illness_prevent_movement[]', ['كلي' => 'نعم بشكل كلي', 'جزئي' => 'نعم بشكل جزئي', 'لا' => 'لا'], old('child_illness_prevent_movement[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_illness_need_monthly_support[]', '‏هل تحتاج إلي علاج شهري') !!}<br>
                        {!! Form::select('child_illness_need_monthly_support[]', ['1' => 'نعم', '0' => 'لا'], old('child_illness_need_monthly_support[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_illness_is_national_support[]', '‏‏هل تأخذ علاج على نفقة الدولة') !!}
                        {!! Form::select('child_illness_is_national_support[]', ['كل' => 'نعم كل العلاج', 'جزء' => 'نعم  جزء من العلاج', 'لا' => 'لا'], old('child_illness_is_national_support[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_illness_treatment_monthly_amount[]', '‏تكلفة العلاج الشهري') !!}
                        {!! Form::select('child_illness_treatment_monthly_amount[]', ['100' => 'أقل من 100 جنية', '300' => 'من 100 إلى أقل من 300', '600' => 'من 300 إلى أقل من 600', '700' => 'أكثر من 600'], old('child_illness_treatment_monthly_amount[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_illness_affordable[]', '‏هل تقوم بشراء العلاج ‏') !!}
                        {!! Form::select('child_illness_affordable[]', ['كل' => 'نعم كل العلاج', 'جزء' => 'نعم  جزء من العلاج', 'لا' => 'لا'], old('child_illness_affordable[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('child_illness_need_operation[]', '‏هل تحتاج إلي عملية') !!}<br>
                        {!! Form::select('child_illness_need_operation[]', ['1' => 'نعم', '0' => 'لا'], old('child_illness_need_operation[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="inc4">
                        <div class="form-group">
                            {!! Form::label('inc4', 'حذف إبن') !!}<br>
                            <a href="#" class="btn btn-primary remove" >-</a>
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
        // console.log(cloneIndex);

        var newdiv = $('.child').first().clone().insertAfter('.child:last').find('input:text').val("").end().find('.child_age').val("").end();

        // $(newdiv).appendTo('#childs');

        $('.drawChild').select2().last().attr('name','child_illness_type['+cloneIndex+'][]');

        $('.drawChild').last().next().next().remove();

    }

    function deleteChild(i,div){
        // console.log(i);
        div.closest(".child").remove();
    }

</script>