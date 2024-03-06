<div class="row justify-content-center">
    <div class="col-lg-6">
        <ul class="shaf-filter course-filter j">
            @foreach($items as $item)
                <li data-group="{{$item->id}}" class="{{$loop->first ? 'active' : ''}}">{{$item->title}}</li>
            @endforeach
        </ul>
    </div>
</div>

