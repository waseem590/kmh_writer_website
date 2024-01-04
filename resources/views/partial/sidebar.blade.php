<style>
.pcoded[theme-layout=vertical] .pcoded-navbar .pcoded-item[item-border=true][item-border-style=solid] li>a:hover{
  background-color: #ffc107;
} 
</style>
<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Admin Board</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class>
                        <a href="{{route('dashboard')}}" class="waves-effect waves-dark bg-hover">
                            <span class="">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class>
                        <a href="{{route('books.lists')}}" class="waves-effect waves-dark bg-hover">
                            <span class="">Books List</span>
                        </a>
                    </li>
                    <li class>
                        <a href="{{route('new.books')}}" class="waves-effect waves-dark bg-hover">
                            <span class="">New Book</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class>
                        <a href="{{route('articles.lists')}}" class="waves-effect waves-dark bg-hover">
                            <span class="">Articles List</span>
                        </a>
                    </li>
                    <li class>
                        <a href="{{route('new.articles')}}" class="waves-effect waves-dark bg-hover">
                            <span class="">New Articles</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
