@extends('layout.app')
@extends('layout.header')
@extends('layout.sidenav')
@section('content')
        <div class="card">
          <div class="card-body p-3">
            <p class="ps-2">Authentication</p>
            <!-- Page Item --><a class="affan-page-item" href="page-login.html">
              <div class="icon-wrapper"><i class="bi bi-lock"></i></div>Login<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-social-login.html">
              <div class="icon-wrapper"><i class="bi bi-lock"></i></div>Social Login<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-register.html">
              <div class="icon-wrapper"><i class="bi bi-shield-lock"></i></div>Register<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-otp.html">
              <div class="icon-wrapper"><i class="bi bi-phone"></i></div>OTP<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-otp-confirm.html">
              <div class="icon-wrapper"><i class="bi bi-phone"></i></div>OTP Confirm<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-forget-password.html">
              <div class="icon-wrapper"><i class="bi bi-key"></i></div>Forget Password<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-forget-password-success.html">
              <div class="icon-wrapper"><i class="bi bi-key"></i></div>Forget Password Success<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-change-password.html">
              <div class="icon-wrapper"><i class="bi bi-key"></i></div>Change Password<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-forget-password-failed.html">
              <div class="icon-wrapper"><i class="bi bi-key"></i></div>Forget Password Failed<i class="bi bi-chevron-right"></i></a>
            <p class="mt-3 ps-2">Chats</p>
            <!-- Page Item --><a class="affan-page-item" href="page-chat-users.html">
              <div class="icon-wrapper"><i class="bi bi-people"></i></div>Chat Users<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-chat.html">
              <div class="icon-wrapper"><i class="bi bi-chat-dots"></i></div>Chats<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-video-call.html">
              <div class="icon-wrapper"><i class="bi bi-camera-video"></i></div>Video Call<i class="bi bi-chevron-right"></i></a>
            <p class="mt-3 ps-2">eCommerce</p>
            <!-- Page Item --><a class="affan-page-item" href="page-shop-grid.html">
              <div class="icon-wrapper"><i class="bi bi-bag-check"></i></div>Shop Grid<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-shop-list.html">
              <div class="icon-wrapper"><i class="bi bi-bag-check"></i></div>Shop List<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-shop-details.html">
              <div class="icon-wrapper"><i class="bi bi-bag-check"></i></div>Shop Details<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-cart.html">
              <div class="icon-wrapper"><i class="bi bi-cart"></i></div>Cart<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-checkout.html">
              <div class="icon-wrapper"><i class="bi bi-cart-check"></i></div>Checkout<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-payment-confirm.html">
              <div class="icon-wrapper"><i class="bi bi-wallet2"></i></div>Order Confirmed<i class="bi bi-chevron-right"></i></a>
            <p class="mt-3 ps-2">Miscellaneous</p>
            <!-- Page Item --><a class="affan-page-item" href="page-about-us.html">
              <div class="icon-wrapper"><i class="bi bi-card-text"></i></div>About<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-team.html">
              <div class="icon-wrapper"><i class="bi bi-people"></i></div>Team<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-our-service.html">
              <div class="icon-wrapper"><i class="bi bi-grid-3x3-gap"></i></div>Service<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-privacy-policy.html">
              <div class="icon-wrapper"><i class="bi bi-hash"></i></div>Privacy Policy<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-invoice.html">
              <div class="icon-wrapper"><i class="bi bi-receipt"></i></div>Invoice<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-contact.html">
              <div class="icon-wrapper"><i class="bi bi-envelope"></i></div>Contact<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-faq.html">
              <div class="icon-wrapper"><i class="bi bi-question-octagon"></i></div>FAQ<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-language.html">
              <div class="icon-wrapper"><i class="bi bi-globe2"></i></div>Language<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-notifications.html">
              <div class="icon-wrapper"><i class="bi bi-exclamation-circle"></i></div>Notifications<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-notification-details.html">
              <div class="icon-wrapper"><i class="bi bi-exclamation-circle"></i></div>Notification Details<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-search-result.html">
              <div class="icon-wrapper"><i class="bi bi-search"></i></div>Search Result<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-fallback.html">
              <div class="icon-wrapper"><i class="bi bi-wifi-off"></i></div>Fallback/Offline Page<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-coming-soon.html">
              <div class="icon-wrapper"><i class="bi bi-clock"></i></div>Coming Soon<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-user-profile.html">
              <div class="icon-wrapper"><i class="bi bi-person"></i></div>User Profile<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-404.html">
              <div class="icon-wrapper"><i class="bi bi-bug"></i></div>404<i class="bi bi-chevron-right"></i></a>
            <p class="mt-3 ps-2">Blog</p>
            <!-- Page Item --><a class="affan-page-item" href="page-blog-grid.html">
              <div class="icon-wrapper"><i class="bi bi-newspaper"></i></div>Blog Grid<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-blog-list.html">
              <div class="icon-wrapper"><i class="bi bi-newspaper"></i></div>Blog List<i class="bi bi-chevron-right"></i></a>
            <!-- Page Item --><a class="affan-page-item" href="page-blog-details.html">
              <div class="icon-wrapper"><i class="bi bi-newspaper"></i></div>Blog Details<i class="bi bi-chevron-right"></i></a>
          </div>
        </div>
@endsection
@section('js')
@endsection