@foreach (XotModel('tag')::where('parent_id', 1)->get() as $row)
    <div class="w-100"
        style="background: #e6e6e6a4;margin-left: 0px;width: 314px;border-radius: 15px;margin-bottom: 20px;">
        <a href="{{ route('container0.index', ['lang' => App::getLocale(), 'container0' => 'product', 'id' => $row->id]) }}"
            style="text-decoration: none; color: rgb(39, 39, 39)">
            <div class="w-100"><img class="w-100"
                    src="{{ $row->image_src }}"
                    style="width: 280px;margin: 0px;border-radius: 15px;margin-bottom: 0;padding: 7px;">
                <h3
                    style="margin: 16px;margin-top: 5px;padding-bottom: 9px;font-family: Montserrat, sans-serif;font-weight: bold;font-size: 21.05px;">
                    {{ $row->title }}</h3>
            </div>
        </a>
    </div>
@endforeach
