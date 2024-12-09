<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open in App</title>
    <?php echo $__env->make('layouts.include', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        .bottom-sheet {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #fff;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            transform: translateY(100%);
            transition: transform 0.3s ease-out;
            z-index: 1050;
        }

        .bottom-sheet.show {
            transform: translateY(0);
        }

        @media (min-width: 1025px) {
            .bottom-sheet {
                display: none;
            }
        }
    </style>
</head>
<body>
<div id="app">
    <div id="main-content">
        <div class="page-heading"></div>
        <div class="content">
            <div class="bottom-sheet p-4 show" id="bottomSheet">
                <h5>Open in App</h5>
                <p>Get a better experience by using our mobile app!</p>
                <button class="btn btn-outline-secondary w-100 mb-2" onclick="openApp()">Open in APP</button>
                <button class="btn btn-outline-danger w-100" onclick="hideBottomSheet()">Close</button>
            </div>
            <div class="align-items-center d-flex flex-column" style="margin-top: 25%">
                <h1 data-shadow="oops!">OPEN IN APP</h1>
                <img src="<?php echo e(asset('assets/images/open_in_app.png')); ?>" alt="open_in_app">
            </div>
        </div>
    </div>
    <div class="wrapper mt-5">
        <div class="content">
            <footer class="footer mt-3">
                <div class="container-fluid">
                    <p>Open in App</p>
                    <p>Get a better experience by using our mobile app!</p>
                    <div class="btn-group">
                        <input type="hidden" name="share_slug" id="share_slug" value="true">
                        <button class="btn btn-open" onclick="openApp()">Open in APP</button>
                        <button class="btn btn-close" onclick="closePage()">Close</button>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<?php echo $__env->make('layouts.footer_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
$(document).ready(function () {
    var androidAppStoreLink = '<?php echo e($playStoreLink); ?>';
    console.log(androidAppStoreLink);
    function isMobileOrTablet() {
        return window.matchMedia("(max-width: 1024px)").matches;
    }

    function openInApp(pathName) {
        var appScheme = 'eClassify' + pathName;
        var androidAppStoreLink = '<?php echo e($playStoreLink); ?>';
        var iosAppStoreLink = '<?php echo e($appStoreLink); ?>';
        var userAgent = navigator.userAgent || navigator.vendor || window.opera;
        var isAndroid = /android/i.test(userAgent);
        var isIOS = /iPad|iPhone|iPod/.test(userAgent) && !window.MSStream;
        var appStoreLink = isAndroid ? androidAppStoreLink : (isIOS ? iosAppStoreLink : androidAppStoreLink);

        window.location.href = appScheme;

        setTimeout(function() {
            if (!document.hidden && !document.webkitHidden) {
                if (confirm("eShop app is not installed. Would you like to download it from the app store?")) {
                    window.location.href = appStoreLink;
                }
            }
        }, 1000);
    }

    if (document.getElementById("share_slug") !== null && isMobileOrTablet()) {
        const pathName = window.location.pathname;

        window.toggleBottomSheet = function(show = true) {
            const bottomSheet = document.getElementById('bottomSheet');
            if (show) {
                bottomSheet.classList.add('show');
            } else {
                bottomSheet.classList.remove('show');
            }
        }

        window.hideBottomSheet = function() {
            toggleBottomSheet(false);
            sessionStorage.setItem('bottomSheetShown', 'true');
        }

        window.openApp = function() {
            openInApp(pathName);
        }

        if (!sessionStorage.getItem('bottomSheetShown')) {
            toggleBottomSheet(true);
        }
    }
});

function closePage() {
   var win = window.open("", "_self");
    win.close();

}
</script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\eClassify\resources\views/web_page/web_url.blade.php ENDPATH**/ ?>