@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <h1>Articles categories</h1>
          <table class="table table-striped">
            <tr>
              <th>Title</th>
              <th>Description</th>
            </tr>
            @foreach ($article_categories as $article_category)
              <tr>              
                  <td>{{$article_category->title}}</td>
                  <td>{{$article_category->description}}</td>
                  <td>{{$article_category->articleCategoryArticles->title}}</td>        
              </tr>          
            @endforeach
          </table>
          <a href="{{route('articlecategory.create')}}" class="btn btn-primary px-5">
            Add article category
          </a>
      </div>
  </div>
</div>
@endsection







