<div id="tab_13" class="tab-pane">
    <h4>وصف محتويات المنزل</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_mattress', 'مراتب للنوم') !!}
                {!! Form::select('case_amenities_mattress', ['توجد بشكل كاف' => 'توجد بشكل كاف', 'توجد بشكل غير كاف' => 'توجد بشكل غير كاف', 'لا توجد' => 'لا توجد'], $case->amenities_mattress, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_bed', 'سراير') !!}
                {!! Form::select('case_amenities_bed', ['توجد بشكل كاف' => 'توجد بشكل كاف', 'توجد بشكل غير كاف' => 'توجد بشكل غير كاف', 'لا توجد' => 'لا توجد'], $case->amenities_bed, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_fans', 'مراوح') !!}
                {!! Form::select('case_amenities_fans', ['توجد بشكل كاف' => 'توجد بشكل كاف', 'توجد بشكل غير كاف' => 'توجد بشكل غير كاف', 'لا توجد' => 'لا توجد'], $case->amenities_fans, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_blankets', 'بطاطين') !!}
                {!! Form::select('case_amenities_blankets', ['توجد بشكل كاف' => 'توجد بشكل كاف', 'توجد بشكل غير كاف' => 'توجد بشكل غير كاف', 'لا توجد' => 'لا توجد'], $case->amenities_blankets, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_stove', 'بوتجاز بفرن') !!}
                {!! Form::select('case_amenities_stove', ['نعم' => 'نعم', 'لا' => 'لا'], $case->amenities_stove, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_oven', 'فرن') !!}
                {!! Form::select('case_amenities_oven', ['نعم' => 'نعم', 'لا' => 'لا'], $case->amenities_oven, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_flame', 'بوتجاز مسطح/شعله') !!}
                {!! Form::select('case_amenities_flame', ['نعم' => 'نعم', 'لا' => 'لا'], $case->amenities_flame, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_heater', 'سخان') !!}
                {!! Form::select('case_amenities_heater', ['نعم' => 'نعم', 'لا' => 'لا'], $case->amenities_heater, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_fridge', 'ثلاجة') !!}
                {!! Form::select('case_amenities_fridge', ['نعم' => 'نعم', 'لا' => 'لا'], $case->amenities_fridge, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_washer', 'غسالة') !!}
                {!! Form::select('case_amenities_washer', ['نعم' => 'نعم', 'لا' => 'لا'], $case->amenities_washer, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_cupbord', 'دولاب') !!}
                {!! Form::select('case_amenities_cupbord', ['نعم' => 'نعم', 'لا' => 'لا'], $case->amenities_cupbord, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_nish', 'نيش') !!}
                {!! Form::select('case_amenities_nish', ['نعم' => 'نعم', 'لا' => 'لا'], $case->amenities_nish, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_arika', 'كنب (صالون)') !!}
                {!! Form::select('case_amenities_arika', ['نعم' => 'نعم', 'لا' => 'لا'], $case->amenities_arika, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_table', 'طرابيزة وكراسي') !!}
                {!! Form::select('case_amenities_table', ['نعم' => 'نعم', 'لا' => 'لا'], $case->amenities_table, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_television', 'تلفزيون') !!}
                {!! Form::select('case_amenities_television', ['نعم' => 'نعم', 'لا' => 'لا'], $case->amenities_television, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_receiver', 'دش') !!}
                {!! Form::select('case_amenities_receiver', ['نعم' => 'نعم', 'لا' => 'لا'], $case->amenities_receiver, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_amenities_computer', 'حاسب آلي') !!}
                {!! Form::select('case_amenities_computer', ['نعم' => 'نعم', 'لا' => 'لا'], $case->amenities_computer, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
</div>
