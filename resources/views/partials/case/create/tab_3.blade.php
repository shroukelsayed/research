<div id="tab_3" class="tab-pane">
    <h4>بيانات خاصة بالزوج/الزوجة</h4>
    <div id="partners">
        <div class="partner">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('partner_name[]', 'الاسم') !!}
                        {!! Form::text('partner_name[]', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('partner_gender[]', 'النوع (ذكر-أنثى)') !!}<br>
                        {!! Form::select('partner_gender[]', ['ذكر' => 'ذكر', 'أنثى' => 'أنثى'], old('partner_gender[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- partner_age                []text --}}
                    <div class="form-group">
                        {!! Form::label('partner_age[]', 'السن') !!}
                        {!! Form::text('partner_age[]', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- partner_national_id        []text --}}
                    <div class="form-group">
                        {!! Form::label('partner_national_id[]', 'رقم البطاقة') !!}
                         {!! Form::text('partner_national_id[]', null, array('class' => 'form-control','maxlength' =>"14")) !!} 
                         <!--<input type="text" id="partner_national_id[]" name="partner_national_id[]" pattern="[0-9]{14}" class="form-control" />-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- partner_ralationship       []select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('partner_relationship_status[]', 'الحاله الاجتماعية') !!}
                        {!! Form::select('partner_relationship_status[]', ['أعزب' => 'أعزب', 'متزوج' => 'متزوج', 'مطلق' => 'مطلق', 'أرمل' => 'أرمل', 'منفصل' => 'منفصل'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- partner_edu_status       []select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('partner_education_status[]', 'الحاله التعليمية') !!}
                        {!! Form::select('partner_education_status[]', ['دون سن التعليم' => 'دون سن التعليم', 'في الابتدائية (1-2-3)' => ' في الابتدائية (1-2-3)', 'في الابتدائية (4-5-6)' => 'في الابتدائية (4-5-6)', 'في الإعدادية' => 'في الإعدادية', 'في الثانوية/ دبلوم' => 'في الثانوية/ دبلوم', 'في الجامعة' => 'في الجامعة' ,'متسرب'=>'متسرب' , 'امي'=>'امي','‬يقرأ ويكتب' => '‬ ‫يقر‬أ‫ و يكتب' ,'انهي التعليم الأساسي (اعدادي)'=>'انهي التعليم الأساسي (اعدادي)','انهي التعليم الثانوي/ دبلوم/ الجامعي'=>'انهي التعليم الثانوي/ دبلوم/ الجامعي'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- partner_work_status       []select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('partner_work_status[]', 'المهنة') !!}
                        {!! Form::select('partner_work_status[]',  ['لا يعمل' => 'لا يعمل', 'يعمل بشكل متقطع (المواسم/ الاجازات)' => 'يعمل بشكل متقطع (المواسم/ الاجازات)', 'يعمل بشكل دائم (سواء ارزقي او دائم)' => 'يعمل بشكل دائم (سواء ارزقي او دائم)', 'أخرى' => 'أخرى'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- partner_profession         []text --}}
                    <div class="form-group">
                        {!! Form::label('partner_profession[]', 'وصف المهنة') !!}
                        {!! Form::text('partner_profession[]', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- fancy primary -->
                    {!! Form::label('partner_national_id_front[]', 'صورة وجه البطاقة') !!}
                    <div class="fancy-file-upload fancy-file-primary">
                        <i class="fa fa-upload"></i>
                        <input type="file" class="form-control" name="partner_national_id_front[]" onchange="jQuery(this).next('input').val(this.value);" />
                        <input type="text" class="form-control" placeholder="no file selected" readonly="" />
                        <span class="button">Choose File</span>
                        يجب أن يكون حجم الملفات أقل من 40 ميغابايت.
                        أنواع الملفات المسموح بها: png gif jpg jpeg.
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- fancy primary -->
                    {!! Form::label('partner_national_id_back[]', 'صورة ظهر البطاقة') !!}
                    <div class="fancy-file-upload fancy-file-primary">
                        <i class="fa fa-upload"></i>
                        <input type="file" class="form-control" name="partner_national_id_back[]" onchange="jQuery(this).next('input').val(this.value);" />
                        <input type="text" class="form-control" placeholder="no file selected" readonly="" />
                        <span class="button">Choose File</span>
                        يجب أن يكون حجم الملفات أقل من 40 ميغابايت.
                        أنواع الملفات المسموح بها: png gif jpg jpeg.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('partner_phone[]', 'رقم الموبايل') !!}
                  <!-- <input type="text" id="partner_phone" name="partner_phone[]" pattern="[0-9]{11}" class="form-control" /> -->
                  {!! Form::text('partner_phone[]', old('partner_phone') or null, array('class' => 'form-control','maxlength' =>"11")) !!}
                  
                <!--         {!! Form::text('partner_phone[]', null, array('class' => 'form-control')) !!} -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('partner_is_ill[]', 'يعاني من مرض؟') !!}<br>
                        {!! Form::select('partner_is_ill[]', ['نعم' => 'نعم', 'لا' => 'لا'], old('partner_is_ill[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                {!! Form::label('partner_illness_type', 'نوع المرض') !!}
                {!! Form::select('partner_illness_type', [
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
                ], old('partner_illness_type[]') or null, array('multiple'=>'multiple', 'class' => 'form-control  select2 draw', 'style' => 'width:100%','name'=>'partner_illness_type[0][]')) !!}
              </div>
            </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('partner_illness_description[]', 'وصف الحالة المرضية') !!}
                        {!! Form::text('partner_illness_description[]', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('partner_illness_prevent_movement[]', '‏هل هذا المرض يعيق الحركة') !!}
                        {!! Form::select('partner_illness_prevent_movement[]', ['نعم بشكل كلي' => 'نعم بشكل كلي', 'نعم بشكل جزئي' => 'نعم بشكل جزئي', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('partner_illness_need_monthly_treatment[]', '‏هل تحتاج إلي علاج شهري') !!}<br>
                        {!! Form::select('partner_illness_need_monthly_treatment[]', ['نعم' => 'نعم', 'لا' => 'لا'], old('partner_illness_need_monthly_treatment[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('partner_illness_is_national_support[]', '‏‏هل تأخذ علاج على نفقة الدولة') !!}
                        {!! Form::select('partner_illness_is_national_support[]', ['نعم كل العلاج' => 'نعم كل العلاج', 'نعم  جزء من العلاج' => 'نعم  جزء من العلاج', 'لا' => 'لا'], old('partner_illness_is_national_support[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('partner_illness_treatment_monthly_amount[]', '‏تكلفة العلاج الشهري') !!}
                        {!! Form::select('partner_illness_treatment_monthly_amount[]', ['أقل من 100 جنية' => 'أقل من 100 جنية', 'من 100 إلى أقل من 300' => 'من 100 إلى أقل من 300', 'من 300 إلى أقل من 600' => 'من 300 إلى أقل من 600', 'أكثر من 600' => 'أكثر من 600'], old('partner_illness_treatment_monthly_amount[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('partner_treatment_affordable[]', '‏هل تقوم بشراء العلاج ‏') !!}
                        {!! Form::select('partner_treatment_affordable[]', ['نعم كل العلاج' => 'نعم كل العلاج', 'نعم  جزء من العلاج' => 'نعم  جزء من العلاج', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('partner_need_operation[]', '‏هل تحتاج إلي عملية') !!}<br>
                        {!! Form::select('partner_need_operation[]', ['نعم' => 'نعم', 'لا' => 'لا'], old('partner_need_operation[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-6">
                    <div id="inc4">
                        <div class="form-group">
                            {!! Form::label('inc4', 'حذف  زوج/زوجه') !!}<br>
                            <a href="#" class="btn btn-primary remove" hidden>-</a>
                        </div>
                    </div>
                </div>
            </div>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div id="inc3">
                <div class="form-group">
                    {!! Form::label('inc3', 'أضف زوج/زوجه') !!}<br>
                    <a href="#" class="btn btn-primary" onclick="drawPartner()">+</a>
                </div>
            </div>
        </div>
    </div>

</div>


<script type="text/javascript">
    
    function drawPartner(){

        var cloneIndex = $(".draw").length;
        // console.log(cloneIndex);

        var newdiv = $('.partner').first().clone().insertAfter('.partner:last').find('input:text').val("").end();

        // $(newdiv).appendTo('#partners');

        $('.draw').select2().last().attr('name','partner_illness_type['+cloneIndex+'][]');

        $('.partner').last().find('.remove').show();
        $('.partner').last().find('.remove').attr('onclick','deletePartner('+cloneIndex+',$(this))');



        $('.draw').last().next().next().remove();

    }

    function deletePartner(i,div){
        // console.log(i);
        div.closest(".partner").remove();
    }

</script>