<ol class="dd-list">
    @foreach($services as $service)
            <li class="dd-item dd3-item" data-id="{{ $service->id }}">
                <div class="dd-handle dd3-handle"></div>
                <div  class="dd3-content" style="cursor: pointer">
                    <div class="row">
                        <div class="col s4" @click.prevent ="edit({{ $service->id }})">
                            {{ $service->title }}
                        </div>
                        <div class="col s4 right-align-lg">
                            <span  @click.prevent ="del({{ $service->id }})" style="color: red;">X</span>
                        </div>
                    </div>
                </div>
            </li>
    @endforeach
</ol>
