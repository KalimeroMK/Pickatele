@foreach($scripts as $script)
<!-- {{$script->name}} start-->
{!! $script->code !!}
<!-- {{$script->name}} end-->
@endforeach