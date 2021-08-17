<style>
    .accordion__button {
        display: inline-block;
        font-family: Montserrat, sans-serif;
        font-size: 19px;
        font-weight: bold;
        margin-bottom: 15px;
        background: rgba(255, 36, 36, 0);
        cursor: pointer;
        background: #D8D8D8;
        width: 100%;
        padding: 18px;
        border: none;
        outline: none;
        cursor: pointer;
        background: #D8D8D8;
        color: rgb(26, 26, 26);
        text-align: center;
        transition: background 0.2s;
        border-radius: 10px;
    }

    .accordion__button::after {
        content: '\25be';
        float: right;
    }

    .accordion__button--active {
        background: #acacac;
    }

    .accordion__button--active::after {
        content: '\25b4';
    }

    .accordion__content {
        overflow: hidden;
        max-height: 0;
        transition: max-height 0.2s;

        padding: 0 15px;
        font-family: sans-serif;

    }

</style>

{{ dddx($row->prices) }}

<div class="accordion">
    <button type="button" class="accordion__button" id="aggiunte">
        Aggiunte
    </button>
    <div class="accordion__content">
        @foreach ($rows as $row)
            <!--<button type="button" onClick="clicks++;updateClickCount();" id="push">-->
            <button class="w-100" style="background:#F8F9FA; border:none; display:inline-block;">
                <div class="w-100"
                    style="background: #e8e8e8a4;margin-left: 0px;width: 314px;border-radius: 15px;margin-bottom: 10px;">
                    <div>
                        <div class="w-100"
                            style="display: inline-block;padding-top: 13px;padding-left: 13px;padding-right: 13px;">

                            <div class="addition_item"
                                style="display: inline-block; float: left; width: 90%; text-align: left"
                                onclick="addAddition(this)">

                                <h5 class="w-50"
                                    style="display: inline-block;margin: 0px;margin-top: 0px;padding-bottom: 0px;font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 15px;padding-top: 0px;background: rgba(255,36,36,0);width: 219px;text-align: left;font-size: 18px;">
                                    + {{ $row->title }}</h5>

                                <h5 class="qt_addition"
                                    style="visibility:hidden;display: inline-block;text-align: right;color: rgb(0,0,0);font-family: Montserrat, sans-serif; font-size: 18px">
                                    0</h5>

                                <div class="x_qt_addition" style="display:inline-block;visibility:hidden;">X</div>

                                <div style="display: inline-block; text-align: right">
                                    <h5
                                        style="display: inline-block;text-align: right;color: rgb(128,128,128);font-family: Montserrat, sans-serif;font-size: 18px">
                                        <span>€ </span><span
                                            class="prz_addition">{{-- number_format($row->prices[0]->price,2,',','') --}}</span>
                                    </h5>
                                </div>
                            </div>

                            <div class="delete" onclick="removeAddition(this)"
                                style="visibility: hidden;border: none;display: inline-block;border-radius:30px;width:22px;text-align:center;color:rgba(221,59,59,0.61);padding-top:2px;">
                                X
                            </div>

                        </div>

                    </div>

                </div>

            </button>
            <!--</button>-->
        @endforeach

    </div>

</div>



<div class="accordion">
    <button type="button" class="accordion__button" style="">
        Riduzioni
    </button>
    <div class="accordion__content">
        @foreach ($rows as $row)
            <!--<button type="button" onClick="clicks++;updateClickCount();" id="push">-->
            <button class="w-100" style="background:#F8F9FA; border:none; display:inline-block;">
                <div class="w-100"
                    style="background: #e8e8e8a4;margin-left: 0px;width: 314px;border-radius: 15px;margin-bottom: 10px;">
                    <div>
                        <div class="w-100"
                            style="display: inline-block;padding-top: 13px;padding-left: 13px;padding-right: 13px;">

                            <div class="addition_item"
                                style="display: inline-block; float: left; width: 90%; text-align: left"
                                onclick="addReduction(this)">

                                <h5 class="w-50"
                                    style="display: inline-block;margin: 0px;margin-top: 0px;padding-bottom: 0px;font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 15px;padding-top: 0px;background: rgba(255,36,36,0);width: 219px;text-align: left;font-size: 18px;">
                                    - {{ $row->title }}</h5>

                                <h5 class="qt_addition"
                                    style="visibility:hidden;display: inline-block;text-align: right;color: rgb(0,0,0);font-family: Montserrat, sans-serif; font-size: 18px">
                                    0</h5>

                                <div class="x_qt_addition" style="display:inline-block;visibility:hidden;">X</div>

                            </div>

                            <div class="delete" onclick="removeAddition(this)"
                                style="visibility: hidden;border: none;display: inline-block;border-radius:30px;width:22px;text-align:center;color:rgba(221,59,59,0.61);padding-top:2px;">
                                X
                            </div>

                        </div>

                    </div>

                </div>

            </button>
            <!--</button>-->
        @endforeach
    </div>
