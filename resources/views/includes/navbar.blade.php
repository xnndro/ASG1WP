<div class="col-lg-12">
    <nav class="navbar bg-warning text-white d-flex justify-content-center" style="height:20vh;">
        <h1>Giant Book Supplier</h1>
    </nav>
</div>
<div class="col-lg-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                <!-- Left links -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    
                    <!-- Navbar dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            @php($categories = \App\Models\Categories::all())
                            @foreach($categories as $category)
                            <li><a class="dropdown-item" href="{{route('category',$category->id)}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{route('publisher')}}">Publisher</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
</div>