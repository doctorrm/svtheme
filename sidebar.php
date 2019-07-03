<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<style>
	.google_translate_btn{
	     background-color: #4D87ED;
	     color:white;
	     border: none;
	     border-radius: 100px;
	     box-shadow: 0px 7px 6px 0px rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);
	     padding-left: 14px;
	     padding-right: 14px;
	     padding-top: 3px;
	     padding-bottom: 2px;
	     /* font-size: 11px; */
	}
	.google_translate_btn:hover {
		background-color: blue;	
	}
	.google_translate_btn:active {
	  background-color: blue;
	  box-shadow: 0 5px #666;
	  transform: translateY(4px);
	}
</style>

<!--谷歌翻译开始-->
<div id="google_translate_element" >
	<button type="button" class="button google_translate_btn" onclick="myclick()">Google Translate
		<span id='mylink'></span>
	</button>
	<!--github等图标开始-->
	&nbsp;
	<a href="https://www.github.com/doctorrm"  title="GitHub" target="_blank" style="text-decoration-line: none">
		<img src="https://www.github.com/favicon.ico"  height="20" width="20">
	</a>
	&nbsp;
	<a href="https://stackoverflow.com/users/6905039/doctorrm" title="StackOverflow" target="_blank" style="text-decoration-line: none">
		<img src="https://cdn.sstatic.net/Sites/stackoverflow/img/favicon.ico" height="20" width="20" >
	</a>
	&nbsp;
	<a href="https://www.leetcode.com/doctorrm" title="LeetCode" target="_blank" style="text-decoration-line: none">
		<img src="https://www.leetcode.com/favicon.ico" height="20" width="20" >
	</a>
	&nbsp;
	<a href="https://www.nowcoder.com/profile/5379055" title="牛客" target="_blank" style="text-decoration-line: none">
		<img src="https://www.nowcoder.com/favicon.ico" height="20" width="20">
	</a>
	<!--github等图标结束-->
</div>
<br>
<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'zh-CN',
            autoDisplay: true,
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }    
</script>
<!--点击后再加载翻译文件-->
<script type="text/javascript">
function myclick(){
    var myLink = document.getElementById('mylink');
    myLink.onclick = function(){
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"; 
            document.getElementsByTagName("head")[0].appendChild(script);
            return false;
    }
    document.getElementById('mylink').click();
	 googleTranslateElementInit();
}
</script>
<!--谷歌翻译结束-->

<br>

<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'twentyseventeen' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
