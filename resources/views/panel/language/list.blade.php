@php
    /**
    * @var $language Language
    */
    use App\Models\Language;
@endphp
<ol class="dd-list">
    @foreach($languages as $language)
        @php
            $child = $language->childs();
        @endphp
            <li class="dd-item dd3-item" data-id="{{ $language->id }}">
                <div class="dd-handle dd3-handle"></div>
                <div  class="dd3-content" style="cursor: pointer">
                    <div class="row">
                        <div class="col s4" @click.prevent ="edit({{ $language->id }})">
                            {{ $language->name }}
                        </div>
                        <div class="col s4 right-align-lg">
                            <span  @click.prevent ="del({{ $language->id }})" style="color: red;">X</span>
                        </div>
                    </div>
                </div>
                @if($child !== false)
                    <ol class="dd-list">
                        @include("panel.language.list" , [
                            "languages" => $child
                        ])
                    </ol>
                @endif
            </li>
    @endforeach
</ol>