</div>

<div class="accordion">
    <button type="button" class="accordion__button" style="">
        Impasti
    </button>
    <div class="accordion__content">
        @foreach ($rows as $row)
            <!--<button type="button" onClick="clicks++;updateClickCount();" id="push">-->
            <button class="w-100" style="background:#F8F9FA; border:none; display:inline-block;">
                <div class="w-100"
                    style="background: #e8e8e8a4;margin-left: 0px;width: 314px;border-radius: 15px;margin-bottom: 10px;">
                    <div>
                        <div class="w-100"
                            style="display: inline-block;padding-top: 13px;padding-left: 13px;padding-right: 13px;">

                            <div class="addition_item"
                                style="display: inline-block; float: left; width: 90%; text-align: left"
                                onclick="addDough(this)">

                                <h5 class="w-50"
                                    style="display: inline-block;margin: 0px;margin-top: 0px;padding-bottom: 0px;font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 15px;padding-top: 0px;background: rgba(255,36,36,0);width: 219px;text-align: left;font-size: 18px;">
                                    + {{ $row->title }}</h5>

                                <h5 class="qt_addition"
                                    style="visibility:hidden;display: inline-block;text-align: right;color: rgb(0,0,0);font-family: Montserrat, sans-serif; font-size: 18px">
                                    0</h5>

                                <div class="x_qt_addition" style="display:inline-block;visibility:hidden;">X</div>

                                <div style="display: inline-block; text-align: right">
                                    <h5
                                        style="display: inline-block;text-align: right;color: rgb(128,128,128);font-family: Montserrat, sans-serif;font-size: 18px">
                                        <span>€ </span><span
                                            class="prz_addition">{{-- number_format($row->prices[0]->price,2,',','') --}}</span>
                                    </h5>
                                </div>
                            </div>

                            <div class="delete" onclick="removeAddition(this)"
                                style="visibility: hidden;border: none;display: inline-block;border-radius:30px;width:22px;text-align:center;color:rgba(221,59,59,0.61);padding-top:2px;">
                                X
                            </div>

                        </div>

                    </div>

                </div>

            </button>
            <!--</button>-->
        @endforeach
    </div>
</div>
<div style="margin-bottom: 200px"></div>

<script>
    "use strict;"


    window.onload = function() {
        document.getElementById('aggiunte').click();
    }

    document.querySelectorAll('.accordion__button').forEach(button => {
        button.addEventListener('click', () => {
            const accordionContent = button.nextElementSibling;

            button.classList.toggle('accordion__button--active');

            if (button.classList.contains('accordion__button--active')) {
                accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
            } else {
                accordionContent.style.maxHeight = 0;
            }
        })
    });

    function getParents(e) {
        var result = [];
        for (var p = e && e.parentElement; p; p = p.parentElement) {
            result.push(p);
        }
        return result;
    }

    function addAddition(element) {

        let elemento = element.querySelectorAll('.qt_addition')[0];
        let x = element.querySelectorAll('.x_qt_addition')[0];
        let d = getParents(element)[0].querySelectorAll('.delete')[0];

        elemento.innerHTML++;

        additionVisibility(elemento, x, d);

        updateClickCount();
    }

    function addReduction(element) {

        let elemento = element.querySelectorAll('.qt_addition')[0];
        let x = element.querySelectorAll('.x_qt_addition')[0];
        let d = getParents(element)[0].querySelectorAll('.delete')[0];

        if (elemento.innerHTML != 1) {
            elemento.innerHTML++;
        }

        additionVisibility(elemento, x, d);

        updateClickCount();
    }

    function addDough(element) {

        let elemento = element.querySelectorAll('.qt_addition')[0];
        let x = element.querySelectorAll('.x_qt_addition')[0];
        let d = getParents(element)[0].querySelectorAll('.delete')[0];

        if (elemento.innerHTML != 1) {
            elemento.innerHTML++;
        }

        additionVisibility(elemento, x, d);

        updateClickCount();
    }


    function removeAddition(element) {

        let parent = getParents(element)[0].querySelectorAll('.qt_addition')[0];
        let x = getParents(element)[0].querySelectorAll('.x_qt_addition')[0];
        let d = getParents(element)[0].querySelectorAll('.delete')[0];

        if (parent.innerHTML > 0) {

            parent.innerHTML--;

            additionVisibility(parent, x, d);

            updateClickCount();
        }
    }

    function additionVisibility(element, x, d) {
        if (element.innerHTML === "0") {
            x.style.visibility = 'hidden';
            element.style.visibility = 'hidden';
            d.style.visibility = 'hidden';
        } else {
            x.style.visibility = 'visible';
            element.style.visibility = 'visible';
            d.style.visibility = 'visible';
        }
    }
</script>



{{-- @livewire('expand') --}}
