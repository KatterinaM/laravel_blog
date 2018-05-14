@extends ('layouts.main')

    @section('content')
        <div class="inner">
            <div class="main">
                <section id="content">
                    @section('left_colomn')
                    @show

                    @section('right_colomn')
                    @show
                </section>
                <div class="block"></div>
            </div>
        </div>
    @endsection


