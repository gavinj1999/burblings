@extends('app.wrapper')
@section('content')
<section id="page-content" class="sidebar-right" style="transform: none;">
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">
            <!-- post content -->
            <div class="content col-lg-9">
                <!-- Page title -->
                <div class="page-title">
                    <h1>Blog - Right Sidebar</h1>
                    <div class="breadcrumb float-left">
                        <ul>
                            <li><a href="#">Home</a>
                            </li>
                            <li><a href="#">Blog</a>
                            </li>
                            <li class="active"><a href="#">Sidebar Right</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end: Page title -->
                <!-- Blog -->
                <div id="blog" class="post-thumbnails">
                    <!-- Post item-->
                    @foreach($posts as $post)
<livewire:posts.post-tile :post="$post"/>
                    <!-- end: Post item-->
                    @endforeach
                </div>
                <!-- end: Blog -->
                <!-- Pagination -->
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- end: Pagination -->
            </div>
            <!-- end: post content -->
            <livewire:app.sidebar/>
        </div>
    </div>
</section>
@endsection
