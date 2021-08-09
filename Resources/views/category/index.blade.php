{{-- @lang('fastorder.aggiunte') --}}

@php

$value = session('category');

@endphp


SESSIONE: {{ $value }}

<br>
<br>

{{ Form::open(['act' => 'store']) }}

{{ Form::text('descrizione') }}

{{ Form::submit() }}

{{ Form::close() }}
