<div id="tab_10" class="tab-pane">
    <h4>بيانات خاصة بالممتلكات</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_house_type', 'أنت ساكن في') !!}
                {!! Form::select('case_assets_house_type', ['منزل مستقل' => 'منزل مستقل', 'منزل شرك مع أسرة أخرى' => 'منزل شرك مع أسرة أخرى', 'شقة' => 'شقة'], $case->assets_house_type, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_house_status', 'هل المنزل') !!}
                {!! Form::select('case_assets_house_status', ['تمليك' => 'تمليك', 'ورث' => 'ورث', 'هبة' => 'هبة', 'إيجار' => 'إيجار'], $case->assets_house_status, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%', 'onchange' => 'if($(this).val()=="تمليك"){$("#tamleek").show();}else{$("#tamleek").hide();}')) !!}
            </div>
        </div>
    </div>
    <div id="tamleek" hidden>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('case_assets_house_price', '‏في حالة ما إذا كان المنزل تمليك فما كان سعره') !!}
                    {!! Form::text('case_assets_house_price', $case->assets_house_price, array('class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('case_assets_house_paying_source', '‏وكيف قمتوا بشراءه') !!}
                    {!! Form::text('case_assets_house_paying_source', $case->assets_house_paying_source, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_electric_meter', 'عندكوا عداد كهرباء؟') !!}
                {!! Form::select('case_assets_electric_meter', ['نعم' => 'نعم', 'ممارسة' => 'ممارسة', 'لا' => 'لا'], $case->assets_electric_meter, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%','onchange' => 'if($(this).val()=="لا"){$("#electric_other").show();}else{$("#electric_other").hide();}')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_water_meter', 'عندكوا عداد مياه؟') !!}
                {!! Form::select('case_assets_water_meter', ['نعم' => 'نعم', 'ممارسة' => 'ممارسة', 'لا' => 'لا'], $case->assets_water_meter, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%', 'onchange' => 'if($(this).val()=="لا"){$("#water_meter").show();}else{$("#water_meter").hide();}')) !!}
            </div>
        </div>
    </div>
    <div id="electric_other" hidden>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('case_assets_electric_meter_other', '‏في حالة عدم وجود عداد مياه فكيف تحصلون عليها؟') !!}
                    {!! Form::select('case_assets_electric_meter_other', ['لا يوجد كهرباء' => 'لا يوجد كهرباء' , 'وصلة خلسة (سرقة)' => 'وصلة خلسة (سرقة)'], old('case_assets_electric_meter_other') or null, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
                </div>
            </div>
        </div>
    </div>
    <div id="water_meter" hidden>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('case_assets_water_alternative', '‏في حالة عدم وجود عداد مياه فكيف تحصلون عليها؟') !!}
                    {!! Form::select('case_assets_water_alternative', ['ملىء' => 'ملىء', 'طرمبه' => 'طرمبه', 'وصله من الشارع (كسر ماسوره)' => 'وصله من الشارع (كسر ماسوره)', 'وصله من بيت مجاور' => 'وصله من بيت مجاور'], $case->assets_water_alternative, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_farm', 'عندكوا أرض زراعية؟') !!}
                {!! Form::select('case_assets_farm', ['لا يوجد' => 'لا يوجد', 'تمليك' => 'تمليك', 'ورث' => 'ورث', 'هبة' => 'هبة', 'إيجار' => 'إيجار'], $case->assets_farm, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%')) !!}
            </div>
        </div>
        <div class="col-md-6" >
            <div class="form-group">
                {!! Form::label('case_assets_pets', 'عندكوا مواشي/ طيور؟') !!}
                {!! Form::select('case_assets_pets',  ['لا يوجد' => 'لا يوجد', 'طيور' => 'طيور', 'ماعز' => 'ماعز', 'إبل' => 'إبل', 'بقر / جاموس' => 'بقر / جاموس' ],json_decode($case->assets_pets), [ 'class' => 'form-control select2' ,'multiple'=>'multiple','name'=>'case_assets_pets[]','placeholder'=>'لا شئ' ,'style' => 'width:100%','onchange' => 'if($(this).val()!="لا يوجد"){$("#pets_alternative").show();}else{$("#pets_alternative").hide();}']) !!}
                 
            </div>
        </div>
    </div>
     <div id="pets_alternative" hidden>
        <div class="row">
            <div class="col-md-6" >
                <div class="form-group">
                    {!! Form::label('case_assets_pets_alternative', 'كيف حصلتوا عليهم؟') !!}
                    {!! Form::select('case_assets_pets_alternative',  ['شراء' => 'شراء', 'مساعدة من جمعية/ اهل الخير' => 'مساعدة من جمعية/ اهل الخير', 'شرك' => 'شرك'],old('case_assets_pets_alternative') or null, [ 'class' => 'form-control select2','name'=>'case_assets_pets_alternative','placeholder'=>'لا شئ' ,'style' => 'width:100%']) !!}
                     
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_vehicle', 'انتوا عندكوا أي وسيلة انتقال؟') !!}
                {!! Form::select('case_assets_vehicle', ['لا يوجد'=>'لا يوجد','حمار'=>'حمار','موتوسكل'=>'موتوسكل','تروسكل/ توك توك'=>'تروسكل/ توك توك','جرار'=>'جرار','سيارة'=>'سيارة'],  $case->assets_vehicle, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%','onchange' => 'if($(this).val()!="لا"){$("#vehicle_alternative").show();}else{$("#vehicle_alternative").hide();}')) !!}
            </div>
        </div>
        <div id="vehicle_alternative" hidden>
            <div class="col-md-6" >
                <div class="form-group">
                    {!! Form::label('case_assets_vehicle_alternative', 'كيف حصلتوا عليهم؟') !!}
                    {!! Form::select('case_assets_vehicle_alternative',  ['شراء' => 'شراء', 'مساعدة من جمعية/ اهل الخير' => 'مساعدة من جمعية/ اهل الخير', 'شرك' => 'شرك'],old('case_assets_vehicle_alternative') or null, [ 'class' => 'form-control select2','name'=>'case_assets_vehicle_alternative','placeholder'=>'لا شئ' ,'style' => 'width:100%']) !!}
                     
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_assets_house_alternative_status', '‏هل لديك بيت اخر؟') !!}
                {!! Form::select('case_assets_house_alternative_status', ['لا' => 'لا', 'تمليك' => 'تمليك', 'ورث' => 'ورث', 'هبة' => 'هبة', 'إيجار' => 'إيجار'], $case->assets_house_alternative_status, array('placeholder' => 'لا شيء' , 'class' => 'form-control select2', 'style' => 'width:100%', 'onchange' => 'if($(this).val()!="لا"){$("#alt_house").show();}else{$("#alt_house").hide();}')) !!}
            </div>
        </div>
    </div>
    <div id="alt_house" hidden>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('case_assets_house_alternative_resident', '‏ في حالة وجود بيت اخر فمن الذي يسكن به؟') !!}
                    {!! Form::text('case_assets_house_alternative_resident', $case->assets_house_alternative_resident, array('class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('case_assets_house_alternative_leave', '‏ولماذا لا تسكنون به؟') !!}
                    {!! Form::text('case_assets_house_alternative_leave', $case->assets_house_alternative_leave, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
    </div>
</div>
