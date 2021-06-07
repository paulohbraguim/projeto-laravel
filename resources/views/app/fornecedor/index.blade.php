<h3>Fornecedor</h3>

{{-- Comentário em Blade --}}

@php
@endphp
{{-- 
@isset($fornecedores)
    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido!' }}
        <br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }}   
        <hr>
    @endfor 
@endisset

@isset($fornecedores)
    @php $i =0 @endphp
    @while(isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido!' }}
        <br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }}   
        <hr>
    @php $i++ @endphp    
    @endwhile
    
@endisset

@isset($fornecedores)
    @foreach($fornecedores as $key => $value)
        Fornecedor: {{ $value['nome'] }}
        <br>
        Status: {{ $value['status'] }}
        <br>
        CNPJ: {{ $value['cnpj'] ?? 'Dado não foi preenchido!' }}
        <br>
        Telefone: {{ $value['ddd'] ?? '' }} {{ $value['telefone'] ?? '' }}   
        <hr>
    @endforeach    
@endisset
--}}
@forelse($fornecedores as $key => $value)
    Iteração: {{ $loop->iteration }}
    <br>
    Fornecedor: {{ $value['nome'] }}
    <br>
    Status: {{ $value['status'] }}
    <br>
    CNPJ: {{ $value['cnpj'] ?? 'Dado não foi preenchido!' }}
    <br>
    Telefone: {{ $value['ddd'] ?? '' }} {{ $value['telefone'] ?? '' }}   
    <br>
    
    @if($loop->first)
        Primeira Iteração        
    @endif

    @if($loop->last)
        Última Iteração do Array
        <br>

        Total de registros {{ $loop->count }}
    @endif
    <hr>
@empty
    Não existem fornecedores cadastrados
@endforelse