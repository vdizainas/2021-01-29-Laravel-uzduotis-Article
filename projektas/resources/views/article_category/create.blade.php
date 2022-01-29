@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header"><strong>Add article</strong></div>

              <div class="card-body">
                  <form method="POST" action="{{ route('articlecategory.store') }}" enctype="multipart/form-data">
                      @csrf

                      <div class="row mb-3">
                          <div class="col-12">
                            <label for="articleCategory_title" class="col-md-4 col-form-label">Title</label>
                            <input id="articleCategory_title" type="text" class="form-control" name="articleCategory_title" value="" required autofocus>      
                          </div>
                          <div class="col-12">
                            <label for="articleCategory_description" class="col-md-4 col-form-label">Description</label>
                            <textarea id="articleCategory_description" class="form-control" name="articleCategory_description" value="1" required autofocus></textarea>      
                          </div>                        
                      </div>
                
                      <div class="row mb-0">
                          <div class="col-md-12 mt-3 text-end">
                              <button type="submit" class="btn btn-primary px-5">
                                  Add article
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




