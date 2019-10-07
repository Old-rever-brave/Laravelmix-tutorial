@extends('layouts3.default')

@section('content')  


    <div class="text-center bg-dark text-light">BOX</div>

 <div class="contentWrapper">
        <canvas id="chart">
        </canvas>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
           <script src="/js4/main.js"></script>
          </div>
            　<h2></h2>
             <p>三大フレームワークの過去と未来</p>
            <p>Laravelは私も使用しているものの、使い勝手は良い</p>
            <p>フロントエンドの実装などは普通のHTMLとCSSで実装できるため、難易度は低い。</p>
            <p>※但し動的セレクトボックスを実装する時は記述が自由になりすぎる</p>
            <p>勢いは最もあるものの、どこかで勢いが止まるかわからない可能性もある</p>
　　　  　  <p>その他は・・・xpressは環境構築程度で実際に触ったことはない。</p>
  　 　　　 <p>javascriptでサーバーサイドまでをという面では勢いもありそうだが・・・今は不明</p>
  　　      <p>Djangoはというと元々pythonが機会学習での使用がメインであったり、どうか・・・</p>
  　　      <p>近年良く聞くが、フロントエンド面に関しての不安がよぎる</p>
          <div class="slideshow">
              <div><img src="/img/gl1.jpg" alt=""></div>
             <div><img src="/img/gl2.jpg" alt=""></div>
             <div><img src="/img/gl3.jpg" alt=""></div>
            <div><img src="/img/gl4.jpg" alt=""></div>
            </div>
          </div>
               <table border ="1" align="center">
                    <tr>
                           <td></td>
                           <th>Rails</th>
                           <th>Laravel</th>
                           <th>Django</th>
                           <th>Express</th>
                    </tr>

                    <tr>
            　　　　　　　 <th>インストール難易度</th>
                           <td>☆☆☆☆</td>
                           <td>☆☆☆</td>
                           <td>☆☆☆☆☆</td>
                           <td>☆</td>
                    </tr>

                     <tr>
            　　　　　　　 <th>migrationでの自動コード生成量</th>
                          <td>☆☆☆☆☆</td>
                          <td>☆☆☆</td>
                          <td>☆☆</td>
                          <td>☆☆</td>
                    </tr>

            　　　　 <tr>
            　　　　　　　 <th>相性の良いデータベースツール</th>
            　　　　　　　　<td>SQLite</td>
              　　　　　　　<td>SQLite</td>
              　　　        <td>SQLite</td>
                           <td>Mysql</td>
                    </tr>

                    <tr>
                   　　　<th>ツールVERSION競合</th>
                   　　　　<td>少ない</td>
                     　　　<td>多い</td>
                     　   <td>多い</td>
                          <td>なし</td>
                   </tr>
            　　　　<tr>
            　　　　　　　 <th>情報の充実度合</th>
                           <td>☆☆☆☆☆</td>
                           <td>☆☆☆</td>
                           <td>☆☆☆</td>
                           <td>☆</td>
                    </tr>

                    <tr>
                    　　 <th>実際のコード記述量</th>
                         <td>☆</td>
                         <td>☆☆</td>
                         <td>☆☆☆</td>
                         <td>☆☆</td>
                    </tr>

            　　　　<tr>
            　　　　　　　 <th>AWSとの相性</th>
                           <td>☆☆☆</td>
                           <td>☆☆</td>
                           <td>？</td>
                           <td>？</td>
                    </tr>
　            </table>
            <p>ここまで記載してきたことは悪魔でも個人的な見解です。</p>
            <p>実際の難易度や将来性等は人の価値観によって異なります。</p>
　　　　　　 <p>また、golangやkotolin等の技術の成長も期待しています。</p>
　　　　　 　<p>若い世代の方々が楽しい世の中を生きていける日々を期待して</p>
      </div>    
</div>

  <a href="/posts/create">コメントへ</a>
 </section>            
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/slick/slick.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js10/jquery-3.1.1.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js10/slick.min.js"></script>
    <script src="/js10/main.js"></script>
    <script src="/js10/app.js"></script>
    @endsection