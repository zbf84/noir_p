<?php 

	/**
	 * Template part for displaying header layout three
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package noir
	*/

   // info
   $eduker_topbar_switch = get_theme_mod( 'eduker_topbar_switch', false );
   $eduker_phone_num = get_theme_mod( 'eduker_phone_num', __( '+(088) 234 567 899', 'noir' ) );
   $eduker_mail_id = get_theme_mod( 'eduker_mail_id', __( 'info@noir.com', 'noir' ) );
   $eduker_address = get_theme_mod( 'eduker_address', __( 'Moon ave, New York, 2020 NY US', 'noir' ) );
   $eduker_address_url = get_theme_mod( 'eduker_address_url', __( 'https://goo.gl/maps/qzqY2PAcQwUz1BYN9', 'noir' ) );

   // contact button
   $eduker_button_text = get_theme_mod( 'eduker_button_text', __( 'Contact Us', 'noir' ) );
   $eduker_button_link = get_theme_mod( 'eduker_button_link', __( '#', 'noir' ) );

   // acc button
   $eduker_acc_button_text = get_theme_mod( 'eduker_acc_button_text', __( 'Login', 'noir' ) );
   $eduker_acc_button_link = get_theme_mod( 'eduker_acc_button_link', __( '#', 'noir' ) );

   // header right
   $eduker_search = get_theme_mod( 'eduker_search', false );
   $eduker_header_right = get_theme_mod( 'eduker_header_right', false );
   $eduker_menu_col = $eduker_header_right ? 'col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block' : 'col-xxl-10 col-xl-10 col-lg-9 d-none d-lg-block text-end';

?>


