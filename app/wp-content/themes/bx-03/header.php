<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head
    prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# <?php echo get_ogp_type();?>: http://ogp.me/ns/<?php echo get_ogp_type();?>#">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.defer = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?php echo get_vars('site', 'gtm');?>'
        );
    </script>
    <!-- End Google Tag Manager -->
    <meta
        charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe
            src="https://www.googletagmanager.com/ns.html?id=<?php echo get_vars('site', 'gtm');?>"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="o-container o-container:header">
        <a href="<?php echo home_url();?>" class="c-logo">
            <svg width="32" height="21" viewBox="0 0 32 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.9986 13.7163L24.0002 20.5753L19.9992 13.7163H27.9986Z" fill="#6BA4CC" />
                <path d="M15.9998 20.5753L19.9997 13.7158L23.9996 20.5753H15.9998Z" fill="#70A9CF" />
                <path d="M19.9987 13.7163L15.9998 20.5753L11.9998 13.7163H19.9987Z" fill="#8DC6DF" />
                <path d="M7.99988 20.5753L11.9998 13.7158L15.9997 20.5753H7.99988Z" fill="#8FC5DE" />
                <path d="M0 20.5753L3.99994 13.7163L7.99987 20.5758L0 20.5753Z" fill="#7EAFD2" />
                <path d="M32 6.85895L28.0001 13.7163L23.9996 6.85895H32Z" fill="#83C1DB" />
                <path d="M19.9997 13.7163L23.9991 6.85895L27.9985 13.7163H19.9997Z" fill="#7BB6D6" />
                <path d="M23.9996 6.85895L19.9997 13.7163L15.9998 6.85895H23.9996Z" fill="#76ACD1" />
                <path d="M11.9998 13.7163L15.9998 6.85895L19.9987 13.7163H11.9998Z" fill="#84BBD9" />
                <path d="M15.9997 6.85895L11.9998 13.7163L7.99988 6.85895H15.9997Z" fill="#72A7CE" />
                <path d="M3.99994 13.7163L7.99987 6.85895L11.9988 13.7163H3.99994Z" fill="#6393C4" />
                <path d="M23.9996 6.85894L27.9991 0L31.9995 6.85946L23.9996 6.85894Z" fill="#94D0E4" />
                <path d="M15.9998 6.85894L19.9997 0L23.9996 6.85946L15.9998 6.85894Z" fill="#81B7D6" />
                <path d="M7.99988 6.85894L11.9998 0L15.9997 6.85946L7.99988 6.85894Z" fill="#72A7CE" />
                <path d="M11.9988 0L7.99987 6.85894L3.99994 0H11.9988Z" fill="#689CC8" />
            </svg>
        </a>
        <nav class="c-head-nav" aria-hidden="true">
            <ul class="c-gnav">
                <li class="c-gnav__item">
                    <a class="c-gnav__link"
                        href="<?php echo home_url();?>">
                        HOME
                    </a>
                </li>
                <li class="c-gnav__item">
                    <a class="c-gnav__link"
                        href="<?php echo home_url('/product');?>">
                        PRODUCT
                    </a>
                </li>
                <li class="c-gnav__item">
                    <a class="c-gnav__link"
                        href="<?php echo home_url('/gallery');?>">
                        GALLERY
                    </a>
                </li>
                <li class="c-gnav__item">
                    <a class="c-gnav__link"
                        href="<?php echo home_url('/aboutus');?>">
                        ABOUT US
                    </a>
                </li>
                <li class="c-gnav__item">
                    <a class="c-gnav__link"
                        href="<?php echo home_url('/inquiry');?>">
                        INQUIRY
                    </a>
                </li>
            </ul>
        </nav>
        <button class="o-has-icon o-has-icon:menuBtn" id="openBtn" type="button" aria-label="menu open"
            aria-controls="spMenu" aria-expanded="false">
            <span class="c-menuBtn-label">MENU</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"
                    fill="currentColor" />
            </svg>
        </button>
        <div id="spMenu" class="c-sp-menu" aria-hidden="true">
            <div class="o-container o-container:header">
                <a href="<?php echo home_url();?>"
                    class="c-logo c-logo:sp">
                    <svg width="32" height="21" viewBox="0 0 32 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.9986 13.7163L24.0002 20.5753L19.9992 13.7163H27.9986Z" fill="#6BA4CC" />
                        <path d="M15.9998 20.5753L19.9997 13.7158L23.9996 20.5753H15.9998Z" fill="#70A9CF" />
                        <path d="M19.9987 13.7163L15.9998 20.5753L11.9998 13.7163H19.9987Z" fill="#8DC6DF" />
                        <path d="M7.99988 20.5753L11.9998 13.7158L15.9997 20.5753H7.99988Z" fill="#8FC5DE" />
                        <path d="M0 20.5753L3.99994 13.7163L7.99987 20.5758L0 20.5753Z" fill="#7EAFD2" />
                        <path d="M32 6.85895L28.0001 13.7163L23.9996 6.85895H32Z" fill="#83C1DB" />
                        <path d="M19.9997 13.7163L23.9991 6.85895L27.9985 13.7163H19.9997Z" fill="#7BB6D6" />
                        <path d="M23.9996 6.85895L19.9997 13.7163L15.9998 6.85895H23.9996Z" fill="#76ACD1" />
                        <path d="M11.9998 13.7163L15.9998 6.85895L19.9987 13.7163H11.9998Z" fill="#84BBD9" />
                        <path d="M15.9997 6.85895L11.9998 13.7163L7.99988 6.85895H15.9997Z" fill="#72A7CE" />
                        <path d="M3.99994 13.7163L7.99987 6.85895L11.9988 13.7163H3.99994Z" fill="#6393C4" />
                        <path d="M23.9996 6.85894L27.9991 0L31.9995 6.85946L23.9996 6.85894Z" fill="#94D0E4" />
                        <path d="M15.9998 6.85894L19.9997 0L23.9996 6.85946L15.9998 6.85894Z" fill="#81B7D6" />
                        <path d="M7.99988 6.85894L11.9998 0L15.9997 6.85946L7.99988 6.85894Z" fill="#72A7CE" />
                        <path d="M11.9988 0L7.99987 6.85894L3.99994 0H11.9988Z" fill="#689CC8" />
                    </svg>
                </a>
                <button type="button" class="o-has-icon o-has-icon:closeBtn" id="closeBtn" aria-label="menu close"
                    aria-controls="headMenu" aria-expanded="false">
                    <span class="c-closeBtn-label">CLOSE</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"
                            fill="currentColor" />
                    </svg>
                </button>
            </div>
            <nav class="c-sp-menu__body u-mb-l">
                <ul class="c-gnav c-gnav:sp">
                    <li class="c-gnav__item c-gnav__item:sp">
                        <a class="c-gnav__link c-gnav__link:sp"
                            href="<?php echo home_url();?>">
                            HOME
                        </a>
                    </li>
                    <li class="c-gnav__item c-gnav__item:sp">
                        <a class="c-gnav__link c-gnav__link:sp"
                            href="<?php echo home_url('/product');?>">
                            PRODUCT
                        </a>
                    </li>
                    <li class="c-gnav__item c-gnav__item:sp">
                        <a class="c-gnav__link c-gnav__link:sp"
                            href="<?php echo home_url('/gallery');?>">
                            GALLERY
                        </a>
                    </li>
                    <li class="c-gnav__item c-gnav__item:sp">
                        <a class="c-gnav__link c-gnav__link:sp"
                            href="<?php echo home_url('/aboutus');?>">
                            ABOUT US
                        </a>
                    </li>
                    <li class="c-gnav__item c-gnav__item:sp">
                        <a class="c-gnav__link c-gnav__link:sp"
                            href="<?php echo home_url('/inquiry');?>">
                            INQUIRY
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="o-cluster o-cluster:spSns">
                <a href="<?php echo get_vars('sns', 'fb');?>"
                    class="c-link c-link:spSns" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                            fill="currentColor" />
                    </svg>
                </a>
                <a href="<?php echo get_vars('sns', 'tw');?>"
                    class="c-link c-link:spSns" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                            fill="currentColor" />
                    </svg>
                </a>
                <a href="<?php echo get_vars('sns', 'instagram');?>"
                    class="c-link c-link:spSns" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                            fill="currentColor" />
                    </svg>
                </a>
            </div>
        </div>
    </header>
    <main>
        <?php if (is_front_page()):?>
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="o-cover o-cover:sliderInner">
                        <h1 class="c-copy">
                            <?php echo get_vars('site', 'name');?>
                            <span class="c-copy__bottom"><?php echo get_vars('site', 'description');?></span>
                        </h1>
                    </div>
                    <span class="c-slider-overlay"></span>
                    <picture class="o-frame o-frame:switch">
                        <source type="image/avif"
                            srcset="<?php echo get_template_directory_uri();?>/img/hero.avif" />
                        <source type="image/webp"
                            srcset="<?php echo get_template_directory_uri();?>/img/hero.webp" />
                        <img src="<?php echo get_template_directory_uri();?>/img/hero.png"
                            loading="lazy" decoding="async" alt="" width="100%" height="100%" />
                    </picture>
                </div>
                <div class="swiper-slide">
                    <div class="o-cover o-cover:sliderInner">
                        <p class="c-copy c-copy:next">??????????????????<br />??????????????????</p>
                        <a href="<?php echo home_url('/product');?>"
                            class="c-btn c-btn:sliderInner">
                            PRODUCT
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
                                <path
                                    d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                    <span class="c-slider-overlay"></span>
                    <picture class="o-frame o-frame:switch">
                        <source type="image/avif"
                            srcset="<?php echo get_template_directory_uri();?>/img/slider-img02.avif" />
                        <source type="image/webp"
                            srcset="<?php echo get_template_directory_uri();?>/img/slider-img02.webp" />
                        <img src="<?php echo get_template_directory_uri();?>/img/slider-img02.jpg"
                            loading="lazy" decoding="async" alt="" width="100%" height="100%" />
                    </picture>
                </div>
                <div class="swiper-slide">
                    <div class="o-cover o-cover:sliderInner">
                        <p class="c-copy c-copy:next">10????????????<br />??????????????????????????????</p>
                        <a href="<?php echo home_url('/campaign');?>"
                            class="c-btn c-btn:sliderInner">
                            CAMPAIGN
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
                                <path
                                    d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                    <span class="c-slider-overlay"></span>
                    <picture class="o-frame o-frame:switch">
                        <source type="image/avif"
                            srcset="<?php echo get_template_directory_uri();?>/img/slider-img03.avif" />
                        <source type="image/webp"
                            srcset="<?php echo get_template_directory_uri();?>/img/slider-img03.webp" />
                        <img src="<?php echo get_template_directory_uri();?>/img/slider-img03.jpg"
                            loading="lazy" decoding="async" alt="" width="100%" height="100%" />
                    </picture>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <?php else :?>
        <?php echo get_page_title();
        echo get_breadcrumb();?>
        <?php endif;
