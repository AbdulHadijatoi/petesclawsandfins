<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Pet's claws and Fins</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@100;200,300;400;500,600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body class="antialiased bg-grey" onload="onLoad();" onresize="onResize();" style="background-image: url('{{asset("images/body_bg.jpg")}}')">

        <nav class="z-index-5" id="main-menu" role="navigation">
            <a href={{URL('/')}} class="full-width align-in-center">
                <img class="mb-10" src="{{asset('images/logo.png')}}" alt="profile photo" width="150">
            </a>
            <h2 class="font-size-20 font-weight-400 text-white text-center">Pet's Claws & Fins</h2>
            <p class="font-size-12 font-weight-300 text-white text-center mb-20">Ecological Seafood Production</p>
            <div class="full-width justify-center">
                <a href="#"><img class="social-icon" src="{{asset('svg/twitter-square.svg')}}" alt="twitter"></a>
                <a href="#"><img class="social-icon" src="{{asset('svg/facebook-square.svg')}}" alt="twitter"></a>
                <a href="#"><img class="social-icon" src="{{asset('svg/instagram-square.svg')}}" alt="twitter"></a>
                <a href="#"><img class="social-icon" src="{{asset('svg/pinterest-square.svg')}}" alt="twitter"></a>
            </div>
            <hr>
            <ul>
                <li><a href="#">Soft-shelled mudcrabs</a></li>
                <li><a href="#">Hard-shelled mudcrabs</a></li>
                <li><a href="#">Information</a></li>
                <li><a href="#">Where to buy</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="{{ route('register') }}">Become distributor</a></li>
                <li><a href="{{ route('login') }}">Log In</a></li>
            </ul>
        </nav>
        <div class="menu-button-container z-index-5">
            <button id="menu-toggle">Open</button>
        </div>

        <div class="flex-column container page-wrap">
            <header class="full-width text-white flex justify-between relative">
                <div id="placeholder1"></div>
                <div id="headerSvg" class="_50-width z-index-2 absolute top-left">

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 628.99 462.748">
                        <defs>
                        <linearGradient id="linear-gradient" x1="-0.077" y1="-0.016" x2="0.954" y2="0.868" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#ff1300"/>
                            <stop offset="0.024" stop-color="#ff1a00"/>
                            <stop offset="0.144" stop-color="#ff3c02"/>
                            <stop offset="0.273" stop-color="#ff5804"/>
                            <stop offset="0.411" stop-color="#ff6d05"/>
                            <stop offset="0.564" stop-color="#ff7d06"/>
                            <stop offset="0.741" stop-color="#ff8606"/>
                            <stop offset="1" stop-color="#ff8907"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient-2" x1="-0.147" y1="0.5" x2="1.059" y2="0.5" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#e01514"/>
                            <stop offset="0.105" stop-color="#e31818"/>
                            <stop offset="0.468" stop-color="#ea2121"/>
                            <stop offset="1" stop-color="#ed2424"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient-3" x1="-0.289" y1="0.5" x2="0.711" y2="0.5" xlink:href="#linear-gradient-2"/>
                        <radialGradient id="radial-gradient" cx="0.542" cy="0.349" r="0.806" gradientTransform="matrix(0.766, 0.497, -0.209, 0.414, 0.2, -0.064)" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#550002"/>
                            <stop offset="0.197" stop-color="#5e0101" stop-opacity="0.941"/>
                            <stop offset="0.428" stop-color="#7b0401" stop-opacity="0.773"/>
                            <stop offset="0.676" stop-color="#aa0900" stop-opacity="0.498"/>
                            <stop offset="0.935" stop-color="#ec1000" stop-opacity="0.11"/>
                            <stop offset="1" stop-color="#ff1300" stop-opacity="0"/>
                        </radialGradient>
                        <radialGradient id="radial-gradient-2" cx="0.382" cy="0.407" r="0.563" gradientTransform="matrix(0.62, 0.639, -0.332, 0.496, 0.28, -0.039)" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#940000"/>
                            <stop offset="0.143" stop-color="#970000" stop-opacity="0.969"/>
                            <stop offset="0.312" stop-color="#a10200" stop-opacity="0.871"/>
                            <stop offset="0.493" stop-color="#b20500" stop-opacity="0.71"/>
                            <stop offset="0.683" stop-color="#ca0900" stop-opacity="0.486"/>
                            <stop offset="0.879" stop-color="#e90f00" stop-opacity="0.204"/>
                            <stop offset="1" stop-color="#ff1300" stop-opacity="0"/>
                        </radialGradient>
                        </defs>
                        <g id="Group_91" data-name="Group 91" transform="translate(5787 665)">
                        <path id="Path_5" data-name="Path 5" d="M548.676,0H0V254.318l.2-.029Q.18,329.869.1,405.449c-.005,4.509,1.33,6.267,5.535,7.47a389.728,389.728,0,0,0,136.631,14.1C262.2,418.265,364,368.807,451.686,288.3c56.573-51.941,98.6-113.749,124.559-186.233A465.017,465.017,0,0,0,599.779.97,9.13,9.13,0,0,1,600,0Z" transform="translate(-5787 -665)" opacity="0.97" fill="url(#linear-gradient)"/>
                        <g id="Group_2" data-name="Group 2" transform="translate(-5787 -665)">
                            <g id="Group_1" data-name="Group 1">
                            <path id="Path_1" data-name="Path 1" d="M628.99,0V2a37.991,37.991,0,0,0-1.02,4.31c-1.37,11.03-2.36,22.13-4.05,33.11-9.14,59.46-29.36,114.98-59.83,166.82-34.45,58.62-79.96,107.41-133.86,148.38-83.7,63.62-177.26,101.9-283.12,107.54A397.231,397.231,0,0,1,4.94,444.18C1.02,442.94,0,441.24,0,437.27Q.165,221.465.09,5.65V2.24C.16,3.81.22,5.39.22,6.96Q.235,206.2.1,405.45c0,4.51,1.33,6.27,5.54,7.47a389.8,389.8,0,0,0,136.63,14.1C262.2,418.27,364,368.81,451.69,288.3c56.57-51.94,98.6-113.75,124.55-186.24A464.813,464.813,0,0,0,599.78.97a6.68,6.68,0,0,1,.16-.75h23.09C625.02.22,627.01.08,628.99,0Z" opacity="0.6" fill="url(#linear-gradient-2)"/>
                            <path id="Path_2" data-name="Path 2" d="M553.04,6.29a479.518,479.518,0,0,1-18.22,124.38c-25.98,90.98-72.7,169.07-145.88,230.06-49.59,41.34-105.73,68.76-170.91,74.57-44.09,3.93-86.45-3-126.35-22.97a183.035,183.035,0,0,1-33.2-21.03,137,137,0,0,1-33.55-39.16A147.892,147.892,0,0,0,11.17,332.6C8.01,328.69,3.76,325.67,0,322.26V254.32s27.53-4.35,45.95,18.71c15.71,19.66,28.29,66.58,109.54,88.42a319.329,319.329,0,0,0,48.67,8.81C332.62,384.19,525.11,249.74,548.67.15h4.37C553.04,2.67,553.07,4.48,553.04,6.29Z" opacity="0.6" fill="url(#linear-gradient-3)"/>
                            <path id="Path_3" data-name="Path 3" d="M155.49,361.45,58.48,391.3a137,137,0,0,1-33.55-39.16A147.892,147.892,0,0,0,11.17,332.6C8.01,328.69,3.76,325.67,0,322.26V254.32s27.53-4.35,45.95,18.71C61.66,292.69,74.24,339.61,155.49,361.45Z" opacity="0.5" fill="url(#radial-gradient)"/>
                            </g>
                            <path id="Path_4" data-name="Path 4" d="M131.13,427.68A389.413,389.413,0,0,1,5.64,412.92C1.43,411.72.1,409.96.1,405.45q.045-37.785.07-75.58c0-2.48,0-4.97.01-7.45,3.71,3.35,7.88,6.33,10.99,10.18a147.892,147.892,0,0,1,13.76,19.54A137,137,0,0,0,58.48,391.3a183.035,183.035,0,0,0,33.2,21.03A225.313,225.313,0,0,0,131.13,427.68Z" opacity="0.5" fill="url(#radial-gradient-2)"/>
                        </g>
                        </g>
                    </svg>
                    
                    <div class="absolute top-left _85-width _85-height align-in-center">
                        <img class="_40-width mb-40 mr-15 sm_mb-20 mr-5" src="{{asset('images/logo.png')}}">
                    </div>

                </div>
                <div id="headerArc" class="_70-width z-index-1 absolute top-right sm_full-width">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-5 18 977.35 707.88">
                        <defs>
                            <style>
                            .cls-1 {
                                fill: none;
                            }
                        
                            .cls-2 {
                                clip-path: url(#clip-path);
                            }
                        
                            .cls-3 {
                                fill: #b10207;
                            }
                        
                            .cls-4 {
                                fill: #e50b00;
                            }
                        
                            .cls-5 {
                                fill: url(#linear-gradient);
                            }
                        
                            .cls-6 {
                                fill: url(#radial-gradient);
                            }
                        
                            .cls-7 {
                                filter: url(#Path_6);
                            }
                            </style>
                            <clipPath id="clip-path">
                            <path id="Path_11" data-name="Path 11" class="cls-1" d="M1286.124,0V568.1q-27.8,10.18-57.321,18.164c-70.31,19.07-147.617,28.817-230.251,28.817-175.688,0-334.854-62.134-450.614-162.77-32.331-29-60.432-60.462-83.641-94C420.016,294.348,393.455,222.84,389,146.469A396.051,396.051,0,0,1,404.943,10.512l-3.383.2q1.4-5.377,2.93-10.713Z" transform="translate(-388.344)"/>
                            </clipPath>
                            <filter id="Path_6" x="0" y="0" width="977.35" height="707.88" filterUnits="userSpaceOnUse">
                            <feOffset dx="-10" dy="3" input="SourceAlpha"/>
                            <feGaussianBlur stdDeviation="5" result="blur"/>
                            <feFlood/>
                            <feComposite operator="in" in2="blur"/>
                            <feComposite in="SourceGraphic"/>
                            </filter>
                            <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#ff8907"/>
                            <stop offset="0.223" stop-color="#ff5e04"/>
                            <stop offset="0.439" stop-color="#ff3d02"/>
                            <stop offset="0.645" stop-color="#ff2601"/>
                            <stop offset="0.837" stop-color="#ff1700"/>
                            <stop offset="1" stop-color="#ff1300"/>
                            </linearGradient>
                            <radialGradient id="radial-gradient" cx="0.427" cy="0.476" fx="0.3279726505279541" r="0.211" gradientTransform="matrix(1.131, -0.651, 2.499, 1.953, -1.095, -0.191)" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#360000"/>
                            <stop offset="0.255" stop-color="#410000" stop-opacity="0.91"/>
                            <stop offset="0.554" stop-color="#610002" stop-opacity="0.643"/>
                            <stop offset="0.875" stop-color="#970105" stop-opacity="0.208"/>
                            <stop offset="1" stop-color="#b10207" stop-opacity="0"/>
                            </radialGradient>
                        </defs>
                        <g id="Group_93" data-name="Group 93" transform="translate(-66.324 12)">
                            <g id="Group_91" data-name="Group 91" transform="translate(-247.656)">
                            <g id="Group_4" data-name="Group 4" class="cls-2" transform="translate(388.344)">
                                <g id="sjaWRX.tif" transform="translate(-162.452)">
                                <image id="Layer_1" data-name="Layer 1" width="1060.232" height="757.165" xlink:href="{{asset('images/header2-image.jpg')}}"/>
                                </g>
                            </g>
                            </g>
                            <g id="Group_92" data-name="Group 92" transform="translate(-241.326)">
                            <g class="cls-7" transform="matrix(1, 0, 0, 1, 307.65, -12)">
                                <path id="Path_6-2" data-name="Path 6" d="M347.85,0a469.03,469.03,0,0,0-15.2,118.55c0,139.15,61.37,266.42,162.92,364.3,123.9,119.4,307.6,195.03,512.65,195.03,96.68,0,188.62-16.81,271.78-47.1V600.24S930.2,747.051,593,535.519C268.372,313.93,347.85,0,347.85,0Z" transform="translate(-307.65 12)"/>
                            </g>
                            <path id="Path_7" data-name="Path 7" class="cls-3" d="M1280,600.24v30.54c-83.16,30.29-175.1,47.1-271.78,47.1-205.05,0-388.75-75.63-512.65-195.03,123.19,105.3,297.89,171.03,491.65,171.03C1092.11,653.88,1191.42,634.62,1280,600.24Z"/>
                            <path id="Path_8" data-name="Path 8" class="cls-4" d="M1279.995,564.22v36.02c-88.58,34.38-187.89,53.64-292.78,53.64-193.76,0-368.46-65.73-491.65-171.03-101.55-97.88-162.92-225.15-162.92-364.3A469.03,469.03,0,0,1,347.845,0h56.53a436.958,436.958,0,0,0-16.96,120.68c0,68.49,15.93,133.78,44.76,193.25,30.83,63.57,76.41,120.5,133.05,167.61a.109.109,0,0,1,.04.02,569.815,569.815,0,0,0,46.62,34.86l.01.01c98.45,66.09,222.2,105.45,356.61,105.45,93.31,0,179.13-13.45,254.56-39.62Q1252.36,574.325,1279.995,564.22Z"/>
                            <path id="Path_9" data-name="Path 9" class="cls-5" d="M1223.07,582.26c-75.43,26.17-161.25,39.62-254.56,39.62-241.52,0-448.62-127.08-536.33-307.95C539.15,490.6,750.79,610.88,994.39,610.88,1076.46,610.88,1153.24,601.2,1223.07,582.26Z"/>
                            <path id="Path_10" data-name="Path 10" class="cls-6" d="M679.61,537.784c-41.707,0-385.285-74.713-351.48-522.764l78.7-4.583A393.218,393.218,0,0,0,391,145.465c4.417,75.853,36.634,143.209,74.775,210.4C522.566,455.9,656.285,527.019,679.61,537.784Z"/>
                            </g>
                        </g>
                    </svg>
                </div>
            </header>

            {{-- grey_shade_container is loaded dynamically --}}
            {{-- sections appear in reverse order as flex-column-reverse --}}
            <main id="mainContainer">
                <section id="lastSection" class="full-width h1000 align-in-center sm_h700">
                    <div class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center _mt_100 sm_mt_60">
                        <h1 class="h1 text-yellow sm_font-size-30 text-right sm_text-center">LOCAL COMMUNITY ENGAGEMENT</h1>
                        <p class="para sm_font-size-11 text-right sm_text-center">
                            It is in our core believe that if you benefit the local community, the people there will add value to your business as well. For every site we establish a manufacturing facility, our project will add value to the community as whole. We will provide jobs for hundreds of local residents with positions available within our production, sales, administration, and management teams. We will also offer hundreds of local farmers opportunities to join our supply network, providing training, coaching, and financial support to help them adapt to a more intensive and efficient farming system. Through our research and development, anything learned or discovered will be shared with our farmers to produce more efficiently and a healthier product. One among many different local benefitting activities, is that we will arrange cleanup days where we offer students an extra income for their effort as well as courses in environment know-how and teach them the importance of keeping the environment healthy.
                        </p>
                    </div>
                    <div class="arc_bg">
                        <div class="grey_shade_container">
                        </div>
                    </div>
                </section>
                <section id="section2" class="full-width h1000 align-in-center sm_h1100">
                    <div class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center mt-180 sm_mt-10">
                        <div class="w400 p-30 absolute top-0 right-0 sm_p-10 sm_w250 sm_relative z-index-3">
                            <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
                        </div>
                        <h1 class="h1 sm_font-size-25 text-white sm_text-center">ECOLOGICAL PRODUCTION</h1>
                        <p class="para sm_font-size-11 sm_text-center">
                            All our seafoods are ecologically produced. Our endeavor is not using resources from the wildlife. We are only using farm-raised animals for our production. Our production is free from using harmful chemicals that can contaminate the environment or the food products we produce. Instead, we use natural minerals and bacteria to break down our waste products into harmless, biodegradable compounds.
                        </p>
                        <div class="full-width justify-between align-center sm_flex-column sm_justify-center">
                            <div class="w400 p-30 sm_p-10 sm_w250">
                                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
                            </div>
                            <div class="flex-column _50-width sm_text-center sm_90-width">
                                <p class="para sm_font-size-11">
                                    We recycle all organic waste we produce, also, we obtain organic waste from other farms, restaurants, and food markets. The organic waste we collect allows a particular larva from the <em class="text-yellow">Hermetia illucens</em> species, known commonly as black soldier fly larva (BSFL), to feeds on it and grow fatter. When the larva has developed to a pupa, it is cleaned, cooked and grided to a paste used as a high-quality protein and lipids perfectly suited as ecological animal feed, reducing the need for wild-sourced feed ingredients such as fishmeal which contributes to the global overfishing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="arc_bg">
                        <div class="grey_shade_container">
                        </div>
                        <img id="arc2" src="{{asset('arch/9.svg')}}">
                    </div>
                </section>
                <section id="section1" class="full-width h1100 align-in-center">
                    <div class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center">
                        <h1 class="h1 text-yellow sm_font-size-35 sm_mt-130">We are using</h1>
                        <p class="sub-heading mb-20 sm_text-center sm_mb-0">High-tech and artificial intelligence (AI) to produce ecological food.</p>
                        <div class="full-width justify-between sm_flex-column sm_align-center sm_justify-center">
                            <div class="w400 p-30 sm_p-10 sm_w250">
                                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
                            </div>
                            <div class="flex-column _50-width sm_text-center sm_90-width">
                                <h2 class="h2 text-yellow sm_font-size-30">ABOUT US</h2>
                                <p class="para sm_font-size-11">
                                    Pete’s Claws and Fins is a high-tech producer of ecological seafood. We use state-of-the-art, highly computerized equipment to monitor and manage our seafood to ensure it is of the highest possible quality. All equipment we use is developed by ourselves in-house. We are the only company operating such high-tech equipment. The company started its research and development 2016 by Peter Persson, a Swedish inventor who has designed and built automated and computer-controlled machines and robots for over 30 years. Peter has over the years developed an increasing personal interest for natural and unprocessed food, and though he could make difference with help of his high-tech knowhow.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="arc_bg">
                        <div class="grey_shade_container">
                        </div>
                        <img id="arc1" src="{{asset('arch/10.svg')}}">
                    </div>
                </section>
            </main>

            <footer class="full-width z-index-5 relative">
                <svg class="absolute" style="margin-bottom: -10px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 761.705 463.652">
                    <g style="filter: drop-shadow( 6px 0px 6px rgba(0, 0, 0, 0.8));" id="Group_41" transform="translate(-107 -821)">
                        <g transform="matrix(1, 0, 0, 1, 107, 821)">
                            
                                <radialGradient id="Rectangle_6-2_00000118393049395272186980000003601199239602735242_" cx="131.1084" cy="482.7901" r="0.3883" gradientTransform="matrix(499.1503 -43.0117 -43.0117 -499.1503 -44478.5859 246751.6562)" gradientUnits="userSpaceOnUse">
                                <stop  offset="0" style="stop-color:#FF8A34"/>
                                <stop  offset="1" style="stop-color:#E00000"/>
                            </radialGradient>
                            <path id="Rectangle_6-2" style="fill:url(#Rectangle_6-2_00000118393049395272186980000003601199239602735242_);" d="
                                M198.591,9.439L198.591,9.439c65.283,0,118.205,52.922,118.205,118.205l0,0c0,65.283-52.922,118.205-118.205,118.205l0,0
                                c-65.283,0-118.205-52.922-118.205-118.205l0,0C80.386,62.361,133.308,9.439,198.591,9.439z"/>
                        </g>
                        <g>
                            <defs>
                                <path id="Rectangle_7" d="M305.355,839.876L305.355,839.876c59.94,0,108.532,48.591,108.532,108.532l0,0
                                    c0,59.94-48.591,108.532-108.532,108.532l0,0c-59.94,0-108.532-48.591-108.532-108.532l0,0
                                    C196.823,888.467,245.414,839.876,305.355,839.876z"/>
                            </defs>
                            <clipPath id="Rectangle_7_00000089573270239812126640000004520386975560608171_">
                                <use xlink:href="#Rectangle_7"  style="overflow:visible;"/>
                            </clipPath>
                            <g style="clip-path:url(#Rectangle_7_00000089573270239812126640000004520386975560608171_);">
                                
                                    <image style="overflow:visible;" width="1429" height="877" xlink:href="{{asset('images/image_3.jpg')}}"  transform="matrix(0.2589 0 0 0.2589 127.85 834.8722)">
                                </image>
                            </g>
                        </g>
                    </g>
                    <g style="filter: drop-shadow( 6px 0px 6px rgba(0, 0, 0, 0.8));" id="Group_41_00000159461837734112345100000006418876321107595199_" transform="translate(-107 -821)">
                        <g transform="matrix(1, 0, 0, 1, 107, 821)">
                            
                                <radialGradient id="Rectangle_6-2_00000133508265552570723280000009298788813370790018_" cx="131.7027" cy="482.6174" r="0.2901" gradientTransform="matrix(499.1503 -43.0117 -43.0117 -499.1503 -44478.5859 246751.6562)" gradientUnits="userSpaceOnUse">
                                <stop  offset="0" style="stop-color:#FF8A34"/>
                                <stop  offset="1" style="stop-color:#E00000"/>
                            </radialGradient>
                            
                                <path id="Rectangle_6-2_00000102523483417539575970000010441552123867476642_" style="fill:url(#Rectangle_6-2_00000133508265552570723280000009298788813370790018_);" d="
                                M502.693,99.981L502.693,99.981c48.771,0,88.307,39.536,88.307,88.307l0,0c0,48.771-39.536,88.307-88.307,88.307l0,0
                                c-48.771,0-88.307-39.536-88.307-88.307l0,0C414.386,139.517,453.923,99.981,502.693,99.981z"/>
                        </g>
                        <g>
                            <defs>
                                <path id="Rectangle_7_00000118374291188098860910000009259735561836766373_" d="M609.517,928.032L609.517,928.032
                                    c44.779,0,81.08,36.301,81.08,81.08l0,0c0,44.779-36.301,81.08-81.08,81.08l0,0c-44.779,0-81.08-36.301-81.08-81.08l0,0
                                    C528.437,964.332,564.738,928.032,609.517,928.032z"/>
                            </defs>
                            <clipPath id="Rectangle_7_00000071535616020478365760000010045756066559111054_">
                                <use xlink:href="#Rectangle_7_00000118374291188098860910000009259735561836766373_"  style="overflow:visible;"/>
                            </clipPath>
                            <g style="clip-path:url(#Rectangle_7_00000071535616020478365760000010045756066559111054_);">
                                
                                    <image style="overflow:visible;" width="1429" height="877" xlink:href="{{asset('images/image_5.jpg')}}"  transform="matrix(0.2014 0 0 0.2014 496 920.1766)">
                                </image>
                            </g>
                        </g>
                    </g>
                    <g style="filter: drop-shadow( 6px 0px 6px rgba(0, 0, 0, 0.8));" id="Group_41_00000003078696164919490630000001320425455692212113_" transform="translate(-107 -821)">
                        <g transform="matrix(1, 0, 0, 1, 107, 821)">
                            
                                <radialGradient id="Rectangle_6-2_00000108274577833090856370000008530305212779170969_" cx="131.3732" cy="482.4697" r="0.372" gradientTransform="matrix(499.1503 -43.0117 -43.0117 -499.1503 -44478.5859 246751.6562)" gradientUnits="userSpaceOnUse">
                                <stop  offset="0" style="stop-color:#FF8A34"/>
                                <stop  offset="1" style="stop-color:#E00000"/>
                            </radialGradient>
                            
                                <path id="Rectangle_6-2_00000054265630195933872920000000224317566555944578_" style="fill:url(#Rectangle_6-2_00000108274577833090856370000008530305212779170969_);" d="
                                M344.545,162.96L344.545,162.96c62.546,0,113.25,50.704,113.25,113.25l0,0c0,62.546-50.704,113.25-113.25,113.25l0,0
                                c-62.546,0-113.25-50.704-113.25-113.25l0,0C231.295,213.664,281.999,162.96,344.545,162.96z"/>
                        </g>
                        <g>
                            <defs>
                                <path id="Rectangle_7_00000052821040910783348520000017259514160633741959_" d="M451.319,993.002L451.319,993.002
                                    c57.428,0,103.982,46.554,103.982,103.982l0,0c0,57.428-46.554,103.982-103.982,103.982l0,0
                                    c-57.428,0-103.982-46.554-103.982-103.982l0,0C347.337,1039.557,393.891,993.002,451.319,993.002z"/>
                            </defs>
                            <clipPath id="Rectangle_7_00000011750910233994347730000001836264302129693076_">
                                <use xlink:href="#Rectangle_7_00000052821040910783348520000017259514160633741959_"  style="overflow:visible;"/>
                            </clipPath>
                            <g style="clip-path:url(#Rectangle_7_00000011750910233994347730000001836264302129693076_); ">
                                
                                    <image style="overflow:visible;" width="1429" height="877" xlink:href="{{asset('images/image_6.jpg')}}"  transform="matrix(0.2463 0 0 0.2463 281.5209 988.9645)">
                                </image>
                            </g>
                        </g>
                    </g>
                </svg>
                <svg style="margin-bottom: -10px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 761.705 463.652">
                    <defs>
                    <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#f3c531"/>
                        <stop offset="1" stop-color="#f37624"/>
                    </linearGradient>
                    <linearGradient id="linear-gradient-2" x1="0.054" y1="0.21" x2="0.849" y2="0.898" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#f86620"/>
                        <stop offset="1" stop-color="#f71622"/>
                    </linearGradient>
                    </defs>
                    <g id="Group_40" data-name="Group 40" transform="translate(0 -3011.488)">
                    <g id="fpIUa2.tif" transform="translate(58.997 3380.907)">
                        <image id="Layer_1" data-name="Layer 1" width="81.663" height="76.145" xlink:href="{{asset('images/logo.png')}}"/>
                    </g>
                    <path id="Path_31" data-name="Path 31" d="M761.7,3113v36.961q-6.543-.634-13.074-1.381-24.565-2.865-49.07-6.32c-18.269-2.583-36.508-5.385-54.682-8.545q-37.731-6.561-75.177-14.6-59.984-12.8-119.034-29.326a2101.765,2101.765,0,0,1-271.631-96.314A1987,1987,0,0,1,0,2904.791v-60.93a1044.908,1044.908,0,0,0,158.292,111.774C231.981,2998.26,309.6,3032,390.73,3057.732a1198.972,1198.972,0,0,0,126.11,32.563q33.643,6.775,67.661,11.509c18.7,2.577,37.425,4.814,56.217,6.546,21.691,1.993,43.411,3.309,65.173,4.148C724.494,3113.212,743.1,3113.224,761.7,3113Z" transform="translate(0 167.628)" fill="#e84820"/>
                    <path id="Path_32" style="filter: drop-shadow( 6px 0px 6px rgba(0, 0, 0, 0.8));" data-name="Path 32" d="M761.686,3331.085c0,2.035-.4,2.434-2.44,2.434q-77.274-.054-154.549-.054H492.138c-.5-.97-1.535-1.208-2.374-1.666-44.28-24.3-88.863-48.029-133.994-70.714-58.77-29.546-118.106-57.848-179.381-81.847q-4.829-1.893-9.682-3.749c-34.884-13.354-70.184-25.434-107.1-32.045-14.365-2.577-28.814-4.166-43.465-2.809-5.439.506-10.664,1.994-15.984,3.047H.148v-49.636q0-7.926.006-15.853-.009-38.142.006-76.283.009-45.569.03-91.149c0-.869-.69-2.011.553-2.672.839,1.476,2.452,1.9,3.773,2.684,42.108,24.767,85.293,47.529,129.275,68.767q23.753,11.47,47.69,22.369C317.63,3063.942,458.5,3112.322,604.7,3145.289q11.774,2.66,23.589,5.177,49.246,10.5,98.992,18.293,17.174,2.66,34.348,5.267Q761.626,3252.55,761.686,3331.085Z" transform="translate(0.001 141.62)" fill="url(#linear-gradient)"/>
                    <path id="Path_33" style="filter: drop-shadow( 5px 0px 5px rgba(0, 0, 0, 0.4));" data-name="Path 33" d="M531.7,3481.371H500.207c-74.195-60.526-157.714-104.586-249.345-134.226a769.484,769.484,0,0,0-74.474-20q-11.961-2.58-24.023-4.8c-18.346-3.374-36.818-5.945-55.372-8a801.543,801.543,0,0,0-82.08-4.475c-4.921-.036-9.837.274-14.752.428a.52.52,0,0,1-.1.006c0-11.491.065-22.988-.065-34.479v-.167a4.74,4.74,0,0,1,.149-1.345.084.084,0,0,1,.012-.036c.268-.845.922-1.089,2.279-.8,4.172,1.232,8.522,1.19,12.776,1.642,15.526,1.637,30.98,3.737,46.381,6.195q30.519,4.883,60.692,11.628a1056.871,1056.871,0,0,1,163,50.3C373.586,3378.458,456.058,3423.958,531.7,3481.371Z" transform="translate(0 -6.286)" fill="#f3c531"/>
                    <path id="Path_34" data-name="Path 34" d="M561.031,3460H527.468a1015.6,1015.6,0,0,0-113.19-73.647,1084.733,1084.733,0,0,0-247.952-101.414q-45.925-12.452-92.856-20.494c-19.364-3.291-38.775-6.23-58.318-8.254-4.517-.464-9.015-1.19-13.544-1.488a3.683,3.683,0,0,1-1.446-.327H.149c-.054-.03-.1-.06-.149-.089a4.74,4.74,0,0,1,.149-1.345V3220.58h.3c5.885,2.219,12.1,3.118,18.18,4.552a1665.379,1665.379,0,0,1,231.457,73.338q10.3,4.1,20.548,8.307,51.558,21.2,101.533,45.482a1638.247,1638.247,0,0,1,176.382,99.533Q554.812,3455.863,561.031,3460Z" transform="translate(0 15.087)" fill="#b10610"/>
                    <path id="Path_35" style="filter: drop-shadow( 5px 0px 5px rgba(0, 0, 0, 0.5));" data-name="Path 35" d="M581.555,3449.212H544.63q-41.98-31.991-87.394-60-41.641-25.77-84.972-47.737-49.674-25.208-101.533-45.482-52.772-20.664-107.763-36.294Q110.76,3244.825,57.3,3235.245c-18.846-3.4-37.77-6.4-56.818-8.534-.071-.006-.149-.018-.22-.024H.25v-16.894q0-7.927.006-15.853a.006.006,0,0,1,.006.006,1768.317,1768.317,0,0,1,199.745,61.347c120.73,44.893,235.962,100.968,344.82,169.943Q563.367,3436.983,581.555,3449.212Z" transform="translate(-0.101 25.874)" fill="#e74a1c"/>
                    <path id="Path_36" style="filter: drop-shadow( 3px 0px 5px rgba(0, 0, 0, 0.5));" data-name="Path 36" d="M47.545,3328.845c10.268.442,20.552.66,30.8,1.387,11.311.8,22.6,1.881,33.862,3.321,14.187,1.814,28.312,3.923,42.383,6.489q27.39,5,54.262,12.206A737.307,737.307,0,0,1,318.5,3391.13,772.589,772.589,0,0,1,441.9,3460.457q29.325,20.133,56.805,42.813c-.68.976-1.642.5-2.412.5q-120.313.041-240.626.067a3.5,3.5,0,0,1-3.784-2.331,234.826,234.826,0,0,0-37-55.842c-16.772-18.813-36.215-34.106-59.068-44.889a163.47,163.47,0,0,0-46.36-13.865,179.77,179.77,0,0,0-37.27-1.48,232.915,232.915,0,0,0-62.674,13.134c-3.165,1.108-6.34,2.192-9.511,3.286V3330.13C15.836,3329.225,31.682,3328.727,47.545,3328.845Z" transform="translate(0 -28.745)" fill="url(#linear-gradient-2)"/>
                    </g>

                </svg>
            </footer>
        <div>
            <script> 
                function onLoad() {
                    setGreyBackground(2, 7, 'grey1.jpg');
                    setGreyBackground(1, 8, 'grey12.jpg');
                    setGreyBackground(0, 19, 'grey17.jpg');
                    setHeight('headerSvg', 'placeholder1');
                    makeSquare();
                    setMarginBottom('lastSection');
                    setMarginTop(getHeight(getElem('headerArc')) / 1.7, 'mainContainer');
                    setMarginTop(getHeight(getElem('arc1')) / 1.7, 'section2');
                    setMarginTop(getHeight(getElem('arc2')) / 1.2, 'lastSection');
                }
            
                function onResize() {
                    setMarginBottom('lastSection');
                    setHeight('headerSvg', 'placeholder1');
                    makeSquare();
                    setMarginTop(getHeight(getElem('headerArc')) / 1.7, 'mainContainer');
                    setMarginTop(getHeight(getElem('arc1')) / 1.7, 'section2');
                    setMarginTop(getHeight(getElem('arc2')) / 1.2, 'lastSection');
                }
            </script>
        <script src="{{asset('js/script.js')}}"></script>

    </body>
</html>

