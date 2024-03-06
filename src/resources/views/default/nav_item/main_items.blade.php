@if($items->count() > 0)
    <ul class="navigation">
        @foreach($items as $item)
            @php
                $isActive = false;
                $url = null;
                $target = '_self';
                if($item->page) {
                    $url = route($item->page->type);
                }
                else {
                    $url = url()->to($item->url);
                }

                if($item->target) {
                    $target = $item->target;
                }

                $isActive = request()->fullUrlIs($url);
            @endphp
                <li>
                    <a href="{{$url}}">
                        {{$item->label}}
                        @if($item->navItems->count() > 0)
                        <span>
                                        <i class="fa-solid fa-angle-down">

                                        </i>
                                    </span>
                        @endif
                    </a>
                    @if($item->navItems->count() > 0)
                        <ul>
                            @foreach($item->navItems as $subItem)
                                @php
                                    $isActive = false;
                                    $url = null;
                                    $target = '_self';
                                    if($subItem->page) {
                                        $url = route($subItem->page->type);
                                    }
                                    else {
                                        $url = url()->to($subItem->url);
                                    }

                                    if($subItem->target) {
                                        $target = $subItem->target;
                                    }

                                    $isActive = request()->fullUrlIs($url);
                                @endphp
                                <li>
                                    <a href="{{$url}}" >
                                        {{ $subItem->label }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
                @endforeach
    </ul>
@endif
