<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
	FB.init({
	  xfbml            : true,
	  version          : 'v10.0'
	});
  };

  (function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
	fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
  attribution="page_inbox"
  page_id="101564348701503">
</div>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6LQX87C9WB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6LQX87C9WB');
</script>