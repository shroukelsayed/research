<div id="tab_5" class="tab-pane">
    <h4>بيانات بالأقارب الموجودين بالسكن</h4>
    @if(sizeof($case->roommates) >0)
    @foreach($case->roommates as $key => $case->roommate)
    <?php $roomate = 'rommate_illness_type['.$key.'][]'; ?>
    
    <div id="roommates">
        <div class="roommate">
            <div class="row">
                <div class="col-md-6">
                    {{-- case_name               text --}}
                    <div class="form-group">
                        {!! Form::label('roommate_name[]', 'الاسم') !!}
                        {!! Form::text('roommate_name[]', $case->roommate->name, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                     {{-- roommate_gender             []bool[male,female] --}}
                    <div class="form-group">
                        {!! Form::label('roommate_gender[]', 'النوع (ذكر-أنثى)') !!}<br>
                        {!! Form::select('roommate_gender[]', ['1' => 'ذكر', '0' => 'أنثى'], $case->roommate->gender, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- roommate_age                []text --}}
                    <div class="form-group">
                        {!! Form::label('roommate_age[]', 'السن') !!}
                        {!! Form::text('roommate_age[]', $case->roommate->age, array('class' => 'form-control')) !!}
                    </div>
                </div>
                {{--<div class="col-md-6">--}}
                    {{-- roommate_national_id        []text --}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('roommate_national_id[]', 'رقم البطاقة') !!}--}}
                        {{--{!! Form::text('roommate_national_id[]', $case->roommate->national_id, array('class' => 'form-control')) !!}--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- roommate_ralationship       []select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('roommate_relationship_status[]', 'الحاله الاجتماعية') !!}
                        {!! Form::select('roommate_relationship_status[]', ['أعزب' => 'أعزب', 'متزوج' => 'متزوج', 'مطلق' => 'مطلق', 'أرمل' => 'أرمل', 'منفصل' => 'منفصل'], $case->roommate->relationship_status, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                 <div class="col-md-6">
                    {{-- roommate_edu_status       []select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('roommate_education_status[]', 'الحاله التعليمية') !!}
                        {!! Form::select('roommate_education_status[]', ['دون سن التعليم' => 'دون سن التعليم', 'في الابتدائية (1-2-3)' => ' في الابتدائية (1-2-3)', 'في الابتدائية (4-5-6)' => 'في الابتدائية (4-5-6)', 'في الإعدادية' => 'في الإعدادية', 'في الثانوية/ دبلوم' => 'في الثانوية/ دبلوم', 'في الجامعة' => 'في الجامعة' ,'متسرب'=>'متسرب' , 'امي'=>'امي','‬يقرأ ويكتب' => '‬ ‫يقر‬أ‫ و يكتب' ,'انهي التعليم الأساسي (اعدادي)'=>'انهي التعليم الأساسي (اعدادي)','انهي التعليم الثانوي/ دبلوم/ الجامعي'=>'انهي التعليم الثانوي/ دبلوم/ الجامعي'],$case->roommate->education_status , array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- roommate_work_status       []select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('roommate_work_status[]', 'المهنة') !!}
                        {!! Form::select('roommate_work_status[]', ['لا يعمل' => 'لا يعمل', 'متقطع' => 'يعمل بشكل متقطع (المواسم/ الاجازات)', 'دائم' => 'يعمل بشكل دائم (سواء ارزقي او دائم)', 'other' => 'أخرى'], $case->roommate->work_status, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- roommate_profession         []text --}}
                    <div class="form-group">
                        {!! Form::label('roommate_profession[]', 'وصف المهنة') !!}
                        {!! Form::text('roommate_profession[]', $case->roommate->profession, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('roommate_relativity[]', 'صلة القرابة') !!}
                        {!! Form::select('roommate_relativity[]', ['الام_الاب ' => 'الأم/الأب',
                         'والد-الزوجة_والدة-الزوجة' => 'والد الزوج/والد الزوجة',
                         'زوجة-الابن_زوج-الابنة' => 'زوجة الإبن/زوج الإبنة',
                         'أخ_أخت' => 'أخ/أخت',
                         'أخ-الزوجة_أخت-الزوجة' => 'أخ الزوجة/أخت الزوجة',
                         'حفيد_حفيدة' => 'حفيد/حفيدة',
                         'ابن الأخ/الأخت'=>'ابن الأخ/الأخت',
                         'other' => 'أخرى'], 
                        (in_array($case->roommate->relativity,['الام_الاب ' ,'والد-الزوجة_والدة-الزوجة' ,'زوجة-الابن_زوج-الابنة' ,'أخ_أخت' ,'أخ-الزوجة_أخت-الزوجة' ,'حفيد_حفيدة','ابن الأخ/الأخت','other']))? $case->roommate->relativity : "other" , array('placeholder' => 'لا شيء' , 'class' => 'form-control roommate_relativity', 'style' => 'width:100%','onchange' => 'if($(this).val()=="other"){$("#roommate_relativity_other").show();}else{$("#roommate_relativity_other").hide();}')) !!}
                    </div>
                </div>
                <div class="col-md-6" id="roommate_relativity_other" hidden>
                    {!! Form::label('roommate_relativity_other', 'أخرى') !!}
                    {!! Form::text('roommate_relativity_other',$case->roommate->relativity, array('class' => 'form-control')) !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('roommate_is_ill[]', 'يعاني من مرض؟') !!}<br>
                        {!! Form::select('roommate_is_ill[]', ['1' => 'نعم', '0' => 'لا'], old('roommate_is_ill[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                
            </div>
                <div class="row">
                    <div class="col-md-6">
                       
                      <div class="form-group">
                        {!! Form::label('roommate_illness_type', 'نوع المرض') !!}
                        {!! Form::select($roomate, [
                        "أمراض كبر السن والشيخوخة" => "أمراض كبر السن والشيخوخة",
                        "إعاقة حركية" => "إعاقة حركية ",
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
                        ], json_decode($case->roommate->illness_type) , array('multiple'=>'multiple', 'class' => 'form-control  select2 drawRoomate', 'style' => 'width:100%','name'=>'roommate_illness_type[]')) !!}
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('roommate_illness_description[]', 'وصف الحالة المرضية') !!}
                            {!! Form::text('roommate_illness_description[]', $case->roommate->illness_description, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('roommate_illness_prevent_movement[]', '‏هل هذا المرض يعيق الحركة') !!}
                            {!! Form::select('roommate_illness_prevent_movement[]', ['كلي' => 'نعم بشكل كلي', 'جزئي' => 'نعم بشكل جزئي', 'لا' => 'لا'], $case->roommate->illness_prevent_movement, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('roommate_illness_need_monthly_support[]', '‏هل تحتاج إلي علاج شهري') !!}<br>
                            {!! Form::select('roommate_illness_need_monthly_support[]', ['1' => 'نعم', '0' => 'لا'], $case->roommate->need_monthly_treatment, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('has_national_support[]', '‏‏هل تأخذ علاج على نفقة الدولة') !!}
                            {!! Form::select('has_national_support[]', ['كل' => 'نعم كل العلاج', 'جزء' => 'نعم  جزء من العلاج', 'لا' => 'لا'], $case->roommate->has_national_support, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('treatment_monthly_amount[]', '‏تكلفة العلاج الشهري') !!}
                            {!! Form::select('treatment_monthly_amount[]', ['أقل من 100 جنية' => 'أقل من 100 جنية', 'من 100 إلى أقل من 300' => 'من 100 إلى أقل من 300', 'من 300 إلى أقل من 600' => 'من 300 إلى أقل من 600', 'أكثر من 600' => 'أكثر من 600'], $case->roommate->treatment_monthly_amount, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('treatment_affordable[]', '‏هل تقوم بشراء العلاج ‏') !!}
                            {!! Form::select('treatment_affordable[]', ['كل' => 'نعم كل العلاج', 'جزء' => 'نعم  جزء من العلاج', 'لا' => 'لا'], $case->roommate->treatment_affordable, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('roommate_illness_need_operation[]', '‏هل تحتاج إلي عملية') !!}<br>
                            {!! Form::select('roommate_illness_need_operation[]', ['1' => 'نعم', '0' => 'لا'], $case->roommate->need_operation, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <div id="inc4">
                        <div class="form-group">
                            {!! Form::label('inc4', 'حذف قريب') !!}<br>
                                @if($key == 0)
                                    <a href="#" class="btn btn-primary remove">-</a>
                                @else
                                    <a href="#" class="btn btn-primary remove" onclick='deleteRoomate("<?php echo $key; ?>",$(this))' >-</a>
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
     <div id="roommates">
        <div class="roommate">
            <div class="row">
                <div class="col-md-6">
                    {{-- case_name               text --}}
                    <div class="form-group">
                        {!! Form::label('roommate_name[]', 'الاسم') !!}
                        {!! Form::text('roommate_name[]', old('roommate_name[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- roommate_gender             []bool[male,female] --}}
                    <div class="form-group">
                        {!! Form::label('roommate_gender[]', 'النوع (ذكر-أنثى)') !!}<br>
                        {!! Form::select('roommate_gender[]', ['1' => 'ذكر', '0' => 'أنثى'], old('roommate_gender[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- roommate_age                []text --}}
                    <div class="form-group">
                        {!! Form::label('roommate_age[]', 'السن') !!}
                        {!! Form::text('roommate_age[]', old('roommate_age[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- roommate_national_id        []text --}}
                    <div class="form-group">
                        {!! Form::label('roommate_national_id[]', 'رقم البطاقة') !!}
                        {!! Form::text('roommate_national_id[]', old('roommate_national_id[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- roommate_ralationship       []select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('roommate_relationship_status[]', 'الحاله الاجتماعية') !!}
                        {!! Form::select('roommate_relationship_status[]', ['أعزب' => 'أعزب', 'متزوج' => 'متزوج', 'مطلق' => 'مطلق', 'أرمل' => 'أرمل', 'منفصل' => 'منفصل'], old('roommate_relationship[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- roommate_edu_status       []select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('roommate_education_status[]', 'الحاله التعليمية') !!}
                        {!! Form::select('roommate_education_status[]',['دون سن التعليم' => 'دون سن التعليم', 'في الابتدائية (1-2-3)' => ' في الابتدائية (1-2-3)', 'في الابتدائية (4-5-6)' => 'في الابتدائية (4-5-6)', 'في الإعدادية' => 'في الإعدادية', 'في الثانوية/ دبلوم' => 'في الثانوية/ دبلوم', 'في الجامعة' => 'في الجامعة' ,'متسرب'=>'متسرب' , 'امي'=>'امي','‬يقرأ ويكتب' => '‬ ‫يقر‬أ‫ و يكتب' ,'انهي التعليم الأساسي (اعدادي)'=>'انهي التعليم الأساسي (اعدادي)','انهي التعليم الثانوي/ دبلوم/ الجامعي'=>'انهي التعليم الثانوي/ دبلوم/ الجامعي'], old('roommate_education_status[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- roommate_work_status       []select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('roommate_work_status[]', 'المهنة') !!}
                        {!! Form::select('roommate_work_status[]', ['لا يعمل' => 'لا يعمل', 'متقطع' => 'يعمل بشكل متقطع (المواسم/ الاجازات)', 'دائم' => 'يعمل بشكل دائم (سواء ارزقي او دائم)', 'other' => 'أخرى'], old('roommate_work_status[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- roommate_profession         []text --}}
                    <div class="form-group">
                        {!! Form::label('roommate_profession[]', 'وصف المهنة') !!}
                        {!! Form::text('roommate_profession[]', old('roommate_profession[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
           <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('roommate_relativity[]', 'صلة القرابة') !!}
                        {!! Form::select('roommate_relativity[]', ['الام_الاب ' => 'الأم/الأب',
                         'والد-الزوجة_والدة-الزوجة' => 'والد الزوج/والد الزوجة',
                         'زوجة-الابن_زوج-الابنة' => 'زوجة الإبن/زوج الإبنة',
                         'أخ_أخت' => 'أخ/أخت',
                         'أخ-الزوجة_أخت-الزوجة' => 'أخ الزوجة/أخت الزوجة',
                         'حفيد_حفيدة' => 'حفيد/حفيدة',
                         'ابن الأخ/الأخت'=>'ابن الأخ/الأخت',
                         'other' => 'أخرى'], null , array('placeholder' => 'لا شيء' , 'class' => 'form-control roommate_relativity', 'style' => 'width:100%','onchange' => 'if($(this).val()=="other"){$("#roommate_relativity_other").show();}else{$("#roommate_relativity_other").hide();}')) !!}
                    </div>
                </div>
                <div class="col-md-6" id="roommate_relativity_other" hidden>
                    {!! Form::label('roommate_relativity_other', 'أخرى') !!}
                    {!! Form::text('roommate_relativity_other',null, array('class' => 'form-control')) !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('roommate_is_ill[]', 'يعاني من مرض؟') !!}<br>
                        {!! Form::select('roommate_is_ill[]', ['1' => 'نعم', '0' => 'لا'], old('roommate_is_ill[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                
            </div>
            <div class="row">
                 <div class="col-md-6">
                      <div class="form-group">
                        {!! Form::label('roommate_illness_type', 'نوع المرض') !!}
                        {!! Form::select('roommate_illness_type[0][]', [
                        "أمراض كبر السن والشيخوخة" => "أمراض كبر السن والشيخوخة",
                        "إعاقة حركية" => "إعاقة حركية ",
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
                        ], null, array('placeholder' => 'لا شيء','multiple'=>'multiple', 'class' => 'form-control  select2 drawRoomate', 'style' => 'width:100%')) !!}
                      </div>
                  </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('roommate_illness_description[]', 'وصف الحالة المرضية') !!}
                        {!! Form::text('roommate_illness_description[]', old('roommate_illness_description[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('roommate_illness_prevent_movement[]', '‏هل هذا المرض يعيق الحركة') !!}
                        {!! Form::select('roommate_illness_prevent_movement[]', ['كلي' => 'نعم بشكل كلي', 'جزئي' => 'نعم بشكل جزئي', 'لا' => 'لا'], old('roommate_illness_prevent_movement[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('roommate_illness_need_monthly_support[]', '‏هل تحتاج إلي علاج شهري') !!}<br>
                        {!! Form::select('roommate_illness_need_monthly_support[]', ['1' => 'نعم', '0' => 'لا'], old('roommate_illness_need_monthly_support[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('has_national_support[]', '‏‏هل تأخذ علاج على نفقة الدولة') !!}
                        {!! Form::select('has_national_support[]', ['كل' => 'نعم كل العلاج', 'جزء' => 'نعم  جزء من العلاج', 'لا' => 'لا'], old('has_national_support[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('treatment_monthly_amount[]', '‏تكلفة العلاج الشهري') !!}
                        {!! Form::select('treatment_monthly_amount[]', ['أقل من 100 جنية' => 'أقل من 100 جنية', 'من 100 إلى أقل من 300' => 'من 100 إلى أقل من 300', 'من 300 إلى أقل من 600' => 'من 300 إلى أقل من 600', 'أكثر من 600' => 'أكثر من 600'], old('treatment_monthly_amount[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('treatment_affordabletreatment_affordable[]', '‏هل تقوم بشراء العلاج ‏') !!}
                        {!! Form::select('treatment_affordable[]', ['كل' => 'نعم كل العلاج', 'جزء' => 'نعم  جزء من العلاج', 'لا' => 'لا'], old('treatment_affordable[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('roommate_illness_need_operation[]', '‏هل تحتاج إلي عملية') !!}<br>
                        {!! Form::select('roommate_illness_need_operation[]', ['1' => 'نعم', '0' => 'لا'], old('roommate_illness_need_operation[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="inc4">
                        <div class="form-group">
                            {!! Form::label('inc4', 'حذف قريب') !!}<br>
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
            <div id="inc5">
                <div class="form-group">
                    {!! Form::label('inc5', 'أضف قريب') !!}<br>
                    <a href="#" class="btn btn-primary" onclick="drawRoomate()">+</a>
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">

    $(document).ready(function(){
        if($('.roommate_relativity').val() == 'أخرى')
            $("#roommate_relativity_other").show();
        else
            $("#roommate_relativity_other").hide();
    });

    
    function drawRoomate(){

        var cloneIndex = $(".drawRoomate").length;
        // console.log(cloneIndex);

        var newdiv = $('.roommate').first().clone().insertAfter('.roommate:last').find('input:text').val("").end();

        // $(newdiv).appendTo('#roommates');

        $('.drawRoomate').select2().last().attr('name','roommate_illness_type['+cloneIndex+'][]');

        $('.drawRoomate').last().next().next().remove();

    }

    function deleteRoomate(i,div){
        // console.log(i);
        div.closest(".roommate").remove();
    }


</script>