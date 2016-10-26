@extends('layouts.app')

@section('content')


    <div class="container clearfix">
        <div class="uitleg-wrapper clearfix">
            <div class="home-site-uitleg-wrapper">
                <div class="home-site-uitleg">
                    <div class="box">
                        <div class="title">

                            <h2>Waarvoor dient deze website?</h2>

                        </div>
                        <div class="">

                            <p>Welkom bij de gloednieuwe site van de stad Antwerpen! Hier kan u terecht voor de projecten waarmee de stad Antwerpen op deze moment actief is. U kan nauw op de voet volgen wat we exact van plan zijn doormiddel van de handige tijdlijn die bij elk project aanwezig is. Daarnaast zal u ook een korte beschrijving en een foto van het project zelf kunnen terugvinden. Wil je je eigen mening kwijt dan kan dat gemakkelijk door te antwoorden op de vragen die bij het project horen. Als dat niet genoeg is kan u ook gewoon een comment plaatsen helemaal onderaan de projectpagina!</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="home-coin-uitleg-wrapper">
                <div class="home-site-uitleg">
                    <div class="box">
                        <div class="title">

                            <h2>Hoe werkt het puntensysteem?</h2>

                        </div>
                        <div class="">

                            <p>Wanneer je een geregistreerd gebruiker bent heb je de mogelijkheid om de vragenlijsten van de projecten in te vullen. Per vraag dat je invult verdien je punten, deze punten kan je gebruiken om verscheidene bonnen en geschenken op te eisen. Je kan je huidige aantal punten altijd volgen rechtsboven of bij jouw account informatie.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-most-recent-projects clearfix">
            <div class="title">

                <h2>Meest recente projecten</h2>

            </div>

            <div>
                
                @foreach ($products as $project)

                    <a href="catalogs/{{ $project->id }}">

                        <div class="recent-project-wrapper">
                            
                            <div class="recent-project">
                            
                                <div class="img-recent-project-wrapper"><img class="img-recent-project" src="img/{{ $project->photo }}"></div>

                                <p>{{ $project->name }}</p>
                                <p>{{ $project->created_at }}</p>

                            </div>

                        </div>

                    </a>

                @endforeach

            </div>


        </div>

        <!--<div class="home-recentste-projecten-wrapper">
            <div class="home-recentste-projecten clearfix">
                <div class="box">
                    <div class="title">
                        <h2>Meest recent project</h2>
                    </div>
                    <div class="recent-projects clearfix">
                        @foreach($products as $project)
                            <a href="catalogs/{{ $project->id }}">
                                <div class="recent-project clearfix">
                                    <div class="recent-project-margin">                                                            
                                    <img class="recent-projectimg" src="img/{{ $project->photo }}">
                                        <div class="recent-project-text">
                                            <p>{{ $project->name }}</p>
                                            <p>{{ $project->created_at }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>-->
    </div>
@endsection
