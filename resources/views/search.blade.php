<h1>検索</h1>
 
<form action="{{route('item.search')}}" method="GET">
  <div>
    <p><input type="text" name="keyword" value="$keyword"></p>
    <p><input type="name" name="stock" value="$stock"></p>
    <p><input type="submit" value="検索"></p>
  </div>
  </form>

 

 
<table border="1">
    <tr>
        <th>name</th>
        <th>price</th>
    </tr>

    @foreach ($items as $item)
    <tr>
        <td>{{ $item->name }}</td>

        <td>{{ $item->price }}</td>
    </tr>
    @endforeach
</table>
 
