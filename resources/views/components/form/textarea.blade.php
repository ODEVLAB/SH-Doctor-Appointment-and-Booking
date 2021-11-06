@props(['name'])
<div class="my-6">
    <x-form.lable name="{{$name}}"/>
    <textarea class="border border-gray-200 p-2 w-full rounded"
              name="{{$name}}"
              id="{{$name}}"
              required>{{ $slot?$slot:old($name) }}</textarea>
    <x-form.error name="{{$name}}"/>
</div>
