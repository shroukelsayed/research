<div id="tab_12" class="tab-pane">
    <h4>وصف الحمام</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_has_bathroom', '‫هل ‫يوجد‬‬ حمام‬') !!}
                {!! Form::select('case_has_bathroom', ['نعم' => 'نعم', 'لا' => 'لا'], old('case_has_bathroom') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%', 'onchange' => 'if($(this).val()=="نعم"){$("#bath").show();}else{$("#bath").hide();}')) !!}
            </div>
        </div>
    </div>
    <div id="bath" hidden>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('case_bathroom_has_door', '‫‏هل يوجد باب للحمام') !!}
                    {!! Form::select('case_bathroom_has_door', ['نعم' => 'نعم', 'لا' => 'لا'], old('case_bathroom_has_door') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('case_bathroom_has_basin', '‏هل يوجد حوض') !!}
                    {!! Form::select('case_bathroom_has_basin', ['نعم' => 'نعم', 'لا' => 'لا'], old('case_bathroom_has_basin') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('case_bathroom_has_toilet', 'هل يوجد قاعدة (سلبس)') !!}
                    {!! Form::select('case_bathroom_has_toilet', ['نعم' => 'نعم', 'لا' => 'لا'], old('case_bathroom_has_toilet') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('case_bathroom_roof', 'السقف') !!}
                    {!! Form::select('case_bathroom_roof', ['مسلح' => 'مسلح', 'خشب' => 'خشب', 'صاج' => 'صاج', 'بوص أو جريد' => 'بوص أو جريد', 'بدون' => 'بدون','تحت السلم'=>'تحت السلم'], old('case_bathroom_roof') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('case_bathroom_wall', 'الجدران') !!}
                    {!! Form::select('case_bathroom_wall', ['سراميك / بلاط' => 'سراميك / بلاط', 'نصف سراميك / بلاط' => 'نصف سراميك / بلاط', 'ممحر' => 'ممحر', 'بدون' => 'بدون' ], old('case_bathroom_wall') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('case_bathroom_floor', 'الارض') !!}
                    {!! Form::select('case_bathroom_floor', ['سراميك / بلاط' => 'سراميك / بلاط', 'نصف سراميك / بلاط' => 'نصف سراميك / بلاط', 'اسمنت' => 'اسمنت', 'تراب' => 'تراب' ], old('case_bathroom_floor') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
                </div>
            </div>
        </div>
    </div>

</div>
