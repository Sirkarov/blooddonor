<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar users panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src={{asset('default_avatar.png')}} class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <div class="right dropdown">
                    <a class="right dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} {{ Auth::user()->surname }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        {{-- <a class="dropdown-item" href="{{route('user_profile',Auth::user()->id )}}">
                             Профил
                         </a>--}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            {{ __('Одјави се') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Навигација</li>
            <li class="active treeview menu-close">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Корисници</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu" style="">
                    <li><a href={{asset('admin/users')}}><i class="fa fa-user"></i> <span>Листа на Корисници</span></a></li>
                    <li><a href={{asset('admin/users/create')}}><i class="fa fa-user"></i> <span>Креирај Корисник</span></a></li>
                </ul>
            </li>
            <li class="active treeview menu-close">
                <a href="#">
                    <i class="fa fa-puzzle-piece"></i> <span>Крводарителски Акции</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu" style="">
                    <li><a href={{asset('admin/bloodactions')}}><i class="fa fa-puzzle-piece"></i>  <span>Листа на Крв. Акциии</span></a></li>
                    <li><a href={{asset('admin/bloodactions/create')}}><i class="fa fa-puzzle-piece"></i>  <span>Креирај Крв. Акција</span></a></li>
                </ul>
            </li>
            <li class="active">
                <a href="{{asset('admin/cities')}}">
                    <i class="fa fa-map-marker" aria-hidden="true"></i> <span>Градови</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li class="active">
                <a href="{{asset('admin/subscribers')}}">
                    <i class="fa fa-users" aria-hidden="true"></i> <span>Претплатници</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li class="active">
                <a href="{{asset('admin/posts')}}">
                    <i class="fa fa-list" aria-hidden="true"></i> <span>Огласи</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li class="active">
                <a href="{{asset('admin/questions')}}">
                    <i class="fa fa-question-circle"></i> <span>Прашања</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            {{--<li class="active">
                <a href="{{asset('admin/contacts')}}">
                    <i class="fa fa-check"></i> <span>Предлози</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>--}}
            <li class="active">
                <a href="{{asset('admin/terms')}}">
                    <i class="fa  fa-location-arrow"></i> <span>Термини</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
