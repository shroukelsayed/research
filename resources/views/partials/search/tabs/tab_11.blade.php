<div id="tab11" class="tab-pane">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_house_construction', 'هل المنزل من؟') !!}
                {!! Form::select('case_assets_house_construction', ['الطوب الاحمر' => 'الطوب الاحمر', 'البلوك' => 'البلوك', 'الطوب اللبن' => 'الطوب اللبن'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_house_floors_count', 'عدد الأدوار') !!}
                {!! Form::select('case_assets_house_floors_count', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_house_rooms_count', 'عدد غرف المنزل') !!}
                {!! Form::select('case_assets_house_rooms_count', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('room_roof_type', 'نوع السقف') !!}
                {!! Form::select('room_roof_type', ['مسلح' => 'مسلح', 'خشب' => 'خشب', 'صاج' => 'صاج', 'بوص أو جريد' => 'بوص أو جريد', 'بدون' => 'بدون'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('room_roof_status', 'حالة السقف') !!}
                {!! Form::select('room_roof_status', ['ممتاز' => 'ممتاز', 'متوسط' => 'متوسط', 'متهالك' => 'متهالك'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('room_paint', 'نوع البياض') !!}
                {!! Form::select('room_paint', ['مدهون' => 'مدهون', 'ممحر' => 'ممحر', 'بدون' => 'بدون'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
</div>
