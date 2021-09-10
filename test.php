<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v11.0&appId=140519394937776&autoLogAppEvents=1"
        nonce="J85nmsnI"></script>
    <div class="fb-login-button" data-width="" data-size="large" data-button-type="login_with" data-layout="rounded"
        data-auto-logout-link="false" data-use-continue-as="true" onclick="alert('test')"></div> -->
    <!-- Messenger ปลั๊กอินแชท Code -->
    <div id="fb-root"></div>

    <!-- Your ปลั๊กอินแชท code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "108590934775407");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v11.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

</html>