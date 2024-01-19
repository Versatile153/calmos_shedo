@extends('layouts.app')
@section('content')

<link rel='stylesheet' id='hfe-style-css' href='https://calamosassets.net/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.6.16' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='https://calamosassets.net/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.18.0' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='https://calamosassets.net/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.11.2' media='all' />
<link rel='stylesheet' id='swiper-css' href='https://calamosassets.net/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5' media='all' />
<link rel='stylesheet' id='elementor-post-6-css' href='https://calamosassets.net/wp-content/uploads/elementor/css/post-6.css?ver=1693988585' media='all' />
<link rel='stylesheet' id='elementor-pro-css' href='https://calamosassets.net/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.11.3' media='all' />
<link rel='stylesheet' id='she-header-style-css' href='https://calamosassets.net/wp-content/plugins/sticky-header-effects-for-elementor/assets/css/she-header-style.css?ver=1.6.9' media='all' />
<link rel='stylesheet' id='elementor-global-css' href='https://calamosassets.net/wp-content/uploads/elementor/css/global.css?ver=1693988586' media='all' />
<link rel='stylesheet' id='elementor-post-691-css' href='https://calamosassets.net/wp-content/uploads/elementor/css/post-691.css?ver=1696328370' media='all' />
<link rel='stylesheet' id='hfe-widgets-style-css' href='https://calamosassets.net/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.16' media='all' />
<link rel='stylesheet' id='elementor-post-398-css' href='https://calamosassets.net/wp-content/uploads/elementor/css/post-398.css?ver=1693990122' media='all' />
<link rel='stylesheet' id='elementor-post-322-css' href='https://calamosassets.net/wp-content/uploads/elementor/css/post-322.css?ver=1693990122' media='all' />
<link rel='stylesheet' id='font-awesome-css' href='https://calamosassets.net/wp-content/themes/oceanwp/assets/fonts/fontawesome/css/all.min.css?ver=5.15.1' media='all' />
<link rel='stylesheet' id='simple-line-icons-css' href='https://calamosassets.net/wp-content/themes/oceanwp/assets/css/third/simple-line-icons.min.css?ver=2.4.0' media='all' />
<link rel='stylesheet' id='oceanwp-style-css' href='https://calamosassets.net/wp-content/themes/oceanwp/assets/css/style.min.css?ver=3.4.2' media='all' />
<link rel='stylesheet' id='eael-general-css' href='https://calamosassets.net/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min.css?ver=5.8.10' media='all' />
<link rel='stylesheet' id='oe-widgets-style-css' href='https://calamosassets.net/wp-content/plugins/ocean-extra/assets/css/widgets.css?ver=6.4.2' media='all' />
<link rel='stylesheet' id='ecs-styles-css' href='https://calamosassets.net/wp-content/plugins/ele-custom-skin/assets/css/ecs-style.css?ver=3.1.7' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.4.2' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='https://calamosassets.net/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='https://calamosassets.net/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-regular-css' href='https://calamosassets.net/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3' media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script src="https://calamosassets.net/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script src="https://calamosassets.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script src="https://calamosassets.net/wp-content/plugins/sticky-header-effects-for-elementor/assets/js/she-header.js?ver=1.6.9" id="she-header-js"></script>
<script id="ecs_ajax_load-js-extra">
var ecs_ajax_params = {"ajaxurl":"https:\/\/calamosassets.net\/wp-admin\/admin-ajax.php","posts":"{\"page\":0,\"pagename\":\"insight\",\"error\":\"\",\"m\":\"\",\"p\":0,\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"name\":\"insight\",\"page_id\":0,\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"search_columns\":[],\"post_type\":[\"post\",\"page\",\"e-landing-page\"],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":true,\"update_post_term_cache\":true,\"update_menu_item_cache\":false,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"posts_per_page\":10,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}"};
</script>
<script src="https://calamosassets.net/wp-content/plugins/ele-custom-skin/assets/js/ecs_ajax_pagination.js?ver=3.1.7" id="ecs_ajax_load-js"></script>
<script src="https://calamosassets.net/wp-content/plugins/ele-custom-skin/assets/js/ecs.js?ver=3.1.7" id="ecs-script-js"></script>
<link rel="https://api.w.org/" href="https://calamosassets.net/wp-json/" /><link rel="alternate" type="application/json" href="https://calamosassets.net/wp-json/wp/v2/pages/691" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://calamosassets.net/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.4.2" />
<link rel="canonical" href="https://calamosassets.net/insight/" />
<link rel='shortlink' href='https://calamosassets.net/?p=691' />
<link rel="alternate" type="application/json+oembed" href="https://calamosassets.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcalamosassets.net%2Finsight%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://calamosassets.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcalamosassets.net%2Finsight%2F&#038;format=xml" />
<meta name="generator" content="Elementor 3.11.2; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
<link rel="preconnect" href="//code.tidio.co"><link rel="icon" href="https://calamosassets.net/wp-content/uploads/2023/03/cropped-calamos-fav-32x32.png" sizes="32x32" />
<link rel="icon" href="https://calamosassets.net/wp-content/uploads/2023/03/cropped-calamos-fav-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://calamosassets.net/wp-content/uploads/2023/03/cropped-calamos-fav-180x180.png" />
<meta name="msapplication-TileImage" content="https://calamosassets.net/wp-content/uploads/2023/03/cropped-calamos-fav-270x270.png" />


			<main id="main" class="site-main clr"  role="main">



	<div id="content-wrap" class="container clr">


		<div id="primary" class="content-area clr">


			<div id="content" class="site-content clr">