<header>
   <div class="header__area">
      <div class="header__bottom header__bottom-3">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-6 d-none d-lg-block">
                  <div class="header__call d-flex align-items-start">
                     <div class="header__call-icon mr-10">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1.045 25.495C1.045 26.035 1.165 26.59 1.42 27.13C1.675 27.67 2.005 28.18 2.44 28.66C3.175 29.47 3.985 30.055 4.9 30.43C5.8 30.805 6.775 31 7.825 31C9.355 31 10.99 30.64 12.715 29.905C14.44 29.17 16.165 28.18 17.875 26.935C19.6 25.675 21.235 24.28 22.795 22.735C24.34 21.175 25.735 19.54 26.98 17.83C28.21 16.12 29.2 14.41 29.92 12.715C30.64 11.005 31 9.37 31 7.81C31 6.79 30.82 5.815 30.46 4.915C30.1 4 29.53 3.16 28.735 2.41C27.775 1.465 26.725 1 25.615 1C25.195 1 24.775 1.09 24.4 1.27C24.01 1.45 23.665 1.72 23.395 2.11L19.915 7.015C19.645 7.39 19.45 7.735 19.315 8.065C19.18 8.38 19.105 8.695 19.105 8.98C19.105 9.34 19.21 9.7 19.42 10.045C19.615 10.39 19.9 10.75 20.26 11.11L21.4 12.295C21.565 12.46 21.64 12.655 21.64 12.895C21.64 13.015 21.625 13.12 21.595 13.24C21.55 13.36 21.505 13.45 21.475 13.54C21.205 14.035 20.74 14.68 20.08 15.46C19.405 16.24 18.685 17.035 17.905 17.83C17.095 18.625 16.315 19.36 15.52 20.035C14.74 20.695 14.095 21.145 13.585 21.415C13.51 21.445 13.42 21.49 13.315 21.535C13.195 21.58 13.075 21.595 12.94 21.595C12.685 21.595 12.49 21.505 12.325 21.34L11.185 20.215C10.81 19.84 10.45 19.555 10.105 19.375C9.76 19.165 9.415 19.06 9.04 19.06C8.755 19.06 8.455 19.12 8.125 19.255C7.795 19.39 7.45 19.585 7.075 19.84L2.11 23.365C1.72 23.635 1.45 23.95 1.285 24.325C1.135 24.7 1.045 25.075 1.045 25.495Z" stroke="#007A70" stroke-width="1.5" stroke-miterlimit="10"/>
                        </svg>                                 
                     </div>
                     <div class="header__call-content">
                        <?php if ( !empty( $eduker_phone_num ) ): ?>   
                        <h4><a href="tel:<?php echo esc_attr($eduker_phone_num); ?>"><?php echo esc_html($eduker_phone_num); ?></a></h4>
                        <?php endif; ?> 
                        <?php if ( !empty( $eduker_mail_id ) ): ?>   
                        <p><a href="mailto:<?php echo esc_attr($eduker_mail_id); ?>"><?php echo esc_html($eduker_mail_id); ?></a></p>
                        <?php endif; ?> 
                     </div>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-6">
                  <div class="logo text-lg-center">
                     <?php eduker_header_logo();?>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-8 col-6">
                  <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                     <div class="header__lang d-none d-md-block">
                        <?php eduker_header_lang_defualt(); ?>
                     </div>

                     <?php if ( !empty( $eduker_acc_button_link ) ): ?>
                     <div class="header__login-2 d-none d-md-flex align-items-center ml-20 pl-20">
                        <div class="header__login-icon mr-10">
                           <a href="sign-in.html">
                              <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.99995 6.83333C7.61078 6.83333 8.91662 5.5275 8.91662 3.91667C8.91662 2.30584 7.61078 1 5.99995 1C4.38912 1 3.08328 2.30584 3.08328 3.91667C3.08328 5.5275 4.38912 6.83333 5.99995 6.83333Z" stroke="#031220" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M11.0108 12.6667C11.0108 10.4092 8.76497 8.58333 5.99997 8.58333C3.23497 8.58333 0.989136 10.4092 0.989136 12.6667" stroke="#031220" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </a>
                        </div>
                        <div class="header__login-content">
                           <p><a href="<?php echo esc_html($eduker_acc_button_link); ?>"><?php echo esc_html__('Login','noir'); ?></a></p>
                           <p><a href="<?php echo esc_html($eduker_acc_button_link); ?>"><?php echo esc_html__('Register','noir'); ?></a></p>
                        </div>
                     </div>
                     <?php endif; ?>
                     <div class="header__hamburger ml-50 d-lg-none">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#offcanvasmodal" class="hamurger-btn">
                           <span></span>
                           <span></span>
                           <span></span>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="header__menu theme-bg-3 d-none d-lg-block">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xxl-8 col-xl-8 col-lg-8">
                  <div class="main-menu main-menu-3 d-flex align-items-center">
                     <div class="main-menu-icon mr-10">
                        <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1.8125 7.90625L3 6.9375V14C3 14.2708 3.09375 14.5 3.28125 14.6875C3.48958 14.8958 3.72917 15 4 15H7C7.27083 15 7.5 14.8958 7.6875 14.6875C7.89583 14.5 8 14.2708 8 14V10H10V14C10 14.2708 10.0938 14.5 10.2812 14.6875C10.4896 14.8958 10.7292 15 11 15H14C14.2708 15 14.5 14.8958 14.6875 14.6875C14.8958 14.5 15 14.2708 15 14V6.9375L16.1875 7.90625C16.2708 7.96875 16.375 8 16.5 8C16.6667 8 16.8021 7.9375 16.9062 7.8125C17.0938 7.54167 17.0625 7.30208 16.8125 7.09375L9.3125 1.09375C9.10417 0.947917 8.89583 0.947917 8.6875 1.09375L6 3.25V2C6 1.72917 5.89583 1.5 5.6875 1.3125C5.5 1.10417 5.27083 1 5 1C4.72917 1 4.48958 1.10417 4.28125 1.3125C4.09375 1.5 4 1.72917 4 2V4.84375L1.1875 7.09375C0.9375 7.30208 0.90625 7.54167 1.09375 7.8125C1.30208 8.0625 1.54167 8.09375 1.8125 7.90625ZM9 2.125L14 6.125V14H11V9H7V14H4V6.15625L9 2.125Z" fill="white"/>
                           <path d="M1.8125 7.90625L1.8696 7.98872L1.87571 7.98374L1.8125 7.90625ZM3 6.9375H3.1V6.72687L2.93679 6.86001L3 6.9375ZM3.28125 14.6875L3.21054 14.7582L3.28125 14.6875ZM7.6875 14.6875L7.62023 14.6128L7.61317 14.6206L7.6875 14.6875ZM8 10V9.9H7.9V10H8ZM10 10H10.1V9.9H10V10ZM10.2812 14.6875L10.2105 14.7582L10.2812 14.6875ZM14.6875 14.6875L14.6202 14.6128L14.6132 14.6206L14.6875 14.6875ZM15 6.9375L15.0632 6.86001L14.9 6.72687V6.9375H15ZM16.1875 7.90625L16.1242 7.9838L16.1275 7.98625L16.1875 7.90625ZM16.9062 7.8125L16.9834 7.87677L16.9885 7.86942L16.9062 7.8125ZM16.8125 7.09375L16.8765 7.01691L16.875 7.01566L16.8125 7.09375ZM9.3125 1.09375L9.3751 1.0155L9.36985 1.01183L9.3125 1.09375ZM8.6875 1.09375L8.63003 1.01165L8.62492 1.01575L8.6875 1.09375ZM6 3.25H5.9V3.45844L6.06258 3.328L6 3.25ZM5.6875 1.3125L5.61276 1.37977L5.6206 1.38683L5.6875 1.3125ZM4.28125 1.3125L4.35196 1.38321L4.28125 1.3125ZM4 4.84375L4.06247 4.92184L4.1 4.89181V4.84375H4ZM1.1875 7.09375L1.12502 7.01565L1.12348 7.01693L1.1875 7.09375ZM1.09375 7.8125L1.0112 7.86965L1.01693 7.87652L1.09375 7.8125ZM9 2.125L9.06247 2.04691L8.99976 1.99674L8.93723 2.04715L9 2.125ZM14 6.125H14.1V6.07694L14.0625 6.04691L14 6.125ZM14 14V14.1H14.1V14H14ZM11 14H10.9V14.1H11V14ZM11 9H11.1V8.9H11V9ZM7 9V8.9H6.9V9H7ZM7 14V14.1H7.1V14H7ZM4 14H3.9V14.1H4V14ZM4 6.15625L3.93723 6.0784L3.9 6.10842V6.15625H4ZM1.87571 7.98374L3.06321 7.01499L2.93679 6.86001L1.74929 7.82876L1.87571 7.98374ZM2.9 6.9375V14H3.1V6.9375H2.9ZM2.9 14C2.9 14.2967 3.00384 14.5515 3.21054 14.7582L3.35196 14.6168C3.18366 14.4485 3.1 14.2449 3.1 14H2.9ZM3.21054 14.7582C3.43581 14.9835 3.70018 15.1 4 15.1V14.9C3.75815 14.9 3.54336 14.8082 3.35196 14.6168L3.21054 14.7582ZM4 15.1H7V14.9H4V15.1ZM7 15.1C7.30029 15.1 7.55612 14.983 7.76183 14.7544L7.61317 14.6206C7.44388 14.8087 7.24138 14.9 7 14.9V15.1ZM7.7544 14.7618C7.98297 14.5561 8.1 14.3003 8.1 14H7.9C7.9 14.2414 7.8087 14.4439 7.6206 14.6132L7.7544 14.7618ZM8.1 14V10H7.9V14H8.1ZM8 10.1H10V9.9H8V10.1ZM9.9 10V14H10.1V10H9.9ZM9.9 14C9.9 14.2967 10.0038 14.5515 10.2105 14.7582L10.352 14.6168C10.1837 14.4485 10.1 14.2449 10.1 14H9.9ZM10.2105 14.7582C10.4358 14.9835 10.7002 15.1 11 15.1V14.9C10.7582 14.9 10.5434 14.8082 10.352 14.6168L10.2105 14.7582ZM11 15.1H14V14.9H11V15.1ZM14 15.1C14.3003 15.1 14.5561 14.983 14.7618 14.7544L14.6132 14.6206C14.4439 14.8087 14.2414 14.9 14 14.9V15.1ZM14.7544 14.7618C14.983 14.5561 15.1 14.3003 15.1 14H14.9C14.9 14.2414 14.8087 14.4439 14.6206 14.6132L14.7544 14.7618ZM15.1 14V6.9375H14.9V14H15.1ZM14.9368 7.01499L16.1243 7.98374L16.2507 7.82876L15.0632 6.86001L14.9368 7.01499ZM16.1275 7.98625C16.2314 8.06417 16.3578 8.1 16.5 8.1V7.9C16.3922 7.9 16.3103 7.87333 16.2475 7.82625L16.1275 7.98625ZM16.5 8.1C16.6955 8.1 16.8594 8.02495 16.9831 7.87652L16.8294 7.74848C16.7448 7.85005 16.6378 7.9 16.5 7.9V8.1ZM16.9885 7.86942C17.0912 7.7211 17.1424 7.56886 17.1226 7.41675C17.1027 7.2644 17.014 7.13152 16.8765 7.01693L16.7485 7.17057C16.861 7.26431 16.9129 7.35539 16.9243 7.44262C16.9357 7.5301 16.9088 7.63307 16.824 7.75558L16.9885 7.86942ZM16.875 7.01566L9.37497 1.01566L9.25003 1.17184L16.75 7.17184L16.875 7.01566ZM9.36985 1.01183C9.25264 0.929779 9.12884 0.884375 9 0.884375C8.87116 0.884375 8.74736 0.929779 8.63015 1.01183L8.74485 1.17567C8.83597 1.11189 8.92051 1.08437 9 1.08437C9.07949 1.08437 9.16403 1.11189 9.25515 1.17567L9.36985 1.01183ZM8.62492 1.01575L5.93742 3.172L6.06258 3.328L8.75008 1.17175L8.62492 1.01575ZM6.1 3.25V2H5.9V3.25H6.1ZM6.1 2C6.1 1.69971 5.98297 1.44388 5.7544 1.23817L5.6206 1.38683C5.8087 1.55612 5.9 1.75862 5.9 2H6.1ZM5.76183 1.2456C5.55612 1.01703 5.30029 0.9 5 0.9V1.1C5.24138 1.1 5.44388 1.1913 5.61317 1.3794L5.76183 1.2456ZM5 0.9C4.70018 0.9 4.43581 1.01652 4.21054 1.24179L4.35196 1.38321C4.54336 1.19182 4.75815 1.1 5 1.1V0.9ZM4.21054 1.24179C4.00384 1.44849 3.9 1.70328 3.9 2H4.1C4.1 1.75505 4.18366 1.55151 4.35196 1.38321L4.21054 1.24179ZM3.9 2V4.84375H4.1V2H3.9ZM3.93753 4.76566L1.12503 7.01566L1.24997 7.17184L4.06247 4.92184L3.93753 4.76566ZM1.12348 7.01693C0.985969 7.13152 0.897274 7.2644 0.877402 7.41675C0.857563 7.56886 0.908848 7.7211 1.01153 7.86942L1.17597 7.75558C1.09115 7.63307 1.06431 7.5301 1.07572 7.44262C1.0871 7.35539 1.13903 7.26431 1.25152 7.17057L1.12348 7.01693ZM1.01693 7.87652C1.13152 8.01403 1.2644 8.10273 1.41675 8.1226C1.56886 8.14244 1.7211 8.09115 1.86942 7.98847L1.75558 7.82403C1.63307 7.90885 1.5301 7.93569 1.44262 7.92428C1.35539 7.9129 1.26431 7.86097 1.17057 7.74848L1.01693 7.87652ZM8.93753 2.20309L13.9375 6.20309L14.0625 6.04691L9.06247 2.04691L8.93753 2.20309ZM13.9 6.125V14H14.1V6.125H13.9ZM14 13.9H11V14.1H14V13.9ZM11.1 14V9H10.9V14H11.1ZM11 8.9H7V9.1H11V8.9ZM6.9 9V14H7.1V9H6.9ZM7 13.9H4V14.1H7V13.9ZM4.1 14V6.15625H3.9V14H4.1ZM4.06277 6.2341L9.06277 2.20285L8.93723 2.04715L3.93723 6.0784L4.06277 6.2341Z" fill="#E7F4F3"/>
                        </svg>                                 
                     </div>
                     <nav>
                        <?php eduker_header_menu();?>
                     </nav>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4">
                  <div class="header__category d-flex align-items-center justify-content-end">
                     <div class="header__category-icon mr-10">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path class="header-dot-menu-opacity" opacity="0.7" d="M7.5217 2.9096C8.32516 2.9096 8.9765 2.25826 8.9765 1.4548C8.9765 0.651336 8.32516 0 7.5217 0C6.71823 0 6.06689 0.651336 6.06689 1.4548C6.06689 2.25826 6.71823 2.9096 7.5217 2.9096Z" fill="white"/>
                           <path d="M13.5193 2.9096C14.3227 2.9096 14.9741 2.25826 14.9741 1.4548C14.9741 0.651336 14.3227 0 13.5193 0C12.7158 0 12.0645 0.651336 12.0645 1.4548C12.0645 2.25826 12.7158 2.9096 13.5193 2.9096Z" fill="white"/>
                           <path d="M1.4548 2.9096C2.25826 2.9096 2.9096 2.25826 2.9096 1.4548C2.9096 0.651336 2.25826 0 1.4548 0C0.651336 0 0 0.651336 0 1.4548C0 2.25826 0.651336 2.9096 1.4548 2.9096Z" fill="white"/>
                           <path d="M7.5217 9.00193C8.32516 9.00193 8.9765 8.35059 8.9765 7.54713C8.9765 6.74367 8.32516 6.09233 7.5217 6.09233C6.71823 6.09233 6.06689 6.74367 6.06689 7.54713C6.06689 8.35059 6.71823 9.00193 7.5217 9.00193Z" fill="white"/>
                           <path class="header-dot-menu-opacity" opacity="0.7" d="M13.5193 9.00193C14.3227 9.00193 14.9741 8.35059 14.9741 7.54713C14.9741 6.74367 14.3227 6.09233 13.5193 6.09233C12.7158 6.09233 12.0645 6.74367 12.0645 7.54713C12.0645 8.35059 12.7158 9.00193 13.5193 9.00193Z" fill="white"/>
                           <path class="header-dot-menu-opacity" opacity="0.7" d="M7.5217 15C8.32516 15 8.9765 14.3487 8.9765 13.5452C8.9765 12.7417 8.32516 12.0904 7.5217 12.0904C6.71823 12.0904 6.06689 12.7417 6.06689 13.5452C6.06689 14.3487 6.71823 15 7.5217 15Z" fill="white"/>
                           <path d="M13.5193 15C14.3227 15 14.9741 14.3487 14.9741 13.5452C14.9741 12.7417 14.3227 12.0904 13.5193 12.0904C12.7158 12.0904 12.0645 12.7417 12.0645 13.5452C12.0645 14.3487 12.7158 15 13.5193 15Z" fill="white"/>
                           <path class="header-dot-menu-opacity" opacity="0.7" d="M1.4548 9.00193C2.25826 9.00193 2.9096 8.35059 2.9096 7.54713C2.9096 6.74367 2.25826 6.09233 1.4548 6.09233C0.651336 6.09233 0 6.74367 0 7.54713C0 8.35059 0.651336 9.00193 1.4548 9.00193Z" fill="white"/>
                           <path d="M1.4548 15C2.25826 15 2.9096 14.3487 2.9096 13.5452C2.9096 12.7417 2.25826 12.0904 1.4548 12.0904C0.651336 12.0904 0 12.7417 0 13.5452C0 14.3487 0.651336 15 1.4548 15Z" fill="white"/>
                        </svg>                                 
                     </div>
                     <div class="header__category-content">
                        <?php eduker_category_menu(); ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>


