<div class="w-100" style="margin-bottom: 10px;margin-top: 0px; cursor: pointer;">
    <div wire:click="addProduct({{ XotModel('product')::find($productId)->price }}, clicks)">
       {{-- <a
            href="{{ route('container0.index', ['lang' => App::getLocale(), 'container0' => 'product', 'id' => XotModel('product')::find($productId)->category_id]) }}">--}}
            <div class="w-25" style="display: inline-block;"></div>
            <div class="w-100"
                style="margin: 0 auto;display: inline-block;background: rgba(24,106,115,0.7);border-radius: 138px;height: 76px;padding-top: 5px;box-shadow: 0px 0px 3px rgb(23,105,111);">
                <h3
                    style="text-align: center;color: rgb(255,255,255);padding-top: 5px;font-family: Montserrat, sans-serif;font-weight: bold;margin-top: 4px;font-size: 20px;">
                    Aggiungi al carrello</h3>
                <h3 id="prezzo"
                    style="text-align: center;color: rgb(255,255,255);/*padding-top: 5px;*/font-family: Montserrat, sans-serif;font-weight: bold;margin-top: 4px;font-size: 15px;">
                    € {{ number_format(XotModel('product')::find($productId)->price, 2, ',', ' ') }}</h3>
            </div>
        {{-- </a> --}} 
    </div>
</div>
