<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href=""><span>[</span>Welcome <i>{{ Auth::user()->name }}</i><span>]</span></a></div>
<div class="br-sideleft sideleft-scrollbar">
     <ul class="br-sideleft-menu" style="margin-top: 15px;;">
          <li class="br-menu-item">
               <a href="{{ route('dashboard') }}" class="br-menu-link active">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                    <span class="menu-item-label">Dashboard</span>
               </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->

          <!-- single menu start -->
          <li class="br-menu-item">
               <a href="{{ route('category.show') }}" class="br-menu-link">
                    <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                    <span class="menu-item-label">Category</span>
               </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
          <!-- single menu end -->

          <!-- single menu start -->
          <li class="br-menu-item">
               <a href="{{ route('product.show') }}" class="br-menu-link">
                    <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                    <span class="menu-item-label">Product</span>
               </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
          <!-- single menu end -->

          <!-- dropdown menu start -->
          <li class="br-menu-item">
               <a href="#" class="br-menu-link with-sub">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Cards &amp; Widgets</span>
               </a><!-- br-menu-link -->
               <ul class="br-menu-sub">
                    <li class="sub-item"><a href="card-dashboard.html" class="sub-link">Dashboard</a></li>
                    <li class="sub-item"><a href="card-social.html" class="sub-link">Blog &amp; Social Media</a></li>
                    <li class="sub-item"><a href="card-listing.html" class="sub-link">Shop &amp; Listing</a></li>
               </ul>
          </li>
          <!-- dropdown menu end -->

          
     </ul><!-- br-sideleft-menu -->
     <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->