<div class="row justify-content-center">
    <div class="col-lg-6">
        <ul class="shaf-filter course-filter j">
            @foreach($items->take(5) as $item)
                <li data-group="{{$item->id}}">{{$item->title}}</li>
            @endforeach
        </ul>
    </div>
</div>

