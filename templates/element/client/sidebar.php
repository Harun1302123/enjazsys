<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="../../demo1/dist/index.html">
            <img alt="Logo" src="<?php

use Cake\Routing\Router;

 echo $this->request->getAttribute('webroot'); ?>img/logo-dark.png" class="h-150px app-sidebar-logo-default">
            <img alt="Logo" src="<?php echo $this->request->getAttribute('webroot'); ?>img/logo-dark.png"
                class="h-60px app-sidebar-logo-minimize">
        </a>
        <!--end::Logo image-->
        <!--begin::Sidebar toggle-->
        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-2 rotate-180">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5"
                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                        fill="currentColor"></path>
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="currentColor"></path>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true"
            style="height: 310px;">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="false">

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 176 176"
                                    style="enable-background:new 0 0 176 176;" xml:space="preserve">
                                    <path style="fill:#FFFFFF;"
                                        d="M155.706,176c-0.001,0-0.003,0-0.005,0l-65.411-0.125H20.294c-1.381,0-2.5-1.119-2.5-2.5V60.904
                                c0-1.381,1.119-2.5,2.5-2.5h34.911V2.5c0-1.381,1.119-2.5,2.5-2.5h98c1.381,0,2.5,1.119,2.5,2.5v171c0,0.664-0.264,1.3-0.734,1.77
                                C157.003,175.737,156.368,176,155.706,176z M92.794,170.88l60.411,0.115V5h-93v53.404h30.089c1.381,0,2.5,1.119,2.5,2.5V170.88z
                                M22.794,170.875h65V63.404h-65V170.875z M80.076,154.634H60.297c-1.381,0-2.5-1.119-2.5-2.5v-11.575c0-1.381,1.119-2.5,2.5-2.5
                                h19.779c1.381,0,2.5,1.119,2.5,2.5v11.575C82.576,153.515,81.457,154.634,80.076,154.634z M62.797,149.634h14.779v-6.575H62.797
                                V149.634z M50.292,154.634H30.513c-1.381,0-2.5-1.119-2.5-2.5v-11.575c0-1.381,1.119-2.5,2.5-2.5h19.779c1.381,0,2.5,1.119,2.5,2.5
                                v11.575C52.792,153.515,51.673,154.634,50.292,154.634z M33.013,149.634h14.779v-6.575H33.013V149.634z M138.714,153.35h-9.563
                                c-1.381,0-2.5-1.119-2.5-2.5v-10.392c0-1.381,1.119-2.5,2.5-2.5h9.563c1.381,0,2.5,1.119,2.5,2.5v10.392
                                C141.214,152.231,140.095,153.35,138.714,153.35z M131.652,148.35h4.563v-5.392h-4.563V148.35z M111.135,153.35h-9.563
                                c-1.381,0-2.5-1.119-2.5-2.5v-10.392c0-1.381,1.119-2.5,2.5-2.5h9.563c1.381,0,2.5,1.119,2.5,2.5v10.392
                                C113.635,152.231,112.516,153.35,111.135,153.35z M104.072,148.35h4.563v-5.392h-4.563V148.35z M80.076,132.017H60.297
                                c-1.381,0-2.5-1.119-2.5-2.5v-11.575c0-1.381,1.119-2.5,2.5-2.5h19.779c1.381,0,2.5,1.119,2.5,2.5v11.575
                                C82.576,130.897,81.457,132.017,80.076,132.017z M62.797,127.017h14.779v-6.575H62.797V127.017z M50.292,132.017H30.513
                                c-1.381,0-2.5-1.119-2.5-2.5v-11.575c0-1.381,1.119-2.5,2.5-2.5h19.779c1.381,0,2.5,1.119,2.5,2.5v11.575
                                C52.792,130.897,51.673,132.017,50.292,132.017z M33.013,127.017h14.779v-6.575H33.013V127.017z M138.714,128.439h-9.563
                                c-1.381,0-2.5-1.119-2.5-2.5v-10.391c0-1.381,1.119-2.5,2.5-2.5h9.563c1.381,0,2.5,1.119,2.5,2.5v10.391
                                C141.214,127.32,140.095,128.439,138.714,128.439z M131.652,123.439h4.563v-5.391h-4.563V123.439z M111.135,128.439h-9.563
                                c-1.381,0-2.5-1.119-2.5-2.5v-10.391c0-1.381,1.119-2.5,2.5-2.5h9.563c1.381,0,2.5,1.119,2.5,2.5v10.391
                                C113.635,127.32,112.516,128.439,111.135,128.439z M104.072,123.439h4.563v-5.391h-4.563V123.439z M80.076,109.399H60.297
                                c-1.381,0-2.5-1.119-2.5-2.5V95.324c0-1.381,1.119-2.5,2.5-2.5h19.779c1.381,0,2.5,1.119,2.5,2.5v11.575
                                C82.576,108.28,81.457,109.399,80.076,109.399z M62.797,104.399h14.779v-6.575H62.797V104.399z M50.292,109.399H30.513
                                c-1.381,0-2.5-1.119-2.5-2.5V95.324c0-1.381,1.119-2.5,2.5-2.5h19.779c1.381,0,2.5,1.119,2.5,2.5v11.575
                                C52.792,108.28,51.673,109.399,50.292,109.399z M33.013,104.399h14.779v-6.575H33.013V104.399z M138.714,103.528h-9.563
                                c-1.381,0-2.5-1.119-2.5-2.5V90.637c0-1.381,1.119-2.5,2.5-2.5h9.563c1.381,0,2.5,1.119,2.5,2.5v10.392
                                C141.214,102.409,140.095,103.528,138.714,103.528z M131.652,98.528h4.563v-5.392h-4.563V98.528z M111.135,103.528h-9.563
                                c-1.381,0-2.5-1.119-2.5-2.5V90.637c0-1.381,1.119-2.5,2.5-2.5h9.563c1.381,0,2.5,1.119,2.5,2.5v10.392
                                C113.635,102.409,112.516,103.528,111.135,103.528z M104.072,98.528h4.563v-5.392h-4.563V98.528z M80.076,86.781H60.297
                                c-1.381,0-2.5-1.119-2.5-2.5V72.706c0-1.381,1.119-2.5,2.5-2.5h19.779c1.381,0,2.5,1.119,2.5,2.5v11.576
                                C82.576,85.662,81.457,86.781,80.076,86.781z M62.797,81.781h14.779v-6.576H62.797V81.781z M50.292,86.781H30.513
                                c-1.381,0-2.5-1.119-2.5-2.5V72.706c0-1.381,1.119-2.5,2.5-2.5h19.779c1.381,0,2.5,1.119,2.5,2.5v11.576
                                C52.792,85.662,51.673,86.781,50.292,86.781z M33.013,81.781h14.779v-6.576H33.013V81.781z M138.714,78.617h-9.563
                                c-1.381,0-2.5-1.119-2.5-2.5V65.726c0-1.381,1.119-2.5,2.5-2.5h9.563c1.381,0,2.5,1.119,2.5,2.5v10.391
                                C141.214,77.498,140.095,78.617,138.714,78.617z M131.652,73.617h4.563v-5.391h-4.563V73.617z M111.135,78.617h-9.563
                                c-1.381,0-2.5-1.119-2.5-2.5V65.726c0-1.381,1.119-2.5,2.5-2.5h9.563c1.381,0,2.5,1.119,2.5,2.5v10.391
                                C113.635,77.498,112.516,78.617,111.135,78.617z M104.072,73.617h4.563v-5.391h-4.563V73.617z M138.714,53.707h-9.563
                                c-1.381,0-2.5-1.119-2.5-2.5V40.815c0-1.381,1.119-2.5,2.5-2.5h9.563c1.381,0,2.5,1.119,2.5,2.5v10.392
                                C141.214,52.587,140.095,53.707,138.714,53.707z M131.652,48.707h4.563v-5.392h-4.563V48.707z M111.135,53.707h-9.563
                                c-1.381,0-2.5-1.119-2.5-2.5V40.815c0-1.381,1.119-2.5,2.5-2.5h9.563c1.381,0,2.5,1.119,2.5,2.5v10.392
                                C113.635,52.587,112.516,53.707,111.135,53.707z M104.072,48.707h4.563v-5.392h-4.563V48.707z M83.555,53.707h-9.563
                                c-1.381,0-2.5-1.119-2.5-2.5V40.815c0-1.381,1.119-2.5,2.5-2.5h9.563c1.381,0,2.5,1.119,2.5,2.5v10.392
                                C86.055,52.587,84.936,53.707,83.555,53.707z M76.493,48.707h4.563v-5.392h-4.563V48.707z M138.714,28.795h-9.563
                                c-1.381,0-2.5-1.119-2.5-2.5V15.904c0-1.381,1.119-2.5,2.5-2.5h9.563c1.381,0,2.5,1.119,2.5,2.5v10.392
                                C141.214,27.676,140.095,28.795,138.714,28.795z M131.652,23.795h4.563v-5.392h-4.563V23.795z M111.135,28.795h-9.563
                                c-1.381,0-2.5-1.119-2.5-2.5V15.904c0-1.381,1.119-2.5,2.5-2.5h9.563c1.381,0,2.5,1.119,2.5,2.5v10.392
                                C113.635,27.676,112.516,28.795,111.135,28.795z M104.072,23.795h4.563v-5.392h-4.563V23.795z M83.555,28.795h-9.563
                                c-1.381,0-2.5-1.119-2.5-2.5V15.904c0-1.381,1.119-2.5,2.5-2.5h9.563c1.381,0,2.5,1.119,2.5,2.5v10.392
                                C86.055,27.676,84.936,28.795,83.555,28.795z M76.493,23.795h4.563v-5.392h-4.563V23.795z" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span onclick="onMenuItemClick(this)" class="menu-title">Manage Companies</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="<?php echo Router::fullBaseUrl() ;?>/client/companies">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Manage Companies</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 475.851 475.851" style="enable-background:new 0 0 475.851 475.851;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <g>
                                                <path  style="fill:#FFFFFF;" d="M151.549,145.274c0,23.39,9.145,50.385,24.462,72.214c17.389,24.78,39.376,38.427,61.911,38.427
				c22.534,0,44.521-13.647,61.91-38.428c15.317-21.828,24.462-48.824,24.462-72.213c0-47.626-38.746-86.372-86.372-86.372
				C190.296,58.902,151.549,97.648,151.549,145.274z M237.922,73.902c39.354,0,71.372,32.018,71.372,71.372
				c0,20.118-8.33,44.487-21.74,63.598c-14.29,20.364-32.38,32.043-49.632,32.043c-17.252,0-35.342-11.679-49.632-32.043
				c-13.41-19.11-21.741-43.479-21.741-63.598C166.549,105.919,198.567,73.902,237.922,73.902z" />
                                                <path  style="fill:#FFFFFF;" d="M302.372,239.167c-2.862-1.363-6.273-0.778-8.52,1.461c-16.775,16.728-36.117,25.569-55.935,25.569
				c-19.821,0-39.158-8.841-55.923-25.567c-2.246-2.241-5.659-2.826-8.521-1.463c-25.254,12.022-46.628,30.829-61.811,54.388
				c-15.596,24.2-23.84,52.277-23.84,81.195v0.121c0,2.116,0.894,4.134,2.461,5.556c40.492,36.722,92.922,56.945,147.633,56.945
				s107.141-20.224,147.632-56.945c1.568-1.422,2.462-3.439,2.462-5.556v-0.121c0-28.918-8.242-56.995-23.834-81.194
				C348.997,269.995,327.625,251.188,302.372,239.167z M237.918,422.372c-49.861,0-97.685-18.023-135.057-50.827
				c0.583-24.896,7.956-48.986,21.411-69.865c12.741-19.77,30.322-35.823,51.058-46.676c18.746,17.157,40.285,26.193,62.588,26.193
				c22.3,0,43.842-9.035,62.598-26.193c20.734,10.853,38.313,26.906,51.053,46.676c13.452,20.877,20.823,44.968,21.406,69.865
				C335.602,404.349,287.778,422.372,237.918,422.372z" />
                                                <path  style="fill:#FFFFFF;" d="M455.077,243.89c-13.23-20.532-31.856-36.923-53.864-47.399c-2.862-1.363-6.275-0.778-8.52,1.461
				c-14.312,14.271-30.79,21.815-47.654,21.815c-9.142,0-18.184-2.205-26.873-6.553c-3.706-1.853-8.209-0.353-10.063,3.351
				c-1.854,3.705-0.354,8.21,3.351,10.063c10.793,5.401,22.093,8.139,33.586,8.139c19.335,0,38.004-7.737,54.288-22.437
				c17.504,9.298,32.348,22.934,43.141,39.685c11.445,17.763,17.756,38.243,18.338,59.416
				c-18.524,16.158-40.553,28.449-63.91,35.634c-3.959,1.218-6.182,5.415-4.964,9.374c0.992,3.225,3.96,5.297,7.166,5.297
				c0.73,0,1.474-0.107,2.208-0.333c26.509-8.154,51.435-22.362,72.082-41.088c1.568-1.422,2.462-3.439,2.462-5.556v-0.105
				C475.85,289.45,468.666,264.98,455.077,243.89z" />
                                                <path
                                                style="fill:#FFFFFF;" d="M130.493,210.473c7.93,0,15.841-1.934,23.516-5.748c3.709-1.843,5.222-6.345,3.379-10.054
				c-1.843-3.71-6.345-5.222-10.054-3.379c-5.582,2.774-11.248,4.18-16.841,4.18c-14.541,0-29.836-9.914-41.964-27.2
				c-11.449-16.318-18.562-37.112-18.562-54.266c0-33.375,27.152-60.527,60.526-60.527c15.752,0,30.67,6.022,42.006,16.958
				c2.98,2.875,7.729,2.792,10.604-0.19c2.876-2.981,2.791-7.729-0.19-10.604c-14.146-13.647-32.763-21.163-52.42-21.163
				c-41.646,0-75.526,33.881-75.526,75.527c0,20.38,7.957,43.887,21.283,62.881C91.445,198.545,110.709,210.473,130.493,210.473z" />
                                                <path
                                                style="fill:#FFFFFF;" d="M61.034,340.143c-16.753-7.222-32.209-16.972-45.989-29.004c0.582-21.112,6.875-41.53,18.291-59.243
				c10.761-16.698,25.561-30.294,43.01-39.566c16.239,14.662,34.856,22.376,54.139,22.376c11.587,0,22.969-2.785,33.829-8.277
				c3.696-1.87,5.177-6.381,3.308-10.078c-1.869-3.697-6.381-5.177-10.078-3.308c-8.742,4.421-17.846,6.663-27.059,6.663
				c-16.811,0-33.238-7.522-47.504-21.754c-2.246-2.24-5.658-2.825-8.521-1.462c-21.954,10.451-40.534,26.8-53.733,47.28
				C7.167,264.811,0,289.221,0,314.362v0.103c0,2.116,0.894,4.134,2.461,5.556c15.629,14.174,33.338,25.579,52.634,33.897
				c0.968,0.417,1.975,0.615,2.966,0.615c2.904,0,5.668-1.697,6.891-4.533C66.591,346.196,64.837,341.783,61.034,340.143z" />
                                                <path  style="fill:#FFFFFF;" d="M69.854,351.003c-2.671,6.443,4.532,12.832,10.617,9.387c3.238-1.834,4.683-5.937,3.227-9.385
				C81.291,344.86,72.32,345.053,69.854,351.003z" />
                                                <path
                                                style="fill:#FFFFFF;" d="M83.698,351.005C83.888,351.455,83.518,350.545,83.698,351.005L83.698,351.005z" />
                                                <path
                                                style="fill:#FFFFFF;" d="M303.345,70.438c11.336-10.936,26.254-16.958,42.006-16.958c33.374,0,60.526,27.152,60.526,60.527
				c0,17.154-7.112,37.947-18.563,54.266c-12.128,17.286-27.424,27.2-41.964,27.2c-5.593,0-11.259-1.406-16.841-4.18
				c-3.711-1.844-8.212-0.331-10.055,3.379c-1.843,3.709-0.33,8.21,3.379,10.054c7.675,3.814,15.587,5.748,23.517,5.748
				c19.783,0,39.048-11.927,54.243-33.585c13.327-18.994,21.283-42.501,21.283-62.881c0-41.646-33.881-75.527-75.526-75.527
				c-19.657,0-38.273,7.516-52.42,21.163c-2.981,2.875-3.066,7.624-0.19,10.604C295.614,73.229,300.363,73.314,303.345,70.438z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span onclick="onMenuItemClick(this)" class="menu-title">Manage Employees</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="<?php echo Router::fullBaseUrl();?>/client/employees">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Manage Employees</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/files/fil003.svg-->
                            <span class="svg-icon svg-icon-2">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 475.851 475.851" style="enable-background:new 0 0 475.851 475.851;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <g>
                                                <path  style="fill:#FFFFFF;" d="M151.549,145.274c0,23.39,9.145,50.385,24.462,72.214c17.389,24.78,39.376,38.427,61.911,38.427
				c22.534,0,44.521-13.647,61.91-38.428c15.317-21.828,24.462-48.824,24.462-72.213c0-47.626-38.746-86.372-86.372-86.372
				C190.296,58.902,151.549,97.648,151.549,145.274z M237.922,73.902c39.354,0,71.372,32.018,71.372,71.372
				c0,20.118-8.33,44.487-21.74,63.598c-14.29,20.364-32.38,32.043-49.632,32.043c-17.252,0-35.342-11.679-49.632-32.043
				c-13.41-19.11-21.741-43.479-21.741-63.598C166.549,105.919,198.567,73.902,237.922,73.902z" />
                                                <path  style="fill:#FFFFFF;" d="M302.372,239.167c-2.862-1.363-6.273-0.778-8.52,1.461c-16.775,16.728-36.117,25.569-55.935,25.569
				c-19.821,0-39.158-8.841-55.923-25.567c-2.246-2.241-5.659-2.826-8.521-1.463c-25.254,12.022-46.628,30.829-61.811,54.388
				c-15.596,24.2-23.84,52.277-23.84,81.195v0.121c0,2.116,0.894,4.134,2.461,5.556c40.492,36.722,92.922,56.945,147.633,56.945
				s107.141-20.224,147.632-56.945c1.568-1.422,2.462-3.439,2.462-5.556v-0.121c0-28.918-8.242-56.995-23.834-81.194
				C348.997,269.995,327.625,251.188,302.372,239.167z M237.918,422.372c-49.861,0-97.685-18.023-135.057-50.827
				c0.583-24.896,7.956-48.986,21.411-69.865c12.741-19.77,30.322-35.823,51.058-46.676c18.746,17.157,40.285,26.193,62.588,26.193
				c22.3,0,43.842-9.035,62.598-26.193c20.734,10.853,38.313,26.906,51.053,46.676c13.452,20.877,20.823,44.968,21.406,69.865
				C335.602,404.349,287.778,422.372,237.918,422.372z" />
                                                <path  style="fill:#FFFFFF;" d="M455.077,243.89c-13.23-20.532-31.856-36.923-53.864-47.399c-2.862-1.363-6.275-0.778-8.52,1.461
				c-14.312,14.271-30.79,21.815-47.654,21.815c-9.142,0-18.184-2.205-26.873-6.553c-3.706-1.853-8.209-0.353-10.063,3.351
				c-1.854,3.705-0.354,8.21,3.351,10.063c10.793,5.401,22.093,8.139,33.586,8.139c19.335,0,38.004-7.737,54.288-22.437
				c17.504,9.298,32.348,22.934,43.141,39.685c11.445,17.763,17.756,38.243,18.338,59.416
				c-18.524,16.158-40.553,28.449-63.91,35.634c-3.959,1.218-6.182,5.415-4.964,9.374c0.992,3.225,3.96,5.297,7.166,5.297
				c0.73,0,1.474-0.107,2.208-0.333c26.509-8.154,51.435-22.362,72.082-41.088c1.568-1.422,2.462-3.439,2.462-5.556v-0.105
				C475.85,289.45,468.666,264.98,455.077,243.89z" />
                                                <path
                                                style="fill:#FFFFFF;" d="M130.493,210.473c7.93,0,15.841-1.934,23.516-5.748c3.709-1.843,5.222-6.345,3.379-10.054
				c-1.843-3.71-6.345-5.222-10.054-3.379c-5.582,2.774-11.248,4.18-16.841,4.18c-14.541,0-29.836-9.914-41.964-27.2
				c-11.449-16.318-18.562-37.112-18.562-54.266c0-33.375,27.152-60.527,60.526-60.527c15.752,0,30.67,6.022,42.006,16.958
				c2.98,2.875,7.729,2.792,10.604-0.19c2.876-2.981,2.791-7.729-0.19-10.604c-14.146-13.647-32.763-21.163-52.42-21.163
				c-41.646,0-75.526,33.881-75.526,75.527c0,20.38,7.957,43.887,21.283,62.881C91.445,198.545,110.709,210.473,130.493,210.473z" />
                                                <path
                                                style="fill:#FFFFFF;" d="M61.034,340.143c-16.753-7.222-32.209-16.972-45.989-29.004c0.582-21.112,6.875-41.53,18.291-59.243
				c10.761-16.698,25.561-30.294,43.01-39.566c16.239,14.662,34.856,22.376,54.139,22.376c11.587,0,22.969-2.785,33.829-8.277
				c3.696-1.87,5.177-6.381,3.308-10.078c-1.869-3.697-6.381-5.177-10.078-3.308c-8.742,4.421-17.846,6.663-27.059,6.663
				c-16.811,0-33.238-7.522-47.504-21.754c-2.246-2.24-5.658-2.825-8.521-1.462c-21.954,10.451-40.534,26.8-53.733,47.28
				C7.167,264.811,0,289.221,0,314.362v0.103c0,2.116,0.894,4.134,2.461,5.556c15.629,14.174,33.338,25.579,52.634,33.897
				c0.968,0.417,1.975,0.615,2.966,0.615c2.904,0,5.668-1.697,6.891-4.533C66.591,346.196,64.837,341.783,61.034,340.143z" />
                                                <path  style="fill:#FFFFFF;" d="M69.854,351.003c-2.671,6.443,4.532,12.832,10.617,9.387c3.238-1.834,4.683-5.937,3.227-9.385
				C81.291,344.86,72.32,345.053,69.854,351.003z" />
                                                <path
                                                style="fill:#FFFFFF;" d="M83.698,351.005C83.888,351.455,83.518,350.545,83.698,351.005L83.698,351.005z" />
                                                <path
                                                style="fill:#FFFFFF;" d="M303.345,70.438c11.336-10.936,26.254-16.958,42.006-16.958c33.374,0,60.526,27.152,60.526,60.527
				c0,17.154-7.112,37.947-18.563,54.266c-12.128,17.286-27.424,27.2-41.964,27.2c-5.593,0-11.259-1.406-16.841-4.18
				c-3.711-1.844-8.212-0.331-10.055,3.379c-1.843,3.709-0.33,8.21,3.379,10.054c7.675,3.814,15.587,5.748,23.517,5.748
				c19.783,0,39.048-11.927,54.243-33.585c13.327-18.994,21.283-42.501,21.283-62.881c0-41.646-33.881-75.527-75.526-75.527
				c-19.657,0-38.273,7.516-52.42,21.163c-2.981,2.875-3.066,7.624-0.19,10.604C295.614,73.229,300.363,73.314,303.345,70.438z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span onclick="onMenuItemClick(this)" class="menu-title">Manage Dependants</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="<?php echo Router::fullBaseUrl();?>/client/dependents">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Manage Dependants</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs048.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke="#FFFFFF" stroke-width="2" d="M2,7 L20,7 M16,2 L21,7 L16,12 M22,17 L4,17 M8,12 L3,17 L8,22"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span onclick="onMenuItemClick(this)" class="menu-title">Manage Transactions</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link"
                                href="<?php echo Router::fullBaseUrl();?>/client/companies/transactions">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Manage Company Transactions</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->


                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com004.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 192.287 192.287" style="enable-background:new 0 0 192.287 192.287;" xml:space="preserve">
                                    <path style="fill:#FFFFFF;" d="M122.901,0H19.699v192.287h152.889v-142.6L122.901,0z M146.981,45.299h-19.686V25.612L146.981,45.299z M34.699,177.287V15
                                        h77.596v37.799c0,4.142,3.357,7.5,7.5,7.5h37.793v116.988H34.699z"/>
                                    <rect style="fill:#FFFFFF;" x="53.141" y="149.004" width="86.006" height="10"/>
                                    <rect style="fill:#FFFFFF;" x="53.141" y="55.101" width="51.058" height="10"/>
                                    <polygon style="fill:#FFFFFF;" points="121.248,86.935 126.79,86.935 105.371,108.353 88.623,91.605 51.597,128.634 58.667,135.706 88.623,105.748
                                        105.371,122.495 133.861,94.005 133.861,99.535 143.861,99.535 143.861,76.935 121.248,76.935 	"/>
                                    <rect style="fill:#FFFFFF;" x="53.141" y="33.283" width="51.058" height="10"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span onclick="onMenuItemClick(this)" class="menu-title">Reports</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">


                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="<?php echo Router::fullBaseUrl();?>/client/reports/employee">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Employee</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="<?php echo Router::fullBaseUrl();?>/client/reports/dependents">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Dependant</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
</div>