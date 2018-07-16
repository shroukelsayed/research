@extends('app')

@section('content')
    <div id="content" class="padding-20">
    <!-- Toggles -->
        <div id="panel-ui-tan-r3" class="panel panel-default">

    <div class="panel-heading">

      <span class="elipsis"><!-- panel title -->
        <strong>اضافة بحث جديد</strong>
      </span>

        <!-- right options -->
        <ul class="options pull-right list-inline">
            {{--<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>--}}
            <li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
            {{--<li><a href="#" class="opt panel_close" data-confirm-title="Confirm" data-confirm-message="Are you sure you want to remove this panel?" data-toggle="tooltip" title="Close" data-placement="bottom"><i class="fa fa-times"></i></a></li>--}}
        </ul>
        <!-- /right options -->


    </div>

    <!-- panel content -->
    <div class="panel-body">



        <div class="toggle transparent">

            {{-- |||||||||||||||||||||||||||||||||| --}}
            {{-- Start Part I: Entry User's Details --}}
            {{-- |||||||||||||||||||||||||||||||||| --}}

            <div class="toggle" id="1">

                <label>بيانات خاصه بالمحافظة</label>
                <div class="toggle-content">

                    <div class="form-group">
                        {!! Form::label('case_status', 'حالة الاستمارة') !!}
                        {!! Form::select('case_status', ['لم يتم البدئ في التنفيذ' => 'لم يتم البدئ في التنفيذ',
                         'جاري تجميع الملفات' => 'جاري تجميع الملفات',
                         'جاري التنفيذ' => 'جاري التنفيذ',
                         'تم دفع الرسوم' => 'تم دفع الرسوم',
                         'تم تقديم الملفات' => 'تم تقديم الملفات',
                         'تم تجميع الملفات' => 'تم تجميع الملفات',
                         'تم تنفيذ ادخال عداد' => 'تم تنفيذ ادخال عداد',
                         'توصيل المياه' => 'توصيل المياه',
                         'بناء دورة مياه' => 'بناء دورة مياه',
                         'تم تنفيذ بناء دورة مياه' => 'تم تنفيذ بناء دورة مياه',
                         'تم تنفيذ سقف' => 'تم تنفيذ سقف',
                         'تم تنفيذ توزيع بطاطين' => 'تم تنفيذ توزيع بطاطين',
                         'تم تنفيذ مشروع نفسي اتعلم' => 'تم تنفيذ مشروع نفسي اتعلم',
                         'تم تنفيذ مشروع لا للجوع' => 'تم تنفيذ مشروع لا للجوع',
                         'بناء جدران (جزء من البيت)' => 'بناء جدران (جزء من البيت)'], null, ['placeholder' => 'لا شيء' ,'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('case_user_name', 'اسم الباحث') !!}
                        {!! Form::text('case_user_name', null, array('class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('case_governorate', 'المحافظة') !!}
                        {!! Form::select('case_governorate', ['القاهرة' => 'القاهرة',
                          'الجيزة' => 'الجيزة',
                          'الإسكندرية' => 'الإسكندرية',
                          'القليوبية' => 'القليوبية',
                          'الدقهلية' => 'الدقهلية',
                          'الشرقية' => 'الشرقية',
                          'الغربية' => 'الغربية',
                          'المنوفية' => 'المنوفية',
                          'البحيرة' => 'البحيرة',
                          'كفر الشيخ' => 'كفر الشيخ',
                          'دمياط' => 'دمياط',
                          'بورسعيد' => 'بورسعيد',
                          'الإسماعيلية' => 'الإسماعيلية',
                          'السويس' => 'السويس',
                          'الفيوم' => 'الفيوم',
                          'بني سويف' => 'بني سويف',
                          'المنيا' => 'المنيا',
                          'أسيوط' => 'أسيوط',
                          'سوهاج' => 'سوهاج',
                          'قنا' => 'قنا',
                          'الأقصر' => 'الأقصر',
                          'أسوان' => 'أسوان',
                          'شمال سيناء' => 'شمال سيناء',
                          'جنوب سيناء' => 'جنوب سيناء',
                          'مطروح' => 'مطروح',
                          'البحر الاحمر' => 'البحر الاحمر',
                          'الوادي الجديد' => 'الوادي الجديد'],
                          null, array('placeholder' => 'لا شيء' , 'class' => 'form-control form_input')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('case_city', 'المركز') !!}
                        {!! Form::select('case_city', ['أدفو' => 'أدفو', 'اطسا' => 'اطسا', 'الصف' => 'الصف', 'بني سويف' => 'بني سويف', 'نصر النوبة' => 'نصر النوبة', 'اطا' => 'اطا', 'اهنسيا' => 'اهنسيا', 'سمسطا' => 'سمسطا', 'قنا' => 'قنا', 'يوسف الصديق' => 'يوسف الصديق'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('case_district', 'القرية') !!}
                        {!! Form::select('case_district', ['الشودك' => 'الشودك',
                          'الشيخ علي' => 'الشيخ',
                          'الفويرة' => 'الفويرة',
                          'القناوية' => 'القناوية',
                          'الكرملاوي' => 'الكرملاوي',
                          'النزل' => 'النزل',
                          'الها' => 'الها',
                          'بهنساوي' => 'بهنساوي',
                          'خليل بريك' => 'خليل بريك',
                          'سعيد بكير' => 'سعيد بكير',
                          'شويش' => 'شويش',
                          'عزبة الازهرى' => 'عزبة الازهرى',
                          'عزبة الدكتور بهجت' => 'عزبة الدكتور بهجت',
                          'عزبة بشرا الشرقية' => 'عزبة بشرا الشرقية',
                          'غمازة الكبرى' => 'غمازة الكبرى',
                          'كساب' => 'كساب',
                          'ميانه' => 'ميانه'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('case_follows', 'التابع') !!}
                        {!! Form::text('case_follows', null, array('class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('case_real_date', 'التاريخ') !!}
                        {!! Form::date('case_real_date', null, array('class' => 'form-control')) !!}
                    </div>

                </div>

            </div>

            <div class="toggle" id="2">

                <label>بالمحافظة</label>
                <div class="toggle-content">

                </div>

            </div>
            <div class="toggle" id="3">

                <label>بالمحافظة</label>
                <div class="toggle-content">

                </div>

            </div>
            <div class="toggle" id="4">

                <label>بالمحافظة</label>
                <div class="toggle-content">

                </div>

            </div>
            <div class="toggle" id="5">

                <label>بالمحافظة</label>
                <div class="toggle-content">

                </div>

            </div>
            <div class="toggle" id="6">

                <label>بالمحافظة</label>
                <div class="toggle-content">

                </div>

            </div>
            <div class="toggle" id="7">

                <label>بالمحافظة</label>
                <div class="toggle-content">

                </div>

            </div>
            <div class="toggle" id="8">

                <label>بالمحافظة</label>
                <div class="toggle-content">

                </div>

            </div>
            <div class="toggle" id="9">

                <label>بالمحافظة</label>
                <div class="toggle-content">

                </div>

            </div>
            <div class="toggle" id="10">

                <label>بالمحافظة</label>
                <div class="toggle-content">

                </div>

            </div>
            <div class="toggle" id="11">

                <label>بالمحافظة</label>
                <div class="toggle-content">

                </div>

            </div>
            <div class="toggle" id="12">

                <label>بالمحافظة</label>
                <div class="toggle-content">

                </div>

            </div>
            <div class="toggle" id="13">

                <label>بالمحافظة</label>
                <div class="toggle-content">

                </div>

            </div>
            <div class="toggle" id="14">

                <label>بالمحافظة</label>
                <div class="toggle-content">

                </div>

            </div>

            <div class="toggle">
                <label>أولاً - بيانات خاصة بالباحث</label>
                <div class="toggle-content">

                    {{--<div id="newDivs1">--}}
                    {{--<div id="myTemp">--}}

                    {{-- case_user_name          text --}}

                    {{--</div>--}}
                    {{--</div>--}}

                    {{-- <a onclick="dublicate1()" value="">dublicate</a> --}}

                    {{-- case_real_date          timestamp --}}

                    {{-- case_code               text --}}
                    <div class="form-group">
                        {!! Form::label('case_code', 'كود الاستماره') !!}
                        {!! Form::text('case_code', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_attachment_sum     text --}}
                    <div class="form-group">
                        {!! Form::label('case_attachment_sum', 'عدد المرفقات') !!}
                        {!! Form::text('case_attachment_sum', null, array('class' => 'form-control')) !!}
                    </div>


                    {{-- case_referral_name      text --}}
                    <div class="form-group">
                        {!! Form::label('case_referral_name', 'الدليل') !!}
                        {!! Form::text('case_referral_name', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_referral_phone     text --}}
                    <div class="form-group">
                        {!! Form::label('case_referral_phone', 'رقم تليفون الدليل') !!}
                        {!! Form::text('case_referral_phone', null, array('class' => 'form-control')) !!}
                    </div>

                </div>
            </div>

            {{-- |||||||||||||||||||||||||||||||||| --}}
            {{-- End Part I: Entry User's Details --}}
            {{-- |||||||||||||||||||||||||||||||||| --}}

            {{-- |||||||||||||||||||||||||||||||||| --}}
            {{-- Start Part II: Basic Information --}}
            {{-- |||||||||||||||||||||||||||||||||| --}}

            <div class="toggle">
                <label>ثانيًا - البيانات الأساسية</label>
                <div class="toggle-content">

                    {{-- A & B: Parents  --}}

                    <h3>أ‌- بيانات خاصة برب الاسرة</h3>

                    {{-- case_name               text --}}
                    <div class="form-group">
                        {!! Form::label('case_name', 'الاسم') !!}
                        {!! Form::text('case_name', null, array('class' => 'form-control')) !!}
                    </div>


                    {{-- case_gender             bool[male,female] --}}
                    <div class="form-group">
                        {!! Form::label('case_gender', 'النوع (ذكر-أنثى)') !!}
                        {!! Form::select('case_gender', ['male' => 'ذكر', 'female' => 'أنثى'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control')) !!}
                    </div>

                    {{-- case_ralationship       select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_relationship', 'الحاله الاجتماعية') !!}
                        {!! Form::select('case_relationship', ['single' => 'أعزب', 'married' => 'متزوج', 'married_has_dependants' => 'متزوج ويعول'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control')) !!}
                    </div>

                    {{-- case_age                text --}}
                    <div class="form-group">
                        {!! Form::label('case_age', 'السن') !!}
                        {!! Form::text('case_age', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_profession         text --}}
                    <div class="form-group">
                        {!! Form::label('case_profession', 'بيشتغل إيه؟') !!}
                        {!! Form::text('case_profession', null, array('class' => 'form-control')) !!}
                    </div>


                    {{-- case_phone              text --}}
                    <div class="form-group">
                        {!! Form::label('case_phone', 'رقم الموبايل') !!}
                        {!! Form::text('case_phone', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_national_id        text --}}
                    <div class="form-group">
                        {!! Form::label('case_national_id', 'رقم البطاقة') !!}
                        {!! Form::text('case_national_id', null, array('class' => 'form-control')) !!}
                    </div>


                    <h3>أ‌- بيانات خاصة بالزوجة</h3>

                    {{-- case_name               text --}}
                    <div class="form-group">
                        {!! Form::label('partner_name[]', 'الاسم') !!}
                        {!! Form::text('partner_name[]', null, array('class' => 'form-control')) !!}
                    </div>


                    {{-- case_gender             bool[male,female] --}}
                    <div class="form-group">
                        {!! Form::label('partner_type[]', 'النوع (ذكر-أنثى)') !!}
                        {!! Form::select('partner_type[]', ['male' => 'ذكر', 'female' => 'أنثى'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control')) !!}
                    </div>

                    {{-- case_ralationship       select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('partner_social_case[]', 'الحاله الاجتماعية') !!}
                        {!! Form::select('partner_social_case[]', ['single' => 'أعزب', 'married' => 'متزوج', 'married_has_dependants' => 'متزوج ويعول'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control')) !!}
                    </div>

                    {{-- case_age                text --}}
                    <div class="form-group">
                        {!! Form::label('partner_age[]', 'السن') !!}
                        {!! Form::text('partner_age[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_profession         text --}}
                    <div class="form-group">
                        {!! Form::label('partner_work[]', 'بيشتغل إيه؟') !!}
                        {!! Form::text('partner_work[]', null, array('class' => 'form-control')) !!}
                    </div>


                    {{-- case_phone              text --}}
                    <div class="form-group">
                        {!! Form::label('partner_phone[]', 'رقم الموبايل') !!}
                        {!! Form::text('partner_phone[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_national_id        text --}}
                    <div class="form-group">
                        {!! Form::label('partner_country_id[]', 'رقم البطاقة') !!}
                        {!! Form::text('partner_country_id[]', null, array('class' => 'form-control')) !!}
                    </div>



                    {{-- C: Childrens  --}}
                    <h3>ج- بيانات خاصة بالأبناء</h3>

                    {{-- case_child_sum         text --}}
                    <div class="form-group">
                        {!! Form::label('case_child_sum', 'عدد الأبناء') !!}
                        {!! Form::text('case_child_sum', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_child_name         text --}}
                    <div class="form-group">
                        {!! Form::label('case_child_name[]', 'الاسم') !!}
                        {!! Form::text('case_child_name[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_child_gender       bool[male,female] --}}
                    <div class="form-group">
                        {!! Form::label('case_child_gender[]', ' النوع ') !!}
                        {!! Form::select('case_child_gender[]', ['male' => 'ذكر', 'female' => 'أنثى'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control')) !!}
                    </div>

                    {{-- case_child_age          text --}}
                    <div class="form-group">
                        {!! Form::label('case_child_age[]', 'السن') !!}
                        {!! Form::text('case_child_age[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_child_education    select[primary..] --}}
                    <div class="form-group">
                        {!! Form::label('case_child_education[]', 'مراحل التعليم') !!}
                        {!! Form::select('case_child_education[]', ['kg' => 'حضانه', 'primary' => 'ابتدائي', 'prepatory' => 'اعدادي', 'secondary' => 'ثانوي'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control')) !!}
                    </div>

                    {{-- case_child_ralationship       select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_child_ralationship[]', 'الحاله الاجتماعية') !!}
                        {!! Form::select('case_child_ralationship[]', ['single' => 'أعزب', 'married' => 'متزوج', 'married_has_dependants' => 'متزوج ويعول'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control')) !!}
                    </div>

                    {{-- case_child_has_profession         bool[yes,no]   --}}
                    <div class="form-group">
                        {!! Form::label('case_child_has_profession[]', 'بيشتغل؟') !!}
                        {!! Form::select('case_child_has_profession[]', ['yes' => 'نعم', 'no' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control')) !!}
                    </div>

                    {{-- case_child_profession         text --}}
                    <div class="form-group">
                        {!! Form::label('case_child_profession[]', 'بيشتغل إيه؟') !!}
                        {!! Form::text('case_child_profession[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_child_financial_support         bool[yes,no] --}}
                    <div class="form-group">
                        {!! Form::label('case_child_financial_support[]', 'بيساعدك فى المصاريف') !!}
                        {!! Form::select('case_child_financial_support[]', ['yes' => 'نعم', 'no' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control')) !!}
                    </div>

                    {{-- case_child_school_dropout         select[expensive,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_child_school_dropout[]', ' لو فى حد مبيروحش المدرسه فإيه سبب ده؟') !!}
                        مصاريف التعليم غاليه
                        {!! Form::checkbox('case_child_school_dropout[]', 'education_expensive')!!}
                        التعليم مش مهم للبنت
                        {!! Form::checkbox('case_child_school_dropout[]', 'girl_not_important') !!}
                        مفيش مدارس قريبه
                        {!! Form::checkbox('case_child_school_dropout[]', 'school_not_near') !!}
                        بيسقط على طول
                        {!! Form::checkbox('case_child_school_dropout[]', 'fail_always') !!}
                        يشتغل ويساعد في المصاريف
                        {!! Form::checkbox('case_child_school_dropout[]', 'works_financial_support') !!}
                        بتساعد في شغل البيت
                        {!! Form::checkbox('case_child_school_dropout[]', 'works_at_home') !!}
                        المدرسين بيعملوهم وحش
                        {!! Form::checkbox('case_child_school_dropout[]', 'teachers_bad') !!}
                        وفاة الاب
                        {!! Form::checkbox('case_child_school_dropout[]', 'dad_dead') !!}
                        ظروف صحية
                        {!! Form::checkbox('case_child_school_dropout[]', 'health_purpose') !!}
                    </div>

                    {{-- case_child_school_dropout_other         select[expensive,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_child_school_dropout_other[]', 'سبب أخر') !!}
                        {!! Form::text('case_child_school_dropout_other[]',  null, array('class' => 'form-control') )!!}
                    </div>

                    {{-- D: Roommtes --}}

                    {{-- case_has_roommate         bool[yes,no] --}}
                    <div class="form-group">
                        {!! Form::label('case_has_roommate', '') !!}
                        {!! Form::select('case_has_roommate', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_roommate_name         text --}}
                    <div class="form-group">
                        {!! Form::label('case_roommate_name[]', 'الاسم') !!}
                        {!! Form::text('case_roommate_name[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_roommate_gender       bool[male,female] --}}
                    <div class="form-group">
                        {!! Form::label('case_roommate_gender[]', 'النوع ') !!}
                        {!! Form::select('case_roommate_gender[]', ['male' => 'ذكر', 'female' => 'أنثى'], 'male', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_roommate_relativity       select[uncle,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_roommate_family[]', ' صله القرابه') !!}
                        {!! Form::text('case_roommate_family[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_roommate_age          text --}}
                    <div class="form-group">
                        {!! Form::label('case_roommate_age[]', 'السن') !!}
                        {!! Form::text('case_roommate_age[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_roommate_ralationship       select[single,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_roommate_ralationship[]', ' الحاله الاجتماعية') !!}
                        {!! Form::select('case_roommate_ralationship[]', ['a' => 'aa', 'b' => 'bb'], 'a', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_roommate_has_profession         bool[yes,no] --}}
                    <div class="form-group">
                        {!! Form::label('case_roommate_has_profession[]', 'بيشتغل؟') !!}
                        {!! Form::select('case_roommate_has_profession[]', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_roommate_profession         text --}}
                    <div class="form-group">
                        {!! Form::label('case_roommate_profession[]', 'بيشتغل إيه؟') !!}
                        {!! Form::text('case_roommate_profession[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_roommate_financial_counted         bool[yes,no] --}}
                    <div class="form-group">
                        {!! Form::label('case_roommate_financial_counted[]', 'انت بتصرف عليه؟') !!}
                        {!! Form::select('case_roommate_financial_counted[]', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                </div>
            </div>

            {{-- |||||||||||||||||||||||||||||||||| --}}
            {{-- End Part II: Basic Information --}}
            {{-- |||||||||||||||||||||||||||||||||| --}}

            {{-- |||||||||||||||||||||||||||||||||| --}}
            {{-- Start Part III: Economical Information --}}
            {{-- |||||||||||||||||||||||||||||||||| --}}

            <div class="toggle">
                <label>ثالثًا - بيانات خاصة بالوضع الاقتصادي</label>
                <div class="toggle-content">

                    {{-- A: Income --}}
                    <h4>أ- الدخل</h4>

                    <h5>من فضلك قولنا أنت بيجيلك فلوس كام تقريبًا من الحاجات دي؟</h5>
                    {{-- case_income_source_type         select[son,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_income_source_type[]', 'المصدر') !!}
                        {!! Form::select('case_income_source_type[]', ['شغلك' => 'شغلك',
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
                         ], null, array('placeholder' => 'لا شيء', 'class' => 'form-control select2')) !!}
                    </div>

                    {{-- case_income_source_details      text --}}
                    <div class="form-group">
                        {!! Form::label('case_income_source_details[]', 'توضيح') !!}
                        {!! Form::text('case_income_source_details[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_income_amount         text --}}
                    <div class="form-group">
                        {!! Form::label('case_income_amount[]', 'بيدخلك كام') !!}
                        {!! Form::text('case_income_amount[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_income_paying_type         select[monthly,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_income_paying_type[]', 'كل أد إيه') !!}
                        {!! Form::text('case_income_paying_type[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_income_monthly_times         text --}}
                    <div class="form-group">
                        {!! Form::label('case_income_monthly_times[]', 'عدد مرات تكرارها في الشهر') !!}
                        {!! Form::text('case_income_monthly_times[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_income_notes         text --}}
                    <div class="form-group">
                        {!! Form::label('case_income_notes[]', 'معلومات اضافيه') !!}
                        {!! Form::text('case_income_notes[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- B: Support --}}

                    {{-- case_has_support        bool[yes,no] --}}
                    <div class="form-group">
                        {!! Form::label('case_has_support', 'بيجيلكوا أى مساعدات سواء (أكل أو بطاطين أو تركيب سقف أو توصيل مياه ...إلخ)؟') !!}
                        {!! Form::select('case_has_support', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_support_source_type         select[charity,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_support_source_type[]', 'المصدر') !!}
                        {!! Form::select('case_support_source_type[]', ['charity' => 'جمعية خيرية',
                         'individual' => 'أهل الخير',
                         'relatives' => 'الأهل أو الأقارب',
                         'other' => 'مصادر دخل أخرى',
                         ], 'charity', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_support_source_details      text --}}
                    <div class="form-group">
                        {!! Form::label('case_support_source_details[]', 'من مين') !!}
                        {!! Form::text('case_support_source_details[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_support_type         text --}}
                    <div class="form-group">
                        {!! Form::label('case_support_type[]', 'نوع المساعده') !!}
                        {!! Form::text('case_support_type[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_support_last         timestamp --}}
                    <div class="form-group">
                        {!! Form::label('case_support_last[]', 'في حالة المساعدة لمرة واحدة، جتلك أمته؟') !!}
                        {!! Form::date('case_support_last[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_support_period         text --}}
                    <div class="form-group">
                        {!! Form::label('case_support_period[]', 'في حالة تكرار المساعدة، بتجيلك كل اد أيه؟') !!}
                        {!! Form::text('case_support_period[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_support_notes         text --}}
                    <div class="form-group">
                        {!! Form::label('case_support_notes[]', 'معلومات اضافية') !!}
                        {!! Form::text('case_support_notes[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- C: Debts --}}

                    {{-- case_has_debt        bool[yes,no] --}}
                    <div class="form-group">
                        {!! Form::label('case_has_debt', 'عليكو ديون؟') !!}
                        {!! Form::select('case_has_debt', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_debt_amount      text --}}
                    <div class="form-group">
                        {!! Form::label('case_debt_amount[]', 'الدين بكام') !!}
                        {!! Form::text('case_debt_amount[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_debt_amount      text --}}
                    <div class="form-group">
                        {!! Form::label('case_debt_stay[]', 'فاضل عليكو كام') !!}
                        {!! Form::text('case_debt_stay[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_debt_period         text --}}
                    <div class="form-group">
                        {!! Form::label('case_debt_period[]', 'بتسددوه كل أد إيه') !!}
                        {!! Form::text('case_debt_period[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_debt_paying_source         text --}}
                    <div class="form-group">
                        {!! Form::label('case_debt_paying_source[]', 'بتجيبو الفلوس منين') !!}
                        {!! Form::text('case_debt_paying_source[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_debt_reason         text --}}
                    <div class="form-group">
                        {!! Form::label('case_debt_reason[]', 'أخدتوه ليه') !!}
                        {!! Form::text('case_debt_reason[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_debt_creditor         text --}}
                    <div class="form-group">
                        {!! Form::label('case_debt_creditor[]', 'من مين') !!}
                        {!! Form::text('case_debt_creditor[]', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_debt_notes         text --}}
                    <div class="form-group">
                        {!! Form::label('case_debt_notes[]', 'معلومات اضافيه') !!}
                        {!! Form::text('case_debt_notes[]', null, array('class' => 'form-control')) !!}
                    </div>


                    {{-- D: Expenditure --}}
                    <h3>تقدر تقولي بالتقريب بتصرف كام على الحاجات دي؟ </h3>

                    {{-- case_expenditure_house_rent --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_house_rent', 'إيجار السكن') !!}
                        {!! Form::text('case_expenditure_house_rent', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_expenditure_farm_rent --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_farm_rent', 'أيجار أرض زراعية') !!}
                        {!! Form::text('case_expenditure_farm_rent', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_expenditure_treatment --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_treatment', 'العلاج والكشف') !!}
                        {!! Form::text('case_expenditure_treatment', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_expenditure_detergent --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_detergent', 'الصابون والمنظفات') !!}
                        {!! Form::text('case_expenditure_detergent', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_expenditure_school_subscription --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_school_subscription', 'تكلفة مصاريف المدارس') !!}
                        {!! Form::text('case_expenditure_school_subscription', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_expenditure_child_course --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_child_course', 'دروس الاولاد') !!}
                        {!! Form::text('case_expenditure_child_course', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_expenditure_phone_credit --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_phone_credit', 'رصيد التلفون') !!}
                        {!! Form::text('case_expenditure_phone_credit', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_expenditure_water_receipt --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_water_receipt', 'المياه') !!}
                        {!! Form::text('case_expenditure_water_receipt', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_expenditure_electricity_receipt --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_electricity_receipt', 'الكهرباء') !!}
                        {!! Form::text('case_expenditure_electricity_receipt', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_expenditure_clothes --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_clothes', 'الملابس') !!}
                        {!! Form::text('case_expenditure_clothes', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_expenditure_debts --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_debts', 'سداد ديون') !!}
                        {!! Form::text('case_expenditure_debts', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_expenditure_transportation --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_transportation', 'المواصلات') !!}
                        {!! Form::text('case_expenditure_transportation', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_expenditure_transportation_reason --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_transportation_reason', 'لماذا؟') !!}
                        {!! Form::text('case_expenditure_transportation_reason', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_expenditure_pets_food --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_pets_food', 'أكل للطيور/مواشي') !!}
                        {!! Form::text('case_expenditure_pets_food', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_expenditure_smoking --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_smoking', 'التدخين') !!}
                        {!! Form::text('case_expenditure_smoking', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_expenditure_other --}}
                    <div class="form-group">
                        {!! Form::label('case_expenditure_other', 'نفقات أخرى (وضح)') !!}
                        {!! Form::text('case_expenditure_other', null, array('class' => 'form-control')) !!}
                    </div>

                    <h3>طيب بالنسبة للأكل بتصرف عليه كام؟</h3>

                    {{-- case_food_daily_amount  text --}}
                    <div class="form-group">
                        {!! Form::label('case_food_daily_amount', 'في اليوم العادي') !!}
                        {!! Form::text('case_food_daily_amount', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_food_shopping_amount   text --}}
                    <div class="form-group">
                        {!! Form::label('case_food_shopping_amount', 'يوم السوق') !!}
                        {!! Form::text('case_food_shopping_amount', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_food_shopping_times    text --}}
                    <div class="form-group">
                        {!! Form::label('case_food_shopping_times', 'عدد مرات الذهاب للسوق في الشهر') !!}
                        {!! Form::text('case_food_shopping_times', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_food_monthly_amount    text --}}
                    <div class="form-group">
                        {!! Form::label('case_food_monthly_amount', 'إجمالي نفقات الطعام بالشهر') !!}
                        {!! Form::text('case_food_monthly_amount', null, array('class' => 'form-control')) !!}
                    </div>


                </div>
            </div>

            {{-- |||||||||||||||||||||||||||||||||| --}}
            {{-- End Part III: Economical Information --}}
            {{-- |||||||||||||||||||||||||||||||||| --}}

            {{-- |||||||||||||||||||||||||||||||||| --}}
            {{-- Start Part IV: House Information --}}
            {{-- |||||||||||||||||||||||||||||||||| --}}

            <div class="toggle">
                <label>خامسًا - بيانات خاصة بالمنزل</label>
                <div class="toggle-content">

                    {{-- A: --}}

                    <h4>أ- يسال المبحوث</h4>
                    {{-- case_house_type         select[flat,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_house_type', 'أنت ساكن في') !!}
                        {!! Form::select('case_house_type', ['independant_house' => 'منزل مستقل', 'shared_house' => 'منزل شرك مع أسرة أخرى', 'flat' => 'شقة'], 'independant_house', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_house_paying_type          select[rent,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_house_paying_type', 'البيت ده') !!}
                        {!! Form::select('case_house_paying_type', ['ownership' => 'تمليك', 'inheritance' => 'ورث', 'gift' => 'هبة', 'rent' => 'إيجار'], 'ownership', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_house_paying_other          text --}}
                    <div class="form-group">
                        {!! Form::label('case_house_paying_other', 'أخرى') !!}
                        {!! Form::text('case_house_paying_other', null, array('class' => 'form-control')) !!}
                    </div>

                    {{--if ownership--}}
                    {{-- case_house_paying_amount          text --}}
                    <div class="form-group">
                        {!! Form::label('case_house_paying_amount', 'اشتريته بكام؟') !!}
                        {!! Form::text('case_house_paying_amount', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_house_paying_source          text --}}
                    <div class="form-group">
                        {!! Form::label('case_house_paying_source', 'وإزاى؟') !!}
                        {!! Form::text('case_house_paying_source', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_has_electric_meter           select[shared,] --}}
                    <div class="form-group">
                        {!! Form::label('case_has_electric_meter', 'عندكوا عداد كهرباء؟') !!}
                        {!! Form::select('case_has_electric_meter', ['yes' => 'نعم', 'practise' => 'ممارسة', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{--if yes--}}
                    {{-- case_electric_meter_source           text --}}
                    <div class="form-group">
                        {!! Form::label('case_electric_meter_source', 'دخلتوه إزاى') !!}
                        {!! Form::text('case_electric_meter_source', null, array('class' => 'form-control')) !!}
                    </div>

                    {{--if no--}}
                    {{-- case_electric_meter_reason           text --}}
                    <div class="form-group">
                        {!! Form::label('case_electric_meter_reason', 'مدخلتش كهرباء ليه ؟') !!}
                        {!! Form::text('case_electric_meter_reason', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_electric_meter_alternative           text --}}
                    <div class="form-group">
                        {!! Form::label('case_electric_meter_alternative', 'إزاى تحصلوا على الكهرباء؟') !!}
                        {!! Form::text('case_electric_meter_alternative', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_has_water_meter           select[shared,] --}}
                    <div class="form-group">
                        {!! Form::label('case_has_water_meter', 'عندكوا عداد مياه؟') !!}
                        {!! Form::select('case_has_water_meter', ['yes' => 'نعم', 'practise' => 'ممارسة', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{--if yes--}}
                    {{-- case_water_meter_source           text --}}
                    <div class="form-group">
                        {!! Form::label('case_water_meter_source', 'دخلتوه إزاى') !!}
                        {!! Form::text('case_water_meter_source', null, array('class' => 'form-control')) !!}
                    </div>

                    {{--if no--}}
                    {{-- case_water_meter_reason           text --}}
                    <div class="form-group">
                        {!! Form::label('case_water_meter_reason', 'مدخلتش مياه ليه ؟') !!}
                        {!! Form::text('case_water_meter_reason', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_water_meter_alternative           text --}}
                    <div class="form-group">
                        {!! Form::label('case_water_meter_alternative', 'إزاى بتجيبوا مياه؟') !!}
                        {!! Form::text('case_water_meter_alternative', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_has_farm           bool[yes,no] --}}
                    <div class="form-group">
                        {!! Form::label('case_has_farm', 'عندكوا أرض زراعية؟') !!}
                        {!! Form::select('case_has_farm', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{--if yes--}}
                    {{-- case_farm_type          select[gift,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_farm_type', 'الارض دي') !!}
                        {!! Form::select('case_farm_type', ['ownership' => 'تمليك', 'inheritance' => 'ورث', 'gift' => 'هبة', 'rent' => 'إيجار'], 'ownership', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_farm_other         text --}}
                    <div class="form-group">
                        {!! Form::label('case_farm_other', 'أخرى') !!}
                        {!! Form::text('case_farm_other', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_farm_space         text --}}
                    <div class="form-group">
                        {!! Form::label('case_farm_space', 'مساحتها أد أيه') !!}
                        {!! Form::text('case_farm_space', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_has_pets           bool[yes,no] --}}
                    <div class="form-group">
                        {!! Form::label('case_has_pets', 'عندكوا مواشي/ طيور؟') !!}
                        {!! Form::select('case_has_pets', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{--case_pets_type          checkbox[cow,..]--}}
                    <div class="form-group">
                        {!! Form::label('case_pets_type', 'نوعهم ايه؟') !!}
                        إبل
                        {!! Form::checkbox('case_pets_type', 'camel' )!!}
                        بقر/جاموس
                        {!! Form::checkbox('case_pets_type', 'cow' )!!}
                        ماعز
                        {!! Form::checkbox('case_pets_type', 'goat' )!!}
                        طيور
                        {!! Form::checkbox('case_pets_type', 'bird' )!!}
                    </div>

                    {{-- case_pets_source         text --}}
                    <div class="form-group">
                        {!! Form::label('case_pets_source', 'جبتوهم إزاي؟') !!}
                        {!! Form::text('case_pets_source', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_pets_benifit         text --}}
                    <div class="form-group">
                        {!! Form::label('case_pets_benifit', 'بتعمل بيهم ايه') !!}
                        {!! Form::text('case_pets_benifit', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_has_vehicle           bool[yes,no] --}}
                    <div class="form-group">
                        {!! Form::label('case_has_vehicle', 'انتوا عندكوا أي وسيلة انتقال؟') !!}
                        {!! Form::select('case_has_vehicle', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{--if yes--}}
                    {{-- case_vehicle_type          select[donkey,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_vehicle_type', 'نوعهم ايه؟') !!}
                        جرار
                        {!! Form::checkbox('case_pets_type', 'tractor' )!!}
                        تروسيكل
                        {!! Form::checkbox('case_pets_type', 'tricycle' )!!}
                        موتوسكل
                        {!! Form::checkbox('case_pets_type', 'motorcycle' )!!}
                        حمار
                        {!! Form::checkbox('case_pets_type', 'donkey' )!!}
                    </div>

                    {{-- case_vehicle_source         text --}}
                    <div class="form-group">
                        {!! Form::label('case_vehicle_source', 'جبتوه إزاى؟') !!}
                        {!! Form::text('case_vehicle_source', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_vehicle_benifit         text --}}
                    <div class="form-group">
                        {!! Form::label('case_vehicle_benifit', 'بتعمل بيهم ايه') !!}
                        {!! Form::text('case_vehicle_benifit', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_has_alternative_house           bool[yes,no] --}}
                    <div class="form-group">
                        {!! Form::label('case_has_alternative_house', 'في حالة انكوا اضطرتوا تسيبوا البيت اللي قاعدين فيه عندكوا بيت تاني؟') !!}
                        {!! Form::select('case_has_alternative_house', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{--if yes--}}
                    {{-- case_alternative_house_type          select[donkey,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_alternative_house_type', 'البيت ده') !!}
                        {!! Form::select('case_alternative_house_type', ['ownership' => 'تمليك', 'inheritance' => 'ورث', 'gift' => 'هبة', 'rent' => 'إيجار'], 'ownership', array('class' => 'form-control')) !!}
                    </div>

                    {{--case_alternative_house_other          text--}}
                    <div class="form-group">
                        {!! Form::label('case_alternative_house_other', 'أخرى') !!}
                        {!! Form::text('case_alternative_house_other', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_alternative_house_resident         text --}}
                    <div class="form-group">
                        {!! Form::label('case_alternative_house_resident', 'مين قاعد فيه؟') !!}
                        {!! Form::text('case_alternative_house_resident', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_alternative_house_leave         text --}}
                    <div class="form-group">
                        {!! Form::label('case_alternative_house_leave', 'ومش قاعدين فيه ليه؟') !!}
                        {!! Form::text('case_alternative_house_leave', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- B: --}}

                    <h4>ب- يتم ملئها بواسطة الباحث (عن طريق المشاهدة)</h4>
                    {{-- case_house_built_of       select[blocks,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_house_built_of', 'هل المنزل من؟') !!}
                        {!! Form::select('case_house_built_of', ['bricks' => 'الطوب الاحمر', 'block' => 'البلوك', 'caly' => 'الطوب اللبن (الطين)'], 'bricks', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_house_floor_sum      text --}}
                    <div class="form-group">
                        {!! Form::label('case_house_floor_sum', 'عدد الأدوار') !!}
                        {!! Form::text('case_house_floor_sum', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_house_room_sum      text --}}
                    <div class="form-group">
                        {!! Form::label('case_house_room_sum', 'عدد غرف المنزل') !!}
                        {!! Form::text('case_house_room_sum', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_house_room_type      select[kitchen,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_house_room_type[]', 'الغرفه') !!}
                        {!! Form::select('case_house_room_type[]', ['kitchen' => 'المطبخ',
                          'saloon' => 'الصالة',
                          'room' => 'غرفة'], 'room', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_house_room_roof      select[cement,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_house_room_roof[]', 'نوع السقف') !!}
                        {!! Form::select('case_house_room_roof[]', ['cement' => 'مسلح', 'wood' => 'خشب', 'sheet' => 'صاج', 'leaf' => 'بوص أو جريد', 'without' => 'بدون'], 'cement', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_house_room_paint     select[doko,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_house_room_paint[]', 'نوع البياض') !!}
                        {!! Form::select('case_house_room_paint[]', ['paint' => 'مدهون', 'cement' => 'ممحر', 'b' => 'بدون'], 'a', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_house_room_notes --}}
                    <div class="form-group">
                        {!! Form::label('case_house_room_notes[]', 'معلومات عن استخدام الغرف') !!}
                        {!! Form::text('case_house_room_notes[]', null, array('class' => 'form-control')) !!}
                    </div>

                    <h4>وصف الحمام</h4>
                    {{-- case_house_bathroom_has     checkbox[door,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_house_bathroom_has', 'وصف الحمام') !!}
                        الحوض
                        {!! Form::checkbox('case_house_bathroom_has', 'basin' )!!}
                        القاعدة (سلبس)
                        {!! Form::checkbox('case_house_bathroom_has', 'cabinet' )!!}
                        باب الحمام
                        {!! Form::checkbox('case_house_bathroom_has', 'door' )!!}
                    </div>

                    {{-- case_house_bathroom_roof     select[cement,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_house_bathroom_roof', 'السقف') !!}
                        {!! Form::select('case_house_bathroom_roof', ['cement' => 'مسلح', 'wood' => 'خشب', 'sheet' => 'صاج', 'leaf' => 'بوص أو جريد', 'without' => 'بدون'], 'cement', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_house_bathroom_wall     select[without,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_house_bathroom_wall', 'الجدران') !!}
                        {!! Form::select('case_house_bathroom_wall', ['ceramic' => 'سراميك/ بلاط', 'half_ceramic' => 'نصف سراميك/ بلاط', 'cement' => 'ممحر', 'without' => 'بدون' ], 'ceramic', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_house_bathroom_floor     select[without,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_house_bathroom_floor', 'الارض') !!}
                        {!! Form::select('case_house_bathroom_wall', ['ceramic' => 'سراميك/ بلاط', 'half_ceramic' => 'نصف سراميك/ بلاط', 'cement' => 'اسمنت', 'soil' => 'تراب' ], 'ceramic', array('class' => 'form-control')) !!}
                    </div>

                    <h4>الأشياء الموجودة بالمنزل ويجب أن تكون صالحة للعمل (يتم وضع علامة إذا توافر الشيء بالمنزل)</h4>

                    {{-- case_amenity_mattress --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_mattress', 'مراتب للنوم') !!}
                        {!! Form::select('case_amenity_mattress', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_mattress_sum --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_mattress_sum', 'عددهم') !!}
                        {!! Form::text('case_amenity_mattress_sum', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_fans --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_fans', 'مراوح') !!}
                        {!! Form::select('case_amenity_fans', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_fans_sum --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_fans_sum', 'عددهم') !!}
                        {!! Form::text('case_amenity_fans_sum', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_stove --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_stove', 'بوتجاز بفرن') !!}
                        {!! Form::select('case_amenity_stove', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_fridge --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_fridge', 'ثلاجة') !!}
                        {!! Form::select('case_amenity_fridge', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_arika --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_arika', 'كنب (صالون)') !!}
                        {!! Form::select('case_amenity_arika', ['a' => 'aa', 'b' => 'bb'], 'a', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_television --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_television', 'تلفزيون') !!}
                        {!! Form::select('case_amenity_television', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_bed --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_bed', 'سراير') !!}
                        {!! Form::select('case_amenity_bed', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_bed_sum --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_bed_sum', 'عددهم') !!}
                        {!! Form::text('case_amenity_bed_sum', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_blanket --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_blanket', 'بطانيات') !!}
                        {!! Form::select('case_amenity_blanket', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_blanket_sum --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_blanket_sum', 'عددهم') !!}
                        {!! Form::text('case_amenity_blanket_sum', null, array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_heater --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_heater', 'سخان') !!}
                        {!! Form::select('case_amenity_heater', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_washer --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_washer', 'غسالة') !!}
                        {!! Form::select('case_amenity_washer', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_table --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_table', 'طرابيزة وكراسي') !!}
                        {!! Form::select('case_amenity_table', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_computer --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_computer', 'حاسب آلي') !!}
                        {!! Form::select('case_amenity_computer', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_oven --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_oven', 'فرن') !!}
                        {!! Form::select('case_amenity_oven', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_receiver --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_receiver', 'دش') !!}
                        {!! Form::select('case_amenity_receiver', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_cupbord --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_cupbord', 'دولاب') !!}
                        {!! Form::select('case_amenity_cupbord', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_nish --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_nish', 'نيش') !!}
                        {!! Form::select('case_amenity_nish', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    {{-- case_amenity_flame --}}
                    <div class="form-group">
                        {!! Form::label('case_amenity_flame', 'بوتجاز مسطح/شعله') !!}
                        {!! Form::select('case_amenity_flame', ['yes' => 'نعم', 'no' => 'لا'], 'yes', array('class' => 'form-control')) !!}
                    </div>

                    <h4>ج- احتياجات الأسرة</h4>
                    {{-- case_need           checkbox[education,..] --}}
                    <div class="form-group">
                        {!! Form::label('case_need', 'احتياجات الأسرة') !!}
                        عداد مياه
                        {!! Form::checkbox('case_need', 'مياه' )!!}
                        حمام
                        {!! Form::checkbox('case_need', 'حمام' )!!}
                        سقف
                        {!! Form::checkbox('case_need', 'سقف' )!!}
                        بطاطين
                        {!! Form::checkbox('case_need', 'بطاطين' )!!}
                        بناء منزل / بعض الجدران
                        {!! Form::checkbox('case_need', 'بناء منزل / بعض الجدران' )!!}
                        نفسي اتعلم
                        {!! Form::checkbox('case_need', 'نفسي اتعلم' )!!}
                        لا للجوع
                        {!! Form::checkbox('case_need', 'لا للجوع' )!!}
                    </div>

                    {{-- case_need_why --}}
                    <div class="form-group">
                        {!! Form::label('case_need_why', 'الاسم') !!}
                        {!! Form::text('case_need_why', null, array('class' => 'form-control')) !!}
                    </div>

                    <h4>د- رأي الباحث (ملحوظات أضافية)</h4>
                    {{-- case_user_notes       text --}}
                    <div class="form-group">
                        {!! Form::label('case_user_notes', 'رأي الباحث (ملحوظات أضافية)') !!}
                        {!! Form::text('case_user_notes', null, array('class' => 'form-control')) !!}
                    </div>

                </div>
            </div>

            {{-- |||||||||||||||||||||||||||||||||| --}}
            {{-- End Part IV: House Information --}}
            {{-- |||||||||||||||||||||||||||||||||| --}}


            {!! Form::submit('اضافه', array('class' => 'btn btn-primary form-control')) !!}

            {!! Form::close() !!}

        </div>

    </div>
    <!-- /panel content -->

</div>
    <!-- /Toggles -->
    </div>
@endsection
