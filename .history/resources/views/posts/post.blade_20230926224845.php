@extends('app.wrapper')
@section('content')
<section id="page-content" class="sidebar-right" style="transform: none;">
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">
            <!-- content -->

            <livewire:posts.single :post="$post"/>
            <!-- end: content -->
<livewire:app.sidebar/>
        </div>
    </div>
</section>
@endsection
