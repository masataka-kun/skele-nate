<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SukeleNate</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 50px;
        }

        /* 追加 */
        button {
            margin-top: 50px;
            font-size: 1.4em;
            font-weight: bold;
            padding: 10px 30px;
            background-color: #248;
            color: #fff;
            border-style: none;
            box-shadow: 2px 2px 3px 1px #666;
            -moz-box-shadow: 2px 2px 3px 1px #666;
            -webkit-box-shadow: 2px 2px 3px 1px #666;
        }

        button:hover {
            background-color: #24d;
            color: #fff;
        }

        .straight_box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .straight_image {
            display: flex;
        }

        .img_file {
            width: 346px;
            height: 553px;
            margin-right: 30px;
        }

        .wave_box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 50px;
        }

        .wave_image {
            display: flex;
        }

        .natural_box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 50px;
        }

        .natural_image {
            display: flex;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Skele-Nate
            </div>

            <div class="sub_titele">
                <h1>骨格診断について</h1>
                <p>気に入って買ったはずなのに自分の服装を見て、「なんだか似合っていない」「なんとなくだらしなく見える」と思った経験は誰しもあるはず。<br>
                    その理由は、柄や色などのデザインはさておいて、自分の骨格と合っていないからです。<br>
                    骨格にあったスタイルを取り入れることで今後買い物のときの失敗も格段に減るはずです。マネキン買いも失敗が減るのでは・・・<br>
                    大きくナチュラル・ウェーブ・ストレートと3つの骨格タイプに分類されます。分からない方は「チェック」をクッリクして確認してみて下さい。<br>
                    骨格タイプの分かる方はそれぞれのタイプのコーディネートを参考に
                </p>
                <!-- index.htmlへ遷移 -->
                <button onclick="location.href='/check'">チェック</button>
            </div>

            <!-- <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div> -->
        </div>
    </div>

    <div class="straight_box">
        <h1 class="straight_title">ストレート型</h1>
        <h2 class="straight_desc">
            体に厚みがあるので、主張を抑えるシンプルで上品なアイテムが似合う。<br>
            薄手の生地や重ね着をすると、着太りしているように見えるので、<br>
            ボリュームが出ないように縦のラインを意識したシルエットを作るとグッド！
        </h2>

        <div class="straight_image">
            <div class="straight_img_file">
                <img class="img_file" src="{{ asset('img/coordi_b_9_s.png') }}" alt="">
            </div>
            <div class="straight_img_file">
                <img class="img_file" src="{{ asset('img/coordi_b_12_s.png') }}" alt="">
            </div>
            <div class="straight_img_file">
                <img class="img_file" src="{{ asset('img/coordi_b_17_s.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="wave_box">
        <h1 class="wave_title">ウェーブ型</h1>
        <h2 class="wave_desc">
            着丈が長い服だとだらしなく見えるので、コンパクトなシルエットのものを選びたい。<br>
            どちらかというと下に重心があるので、上半身に主張のある柄や色をもってきて、うまくバランスを取ろう。
        </h2>

        <div class="wave_image">
            <div class="wave_img_file1">
                <img class="img_file" src="{{ asset('img/coordi_b_7_w.png') }}" alt="">
            </div>
            <div class="straight_img_file2">
                <img class="img_file" src="{{ asset('img/coordi_b_5_w.png') }}" alt="">
            </div>
            <div class="straight_img_file3">
                <img class="img_file" src="{{ asset('img/coordi_b_6_w.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="natural_box">
        <h1 class="natural_title">ナチュラル型</h1>
        <h2 class="natural_desc">
            すらりとしたスタイリッシュなラインを持つタイプなので、ほど良く肩の力の抜けた、<br>
            リラックス感のあるゆったりシルエットのアイテムが似合う。粗さがあってシャリ感のある生地を選ぶといっそう良い。
        </h2>

        <div class="natural_image">
            <div class="natural_img_file1">
                <img class="img_file" src="{{ asset('img/coordi_b_2_n.png') }}" alt="">
            </div>
            <div class="natural_img_file2">
                <img class="img_file" src="{{ asset('img/coordi_b_10_n.png') }}" alt="">
            </div>
            <div class="natural_img_file3">
                <img class="img_file" src="{{ asset('img/coordi_b_13_n.png') }}" alt="">
            </div>
        </div>
    </div>
</body>

</html>