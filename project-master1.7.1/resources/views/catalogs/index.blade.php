@extends('layouts.app')

@section('content')
    <div class="container clearfix">
        <div class="search-boxes">
            <div class="panel">
                <div class="panel-heading">
                    Zoek Projecten
                </div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'catalogs', 'method'=>'get']) !!}
                    <div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
                      Naar wat ben je op zoek?
                      {!! Form::text('q', isset($q) ? $q : null, ['class'=>'form-search-input']) !!}
                      {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
                    </div>

                    {!! Form::hidden('cat', isset($selected_category) ? $selected_category->id : '') !!}

                    {!! Form::submit('Search', ['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="panel category-filter">
                <div class="panel-heading">
                    Filter door categorie
                </div>
                <div class="panel-body">
                    <ul>
                        <li ><a id='links-cat' href="{{ url('/catalogs') }}">Alle Projecten</a></li>
                        @foreach(App\Category::all() as $category)
                            <li ><a id='links-cat' href="{{ url('/catalogs?cat=' . $category->id)}}">{{ $category->title }}
                            {{ $category->total_products > 0 ? '(' . $category->total_products . ')' : ''}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="found-projects">
            <div class="title"><h1>Categorie : {{ isset($selected_category) ? $selected_category->title : 'All'}}</h1></div>
            @forelse ($products as $product)
                <div class="found-project">
                    <div class="found-project-column">
                        <h2 class="catalogs-project-link"><a class="project-link " href="catalogs/{{ $product->id }}">{{ $product->name }}</a></h2>
                        <div class="thumbnail">
                            <img src="{{ $product->photo_path }}" class="img-rounded">
                            <p><span class="bold">Beschrijving</span>: {{ str_limit($product->model, 150) }} </p>
                            <div class="found-project-category"><span class="bold">Category</span>:
                                @foreach ($product->categories as $category)
                                    <a id='links' class="category-link" href="{{ url('/catalogs?cat=' . $category->id)}}">
                                        <span class="label category label-primary">
                                        <i class="fa fa-btn fa-tags"></i>
                                        {{ $category->title }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-md-12 text-center">
                    <h1>:(</h1>
                    <p>Wooops! We kunnen niet vinden waar he naar op zoek bent.</p>
                </div>
            @endforelse
        </div>
        <div class="pull-right">{!! $products->links() !!}</div>
    </div>
    



@endsection
