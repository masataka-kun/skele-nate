<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
            margin-bottom: 30px;
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
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
    <div class="straight_box">
        <h1 class="straight_title">ストレート型</h1>
        <h2 class="straight_desc"></h2>

        <div class="straight_image">
            <div class="straight_img_file1">
                <img class="img_file" src="" alt="">
            </div>
            <div class="straight_img_file2">
                <img class="img_file" src="" alt="">
            </div>
            <div class="straight_img_file3">
                <img class="img_file" src="" alt="">
            </div>
        </div>
    </div>

    <div class="wave_box">

    </div>

    <div class="natural_boox">

    </div>
</body>

</html>