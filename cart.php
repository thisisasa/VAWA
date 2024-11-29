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
        <title>The VAWA | Cart</title>
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
                    <div x-data="knowledge">
                        <div class="mt-10">
                            <h3 class="mb-6 text-xl font-bold md:text-3xl">Cart</h3>
                            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4">
                                <!-- first -->
                                <br><br><br>
                                <div class="container">
                                    <div class="row row_style2">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <table class="table table-striped">
                                                <?php
                                                $sum = 0;
                                                $user_id = $_SESSION['user_id'];
                                                $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                                                $result = mysqli_query($con, $query)or die($mysqli_error($con));
                                                if (mysqli_num_rows($result) >= 1) {
                                                    ?>
                                                    <thead>
                                                        <tr>
                                                            <th>Item Number</th>
                                                            <th>Item Name</th>
                                                            <th>Price</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody>
                                                        <?php
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            $sum+= $row["Price"];
                                                            $id="";
                                                            $id .= $row["id"] . ",";
                                                            echo "<tr>
                                                                    <td>" . "#" . $row["id"] . "</td>
                                                                    <td>" . $row["Name"] . "</td>
                                                                    <td>Rs " . $row["Price"] . "</td>
                                                                    <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove </a></td>
                                                                </tr>";
                                                        }
                                                        $id = rtrim($id, ",");
                                                        echo "<tr>
                                                                <td></td>
                                                                <td>Total</td>
                                                                <td>Rs " . $sum . "</td>
                                                                <td><a href='success.php?itemsid=".$id."'class='btn btn-primary'>Confirm Order</a></td>
                                                                </tr>";
                                                        ?>
                                                    </tbody>
                                                    <?php
                                                } else {
                                                    echo "<center><h2><br>Add items to the cart first!</h2><p><a href='products.php' style='color:blue;'>click here</a> to explore products</p></center>";
                                                }
                                                ?>
                                                <?php
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- second-->
                            </div>
                        </div>
                    </div>
                    <!-- end main content section -->
                </div>
            </div>
            <!-- display prodocts -->
            <div>
                <?php
                    while($row = $result->fetch_assoc()){
                        ?>
                            <p>
                                <?php echo $row["id"] ?> - <?php echo $row["name"] ?>
                            </p>
                        <?php
                    }
                ?>
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
        