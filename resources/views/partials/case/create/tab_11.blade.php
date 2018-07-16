<div id="tab_11" class="tab-pane">
    <h4>بيانات خاصه بالمنزل</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_house_construction', 'هل المنزل من؟') !!}
                {!! Form::select('case_assets_house_construction', ['الطوب الاحمر' => 'الطوب الاحمر', 'البلوك' => 'البلوك', 'الطوب اللبن' => 'الطوب اللبن'], old('case_assets_house_construction') or  null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_house_floors_count', 'عدد الأدوار') !!}
                {!! Form::select('case_assets_house_floors_count', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8'], old('case_assets_house_floors_count') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_house_rooms_count', 'عدد غرف المنزل') !!}
                {!! Form::select('case_assets_house_rooms_count', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5','6' => '6' ,'7' =>'7' ,'8'=>'8','9'=>'9','10'=>'10','11'=>'11'], old('case_assets_house_rooms_count') or null, array('placeholder' => 'لا شيء', 'class' => 'form-control ', 'style' => 'width:100%', 'onchange' => 'if($(this).val() != null && $(this).val() > 0){$(".a_room").slice(1).remove();$("#more_room").show();var max=$(this).val()-1;while(max--){$(".a_room").first().clone().appendTo("#more_room");}}else{$(".a_room").slice(1).remove();$("#more_room").hide();}')) !!}
            </div>
        </div>
    </div>
    <div id="more_room">
        <div class="a_room">
            <h5>غرفه</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('room_type[]', 'نوع الغرفه') !!}
                        {!! Form::select('room_type[]', ['مطبخ' => 'مطبخ',
                          'صالة' => 'صالة',
                          'غرفة' => 'غرفة'], old('room_type[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('room_roof_type[]', 'نوع السقف') !!}
                        {!! Form::select('room_roof_type[]', ['مسلح' => 'مسلح', 'خشب' => 'خشب', 'صاج' => 'صاج', 'بوص أو جريد' => 'بوص أو جريد', 'بدون' => 'بدون'], old('room_roof_type[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('room_roof_status[]', 'حالة السقف') !!}
                        {!! Form::select('room_roof_status[]', ['ممتاز' => 'ممتاز', 'متوسط' => 'متوسط', 'متهالك' => 'متهالك'], old('room_roof_status[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('room_paint[]', 'نوع البياض') !!}
                        {!! Form::select('room_paint[]', ['مدهون' => 'مدهون', 'ممحر' => 'ممحر', 'بدون' => 'بدون'], old('room_paint[]') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control ', 'style' => 'width:100%')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('room_notes[]', 'معلومات اضافية') !!}
                        {!! Form::text('room_notes[]', old('room_notes[]') or null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
