@php

$result = session()->get('result');

if (!is_array($result)) {
    $result = [];
}

$totalPrice = 0;

$fixed = array();

    foreach ($result as $element) {
        
        if(!isset($fixed[$element['id']])){

            $fixed[$element['id']] = $element;
            $fixed[$element['id']]['quantita']=0;
            
        }
        
        $fixed[$element['id']]['quantita']+=1;
        
    }   

foreach($fixed as $index=>$value){

    @endphp

    <div style="padding-bottom: 0px;">
        <div class="w-100" style="background:#F8F9FA; border:none; display:inline-block;">
            <div class="w-100"
                style="background: #c5c5c5a4;margin-left: 0px;width: 314px;border-radius: 15px;margin-bottom: 10px;">
                <div>
                    <div class="w-100" style="display: inline-block;padding-top: 13px;padding-left: 13px;padding-right: 13px;">

                        <div class="addition_item" style="display: inline-block; float: left; width: 90%; text-align: left">

                            <h5 class="w-50"
                                style="display: inline-block;margin: 0px;margin-top: 0px;padding-bottom: 0px;font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 15px;padding-top: 0px;background: rgba(255,36,36,0);width: 219px;text-align: left;font-size: 18px;">
                                {{ XotModel('product')::find($value['id'])->description }}</h5>

                            <h5 class="qt_addition"
                                style="display: inline-block;text-align: right;color: rgb(0,0,0);font-family: Montserrat, sans-serif; font-size: 18px">
                                {{ $value['quantity'] }}</h5>
                        
                            <div class="x_qt_addition" style="display:inline-block;">X</div>

                            <div style="display: inline-block; text-align: right">
                                <h5
                                    style="display: inline-block;text-align: right;color: rgb(128,128,128);font-family: Montserrat, sans-serif;font-size: 18px">
                                    <span>€ </span><span class="prz_addition">{{ number_format((float)$value['price'], 2, ',', ''); }}</span>
                                </h5>
                            </div>
                        </div>

                        <button type="button" class="delete" wire:click.prevent="removeProduct({{ $value['id'] }})"
                            style="border: none;display: inline-block;border-radius:30px;width:22px;text-align:center;color:rgba(221,59,59,0.61);padding-top:2px;background-color:#D8D8D8">
                            X
                        </button>

                    </div>

                </div>

            </div>
        </div>
    </div>

    @php 
    $totalPrice = $totalPrice + ($value['price'] * $value['quantity']);
}

@endphp

@livewireScripts
<nav class="navbar navbar-light navbar-expand-md fixed-bottom" style="background-color: #f8f9fa;">
    <div class="container-fluid">
        <div class="w-100" style="height: 1px;background: #d0d0d0;margin-bottom: 13px;"></div>
        <div class="w-100">
            <h1 style="float: left;display: inline-block;font-family: Montserrat, sans-serif;">Totale:</h1>
            <h1 style="display: inline-block;float: right;font-family: Montserrat, sans-serif;font-weight: bold;">€
                {{ number_format((float)$totalPrice, 2, ',', ''); }}</h1>
        </div>
        <div class="w-100" style="margin-bottom: 10px;">
            <div class="w-25" style="display: inline-block;"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                    height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-x-circle"
                    style="font-size: 30px;margin-bottom: 8px;color: rgb(228,123,123);margin-left: 14px;">
                    <path fill-rule="evenodd"
                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                    <path fill-rule="evenodd"
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                    </path>
                </svg></div>
            <div class="w-50"
                style="display: inline-block;background: rgba(255,255,255,0);border-radius: 138px;height: 55px;padding-top: 5px;box-shadow: 0px 0px 3px rgb(23,105,111);">
                <h3
                    style="text-align: center;color: rgb(24,106,112);padding-top: 5px;font-family: Montserrat, sans-serif;font-weight: bold;margin-top: 4px;">
                    Checkout</h3>
            </div>
        </div>
    </div>
</nav>


