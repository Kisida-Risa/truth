@if(!empty($keyword))
   <table border="1">
    <tr>
        <th>name</th>
    </tr>

    <tr>
        <td>{{ $keyword }}</td>
    </tr>
</table>
<br>
<br>
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
 
