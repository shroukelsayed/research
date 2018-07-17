<div id="tab_7" class="tab-pane">
    <h4>المساعدات</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('case_support_count', 'عدد المساعدات') !!}
                {!! Form::select('case_support_count', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], $case->support_count, array('placeholder' => 'لا شيء', 'class' => 'form-control case_support_count', 'style' => 'width:100%', 'onchange' => 'drawHelp()')) !!}
            </div>
        </div>
    </div>
    @if(sizeof($case->support) >0)
    @foreach($case->support as $key => $case->support)
    <?php 
        $other1 = 'drawOther(1,'.$key.',$(this).val())';
        $other2 = 'drawOther(2,'.$key.',$(this).val())';
        $other3 = 'drawOther(3,'.$key.',$(this).val())';
        $other4 = 'drawOther(4,'.$key.',$(this).val())';
    // var_dump($key);
    ?>
    <div id="supports_old" >
        <div class="support_old">
            <h5>مصدر مساعده</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('support_source_category[]', 'القائم بالمساعده') !!}
                        {!! Form::select('support_source_category[]', ['جمعية خيرية' => 'جمعية خيرية',
                         'أهل الخير' => 'أهل الخير',
                         'الأهل أو الأقارب' => 'الأهل أو الأقارب',
                         'أخرى' => 'أخرى',
                         ], (in_array($case->support->source_category,['جمعية خيرية' ,'أهل الخير', 'الأهل أو الأقارب','أخرى']))? $case->support->source_category : "أخرى" , array( 'class' => 'form-control support_source_category', 'style' => 'width:100%', 'onchange' => $other1)) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="other_one_{{$key}}" name="other_one[{{$key}}]" hidden>
                        <div class="form-group">
                            {!! Form::label('support_source_category_other[]', 'أخرى') !!}
                            {!! Form::text('support_source_category_other[]',in_array($case->support->source_category,['جمعية خيرية' ,'أهل الخير', 'الأهل أو الأقارب'])? '' : $case->support->source_category , array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('support_source_name[]', 'اسم المصدر') !!}
                        {!! Form::select('support_source_name[]', ['لا أعلم' => 'جمعية خيرية',
                         'مصر الخير' => 'مصر الخير',
                         'رساله' => 'رساله',
                         'بنك الطعام' => 'بنك الطعام',
                         'الأورمان' => 'الأورمان',
                         'عمار الأرض' => 'عمار الأرض',
                         'أخرى' => 'أخرى',
                         ], (in_array($case->support->source_name,['لا أعلم','مصر الخير' ,'رساله','بنك الطعام','الأورمان' ,'عمار الأرض','أخرى'])?$case->support->source_name : 'أخرى'), array( 'class' => 'form-control support_source_name', 'style' => 'width:100%', 'onchange' => $other2)) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="other_two_{{$key}}" name="other_two[0]" hidden>
                        <div class="form-group">
                            {!! Form::label('support_source_name_other[]', 'أخرى') !!}
                            {!! Form::text('support_source_name_other[]', in_array($case->support->source_name,['لا أعلم','مصر الخير' ,'رساله','بنك الطعام','الأورمان' ,'عمار الأرض'])? '' : $case->support->source_name, array('class' => 'form-control')) !!}
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
                         'أخرى' => 'أخرى',
                         ], (in_array($case->support->type,['غذاء' ,'بطاطين' ,'بناء سقف' ,'توصيل مياه','أثاث للمنزل' ,'أخرى'])?$case->support->type:'أخرى'), array( 'class' => 'form-control support_type', 'style' => 'width:100%', 'onchange' => $other3)) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="other_three_{{$key}}" name="other_three[0]" hidden>
                        <div class="form-group">
                            {!! Form::label('support_type_other[]', 'أخرى') !!}
                            {!! Form::text('support_type_other[]', in_array($case->support->type,['غذاء' ,'بطاطين' ,'بناء سقف' ,'توصيل مياه','أثاث للمنزل'])? '' : $case->support->type, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('support_period[]', 'تكرار المساعدة') !!}
                        {!! Form::select('support_period[]', [
                         'مره واحده' => 'مره واحده',
                         'موسمية' => 'موسمية',
                         'شهرية' => 'شهرية',
                         'لا أعلم' => 'لا أعلم',
                         'أخرى' => 'أخرى',
                         ], (in_array($case->support->period,['موسمية' ,'شهرية' ,'لا أعلم','أخرى'])?$case->support->period:'أخرى'), array( 'class' => 'form-control support_period', 'style' => 'width:100%', 'onchange' => $other4)) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="other_four_{{$key}}" name="other_four[0]" hidden>
                        <div class="form-group">
                            {!! Form::label('support_period_other[]', 'أخرى') !!}
                            {!! Form::text('support_period_other[]', in_array($case->support->period,['موسمية' ,'شهرية' ,'لا أعلم'])? '' : $case->support->period , array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    @endforeach
     <div id="supports" hidden>
        <div class="support">
            <h5>مصدر مساعده</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('support_source_category[]', 'القائم بالمساعده') !!}
                        {!! Form::select('support_source_category[]', ['جمعية خيرية' => 'جمعية خيرية',
                         'أهل الخير' => 'أهل الخير',
                         'الأهل أو الأقارب' => 'الأهل أو الأقارب',
                         'أخرى' => 'أخرى',
                         ],null, array('placeholder' => 'لا شيء', 'class' => 'form-control support_source_category', 'style' => 'width:100%', 'onchange' => 'drawOther(1,0,$(this).val())')) !!}
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div id="other_one_0" name="other_one[0]" hidden>
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
                        {!! Form::select('support_source_name[]', ['لا أعلم' => 'جمعية خيرية',
                         'مصر الخير' => 'مصر الخير',
                         'رساله' => 'رساله',
                         'بنك الطعام' => 'بنك الطعام',
                         'الأورمان' => 'الأورمان',
                         'عمار الأرض' => 'عمار الأرض',
                         'أخرى' => 'أخرى',
                         ],  null, array('placeholder' => 'لا شيء', 'class' => 'form-control support_source_name', 'style' => 'width:100%', 'onchange' => 'drawOther(2,0,$(this).val())')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="other_two_0" name="other_two[0]" hidden>
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
                         'أخرى' => 'أخرى',
                         ], null, array('placeholder' => 'لا شيء', 'class' => 'form-control support_type', 'style' => 'width:100%', 'onchange' => 'drawOther(3,0,$(this).val())')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="other_three_0" name="other_three[0]" hidden>
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
                         'مره واحده' => 'مره واحده',
                         'موسمية' => 'موسمية',
                         'شهرية' => 'شهرية',
                         'لا أعلم' => 'لا أعلم',
                         'أخرى' => 'أخرى',
                         ],  null, array('placeholder' => 'لا شيء', 'class' => 'form-control support_period', 'style' => 'width:100%', 'onchange' => 'drawOther(4,0,$(this).val())')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="other_four_0" name="other_four[0]" hidden>
                        <div class="form-group">
                            {!! Form::label('support_period_other[]', 'أخرى') !!}
                            {!! Form::text('support_period_other[]', old('support_period_other[]') or null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    @else
    <div id="supports" hidden>
        <div class="support">
            <h5>مصدر مساعده</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('support_source_category[]', 'القائم بالمساعده') !!}
                        {!! Form::select('support_source_category[]', ['جمعية خيرية' => 'جمعية خيرية',
                         'أهل الخير' => 'أهل الخير',
                         'الأهل أو الأقارب' => 'الأهل أو الأقارب',
                         'أخرى' => 'أخرى',
                         ],null, array('placeholder' => 'لا شيء', 'class' => 'form-control support_source_category', 'style' => 'width:100%', 'onchange' => 'drawOther(1,0,$(this).val())')) !!}
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div id="other_one_0" name="other_one[0]" hidden>
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
                        {!! Form::select('support_source_name[]', ['لا أعلم' => 'جمعية خيرية',
                         'مصر الخير' => 'مصر الخير',
                         'رساله' => 'رساله',
                         'بنك الطعام' => 'بنك الطعام',
                         'الأورمان' => 'الأورمان',
                         'عمار الأرض' => 'عمار الأرض',
                         'أخرى' => 'أخرى',
                         ],  null, array('placeholder' => 'لا شيء', 'class' => 'form-control support_source_name', 'style' => 'width:100%', 'onchange' => 'drawOther(2,0,$(this).val())')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="other_two_0" name="other_two[0]" hidden>
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
                         'أخرى' => 'أخرى',
                         ], null, array('placeholder' => 'لا شيء', 'class' => 'form-control support_type', 'style' => 'width:100%', 'onchange' => 'drawOther(3,0,$(this).val())')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="other_three_0" name="other_three[0]" hidden>
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
                         'مره واحده' => 'مره واحده',
                         'موسمية' => 'موسمية',
                         'شهرية' => 'شهرية',
                         'لا أعلم' => 'لا أعلم',
                         'أخرى' => 'أخرى',
                         ],  null, array('placeholder' => 'لا شيء', 'class' => 'form-control support_period', 'style' => 'width:100%', 'onchange' => 'drawOther(4,0,$(this).val())')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="other_four_0" name="other_four[0]" hidden>
                        <div class="form-group">
                            {!! Form::label('support_period_other[]', 'أخرى') !!}
                            {!! Form::text('support_period_other[]', old('support_period_other[]') or null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    @endif


</div>

<script type="text/javascript">
    
    function drawHelp() {
        var count = $('.case_support_count').val();
        var count_old = $('.support_old').length;

        // console.log(count_old);
        if(count_old > 0)
            var i = count_old;
        else
            var i = 1;

        if(count != null && count > 0){
            $(".support").slice(1).remove();
            $("#supports").show();

            var max=count-count_old-1;
            // console.log(count_old);
            // console.log(i);
            // console.log(max);

            if(max == 0 && count_old > 0){
                $('.support:last').find('.support_type').attr('onchange','drawOther(3,'+i+',$(this).val())');
                $('.support:last').find('.support_period').attr('onchange','drawOther(4,'+i+',$(this).val())');
                $('.support:last').find('.support_source_category').attr('onchange','drawOther(1,'+i+',$(this).val())');
                $('.support:last').find('.support_source_name').attr('onchange','drawOther(2,'+i+',$(this).val())');

                $('.support').find('#other_one_0').last().attr('id','other_one_'+i).attr('name','other_one['+i+']').end();
                $(".support").find('#other_two_0').last().attr('id','other_two_'+i).attr('name','other_two['+i+']').end();
                $(".support").find('#other_three_0').last().attr('id','other_three_'+i).attr('name','other_three['+i+']').end();
                $(".support").find('#other_four_0').last().attr('id','other_four_'+i).attr('name','other_four['+i+']').end();
                i++;
            }

            while(max--){
                // console.log(max);
                if(max == 0 && count_old > 0){
                    $('.support:last').find('.support_type').attr('onchange','drawOther(3,'+i+',$(this).val())');
                    $('.support:last').find('.support_period').attr('onchange','drawOther(4,'+i+',$(this).val())');
                    $('.support:last').find('.support_source_category').attr('onchange','drawOther(1,'+i+',$(this).val())');
                    $('.support:last').find('.support_source_name').attr('onchange','drawOther(2,'+i+',$(this).val())');

                    $('.support').find('#other_one_0').last().attr('id','other_one_'+i).attr('name','other_one['+i+']').end();
                    $(".support").find('#other_two_0').last().attr('id','other_two_'+i).attr('name','other_two['+i+']').end();
                    $(".support").find('#other_three_0').last().attr('id','other_three_'+i).attr('name','other_three['+i+']').end();
                    $(".support").find('#other_four_0').last().attr('id','other_four_'+i).attr('name','other_four['+i+']').end();
                    i++;
                }
                $(".support").first().clone(true).insertAfter('.support:last').find('.support_type').attr('onchange','drawOther(3,'+i+',$(this).val())');

                $('.support:last').find('.support_period').attr('onchange','drawOther(4,'+i+',$(this).val())');
                $('.support:last').find('.support_source_category').attr('onchange','drawOther(1,'+i+',$(this).val())');
                $('.support:last').find('.support_source_name').attr('onchange','drawOther(2,'+i+',$(this).val())');

                $('.support').find('#other_one_0').last().attr('id','other_one_'+i).attr('name','other_one['+i+']').end();
                $(".support").find('#other_two_0').last().attr('id','other_two_'+i).attr('name','other_two['+i+']').end();
                $(".support").find('#other_three_0').last().attr('id','other_three_'+i).attr('name','other_three['+i+']').end();
                $(".support").find('#other_four_0').last().attr('id','other_four_'+i).attr('name','other_four['+i+']').end();
                i++;
            }
        }else{
            $(".support").slice(1).remove();
            $("#supports").hide();
        }
    }

    function drawOther(number,index,val) {

        if(number == 1){
            if(val == "أخرى"){
                $('#other_one_'+index).show();
            }else{
                $('#other_one_'+index).hide();
            }
        }else if(number == 2){
            if(val == "أخرى"){
                $('#other_two_'+index).show();
            }else{
                $('#other_two_'+index).hide();
            }
        }else if(number == 3){
            if(val == "أخرى"){
                $('#other_three_'+index).show();
            }else{
                $('#other_three_'+index).hide();
            }
        }else if(number == 4){
            if(val == "أخرى"){
                $('#other_four_'+index).show();
            }else{
                $('#other_four_'+index).hide();
            } 
        }
    }

    $(document).ready(function(){

        var c = $('.case_support_count').val();
        // console.log(c);
        for (var x = 0; x < c ; x++) {
            console.log($('#other_two_'+x).find('input:text').val());
            if($('#other_one_'+x).find('input:text').val() !== null && $('#other_one_'+x).find('input:text').val() !== '')
                $('#other_one_'+x).show();
            else 
                $('#other_one_'+x).hide();

            if($('#other_two_'+x).find('input:text').val() !== null && $('#other_one_'+x).find('input:text').val() !== '')
                $('#other_two_'+x).show();
            else 
                $('#other_two_'+x).hide();

            if($('#other_three_'+x).find('input:text').val() !== null && $('#other_one_'+x).find('input:text').val() !== '')
                $('#other_three_'+x).show();
            else 
                $('#other_three_'+x).hide();

            if($('#other_four_'+x).find('input:text').val() !== null && $('#other_one_'+x).find('input:text').val() !== '')
                $('#other_four_'+x).show();
            else 
                $('#other_four_'+x).hide();
        }
    });

</script>