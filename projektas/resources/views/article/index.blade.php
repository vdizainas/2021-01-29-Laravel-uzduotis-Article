@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <h1>Articles</h1>
          <table class="table table-striped">
            <tr>
              <th>Title</th>
              <th>Excerpt</th>
              <th>Description</th>
              <th>Author</th>
              <th>img</th>
              <th>Category</th>
            </tr>
            @foreach ($articles as $article)
              <tr>              
                  <td>{{$article->title}}</td>
                  <td>{{$article->excerpt}}</td>
                  <td>{{$article->description}}</td>
                  <td>{{$article->author}}</td>                  
                  {{-- <td><img src="/uploads/{{$article->articleArticleImage->src}}" width="100"/></td>                   --}}
                  {{-- <td>{{$article->articleArticleCategory->title}}</td>                   --}}
              </tr>          
            @endforeach
          </table>
          <div class="row mb-0">
            <div class="col-md-12 mt-3 text-end">
                <a href="{{route('article.create')}}" class="btn btn-primary px-5">
                    Add article
                </a>
            </div>
        </div>
      </div>
  </div>
</div>
@endsection







