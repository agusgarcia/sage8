@extends('layouts.app')
@section('content')
    @include('partials.page-header')
    <div class="projects_archive">
        @if (!have_posts())
            <div class="alert alert-warning">
                {{ __('Sorry, no results were found.', 'sage') }}
            </div>
            {!! get_search_form(false) !!}
        @endif

        @php($the_query = new WP_Query(array(
          'post_type' => 'projects')))
        @if($the_query->have_posts())
            <div class="background-black"></div>

            <!-- desktop -->
                <svg height="0" width="0">
                    <defs>
                        <clipPath id="svgPath-1">
                            <polygon fill="#EFA400" points="0,109.3 851.5,0 873.2,176.7 632,202.7 886,276.2 472,450.2 122,391 "/>

                        </clipPath>
                    </defs>
                </svg>

                <svg height="0" width="0">
                    <defs>
                        <clipPath id="svgPath-2">
                            <polygon fill="#EFA400" points="1,108.9 564,36.6 610,63 647.2,25.9 849.4,0 871,176 831,169 874.8,339.7 619,380 529.9,432.7 190,426 118,235 184,187 119.4,194.4 113,163 71.4,159.8 "/>
                        </clipPath>
                    </defs>
                </svg>

                <svg height="0" width="0">
                    <defs>
                        <clipPath id="svgPath-3">
                            <polygon fill="#EFA400"
                                     points="1,108.9 849.4,0 871,176 657.3,353.2 874.8,339.7 471.3,448.5 103.4,182.9 250.4,149.1 71.4,159.8"/>
                        </clipPath>
                    </defs>
                </svg>

                <svg height="0" width="0">
                    <defs>
                        <clipPath id="svgPath-4">
                            <polygon fill="#EFA400" points="3.2,52.9 284,36.3 303,50.6 328.1,33.8 853,-31 866.5,179.6 817.9,230.4 817.3,297.5 859,343.2
	689.9,376.6 642.2,325.7 449,449 184,419 124.2,240.7 92.9,304.2 "/>
                        </clipPath>

                    </defs>
                </svg>



                <!-- mobile -->
                <svg height="0" width="0">
                    <defs>
                        <clipPath id="svgPathMobile-4">
                            <polygon fill="#EFA400"
                                     points="322.5,661.2 250.3,98.1 276.6,52.1 239.5,14.9 213.6,-187.3 389.6,-208.9 382.6,-168.9
	553.3,-212.6 598.3,-46.3 593.7,43.1 646.4,132.2 662.2,190.9 439.5,499 400.6,478.1 408,542.8 376.6,549.2 373.5,590.8 "/>
                        </clipPath>

                    </defs>
                </svg>


            @while($the_query->have_posts())
                @php($the_query->the_post())
                @include ('partials.content-projects')
            @endwhile
        @endif

        {!! get_the_posts_navigation() !!}
    </div>
@endsection

