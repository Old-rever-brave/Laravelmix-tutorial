@extends('layouts6.default')

@section('content') 

</head>
         <h2></h2>
              <section id="database">
                  <div class="contentWrapper">
                     <div class="flex">
                         <div class="flexcontent">
                           <figure>
                              <img src="img/to01.png" alt="">
                            <figcaption>ＭySQL</figcaption>
                             </figure>
                               <p><b>メリット</b></p>
                               <p>複数のデータベースを1つのサーバ上に作成できる。データの読み取りは、検索された時点で行われる。行(Row)レベルで参照可能なロックをかけて、待ち時間が低減できる。管理や開発の効率化のための多彩なツールを備える。OracleMasterなどのオラクル認定資格がある。</p>
                               <p><b>デメリット</b></p>
　　　　　　　　　  　　         <p>他のRDBMSへの移行に注意が必要、仕組みが違うため。コストが高い。トランザクションが自動的に開始されてしまう。DDL（データ定義言語）やDCL（データ制御言語）の実行後にコミットが自動的に行われる。パスワード等を設定する手間が発生する</p>
                               </div>
                                <div class="flexcontent">
                             <figure>
                        <img src="img/to02.png" alt="">
                              <figcaption>SQlite</figcaption>
                              </figure>
                               <p><b>メリット</b></p>
                               <p>動作が軽い。著作権がない。ファイルが1つだけなので、バックアップや復元が簡単。サーバ側でデータベースを用意する必要がない。設定が容易である</p>
　                             <p><b>デメリット</b></p>
                               <p>パスワードが存在しないため、セキュリティに難がある。複数の同時書き込みができない。書込がダブると書込エラーになる。バージョン２と３でデータベースの互換性がない。<b>総じて、個人の開発にはどうやら向いていそうだ</b></p>
                               <p>例えば一つだけカラムを削除する際、データベースにはdrop文で行うことができるが、sqliteにおいてはそれが可能ではない</p>
                                </div>
                                <div class="flexcontent">
                            <figure>
                             <img src="img/to03.png" alt="">
                               <figcaption>phpmyadmin</figcaption>
                              </figure>
                               <p><b>メリット</b></p>
                               <p>SSHを開く必要がなく設定も不要。mysqlの細かい構文を使わなくても、使用できる。またどのような構文だったのかもとある機能を使えばSQL文を発行できる</p>
                               <p><b>デメリット</b></p>
                              <p>Apachを稼働させていなければならないため、データが溜まると若干動作がおそくなる。Mysqlでのパスワードの設定をさらに細かく設定する必要がある。</p>
                             <p>設定を失敗するとアンインストールさせて最初から設定を行い直す必要がある。</p>
                        </div>
                    </div>
                </div>
              </div>  
          </div>
        </div> 
        <a href="/serverservice">サーバーサービスへ</a>
    </section>   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="/js/slick.min.js"></script>
  <script src="/js/main.js"></script>
  <script src="/js/jquery-3.1.1.min.js"></script>
  <script src="/css/slick/slick.min.js"></script>
  <script src="/js/app.js"></script>
  @endsection

