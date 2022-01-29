@extends('layouts.app')

@section('content')
 
<div class="container">
  @foreach ($articleImages as $image)
      <img id='img{{$image->id}}' class='{{$image->class}}' src='/uploads/{{$image->src}}' alt='{{$image->alt}}' width='{{$image->width}}' height='{{$image->height}}' /> 
  @endforeach

</div>

@endsection