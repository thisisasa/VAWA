<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>The VAWA | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/perfect-scrollbar.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
        <link defer="" rel="stylesheet" type="text/css" media="screen" href="assets/css/animate.css">
        <script src="assets/js/perfect-scrollbar.min.js"></script>
        <script defer="" src="assets/js/popper.min.js"></script>
        <script defer="" src="assets/js/tippy-bundle.umd.min.js"></script>
        <script defer="" src="assets/js/sweetalert.min.js"></script>
    </head>
    <body style="font-family:'Josefin Sans', sans-serif;" x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased" :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?  'dark' : '', $store.app.menu, $store.app.layout,$store.app.rtlClass]" >           
    <div  class="relative flex w-full items-center bg-white px-5 py-2.5 dark:bg-[#0e1726]">
                            <div class="hidden ltr:mr-2 rtl:ml-2 sm:block">
                                <ul class="flex items-center space-x-2 rtl:space-x-reverse dark:text-[#d0d2d6]">
                                    <li>
                                        <a href="index.html" class="main-logo flex shrink-0 items-center">
                                            <!-- <img class="inline w-8 ltr:-ml-1 rtl:-mr-1" src="assets/images/logo.png" alt="image"> -->
                                            <span class="hidden align-middle text-2xl font-semibold transition-all duration-300 ltr:ml-1.5 rtl:mr-1.5 dark:text-white-light md:inline">The VAWA </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div x-data="header" class="flex items-center space-x-1.5 ltr:ml-auto rtl:mr-auto rtl:space-x-reverse dark:text-[#d0d2d6] sm:flex-1 ltr:sm:ml-0 sm:rtl:mr-0 lg:space-x-2">  
                                <div class="sm:ltr:mr-auto sm:rtl:ml-auto" x-data="{ search: false }" @click.outside="search = false">   
                                </div>
                                <div>
                                    <a href="javascript:;" x-show="$store.app.theme === 'light'" class="flex items-center rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60" @click="$store.app.toggleTheme('dark')">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="1.5"></circle>
                                            <path d="M12 2V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                            <path d="M12 20V22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                            <path d="M4 12L2 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                            <path d="M22 12L20 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                            <path opacity="0.5" d="M19.7778 4.22266L17.5558 6.25424" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                            <path opacity="0.5" d="M4.22217 4.22266L6.44418 6.25424" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                            <path opacity="0.5" d="M6.44434 17.5557L4.22211 19.7779" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                            <path opacity="0.5" d="M19.7778 19.7773L17.5558 17.5551" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        </svg>
                                    </a>
                                    <a href="javascript:;" x-show="$store.app.theme === 'dark'" class="flex items-center rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60" @click="$store.app.toggleTheme('light')" style="display: none;">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.0672 11.8568L20.4253 11.469L21.0672 11.8568ZM12.1432 2.93276L11.7553 2.29085V2.29085L12.1432 2.93276ZM21.25 12C21.25 17.1086 17.1086 21.25 12 21.25V22.75C17.9371 22.75 22.75 17.9371 22.75 12H21.25ZM12 21.25C6.89137 21.25 2.75 17.1086 2.75 12H1.25C1.25 17.9371 6.06294 22.75 12 22.75V21.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75V1.25C6.06294 1.25 1.25 6.06294 1.25 12H2.75ZM15.5 14.25C12.3244 14.25 9.75 11.6756 9.75 8.5H8.25C8.25 12.5041 11.4959 15.75 15.5 15.75V14.25ZM20.4253 11.469C19.4172 13.1373 17.5882 14.25 15.5 14.25V15.75C18.1349 15.75 20.4407 14.3439 21.7092 12.2447L20.4253 11.469ZM9.75 8.5C9.75 6.41182 10.8627 4.5828 12.531 3.57467L11.7553 2.29085C9.65609 3.5593 8.25 5.86509 8.25 8.5H9.75ZM12 2.75C11.9115 2.75 11.8077 2.71008 11.7324 2.63168C11.6686 2.56527 11.6538 2.50244 11.6503 2.47703C11.6461 2.44587 11.6482 2.35557 11.7553 2.29085L12.531 3.57467C13.0342 3.27065 13.196 2.71398 13.1368 2.27627C13.0754 1.82126 12.7166 1.25 12 1.25V2.75ZM21.7092 12.2447C21.6444 12.3518 21.5541 12.3539 21.523 12.3497C21.4976 12.3462 21.4347 12.3314 21.3683 12.2676C21.2899 12.1923 21.25 12.0885 21.25 12H22.75C22.75 11.2834 22.1787 10.9246 21.7237 10.8632C21.286 10.804 20.7293 10.9658 20.4253 11.469L21.7092 12.2447Z" fill="currentColor"></path>
                                        </svg>
                                    </a>

                                </div>
                                <?php
                                if(isset($_SESSION['email'])) {
                                ?>
                                <div class="dropdown shrink-0" x-data="dropdown" @click.outside="open = false">
                                    <a href="cart.php" class="block rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60" @click="toggle">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                            <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" stroke="currentColor" stroke-width="1.5"></path>
                                            <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" stroke="currentColor" stroke-width="1.5"></path>
                                            <path d="M11 9H8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                            <path d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5" stroke="currentColor" stroke-width="1.5"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="dropdown shrink-0" x-data="dropdown" @click.outside="open = false">
                                    <a href="settings.php" class="block rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60" @click="toggle">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path  fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92894 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92894 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"    fill="#1C274C"/>
                                        <path  fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M11.9747 1.25C11.5303 1.24999 11.1592 1.24999 10.8546 1.27077C10.5375 1.29241 10.238 1.33905 9.94761 1.45933C9.27379 1.73844 8.73843 2.27379 8.45932 2.94762C8.31402 3.29842 8.27467 3.66812 8.25964 4.06996C8.24756 4.39299 8.08454 4.66251 7.84395 4.80141C7.60337 4.94031 7.28845 4.94673 7.00266 4.79568C6.64714 4.60777 6.30729 4.45699 5.93083 4.40743C5.20773 4.31223 4.47642 4.50819 3.89779 4.95219C3.64843 5.14353 3.45827 5.3796 3.28099 5.6434C3.11068 5.89681 2.92517 6.21815 2.70294 6.60307L2.67769 6.64681C2.45545 7.03172 2.26993 7.35304 2.13562 7.62723C1.99581 7.91267 1.88644 8.19539 1.84541 8.50701C1.75021 9.23012 1.94617 9.96142 2.39016 10.5401C2.62128 10.8412 2.92173 11.0602 3.26217 11.2741C3.53595 11.4461 3.68788 11.7221 3.68786 12C3.68785 12.2778 3.53592 12.5538 3.26217 12.7258C2.92169 12.9397 2.62121 13.1587 2.39007 13.4599C1.94607 14.0385 1.75012 14.7698 1.84531 15.4929C1.88634 15.8045 1.99571 16.0873 2.13552 16.3727C2.26983 16.6469 2.45535 16.9682 2.67758 17.3531L2.70284 17.3969C2.92507 17.7818 3.11058 18.1031 3.28089 18.3565C3.45817 18.6203 3.64833 18.8564 3.89769 19.0477C4.47632 19.4917 5.20763 19.6877 5.93073 19.5925C6.30717 19.5429 6.647 19.3922 7.0025 19.2043C7.28833 19.0532 7.60329 19.0596 7.8439 19.1986C8.08452 19.3375 8.24756 19.607 8.25964 19.9301C8.27467 20.3319 8.31403 20.7016 8.45932 21.0524C8.73843 21.7262 9.27379 22.2616 9.94761 22.5407C10.238 22.661 10.5375 22.7076 10.8546 22.7292C11.1592 22.75 11.5303 22.75 11.9747 22.75H12.0252C12.4697 22.75 12.8407 22.75 13.1454 22.7292C13.4625 22.7076 13.762 22.661 14.0524 22.5407C14.7262 22.2616 15.2616 21.7262 15.5407 21.0524C15.686 20.7016 15.7253 20.3319 15.7403 19.93C15.7524 19.607 15.9154 19.3375 16.156 19.1985C16.3966 19.0596 16.7116 19.0532 16.9974 19.2042C17.3529 19.3921 17.6927 19.5429 18.0692 19.5924C18.7923 19.6876 19.5236 19.4917 20.1022 19.0477C20.3516 18.8563 20.5417 18.6203 20.719 18.3565C20.8893 18.1031 21.0748 17.7818 21.297 17.3969L21.3223 17.3531C21.5445 16.9682 21.7301 16.6468 21.8644 16.3726C22.0042 16.0872 22.1135 15.8045 22.1546 15.4929C22.2498 14.7697 22.0538 14.0384 21.6098 13.4598C21.3787 13.1586 21.0782 12.9397 20.7378 12.7258C20.464 12.5538 20.3121 12.2778 20.3121 11.9999C20.3121 11.7221 20.464 11.4462 20.7377 11.2742C21.0783 11.0603 21.3788 10.8414 21.6099 10.5401C22.0539 9.96149 22.2499 9.23019 22.1547 8.50708C22.1136 8.19546 22.0043 7.91274 21.8645 7.6273C21.7302 7.35313 21.5447 7.03183 21.3224 6.64695L21.2972 6.60318C21.0749 6.21825 20.8894 5.89688 20.7191 5.64347C20.5418 5.37967 20.3517 5.1436 20.1023 4.95225C19.5237 4.50826 18.7924 4.3123 18.0692 4.4075C17.6928 4.45706 17.353 4.60782 16.9975 4.79572C16.7117 4.94679 16.3967 4.94036 16.1561 4.80144C15.9155 4.66253 15.7524 4.39297 15.7403 4.06991C15.7253 3.66808 15.686 3.2984 15.5407 2.94762C15.2616 2.27379 14.7262 1.73844 14.0524 1.45933C13.762 1.33905 13.4625 1.29241 13.1454 1.27077C12.8407 1.24999 12.4697 1.24999 12.0252 1.25H11.9747ZM10.5216 2.84515C10.5988 2.81319 10.716 2.78372 10.9567 2.76729C11.2042 2.75041 11.5238 2.75 12 2.75C12.4762 2.75 12.7958 2.75041 13.0432 2.76729C13.284 2.78372 13.4012 2.81319 13.4783 2.84515C13.7846 2.97202 14.028 3.21536 14.1548 3.52165C14.1949 3.61826 14.228 3.76887 14.2414 4.12597C14.271 4.91835 14.68 5.68129 15.4061 6.10048C16.1321 6.51968 16.9974 6.4924 17.6984 6.12188C18.0143 5.9549 18.1614 5.90832 18.265 5.89467C18.5937 5.8514 18.9261 5.94047 19.1891 6.14228C19.2554 6.19312 19.3395 6.27989 19.4741 6.48016C19.6125 6.68603 19.7726 6.9626 20.0107 7.375C20.2488 7.78741 20.4083 8.06438 20.5174 8.28713C20.6235 8.50382 20.6566 8.62007 20.6675 8.70287C20.7108 9.03155 20.6217 9.36397 20.4199 9.62698C20.3562 9.70995 20.2424 9.81399 19.9397 10.0041C19.2684 10.426 18.8122 11.1616 18.8121 11.9999C18.8121 12.8383 19.2683 13.574 19.9397 13.9959C20.2423 14.186 20.3561 14.29 20.4198 14.373C20.6216 14.636 20.7107 14.9684 20.6674 15.2971C20.6565 15.3799 20.6234 15.4961 20.5173 15.7128C20.4082 15.9355 20.2487 16.2125 20.0106 16.6249C19.7725 17.0373 19.6124 17.3139 19.474 17.5198C19.3394 17.72 19.2553 17.8068 19.189 17.8576C18.926 18.0595 18.5936 18.1485 18.2649 18.1053C18.1613 18.0916 18.0142 18.045 17.6983 17.8781C16.9973 17.5075 16.132 17.4803 15.4059 17.8995C14.68 18.3187 14.271 19.0816 14.2414 19.874C14.228 20.2311 14.1949 20.3817 14.1548 20.4784C14.028 20.7846 13.7846 21.028 13.4783 21.1549C13.4012 21.1868 13.284 21.2163 13.0432 21.2327C12.7958 21.2496 12.4762 21.25 12 21.25C11.5238 21.25 11.2042 21.2496 10.9567 21.2327C10.716 21.2163 10.5988 21.1868 10.5216 21.1549C10.2154 21.028 9.97201 20.7846 9.84514 20.4784C9.80512 20.3817 9.77195 20.2311 9.75859 19.874C9.72896 19.0817 9.31997 18.3187 8.5939 17.8995C7.86784 17.4803 7.00262 17.5076 6.30158 17.8781C5.98565 18.0451 5.83863 18.0917 5.73495 18.1053C5.40626 18.1486 5.07385 18.0595 4.81084 17.8577C4.74458 17.8069 4.66045 17.7201 4.52586 17.5198C4.38751 17.314 4.22736 17.0374 3.98926 16.625C3.75115 16.2126 3.59171 15.9356 3.4826 15.7129C3.37646 15.4962 3.34338 15.3799 3.33248 15.2971C3.28921 14.9684 3.37828 14.636 3.5801 14.373C3.64376 14.2901 3.75761 14.186 4.0602 13.9959C4.73158 13.5741 5.18782 12.8384 5.18786 12.0001C5.18791 11.1616 4.73165 10.4259 4.06021 10.004C3.75769 9.81389 3.64385 9.70987 3.58019 9.62691C3.37838 9.3639 3.28931 9.03149 3.33258 8.7028C3.34348 8.62001 3.37656 8.50375 3.4827 8.28707C3.59181 8.06431 3.75125 7.78734 3.98935 7.37493C4.22746 6.96253 4.3876 6.68596 4.52596 6.48009C4.66055 6.27983 4.74468 6.19305 4.81093 6.14222C5.07395 5.9404 5.40636 5.85133 5.73504 5.8946C5.83873 5.90825 5.98576 5.95483 6.30173 6.12184C7.00273 6.49235 7.86791 6.51962 8.59394 6.10045C9.31998 5.68128 9.72896 4.91837 9.75859 4.12602C9.77195 3.76889 9.80512 3.61827 9.84514 3.52165C9.97201 3.21536 10.2154 2.97202 10.5216 2.84515Z" fill="#1C274C"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="dropdown shrink-0" x-data="dropdown" @click.outside="open = false">
                                    <a href="logout.php" class="block rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60" @click="toggle">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path  fill="currentColor" d="M15.5303 12.5303C15.8232 12.2374 15.8232 11.7626 15.5303 11.4697L13.0303 8.96967C12.7374 8.67678 12.2626 8.67678 11.9697 8.96967C11.6768 9.26256 11.6768 9.73744 11.9697 10.0303L13.1893 11.25H6C5.58579 11.25 5.25 11.5858 5.25 12C5.25 12.4142 5.58579 12.75 6 12.75H13.1893L11.9697 13.9697C11.6768 14.2626 11.6768 14.7374 11.9697 15.0303C12.2626 15.3232 12.7374 15.3232 13.0303 15.0303L15.5303 12.5303Z" fill="#1C274C"/>
                                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M13.9451 1.25H15.0549C16.4225 1.24998 17.5248 1.24996 18.3918 1.36652C19.2919 1.48754 20.0497 1.74643 20.6517 2.34835C21.2536 2.95027 21.5125 3.70814 21.6335 4.60825C21.75 5.47522 21.75 6.57754 21.75 7.94513V16.0549C21.75 17.4225 21.75 18.5248 21.6335 19.3918C21.5125 20.2919 21.2536 21.0497 20.6517 21.6517C20.0497 22.2536 19.2919 22.5125 18.3918 22.6335C17.5248 22.75 16.4225 22.75 15.0549 22.75H13.9451C12.5775 22.75 11.4752 22.75 10.6083 22.6335C9.70814 22.5125 8.95027 22.2536 8.34835 21.6517C7.94855 21.2518 7.70008 20.7832 7.54283 20.2498C6.59156 20.2486 5.79901 20.2381 5.15689 20.1518C4.39294 20.0491 3.7306 19.8268 3.20191 19.2981C2.67321 18.7694 2.45093 18.1071 2.34822 17.3431C2.24996 16.6123 2.24998 15.6865 2.25 14.5537V9.44631C2.24998 8.31349 2.24996 7.38774 2.34822 6.65689C2.45093 5.89294 2.67321 5.2306 3.20191 4.7019C3.7306 4.17321 4.39294 3.95093 5.15689 3.84822C5.79901 3.76189 6.59156 3.75142 7.54283 3.75017C7.70008 3.21677 7.94855 2.74816 8.34835 2.34835C8.95027 1.74643 9.70814 1.48754 10.6083 1.36652C11.4752 1.24996 12.5775 1.24998 13.9451 1.25ZM7.25 16.0549C7.24999 17.1048 7.24997 17.9983 7.30271 18.7491C6.46829 18.7459 5.84797 18.7312 5.35676 18.6652C4.75914 18.5848 4.46611 18.441 4.26257 18.2374C4.05903 18.0339 3.91519 17.7409 3.83484 17.1432C3.7516 16.5241 3.75 15.6997 3.75 14.5V9.5C3.75 8.30029 3.7516 7.47595 3.83484 6.85676C3.91519 6.25914 4.05903 5.9661 4.26257 5.76256C4.46611 5.55902 4.75914 5.41519 5.35676 5.33484C5.84797 5.2688 6.46829 5.25415 7.30271 5.25091C7.24997 6.00167 7.24999 6.89522 7.25 7.94512L7.25 8C7.25 8.41422 7.58579 8.75 8 8.75C8.41422 8.75 8.75 8.41422 8.75 8C8.75 6.56459 8.7516 5.56347 8.85315 4.80812C8.9518 4.07435 9.13225 3.68577 9.40901 3.40901C9.68578 3.13225 10.0743 2.9518 10.8081 2.85315C11.5635 2.75159 12.5646 2.75 14 2.75H15C16.4354 2.75 17.4365 2.75159 18.1919 2.85315C18.9257 2.9518 19.3142 3.13225 19.591 3.40901C19.8678 3.68577 20.0482 4.07435 20.1469 4.80812C20.2484 5.56347 20.25 6.56459 20.25 8V16C20.25 17.4354 20.2484 18.4365 20.1469 19.1919C20.0482 19.9257 19.8678 20.3142 19.591 20.591C19.3142 20.8678 18.9257 21.0482 18.1919 21.1469C17.4365 21.2484 16.4354 21.25 15 21.25H14C12.5646 21.25 11.5635 21.2484 10.8081 21.1469C10.0743 21.0482 9.68578 20.8678 9.40901 20.591C9.13225 20.3142 8.9518 19.9257 8.85315 19.1919C8.7516 18.4365 8.75 17.4354 8.75 16C8.75 15.5858 8.41422 15.25 8 15.25C7.58579 15.25 7.25 15.5858 7.25 16L7.25 16.0549Z" fill="#1C274C"/>
                                        </svg>
                                    </a>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="relative flex flex-col justify-center rounded-md bg-white/60 backdrop-blur-lg dark:bg-black/50 px-6 lg:min-h-[758px] py-20">
                            <div class="mx-auto w-full max-w-[440px]">
                                <div class="mb-10">
                                    <h1 class="text-3xl font-extrabold uppercase !leading-snug text-primary md:text-4xl">Log in</h1>
                                    <p class="text-base font-bold leading-normal text-white-dark">Enter your email and password to login</p>
                                </div>
                                
                                <form class="space-y-5 dark:text-white" action="login_submit.php" method="POST" >
                                    <div>
                                        <label for="Email">Email</label>
                                        <div class="relative text-white-dark">
                                        <!-- <input type="text" id="email" name="email"><br><br> -->
                                            <input id="Email" type="text" placeholder="Enter Email" class="form-input ps-10 placeholder:text-white-dark" name="email">
                                            <span class="absolute start-4 top-1/2 -translate-y-1/2">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path opacity="0.5" d="M10.65 2.25H7.35C4.23873 2.25 2.6831 2.25 1.71655 3.23851C0.75 4.22703 0.75 5.81802 0.75 9C0.75 12.182 0.75 13.773 1.71655 14.7615C2.6831 15.75 4.23873 15.75 7.35 15.75H10.65C13.7613 15.75 15.3169 15.75 16.2835 14.7615C17.25 13.773 17.25 12.182 17.25 9C17.25 5.81802 17.25 4.22703 16.2835 3.23851C15.3169 2.25 13.7613 2.25 10.65 2.25Z" fill="currentColor"></path>
                                                    <path d="M14.3465 6.02574C14.609 5.80698 14.6445 5.41681 14.4257 5.15429C14.207 4.89177 13.8168 4.8563 13.5543 5.07507L11.7732 6.55931C11.0035 7.20072 10.4691 7.6446 10.018 7.93476C9.58125 8.21564 9.28509 8.30993 9.00041 8.30993C8.71572 8.30993 8.41956 8.21564 7.98284 7.93476C7.53168 7.6446 6.9973 7.20072 6.22761 6.55931L4.44652 5.07507C4.184 4.8563 3.79384 4.89177 3.57507 5.15429C3.3563 5.41681 3.39177 5.80698 3.65429 6.02574L5.4664 7.53583C6.19764 8.14522 6.79033 8.63914 7.31343 8.97558C7.85834 9.32604 8.38902 9.54743 9.00041 9.54743C9.6118 9.54743 10.1425 9.32604 10.6874 8.97558C11.2105 8.63914 11.8032 8.14522 12.5344 7.53582L14.3465 6.02574Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="Password">Password</label>
                                        <div class="relative text-white-dark">
                                        <!-- <input type="text" id="password" name="password"><br><br> -->
                                            <input id="Password" type="password" placeholder="Enter Password" class="form-input ps-10 placeholder:text-white-dark" name="password">
                                            <span class="absolute start-4 top-1/2 -translate-y-1/2">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path opacity="0.5" d="M1.5 12C1.5 9.87868 1.5 8.81802 2.15901 8.15901C2.81802 7.5 3.87868 7.5 6 7.5H12C14.1213 7.5 15.182 7.5 15.841 8.15901C16.5 8.81802 16.5 9.87868 16.5 12C16.5 14.1213 16.5 15.182 15.841 15.841C15.182 16.5 14.1213 16.5 12 16.5H6C3.87868 16.5 2.81802 16.5 2.15901 15.841C1.5 15.182 1.5 14.1213 1.5 12Z" fill="currentColor"></path>
                                                    <path d="M6 12.75C6.41421 12.75 6.75 12.4142 6.75 12C6.75 11.5858 6.41421 11.25 6 11.25C5.58579 11.25 5.25 11.5858 5.25 12C5.25 12.4142 5.58579 12.75 6 12.75Z" fill="currentColor"></path>
                                                    <path d="M9 12.75C9.41421 12.75 9.75 12.4142 9.75 12C9.75 11.5858 9.41421 11.25 9 11.25C8.58579 11.25 8.25 11.5858 8.25 12C8.25 12.4142 8.58579 12.75 9 12.75Z" fill="currentColor"></path>
                                                    <path d="M12.75 12C12.75 12.4142 12.4142 12.75 12 12.75C11.5858 12.75 11.25 12.4142 11.25 12C11.25 11.5858 11.5858 11.25 12 11.25C12.4142 11.25 12.75 11.5858 12.75 12Z" fill="currentColor"></path>
                                                    <path d="M5.0625 6C5.0625 3.82538 6.82538 2.0625 9 2.0625C11.1746 2.0625 12.9375 3.82538 12.9375 6V7.50268C13.363 7.50665 13.7351 7.51651 14.0625 7.54096V6C14.0625 3.20406 11.7959 0.9375 9 0.9375C6.20406 0.9375 3.9375 3.20406 3.9375 6V7.54096C4.26488 7.51651 4.63698 7.50665 5.0625 7.50268V6Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-gradient !mt-6 w-full border-0 uppercase shadow-[0_10px_20px_-10px_rgba(67,97,238,0.44)]">
                                        Log in
                                    </button>
                                </form>
                                <div class="relative my-7 text-center md:mb-9">
                                    <span class="absolute inset-x-0 top-1/2 h-px w-full -translate-y-1/2 bg-white-light dark:bg-white-dark"></span>
                                    <span class="relative bg-white px-2 font-bold uppercase text-white-dark dark:bg-dark dark:text-white-light">or</span>
                                </div>
                                <div class="mb-10 md:mb-[60px]">
                                    <ul class="flex justify-center gap-3.5">
                                        <li>
                                            <a href="javascript:" class="inline-flex h-8 w-8 items-center justify-center rounded-full p-0 transition hover:scale-110" style="background: linear-gradient(135deg, rgb(0 0 0) 0%, rgba(67, 97, 238, 1) 100%);">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M8 2.05C9.925 2.05 10.1875 2.05 10.975 2.05C11.675 2.05 12.025 2.225 12.2875 2.3125C12.6375 2.4875 12.9 2.575 13.1625 2.8375C13.425 3.1 13.6 3.3625 13.6875 3.7125C13.775 3.975 13.8625 4.325 13.95 5.025C13.95 5.8125 13.95 5.9875 13.95 8C13.95 10.0125 13.95 10.1875 13.95 10.975C13.95 11.675 13.775 12.025 13.6875 12.2875C13.5125 12.6375 13.425 12.9 13.1625 13.1625C12.9 13.425 12.6375 13.6 12.2875 13.6875C12.025 13.775 11.675 13.8625 10.975 13.95C10.1875 13.95 10.0125 13.95 8 13.95C5.9875 13.95 5.8125 13.95 5.025 13.95C4.325 13.95 3.975 13.775 3.7125 13.6875C3.3625 13.5125 3.1 13.425 2.8375 13.1625C2.575 12.9 2.4 12.6375 2.3125 12.2875C2.225 12.025 2.1375 11.675 2.05 10.975C2.05 10.1875 2.05 10.0125 2.05 8C2.05 5.9875 2.05 5.8125 2.05 5.025C2.05 4.325 2.225 3.975 2.3125 3.7125C2.4875 3.3625 2.575 3.1 2.8375 2.8375C3.1 2.575 3.3625 2.4 3.7125 2.3125C3.975 2.225 4.325 2.1375 5.025 2.05C5.8125 2.05 6.075 2.05 8 2.05ZM8 0.737503C5.9875 0.737503 5.8125 0.737503 5.025 0.737503C4.2375 0.737503 3.7125 0.912504 3.275 1.0875C2.8375 1.2625 2.4 1.525 1.9625 1.9625C1.525 2.4 1.35 2.75 1.0875 3.275C0.912504 3.7125 0.825003 4.2375 0.737503 5.025C0.737503 5.8125 0.737503 6.075 0.737503 8C0.737503 10.0125 0.737503 10.1875 0.737503 10.975C0.737503 11.7625 0.912504 12.2875 1.0875 12.725C1.2625 13.1625 1.525 13.6 1.9625 14.0375C2.4 14.475 2.75 14.65 3.275 14.9125C3.7125 15.0875 4.2375 15.175 5.025 15.2625C5.8125 15.2625 6.075 15.2625 8 15.2625C9.925 15.2625 10.1875 15.2625 10.975 15.2625C11.7625 15.2625 12.2875 15.0875 12.725 14.9125C13.1625 14.7375 13.6 14.475 14.0375 14.0375C14.475 13.6 14.65 13.25 14.9125 12.725C15.0875 12.2875 15.175 11.7625 15.2625 10.975C15.2625 10.1875 15.2625 9.925 15.2625 8C15.2625 6.075 15.2625 5.8125 15.2625 5.025C15.2625 4.2375 15.0875 3.7125 14.9125 3.275C14.7375 2.8375 14.475 2.4 14.0375 1.9625C13.6 1.525 13.25 1.35 12.725 1.0875C12.2875 0.912504 11.7625 0.825003 10.975 0.737503C10.1875 0.737503 10.0125 0.737503 8 0.737503Z" fill="white"></path>
                                                    <path d="M8 4.2375C5.9 4.2375 4.2375 5.9 4.2375 8C4.2375 10.1 5.9 11.7625 8 11.7625C10.1 11.7625 11.7625 10.1 11.7625 8C11.7625 5.9 10.1 4.2375 8 4.2375ZM8 10.45C6.6875 10.45 5.55 9.4 5.55 8C5.55 6.6875 6.6 5.55 8 5.55C9.3125 5.55 10.45 6.6 10.45 8C10.45 9.3125 9.3125 10.45 8 10.45Z" fill="white"></path>
                                                    <path d="M11.85 5.025C12.3333 5.025 12.725 4.63325 12.725 4.15C12.725 3.66675 12.3333 3.275 11.85 3.275C11.3668 3.275 10.975 3.66675 10.975 4.15C10.975 4.63325 11.3668 5.025 11.85 5.025Z" fill="white"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:" class="inline-flex h-8 w-8 items-center justify-center rounded-full p-0 transition hover:scale-110" style="background: linear-gradient(135deg, rgb(0 0 0) 0%, rgba(67, 97, 238, 1) 100%);">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                                    <path d="M14 7C14 3.15 10.85 0 7 0C3.15 0 0 3.15 0 7C0 10.5 2.5375 13.3875 5.8625 13.9125V9.0125H4.1125V7H5.8625V5.425C5.8625 3.675 6.9125 2.7125 8.4875 2.7125C9.275 2.7125 10.0625 2.8875 10.0625 2.8875V4.6375H9.1875C8.3125 4.6375 8.05 5.1625 8.05 5.6875V7H9.975L9.625 9.0125H7.9625V14C11.4625 13.475 14 10.5 14 7Z" fill="white"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:" class="inline-flex h-8 w-8 items-center justify-center rounded-full p-0 transition hover:scale-110" style="background: linear-gradient(135deg, rgb(0 0 0) 0%, rgba(67, 97, 238, 1) 100%);">
                                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none">
                                                    <path d="M14 1.625C13.475 1.8875 12.95 1.975 12.3375 2.0625C12.95 1.7125 13.3875 1.1875 13.5625 0.4875C13.0375 0.8375 12.425 1.0125 11.725 1.1875C11.2 0.6625 10.4125 0.3125 9.625 0.3125C7.7875 0.3125 6.3875 2.0625 6.825 3.8125C4.4625 3.725 2.3625 2.5875 0.875 0.8375C0.0875 2.15 0.525 3.8125 1.75 4.6875C1.3125 4.6875 0.875 4.5125 0.4375 4.3375C0.4375 5.65 1.4 6.875 2.7125 7.225C2.275 7.3125 1.8375 7.4 1.4 7.3125C1.75 8.45 2.8 9.325 4.1125 9.325C3.0625 10.1125 1.4875 10.55 0 10.375C1.3125 11.1625 2.8 11.6875 4.375 11.6875C9.7125 11.6875 12.6875 7.225 12.5125 3.1125C13.125 2.7625 13.65 2.2375 14 1.625Z" fill="white"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:" class="inline-flex h-8 w-8 items-center justify-center rounded-full p-0 transition hover:scale-110" style="background: linear-gradient(135deg, rgb(0 0 0) 0%, rgba(67, 97, 238, 1) 100%);">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8512 7.15912C13.8512 6.66275 13.8066 6.18548 13.7239 5.72729H7.13116V8.43503H10.8984C10.7362 9.31003 10.243 10.0514 9.50162 10.5478V12.3041H11.7639C13.0875 11.0855 13.8512 9.29094 13.8512 7.15912Z" fill="white"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.13089 14C9.0209 14 10.6054 13.3731 11.7636 12.3041L9.50135 10.5477C8.87454 10.9677 8.07272 11.2159 7.13089 11.2159C5.30771 11.2159 3.76452 9.9845 3.21407 8.32996H0.875427V10.1436C2.02725 12.4313 4.39453 14 7.13089 14Z" fill="white"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.21435 8.32997C3.07435 7.90997 2.99481 7.46133 2.99481 6.99997C2.99481 6.5386 3.07435 6.08996 3.21435 5.66996V3.85632H0.875712C0.40162 4.80133 0.131165 5.87042 0.131165 6.99997C0.131165 8.12951 0.40162 9.19861 0.875712 10.1436L3.21435 8.32997Z" fill="white"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.13089 2.7841C8.15862 2.7841 9.08135 3.13728 9.80681 3.83092L11.8145 1.82319C10.6023 0.693638 9.01772 0 7.13089 0C4.39453 0 2.02725 1.56864 0.875427 3.85637L3.21407 5.67001C3.76452 4.01546 5.30771 2.7841 7.13089 2.7841Z" fill="white"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-center dark:text-white">
                                    Don't have an account ?
                                    <a href="signup.php" class="uppercase text-primary underline transition hover:text-black dark:hover:text-white">Register</a>
                                </div>
                            </div>
                            <?php
                                include 'includes/footer.php';
                            ?>
                        </div>
                        <script src="assets/js/alpine-collaspe.min.js"></script>
        <script src="assets/js/alpine-persist.min.js"></script>
        <script defer="" src="assets/js/alpine-ui.min.js"></script>
        <script defer="" src="assets/js/alpine-focus.min.js"></script>
        <script defer="" src="assets/js/alpine.min.js"></script>
        <script src="assets/js/custom.js"></script>

        <script>
            document.addEventListener('alpine:init', () => {
                // main section
                Alpine.data('scrollToTop', () => ({
                    showTopButton: false,
                    init() {
                        window.onscroll = () => {
                            this.scrollFunction();
                        };
                    },

                    scrollFunction() {
                        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                            this.showTopButton = true;
                        } else {
                            this.showTopButton = false;
                        }
                    },

                    goToTop() {
                        document.body.scrollTop = 0;
                        document.documentElement.scrollTop = 0;
                    },
                }));

                // theme customization
                Alpine.data('customizer', () => ({
                    showCustomizer: false,
                }));

                // sidebar section
                Alpine.data('sidebar', () => ({
                    init() {
                        const selector = document.querySelector('.sidebar ul a[href="' + window.location.pathname + '"]');
                        if (selector) {
                            selector.classList.add('active');
                            const ul = selector.closest('ul.sub-menu');
                            if (ul) {
                                let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                                if (ele) {
                                    ele = ele[0];
                                    setTimeout(() => {
                                        ele.click();
                                    });
                                }
                            }
                        }
                    },
                }));

                // header section
                Alpine.data('header', () => ({
                    init() {
                        const selector = document.querySelector('ul.horizontal-menu a[href="' + window.location.pathname + '"]');
                        if (selector) {
                            selector.classList.add('active');
                            const ul = selector.closest('ul.sub-menu');
                            if (ul) {
                                let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                                if (ele) {
                                    ele = ele[0];
                                    setTimeout(() => {
                                        ele.classList.add('active');
                                    });
                                }
                            }
                        }
                    },

                    notifications: [
                        {
                            id: 1,
                            profile: 'user-profile.jpeg',
                            message: '<strong class="text-sm mr-1">StarCode Kh</strong>invite you to <strong>Prototyping</strong>',
                            time: '45 min ago',
                        },
                        {
                            id: 2,
                            profile: 'profile-34.jpeg',
                            message: '<strong class="text-sm mr-1">Adam Nolan</strong>mentioned you to <strong>UX Basics</strong>',
                            time: '9h Ago',
                        },
                        {
                            id: 3,
                            profile: 'profile-16.jpeg',
                            message: '<strong class="text-sm mr-1">Anna Morgan</strong>Upload a file',
                            time: '9h Ago',
                        },
                    ],

                    messages: [
                        {
                            id: 1,
                            image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-success-light dark:bg-success text-success dark:text-success-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></span>',
                            title: 'Congratulations!',
                            message: 'Your OS has been updated.',
                            time: '1hr',
                        },
                        {
                            id: 2,
                            image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-info-light dark:bg-info text-info dark:text-info-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></span>',
                            title: 'Did you know?',
                            message: 'You can switch between artboards.',
                            time: '2hr',
                        },
                        {
                            id: 3,
                            image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-danger-light dark:bg-danger text-danger dark:text-danger-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>',
                            title: 'Something went wrong!',
                            message: 'Send Reposrt',
                            time: '2days',
                        },
                        {
                            id: 4,
                            image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-warning-light dark:bg-warning text-warning dark:text-warning-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">    <circle cx="12" cy="12" r="10"></circle>    <line x1="12" y1="8" x2="12" y2="12"></line>    <line x1="12" y1="16" x2="12.01" y2="16"></line></svg></span>',
                            title: 'Warning',
                            message: 'Your password strength is low.',
                            time: '5days',
                        },
                    ],

                    languages: [
                        {
                            id: 1,
                            key: 'Khmer',
                            value: 'kh',
                        }
                    ],

                    removeNotification(value) {
                        this.notifications = this.notifications.filter((d) => d.id !== value);
                    },

                    removeMessage(value) {
                        this.messages = this.messages.filter((d) => d.id !== value);
                    },
                }));
            });
        </script>
        <script>
            document.addEventListener('alpine:init', () => {
                // main section
                Alpine.data('scrollToTop', () => ({
                    showTopButton: false,
                    init() {
                        window.onscroll = () => {
                            this.scrollFunction();
                        };
                    },

                    scrollFunction() {
                        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                            this.showTopButton = true;
                        } else {
                            this.showTopButton = false;
                        }
                    },

                    goToTop() {
                        document.body.scrollTop = 0;
                        document.documentElement.scrollTop = 0;
                    },
                }));

                // theme customization
                Alpine.data('customizer', () => ({
                    showCustomizer: false,
                }));

                // sidebar section
                Alpine.data('sidebar', () => ({
                    init() {
                        const selector = document.querySelector('.sidebar ul a[href="' + window.location.pathname + '"]');
                        if (selector) {
                            selector.classList.add('active');
                            const ul = selector.closest('ul.sub-menu');
                            if (ul) {
                                let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                                if (ele) {
                                    ele = ele[0];
                                    setTimeout(() => {
                                        ele.click();
                                    });
                                }
                            }
                        }
                    },
                }));

                // header section
                
                //scrumboard
                Alpine.data('scrumboard', () => ({
                    params: {
                        id: null,
                        title: '',
                    },
                    paramsTask: {
                        projectId: null,
                        id: null,
                        title: '',
                        description: '',
                        tags: '',
                    },
                    selectedTask: null,
                    isAddProjectModal: false,
                    isAddTaskModal: false,
                    isDeleteModal: false,
                    projectList: [
                        {
                            id: 1,
                            title: '',
                            tasks: [
                                {
                                    projectId: 1,
                                    id: 1,
                                    title: 'Creating a new Portfolio on Dribble',
                                    image: true,
                                }
                            ],
                        }
                        
                    ],

                    init() {
                        this.initializeSortable();
                        // this.$watch('projectList', value => {
                        //     this.initializeSortable();
                        // });
                    },

                    initializeSortable() {
                        setTimeout(() => {
                            //sortable js
                            const sortable = document.querySelectorAll('.sortable-list');
                            for (let i = 0; i < sortable.length; i++) {
                                Sortable.create(sortable[i], {
                                    animation: 200,
                                    group: 'name',
                                    ghostClass: 'sortable-ghost',
                                    dragClass: 'sortable-drag',
                                });
                            }
                        });
                    },

                    addEditProject(project) {
                        setTimeout(() => {
                            this.params = {
                                id: null,
                                title: '',
                            };
                            if (project) {
                                this.params = JSON.parse(JSON.stringify(project));
                            }

                            this.isAddProjectModal = true;
                        });
                    },

                    saveProject() {
                        if (!this.params.title) {
                            this.showMessage('Title is required.', 'error');
                            return false;
                        }

                        if (this.params.id) {
                            //update project
                            const project = this.projectList.find((d) => d.id === this.params.id);
                            project.title = this.params.title;
                        } else {
                            //add project
                            const lastId = this.projectList.length
                                ? this.projectList.reduce((max, obj) => (obj.id > max ? obj.id : max), this.projectList[0].id)
                                : 0;

                            const project = {
                                id: lastId + 1,
                                title: this.params.title,
                                tasks: [],
                            };
                            this.projectList.push(project);
                        }

                        this.initializeSortable();
                        this.showMessage('Project has been saved successfully.');
                        this.isAddProjectModal = false;
                    },

                    deleteProject(project) {
                        this.projectList = this.projectList.filter((d) => d.id != project.id);
                        this.showMessage('Project has been deleted successfully.');
                    },

                    clearProjects(project) {
                        project.tasks = [];
                    },

                    // task
                    addEditTask(projectId, task) {
                        this.paramsTask = {
                            projectId: null,
                            id: null,
                            title: '',
                            description: '',
                            tags: '',
                        };
                        if (task) {
                            this.paramsTask = JSON.parse(JSON.stringify(task));
                            this.paramsTask.tags = this.paramsTask.tags ? this.paramsTask.tags.toString() : '';
                        }
                        this.paramsTask.projectId = projectId;
                        this.isAddTaskModal = true;
                    },

                    saveTask() {
                        if (!this.paramsTask.title) {
                            this.showMessage('Title is required.', 'error');
                            return false;
                        }

                        const project = this.projectList.find((d) => d.id === this.paramsTask.projectId);
                        if (this.paramsTask.id) {
                            //update task
                            const task = project.tasks.find((d) => d.id === this.paramsTask.id);
                            task.title = this.paramsTask.title;
                            task.description = this.paramsTask.description;
                            task.tags = this.paramsTask.tags?.length > 0 ? this.paramsTask.tags.split(',') : [];
                        } else {
                            //add task
                            let maxid = 0;
                            if (project.tasks?.length) {
                                maxid = project.tasks.reduce((max, obj) => (obj.id > max ? obj.id : max), project.tasks[0].id);
                            }

                            const today = new Date();
                            const dd = String(today.getDate()).padStart(2, '0');
                            const mm = String(today.getMonth()); //January is 0!
                            const yyyy = today.getFullYear();
                            const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

                            const task = {
                                projectId: this.paramsTask.projectId,
                                id: maxid + 1,
                                title: this.paramsTask.title,
                                description: this.paramsTask.description,
                                date: dd + ' ' + monthNames[mm] + ', ' + yyyy,
                                tags: this.paramsTask.tags?.length > 0 ? this.paramsTask.tags.split(',') : [],
                            };

                            project.tasks.push(task);
                        }

                        this.showMessage('Task has been saved successfully.');
                        this.isAddTaskModal = false;
                    },

                    deleteConfirmModal(projectId, task) {
                        this.selectedTask = task;
                        setTimeout(() => {
                            this.isDeleteModal = true;
                        }, 10);
                    },

                    deleteTask() {
                        let project = this.projectList.find((d) => d.id === this.selectedTask.projectId);
                        project.tasks = project.tasks.filter((d) => d.id != this.selectedTask.id);

                        this.showMessage('Task has been deleted successfully.');
                        this.isDeleteModal = false;
                    },

                    showMessage(msg = '', type = 'success') {
                        const toast = window.Swal.mixin({
                            toast: true,
                            position: 'top',
                            showConfirmButton: false,
                            timer: 3000,
                        });
                        toast.fire({
                            icon: type,
                            title: msg,
                            padding: '10px 20px',
                        });
                    },
                }));
            });
        </script>
    </body>
</html>
