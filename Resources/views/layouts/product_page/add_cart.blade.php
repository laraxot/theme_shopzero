<nav class="navbar navbar-light navbar-expand-md fixed-bottom" style="background-color: #f8f9fa;">
    <div class="container-fluid">
        <div class="w-100" style="height: 1px;background: #d0d0d0;margin-bottom: 13px;"></div>
        <div class="w-100" style="text-align: center;">
            <button type="button" onClick="if(clicks>1)clicks--;updateClickCount();" id="push"
                style="border: none;background-color:#F8F9FA">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    class="bi bi-dash" style="font-size: 25px;margin-top: -10px;margin-right: 5px;">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"></path>
                </svg>
            </button>
            <h1 id="clickCount" style="display: inline-block;font-family: Montserrat, sans-serif;font-size: 33px;">1
            </h1>
            <button type="button" onClick="clicks++;updateClickCount();" id="push"
                style="border: none;background-color:#F8F9FA">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    class="bi bi-plus" style="margin-top: -10px;font-size: 30px;margin-left: 5px;">
                    <path fill-rule="evenodd"
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z">
                    </path>
                </svg>
            </button>
        </div>


         @livewire('shop::cart',['row'=>XotModel('shop'),'product'=>$product])
        {{-- @livewire('shop::buttonAddCart') --}}

    </div>
</nav>

<script type="text/javascript">
    var clicks = 1;
    //var base_price = "{{--XotModel('product')::find(app('request')->input('id'))->price--}}";
    var base_price = 0;
    

    function updateClickCount() {
        document.getElementById("clickCount").innerHTML = clicks;


        let items = document.getElementsByClassName("addition_item");

        let totalPrice = parseFloat(base_price * clicks);

        let price = 0;
        let quantity = 0;

        for (let i = 0; i < clicks; i++) {
            for (let item of items) {

                quantity = item.querySelectorAll('.qt_addition')[0].innerHTML;

                price = item.querySelectorAll('.prz_addition')[0].innerHTML;

                totalPrice += parseFloat(price) * parseInt(quantity);

            }
        }

        document.getElementById("prezzo").innerHTML = "&euro; " + totalPrice.toFixed(2);

    }
</script>
