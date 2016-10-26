@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="project">

            <div class="title">

                <h1>{{$product->name}}</h1>

            </div>

            <div class="beschrijving clearfix">

                <div class="project-beschrijving">
                    
                    <h2 class="subtitle">Beschrijving project</h2>

                    <p>{{$product->model}}</p>

                </div>

                <div class="project-foto">

                    <img class="projectimg" src="{{$product->photo_path}}">

                </div>

            </div>

            <div>

                <p>

                    <span class="bold">Categorie</span>: @foreach ($product->categories as $category)
                    <span class="label category label-primary">
                    <i class="fa fa-btn fa-tags"></i>
                    {{ $category->title }}</span>
                    @endforeach
                    
                </p>

            </div>

            <!-- The Timeline -->
        <div class="subtitle">

            <h2>Tijdlijn</h2>

        </div>

        <ul class="timeline">
            
            @foreach ($product->fases as $fase)
            <!-- Item 1 -->
            <li>
                <div class="direction-r">
                    <div class="flag-wrapper">
                        <span class="flag">{{ $fase->title }}</span><br>
                        <span class="time-wrapper"><span class="time">{{ $fase->datum }}</span></span>
                    </div>
                    <div class="desc">{{ $fase->beschrijving }}</div>
                </div>
            </li>
            @endforeach
          
          
        </ul>

        <div class="enquete">

            <div class="subtitle">

                <h2>Geef je mening!</h2>

            </div>

            @if(Auth::user())
                <div class="vragen clearfix">

                
                    @foreach ($product->vragen as $vraag)

                        <div class="vraag-wrapper">

                            <div class="vraag"> 

                                @foreach($userAnswers as $userAnswer) @if($userAnswer->vraag_id == $vraag->id)

                                    <p style="font-weight:bold;">{{$vraag->vraag}}</p>
                                    U hebt deze vraag al beantwoord<br>



                                @endif @endforeach

                                <div class="{{ $vraag->id }} @foreach($userAnswers as $userAnswer) @if($userAnswer->vraag_id == $vraag->id) hide @endif @endforeach">
                                        
                                    <p style="font-weight:bold;">{{$vraag->vraag}}</p>
                                         
                                    @foreach ($vraag->answers as $answer)

                                        <button class="btn antwoord next" id="{{ $answer->id }}" userID="{{ Auth::user()->id }}" vraagID="{{$vraag->id}}" name="$vraag_id">
                                                {{ $answer->antwoord }}
                                        </button>

                                    @endforeach

                                </div>

                            </div>

                        </div>

                    @endforeach

                
                </div>
            @else

                <p> <a href="{{ url('/login') }}">Meld je aan</a> of <a href="{{ url('/register') }}">registreer</a> je om te kunnen antwoorden op de vragen!</p>

            @endif

                
        </div>

        <div id="disqus_thread"></div>
        <script>
        /**
        * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/…
        */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = '//antwerpenprojects.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

        </div>
    </div>
   
@endsection
