@extends('layouts.default')

@section('content')

  <h1></h1>

  <img src= "/img/Macbook.jpg" alt="">
  <p>ご拝読いただきありがとうございました。</p>  
  <p>上記タブ、TOPへ戻るよりトップページへ戻れます。</p>
  <p><a href="/posts/create">コメントへ</a></p>   
        <table border ="1" align ="center">       
  <tr>
    <th>NO</th><th>techcategory</th><th>serversidelang</th><th>frontendlang</th><th>databaselang</th><th>programing</th><th>techservice</th><th>operatingsystem</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
    <td>{{ $post->id}}</td>
    <td>{{ $post->category }}</td>
    <td>{{ $post->fulstack }}</td>
    <td>{{ $post->frontend }}</td>
    <td>{{ $post->sqls }}</td>
    <td>{{ $post->gengo }}</td>
    <td>{{ $post->serveres }}</td>
    <td>{{ $post->os }}</td>
    </tr>
     <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
    {{ csrf_field() }}
   {{ method_field('delete') }}
   </form>
    <script src="/js/main.js"></script>
    @endforeach
   </table>
  {{ $posts->links() }}
@endsection
