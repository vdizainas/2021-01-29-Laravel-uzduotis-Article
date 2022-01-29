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
            </tr>
            @foreach ($articles as $article)
              <tr>              
                  <td>{{$article->title}}</td>
                  <td>{{$article->excerpt}}</td>
                  <td>{{$article->description}}</td>
                  <td>{{$article->author}}</td>                  
                  <td><img src="/uploads/{{$article->articleArticleImage->src}}" width="100"/></td>                  
              </tr>          
            @endforeach
          </table>
      </div>
  </div>
</div>
@endsection







