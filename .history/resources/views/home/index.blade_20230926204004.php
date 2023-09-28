@extends('app.wrapper')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-9 content">
              <livewire:home.our-blog/>
        </div>
        <div class="sidebar col-lg-3">
            <livewire:app.sidebar/>
        </div>
    </div>

</div>

@endsection
