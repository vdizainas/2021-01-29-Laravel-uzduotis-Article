@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header"><strong>Add article image</strong></div>

              <div class="card-body">
                  <form method="POST" action="{{ route('articleimage.store') }}" enctype="multipart/form-data">
                      @csrf

                      <div class="row mb-3">
                          <div class="col-md-6">
                            <label for="img_alt" class="col-md-4 col-form-label">Image Alt</label>
                            <input id="img_alt" type="text" class="form-control" name="img_alt" value="" required autofocus>      
                          </div>
                          <div class="col-md-6">
                            <label for="img_src" class="col-md-4 col-form-label">Image</label>
                            <input id="img_src" type="file" class="form-control" name="img_src" value="" autofocus>      
                          </div>
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-4">
                            <label for="img_width" class="col-md-4 col-form-label">Image width</label>
                            <input id="img_width" type="number" min="0" max="200" step="10" class="form-control" name="img_width" value="" required autofocus>      
                          </div>
                          <div class="col-md-4">
                            <label for="img_height" class="col-md-4 col-form-label">Image height</label>
                            <input id="img_height" type="number" min="0" max="200" step="10" class="form-control" name="img_height" value="" required autofocus>      
                          </div>
                          <div class="col-md-4">
                            <label for="img_class" class="col-md-4 col-form-label">Image class</label>
                            <input id="img_class" type="text" class="form-control" name="img_class" value="" required autofocus>      
                          </div>
                      </div>
                      <div class="row mb-0">
                          <div class="col-md-12 mt-3 text-end">
                              <button type="submit" class="btn btn-primary px-5">
                                  Add image
                              </button>
                          </div>
                      </div>
                  </form> 
              </div>
          </div>
      </div>
  </div>
</div>
@endsection




