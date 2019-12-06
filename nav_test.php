<!DOCTYPE html>
<html lang="en">

<head>
    <title>Testing Nav</title>


</head>
    
<header class="cd-main-header js-cd-main-header">
   <div class="cd-logo-wrapper">
      <a href="#0" class="cd-logo"><img src="assets/img/cd-logo.svg" alt="Logo"></a>
    </div>
  
   <div class="cd-search js-cd-search">
      <form>
        <input class="reset" type="search" placeholder="Search...">
      </form>
    </div> <!-- cd-search -->

   <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>

   <ul class="cd-nav__list js-cd-nav__list">
      <li class="cd-nav__item"><a href="#0">Tour</a></li>
      <li class="cd-nav__item"><a href="#0">Support</a></li>
      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
         <a href="#0">
            <img src="assets/img/cd-avatar.svg" alt="avatar">
            <span>Account</span>
         </a>
    
         <ul class="cd-nav__sub-list">
            <li class="cd-nav__sub-item"><a href="#0">My Account</a></li>
            <!-- other list items here -->
         </ul>
      </li>
    </ul>
</header> <!-- .cd-main-header -->

<main class="cd-main-content">
   <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
         <li class="cd-side__label"><span>Main</span></li>
         <li class="cd-side__item cd-side__item--has-children cd-side__item--overview js-cd-item--has-children">
            <a href="#0">Overview</a>
          
            <ul class="cd-side__sub-list">
               <li class="cd-side__sub-item"><a href="#0">All Data</a></li>
               <!-- other list items here -->
            </ul>
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications cd-side__item--selected js-cd-item--has-children">
            <a href="#0">Notifications<span class="cd-count">3</span></a>
          
            <ul class="cd-side__sub-list">
               <li class="cd-side__sub-item"><a href="#0">All Notifications</a></li>
               <!-- other list items here -->
            </ul>
        </li>
    
        <!-- other list items here -->
      </ul>
    
      <!-- other unordered lists here -->
    </nav>

   <div class="cd-content-wrapper">
      <!-- main content here -->
   </div> <!-- .cd-content-wrapper -->
</main> <!-- .cd-main-content -->
</html>
