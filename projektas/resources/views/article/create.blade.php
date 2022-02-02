@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header"><strong>Add article</strong></div>

              <div class="card-body">
                  <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
                      @csrf

                      <div class="row mb-3">
                          <div class="col-12">
                            <label for="article_title" class="col-md-4 col-form-label">Title</label>
                            <input id="article_title" type="text" class="form-control" name="article_title" value="" required autofocus>      
                          </div>
                          <div class="col-12">
                            <label for="article_excerpt" class="col-md-4 col-form-label">Excerpt</label>
                            <textarea id="article_excerpt" class="form-control" name="article_excerpt" value="1" required autofocus></textarea>      
                          </div>
                          <div class="col-12">
                            <label for="article_description" class="col-md-4 col-form-label">Description</label>
                            <textarea id="article_description" type="text" class="form-control" name="article_description" value="" autofocus></textarea>      
                          </div>
                          <div class="col-12">
                            <label for="article_author" class="col-md-4 col-form-label">Author</label>
                            <input id="article_author" type="text" class="form-control" name="article_author" value="" required autofocus>      
                          </div>      
                            {{-- <input id="image_id" type="text" class="form-control" name="image_id" value="1">                 --}}
                          {{-- <div class="col-12">
                            <label for="article_id" class="col-md-4 col-form-label">temp</label>
                            <input id="article_id" type="text" class="form-control" name="article_id" value="1" required autofocus>      
                          </div> --}}
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




