<script src="soicau/js/jquery-1.12.3.min.js"></script>
<script src="soicau/bootstrap3/js/bootstrap.min.js"></script>
<script src="soicau/js/nprogress.js"></script>
<script src="soicau/frontend/js/home5.js"></script>
<script src="soicau/js/chat4.js"></script>
<script src="soicau/js/user.js"></script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-75158570-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- Facebook Pixel Code -->
<script>
    ! function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '180697755797837'); // Insert your pixel ID here.
    fbq('track', 'PageView');
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=180697755797837&ev=PageView&noscript=1"
    />
</noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<script src="soicau/js/admin/alerts.js"></script>
<script>
    jQuery(document).ready(function () {
        if (HOME.getCookie("hide_popup_right_zone1") == "1") {
            var contentright = document.getElementById('float_content_right_zone1');
            var hideright = document.getElementById('hide_float_right_zone1');
            if (contentright.style.display != "none") {
                contentright.style.display = "none";
                hideright.innerHTML =
                    '<a href="javascript:HOME.hide_float_right_zone1()">Xem quảng cáo...</a>';
            }
        };
        if (HOME.getCookie("hide_popup_right_zone2") == "1") {
            var contentright = document.getElementById('float_content_right_zone2');
            var hideright = document.getElementById('hide_float_right_zone2');
            if (contentright.style.display != "none") {
                contentright.style.display = "none";
                hideright.innerHTML =
                    '<a href="javascript:HOME.hide_float_right_zone2()">Xem quảng cáo...</a>';
            }
        };
    });
</script>
<script src="soicau/js/metronic.js" type="text/javascript"></script>
<script type="text/javascript" src="soicau/js/jquery-validation/js/jquery.validate.min.js"></script>
<script src="soicau/frontend/js/users.js"></script>
<script type="text/javascript" src="soicau/js/jquery-validation/js/additional-methods.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
</script>
<script type="text/javascript">
    var recaptcha1;
    var onloadCallback = function () {
        recaptcha1 = grecaptcha.render(
            'Recaptcha_subscribe', {
                'sitekey': '6LeWKS4UAAAAAPfippSGh47kqNgMPX7e3w7WoeW2',
                'callback': function (a) {
                    USER.register_submit();

                }
            }
        );

    };
</script>