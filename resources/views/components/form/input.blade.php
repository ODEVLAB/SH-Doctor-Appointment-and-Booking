@props(['name','type'=>'text'])
<div class="my-6">
    <x-form.lable name="{{$name}}"/>

    <input class="border border-gray-200 p-2 w-full rounded"
           type="{{$type}}"
           name="{{$name}}"
           id="{{$name}}"
        {{ $attributes( ['value'=>old($name) ] ) }}>

    <x-form.error name="{{$name}}"/>

</div>
