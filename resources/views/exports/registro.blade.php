<table>
  <thead>
    <tr>
    <th>
      ID
    </th>
    <th>
      Latitud
    </th>
    <th>
      Longitud
    </th>
    <th>
      temperatura
    </th>
    <th>
      hg
    </th>
    <th>
      conduct
    </th>
    <th>
      od
    </th>
    <th>
      ph
    </th>
    <th>
      Region
    </th>
    <th>
      Fecha de Creación
    </th>
    <th>
      estado
    </th>
    <th>
      mac
    </th>
    <th>
      ip
    </th>
  </tr>
  </thead>
  <tbody>
  @foreach($registros as $registro)
  <tr>
    <td>{{$registro->id}}</td>
    <td>{{$registro->latitud}}</td>
    <td>{{$registro->longitud}}</td>
    <td>{{$registro->temperatura}}</td>
    <td>{{$registro->hg}}</td>
    <td>{{$registro->conduct}}</td>
    <td>{{$registro->od}}</td>
    <td>{{$registro->ph}}</td>
    <td>
    </td>
    <td>{{$registro->created_at}}</td>
    <td>{{$registro->transferencia->estado}}</td>
    <td>{{$registro->transferencia->mac}}</td>
    <td>{{$registro->transferencia->ip}}</td>
  </tr>
  @endforeach
  </tbody>
</table>
