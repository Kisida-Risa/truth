<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    @yield('title')
  </title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">　
</head>

<body>

<div id="app" class="max-w-full"> 
<header>
  <nav class="navbar navbar-expand-lg navbar-light" 
     style="background-color: #FF773E; margin-top: 0px;">
  <p class="far fa-sticky-note mr-1 text-4xl ..."
  style="color: white;
  margin-left: 30px;">
  ギタビギ
  </p>

    @guest
    <div class="flex flex-nowrap">
    <div>
       <a class="nav-link hover:bg-blue-700" href="{{ route('register') }}"><p class="text-4xl ..."
       style="color: white;
       margin-top: 5px;
       margin-left: 30px;">
       ユーザー登録
       </p></a>
        </div>
        
         <div>
           <a class="nav-link hover:bg-blue-700" href="{{ route('login') }}"><p class="text-4xl ..."
           style="color: white;
           margin-left: 20px;
           margin-top: 5px;">
           ログイン
           </p></a>
           </div>
           
           <div>
           <form action="{{route('item.search'}}" method="GET">
            @csrf
            <input type="submit" value="検索"
            class="text-4xl ... hover:bg-blue-700"
            style="
           margin-left: 20px;
           height: 80px;
           line-height: 80px;
           background-color: #CCCCCC;
           color: #333333;">
             </div>
         <div
         style="margin-left: 20px;">
         <input type="text"  name="keyword" 
         style="width: 370px; 
         height: 70px;">
         </form>
       </div>
           
      </div>
      </div>
    @endguest 
</nav>
</header>
  @yield('content')
  </div>

  <script src="{{ mix('js/app.js') }}"></script> 

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
  
  <!-- Tailwind css -->
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


  <script>
    // 成功時
    @if (session('msg_success'))
        $(function () {
            toastr.success('{{ session('msg_success') }}');
        });
    // 失敗時
    @elseif (session('msg_error'))
      $(function () {
            toastr.error('{{ session('msg_error') }}');
        });
    @endif
  </script>
</body>


</html>
