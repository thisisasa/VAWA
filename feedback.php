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
        <title>The VAWA | Feedback</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/perfect-scrollbar.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/stylestar.css">
        <link defer="" rel="stylesheet" type="text/css" media="screen" href="assets/css/animate.css">
        <script src="assets/js/perfect-scrollbar.min.js"></script>
        <script defer="" src="assets/js/popper.min.js"></script>
        <script defer="" src="assets/js/tippy-bundle.umd.min.js"></script>
        <script defer="" src="assets/js/sweetalert.min.js"></script>
    </head>
    <body  style="font-family:'Josefin Sans', sans-serif;" x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased" :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?  'dark' : '', $store.app.menu, $store.app.layout,$store.app.rtlClass]">
        <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
            <?php
                include 'includes/sidebar.php';
                include 'includes/header.php';
            ?>
            <div class="main-content flex flex-col">
                <div class="animate__animated p-6" :class="[$store.app.animation]">
                    <!-- start main header -->
                    <div x-data="auth">
                        <div class="relative flex min-h-screen items-center justify-center  bg-cover bg-center bg-no-repeat px-6 py-2 dark:bg-[#060818] sm:px-16"> 
                            <div class="relative w-full max-w-[870px] rounded-md bg-[linear-gradient(45deg,#fff9f9_0%,rgba(255,255,255,0)_25%,rgba(255,255,255,0)_75%,_#fff9f9_100%)] p-2 dark:bg-[linear-gradient(52.22deg,#0E1726_0%,rgba(14,23,38,0)_18.66%,rgba(14,23,38,0)_51.04%,rgba(14,23,38,0)_80.07%,#0E1726_100%)]">
                                    <div class="mx-auto w-full max-w-[440px]">
                                        <div class="mb-10">
                                            <h1 class="text-3xl font-extrabold uppercase !leading-snug text-primary md:text-4xl">Customer Feedback</h1>
                                        </div>
                                        <form class="space-y-5 dark:text-white" @submit.prevent="window.location='index.html'">
                                            <div>
                                                <label for="ctnTextarea">Comment</label>
                                                <textarea id="ctnTextarea" rows="3" class="form-textarea" placeholder="What did you like or dislike?" required></textarea>
                                            </div>
                                            <div>
                                                <label for="Comment">How was your experience?</label><br>
                                                    <div class="rate">
                                                        <input type="radio" id="star5" name="rate" value="5" />
                                                        <label for="star5" title="text">5 stars</label>
                                                        <input type="radio" id="star4" name="rate" value="4" />
                                                        <label for="star4" title="text">4 stars</label>
                                                        <input type="radio" id="star3" name="rate" value="3" />
                                                        <label for="star3" title="text">3 stars</label>
                                                        <input type="radio" id="star2" name="rate" value="2" />
                                                        <label for="star2" title="text">2 stars</label>
                                                        <input type="radio" id="star1" name="rate" value="1" />
                                                        <label for="star1" title="text">1 star</label>
                                                    </div>
                                            </div>
                                            <div>
                                               <br> 
                                            </div>
                                            <div >
                                                <form name="csp" class="space-y-5 dark:text-white" method="POST">
                                                  
                                                        <div class="flex items-center whitespace-nowrap">
                                                            <div class="ltr:mr-3 rtl:ml-3">
                                                            <label for="Comment">CAPTCHA:</label>
                                                            </div>
                                                            <div class="ltr:mr-3 rtl:ml-3" x-tooltip="Star" data-placement="top" role="tooltip">
                                                                <label id="myNumber"></label>
                                                            </div>
                                                         </div>              
                                                   
                                                    <div class="relative text-white-dark">
                                                        <input type="text" placeholder="Type the characters above" class="form-input" required/>
                                                    </div>
                                                </form>
                                            </div>
                                            <button type="submit" class="btn btn-gradient !mt-6 w-full border-0 uppercase shadow-[0_10px_20px_-10px_rgba(67,97,238,0.44)]">
                                                Submit
                                            </button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        <!-- make random -->
        <script>
            function makeid(length) {
                let result = '';
                const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                const charactersLength = characters.length;
                let counter = 0;
                while (counter < length) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
                counter += 1;
                }
                return result;
            }
            document.getElementById("myNumber").innerHTML = makeid(6);
        </script>
    </body>
</html>
        