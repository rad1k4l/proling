<ol class="dd-list">
    @foreach($videopages as $videopage)
            <li class="dd-item dd3-item" data-id="{{ $videopage->id }}">
                <div class="dd-handle dd3-handle"></div>
                <div  class="dd3-content" style="cursor: pointer">
                    <div class="row">
                        <div class="col s8"  >
                            <a href="{{ route('panel.video.page.update.form', ['id' => $videopage->id]) }}">
                                {{ $videopage->title }}
                            </a>
                        </div>
                        <div class="col s2 right-align-lg">
                            <span  @click.prevent ="del({{ $videopage->id }})" style="color: red;">X</span>
                        </div>
                    </div>
                </div>
            </li>
    @endforeach
</ol>
