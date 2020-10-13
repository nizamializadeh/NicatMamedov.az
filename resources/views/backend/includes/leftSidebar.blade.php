<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{asset('admin/images/user.png')}}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{auth()->user()->name }}
            </div>
            <div class="email">
                {{auth()->user()->email}}
            </div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">

                    <li>
                        <a  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons">input</i>Sign Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="{{(request()->routeIs('author.index') || request()->routeIs('tag.index') || request()->routeIs('category.index')) ? 'active' : ''}}">
                    <a href="javascript:void(0);" class="menu-toggle ">
                        <i class="material-icons">fiber_new</i>
                        <span>Managment</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{request()->routeIs('slider.index') ? 'active' : ''}}">
                            <a href="{{route('slider.index')}}">Sliders</a>
                        </li>
                        <li class="{{request()->routeIs('service.index') ? 'active' : ''}}">
                            <a href="{{route('service.index')}}">Service</a>
                        </li>
                        <li class="{{request()->routeIs('about.index') ? 'active' : ''}}">
                            <a href="{{route('about.index')}}">About</a>
                        </li>

                        <li class="{{request()->routeIs('team.index') ? 'active' : ''}}">
                            <a href="{{route('team.index')}}">Team</a>
                        </li>
                        <li class="{{request()->routeIs('chees.index') ? 'active' : ''}}">
                            <a href="{{route('chees.index')}}">Chees history</a>
                        </li>
                        <li class="{{request()->routeIs('portfolio.index') ? 'active' : ''}}">
                            <a href="{{route('portfolio.index')}}">Portfolio</a>
                        </li>
                        <li class="{{request()->routeIs('gallery.index') ? 'active' : ''}}">
                            <a href="{{route('gallery.index')}}">Gallery</a>
                        </li>
                        <li class="{{request()->routeIs('blog.index') ? 'active' : ''}}">
                            <a href="{{route('blog.index')}}">Blog</a>
                        </li>
                        <li class="{{request()->routeIs('faq.index') ? 'active' : ''}}">
                            <a href="{{route('faq.index')}}">Faq</a>
                        </li>
                        <li class="{{request()->routeIs('category.index') ? 'active' : ''}}">
                            <a href="{{route('category.index')}}">Gallery   Category *</a>
                        </li>
                        <li class="{{request()->routeIs('type.index') ? 'active' : ''}}">
                            <a href="{{route('type.index')}}">Faq Header *</a>
                        </li>



                    </ul>
                </li>
            </ul>
        </div>

    <div class="legal">
        <div class="copyright">

            <p>Site by <a target="_blank" href="https://www.facebook.com/Nizamializadah">Nizami Alizade</a></p>
            © 2019

        </div>
    </div>
</aside>