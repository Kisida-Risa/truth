<nav class="navbar navbar-expand-lg navbar-light" 
     style="background-color: #FF773E; margin-top: 0px;">
  <i class="far fa-sticky-note mr-1"></i>ギタビギ</a>

    @guest
    <div class="flex flex-nowrap">
    <div>
       <a class="nav-link" href="{{ route('register') }}"><p class="text-4xl ...">ユーザー登録</p></a>
        </div>
        <br>
         <div>
           <a class="nav-link" href="{{ route('login') }}"><p class="text-4xl ...">ログイン</p></a>
           </div>
           <br>
           <form action="{{route('item.search')}}" method="GET">
            @csrf
            <div class="flex flex-nowrap">
           <div><p>検索</p></div>
         <div class="border-solid border-4 border-light-blue-500 ..."><input type="text"  name="keyword" value="$keyword"></div>
         </form>
  </div>
           
      </div>
      </div>
    @endguest 
</nav>