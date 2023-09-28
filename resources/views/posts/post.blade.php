@extends('app.wrapper')
@section('content')

<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <!-- post content -->
            <div class="content col-lg-9">
                   <livewire:posts.single :post="$post"/>
            </div>
            <!-- end: post content -->
            <!-- Sidebar-->
            <div class="sidebar sticky-sidebar col-lg-3">
        <livewire:app.sidebar/>
                <!--end: widget newsletter-->
            </div>
            <!-- end: Sidebar-->
        </div>
    </div>
</section>


@endsection
