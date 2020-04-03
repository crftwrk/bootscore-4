
/*

1. Remove comments in line 24 and 49

2. Replace UA-123456789-X in line 24 and 47 with your own

3. Paste following paragraph into an HTML block inside your privacy statement.

    <p>Alternatively it is possible to prevent future analysis of your page visit by Google Analytics by clicking the below link. Clicking that link sets a so-called opt-out cookie, which has the effect of preventing the analysis of your visit to our website in future. <a onclick="alert('Google Analytics has been disabled');" href="javascript:gaOptout()"><strong>Activate opt-out cookies for Google Analytics!</strong></a></p>

4. Check if it works. 
    4.Open Google Chrome Developer Console and go to your privacy page. 
    4.2 Open the Applications/Cookies Tab in the Console.
    4.3 Klick on the link from the pasted paragraph. An Alert should be displayed
    4.4 Reload the page
    4.5 There must be a new Cookie ga-disable-UA-123456789-X.

*/


// Google Analytics

/*var gaProperty = 'UA-123456789-X';
var disableStr = 'ga-disable-' + gaProperty;
if (document.cookie.indexOf(disableStr + '=true') > -1) {
    window[disableStr] = true;
}

function gaOptout() {
    document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
    window[disableStr] = true;
    // alert('Google Analytics has been disabled'); 
}
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
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-123456789-X', 'auto');
ga('set', 'anonymizeIp', true);
ga('send', 'pageview');*/

// Google Analytics End
