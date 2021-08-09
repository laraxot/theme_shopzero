@php
    
    
    $id=$productId; 

    $test = XotModel('product')::find($id)->price;//3 SOSTITUISCE XOTMODEL ECC. CON UN NUMERO (ANCHE CON LA VIRGOLA) NORMALE E VEDRAI CHE VA

  

@endphp


<div>

<button wire:click='addProduct({{ $test }})'>CLICCA QUI</button>


Total Price: {{ var_dump($result) }}

</div>
