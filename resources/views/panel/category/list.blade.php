<ol class="dd-list">
    @foreach($categories as $category)
            <li class="dd-item dd3-item" data-id="{{ $category->id }}">
                <div class="dd-handle dd3-handle"></div>
                <div  class="dd3-content" style="cursor: pointer">
                    <div class="row">
                        <div class="col s4" @click.prevent ="edit({{ $category->id }})">
                            {{ $category->name }}
                        </div>
                        <div class="col s4 right-align-lg">
                            <span  @click.prevent ="del({{ $category->id }})" style="color: red;">X</span>
                        </div>
                    </div>
                </div>
                @php
                    $childs = $category->childs();
                @endphp
                @if($childs !== false)
                    <ol class="dd-list">
                        @include("panel.category.list" , [
                            "categories" => $childs
                        ])
                    </ol>
                @endif
            </li>
    @endforeach
</ol>
