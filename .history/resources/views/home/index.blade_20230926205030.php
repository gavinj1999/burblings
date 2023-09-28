@extends('app.wrapper')
@section('content')
<div class="container">
    <div class="row">
        <livewire:home.our-blog-title />
        <div class="col-lg-9">
            <livewire:home.our-blog />
        </div>

        <div class="col-lg-3">
            <livewire:app.sidebar />
        </div>


    </div>

</div>

@endsection