<section id="header-sticky" class="mobile__menu header__area">
   <div class="header__bottom">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-6 col-6">
               <div class="header__bottom-left d-flex align-items-center">
                  <div class="logo">
                     <?php eduker_header_logo();?>
                  </div>
                  <div class="main-menu main-menu-2 main-menu-mobile ml-30 pl-30">
                     <nav id="mobile-menu">
                        <?php eduker_header_menu();?>
                     </nav>
                  </div>
               </div>
            </div>
            <?php if ( !empty( $eduker_header_right ) ): ?>
            <div class="col-xxl-4 col-xl-3 col-lg-2 col-md-6 col-6">
               <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                  <?php if ( !empty( $eduker_acc_button_link ) ): ?>
                  <div class="header__action d-none d-xl-block">
                     <ul>
                        <li>
                           <a href="<?php echo esc_html($eduker_acc_button_link); ?>">
                              <svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M7.1466 8.96416C7.05493 8.95499 6.94493 8.95499 6.8441 8.96416C4.66243 8.89083 2.92993 7.10333 2.92993 4.90333C2.92993 2.65749 4.74493 0.833328 6.99993 0.833328C9.24576 0.833328 11.0699 2.65749 11.0699 4.90333C11.0608 7.10333 9.32826 8.89083 7.1466 8.96416Z" stroke="#0C140F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M2.56341 12.3467C0.345075 13.8317 0.345075 16.2517 2.56341 17.7275C5.08424 19.4142 9.21841 19.4142 11.7392 17.7275C13.9576 16.2425 13.9576 13.8225 11.7392 12.3467C9.22758 10.6692 5.09341 10.6692 2.56341 12.3467Z" stroke="#0C140F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <?php endif; ?>
                  <?php if ( !empty( $eduker_search ) ): ?>
                  <div class="header__search header__search-2 header__search-3 d-none d-xl-block">
                     <form action="<?php print esc_url( home_url( '/' ) );?>">
                        <div class="header__search-input">
                           <input type="text" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Search...', 'noir' );?>">
                           <button class="header__search-btn" type="submit">
                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M8.11111 15.2222C12.0385 15.2222 15.2222 12.0385 15.2222 8.11111C15.2222 4.18375 12.0385 1 8.11111 1C4.18375 1 1 4.18375 1 8.11111C1 12.0385 4.18375 15.2222 8.11111 15.2222Z" stroke="#3E8454" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M17 17L13.1333 13.1333" stroke="#3E8454" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </button>
                        </div>
                     </form>
                  </div>
                  <?php endif; ?>
                  <div class="header__hamburger ml-50 d-xl-none">
                     <button type="button" data-bs-toggle="modal" data-bs-target="#offcanvasmodal" class="hamurger-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                     </button>
                  </div>
               </div>
            </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>



<?php get_template_part( 'template-parts/header/header-side-info' ); ?>