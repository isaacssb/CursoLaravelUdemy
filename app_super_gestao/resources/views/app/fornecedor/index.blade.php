@php
  // BLOCO PARA COLOCAR PHP PURO
  //  var_dump(count($fornecedor));
@endphp

{{-- @dd($fornecedor) --}}

@if(count($fornecedor) > 0 && count($fornecedor) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedor) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif
