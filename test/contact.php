<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="KEYWORDS" content="web application, phone application, Web app, phone app, website, cms, php, html, html5, css, css3, mysql, seo, web, internet, web development, wordpress, joomla, drupal, e-commerce" />
<meta name="description" content="we build pretty things for the web, no matter weather it’s phone or desktop. Our services are widely differentiated from creative services to full scale back end web application. We adroit to simulate your imagination in sophisticated bending of the rules and formulate a plan to meet your business requirement." />
<title>XSP &lt;Xtra Sensory Perception /&gt;</title>
<meta charset="utf-8" />
<link href="css_js/universal.css" rel="stylesheet" />
<link href="images/favIcon.png" rel="shortcut icon" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28624781-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script src="css_js/jquery1.6.1.js" type="text/javascript"></script>
<script src="css_js/jquery1.2.js" type="text/javascript"></script>
<script src="css_js/custom.js" type="text/javascript"></script>
<script type="text/javascript" src="css_js/jparallax.js"></script>
<script type="text/javascript" src="css_js/jquery.validate.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#myform").validate({
			debug: false,
			rules: {
				name: "required",
				contact_no: { 
				        required:true,
				        number:true
				},
				email: {
					required: true,
					email: true
				},
				message: "required"
			},
			messages: {
				name: "Please let us know who you are",
				contact_no: "Please provide your contact number",
				email: "A valid email will help us get in touch with you",
				message: "Pleasge enter a message",
			},
			submitHandler: function(form) {
				// do other stuff for a valid form
				$.post('admin/cu-core-functions.php', $("#myform").serialize(), function(data) {
					$('#results').html(data);
					document.getElementById('myform').reset();
				});
			}
		});
	});
</script>
<style>
label.error { width: 600px; display: inline; color: red; }
</style>
</head>
<body>
<div class="bgWrap">
  <div class="header">
    <div class="xsp"></div>
    <div class="headCont"><img src="images/logo.png" class="logoPrime" alt="XSP" width="100" />
      <nav> <a href="index" class="overviewB "> <span class="pop">overview</span> </a> <a href="services" class="servicesB"> <span class="pop">our services</span> </a> <a href="ways" class="ways"> <span class="pop">our ways</span> </a> <!--a href="about" class="about"> <span class="pop">about xsp</span> </a--> <a href="contact" class="contact select"> <span class="pop">contact us</span> </a> </nav>
    </div>
  </div>
  <br>
  <div class="wrapperBG">
    <div class="wrapper">
      <section id="page-wrap">
        <div class="slider-wrap">
          <div id="main-photo-slider" class="csw">
            <div class="panelContainer coda-slider preload" id="coda-slider-1">
              <div class="panel">
                <h1>Contact us</h1>
                <div class="contactUs">
                  <div class="needField" id="results"> </div>
                  <div class="unit">
                    <form name="myform" id="myform" action="" method="POST">
                      <input class="input" name="name" type="text" placeholder="Name" >
                      <br/>
                      <input class="input" name="contact_no" type="text" placeholder="Contact number">
                      <br/>
                      <input class="input" name="email" type="text" placeholder="eMail">
                      <br/>
                      <textarea class="input" placeholder="Message" style="height:60px;" name="message"></textarea>
                      <br/>
                      <input type="hidden" value="1" name="priority" />
                      <input type="submit" class="button floatR clear clearWidth" name="submit" value="submit">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <footer>
    <div class="copyRight">&copy; Copy Rights reserved - XSP Xtra Sensory Perception</div>
  </footer>
  <div id="parallax">
    <div style="width:90%; height: 80%; left:1%; top:200px;">
      <div class="a"></div>
    </div>
    <div style="width:74%; height: 10%; right:">
      <div class="b"></div>
    </div>
    <div style="width:88%; height: 50%;">
      <div class="c"></div>
    </div>
    <div style="width:96%; height: 30%;">
      <div class="d"></div>
    </div>
    <div style="width:89%; height: 80%;">
      <div class="e"></div>
    </div>
    <div style="width:59%; height: 60%;">
      <div class="f"></div>
    </div>
    <div style="width:87%; height: 30%;">
      <div class="g"></div>
    </div>
    <div style="width:86%; height: 80%;">
      <div class="h"></div>
    </div>
    <div style="width:94%; height: 90%;">
      <div class="i"></div>
    </div>
    <div style="width:72%; height: 40%;">
      <div class="j"></div>
    </div>
    <div style="width:81%; height: 90%;">
      <div class="k"></div>
    </div>
    <div style="width:92%; height: 60%;">
      <div class="l"></div>
    </div>
    <div style="width:63%; height: 70%;">
      <div class="m"></div>
    </div>
    <div style="width:74%; height: 80%;">
      <div class="n"></div>
    </div>
    <div style="width:85%; height: 90%;">
      <div class="o"></div>
    </div>
    <div style="width:96%; height: 80%;">
      <div class="p"></div>
    </div>
    <div style="width:77%; height: 60%;">
      <div class="q"></div>
    </div>
    <div style="width:98%; height: 70%;">
      <div class="r"></div>
    </div>
    <div style="width:89%; height: 90%;">
      <div class="s"></div>
    </div>
    <div style="width:78%; height: 80%;">
      <div class="t"></div>
    </div>
    <div style="width:97%; height: 90%;">
      <div class="u"></div>
    </div>
    <div style="width:86%; height: 90%;">
      <div class="v"></div>
    </div>
    <div style="width:35%; height: 98%;">
      <div class="w"></div>
    </div>
    <div style="width:94%; height: 80%;">
      <div class="x"></div>
    </div>
    <div style="width:73%; height: 70%;">
      <div class="y"></div>
    </div>
    <div style="width:42%; height: 90%;">
      <div class="z"></div>
    </div>
    <div style="width:90%; height: 80%; left:1%; top:200px;">
      <div class="aa"></div>
    </div>
    <div style="width:74%; height: 10%; right:">
      <div class="ab"></div>
    </div>
    <div style="width:88%; height: 50%;">
      <div class="ac"></div>
    </div>
    <div style="width:96%; height: 30%;">
      <div class="ad"></div>
    </div>
    <div style="width:89%; height: 80%;">
      <div class="ae"></div>
    </div>
    <div style="width:59%; height: 60%;">
      <div class="af"></div>
    </div>
    <div style="width:87%; height: 30%;">
      <div class="ag"></div>
    </div>
    <div style="width:86%; height: 80%;">
      <div class="ah"></div>
    </div>
    <div style="width:94%; height: 90%;">
      <div class="ai"></div>
    </div>
    <div style="width:72%; height: 40%;">
      <div class="aj"></div>
    </div>
    <div style="width:81%; height: 90%;">
      <div class="ak"></div>
    </div>
    <div style="width:92%; height: 60%;">
      <div class="al"></div>
    </div>
    <div style="width:63%; height: 70%;">
      <div class="am"></div>
    </div>
    <div style="width:74%; height: 80%;">
      <div class="an"></div>
    </div>
    <div style="width:85%; height: 90%;">
      <div class="ao"></div>
    </div>
    <div style="width:96%; height: 80%;">
      <div class="ap"></div>
    </div>
    <div style="width:77%; height: 60%;">
      <div class="aq"></div>
    </div>
    <div style="width:98%; height: 70%;">
      <div class="ar"></div>
    </div>
    <div style="width:89%; height: 90%;">
      <div class="as"></div>
    </div>
    <div style="width:78%; height: 80%;">
      <div class="at"></div>
    </div>
    <div style="width:97%; height: 90%;">
      <div class="au"></div>
    </div>
    <div style="width:86%; height: 90%;">
      <div class="av"></div>
    </div>
    <div style="width:35%; height: 98%;">
      <div class="aw"></div>
    </div>
    <div style="width:94%; height: 80%;">
      <div class="ax"></div>
    </div>
    <div style="width:73%; height: 70%;">
      <div class="ay"></div>
    </div>
    <div style="width:42%; height: 90%;">
      <div class="az"></div>
    </div>
  </div>
</div>
</div>
</body>
</html>