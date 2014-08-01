@extends('layouts.default')

@section('content')
<form method="post" action="/nodes/search" class="form col-md-12 center-block">
    {{ Form::token() }}
    <div class="form-group">
        <input type="text" placeholder="Search for a word " name="word" id="thesaurus" 
               class="form-control input-lg" /> 
    </div>
</form>
@stop
