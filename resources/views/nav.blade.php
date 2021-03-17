<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FF773E;">

  <i class="far fa-sticky-note mr-1"></i>ギタビギ</a>


    @guest
    <li class="nav-item">
    <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a>
    </li>
  
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">ログイン</a>
    </li>

    <li class="nav-item bg-default rounded">
        <a class="nav-link waves-effect waves-light" href="#"><i class="fas fa-user-check mr-1"></i>かんたんログイン</a>
      </li>
    @endguest 

    @auth
    <!-- <li class="nav-item"> -->
      <!-- <a class="nav-link" href="{{ route('articles.create') }}"><i class="fas fa-pen mr-1"></i>投稿する</a> -->
    <!-- </li> -->


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
        />
        <button
          class="btn btn-outline-primary"
          type="button"
          data-mdb-ripple-color="dark"
        >
          検索
        </button>
      </form>
    @endauth 

  </ul>

</nav>