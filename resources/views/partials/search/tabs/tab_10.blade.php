<div id="tab10" class="tab-pane">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_house_type', 'أنت ساكن في') !!}
                {!! Form::select('case_assets_house_type', ['منزل مستقل' => 'منزل مستقل', 'منزل شرك مع أسرة أخرى' => 'منزل شرك مع أسرة أخرى', 'شقة' => 'شقة'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_house_status', 'هل المنزل') !!}
                {!! Form::select('case_assets_house_status', ['تمليك' => 'تمليك', 'ورث' => 'ورث', 'هبة' => 'هبة', 'إيجار' => 'إيجار'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%', 'onchange' => 'if($(this).val()=="تمليك"){$("#tamleek").show();}else{$("#tamleek").hide();}')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_electric_meter', 'عندكوا عداد كهرباء؟') !!}
                {!! Form::select('case_assets_electric_meter', ['نعم' => 'نعم', 'ممارسة' => 'ممارسة', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_water_meter', 'عندكوا عداد مياه؟') !!}
                {!! Form::select('case_assets_water_meter', ['نعم' => 'نعم', 'ممارسة' => 'ممارسة', 'لا' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%', 'onchange' => 'if($(this).val()=="لا"){$("#water_meter").show();}else{$("#water_meter").hide();}')) !!}
            </div>
        </div>
    </div>
    <div id="water_meter" hidden>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('case_assets_water_alternative', '‏في حالة عدم وجود عداد مياه فكيف تحصلون عليها؟') !!}
                    {!! Form::select('case_assets_water_alternative', ['ملىء' => 'ملىء', 'طرمبه' => 'طرمبه', 'وصله من الشارع (كسر ماسوره)' => 'وصله من الشارع (كسر ماسوره)', 'وصله من بيت مجاور' => 'وصله من بيت مجاور'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_farm', 'عندكوا أرض زراعية؟') !!}
                {!! Form::select('case_assets_farm', ['لا يوجد' => 'لا يوجد', 'تمليك' => 'تمليك', 'ورث' => 'ورث', 'هبة' => 'هبة', 'إيجار' => 'إيجار'], 'yes', array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_pets', 'عندكوا مواشي/ طيور؟') !!}
                {!! Form::select('case_assets_pets', ['لا يوجد' => 'لا يوجد', 'طيور' => 'طيور', 'ماعز' => 'ماعز', 'إبل' => 'إبل', 'بقر / جاموس' => 'بقر / جاموس' ], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_vehicle', 'انتوا عندكوا أي وسيلة انتقال؟') !!}
                {!! Form::select('case_assets_vehicle', ['yes' => 'نعم', 'no' => 'لا'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_house_alternative_status', '‏هل لديك بيت اخر؟') !!}
                {!! Form::select('case_assets_house_alternative_status', ['لا' => 'لا', 'تمليك' => 'تمليك', 'ورث' => 'ورث', 'هبة' => 'هبة', 'إيجار' => 'إيجار'], null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2 form_input', 'style' => 'width:100%', 'onchange' => 'if($(this).val()!="لا"){$("#alt_house").show();}else{$("#alt_house").hide();}')) !!}
            </div>
        </div>
    </div>
</div>
