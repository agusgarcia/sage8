<div class="page-header">
    @php($fr_home = '/home/')
    @php($en_home = '/en/home/')


    @if( get_locale() == 'fr_FR')
        @php($current_lang = $fr_home)
        @php($other_lang = $en_home)
        @php($other_lang_id = 'EN')
    @elseif( get_locale() == 'en_US')
        @php($current_lang = $en_home)
        @php($other_lang = $fr_home)
        @php($other_lang_id = 'FR')
    @endif

    <p class="button-tgomez"><a href="{{ home_url($current_lang) }}">Thibault Gomez</a></p>
    <a href="{{ home_url($other_lang) }}" class="button-lang">{{$other_lang_id}}</a>
</div>



