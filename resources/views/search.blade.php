@if(!empty($keyword))

<div>
@foreach ($keywords as $keyword)

    <div class="w-full lg:max-w-full lg:flex">
      <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col 
      justify-between leading-normal"
      style="margin-bottom: 30px;
      margin-left: 30px;">
          <div class="text-gray-900 font-bold text-xl mb-2 text-4xl ..."
          style="text-align:center ;">
          {{ $keyword->name }}
          </div>
          </div>
          
    </div>
    @endforeach
          </div>
          <div>
            <form action="{{ route('item.item') }}" method="GET">
                @csrf
                <input type="submit" value="商品一覧へ"
                class="bg-blue-500 hover:bg-blue-700 text-black 
               font-bold py-2 px-4 rounded-full text-3xl ..."
                style="display: inline-block; 
                width: 300px;
                height: 55px; 
                line-height: 20px;
                margin-left: 40px;
                color: white;">
                </form>
              </div>
@endif
 
