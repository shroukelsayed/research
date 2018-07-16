<div id="tab12" class="tab-pane">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_has_bathroom', '‫هل ‫يوجد‬‬ حمام‬') !!}
                {!! Form::select('case_has_bathroom', ['نعم' => 'نعم', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%', 'onchange' => 'if($(this).val()=="نعم"){$("#bath").show();}else{$("#bath").hide();}')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_bathroom_has_door', '‫‏هل يوجد باب للحمام') !!}
                {!! Form::select('case_bathroom_has_door', ['نعم' => 'نعم', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_bathroom_has_basin', '‏هل يوجد حوض') !!}
                {!! Form::select('case_bathroom_has_basin', ['نعم' => 'نعم', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_bathroom_has_toilet', 'هل يوجد قاعدة (سلبس)') !!}
                {!! Form::select('case_bathroom_has_toilet', ['نعم' => 'نعم', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_bathroom_roof', 'السقف') !!}
                {!! Form::select('case_bathroom_roof', ['مسلح' => 'مسلح', 'خشب' => 'خشب', 'صاج' => 'صاج', 'بوص أو جريد' => 'بوص أو جريد', 'بدون' => 'بدون'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_bathroom_wall', 'الجدران') !!}
                {!! Form::select('case_bathroom_wall', ['سراميك / بلاط' => 'سراميك / بلاط', 'نصف سراميك / بلاط' => 'نصف سراميك / بلاط', 'ممحر' => 'ممحر', 'بدون' => 'بدون' ], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_bathroom_floor', 'الارض') !!}
                {!! Form::select('case_bathroom_floor', ['سراميك / بلاط' => 'سراميك / بلاط', 'نصف سراميك / بلاط' => 'نصف سراميك / بلاط', 'اسمنت' => 'اسمنت', 'تراب' => 'تراب' ], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
</div>
