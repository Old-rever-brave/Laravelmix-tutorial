@extends('layouts.default')

@section('content')

<div style="height: 50px;background: lightblue;"></div>
        <div class="foundation-example__ex-wrapper">
            <div class="foundation-example__in-wrapper">
    <h1></h1>
   <img src= "/img/Macbook.jpg" alt="">
   <p>ご拝読いただきありがとうございました。</p>
   <p>下記お答えいただけますと幸いです☆</p>
   <p>お題は実はやってみたい分野についてです。</p>
   <p>下記プルダウンメニューから選択して、ボタンをクリックしてください</p>
  <table>
   <form method="post" action="{{ url('/posts') }}">

   {{ csrf_field() }}
   
   <tr><th>やってみたい分野</th><td>{{Form::select('category', [ 'インフラ' => 'インフラ', '上流工程' => '上流工程', 'サーバーサイド' =>'サーバーサイド', 'フロントエンド' =>'フロントエンド'])}}</td></tr>
   <tr><th>バックエンド技術</th><td>{{Form::select('fulstack', ['Play framework' => 'Play framework', 'Laravel' => 'Laravel', 'Django' =>'Django', 'Express js' =>'Express js', 'RubyonRails' =>'RubyonRails','Sym fony'=>'Sym fony', 'Cake PHP'=>'Cake PHP', 'Angular'=>'Angular'])}}</td></tr>
   <tr><th>フロントエンド技術</th><td>{{Form::select('frontend', ['React js' => 'React js', 'Vue.js' => 'Vue.js', 'Angular' =>'Angular','Ember js' =>'Ember js','boot strap' =>'boot strap'])}}</td></tr>
   <tr><th>使用したいデータベース</th><td>{{Form::select('sqls', ['mysql' => 'mysql', 'sqlite' => 'sqlite', 'firebase' => 'firebase'])}}</td></tr>
   <tr><th>使用したい言語</th><td>{{Form::select('gengo', ['Java' => 'Java', 'php' => 'php', 'C' =>'C', 'C++' =>'C++','C#' =>'C#','Ruby' =>'Ruby','Java script' =>'Java script','Python' =>'Python', 'Type cript' =>'Type cript', 'VBA' =>'VBA', 'VB' =>'VB', 'Scala' =>'Scala', 'Kotolin' =>'Kotolin','Swift' =>'Swift'])}}</td></tr>
   <tr><th>使用したいサービス</th><td>{{Form::select('serveres', ['SAKURA' => 'SAKURA', 'CONOHA' => 'CONOHA', 'AZURE' =>'AZURE', 'AWS' =>'AWS','GCP' =>'GCP'])}}</td></tr>
   <tr><th>使用したいOS</th><td>{{Form::select('os', ['WINDOWS' => 'WINDOWS', 'MACBOOK' => 'MACBOOK', 'Ubuntu' =>'Ubuntu', 'Centos7' =>'Centos7','Soralis' =>'Soralis','Linuxmint' =>'Linuxmint'])}}</td></tr>
     <input type="submit" value="押して下さい！！">
  </form>
 </table>
 <p><a href="/">戻る</a></p>
 @endsection
