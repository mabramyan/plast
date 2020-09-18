@include('crud::fields.inc.wrapper_start')
<label>{!! $field['label'] !!}</label>
<?php $events = App\Models\Gallery::all(); // Or the desired method in the Model… 
?>
<select class="form-control" name="{{ $field['name'] }}">
    @if (!count($events))
    <option value="">-</option>
    @else
    <option value="">-</option>
    @foreach ($events as $key => $event)
    <option value="{{ $event->id }}" @if ( old($field['name'])==$event->id)
        selected
        @endif
        >{{ $event->title }}</option>
    @endforeach
    @endif
</select>
@include('crud::fields.inc.wrapper_end')