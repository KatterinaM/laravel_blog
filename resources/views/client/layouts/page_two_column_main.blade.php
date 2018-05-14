@extends ('layouts.main_two_colomn')

    @section('left_colomn')
        @include ('$page')
    @endsection

    @section('right_colomn')
        <article class="col-2">
            @include('parts.widgets.contacts')
            @include('parts.widgets.best_articles')
            @include('parts.widgets.tegs')
        </article>
    @endsection




