@php
  // BLOCO PARA COLOCAR PHP PURO
  //  var_dump(count($fornecedor));
@endphp

{{-- @dd($fornecedor) --}}

@if(count($fornecedor) > 0 && count($fornecedor) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedor) > 10)
    <h3>Existem v�rios fornecedores cadastrados</h3>
@else
    <h3>Ainda n�o existem fornecedores cadastrados</h3>
@endif
