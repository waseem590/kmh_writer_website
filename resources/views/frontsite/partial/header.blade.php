<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            {{-- <a class="navbar-brand" href="index.html"><h1 style="color:black; font-weight:bold; 'Playfair Display', serif">Khalid Mehmood Khan</h1></a> --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{asset('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="testimonial.html">Testimonial</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('about_us')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('all_books')}}">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('all_articles')}}">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('my_family')}}">Family</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('contact_us')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
