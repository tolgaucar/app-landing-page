	<section id="footer" class="hero is-medium">
		<span class="has-text-white has-text-centered is-size-9"><?php echo $footer; ?></span>
	</section>


<style type="text/css">
		#onlyJSyc{
	display: none;
	position: fixed;
	bottom: 20px;
	right: 20px;
	z-index: 9999;
	border: none;
	outline: none;
	background: url(http://4.bp.blogspot.com/-b50XKMWz84U/W9RouwhqVII/AAAAAAAAR_U/qQFXBOiUuQUC9Rv_evE4S7P9_yZ1YzZDgCK4BGAYYCw/s1600/yukari.png) no-repeat;
	cursor: pointer;
	padding: 0px;
	width: 40px;
	height: 40px;
	}
</style>
<button onclick="topFunction()" id="onlyJSyc"></button>
<script>
window.onscroll = function() {
scrollFunction()
};
function scrollFunction() {
if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500)
document.getElementById("onlyJSyc").style.display = "block"
else
document.getElementById("onlyJSyc").style.display = "none"
}
function topFunction() {
if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
document.body.scrollTop -= 40
document.documentElement.scrollTop -= 40
setTimeout(function() {
topFunction()
}, 0)
} else {
document.body.scrollTop = 0
document.documentElement.scrollTop = 0
}
}
</script>

</body>
</html>