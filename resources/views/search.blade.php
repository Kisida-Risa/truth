
  @if(!empty($keyword)) 
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
@endif
 
