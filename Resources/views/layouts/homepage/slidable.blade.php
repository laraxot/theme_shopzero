@php
    //<img src="{{ Theme::asset('pub_theme::img/brand/brand-1.svg') }}" alt="Brand 1" class="img-fluid w-6rem opacity-7">
@endphp



<div style="background: rgba(156,27,27,0);margin-top: 84px;">
    <div class="w-100"
        style="display: flex;width: 329px;background: rgba(200,194,64,0);margin-left: 0px; overflow: auto;">
        @foreach (XotModel('tag')::with('post')->where('parent_id', 0)->get() as $row)
        @php
        //dddx($row);
    @endphp
            <div
                style="width: 80px;background: rgba(60,167,43,0);margin-left: 0;display: inline-block;margin-right: 5px;">
                <button style="border: none; background-color:#F8F9FA;text-align: center" type="button">

                    <div
                        style="background: rgba(230,230,230,0.64);width: 70px;border-radius: 15px;height: 70px;box-shadow: 0px 0px;text-align: center;">
                        <img src="{{ $row->image_src}}"
                            style="width: 40px;height: 40px;padding-left: 0px;margin: 15px;">
                    </div>
                </button>
                <h6
                    style="text-align: center;font-size: 12;width: 70px;font-family: Montserrat, sans-serif;font-weight: bold;margin-left:5px">
                    {{ $row->title }}
                </h6>
            </div>

        @endforeach
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
$("button").click(function() {
    $('html,body').animate({
        scrollTop: $(".second").offset().top},
        'slow');
});
</script>