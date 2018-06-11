<?php


?>

					<?php do_action( 'csco_main_content_end' ); ?>

				</div><!-- .main-content -->

				<?php do_action( 'csco_main_content_after' ); ?>

			</div><!-- .container -->

			<?php do_action( 'csco_site_content_end' ); ?>

		</div><!-- .site-content -->

		<?php do_action( 'csco_site_content_after' ); ?>

		<?php do_action( 'csco_footer_before' ); ?>

		<footer class="site-footer">

			<?php do_action( 'csco_footer_start' ); ?>

			<?php get_template_part( 'template-parts/footer/footer-layout' ); ?>

			<?php do_action( 'csco_footer_end' ); ?>

		</footer>

		<?php do_action( 'csco_footer_after' ); ?>

	</div><!-- .site-inner -->

	<?php do_action( 'csco_site_end' ); ?>

</div><!-- .site -->

<a href="#top" class="scroll-to-top d-none d-sm-block"></a>

<?php do_action( 'csco_body_end' ); ?>

<?php wp_footer(); ?>
</body>
</html>
