@php
    /**
    * @var $route Routes
    */
    use App\Models\Routes;
@endphp
<ol class="dd-list">
    @foreach($routes as $route)
        @php
            $child = $route->childs();
        @endphp
            <li class="dd-item dd3-item" data-id="{{ $route['id'] }}">
                <div class="dd-handle dd3-handle"></div>
                <div  class="dd3-content" style="cursor: pointer">
                    <div class="row">
                        <div class="col s4" @click.prevent ="edit({{ $route['id'] }})">
                            {{ $route['title'] }}
                        </div>
                        <div class="col s4 right-align-lg">
                            <span @click.prevent="del({{ $route['id'] }})" style="color: red;">X</span>
                        </div>
                    </div>
                </div>

                @if($child !== false)
                    <ol class="dd-list">
                        @include("panel.route.list" , [
                            "routes" => $child
                        ])
                    </ol>
                @endif
            </li>
    @endforeach
</ol>
