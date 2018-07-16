<div id="tab_14" class="tab-pane">
    <h4>احتياجات الحاله</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_water', 'عداد مياه') !!}
                {!! Form::select('case_need_water', ['نعم' => 'نعم', 'لا' => 'لا'], $case->need_water, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_bathroom', 'حمام') !!}
                {!! Form::select('case_need_bathroom', ['نعم' => 'نعم', 'لا' => 'لا'], $case->need_bathroom, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_roof', 'سقف') !!}
                {!! Form::select('case_need_roof', ['نعم' => 'نعم', 'لا' => 'لا'], $case->need_roof, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_blankets', 'بطاطين') !!}
                {!! Form::select('case_need_blankets', ['نعم' => 'نعم', 'لا' => 'لا'], $case->need_blankets, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_construction', 'بناء منزل / بعض الجدران') !!}
                {!! Form::select('case_need_construction', ['نعم' => 'نعم', 'لا' => 'لا'], $case->need_construction, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_education', 'نفسي اتعلم') !!}
                {!! Form::select('case_need_education', ['نعم' => 'نعم', 'لا' => 'لا'], $case->need_education, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_food', 'لا للجوع') !!}
                {!! Form::select('case_need_food', ['نعم' => 'نعم', 'لا' => 'لا'], $case->need_food, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_project', 'مشروع صغير') !!}
                {!! Form::select('case_need_project', ['نعم' => 'نعم', 'لا' => 'لا'], old('case_need_project') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%','onchange' => 'if($(this).val()!="لا"){$("#project").show();}else{$("#project").hide();}')) !!}
            </div>
        </div>
    </div>
    <div id="project" hidden>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('case_need_project_desc', '‏ما هو المشروع ?') !!}
                    {!! Form::text('case_need_project_desc', old('case_need_project_desc') or null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
    </div>
</div>
