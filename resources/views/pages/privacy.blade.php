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
<link rel='stylesheet' id='elementor-post-291-css' href='https://calamosassets.net/wp-content/uploads/elementor/css/post-291.css?ver=1693988656' media='all' />
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
var ecs_ajax_params = {"ajaxurl":"https:\/\/calamosassets.net\/wp-admin\/admin-ajax.php","posts":"{\"page\":0,\"pagename\":\"privacy-policy-2\",\"error\":\"\",\"m\":\"\",\"p\":0,\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"name\":\"privacy-policy-2\",\"page_id\":0,\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"search_columns\":[],\"post_type\":[\"post\",\"page\",\"e-landing-page\"],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":true,\"update_post_term_cache\":true,\"update_menu_item_cache\":false,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"posts_per_page\":10,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}"};
</script>
<script src="https://calamosassets.net/wp-content/plugins/ele-custom-skin/assets/js/ecs_ajax_pagination.js?ver=3.1.7" id="ecs_ajax_load-js"></script>
<script src="https://calamosassets.net/wp-content/plugins/ele-custom-skin/assets/js/ecs.js?ver=3.1.7" id="ecs-script-js"></script>
<link rel="https://api.w.org/" href="https://calamosassets.net/wp-json/" /><link rel="alternate" type="application/json" href="https://calamosassets.net/wp-json/wp/v2/pages/291" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://calamosassets.net/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.4.2" />
<link rel="canonical" href="https://calamosassets.net/privacy-policy-2/" />
<link rel='shortlink' href='https://calamosassets.net/?p=291' />
<link rel="alternate" type="application/json+oembed" href="https://calamosassets.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcalamosassets.net%2Fprivacy-policy-2%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://calamosassets.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcalamosassets.net%2Fprivacy-policy-2%2F&#038;format=xml" />
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


			<div data-elementor-type="wp-page" data-elementor-id="291" class="elementor elementor-291">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-317eb56 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="317eb56" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-38af525" data-id="38af525" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-afd9e94 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="afd9e94" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.11.2 - 22-02-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default">Privacy Policy
