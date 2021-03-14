@extends('layouts.app')

@section('content')

<div class="col-md-12">
	<div class="col-md-12"><a href="/admin/add/portfolio/" class="btn btn-success">Добавить сайт</a></div>
    <h2>Мои сайты</h2>
    <div class="underline"></div>
    <div class="portfolio-container">
@foreach($portfolio as $data)
        <div class="portfolio-item animatedIn" style="border: 1px solid gray;margin-bottom: 1%;">
            <div class="portfolio-item-inner">
                <figure class="bubba-effect">
                    <img height="200px" width="350px" src="/{{$data->image}}">
                    <figcaption>
                        <h3>{{$data->title}}</h3>
                        <p>{{$data->mini_desc}}</p>
                    </figcaption>
                </figure>
                <div class="fullscreen-picture">
                    <img src="" data-src="{{ asset('/img/city.jpg') }}">
                    <div class="picture-text">
                        <h3 class="project-title">{{$data->title}}</h3>
                        <h4>Описание проекта:</h4>
                        <p>{{$data->description}}</p>
                        <p>{{$data->created_at}}</p>
                        <h4>Что было сделано мной:</h4>
                        <p class="project-done">Всё вышеперечисленное <a href="{{$data->link}}">Ссылка</a></p>
                        <a href="/admin/page/edit/portfolio/{{$data->id}}" class="project-done btn btn-success">Редактировать</a>
                    </div>
                </div>
            </div>
        </div>
@endforeach
     </div>
</div>

@endsection
