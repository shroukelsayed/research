<div id="tab_7" class="tab-pane">
    <h4>المساعدات</h4>
    <!-- <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_support_count', 'عدد المساعدات') !!}<br>
                {!! Form::select('case_support_count', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'],
                old('case_support_count') or null, array('placeholder' => 'لا شيء','id' => 'all', 'class' => 'form-control case_support_count', 'style' => 'width:100%', 'onchange' => 'drawHelp()')) !!}
            </div>
        </div>
    </div> 
 -->
    <div id="supports">
        <div class="support">
            <h5>مصدر مساعده</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('support_source_category[]', 'القائم بالمساعده') !!}
                        {!! Form::select('support_source_category[]', ['جمعية-خيرية' => 'جمعية خيرية',
                         'أهل-الخير' => 'أهل الخير',
                         'الأهل-الأقارب' => 'الأهل أو الأقارب',
                         'other' => 'أخرى',
                         ], old('support_source_category[]') or null, array('placeholder' => 'لا شيء' ,'class' => 'form-control support_source_category', 'style' => 'width:100%','onchange' => 'drawOther(1,0,$(this).val())')) !!}
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div id="other_one" name="other_one[0]" hidden>
                        <div class="form-group">
                            {!! Form::label('support_source_category_other[]', 'أخرى') !!}
                            {!! Form::text('support_source_category_other[]', old('support_source_category_other[]') or null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('support_source_name[]', 'اسم المصدر') !!}
                        {!! Form::select('support_source_name[]', ['لا-أعلم' => 'جمعية خيرية',
                         'مصر-الخير' => 'مصر الخير',
                         'رساله' => 'رساله',
                         'بنك-الطعام' => 'بنك الطعام',
                         'الأورمان' => 'الأورمان',
                         'عمار-الأرض' => 'عمار الأرض',
                         'other' => 'أخرى',
                         ], old('support_source_name[]') or null, array('placeholder' => 'لا شيء', 'class' => 'form-control support_source_name', 'style' => 'width:100%','onchange' => 'drawOther(2,0,$(this).val())')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="other_two" name="other_two[0]" hidden>
                        <div class="form-group">
                            {!! Form::label('support_source_name_other[]', 'أخرى') !!}
                            {!! Form::text('support_source_name_other[]', old('support_source_name_other[]') or null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('support_type[]', 'نوع المساعده') !!}
                        {!! Form::select('support_type[]', [
                         'غذاء' => 'غذاء',
                         'بطاطين' => 'بطاطين',
                         'بناء سقف' => 'بناء سقف',
                         'توصيل مياه' => 'توصيل مياه',
                         'أثاث للمنزل' => 'أثاث للمنزل',
                         'other' => 'أخرى',
                         ], old('support_type[]') or null, array('placeholder' => 'لا شيء', 'class' => 'form-control support_type', 'style' => 'width:100%','onchange' => 'drawOther(3,0,$(this).val())')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="other_three" name="other_three[0]" hidden>
                        <div class="form-group">
                            {!! Form::label('support_type_other[]', 'أخرى') !!}
                            {!! Form::text('support_type_other[]', old('support_type_other[]') or null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('support_period[]', 'تكرار المساعدة') !!}
                        {!! Form::select('support_period[]', [
                         'مره' => 'مره واحده',
                         'موسمية' => 'موسمية',
                         'شهرية' => 'شهرية',
                         'لا أعلم' => 'لا أعلم',
                         'other' => 'أخرى',
                         ], old('support_period[]') or null, array('placeholder' => 'لا شيء', 'class' => 'form-control support_period', 'style' => 'width:100%', 'onchange' =>'drawOther(4,0,$(this).val())' )) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="other_four" name="other_four[0]" hidden>
                        <div class="form-group">
                            {!! Form::label('support_period_other[]', 'أخرى') !!}
                            {!! Form::text('support_period_other[]', old('support_period_other[]') or null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="inc4">
                        <div class="form-group">
                            {!! Form::label('inc4', 'حذف مساعدة') !!}<br>
                            <a href="#" class="btn btn-primary remove" hidden>-</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div id="inc3">
                <div class="form-group">
                    {!! Form::label('inc3', 'أضف مساعدة') !!}<br>
                    <a href="#" class="btn btn-primary" onclick="drawHelp()">+</a>
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
    
    function drawHelp() {
        var cloneIndex = $(".support").length;
        var count = cloneIndex+1;
        var i = 1;
        if(count != null && count > 0){
            $(".support").slice(1).remove();$("#supports").show();
            var max=count-1;
            while(max--){
                $(".support").first().clone(true).insertAfter('.support:last').find('.support_type').attr('onchange','drawOther(3,'+i+',$(this).val())');
                $('.support:last').find('.support_period').attr('onchange','drawOther(4,'+i+',$(this).val())');
                $('.support:last').find('.support_source_category').attr('onchange','drawOther(1,'+i+',$(this).val())');
                $('.support:last').find('.support_source_name').attr('onchange','drawOther(2,'+i+',$(this).val())');

                $('.support').find('#other_one').last().attr('id','other_one_'+i).attr('name','other_one['+i+']').end();
                $(".support").find('#other_two').last().attr('id','other_two_'+i).attr('name','other_two['+i+']').end();
                $(".support").find('#other_three').last().attr('id','other_three_'+i).attr('name','other_three['+i+']').end();
                $(".support").find('#other_four').last().attr('id','other_four_'+i).attr('name','other_four['+i+']').end();
                i++;
            }

            $('.support').last().find('.remove').show();
            $('.support').last().find('.remove').attr('onclick','deleteSupport('+cloneIndex+',$(this))');


        }else{
            $(".support").slice(1).remove();
            $("#supports").hide();
        }
    }

    function drawOther(number,index,val) {
        // var cloneIndex = $(".support_source_category").data('index');
        if(number == 1){
            if(index == 0){
                    // console.log("one");

                if(val == "أخرى"){
                    // console.log("one other");
                    $("#other_one").show();
                }else{
                    $('#other_one').hide();
                }
            }else{
                if(val == "أخرى"){
                    $('#other_one_'+index).show();
                }else{
                    $('#other_one_'+index).hide();
                }
            }
        }else if(number == 2){
            if(index == 0){
                if(val == "أخرى"){
                    $("#other_two").show();
                }else{
                    $('#other_two').hide();
                }
            }else{
                if(val == "أخرى"){
                    $('#other_two_'+index).show();
                }else{
                    $('#other_two_'+index).hide();
                }
            }
        }else if(number == 3){
            if(index == 0){
                if(val == "أخرى"){
                    $("#other_three").show();
                }else{
                    $('#other_three').hide();
                }
            }else{
                if(val == "أخرى"){
                    $('#other_three_'+index).show();
                }else{
                    $('#other_three_'+index).hide();
                }
            }
        }else if(number == 4){
            if(index == 0){
                if(val == "أخرى"){
                    $("#other_four").show();
                }else{
                    $('#other_four').hide();
                }
            }else{
                if(val == "أخرى"){
                    $('#other_four_'+index).show();
                }else{
                    $('#other_four_'+index).hide();
                }
            }
        }
    }

    function deleteSupport(i,div){
        // console.log(i);
        div.closest(".support").remove();
    }

</script>