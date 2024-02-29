<h1>Notre Catalogue </h1>
<h2> Liste des Prduits en solde  </h2>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prix</th>

      </tr>
    </thead>
    <tbody>

@foreach ($products as $item)
<tr>
    <td>{{$item['nom']  }}</td>
    <td>{{$item['prix']  }}DH</td>

  </tr>

@endforeach


    </tbody>
  </table>
