<html dir="rtl">
<head>
    <title>جمعية عمار الأرض | طباعة حالة</title>
</head>
<body>

<div class="row">
    <div class="col-md-8 col-md-offset-2" style="line-height: 5px !important;">
        <br><br>
        <h1> {{ $case->name }} </h1>

        <hr>

        <h4>بيانات خاصة بالمحافظة</h4>
        <p>
            حالة الاستمارة
            &blacktriangleleft; {{ $case->status }}
        </p>
        <p>
            اسم الباحث
            &blacktriangleleft; {{ $case->researcher_name }}
        </p>
        <p>
            المحافظة
            &blacktriangleleft; {{ $case->governorate }}
        </p>
        <p>
            المركز
            &blacktriangleleft; {{ $case->city }}
        </p>
        <p>
            القرية
            &blacktriangleleft; {{ $case->district }}
        </p>
        <p>
            التابع
            &blacktriangleleft; {{ $case->following }}
        </p>
        <p>
            التاريخ
            &blacktriangleleft; {{ $case->real_date }}
        </p>

        <hr>

        <h4>بيانات خاصة برب الأسرة</h4>

        <p>
            الاسم
            &blacktriangleleft; {{ $case->name }}
        </p>
        <p>
            النوع (ذكر-أنثى)
            &blacktriangleleft; {{ $case->gender }}
        </p>
        <p>
            السن
            &blacktriangleleft; {{ $case->age }}
        </p>
        <p>
            رقم البطاقة
            &blacktriangleleft; {{ $case->national_id }}
        </p>
        <p>
            الحاله الاجتماعية
            &blacktriangleleft; {{ $case->relationship_status }}
        </p>
        <p>
            الحاله التعليمية
            &blacktriangleleft; {{ $case->education_status }}
        </p>
        <p>
            المهنة
            &blacktriangleleft; {{ $case->work_status }}
        </p>
        <p>
            وصف المهنة
            &blacktriangleleft; {{ $case->profession }}
        </p>
        @if($case->national_id_front != null)
        <p>
            صورة وجه البطاقة
        </p>
        &blacktriangleleft; <img src="{{asset('uploads/'.$case->national_id_front)}}" style="width: 25%">
        @endif
        @if($case->national_id_back != null)
        <p>
            صورة ظهر البطاقة
        </p>
        &blacktriangleleft; <img src="{{asset('uploads/'.$case->national_id_back)}}" style="width: 25%">
        <p>
        @endif
            رقم الموبايل
            &blacktriangleleft; {{ $case->phone }}
        </p>

        @if(!is_null($case->is_ill))
            <h5>
                يعاني من مرض*
            </h5>
            <p>
                نوع المرض
                &blacktriangleleft; {{ $case->illness_type }}
            </p>
            <p>
                وصف الحالة المرضية
                &blacktriangleleft; {{ $case->illness_description }}
            </p>
            <p>
                ‏هل هذا المرض يعيق الحركة
                &blacktriangleleft; {{ $case->illness_prevent_movement }}
            </p>
            <p>
                ‏هل تحتاج إلي علاج شهري
                &blacktriangleleft; {{ $case->need_monthly_treatment }}
            </p>
            <p>
                ‏‏هل تأخذ علاج على نفقة الدولة
                &blacktriangleleft; {{ $case->has_national_support }}
            </p>
            <p>
                ‏تكلفة العلاج الشهري
                &blacktriangleleft; {{ $case->treatment_monthly_amount }}
            </p>
            <p>
                ‏هل تقوم بشراء العلاج‏
                &blacktriangleleft; {{ $case->treatment_affordable }}
            </p>
            <p>
                ‏هل تحتاج إلي عملية
                &blacktriangleleft; {{ $case->need_operation }}
            </p>
        @endif

        <hr>

        <h4>بيانات خاصة بالزوجة/الزوج</h4>

        @if(count($case->partners) > 0)
            @foreach($case->partners as $case->partner)
                <h5>زوج/زوجه قسم فرعي</h5>
                <p>
                    الاسم
                    &blacktriangleleft; {{ $case->partner->name }}
                </p>
                <p>
                    النوع (ذكر-أنثى)
                    &blacktriangleleft; {{ $case->partner->gender }}
                </p>
                <p>
                    السن
                    &blacktriangleleft; {{ $case->partner->age }}
                </p>
                <p>
                    رقم البطاقة
                    &blacktriangleleft; {{ $case->partner->national_id }}
                </p>
                <p>
                    الحاله الاجتماعية
                    &blacktriangleleft; {{ $case->partner->relationship_status }}
                </p>
                <p>
                    الحاله التعليمية
                    &blacktriangleleft; {{ $case->partner->education_status }}
                </p>
                <p>
                    المهنة
                    &blacktriangleleft; {{ $case->partner->work_status }}
                </p>
                <p>
                    وصف المهنة
                    &blacktriangleleft; {{ $case->partner->profession }}
                </p>
                <p>
                    صورة وجه البطاقة
                </p>
                &blacktriangleleft; <img src="{{asset('uploads/'.$case->partner->national_id_front)}}" style="width: 25%">
                <p>
                    صورة ظهر البطاقة
                </p>
                &blacktriangleleft; <img src="{{asset('uploads/'.$case->partner->national_id_back)}}" style="width: 25%">
                <p>
                    رقم الموبايل
                    &blacktriangleleft; {{ $case->partner->phone }}
                </p>
                @if(!is_null($case->partner->is_ill))
                    <h5>
                        يعاني من مرض*
                    </h5>
                    <p>
                        نوع المرض
                        &blacktriangleleft; {{ $case->partner->illness_type }}
                    </p>
                    <p>
                        وصف الحالة المرضية
                        &blacktriangleleft; {{ $case->partner->illness_description }}
                    </p>
                    <p>
                        ‏هل هذا المرض يعيق الحركة
                        &blacktriangleleft; {{ $case->partner->illness_prevent_movement }}
                    </p>
                    <p>
                        ‏هل تحتاج إلي علاج شهري
                        &blacktriangleleft; {{ $case->partner->need_monthly_treatment }}
                    </p>
                    <p>
                        ‏‏هل تأخذ علاج على نفقة الدولة
                        &blacktriangleleft; {{ $case->partner->has_national_support }}
                    </p>
                    <p>
                        ‏تكلفة العلاج الشهري
                        &blacktriangleleft; {{ $case->partner->treatment_monthly_amount }}
                    </p>
                    <p>
                        ‏هل تقوم بشراء العلاج‏
                        &blacktriangleleft; {{ $case->partner->treatment_affordable }}
                    </p>
                    <p>
                        ‏هل تحتاج إلي عملية
                        &blacktriangleleft; {{ $case->partner->need_operation }}
                    </p>
                @endif
            @endforeach
        @endif

        <hr>

        <h4>بيانات خاصة بالأبناء</h4>

        @if(count($case->children) > 0)
            @foreach($case->children as $case->child)
                <h5>إبن قسم فرعي</h5>
                <p>
                    الاسم
                    &blacktriangleleft; {{ $case->child->name }}
                </p>
                <p>
                    النوع (ذكر-أنثى)
                    &blacktriangleleft; {{ $case->child->gender }}
                </p>
                <p>
                    السن
                    &blacktriangleleft; {{ $case->child->age }}
                </p>
                <p>
                    الحاله الاجتماعية
                    &blacktriangleleft; {{ $case->child->relationship_status }}
                </p>
                <p>
                    الحاله التعليمية
                    &blacktriangleleft; {{ $case->child->education_status }}
                </p>
                <p>
                    المهنة
                    &blacktriangleleft; {{ $case->child->work_status }}
                </p>
                <p>
                    وصف المهنة
                    &blacktriangleleft; {{ $case->child->profession }}
                </p>
                @if(!is_null($case->child->is_ill))
                    <h5>
                        يعاني من مرض*
                    </h5>
                    <p>
                        نوع المرض
                        &blacktriangleleft; {{ $case->child->illness_type }}
                    </p>
                    <p>
                        وصف الحالة المرضية
                        &blacktriangleleft; {{ $case->child->illness_description }}
                    </p>
                    <p>
                        ‏هل هذا المرض يعيق الحركة
                        &blacktriangleleft; {{ $case->child->illness_prevent_movement }}
                    </p>
                    <p>
                        ‏هل تحتاج إلي علاج شهري
                        &blacktriangleleft; {{ $case->child->need_monthly_treatment }}
                    </p>
                    <p>
                        ‏‏هل تأخذ علاج على نفقة الدولة
                        &blacktriangleleft; {{ $case->child->has_national_support }}
                    </p>
                    <p>
                        ‏تكلفة العلاج الشهري
                        &blacktriangleleft; {{ $case->child->treatment_monthly_amount }}
                    </p>
                    <p>
                        ‏هل تقوم بشراء العلاج‏
                        &blacktriangleleft; {{ $case->child->treatment_affordable }}
                    </p>
                    <p>
                        ‏هل تحتاج إلي عملية
                        &blacktriangleleft; {{ $case->child->need_operation }}
                    </p>
                @endif
            @endforeach
        @endif

        <hr>

        <h4>بيانات خاصة بالأقارب الموجودين بالسكن</h4>

        @if(count($case->roommates) > 0)
            @foreach($case->roommates as $case->roommate)
                <h5>قريب بالسكن قسم فرعي</h5>
                <p>
                    الاسم
                    &blacktriangleleft; {{ $case->roommate->name }}
                </p>
                <p>
                    النوع (ذكر-أنثى)
                    &blacktriangleleft; {{ $case->roommate->gender }}
                </p>
                <p>
                    السن
                    &blacktriangleleft; {{ $case->roommate->age }}
                </p>
                <p>
                    الحاله الاجتماعية
                    &blacktriangleleft; {{ $case->roommate->relationship_status }}
                </p>
                <p>
                    الحاله التعليمية
                    &blacktriangleleft; {{ $case->roommate->education_status }}
                </p>
                <p>
                    المهنة
                    &blacktriangleleft; {{ $case->roommate->work_status }}
                </p>
                <p>
                    وصف المهنة
                    &blacktriangleleft; {{ $case->roommate->profession }}
                </p>
                <p>
                    صلة القرابة
                    &blacktriangleleft; {{ $case->roommate->relativity }}
                </p>
                @if(!is_null($case->roommate->is_ill))
                    <h5>
                        يعاني من مرض*
                    </h5>
                    <p>
                        نوع المرض
                        &blacktriangleleft; {{ $case->roommate->illness_type }}
                    </p>
                    <p>
                        وصف الحالة المرضية
                        &blacktriangleleft; {{ $case->roommate->illness_description }}
                    </p>
                    <p>
                        ‏هل هذا المرض يعيق الحركة
                        &blacktriangleleft; {{ $case->roommate->illness_prevent_movement }}
                    </p>
                    <p>
                        ‏هل تحتاج إلي علاج شهري
                        &blacktriangleleft; {{ $case->roommate->need_monthly_treatment }}
                    </p>
                    <p>
                        ‏‏هل تأخذ علاج على نفقة الدولة
                        &blacktriangleleft; {{ $case->roommate->has_national_support }}
                    </p>
                    <p>
                        ‏تكلفة العلاج الشهري
                        &blacktriangleleft; {{ $case->roommate->treatment_monthly_amount }}
                    </p>
                    <p>
                        ‏هل تقوم بشراء العلاج‏
                        &blacktriangleleft; {{ $case->roommate->treatment_affordable }}
                    </p>
                    <p>
                        ‏هل تحتاج إلي عملية
                        &blacktriangleleft; {{ $case->roommate->need_operation }}
                    </p>
                @endif
            @endforeach
        @endif

        <hr>

        <h4>الدخل ومصادره</h4>

        <p>
            اجمالى دخل الأسرة
            &blacktriangleleft; {{ $case->income_amount }}
        </p>
        <p>
            اجمالى دخل الأسرة (فئات)
            &blacktriangleleft; {{ $case->income_amount_category }}
        </p>
        <p>
            عدد مصادر الدخل
            &blacktriangleleft; {{ $case->income_source_count }}
        </p>

        @if(count($case->income) > 0)
            @foreach($case->income as $case->income)
                <h5>دخل قسم فرعي</h5>
                <p>
                    المصدر
                    &blacktriangleleft; {{ $case->income->source_type }}
                </p>
                <p>
                    معلومات اضافيه
                    &blacktriangleleft; {{ $case->income->notes }}
                </p>
                <p>
                    اجمالى الدخل الشهري منه
                    &blacktriangleleft; {{ $case->income->monthly_amount }}
                </p>
                <p>
                    نوع المصدر‏
                    &blacktriangleleft; {{ $case->income->source_flow }}
                </p>
            @endforeach
        @endif

        <hr>

        <h4>المساعدات</h4>

        <p>
            عدد المساعدات
            &blacktriangleleft; {{ $case->support_count }}
        </p>

        @if(count($case->support) > 0)
            @foreach($case->support as $case->support)
                <h5>مساعده قسم فرعي</h5>
                <p>
                    القائم بالمساعده
                    &blacktriangleleft; {{ $case->support->source_category }}
                </p>
                <p>
                    اسم المصدر
                    &blacktriangleleft; {{ $case->support->source_name }}
                </p>
                <p>
                    نوع المساعده
                    &blacktriangleleft; {{ $case->support->type }}
                </p>
                <p>
                    تكرار المساعدة
                    &blacktriangleleft; {{ $case->support->period }}
                </p>
            @endforeach
        @endif

        <hr>

        <h4>الديون</h4>

        <p>
            اجمالى الديون
            &blacktriangleleft; {{ $case->debts_total }}
        </p>
        <p>
            اجمالى الديون (فئات)
            &blacktriangleleft; {{ $case->debts_total_range }}
        </p>

        @if(count($case->debts) > 0)
            @foreach($case->debts as $case->debt)
                <h5>دين قسم فرعي</h5>
                <p>
                    اجمالى الدين
                    &blacktriangleleft; {{ $case->debt->amount }}
                </p>
                <p>
                    المبلغ المتبقى
                    &blacktriangleleft; {{ $case->debt->stay }}
                </p>
                <p>
                    سبب الدين
                    &blacktriangleleft; {{ $case->debt->reason }}
                </p>
                <p>
                    ‏طريقة السداد
                    &blacktriangleleft; {{ $case->debt->refund_method }}
                </p>
                <p>
                    في حالة الأقساط الشهرية قيمة القسط الشهري
                    &blacktriangleleft; {{ $case->debt->monthly_amount }}
                </p>
            @endforeach
        @endif

        <hr>

        <h4>النفقات</h4>

        <p>
            إيجار السكن
            &blacktriangleleft; {{ $case->expenses_house_rent }}
        </p>
        <p>
            أيجار أرض زراعية
            &blacktriangleleft; {{ $case->expenses_farm_rent }}
        </p>
        <p>
            العلاج والكشف
            &blacktriangleleft; {{ $case->expenses_treatment }}
        </p>
        <p>
            الصابون والمنظفات
            &blacktriangleleft; {{ $case->expenses_detergent }}
        </p>
        <p>
            مصاريف المدارس
            &blacktriangleleft; {{ $case->expenses_school_subscription }}
        </p>
        <p>
            دروس الأبناء
            &blacktriangleleft; {{ $case->expenses_child_course }}
        </p>
        <p>
            فاتورة المياه
            &blacktriangleleft; {{ $case->expenses_water_receipt }}
        </p>
        <p>
            فاتورة الكهرباء
            &blacktriangleleft; {{ $case->expenses_electricity_receipt }}
        </p>
        <p>
            الملابس
            &blacktriangleleft; {{ $case->expenses_clothes }}
        </p>
        <p>
            رصيد التلفون
            &blacktriangleleft; {{ $case->expenses_phone_credit }}
        </p>
        <p>
            سداد ديون
            &blacktriangleleft; {{ $case->expenses_debts }}
        </p>
        <p>
            المواصلات
            &blacktriangleleft; {{ $case->expenses_transportation }}
        </p>
        <p>
            أكل المواشي
            &blacktriangleleft; {{ $case->expenses_pets_food }}
        </p>
        <p>
            التدخين
            &blacktriangleleft; {{ $case->expenses_smoking }}
        </p>
        <p>
            إجمالي نفقات الطعام
            &blacktriangleleft; {{ $case->expenses_food }}
        </p>
        <p>
            نفقات أخرى (وضح)
            &blacktriangleleft; {{ $case->expenses_other }}
        </p>
        <p>
            اجمالى نفقات الأسرة (فئات)
            &blacktriangleleft; {{ $case->expenses_total_category }}
        </p>
        <p>
            اجمالى نفقات الأسرة
            &blacktriangleleft; {{ $case->expenses_total }}
        </p>

        <hr>

        <h4>بيانات خاصة بالممتلكات</h4>

        <p>
            ساكن في
            &blacktriangleleft; {{ $case->assets_house_type }}
        </p>
        <p>
            المنزل
            &blacktriangleleft; {{ $case->assets_house_status }}
        </p>
        <p>
            ‏في حالة ما إذا كان المنزل تمليك فما كان سعره
            &blacktriangleleft; {{ $case->assets_house_price }}
        </p>
        <p>
            وكيف قمتوا بشراءه
            &blacktriangleleft; {{ $case->assets_house_paying_source }}
        </p>
        <p>
            عداد كهرباء
            &blacktriangleleft; {{ $case->assets_electric_meter }}
        </p>
        <p>
            عداد مياه
            &blacktriangleleft; {{ $case->assets_water_meter }}
        </p>
        <p>
            ‏في حالة عدم وجود عداد مياه فكيف تحصلون عليها؟
            &blacktriangleleft; {{ $case->assets_water_alternative }}
        </p>
        <p>
            عندكوا أرض زراعية؟
            &blacktriangleleft; {{ $case->assets_farm }}
        </p>
        <p>
            عندكوا مواشي/ طيور؟
            &blacktriangleleft; {{ $case->assets_pets }}
        </p>
        <p>
            انتوا عندكوا أي وسيلة انتقال؟
            &blacktriangleleft; {{ $case->assets_vehicle }}
        </p>
        <p>
            ‏هل لديك بيت اخر؟
            &blacktriangleleft; {{ $case->assets_house_alternative_status }}
        </p>
        <p>
            ‏ في حالة وجود بيت اخر فمن الذي يسكن به؟
            &blacktriangleleft; {{ $case->assets_house_alternative_resident }}
        </p>
        <p>
            ‏ولماذا لا تسكنون به؟
            &blacktriangleleft; {{ $case->assets_house_alternative_leave }}
        </p>

        <hr>

        <h4>بيانات خاصة بالمنزل</h4>

        <p>
            المنزل من
            &blacktriangleleft; {{ $case->assets_house_construction }}
        </p>
        <p>
            عدد الأدوار
            &blacktriangleleft; {{ $case->assets_house_floors_count }}
        </p>
        <p>
            عدد غرف المنزل
            &blacktriangleleft; {{ $case->assets_house_rooms_count }}
        </p>

        @if(count($case->rooms) > 0)
            @foreach($case->rooms as $case->room)
                <h5>غرفه قسم فرعي</h5>
                <p>
                    نوع الغرفه
                    &blacktriangleleft; {{ $case->room->type }}
                </p>
                <p>
                    نوع السقف
                    &blacktriangleleft; {{ $case->room->roof_type }}
                </p>
                <p>
                    حالة السقف
                    &blacktriangleleft; {{ $case->room->roof_status }}
                </p>
                <p>
                    نوع البياض
                    &blacktriangleleft; {{ $case->room->paint }}
                </p>
                <p>
                    معلومات اضافية
                    &blacktriangleleft; {{ $case->room->notes }}
                </p>
            @endforeach
        @endif

        <hr>

        <h4>وصف الحمام</h4>

        <p>
            ‫يوجد‬‬ حمام
            &blacktriangleleft; {{ $case->has_bathroom }}
        </p>
        <p>
            يوجد باب للحمام
            &blacktriangleleft; {{ $case->bathroom_has_door }}
        </p>
        <p>
            يوجد حوض
            &blacktriangleleft; {{ $case->bathroom_has_basin }}
        </p>
        <p>
            يوجد قاعدة (سلبس)
            &blacktriangleleft; {{ $case->bathroom_has_toilet }}
        </p>
        <p>
            السقف
            &blacktriangleleft; {{ $case->bathroom_roof }}
        </p>
        <p>
            الجدران
            &blacktriangleleft; {{ $case->bathroom_wall }}
        </p>
        <p>
            الارض
            &blacktriangleleft; {{ $case->bathroom_floor }}
        </p>

        <hr>

        <h4>وصف محتويات المنزل</h4>

        <p>
            مراتب للنوم
            &blacktriangleleft; {{ $case->amenities_mattress }}
        </p>
        <p>
            سراير
            &blacktriangleleft; {{ $case->amenities_bed }}
        </p>
        <p>
            مراوح
            &blacktriangleleft; {{ $case->amenities_fans }}
        </p>
        <p>
            بطاطين
            &blacktriangleleft; {{ $case->amenities_blankets }}
        </p>
        <p>
            بوتجاز بفرن
            &blacktriangleleft; {{ $case->amenities_stove }}
        </p>
        <p>
            فرن
            &blacktriangleleft; {{ $case->amenities_oven }}
        </p>
        <p>
            بوتجاز مسطح/شعله
            &blacktriangleleft; {{ $case->amenities_flame }}
        </p>
        <p>
            سخان
            &blacktriangleleft; {{ $case->amenities_heater }}
        </p>
        <p>
            ثلاجة
            &blacktriangleleft; {{ $case->amenities_fridge }}
        </p>
        <p>
            غسالة
            &blacktriangleleft; {{ $case->amenities_washer }}
        </p>
        <p>
            دولاب
            &blacktriangleleft; {{ $case->amenities_cupbord }}
        </p>
        <p>
            نيش
            &blacktriangleleft; {{ $case->amenities_nish }}
        </p>
        <p>
            كنب (صالون)
            &blacktriangleleft; {{ $case->amenities_arika }}
        </p>
        <p>
            طرابيزة وكراسي
            &blacktriangleleft; {{ $case->amenities_table }}
        </p>
        <p>
            تلفزيون
            &blacktriangleleft; {{ $case->amenities_television }}
        </p>
        <p>
            دش
            &blacktriangleleft; {{ $case->amenities_receiver }}
        </p>
        <p>
            حاسب آلي
            &blacktriangleleft; {{ $case->amenities_computer }}
        </p>

        <hr>

        <h4>احتياجات الحالة</h4>

        <p>
            عداد مياه
            &blacktriangleleft; {{ $case->need_water }}
        </p>
        <p>
            حمام
            &blacktriangleleft; {{ $case->need_bathroom }}
        </p>
        <p>
            سقف
            &blacktriangleleft; {{ $case->need_roof }}
        </p>
        <p>
            بطاطين
            &blacktriangleleft; {{ $case->need_blankets }}
        </p>
        <p>
            بناء منزل / بعض الجدران
            &blacktriangleleft; {{ $case->need_construction }}
        </p>
        <p>
            نفسي اتعلم
            &blacktriangleleft; {{ $case->need_education }}
        </p>
        <p>
            لا للجوع
            &blacktriangleleft; {{ $case->need_food }}
        </p>

        <hr>

        <h4>ملحوظات اضافية</h4>

        <p>
            &blacktriangleleft; {{ $case->additional_notes }}
        </p>

    </div>
</div>
</body>
</html>

