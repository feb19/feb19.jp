

<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package Snippets
 * @subpackage Snippets
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->

<?php if ( is_front_page() ) : ?>
<?php get_template_part('main','index'); ?>
<?php endif; ?>

	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			Author: Nobuhiro Takahashi (<a href="http://feb19.jp" target="_blank">feb19.jp</a>)<br>
			<a href="http://feb19.jp/blog/" target="_blank">blog</a> | <a href="http://feb19.jp/apps/" target="_blank">app</a> | <a href="http://twitter.com/feb19" target="_blank">twitter</a> | <a href="https://github.com/feb19" target="_blank">github</a><br>
			<a href="http://ui.inspexing.com/" target="_blank">UI Inspexing - UI Design Gallery</a> | <a href="http://todays-rock.com/" target="_blank">今日のROCK - ロック診断</a> | <a href="http://shadowscape.jp/" target="_blank">Shadowscape</a> | <a href="http://freepianoscore.com/" target="_blank">free piano score - 無料ピアノ楽譜</a>
			<?php do_action( 'twentytwelve_credits' ); ?>
    	</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
<script>
$(function() {
	$(".grid4 h2").click(function() {
		if ($(this).parent().hasClass("open")) {
			$(this).parent().removeClass("open");
		} else {
			$(this).parent().addClass("open");
		}
	});
	prettyPrint();
});
</script>
<script type="text/javascript">
    window.___gcfg = {lang: 'ja'};
    
    (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37411643-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>