<div id="tab_14" class="tab-pane">
    <h4>احتياجات الحاله</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_water', 'عداد مياه') !!}
                {!! Form::select('case_need_water', ['1' => 'نعم', '0' => 'لا'], old('case_need_water') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_bathroom', 'حمام') !!}
                {!! Form::select('case_need_bathroom', ['1' => 'نعم', '0' => 'لا'], old('case_need_bathroom') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_roof', 'سقف') !!}
                {!! Form::select('case_need_roof', ['1' => 'نعم', '0' => 'لا'], old('case_need_roof') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_blankets', 'بطاطين') !!}
                {!! Form::select('case_need_blankets', ['1' => 'نعم', '0' => 'لا'], old('case_need_blankets') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_construction', 'بناء منزل / بعض الجدران') !!}
                {!! Form::select('case_need_construction', ['1' => 'نعم', '0' => 'لا'], old('case_need_construction') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_education', 'نفسي اتعلم') !!}
                {!! Form::select('case_need_education', ['1' => 'نعم', '0' => 'لا'], old('case_need_education') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_food', 'اطمن') !!}
                {!! Form::select('case_need_food', ['1' => 'نعم', '0' => 'لا'], old('case_need_food') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_need_project', 'مشروع صغير') !!}
                {!! Form::select('case_need_project', ['1' => 'نعم', '0' => 'لا'], old('case_need_project') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%','onchange' => 'if($(this).val()!="0"){$("#project").show();}else{$("#project").hide();}')) !!}
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