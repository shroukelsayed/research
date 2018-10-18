<div id="tab1" class="tab-pane active">
    <div class="row">
        <div class="col-md-4">
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
                 'تم تنفيذ سقف' => 'تم تنفيذ سقف',
                 'تم تنفيذ توزيع بطاطين' => 'تم تنفيذ توزيع بطاطين',
                 'تم تنفيذ مشروع نفسي اتعلم' => 'تم تنفيذ مشروع نفسي اتعلم',
                 'تم تنفيذ مشروع لا للجوع' => 'تم تنفيذ مشروع لا للجوع',
                 'بناء جدران (جزء من البيت)' => 'بناء جدران (جزء من البيت)'], null, ['placeholder' => 'لا شيء' ,'class' => 'form-control select2 form_input']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('case_governorate', 'المحافظة') !!}
                {!! Form::select('case_governorate', $govs,
                  null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input')) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('case_city', 'المركز') !!}
                {!! Form::select('case_city', $cities, null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('case_district', 'القرية') !!}
                {!! Form::select('case_district', $districts, null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input')) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('case_following', 'التابع') !!}
                {!! Form::select('case_following', $followings, null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input')) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('case_real_date', 'تاريخ تطبيق البحث') !!}
                {!! Form::date('case_real_date', null, array('class' => 'form-control form_input')) !!}
            </div>
        </div>
    </div>
</div>
