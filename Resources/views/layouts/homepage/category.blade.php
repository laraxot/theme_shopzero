@php
    //dddx(get_defined_vars());
    $tags = XotModel('tag')::where('parent_id', 1)->get();
@endphp
@foreach ($tags as $tag)
@php
    $tag_panel = Panel::get($tag);
    $url = $tag_panel->relatedUrl(['related_name' => 'products', 'act' => 'index']);
    //$url = $profile_panel->relatedUrl(['related_name' => 'bell_boy', 'act' => 'index_edit']);
    //dddx($url);
@endphp
    <div class="w-100"
        style="background: #e6e6e6a4;margin-left: 0px;width: 314px;border-radius: 15px;margin-bottom: 20px;">
     
        <a href="{{ $url }}{{-- route('container0.container1.index',['lang'=>App::getLocale(),'container0'=>'tags','item0'=>'le-classiche','container1'=>'products']) --}}" style="text-decoration: none; color: rgb(39, 39, 39)">
            <div class="w-100"><img class="w-100"
                    src="{{ $tag->image_src }}"
                    style="width: 280px;margin: 0px;border-radius: 15px;margin-bottom: 0;padding: 7px;">
                <h3
                    style="margin: 16px;margin-top: 5px;padding-bottom: 9px;font-family: Montserrat, sans-serif;font-weight: bold;font-size: 21.05px;">
                    {{ $tag->title }}</h3>
            </div>
        </a>
    </div>
@endforeach
