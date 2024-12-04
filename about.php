<?php
include "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>The VAWA | About</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        
        <!-- link font khmer -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bayon&family=Khmer&display=swap" rel="stylesheet">
    </head>
    <body  style="font-family:'Josefin Sans', sans-serif;" x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased" :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?  'dark' : '', $store.app.menu, $store.app.layout,$store.app.rtlClass]">
        <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
            <?php
                include 'includes/sidebar.php';
                include 'includes/header.php';
            ?>
            <div class="main-content flex flex-col">
                <div class="animate__animated p-6" :class="[$store.app.animation]">
                    <!-- start main content section -->
                    <div>
                        <ul class="flex space-x-2 rtl:space-x-reverse">
                            <h3 class="mb-6 text-xl font-bold md:text-3xl">About Us</h3>
                           
                        </ul>
                        <div class="pt-5">
                            <div class="mb-5 grid grid-cols-1 gap-5 lg:grid-cols-3 xl:grid-cols-4">
                                <div class="panel">
                                    <div class="mb-5 flex items-center justify-between">
                                        <h5 class="text-lg font-semibold dark:text-white-light">Profile</h5>
                                    </div>
                                    <div class="mb-5">
                                        <div class="flex flex-col items-center justify-center">
                                            <img src="img/jennie.jpg" alt="image" class="mb-5 h-24 w-24 rounded-full object-cover">
                                            <p class="text-xl font-semibold text-primary">Ruby Jane</p>
                                        </div>
                                        <ul class="m-auto mt-5 flex max-w-[160px] flex-col space-y-4 font-semibold text-white-dark">
                                            <li class="flex items-center gap-2">
                                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0">
                                                    <path d="M2.3153 12.6978C2.26536 12.2706 2.2404 12.057 2.2509 11.8809C2.30599 10.9577 2.98677 10.1928 3.89725 10.0309C4.07094 10 4.286 10 4.71612 10H15.2838C15.7139 10 15.929 10 16.1027 10.0309C17.0132 10.1928 17.694 10.9577 17.749 11.8809C17.7595 12.057 17.7346 12.2706 17.6846 12.6978L17.284 16.1258C17.1031 17.6729 16.2764 19.0714 15.0081 19.9757C14.0736 20.6419 12.9546 21 11.8069 21H8.19303C7.04537 21 5.9263 20.6419 4.99182 19.9757C3.72352 19.0714 2.89681 17.6729 2.71598 16.1258L2.3153 12.6978Z" stroke="currentColor" stroke-width="1.5"></path>
                                                    <path opacity="0.5" d="M17 17H19C20.6569 17 22 15.6569 22 14C22 12.3431 20.6569 11 19 11H17.5" stroke="currentColor" stroke-width="1.5"></path>
                                                    <path opacity="0.5" d="M10.0002 2C9.44787 2.55228 9.44787 3.44772 10.0002 4C10.5524 4.55228 10.5524 5.44772 10.0002 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M4.99994 7.5L5.11605 7.38388C5.62322 6.87671 5.68028 6.0738 5.24994 5.5C4.81959 4.9262 4.87665 4.12329 5.38382 3.61612L5.49994 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M14.4999 7.5L14.6161 7.38388C15.1232 6.87671 15.1803 6.0738 14.7499 5.5C14.3196 4.9262 14.3767 4.12329 14.8838 3.61612L14.9999 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Web Developer
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0">
                                                    <path d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12Z" stroke="currentColor" stroke-width="1.5"></path>
                                                    <path opacity="0.5" d="M7 4V2.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                    <path opacity="0.5" d="M17 4V2.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                    <path opacity="0.5" d="M2 9H22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                </svg>
                                                Sep 15, 2001
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0">
                                                    <path opacity="0.5" d="M4 10.1433C4 5.64588 7.58172 2 12 2C16.4183 2 20 5.64588 20 10.1433C20 14.6055 17.4467 19.8124 13.4629 21.6744C12.5343 22.1085 11.4657 22.1085 10.5371 21.6744C6.55332 19.8124 4 14.6055 4 10.1433Z" stroke="currentColor" stroke-width="1.5"></path>
                                                    <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="1.5"></circle>
                                                </svg>
                                                Phnom Penh
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="flex items-center gap-2">
                                                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0">
                                                        <path opacity="0.5" d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12Z" stroke="currentColor" stroke-width="1.5"></path>
                                                        <path d="M6 8L8.1589 9.79908C9.99553 11.3296 10.9139 12.0949 12 12.0949C13.0861 12.0949 14.0045 11.3296 15.8411 9.79908L18 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                    </svg>
                                                    <span class="truncate text-primary">thisisasa@gmail.com</span></a>
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                                    <path d="M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257" stroke="currentColor" stroke-width="1.5"></path>
                                                    <path opacity="0.5" d="M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561" stroke="currentColor" stroke-width="1.5"></path>
                                                    <path opacity="0.5" d="M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                </svg>
                                                <span class="whitespace-nowrap" dir="ltr">+1 (855) 555-12121</span>
                                            </li>
                                        </ul>
                                        <ul class="mt-7 flex items-center justify-center gap-2">
                                            <li>
                                                <a class="btn btn-info flex h-10 w-10 items-center justify-center rounded-full p-0" href="javascript:;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="btn btn-danger flex h-10 w-10 items-center justify-center rounded-full p-0" href="javascript:;">
                                                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                                        <path d="M3.33946 16.9997C6.10089 21.7826 12.2168 23.4214 16.9997 20.66C18.9493 19.5344 20.3765 17.8514 21.1962 15.9286C22.3875 13.1341 22.2958 9.83304 20.66 6.99972C19.0242 4.1664 16.2112 2.43642 13.1955 2.07088C11.1204 1.81935 8.94932 2.21386 6.99972 3.33946C2.21679 6.10089 0.578039 12.2168 3.33946 16.9997Z" stroke="currentColor" stroke-width="1.5"></path>
                                                        <path opacity="0.5" d="M16.9497 20.5732C16.9497 20.5732 16.0107 13.9821 14.0004 10.5001C11.99 7.01803 7.05018 3.42681 7.05018 3.42681M7.57711 20.8175C9.05874 16.3477 16.4525 11.3931 21.8635 12.5801M16.4139 3.20898C14.926 7.63004 7.67424 12.5123 2.28857 11.4516" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="btn btn-dark flex h-10 w-10 items-center justify-center rounded-full p-0" href="javascript:;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel lg:col-span-2 xl:col-span-3">
                                    <div class="mb-10 flex items-center justify-between">
                                        <h5 class="text-lg font-semibold dark:text-white-light">Purpose</h5>
                                    </div>
                                    <div class="group">
                                        <h6 class="mb-7 list-inside list-disc space-y-2  font-semibold text-white-dark ">
                                        គោលបំណងនៃប្រធានបទ VAWA (Vulnerability Assessment of Web Applications) នេះគឺ ផ្តោតលើការយល់ដឹងអំពីបច្ចេកវិទ្យាគេហទំព័រ និងការកេងប្រវ័ញ្ច និងផ្តល់នូវ exploitations និងឧបករណ៍ដែលត្រូវបានរចនាឡើងដើម្បីកែលម្អសុវត្ថិភាពនៃកម្មវិធីគេហទំព័រ រួមបញ្ចូលព័ត៌មានលម្អិតអំពីភាពងាយរងគ្រោះ របៀបដែលវាកើតឡើង និងរបៀបដែលអ្នកអាចកេងប្រវ័ញ្ចពួកវា ទៅជាការអនុវត្តដោយបំពេញនូវបញ្ហាប្រឈមនានាដូចជា៖
                                        </h6>
                                        <ul class="mb-7 list-inside list-disc space-y-2 text-white-dark">
                                            <li>Broken Access Control</li>
                                            <li><a href="ftp/legal.md">Cryptographic Failures</a></li>
                                            <li>Injection</li>
                                            <li>Insecure Design</li>
                                            <li>Security Misconfiguration</li>
                                            <li>Vulnerable and Outdated Components</li>
                                            <li>Identification and Authentication Failures</li>
                                            <li>Software and Data Integrity Failures</li>
                                            <li>Security Logging & Monitoring Failures</li>
                                            <li>Server-Side Request Forgery (SSRF)</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="mb-0">Join our newsletter</h3>
                            <p>Be the first to know our latest updates and news!</p>
                            <form action="about_submit.php" method="post" class="form-subscribe">
                                <div class="form-group d-flex">
                                    <input  size="20" type="text" class="form-input ps-5 " name="ip" placeholder="Enter your email">
                                    <input type="submit" name="PingSubmit" class="btn btn-gradient" value="Subscribe">
                                </div>
                            </form>


                    <!-- <form name="ping" action="about_submit.php" method="post">
                        <h3 class="mb-0">Join our newsletter</h3>
                        <p>
                            <p>Be the first to know our latest updates and news!</p>
                            <input type="text" class="form-input ps-10 placeholder:text-white-dark" name="ip">
                            <input type="submit" name="PingSubmit" class="btn btn-gradient" value="Subscribe">
                        </p>
                        
                    </form> -->
                    <!-- end main content section -->
                </div>
            </div>
           
            <!-- start footer section -->
            <?php
                include 'includes/footer.php';
            ?>
            <!-- end footer section --> 
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
                        },
                        {
                            id: 2,
                            key: 'Danish',
                            value: 'da',
                        },
                        {
                            id: 3,
                            key: 'English',
                            value: 'en',
                        },
                        {
                            id: 4,
                            key: 'French',
                            value: 'fr',
                        },
                        {
                            id: 5,
                            key: 'German',
                            value: 'de',
                        },
                        {
                            id: 6,
                            key: 'Greek',
                            value: 'el',
                        },
                        {
                            id: 7,
                            key: 'Hungarian',
                            value: 'hu',
                        },
                        {
                            id: 8,
                            key: 'Italian',
                            value: 'it',
                        },
                        {
                            id: 9,
                            key: 'Japanese',
                            value: 'ja',
                        },
                        {
                            id: 10,
                            key: 'Polish',
                            value: 'pl',
                        },
                        {
                            id: 11,
                            key: 'Portuguese',
                            value: 'pt',
                        },
                        {
                            id: 12,
                            key: 'Russian',
                            value: 'ru',
                        },
                        {
                            id: 13,
                            key: 'Spanish',
                            value: 'es',
                        },
                        {
                            id: 14,
                            key: 'Swedish',
                            value: 'sv',
                        },
                        {
                            id: 15,
                            key: 'Turkish',
                            value: 'tr',
                        },
                        {
                            id: 16,
                            key: 'Arabic',
                            value: 'ae',
                        },
                    ],

                    removeNotification(value) {
                        this.notifications = this.notifications.filter((d) => d.id !== value);
                    },

                    removeMessage(value) {
                        this.messages = this.messages.filter((d) => d.id !== value);
                    },
                }));
                //contacts
                Alpine.data('contacts', () => ({
                    defaultParams: {
                        id: null,
                        name: '',
                        email: '',
                        role: '',
                        phone: '',
                        location: '',
                    },
                    displayType: 'list',
                    addContactModal: false,
                    params: {
                        id: null,
                        name: '',
                        email: '',
                        role: '',
                        phone: '',
                        location: '',
                    },
                    filterdContactsList: [],
                    searchUser: '',
                    contactList: [
                        {
                            id: 1,
                            path: 'profile-35.png',
                            name: 'Soeng Souy',
                            role: 'Web Developer',
                            email: 'soengsouy@mail.com',
                            location: 'Boston, USA',
                            phone: '+1 202 555 0197',
                            posts: 25,
                            followers: '5K',
                            following: 500,
                        },
                        {
                            id: 2,
                            path: 'profile-35.png',
                            name: 'StarCode Kh',
                            role: 'Web Designer',
                            email: 'starcodekh@mail.com',
                            location: 'Sydney, Australia',
                            phone: '+1 202 555 0170',
                            posts: 25,
                            followers: '21.5K',
                            following: 350,
                        },
                        {
                            id: 3,
                            path: 'profile-35.png',
                            name: 'Lila Perry',
                            role: 'UX/UI Designer',
                            email: 'lila@mail.com',
                            location: 'Miami, USA',
                            phone: '+1 202 555 0105',
                            posts: 20,
                            followers: '21.5K',
                            following: 350,
                        },
                        {
                            id: 4,
                            path: 'profile-35.png',
                            name: 'Andy King',
                            role: 'Project Lead',
                            email: 'andy@mail.com',
                            location: 'Tokyo, Japan',
                            phone: '+1 202 555 0194',
                            posts: 25,
                            followers: '21.5K',
                            following: 300,
                        },
                        {
                            id: 5,
                            path: 'profile-35.png',
                            name: 'Jesse Cory',
                            role: 'Web Developer',
                            email: 'jesse@mail.com',
                            location: 'Edinburgh, UK',
                            phone: '+1 202 555 0161',
                            posts: 30,
                            followers: '20K',
                            following: 350,
                        },
                        {
                            id: 6,
                            path: 'profile-35.png',
                            name: 'Xavier',
                            role: 'UX/UI Designer',
                            email: 'xavier@mail.com',
                            location: 'Phnom Penh',
                            phone: '+1 202 555 0155',
                            posts: 25,
                            followers: '21.5K',
                            following: 350,
                        },
                        {
                            id: 7,
                            path: 'profile-35.png',
                            name: 'Susan',
                            role: 'Project Manager',
                            email: 'susan@mail.com',
                            location: 'Miami, USA',
                            phone: '+1 202 555 0118',
                            posts: 40,
                            followers: '21.5K',
                            following: 350,
                        },
                        {
                            id: 8,
                            path: 'profile-35.png',
                            name: 'Raci Lopez',
                            role: 'Web Developer',
                            email: 'traci@mail.com',
                            location: 'Edinburgh, UK',
                            phone: '+1 202 555 0135',
                            posts: 25,
                            followers: '21.5K',
                            following: 350,
                        },
                        {
                            id: 9,
                            path: 'profile-35.png',
                            name: 'Steven Mendoza',
                            role: 'HR',
                            email: 'sokol@verizon.net',
                            location: 'Monrovia, US',
                            phone: '+1 202 555 0100',
                            posts: 40,
                            followers: '21.8K',
                            following: 300,
                        },
                        {
                            id: 10,
                            path: 'profile-35.png',
                            name: 'James Cantrell',
                            role: 'Web Developer',
                            email: 'sravani@comcast.net',
                            location: 'Michigan, US',
                            phone: '+1 202 555 0134',
                            posts: 100,
                            followers: '28K',
                            following: 520,
                        },
                        {
                            id: 11,
                            path: 'profile-35.png',
                            name: 'Reginald Brown',
                            role: 'Web Designer',
                            email: 'drhyde@gmail.com',
                            location: 'Entrimo, Spain',
                            phone: '+1 202 555 0153',
                            posts: 35,
                            followers: '25K',
                            following: 500,
                        },
                        {
                            id: 12,
                            path: 'profile-35.png',
                            name: 'Stacey Smith',
                            role: 'Chief technology officer',
                            email: 'maikelnai@optonline.net',
                            location: 'Lublin, Poland',
                            phone: '+1 202 555 0115',
                            posts: 21,
                            followers: '5K',
                            following: 200,
                        },
                    ],

                    init() {
                        this.searchContacts();
                    },

                    searchContacts() {
                        this.filterdContactsList = this.contactList.filter((d) => d.name.toLowerCase().includes(this.searchUser.toLowerCase()));
                    },

                    editUser(user) {
                        this.params = this.defaultParams;
                        if (user) {
                            this.params = JSON.parse(JSON.stringify(user));
                        }

                        this.addContactModal = true;
                    },

                    saveUser() {
                        if (!this.params.name) {
                            this.showMessage('Name is required.', 'error');
                            return true;
                        }
                        if (!this.params.email) {
                            this.showMessage('Email is required.', 'error');
                            return true;
                        }
                        if (!this.params.phone) {
                            this.showMessage('Phone is required.', 'error');
                            return true;
                        }
                        if (!this.params.role) {
                            this.showMessage('Occupation is required.', 'error');
                            return true;
                        }

                        if (this.params.id) {
                            //update user
                            let user = this.contactList.find((d) => d.id === this.params.id);
                            user.name = this.params.name;
                            user.email = this.params.email;
                            user.role = this.params.role;
                            user.phone = this.params.phone;
                            user.location = this.params.location;
                        } else {
                            //add user
                            let maxUserId = this.contactList.length
                                ? this.contactList.reduce((max, character) => (character.id > max ? character.id : max), this.contactList[0].id)
                                : 0;

                            let user = {
                                id: maxUserId + 1,
                                path: 'profile-35.png',
                                name: this.params.name,
                                email: this.params.email,
                                role: this.params.role,
                                phone: this.params.phone,
                                location: this.params.location,
                                posts: 20,
                                followers: '5K',
                                following: 500,
                            };
                            this.contactList.splice(0, 0, user);
                            this.searchContacts();
                        }

                        this.showMessage('User has been saved successfully.');
                        this.addContactModal = false;
                    },

                    deleteUser(user) {
                        this.contactList = this.contactList.filter((d) => d.id != user.id);
                        // this.ids = this.ids.filter((d) => d != user.id);
                        this.searchContacts();
                        this.showMessage('User has been deleted successfully.');
                    },

                    setDisplayType(type) {
                        this.displayType = type;
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
        