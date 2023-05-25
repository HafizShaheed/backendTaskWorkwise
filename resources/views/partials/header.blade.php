<header>
    <div class="container">
      <div class="header-data">
        <div class="logo">
            <a href="index-2.html" title=""><img src="{{asset('images/logo.png')}}" alt=""></a>
        </div>
        <div class="search-bar"></div>
        <nav>
          <ul>
            <li>
              <a href="jobs" title="">
                <span><img src="{{asset('images/icon5.png')}}" alt=""></span>
                Jobs
              </a>
            </li>
          </ul>
        </nav>
          <div class="menu-btn">
              <a href="#" title=""><i class="fa fa-bars"></i></a>
          </div>
          <div class="user-account">
              <div class="user-info">
                  <img src="{{asset('images/resources/user.png')}}" alt="">
                  <a href="#" title="">{{ auth()->user()->last_name ? auth()->user()->first_name.' '.auth()->user()->last_name : auth()->user()->first_name }}</a>
                  <i class="la la-sort-down"></i>
              </div>

            
            
              <div class="user-account-settingss">
                  <h3 class="tc"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></h3>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
          </div>
      </div>
    </div>
  </header>
