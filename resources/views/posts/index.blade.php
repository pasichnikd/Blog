@extends('layouts.layout', ['title' => 'Главная страница'])

@section('content')

    @if(isset($_GET['search']))
        @if(count($posts)>0)
            <h2>Результаты поиска по запросу "<?=$_GET['search']?>" </h2>
            <p class="lead">Всего найдено {{ count($posts) }}
                @if(count($posts)%10==1 and count($posts)!=11)
                    пост
                @else
                    @if(count($posts)%10>1 and count($posts)%10<5 and count($posts)!=12 and count($posts)!=13
                        and count($posts)!=14)
                    поста
                    @else
                    постов
                    @endif
                @endif
            </p>
        @else
            <h2>По запросу "<?=htmlspecialchars($_GET['search'])?>" ничего не найдено</h2>
            <a href="{{ route('post.index') }}" class="btn btn-outline-primary">На главную</a>
        @endif
    @endif

    <div class="row">
        @foreach($posts as $post)
        <div class="col-6">
            <div class="card">
                <div class="card-header"><h2>{{ $post->short_title }}</h2></div>
                <div class="card-body">
                    <div class="card-img" style="background-image:
                        url({{ $post->img ?? asset('img/default.jpg') }})"></div>
                    <div class="card-author">Автор: {{ $post->name }}</div>
                    <a href="{{ route('post.show', ['post' => $post->post_id]) }}"
                       class="btn btn-outline-primary">Читать далее...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    @if(!isset($_GET['search']))
    {{ $posts->links() }}
    @endif
@endsection
