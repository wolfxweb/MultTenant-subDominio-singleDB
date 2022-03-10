

  <table class="table table-striped">
    <thead>
        <tr>
            @foreach ( $MenuItensColunaTabela as  $col)
              <th scope="col"> {{$col}}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        {{$slot}}
    </tbody>
</table>
