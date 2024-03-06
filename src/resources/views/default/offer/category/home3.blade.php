<div class="blog-details">
    <div class="latest-blog-box">
        <div class="latest-blog-box-text">
            <h3>Menu</h3>
        </div>
        <ul class="latest-blog-box-item">
            @foreach($items as $item)
                <li class="latest-blog-box-item-inner">
                    <div class="latest-blog-box-item-inner-text">
                        <a href="{{route('offer_category.show.'.$item->id)}}">{{ $item->title}}</a>
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
</div>

