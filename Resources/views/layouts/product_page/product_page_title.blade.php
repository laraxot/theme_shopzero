@php

//dddx($items[1]);
//dddx(XotModel('post')->where("guid",$items[1])->get()->first()->title);

/* METODO TEMPORANEO PERCHE' NON SO COME ACCEDERE AL TITOLO DEL PRODOTTO SUPERIORE */
/* $item[1] in sto caso corrisponderebbe al container products */
/* DA CORREGGERE ASSOLUTAMENTE (MALEBESTIA PENSACI TU E COMMENTA ! :D ) */

$title = XotModel('post')
    ->where('guid', $params["item1"])
    ->get()
    ->first()->title;


    /*dddx($params);*/

@endphp

<a href="{{ route('container0.index', ['lang' => App::getLocale(), 'container0' => 'product', 'id' => app('request')->input('id')]) }}"
    style="text-decoration: none; color:rgb(33,37,41)">
    <h1
        style="margin-top: 100px;font-family: Montserrat, sans-serif;padding-left: 0px;font-weight: bold;margin-bottom: 20px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
            class="bi bi-chevron-left" style="padding-right: 15px;font-size: 40px;margin-right: -9px;margin-top: -4px;">
            <path fill-rule="evenodd"
                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
            </path>
        </svg>{{ $title }}
    </h1>
</a>
