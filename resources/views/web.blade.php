{{--{{$data['name']}}

@if($data['name']=='vishal')
    {{'fine'}}
@else
    {{'no'}}
@endif--}}

@for($i=0;$i<5;$i++)
    {{$i}}
@endfor

@foreach($data as $datum)
    {{$datum}}
    @endforeach