<article class="single-page-article clr">


<div class="entry clr" itemprop="text">


			<div data-elementor-type="wp-page" data-elementor-id="691" class="elementor elementor-691">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-dd5b009 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dd5b009" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-addbe3c" data-id="addbe3c" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-7e2d1e1 elementor-widget elementor-widget-spacer" data-id="7e2d1e1" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.11.2 - 22-02-2023 */
.elementor-column .elementor-spacer-inner{height:var(--spacer-size)}.e-con{--container-widget-width:100%}.e-con-inner>.elementor-widget-spacer,.e-con>.elementor-widget-spacer{width:var(--container-widget-width,var(--spacer-size));--align-self:var(--container-widget-align-self,initial);--flex-shrink:0}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container,.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,.e-con>.elementor-widget-spacer>.elementor-widget-container,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer{height:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner{height:var(--container-widget-height,var(--spacer-size))}</style>		<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-56b19d0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="56b19d0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1740c64" data-id="1740c64" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-db800ff elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="db800ff" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b81fbde" data-id="b81fbde" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-185125c elementor-widget elementor-widget-image" data-id="185125c" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img fetchpriority="high" decoding="async" width="1024" height="835" src="https://calamosassets.net/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-02-at-11.18.34-PM-6.jpeg" class="attachment-large size-large wp-image-698" alt="" srcset="https://calamosassets.net/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-02-at-11.18.34-PM-6.jpeg 1024w, https://calamosassets.net/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-02-at-11.18.34-PM-6-300x245.jpeg 300w, https://calamosassets.net/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-02-at-11.18.34-PM-6-768x626.jpeg 768w" sizes="(max-width: 1024px) 100vw, 1024px" />															</div>
				</div>
				<div class="elementor-element elementor-element-9e1ab0b elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="9e1ab0b" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.11.2 - 22-02-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default">Our Community</h2>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4c972e7" data-id="4c972e7" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-55fc6fe elementor-widget elementor-widget-image" data-id="55fc6fe" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="759" height="613" src="https://calamosassets.net/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-02-at-11.18.34-PM-7.jpeg" class="attachment-large size-large wp-image-699" alt="" srcset="https://calamosassets.net/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-02-at-11.18.34-PM-7.jpeg 759w, https://calamosassets.net/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-02-at-11.18.34-PM-7-300x242.jpeg 300w" sizes="(max-width: 759px) 100vw, 759px" />															</div>
				</div>
				<div class="elementor-element elementor-element-878d3b3 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="878d3b3" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Giving Back To The Community</h2>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-ed0e99e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ed0e99e" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-97392e9" data-id="97392e9" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-91adb72 elementor-widget elementor-widget-video" data-id="91adb72" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/VHLtoAG3VSQ?si=EMkVbSz5Ka0TIs6H&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.11.2 - 22-02-2023 */
.elementor-widget-video .elementor-widget-container{overflow:hidden;transform:translateZ(0)}.elementor-widget-video .elementor-wrapper iframe,.elementor-widget-video .elementor-wrapper video{height:100%;width:100%;border:none;background-color:#000}.elementor-widget-video .elementor-open-inline .elementor-custom-embed-image-overlay{position:absolute;top:0;left:0;width:100%;height:100%;background-size:cover;background-position:50%}.elementor-widget-video .elementor-custom-embed-image-overlay{cursor:pointer;text-align:center}.elementor-widget-video .elementor-custom-embed-image-overlay:hover .elementor-custom-embed-play i{opacity:1}.elementor-widget-video .elementor-custom-embed-image-overlay img{display:block;width:100%}.elementor-widget-video .e-hosted-video .elementor-video{-o-object-fit:cover;object-fit:cover}.e-con-inner>.elementor-widget-video,.e-con>.elementor-widget-video{width:var(--container-widget-width);--flex-grow:var(--container-widget-flex-grow)}</style>		<div class="elementor-wrapper elementor-open-inline">
			<div class="elementor-video"></div>		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f8dce84" data-id="f8dce84" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-dc1f7ed elementor-widget elementor-widget-video" data-id="dc1f7ed" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/eIZdHfY0iv8?si=0QnlGpO-yAngtBqQ&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
					<div class="elementor-wrapper elementor-open-inline">
			<div class="elementor-video"></div>		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-8d982bf elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8d982bf" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c39f35c" data-id="c39f35c" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-f2a2bf7 elementor-widget elementor-widget-video" data-id="f2a2bf7" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/C6amN3dGgoE?si=eIUDsvpw5HjBFJj-&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
					<div class="elementor-wrapper elementor-open-inline">
			<div class="elementor-video"></div>		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f7cbaf8" data-id="f7cbaf8" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-8f01c31 elementor-widget elementor-widget-video" data-id="8f01c31" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/6XCxsoCdSqQ?si=CxicrYlXo8CNBSpo&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
					<div class="elementor-wrapper elementor-open-inline">
			<div class="elementor-video"></div>		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
							</div>


</div>

</article>


			</div><!-- #content -->


		</div><!-- #primary -->


	</div><!-- #content-wrap -->



	</main><!-- #main -->



@endsection
