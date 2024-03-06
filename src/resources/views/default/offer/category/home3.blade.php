<div class="blog-details">
    <div class="latest-blog-box">
        <div class="latest-blog-box-text">
            <h3>Menu</h3>
        </div>

        <ul class="latest-blog-box-item">
            @foreach($items as $item)
            <div class="latest-blog-box-item-inner">
                    <div class="latest-blog-box-item-inner-text">
                        <li data-group="{{$loop->first ? '1' : $item->id}}" class="latest-blog-box-item-inner-img"><p>{{$item->title}}</p></li>
                    </div>
            </div>
            @endforeach
        </ul>
    </div>
</div>

