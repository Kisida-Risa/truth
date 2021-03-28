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

@auth
   <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
     <li class="nav-item" role="presentation">
      <a
      class="nav-link active"
      id="ex1-tab-1"
      data-mdb-toggle="tab"
      href="{{ route('articles.index')}}"
      role="tab"
      aria-controls="ex1-tabs-1"
      aria-selected="true"
      > SNS</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-2"
      data-mdb-toggle="tab"
      href="#"
      role="tab"
      aria-controls="ex1-tabs-2"
      aria-selected="false"
      > チャット</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-3"
      data-mdb-toggle="tab"
      href="#"
      role="tab"
      aria-controls="ex1-tabs-3"
      aria-selected="false"
      >？</a
    >
  </li>
</ul>
  <!-- Search form -->
  <form class="d-flex input-group w-auto">
        <input
          type="text"
          class="form-control"
          name="keyword"
          placeholder="Type query"
          aria-label="Search"
          style="margin-left: 10px;"
        >
        <input
          class="btn btn-outline-primary"
          type="submit"
          data-mdb-ripple-color="dark"
          style="margin-right: 10px;"
        ><a href="{{route('item.search') }}">
          <p style="margin-right: 10px;">検索</p>
          </a>
      </form>
    @endauth 

  </ul>

</nav>