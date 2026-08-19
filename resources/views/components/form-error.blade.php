@props(['name'])

@error($name)
    <p {{$attributes->merge(['class' => 'test-xs text-red-500 font-semibold'])}}> {{$message}} </p>
@enderror
