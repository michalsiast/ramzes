@foreach($items as $item)
    <div class="process-item">
        <div class="process-item-icon">
            <div class="icon">
                <img src="{{ renderImage($item->galleryCover(), 35, 35, 'resize') }}" alt="">
            </div>
        </div>
        <div class="text">
            <h3>{{$item->title}}</h3>
            {!! $item->text !!}
        </div>
        <div class="process-item-right-img">
            <img src="{{ asset('images/icon/' . $loop->iteration . '.png') }}">
        </div>
    </div>
@endforeach

