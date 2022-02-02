@extends('layouts.app')

@section('content')
 
<div class="container">
  @foreach ($articleImages as $image)
      <img id='img{{$image->id}}' class='{{$image->class}}' src='/uploads/{{$image->src}}' alt='{{$image->alt}}' width='{{$image->width}}' height='{{$image->height}}' /> 
  @endforeach
  <div class="row">
    <div class="col-12">
      <a href="{{route('articleimage.create')}}" class="btn btn-primary px-5">
        Add image
      </a>
    </div>
  </div>

</div>

@endsection