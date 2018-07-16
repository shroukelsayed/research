<div id="tab_15" class="tab-pane">
    <h4>ملحوظات أضافية</h4>
    {{-- case_user_notes       text --}}
    <div class="form-group">
        {!! Form::label('case_additional_notes', 'ملحوظات أضافية') !!}
        {!! Form::textarea('case_additional_notes', old('case_additional_notes') or null, array('class' => 'form-control')) !!}
    </div>
</div>
