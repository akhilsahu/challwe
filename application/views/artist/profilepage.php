<link rel='stylesheet' href='<?php echo base_url(); ?>assets/buddypress/css/buddypress.min.css' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo base_url(); ?>assets/buddypress/js/password-verify.min.js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>assets/buddypress/js/buddypress.min.js'></script>
<style>
 
		/* Cover image */
		#buddypress #header-cover-image {
			height: 225px;
			
		}

		#buddypress #create-group-form #header-cover-image {
			margin: 1em 0;
			position: relative;
		}

		.bp-user #buddypress #item-header {
			padding-top: 0;
		}

		#buddypress #item-header-cover-image #item-header-avatar {
			margin-top: 145px;
			float: left;
			overflow: visible;
			width: auto;
		}

		#buddypress div#item-header #item-header-cover-image #item-header-content {
			clear: both;
			float: left;
			margin-left: 170px;
			margin-top: -140px;
			width: auto;
		}

		body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-header-content,
		body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-actions {
			clear: none;
			margin-top: 225px;
			margin-left: 0;
			max-width: 50%;
		}

		body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-actions {
			max-width: 20%;
			padding-top: 20px;
		}

		

		#buddypress div#item-header-cover-image .user-nicename a,
		#buddypress div#item-header-cover-image .user-nicename {
			font-size: 200%;
			color: #fff;
			margin: 0 0 0.6em;
			text-rendering: optimizelegibility;
			text-shadow: 0 0 3px rgba( 0, 0, 0, 0.8 );
		}

		#buddypress #item-header-cover-image #item-header-avatar img.avatar {
			background: rgba( 255, 255, 255, 0.8 );
			border: solid 2px #fff;
		}

		#buddypress #item-header-cover-image #item-header-avatar a {
			border: 0;
			text-decoration: none;
		}

		#buddypress #item-header-cover-image #item-buttons {
			margin: 0 0 10px;
			padding: 0 0 5px;
		}

		#buddypress #item-header-cover-image #item-buttons:after {
			clear: both;
			content: "";
			display: table;
		}

		@media screen and (max-width: 782px) {
			#buddypress #item-header-cover-image #item-header-avatar,
			.bp-user #buddypress #item-header #item-header-cover-image #item-header-avatar,
			#buddypress div#item-header #item-header-cover-image #item-header-content {
				width: 100%;
				text-align: center;
			}

			#buddypress #item-header-cover-image #item-header-avatar a {
				display: inline-block;
			}

			#buddypress #item-header-cover-image #item-header-avatar img {
				margin: 0;
			}

			#buddypress div#item-header #item-header-cover-image #item-header-content,
			body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-header-content,
			body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-actions {
				margin: 0;
			}

			body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-header-content,
			body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-actions {
				max-width: 100%;
			}

			#buddypress div#item-header-cover-image h2 a,
			#buddypress div#item-header-cover-image h2 {
				color: inherit;
				text-shadow: none;
				margin: 25px 0 0;
				font-size: 200%;
			}

			#buddypress #item-header-cover-image #item-buttons div {
				float: none;
				display: inline-block;
			}

			#buddypress #item-header-cover-image #item-buttons:before {
				content: "";
			}

			#buddypress #item-header-cover-image #item-buttons {
				margin: 5px 0;
			}
		}
                @media (min-width: 1170px) {
              .container, .ts-mega-menu .ts_is_mega_div{
                max-width: 1240px;
              }
            }
            body{
                color: #3f4549;
            }
            .event-list-cal-excerpt{
                color: #3f4549;
            }
            #event-list-cal a{
                color: #3f4549;
            }
            .woocommerce #content div.product form.cart .variations label,
            .woocommerce div.product form.cart .variations label,
            .woocommerce-page #content div.product form.cart .variations label,
            .woocommerce-page div.product form.cart .variations label{
                color: #3f4549;
            }
            #searchform input[type="submit"]{
                color: #3f4549;
            }

            /*
            --------------------------------------------------------------------------------
                2. LINK COLOR
            --------------------------------------------------------------------------------
            */
            a{
                color: #CD1C22;
            }
            a:hover, a:focus{
                color: #ac1b20;
            }
            .post-navigator ul li a:hover div{
                color: #ac1b20;
            }
            .post-navigator ul li a div{
                color: #CD1C22;
            }
            .post-navigator ul li a:hover div{
                color: #ac1b20;
            }

            /*
            --------------------------------------------------------------------------------
                3. PRIMARY COLOR
            --------------------------------------------------------------------------------
            */
            .joyslider .entry-category a{
                background: #CD1C22;
                color: #FFFFFF;
            }
            .ts-thumbnail-view article[data-title-position="over-image"] .entry-category > li > a:hover{
                background-color: #ac1b20;
                color: #f5f6f7;
            }
            .joyslider .slide-preview:hover:before,
            .joyslider .slide-preview.slide-preview-active:before,
            .joyslider .slide-preview .progress{
                background-color: #CD1C22;
            }
            .ts-video-fancybox{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .joyslider .slide-preview .slide-index{
                color: #CD1C22;
            }
            .ts-video-fancybox:hover{
                color: #f5f6f7;
                background-color: #ac1b20;
            }
            .flex-direction-nav a{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .flex-direction-nav a:hover{
                background-color: #ac1b20;
                color: #f5f6f7;
            }
            .ts-list-view article .follow-button a{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .ts-list-view article .follow-button a:hover{
                background-color: #ac1b20;
                color: #f5f6f7;
            }
            .woocommerce span.onsale-after,
            .woocommerce-page span.onsale-after{
                border-bottom: 10px solid #ac1b20;
            }
            .ts-big-countdown li i {
                color: #CD1C22;
            }
            .ts-form-login .btn{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .product_meta{
                border-bottom-color: #CD1C22;
            }
            .search #main .archive-title{
                border-color: #CD1C22;
            }
            .single-event .event-meta > li.delimiter,
            .single-event .event-meta > li.repeat{
                color: #CD1C22;
            }
            .event-list-cal-single{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .single-video .growpop-nav > nav a:hover div span{
                color: #CD1C22;
            }
            .ts-powerlink header .content .title:before, .ts-powerlink header .content .title:after{
                background: #CD1C22;
            }
            .mosaic-view article .ts-sep-wrap,
            .ts-thumbnail-view .ts-sep-wrap{
                color: #CD1C22;
            }
            .flickr_badge_image:hover a img{
                border-color: #CD1C22;
            }
            .post-slider .post-slider-list .entry-title h4 i{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .bx-wrapper .slider-caption .title a{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .bx-wrapper .slider-caption .title a:hover{
                color: #f5f6f7;
                background-color: #ac1b20;
            }
            .teams article .ts-sep-wrap{
                color: #CD1C22;
            }
            body.slimvideo .wp-playlist-light .wp-playlist-playing,
            body.slimvideo .mejs-controls .mejs-time-rail .mejs-time-current{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .post-meta ul li i{
                color: #CD1C22;
            }
            .entry-excerpt{
                color: #878787;
            }
            .woocommerce #content div.product p.price,
            .woocommerce #content div.product span.price,
            .woocommerce div.product p.price,
            .woocommerce div.product span.price,
            .woocommerce-page #content div.product p.price,
            .woocommerce-page #content div.product span.price,
            .woocommerce-page div.product p.price,
            .woocommerce-page div.product span.price,
            .woocommerce .woocommerce-message,
            .woocommerce-page .woocommerce-message {
                color: #CD1C22;
            }
            .woocommerce span.onsale,
            .woocommerce-page span.onsale,
            .woocommerce #content div.product .woocommerce-tabs ul.tabs li{
                background: #CD1C22;
                color: #FFFFFF;
            }
            .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active a:after,
            .woocommerce div.product .woocommerce-tabs ul.tabs li.active a:after,
            .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active a:after,
            .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a:after{
                border-color: #CD1C22;
            }
            .woocommerce #content .woocommerce-result-count{
                color: #CD1C22;
                border-color: #CD1C22;
            }
            .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
            .woocommerce-page .widget_price_filter .ui-slider .ui-slider-range,
            .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
            .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle{
                background-color: #CD1C22;
            }
            .woocommerce .widget_layered_nav_filters ul li a,
            .woocommerce-page .widget_layered_nav_filters ul li a{
                background-color: #CD1C22;
                border-color: #CD1C22;
            }
            .woocommerce #content .quantity .minus:hover,
            .woocommerce .quantity .minus:hover,
            .woocommerce-page #content .quantity .minus:hover,
            .woocommerce-page .quantity .minus:hover,
            .woocommerce #content .quantity .plus:hover,
            .woocommerce .quantity .plus:hover,
            .woocommerce-page #content .quantity .plus:hover,
            .woocommerce-page .quantity .plus:hover{
                background-color: #ac1b20;
                color: #f5f6f7;
            }
            .woocommerce #content input.button.alt,
            .woocommerce #respond input#submit.alt,
            .woocommerce a.button.alt,
            .woocommerce button.button.alt,
            .woocommerce input.button.alt,
            .woocommerce-page #content input.button.alt,
            .woocommerce-page #respond input#submit.alt,
            .woocommerce-page a.button.alt,
            .woocommerce-page button.button.alt,
            .woocommerce-page input.button.alt{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .woocommerce #content input.button.alt:hover,
            .woocommerce #respond input#submit.alt:hover,
            .woocommerce a.button.alt:hover,
            .woocommerce button.button.alt:hover,
            .woocommerce input.button.alt:hover,
            .woocommerce-page #content input.button.alt:hover,
            .woocommerce-page #respond input#submit.alt:hover,
            .woocommerce-page a.button.alt:hover,
            .woocommerce-page button.button.alt:hover,
            .woocommerce-page input.button.alt:hover{
                background: #ac1b20 !important;
                color: #f5f6f7 !important;
            }
            .woocommerce .woocommerce-info,
            .woocommerce-page .woocommerce-info,
            .woocommerce .woocommerce-message,
            .woocommerce-page .woocommerce-message{
                border-color: #CD1C22;
            }
            .woocommerce .woocommerce-error,
            .woocommerce-page .woocommerce-error{
                border-color: #a80023;
            }
            .woocommerce .woocommerce-error:before,
            .woocommerce-page .woocommerce-error:before{
                color: #a80023;
            }
            .woocommerce .woocommerce-info:before,
            .woocommerce-page .woocommerce-info:before,
            .woocommerce .woocommerce-message:before,
            .woocommerce-page .woocommerce-message:before{
                color: #CD1C22;
            }
            .product-view .overlay-effect .entry-overlay > a:not(.entry-view-more){
                color: #FFFFFF;
                background-color: #CD1C22            }
            .product-view .overlay-effect .entry-overlay > a:not(.entry-view-more):hover{
                color: #f5f6f7 !important;
                background-color: #ac1b20 !important;
            }
            .block-title-lineariconcenter .block-title-container i[class^="icon"]{
                color: #CD1C22;
            }
            .ts-clients-view div[data-tooltip]:hover:before {
                background-color: rgba(205,28,34, 0.8);
                color: #FFFFFF;
            }
            .ts-clients-view div[data-tooltip]:hover:after {
                border-top-color: rgba(205,28,34, 0.8);
            }
            .ts-mega-menu .main-menu .ts_is_mega_div .title:after,
            .ts-mobile-menu .main-menu .ts_is_mega_div .title:after{
                background-color: #CD1C22;
            }
            .ts-header-menu .main-menu .current-menu-item > a,
            .ts-header-menu .main-menu .current-menu-parent > a,
            .ts-header-menu .main-menu .current-menu-ancestor > a,
            .ts-mobile-menu .main-menu .current-menu-item > a,
            .ts-mobile-menu .main-menu .current-menu-parent > a,
            .ts-mobile-menu .main-menu .current-menu-ancestor  > a,
            .ts-sticky-menu .main-menu .current-menu-item > a,
            .ts-sticky-menu .main-menu .current-menu-parent > a,
            .ts-sticky-menu .main-menu .current-menu-ancestor  > a{
                color: #CD1C22 !important;
            }
            .ts-header-menu .menu-item-has-children .sub-menu li .ts_taxonomy_views a.view-more{
                color: #CD1C22;
            }
            .ts-header-menu .menu-item-has-children .sub-menu li .ts_taxonomy_views a.view-more:hover{
                color: #ac1b20;
            }
            .ts-big-posts .ts-sep-wrap:after{
                background-color: rgba(205,28,34, 0.5);
            }
            .tags-container a.tag, .tags-container a[rel="tag"]{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .ts-thumbnail-view .thumb-post-categories a,
            .ts-grid-view .grid-post-categories a,
            .ts-big-posts .big-post-categories a,
            .ts-super-posts .ts-super-posts-categories a{
                color: #CD1C22;
            }
            .ts-thumbnail-view .thumb-post-categories a:hover,
            .ts-grid-view .grid-post-categories a:hover,
            .ts-big-posts .big-post-categories a:hover,
            .ts-super-posts .ts-super-posts-categories a:hover{
                color: #CD1C22;
            }
            #searchbox input[type="text"]:focus{
                border-bottom-color: #CD1C22;
            }
            #searchbox input.searchbutton:hover + i.icon-search{
                color: #CD1C22;
            }
            .search-no-results .searchpage,
            .search .attention{
                color: #CD1C22;
            }
            .video-single-resize:hover b{
                color: #CD1C22;
            }
            #commentform .form-submit input[type="submit"]{
                color: #FFFFFF;
            }
            .widget-title:after {
                background: #CD1C22;
            }
            .callactionr a.continue,
            .commentlist > li .comment .comment-reply-link{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .block-title-lineafter .block-title-container .the-title:after{
                background-color: #CD1C22;
            }
            .ts-grid-view .entry-meta a, .ts-big-posts .big-post-meta a{
                color: #CD1C22;
            }
            .ts-list-view .readmore{
                background-color: #CD1C22;
            }
            .ts-super-posts .title-holder{
                background-color: #CD1C22;
            }
            .ts-thumbnail-view .item-hover span, .ts-grid-view .item-hover span{
                color: #CD1C22;
            }
            .ts-grid-view .readmore:hover{
                color: #CD1C22;
            }
            .ts-filters li.active a{
                color: #CD1C22;
            }
            .ts-filters li.active:after{
                background-color: #CD1C22;
            }
            .ts-filters li a:not(.active):hover{
                color: #ac1b20;
            }
            .post-navigator ul li a{
                border-top-color: #CD1C22;
            }
            .post-navigator ul li a:hover{
                border-top-color: #262233;
            }
            #commentform .form-submit input[type="submit"]{
                background-color: #CD1C22;
            }
            .listed-two-view .item-hover, .ts-big-posts .item-hover{
                background-color: rgba(205,28,34, 0.8);
            }
            .block-title-linerect .block-title-container:before{
                background-color: #CD1C22;
            }
            .teams article:hover .image-holder img{
                border-color: #CD1C22;
            }
            .delimiter.iconed:before{
                color: #CD1C22;
            }
            .block-title-leftrect .block-title-container:before{
                background-color: #CD1C22;
            }
            a.tag:hover, a[rel="tag"]:hover{
                color: #CD1C22;
            }
            input.contact-form-submit{
                background: #CD1C22;
            }
            .post-slider .post-slider-list .entry-category ul li a, .post-slider .main-entry .entry-category a{
                color: #CD1C22;
            }
            .post-slider .main-entry .entry-content .entry-title:hover{
                border-right-color: #CD1C22;
            }
            .tweet-entry .icon-twitter{
                color: #CD1C22;
            }
            .ts-pagination ul .page-numbers.current{
                background: #CD1C22;
                color: #FFFFFF;
            }
            .slyscrollbar .handle{
                background: #CD1C22;
            }
            .ts-grid-view article .entry-footer .btn-play-video:hover > i{
                background: #CD1C22;
                color: #FFFFFF;
            }
            .btn:hover,
            .btn:active,
            .btn:focus{
                border-color: #CD1C22;
            }
            .btn.active{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .views-read-more{
                background: #CD1C22;
                color: #FFFFFF !important;
            }
            .mCS-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{
                background: #CD1C22;
            }
            .mCS-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar:hover,
            .mCS-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{
                background: #ac1b20;
            }
            .ts-powerlink header .content .title{
                color: #FFFFFF;
            }
            .nav-tabs .tab-item.active > a:before,
            .nav-tabs .tab-item.active > a:hover:before,
            .nav-tabs .tab-item.active > a:focus:before{
                border-color: #CD1C22;
            }
            .ts-tags-container > a:after,
            .ts-tags-container a.tag:hover,
            article .default-effect .overlay-effect .view-more > span:before,
            article .default-effect .overlay-effect .view-more > span:after{
                background: #CD1C22;
            }
            .ts-thumbnail-view article h3.title:after{
                background: #CD1C22;
            }
            #ts-timeline .timeline-entry:before,
            .ts-grid-view article .entry-footer .btn-grid-more:hover > i{
                background-color: #CD1C22;
            }
            .ts-video-carousel .nav-arrow .nav-icon{
                color: #CD1C22;
            }
            .mosaic-view article .ts-sep-wrap:after,
            .ts-thumbnail-view .ts-sep-wrap:before,
            .ts-thumbnail-view .ts-sep-wrap:after{
                background: #CD1C22;
            }
            .post-content .event-meta-details li i{
                color: #CD1C22;
            }
            .post-author-box + .delimiter i{
                color: #CD1C22;
            }
            .social-icons ul li a{
                border-color: #CD1C22;
                color: #CD1C22;
            }
            .ts-get-calendar.ts-next:hover, .ts-get-calendar.ts-prev:hover{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .ts-event-title a{
                background: #CD1C22;
                color: #FFFFFF;
            }
            .ts-small-countdown .time-remaining li > span{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .main-menu > .current-menu-ancestor:after,
            .main-menu > .current_page_item:after{
                border-color: #CD1C22;
            }
            .ts-grid-view article a,
            .ts-thumbnail-view article a,
            .ts-big-posts article a,
            .ts-list-view article a,
            .ts-super-posts article a,
            .product-view article a,
            .ts-timeline a,
            .ts-article-accordion .inner-content a{
                color: #CD1C22;
            }
            .ts-grid-view article a:hover,
            .ts-thumbnail-view article a:hover,
            .ts-big-posts article a:hover,
            .ts-list-view article a:hover,
            .ts-super-posts article a:hover,
            .product-view article a:hover,
            .ts-timeline a:hover,
            .ts-article-accordion .inner-content a:hover {
                color: #ac1b20;
            }
            .ts-grid-view .entry-category:after{
                border-color: #CD1C22;
            }
            .ts-thumbnail-view article[data-title-position="over-image"] .entry-category > li{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .product-view article .grid-shop-button .button.add_to_cart_button:hover{
                color: #CD1C22;
            }
            .mosaic-view .entry-meta .entry-meta-date .meta-month{
                color: #CD1C22;
            }
            .ts-timeline header .entry-article-header .entry-meta-date:before{
                background-color: #CD1C22;
            }
            .ts-timeline-view[data-alignment="left"]:before{
                background-color: #CD1C22;
            }
            .ts-lima-effect .lima-details .more-details{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .ts-powerlink header .content .button{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .ts-iconbox-bordered figure figcaption .btn,
            .ts-iconbox-background figure figcaption .btn{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .ts-iconbox-bordered figure figcaption .btn:hover,
            .ts-iconbox-background figure figcaption .btn:hover{
                background-color: #ac1b20;
                color: #f5f6f7;
            }
            .ts-article-accordion .panel-heading .entry-icon{
                color: #CD1C22;
            }
            .teams article .image-holder .team-box-square:before,
            .teams article .image-holder .team-box-square:after,
            .teams article .image-holder .team-box-square2:before,
            .teams article .image-holder .team-box-square2:after{
                background-color: #CD1C22;
            }
            .teams article h4 a:hover{
                color: #CD1C22;
            }
            .single .post-rating .rating-items li .rating-title:before{
                background-color: #CD1C22;
            }
            .ts-pricing-view article > header .entry-title{
                border-bottom: 2px solid #CD1C22;
            }
            .ts-pricing-view article > section{
                border-top: 2px solid #CD1C22;
            }
            .single_style2 .post-categories li a,
            .single_style3 .post-categories li a,
            .single_style5 .post-categories li a,
            .single_style6 .post-categories li a{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .ts-pagination-more{
                border-color: #CD1C22;
            }
            .ts-pagination-more:before, .ts-pagination-more:after, .ts-pagination-more span:before, .ts-pagination-more span:after{
                background: #CD1C22;
            }
            .ts-featured-area .nav-tabs > li.active > a:after{
                background-color: #CD1C22;
            }
            .testimonials .entry-section .inner-section .author-text{
                color: #CD1C22;
            }
            .testimonials .entry-section .inner-section .author-name a:hover{
                color: #ac1b20;
            }
            #buddypress .standard-form div.submit input{
                background: #CD1C22;
                color: #FFFFFF;
            }
            #buddypress .standard-form div.submit input:hover{
                background: #ac1b20;
                color: #f5f6f7;
            }
            #buddypress div#item-header h2{
                color: #CD1C22;
            }
            .nav-fillslide h3 {
                color: #CD1C22;
            }
            #searchbox .hidden-form-search i.icon-search:hover{
                color: #ac1b20;
            }
            #searchbox .hidden-form-search .search-close{
                color: #CD1C22;
            }
            #searchbox .hidden-form-search .search-close:hover{
                color: #ac1b20;
            }
            .ts-select-by-category li.active a{
                border-top: 2px solid #CD1C22;
                color: #CD1C22;
            }
            #mc4wp_email:active,
            #mc4wp_email:focus{
                border-color: #CD1C22;
            }
            .mc4wp-form input[type="submit"]{
                color: #FFFFFF;
                background-color: #CD1C22;
            }
            .mc4wp-form input[type="submit"]:hover{
                background-color: #ac1b20;
                color: #f5f6f7;
            }
            .post-tags .tags-container a[rel="tag"]{
                color: #CD1C22;
            }
            .post-tags .tags-container a[rel="tag"]:hover{
                color: #ac1b20;
            }
            .single-video .post-video-content .post-content-top .post-meta .is-featured i{
                color: #FFFFFF;
                background-color: #CD1C22;
            }
            .carousel-wrapper ul.carousel-nav > li.carousel-nav-right,
            .carousel-wrapper ul.carousel-nav > li.carousel-nav-left,
            .carousel-wrapper ul.carousel-nav > li .hidden_btn{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .ts-pagination-more span{
                background-color: #CD1C22;
                color: #FFFFFF;
            }
            .ts-pagination-more span:hover{
                background-color: #ac1b20;
                color: #f5f6f7;
            }

            .ts-big-countdown{
                box-shadow: 0 0 0 1px #CD1C22 inset, 0 0 0 7px #ffffff inset, 0 0 0 8px #CD1C22 inset;
            }

            /*
            --------------------------------------------------------------------------------
                4. SECONDARY COLOR
            --------------------------------------------------------------------------------
            */
            .post-edit-link{
                color: #262233;
            }
            .ts-list-users article .follow-button > a,
            .ts-list-users article .ts-follow > a{
                background: #262233;
                color: #FFFFFF;
            }
            .ts-list-users article .follow-button > a:hover,
            .ts-list-users article .ts-follow > a:hover{
                background: #41395d;
                color: #eef4f7;
            }
            .post-edit-link:hover{
                color: #41395d;
                border-color: #41395d;
            }
            .ts-big-countdown .time-remaining > li > div{
                color: #262233;
            }
            .single-event .event-time{
                color: #262233;
            }
            .event-list-cal th {
                background-color: #262233;
                color: #FFFFFF;
                border-color: #41395d;
                text-shadow: 1px 1px 0 #41395d;
            }
            .event-list-cal td.today .event-list-cal-day{
                background-color: #262233;
                color: #FFFFFF;
                text-shadow: 1px 1px 0px #41395d;
            }
            .widget_list_events .widget-meta .date-event .day{
                color: #262233;
            }
            .ts-thumbnail-view article:hover .ts-sep-wrap{
                color: #262233;
            }
            .bx-wrapper .slider-caption .sub{
                background-color: #262233;
                color: #FFFFFF;
            }
            .ts-bxslider .controls-direction span a{
                background-color: #262233;
                color: #FFFFFF;
            }
            .bx-wrapper .bx-pager.bx-default-pager a.active{
                background-color: #262233;
            }
            .teams article .article-title{
                color: #262233;
            }
            .ts-team-single .member-content .member-name .category > li{
                background-color: #262233;
                color: #FFFFFF;
            }
            .single-portfolio .page-title{
                color: #262233;
            }
            .woocommerce #content .quantity .minus,
            .woocommerce .quantity .minus,
            .woocommerce-page #content .quantity .minus,
            .woocommerce-page .quantity .minus,
            .woocommerce #content .quantity .plus,
            .woocommerce .quantity .plus,
            .woocommerce-page #content .quantity .plus,
            .woocommerce-page .quantity .plus{
                background-color: #262233;
                color: #FFFFFF;
            }
            .woocommerce #content input.button,
            .woocommerce #respond input#submit,
            .woocommerce a.button,
            .woocommerce button.button,
            .woocommerce input.button,
            .woocommerce-page #content input.button,
            .woocommerce-page #respond input#submit,
            .woocommerce-page a.button,
            .woocommerce-page button.button,
            .woocommerce-page input.button,
            .woocommerce .woocommerce-error .button,
            .woocommerce .woocommerce-info .button,
            .woocommerce .woocommerce-message .button,
            .woocommerce-page .woocommerce-error .button,
            .woocommerce-page .woocommerce-info .button,
            .woocommerce-page .woocommerce-message .button{
                background: transparent;
                color: #262233;
            }
            .woocommerce #content input.button:hover,
            .woocommerce #respond input#submit:hover,
            .woocommerce a.button:hover,
            .woocommerce button.button:hover,
            .woocommerce input.button:hover,
            .woocommerce-page #content input.button:hover,
            .woocommerce-page #respond input#submit:hover,
            .woocommerce-page a.button:hover,
            .woocommerce-page button.button:hover,
            .woocommerce-page input.button:hover{
                background: transparent;
                color: #41395d;
            }
            .woocommerce .product-view a.button:after,
            .woocommerce .product-view button.button:after,
            .woocommerce .product-view input.button:after{
                background-color: #262233            }
            .woocommerce .product-view a.button:hover:after,
            .woocommerce .product-view button.button:hover:after,
            .woocommerce .product-view input.button:hover:after{
                background-color: #41395d            }
            .product-view .overlay-effect .entry-overlay > a{
                color: #FFFFFF;
                background-color: #262233;
            }
            .product-view .overlay-effect .entry-overlay > a:hover{
                color: #eef4f7;
                background-color: #41395d;
            }
            .tags-container a.tag:hover, .tags-container a[rel="tag"]:hover{
                background-color: #262233;
                color: #eef4f7;
            }
            .callactionr a.continue:hover{
                background-color: #262233;
                color: #FFFFFF;
            }
            .ts-grid-view .item-hover{
                background-color: rgba(38,34,51, 0.8);
            }
            .teams article:hover .article-title{
                border-color: #262233;
            }
            .ts-pagination ul li{
                background-color: #262233;
                color: #FFFFFF;
            }
            .ts-pagination ul .page-numbers:not(.current):hover{
                background: #41395d;
                color: #eef4f7;
            }
            .ts-pricing-view article > footer a.btn{
                border-color: #262233;
                color: #262233;
            }
            .touchsize-likes .touchsize-likes-count:before,
            .post-meta .post-meta-likes span.touchsize-likes-count:before{
                color: #ca1913;
            }
            .touchsize-likes.active .touchsize-likes-count:before,
            .post-meta .post-meta-likes .touchsize-likes.active span.touchsize-likes-count:before{
                color: #b80000;
            }
            .purchase-btn{
                color: #262233;
            }
            .purchase-btn:hover{
                background: #262233;
            }
            .ts-powerlink header .content .button:hover{
                background-color: #41395d;
                color: #eef4f7;
            }
            .ts-timeline .timeline-view-more i, .ts-pagination-more:hover > i{
                color: #262233;
            }
            .ts-small-countdown .time-remaining li > i{
                color: #262233;
            }
            .ts-events-calendar tr td.calendar-day-head{
                background: #262233;
                color: #FFFFFF;
            }

            /*
            --------------------------------------------------------------------------------
                5. META COLOR
            --------------------------------------------------------------------------------
            */
            .product-view article .entry-categories a{
                color: #b6b6b6;
            }
            .archive-title span,
            .archive-desc p,
            footer .related .related-list .related-content .ts-view-entry-meta-date,
            .ts-timeline-view .entry-meta .post-date-add,
            .ts-grid-view article .ts-view-entry-meta-date,
            .ts-bigpost-view article .ts-view-entry-meta-date,
            .ts-list-view article .ts-view-entry-meta-date{
                color: #b6b6b6;
            }
            .ts-big-countdown .time-remaining > li > span{
                color: #b6b6b6;
            }
            .ts-timeline header .entry-article-header .entry-meta-date .meta-month,
            .ts-timeline header .entry-article-header .entry-meta-date .meta-year{
                color: #b6b6b6;
            }
            .ts-featured-area-big .entry-date{
                color: #b6b6b6;
            }
            .ts-list-view article .entry-meta-followers{
                color: #b6b6b6;
            }
            .ts-user-profile-dw .user-info .user-role{
                color: #b6b6b6;
            }
            .widget.buddypress span.activity{
                color: #b6b6b6;
            }
            .single-event .event-meta > li span.meta{
                color: #b6b6b6;
                font-size: 13px;
            }
            .widget_list_events .widget-meta .date-event .month{
                color: #b6b6b6;
            }
            .post-title-meta,
            .post-details-title,
            .post-title-meta .post-categories a,
            .post-title-meta .touchsize-likes,
            .post-title-meta .post-title-meta-categories > i,
            .post-tagged-icon > i{
                color: #b6b6b6;
            }
            .teams article .article-position, .ts-big-posts .entry-meta ul li{
                color: #b6b6b6;
            }
            .ts-team-single .member-content .position{
                color: #b6b6b6;
            }
            .testimonials .inner-header .header-icon,
            .testimonials .entry-section .inner-section .author-position{
                color: #b6b6b6;
            }
            .post-title-meta, .ts-big-posts .big-post-meta > ul > li, .ts-grid-view .entry-meta > li, .views-delimiter{
                color: #b6b6b6;
            }
            .single .page-subtitle{
                color: #b6b6b6;
            }
            .search-results .searchcount{
                color: #b6b6b6;
            }
            article.type-post .page-title .touchsize-likes .touchsize-likes-count{
                color: #b6b6b6;
            }
            .ts-cool-share label > span{
                color: #b6b6b6;
            }
            .time-remaining li span{
                color: #b6b6b6;
            }
            .ts-grid-view article .entry-category,
            .ts-big-posts article .entry-category,
            .ts-thumbnail-view article[data-title-position="below-image"] .entry-category,
            .ts-thumbnail-view article[data-title-position="below-image"] .entry-date{
                color: #b6b6b6;
            }
            .ts-thumbnail-view article[data-title-position="over-image"]:hover .meta-dates .entry-date{
                color: #b6b6b6;
                text-shadow: none;
            }
            .ts-thumbnail-view article[data-title-position="over-image"]:hover .meta-dates .entry-date span:before,
            .ts-thumbnail-view article[data-title-position="over-image"]:hover .meta-dates .entry-date span:after{
                background-color: #b6b6b6;
            }
            .ts-timeline section .entry-author,
            .ts-list-view .entry-meta-date{
                color: #b6b6b6;
            }
            .ts-featured-area .featured-area-content .entry-content .entry-meta,
            .ts-featured-area.posts-right-of-main-image .featured-area-content .entry-content .entry-meta-likes,
            .ts-featured-area .featured-area-tabs .entry-meta-date,
            .ts_taxonomy_views .ts-date,
            .ts-small-news figure figcaption .entry-date,
            .entry-category > li{
                color: #b6b6b6;
            }
            .ts-article-accordion .entry-meta-date{
                color: #b6b6b6;
            }
            .teams article .article-excerpt{
                color: #b6b6b6;
            }
            .single .entry-meta .post-meta{
                color: #b6b6b6;
            }
            .nav-fillslide div span {
                color: #b6b6b6;
                border-color: #b6b6b6;
            }
            .nav-fillslide p{
                color: #b6b6b6;
            }
            .widget_most_viewed .count-item,
            .widget_most_liked .count-item{
                color: #b6b6b6;
            }
            .ts-video-carousel .slides .carousel-meta li{
                color: #b6b6b6;
            }
            header .entry-article-header .entry-likes > a,
            header .entry-article-header .entry-likes .touchsize-likes-count:before,
            header .entry-article-header .entry-author .post-author-info > li,
            section .entry-section .entry-section-footer .entry-likes > a,
            section .entry-section .entry-section-footer .entry-likes .touchsize-likes-count:before,
            section .entry-section .entry-section-footer .entry-author .post-author-info > li{
                color: #b6b6b6;
            }
            .ts-timeline header .entry-article-header .post-author-info > li,
            .ts-featured-article section .entry-section-footer .entry-meta,
            .ts-featured-article section .is-featured-article,
            .entry-meta > li{
                color: #b6b6b6;
            }
            .single-video .post-meta > li,
            .single-video .post-meta > li > a,
            .single-video .post-video-content .post-content-top .post-meta-date{
                color: #b6b6b6            }

            /*
            --------------------------------------------------------------------------------
                6. VIEWS COLOR
            --------------------------------------------------------------------------------
            */
            .ts-grid-view article .entry-title a,
            .ts-thumbnail-view article .entry-title a,
            .ts-big-posts article .title a,
            .ts-list-view article .entry-title a,
            .product-view article .entry-title a,
            .ts-timeline .entry-title a{
                color: #434A54;
            }
            .post-tags .tags-container a[rel="tag"]:hover{
                background-color: transparent;
            }
            .ts-grid-view article .entry-title a:hover,
            .ts-big-posts article .entry-title .title a:hover,
            .ts-list-view article .entry-title a:hover,
            .product-view article .entry-title a:hover,
            .ts-timeline .entry-title a:hover{
                color: #656D78;
            }

            /*
            --------------------------------------------------------------------------------
                7. MENU COLOR
            --------------------------------------------------------------------------------
            */
            .ts-header-menu .main-menu li a:hover,
            .ts-sticky-menu .main-menu li a:hover,
            .ts-mobile-menu .main-menu li a:hover {
                color: #7a7a7a;
            }
            .ts-header-menu .main-menu > .menu-item-has-children ul li > a:hover:before,
            .ts-sticky-menu .main-menu > .menu-item-has-children ul li > a:hover:before,
            .ts-mega-menu .menu-item-has-children .ts_is_mega_div .ts_is_mega > li > a:hover:before,
            .ts-mobile-menu .main-menu > .menu-item-has-children ul li > a:hover,
            .ts-mobile-menu .menu-item-type-taxonomy.menu-item-has-children .ts_is_mega_div > .sub-menu li a:hover:before{
                background-color: #f1f1f1;
            }
            .ts-header-menu .main-menu li > a,
            .ts-sticky-menu .main-menu li > a,
            .ts-mobile-menu .main-menu li > a,
            .ts-mobile-menu .menu-item-type-taxonomy.menu-item-has-children .ts_is_mega_div > .sub-menu li a {
                color: #53506d;
            }
            .ts-header-menu .sub-menu:not(.ts_is_mega),
            .ts-sticky-menu .sub-menu:not(.ts_is_mega),
            .ts-mega-menu .menu-item-type-taxonomy .sub-menu,
            .ts-mobile-menu .sub-menu,
            .ts-mega-menu .is_mega .ts_is_mega_div:after {
                background-color: #fdfdfd;
            }
            .ts-mega-menu .main-menu .ts_is_mega_div .title{
                color: #53506d;
            }
            .sub-menu li a:hover{
                color: #7a7a7a;
            }
                                    h1{font-size: 54px;font-family: 'Varela Round';font-weight: 400;font-style: normal;}h2{font-size: 44px;font-family: 'Varela Round';font-weight: 400;font-style: normal;}h3{font-size: 36px;font-family: 'Varela Round';font-weight: 400;font-style: normal;}h4{font-size: 28px;font-family: 'Varela Round';font-weight: 400;font-style: normal;}h5{font-size: 18px;font-family: 'Varela Round';font-weight: 400;font-style: normal;}h6{font-size: 14px;font-family: 'Varela Round';font-weight: 400;font-style: normal;}.ts-behold-menu, .main-menu li{font-size: 13px;font-family: 'Varela Round';font-weight: 400;font-style: normal;}body{font-size: 14px;font-family: 'Open Sans';font-weight: 400;font-style: normal;}.logo{font-family: 'Open Sans';font-style: normal;}            
            .ts-sticky-menu{
                background-color: #FFFFFF;
            }
            .ts-sticky-menu .sf-menu li ul{
                background-color: #FFFFFF;
            }
            .ts-sticky-menu .container .sf-menu li a, .ts-sticky-menu .container .sf-menu li, .ts-sticky-menu .sf-menu{
                color:#444444;}
            .ts-sticky-menu .container .sf-menu li.current-menu-item > a{
                color: #CD1C22;
            }
</style>
<section id="main">
    <div class="container no-pad">
        <div id="" class="col-lg-12">
            <div id="content" role="main">	
                <div class="row">
                    <div class="col-lg-12">
                        <article id="post-0" class="bp_members type-bp_members post-0 page type-page status-publish hentry">
                            <header class="entry-header">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1 class="page-title">John Doe</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="featured-image">
                                        </div>
                                    </div>
                                </div>
                            </header><!-- .entry-header -->

                            <div class="post-content">

                                <div id="buddypress">


                                    <div id="item-header" role="complementary">



                                        <div id="cover-image-container">
                                            <a id="header-cover-image" href="index.html"></a>

                                            <div id="item-header-cover-image">
                                                <div id="item-header-avatar">
                                                    <a href="index.html">

                                                        <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=150&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-150 photo" width="150" height="150" alt="Profile picture of John Doe" />
                                                    </a>
                                                </div><!-- #item-header-avatar -->

                                                <div id="item-header-content">

                                                    <h2 class="user-nicename">@admin</h2>

                                                    <div id="item-buttons"></div><!-- #item-buttons -->

                                                    <span class="activity">active 2 weeks ago</span>


                                                    <div id="item-meta">


                                                        <div id="latest-update">

                                                            Here is a simple status update. Just for testing this! <a href="../../activity/p/7/index.html" rel="nofollow">View</a>
                                                        </div>



                                                    </div><!-- #item-meta -->

                                                </div><!-- #item-header-content -->

                                            </div><!-- #item-header-cover-image -->
                                        </div><!-- #cover-image-container -->



                                    </div><!-- #item-header -->

                                    <div id="item-nav">
                                        <div class="item-list-tabs no-ajax" id="object-nav" role="navigation">
                                            <ul>

                                                <li id="activity-personal-li"  class="current selected"><a id="user-activity" href="activity/index.html">Activity</a></li><li id="xprofile-personal-li" ><a id="user-xprofile" href="profile/index.html">Profile</a></li><li id="posts-personal-li" ><a id="user-posts" href="posts/index.html">Videos</a></li><li id="favorites-personal-li" ><a id="user-favorites" href="favorites/index.html">Favorites</a></li><li id="members-following-personal-li" ><a id="user-members-following" href="following/index.html">Following <span>4</span></a></li><li id="members-followers-personal-li" ><a id="user-members-followers" href="followers/index.html">Followers <span>0</span></a></li>

                                            </ul>
                                        </div>
                                    </div><!-- #item-nav -->

                                    <div id="item-body">


                                        <div class="item-list-tabs no-ajax" id="subnav" role="navigation">
                                            <ul>

                                                <li id="just-me-personal-li"  class="current selected"><a id="just-me" href="activity/index.html">Personal</a></li><li id="activity-mentions-personal-li" ><a id="activity-mentions" href="activity/mentions/index.html">Mentions</a></li><li id="activity-following-personal-li" ><a id="activity-following" href="activity/following/index.html">Following</a></li><li id="activity-favs-personal-li" ><a id="activity-favs" href="activity/favorites/index.html">Favorites</a></li>
                                                <li id="activity-filter-select" class="last">
                                                    <label for="activity-filter-by">Show:</label>
                                                    <select id="activity-filter-by">
                                                        <option value="-1">&mdash; Everything &mdash;</option>

                                                        <option value="activity_update">Updates</option>


                                                    </select>
                                                </li>
                                            </ul>
                                        </div><!-- .item-list-tabs -->



                                        <div class="activity">




                                            <ul id="activity-stream" class="activity-list item-list">




                                                <li class="activity new_user_image activity-item has-comments" id="activity-43">
                                                    <div class="activity-avatar">
                                                        <a href="index.html">

                                                            <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=50&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of John Doe" />
                                                        </a>
                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">


                                                        </div>


                                                        <div class="activity-inner">

                                                            <p>Aliquam eu vestibulum dolor. Donec in lorem auctor, scelerisque nibh nec, suscipit augue. Aliquam id fermentum est. In vestibulum, dolor id hendrerit ultrices, eros metus faucibus augue, vitae iaculis ex lorem a quam.<br />
                                                                <a href="../../activity/p/43/index.html" class="view activity-time-since" title="View Discussion" rel="nofollow"><span class="time-since">1 year, 2 months ago</span></a></p>

                                                        </div>



                                                        <div class="activity-meta">



                                                        </div>

                                                    </div>



                                                    <div class="activity-comments">

                                                        <ul>
                                                            <li id="acomment-300">
                                                                <div class="acomment-avatar">
                                                                    <a href="../demo/index.html">
                                                                        <img src="http://www.gravatar.com/avatar/0b262721d8bda9ad9f074c911f7cf253?s=50&amp;r=g&amp;d=mm" class="avatar user-180-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Demonstration User1" />		</a>
                                                                </div>

                                                                <div class="acomment-meta">
                                                                    <a href="../demo/index.html">Demonstration User1</a> replied <a href="../../activity/p/43/index.html#acomment-300" class="activity-time-since"><span class="time-since">2 months, 3 weeks ago</span></a>	</div>

                                                                <div class="acomment-content"><p>hklj</p>
                                                                </div>

                                                                <div class="acomment-options">




                                                                </div>

                                                            </li>

                                                        </ul>

                                                    </div>



                                                </li>




                                                <li class="activity new_user_image activity-item" id="activity-39">
                                                    <div class="activity-avatar">
                                                        <a href="index.html">

                                                            <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=50&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of John Doe" />
                                                        </a>
                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">


                                                        </div>


                                                        <div class="activity-inner">

                                                            <p>Suspendisse iaculis fermentum augue, sed interdum nibh. Maecenas porttitor lobortis metus, quis ornare urna lacinia vel. Mauris ut mattis purus, dapibus ornare massa. Cras sed enim nisi. In gravida arcu a nunc pulvinar, vel tempor nibh dignissim. Aliquam eu vestibulum dolor. Donec in lorem auctor, scelerisque nibh nec, suscipit augue. Aliquam id&hellip;<span class="activity-read-more" id="activity-read-more-39"><a href="../../activity/p/39/index.html" rel="nofollow">[Read more]</a></span></p>

                                                        </div>



                                                        <div class="activity-meta">



                                                        </div>

                                                    </div>



                                                    <div class="activity-comments">



                                                    </div>



                                                </li>




                                                <li class="activity new_user_image activity-item" id="activity-34">
                                                    <div class="activity-avatar">
                                                        <a href="index.html">

                                                            <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=50&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of John Doe" />
                                                        </a>
                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">


                                                        </div>


                                                        <div class="activity-inner">

                                                            <p>Mauris dignissim pulvinar purus, vitae lobortis enim. Vestibulum purus tellus, tincidunt non elementum sed, vehicula sed diam. Morbi pellentesque nisl tellus, ornare eleifend lectus cursus id. Morbi nec dapibus dui, non auctor velit. In non cursus odio. Proin nec commodo odio.<br />
                                                                <a href="../../activity/p/34/index.html" class="view activity-time-since" title="View Discussion" rel="nofollow"><span class="time-since">1 year, 2 months ago</span></a></p>

                                                        </div>



                                                        <div class="activity-meta">



                                                        </div>

                                                    </div>



                                                    <div class="activity-comments">



                                                    </div>



                                                </li>




                                                <li class="activity new_user_image activity-item" id="activity-30">
                                                    <div class="activity-avatar">
                                                        <a href="index.html">

                                                            <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=50&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of John Doe" />
                                                        </a>
                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">


                                                        </div>


                                                        <div class="activity-inner">

                                                            <p>Ut molestie nulla ac tempor vehicula. In et aliquet sapien, nec tincidunt turpis. Integer mattis id tellus eget porttitor. Mauris dignissim pulvinar purus, vitae lobortis enim. Vestibulum purus tellus, tincidunt non elementum sed, vehicula sed diam. Morbi pellentesque nisl tellus, ornare eleifend lectus cursus id. Morbi nec dapibus dui, non auctor&hellip;<span class="activity-read-more" id="activity-read-more-30"><a href="../../activity/p/30/index.html" rel="nofollow">[Read more]</a></span></p>

                                                        </div>



                                                        <div class="activity-meta">



                                                        </div>

                                                    </div>



                                                    <div class="activity-comments">



                                                    </div>



                                                </li>




                                                <li class="activity new_user_image activity-item" id="activity-26">
                                                    <div class="activity-avatar">
                                                        <a href="index.html">

                                                            <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=50&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of John Doe" />
                                                        </a>
                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">


                                                        </div>


                                                        <div class="activity-inner">

                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat ante enim, eu porta turpis pulvinar eget. Vivamus et tortor et magna egestas egestas. Nunc sed accumsan quam. Donec pulvinar massa venenatis, dapibus risus vitae, pulvinar massa. Vivamus id nulla quis dui commodo viverra in quis mauris. Proin suscipit sagittis mi, et blandit&hellip;<span class="activity-read-more" id="activity-read-more-26"><a href="../../activity/p/26/index.html" rel="nofollow">[Read more]</a></span></p>

                                                        </div>



                                                        <div class="activity-meta">



                                                        </div>

                                                    </div>



                                                    <div class="activity-comments">



                                                    </div>



                                                </li>




                                                <li class="activity new_user_image activity-item" id="activity-24">
                                                    <div class="activity-avatar">
                                                        <a href="index.html">

                                                            <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=50&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of John Doe" />
                                                        </a>
                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">


                                                        </div>


                                                        <div class="activity-inner">

                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat ante enim, eu porta turpis pulvinar eget. Vivamus et tortor et magna egestas egestas.<br />
                                                                <a href="../../activity/p/24/index.html" class="view activity-time-since" title="View Discussion" rel="nofollow"><span class="time-since">1 year, 2 months ago</span></a></p>

                                                        </div>



                                                        <div class="activity-meta">



                                                        </div>

                                                    </div>



                                                    <div class="activity-comments">



                                                    </div>



                                                </li>




                                                <li class="activity new_user_image activity-item" id="activity-23">
                                                    <div class="activity-avatar">
                                                        <a href="index.html">

                                                            <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=50&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of John Doe" />
                                                        </a>
                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">


                                                        </div>


                                                        <div class="activity-inner">

                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et nibh sapien. Proin aliquam tortor a lacus commodo tempor eget eget odio. Nunc eleifend velit eget turpis pharetra sagittis.<br />
                                                                <a href="../../activity/p/23/index.html" class="view activity-time-since" title="View Discussion" rel="nofollow"><span class="time-since">1 year, 2 months ago</span></a></p>

                                                        </div>



                                                        <div class="activity-meta">



                                                        </div>

                                                    </div>



                                                    <div class="activity-comments">



                                                    </div>



                                                </li>




                                                <li class="activity new_user_image activity-item" id="activity-22">
                                                    <div class="activity-avatar">
                                                        <a href="index.html">

                                                            <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=50&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of John Doe" />
                                                        </a>
                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">

                                                            <p> John Doe added new post<a href="../../../syncope/2015/07/13/101-revision-v1/index.html">I am first post</a><br />
                                                                <a href="../../../syncope/2015/07/13/101-revision-v1/index.html"><img src="#" alt="I am first post" /></a> <a href="../../activity/p/22/index.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 year, 2 months ago</span></a></p>

                                                        </div>


                                                        <div class="activity-inner">

                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et nibh sapien. Proin aliquam tortor a lacus commodo tempor eget eget odio. Nunc eleifend velit eget turpis pharetra sagittis.</p>

                                                        </div>



                                                        <div class="activity-meta">



                                                        </div>

                                                    </div>



                                                    <div class="activity-comments">



                                                    </div>



                                                </li>




                                                <li class="activity new_user_image activity-item" id="activity-21">
                                                    <div class="activity-avatar">
                                                        <a href="index.html">

                                                            <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=50&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of John Doe" />
                                                        </a>
                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">


                                                        </div>


                                                        <div class="activity-inner">

                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et nibh sapien. Proin aliquam tortor a lacus commodo tempor eget eget odio. Nunc eleifend velit eget turpis pharetra sagittis.<br />
                                                                <a href="../../activity/p/21/index.html" class="view activity-time-since" title="View Discussion" rel="nofollow"><span class="time-since">1 year, 2 months ago</span></a></p>

                                                        </div>



                                                        <div class="activity-meta">



                                                        </div>

                                                    </div>



                                                    <div class="activity-comments">



                                                    </div>



                                                </li>




                                                <li class="activity new_user_image activity-item" id="activity-19">
                                                    <div class="activity-avatar">
                                                        <a href="index.html">

                                                            <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=50&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of John Doe" />
                                                        </a>
                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">

                                                            <p> John Doe added new post<a href="../../../syncope/indexcb6d.html?post_type=user_image&amp;p=73">This is my new post</a><br />
                                                                <a href="../../../syncope/indexcb6d.html?post_type=user_image&amp;p=73"><img src="../../../syncope/wp-content/uploads/sites/31/2015/07/55a367d5ad1201.jpg" alt="This is my new post" /></a> <a href="../../activity/p/19/index.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 year, 2 months ago</span></a></p>

                                                        </div>


                                                        <div class="activity-inner">

                                                            <p>I am adding a very cool description text right here. Should be looking very very cool.</p>

                                                        </div>



                                                        <div class="activity-meta">



                                                        </div>

                                                    </div>



                                                    <div class="activity-comments">



                                                    </div>



                                                </li>




                                                <li class="activity new_user_image activity-item" id="activity-17">
                                                    <div class="activity-avatar">
                                                        <a href="index.html">

                                                            <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=50&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of John Doe" />
                                                        </a>
                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">

                                                            <p> John Doe added new post<a href="../../../syncope/indexa3ba.html?post_type=user_image&amp;p=66">A new week, a new post</a><br />
                                                                <a href="../../../syncope/indexa3ba.html?post_type=user_image&amp;p=66"><img src="../../../syncope/wp-content/uploads/sites/31/2015/07/55a35805cae751.jpg" alt="A new week, a new post" /></a> <a href="../../activity/p/17/index.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 year, 2 months ago</span></a></p>

                                                        </div>


                                                        <div class="activity-inner">

                                                            <p>Text text text</p>

                                                        </div>



                                                        <div class="activity-meta">



                                                        </div>

                                                    </div>



                                                    <div class="activity-comments">



                                                    </div>



                                                </li>




                                                <li class="activity activity_comment activity-item" id="activity-8">
                                                    <div class="activity-avatar">
                                                        <a href="index.html">

                                                            <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=50&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of John Doe" />
                                                        </a>
                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">

                                                            <p><a href="index.html" title="John Doe">John Doe</a> posted a new activity comment <a href="../../activity/p/7/index.html#acomment-8" class="view activity-time-since" title="View Discussion"><span class="time-since">1 year, 5 months ago</span></a></p>

                                                        </div>


                                                        <div class="activity-inner">

                                                            <p>With a reply here.</p>

                                                        </div>



                                                        <div class="activity-meta">


                                                            <a href="../../activity/p/7/index.html#acomment-8" class="button view bp-secondary-action" title="View Conversation">View Conversation</a>



                                                        </div>

                                                    </div>




                                                </li>




                                                <li class="activity activity_update activity-item has-comments" id="activity-7">
                                                    <div class="activity-avatar">
                                                        <a href="index.html">

                                                            <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=50&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of John Doe" />
                                                        </a>
                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">

                                                            <p><a href="index.html" title="John Doe">John Doe</a> posted an update <a href="../../activity/p/7/index.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 year, 5 months ago</span></a></p>

                                                        </div>


                                                        <div class="activity-inner">

                                                            <p>Here is a simple status update. Just for testing this!</p>

                                                        </div>



                                                        <div class="activity-meta">



                                                        </div>

                                                    </div>



                                                    <div class="activity-comments">

                                                        <ul>
                                                            <li id="acomment-8">
                                                                <div class="acomment-avatar">
                                                                    <a href="index.html">
                                                                        <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=50&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of John Doe" />		</a>
                                                                </div>

                                                                <div class="acomment-meta">
                                                                    <a href="index.html">John Doe</a> replied <a href="../../activity/p/7/index.html#acomment-8" class="activity-time-since"><span class="time-since">1 year, 5 months ago</span></a>	</div>

                                                                <div class="acomment-content"><p>With a reply here.</p>
                                                                </div>

                                                                <div class="acomment-options">




                                                                </div>

                                                            </li>

                                                        </ul>

                                                    </div>



                                                </li>





                                            </ul>





                                            <form action="#" name="activity-loop-form" id="activity-loop-form" method="post">

                                                <input type="hidden" id="_wpnonce_activity_filter" name="_wpnonce_activity_filter" value="32d75385b0" /><input type="hidden" name="_wp_http_referer" value="/slimvideo/members/admin/" />
                                            </form>


                                        </div><!-- .activity -->


                                    </div><!-- #item-body -->


                                </div><!-- #buddypress -->
                            </div><!-- .entry-content -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="absolute-share">
                                        <a href="#" class="close-share"><i class="icon-close"></i></a>
                                        <ul class="main-shares">
                                            <li data-social="facebook" data-post-id="0">
                                                <a target="_blank" data-tooltip="share on facebook" href="http://www.facebook.com/sharer/sharer.php?u=">
                                                    <i class="icon-facebook"></i>
                                                    <span>Facebook</span>
                                                    <span class="how-many">0</span>
                                                </a>
                                            </li>
                                            <li data-social="twitter" data-post-id="0">
                                                <a  target="_blank" data-tooltip="share on twitter" href="http://twitter.com/home?status=John+Doe+">
                                                    <i class="icon-twitter"></i>
                                                    <span>Twitter</span>
                                                    <span class="how-many">0</span>
                                                </a>
                                            </li>
                                            <li data-social="gplus" data-post-id="0">
                                                <a  target="_blank" data-tooltip="share on google+" href="https://plus.google.com/share?url=">
                                                    <i class="icon-gplus"></i>
                                                    <span>Google+</span>
                                                    <span class="how-many">0</span>
                                                </a>
                                            </li>
                                            <li data-social="pinterest" data-post-id="0">
                                                <a target="_blank" data-tooltip="share on pinterest" href="http://pinterest.com/pin/create/button/?url=&amp;media=&amp;description=John+Doe">
                                                    <i class="icon-pinterest"></i>
                                                    <span>Pinterest</span>
                                                    <span class="how-many">0</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>								</div>
                            </div>
                        </article><!-- #post-0 -->
                        <div class="row content-block">
                            <div class="col-lg-12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>