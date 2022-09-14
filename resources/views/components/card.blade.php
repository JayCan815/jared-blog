
{{-- This blade template controls the card background behind each listing. --}}

<div {{$attributes->merge(['class' => "bg-gray-50 border border-gray-200 rounded p-10"])}} >
{{$slot}}
</div>