</h2>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-753eaa3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="753eaa3" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ce39a8f" data-id="ce39a8f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-e2c7bb5 elementor-widget elementor-widget-text-editor" data-id="e2c7bb5" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>As part of our day-to-day business we need to collect personal information from our clients and prospective clients to ensure that we can meet their needs and provide them with information about our services. Your privacy is important to us and it is our policy to respect the confidentiality of information and the privacy of individuals. We are firmly committed to protecting your personal information and maintain high standards to safeguard and protect information in a fair and lawful manner. This Privacy Policy outlines how we manage your personal information supplied to us by you or a third party in connection with our provision of services to you, or which we collect from your use of our services and/or our application process, app(s) or website. This Privacy Policy also details your rights in respect to our processing of your personal information. Our Privacy Policy will be updated and reviewed from time to time and will be updated appropriately. Any personal information we hold will be governed by our most current Privacy Policy. If you do not agree with the provisions set forth herein, you should not use the services provided by Calamosassets. Residents of the European Union/European Economic Area should read this Privacy Policy in conjunction with the GDPR Informational Guide and Cookie Policy located on the Calamosassets website.</p><p><strong>WHAT PERSONAL INFORMATION DO WE COLLECT?</strong><br />In order for you to apply for membership or become a member of the Calamosassets and to execute transactions on the Calamosassets trading platform, we will need to collect and maintain certain personal non-public information about you. If you are a prospective or actual client of Calamosassets, we may collect the following types of information about you:</p><p>Name, Address, Contact Details (Phone Number, Email)</p><p>Date of Birth, Social Security Number/National Identification Number, Driver’s License or State Identification Card Number, Salutation</p><p>Profession and Employment Details</p><p>Banking or Debit Card Information</p><p>Copies of identification documents including but not limited to your Driver’s License, State Identification Card,Passport, Social Security Card, Utility Bills, Bank Account Statements/Transaction History or other proof of residential address</p><p>Location Data</p><p>Any other similar information</p><p>We obtain this information in a number of ways through your use of our services or other dealings with us including through our website,apps, membership application process, demo account applications,webinar sign up forms, subscriptions for news updates, any other forms and from information provided in the course of ongoing customer service and compliance correspondence.</p><p>We may also collect this information about you from third parties or publicly available sources.We collect and maintain information you enter into the online application prior to submission of the application, to enable you to complete the application at a later time, and to contact you with news, marketing, and other relevant information.</p><p>We also collect and maintain information about your transactions with us, such as your account balance, trading activity and deposit and withdrawal history of your account. This information helps us administer your account and provide you with better service.</p><p>We collect and maintain information about you from consumer reporting agencies and other organizations in order to verify your identity and source of funds. We also collect and maintain your personal information in accordance with regulatory requirements and other state and federal requirements based on our status as a Designated Contract Market and Derivatives Clearing Organization doing business.<br />We may collect and maintain information about you through your use of our website, apps or through the use of cookies on our website or apps. We also use a tool called “Google Analytics” to collect and analyze information about how the Calamosassets website is used. Cookies are small pieces of text that may be placed on your computer’s hard drive through your web browser when you access a website. Your browser stores cookies in a manner associated with each website you visit.<br />We use cookies to assist us in securing your trading activities,for analytics purposes, and to enhance the performance of our website. For additional information on the types of cookies Calamosassets uses and how they are used, please see the Cookie Policy on the Calamosassets website. When you use or connect to a Calamosassets website or download a mobile app by or through a Third Party Platform, such as Facebook or other social networking site, you allow us to access and/or collect certain information from your Third Party Platform profile/account (such as your Facebook account) or via any cookies placed on your device by such Third Party Platform as permitted by the terms of the agreement and your privacy settings with the Third Party Platform. We will share such information with the Third Party Platform for their use as permitted by the terms of the agreement and your privacy setting with the Third Party Platform. Additionally, we may record any communications, electronic,by telephone, in person or otherwise, that we have with you in relation to the services we provide to you and our relationship with you. These recordings will be our sole property and will constitute evidence of the communications between us. Such communications may be recorded without the use of a warning tone or any other further notice. By using any part of the Calamosassets System, as that term is defined in the Calamosassets Membership Agreement, or by entering your personal information in the membership application, you hereby consent to the transfer of your personal information for the purpose(s) described in this Privacy Policy, and to the processing of your information,for the purposes described in this Privacy Policy. You may withdraw your consent by submitting a request to Support@calamosassets.com. In the event you withdraw consent, your personal information will be retained in accordance with applicable laws and regulations and/or groupwide recordkeeping policies. If you choose to withdraw consent, or to not provide the information we need to fulfill your request for a specific product or service, we may not be able to provide you with the requested product or service.</p><p><strong>Circumstances</strong><br />We may disclose information to companies that assist us in processing all of the transactions that occur within your account and on Calamosassets, and/or that provide other services including, but not limited to, identification verification.</p><p>Information may be disclosed to third parties if disclosure is necessary to comply with legal or regulatory processes or to protect the rights, property, or personal safety of Calamosassets, its Members or the public, or with third parties who have entered into an information sharing agreement with Calamosassets in accordance with, or as directed by regulatory statute.</p><p>We will share some of the information we collect from you upon submission of and/or completion of any field in the Calamosassets Membership Application, and/or installation of the mobile app, with vendors and other service providers who are engaged by or working with us in connection with the operation of the services we provide to you and/or for analytics purposes which may require the reproduction and display of such information in an aggregated and anonymized manner such that it will not in any way identify you</p><p>Information may also be disclosed about you to your employer if you are employed by or affiliated with another exchange, regulatory body, FINRA or NFA member. Such entities may be required to monitor your trading activity as defined under applicable securities and commodities laws.</p><p><strong>AM I ABLE TO OPT-OUT?</strong><br />The law allows you to “opt-out” of our information sharing with certain kinds of third parties. This means that you can ask us not to share your personal information with certain affiliated and non-affiliated companies. You may opt-out of the use of your information for third-party analytics, such as with Google Analytics, and/or non-essential affiliate sharing purposes by sending an email request to support@calamosassets.com from the email address registered with your Calamosassets account, identifying your name and username and identifying whether you wish to “opt-out” of third-party analytics or non-essential affiliate sharing. In order to opt-out you may need to disable certain cookies in your browser. Your choice to opt-out of information sharing for third-party analytics or non-essential affiliate purposes does not limit our ability to collect and disclose information about you, under the terms of this Privacy Policy, for other vendors. Additionally, you may opt-out of direct marketing emails and/or text messages by responding to the communication with “unsubscribe” (emails) or “STOP” (text messages).</p><p><strong>WHAT IF I WANT TO REVIEW OR CHANGE ANY OF MY PERSONAL/NON-PUBLIC INFORMATION?</strong><br />The accuracy of your personal information is important to us. If the personal information we hold about you is inaccurate or incomplete, you are entitled to have it rectified. If you are a Calamosassets Member and would like to correct, update, or confirm your information, please log into the platform using your username and password. After logging in, under the My Account tab, follow the instructions under the ‘Settings’ and ‘Personal Details’ tabs. Certain information may require documentation for verification.</p><p><strong>HOW DOES CALAMOSASSETS STORE MY PERSONAL INFORMATION AND FOR HOW LONG?</strong><br />Safeguarding the privacy of your information is important to us, whether you interact with us personally, by phone, by mail, over the internet or any other electronic medium. We hold personal information in a combination of secure computer storage facilities and paper-based files and other records, and take steps to protect the personal information we hold from misuse, loss, unauthorized access, modification or disclosure. When we consider that personal information is no longer needed we will remove any details that will identify you or we will securely destroy the records. However, we may need to maintain records for a significant period of time to comply with various regulatory obligations. For example, we are subject to certain regulatory requirements that oblige us to retain information, such as your application data, documents used to verify your identity or banking information, and supporting evidence and records of your transactions, for a period of five years after our business relationship with you has ended. It is Calamosassets’s policy that it will retain certain records for a longer period of time, 12 years after our business relationship with you has ended, in line with our global requirements. If we hold any personal information in the form of recorded communications we will hold this in line with regulatory requirements, five years after our business relationship with you has ended. Where you have opted-out of marketing communications, we will hold your details so we know you do not want to receive these communications.</p><p><strong>CAN I REQUEST MY PERSONAL INFORMATION BE ERASED?</strong><br />You can ask us to delete or remove your personal information in have no legal or regulatory obligation to retain that data. Such certain circumstances such as where we no longer need it or you withdraw your consent (where applicable) provided that we have no legal or regulatory obligation to retain that data. Such request will be subject to any retention limits with which we are required to comply in accordance with applicable laws and regulations and subject to this Privacy Policy.</p><p><strong>HOW DOES CALAMOSASSETS PROTECT MY PERSONAL INFORMATION?</strong><br />We have made a significant investment in leading-edge security software systems, and procedures to offer you a safe and secure trading environment and protect your personal, financial and trading information. While no security system is absolutely impenetrable, we are constantly reviewing, refining, and upgrading our security technology, as new tools become available. When you open an account with us, you are asked to choose a unique username and password to access and secure your account and account information. Remember: you are ultimately responsible for maintaining the secrecy of your username and password. We strongly recommend that you do not disclose this information. On our trading portal, we also use technology to encrypt information transmitted by or to you through our website. In order to maximize the benefits of this technology, we recommend that you utilize a browser with strong encryption capabilities. Calamosassets may provide links to various educational or newsworthy third parties. When you follow a link to a non Calamosassets website, you will be notified that you are leaving the Calamosassets website and that the website you are about to visit is not endorsed by Calamosassets. These other websites are not within Calamosassets’s control, and Calamosassets does not guarantee the accuracy or completeness of any information on these websites. Be aware that the privacy protection provided to you on the Calamosassets website does not extend to any other website. Once you link to another site, you are subject to the policies of that site.</p><p><strong>WHAT IF THERE ARE MATERIAL CHANGES MADE TO THIS PRIVACY POLICY?</strong><br />If at any time in the future material changes are made to this Privacy Policy, you will be provided notice of the changes.</p><p><strong>WHAT IF I HAVE A QUESTION OR COMPLAINT?</strong><br />Should you have any questions or concerns about the Calamosassets Privacy Policy, or wish to make a complaint, please email us at support@Calamosassets.com.</p><p><strong>WHAT IS THE EFFECTIVE DATE OF THE CALAMOSASSETS PRIVACY POLICY?</strong><br />This Privacy Policy was amended as of May 14, 2018.</p>						</div>
				</div>
				<div class="elementor-element elementor-element-3a5360b elementor-widget__width-inherit elementor-widget elementor-widget-button" data-id="3a5360b" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="https://calamosassets.net/share/user/register" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Get Started</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-95522e9" data-id="95522e9" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-978ed67 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="978ed67" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Services</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-f183dde elementor-widget elementor-widget-heading" data-id="f183dde" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><a href="/crypto">CRYPTOCURRENCY</a></h2>		</div>
				</div>
				<div class="elementor-element elementor-element-980583f elementor-widget elementor-widget-heading" data-id="980583f" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><a href="/estate">REAL ESTATE</a></h2>		</div>
				</div>
				<div class="elementor-element elementor-element-51913a7 elementor-widget elementor-widget-heading" data-id="51913a7" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><a href="/agriculture">AGRICULTURE</a></h2>		</div>
				</div>
				<div class="elementor-element elementor-element-6e56454 elementor-widget elementor-widget-heading" data-id="6e56454" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><a href="/gold">GOLD</a></h2>		</div>
				</div>
				<div class="elementor-element elementor-element-b036911 elementor-widget elementor-widget-heading" data-id="b036911" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><a href="/medic-canabis">MEDICAL CANNABIS</a></h2>		</div>
				</div>
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
