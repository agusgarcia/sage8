<div class="page-header">
    @if( get_locale() == 'fr_FR')
        @php($home_link = '/home/')
    @elseif( get_locale() == 'en_US')
        @php($home_link = '/en/home/')
    @endif
    <p class="button-tgomez"><a href="{{ home_url($home_link) }}">Thibault Gomez</a></p>
    @if($close_link)
        <a href="{{ $close_link }}" class="button-back">X</a>
    @else
        <a href="{{ home_url($home_link) }}" class="button-back">X</a>
    @endif

</div>
