
<?php wp_footer(); ?>
<footer class="footer">
	<div class="footer-contents__space">
		<!-- footer left side -->
		<div class="footer_logo object__blocked ">
			<a class="footer-contents__block" href="<?php echo home_url('/'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>\img\hotel_logo.png">
			</a>
			<div class="footer-access object__blocked">
				<p>東京都新宿区新宿3-8-10</p>
				<p>TEL:03-3341-7861</p>
			</div>
		</div>
		<!-- footer right side -->
		<div class="object__blocked footer-navi object-outside">
				<div class="footer-navi_contents ClearFix">
					<a class="footer-contents__block object__blocked" href="<?php echo home_url('/'); ?>"><span>トップページ</span></a>
					<a class="footer-contents__block object__blocked" href="<?php echo home_url('/'); ?>room" ><span>客室のご案内</span></a>
					<a class="footer-contents__block object__blocked<?php if( is_page('access') ) echo ' current'; ?>" href="<?php echo home_url('/'); ?>access" ><span>アクセス</span></a>
					<a class="last footer-contents__block object__blocked<?php if( is_page('hotel_info') ) echo ' current'; ?>" href="<?php echo home_url('/'); ?>hotel_info" ><span>サービスのご案内</span></a>
				</div>
		</div>
	</div>
	<div class="ft-copyright">
		<span>Copyright(C) 2018 APA GROUP. All Rights Reserved. </span>
	</div>

</footer>
</body>
</html>
