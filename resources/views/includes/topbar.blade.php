<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
     <div class="br-header-left">
          <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
          <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
     </div><!-- br-header-left -->
     <div class="br-header-right">
          <nav class="nav">

               <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                         <img src="https://via.placeholder.com/500" class="wd-32 rounded-circle" alt="">
                         <span class="square-10 bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-250">
                         <div class="tx-center">
                              <a href=""><img src="https://via.placeholder.com/500" class="wd-80 rounded-circle" alt=""></a>
                              <h6 class="logged-fullname">{{ Auth::user()->name }}</h6>
                              <p>{{ Auth::user()->email }}</p>
                         </div>
                         <hr>
                         <hr>
                         <ul class="list-unstyled user-profile-nav">
                              <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                              <li>
                                   <form action="{{ route('do.logout') }}" method="post">
                                        @csrf
                                        <button type="submit" id="logout_button" class="d-none"></button>
                                   </form>
                                   <a onclick="document.getElementById('logout_button').click()" style="cursor: pointer;"><i class="icon ion-power"></i> Sign Out</a>
                              </li>
                         </ul>
                    </div><!-- dropdown-menu -->
               </div><!-- dropdown -->
          </nav>
     </div><!-- br-header-right -->
</div><!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->