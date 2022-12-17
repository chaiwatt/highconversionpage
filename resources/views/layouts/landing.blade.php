
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5JEMBCFZYP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-5JEMBCFZYP');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Full-Stack Training Class| คอร์สเรียน Full-Stack developper</title>
    <meta name="description" content="Full-Stack Training Class เป็นสถาบันสอน Full-Stack developper, คอร์สเรียน Laravel Full-Stack, คอร์สเรียน System admin เรามีประสบการณ์การสอนกว่าสิบปี และพัฒนาเว็บแอพลิเคชั่นโครงการตั้งแต่ 1 ล้านถึง 10 ล้านบาท เรียนกับเราคุณจะรับงานเองได้อย่างแน่นอน">
    <meta name="keywords" content="สอน Full-Stack developper, สอน Laravel Full-Stack, สอน System admin">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/glide.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/content-box.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/contact-form.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/media-box.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/skin.css')}}">
    
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/cookie/cookieconsent.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/transition.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/spinner.css')}}">
    
</head>
<body>
    <div id="preloader"></div>
    <nav class="menu-subtitle menu-fixed menu-transparent menu-one-page light" data-menu-anima="fade-bottom" data-scroll-detect="true">
        <div class="container">
            <div class="menu-brand">
                <a href="{{ url('/') }}">
                    <img class="logo-default" src="assets/images/logo.png" alt="logo" />
                    <img class="logo-retina" src="assets/images/logo.png" alt="logo" />
                </a>
            </div>
            <i class="menu-btn"></i>
            <div class="menu-cnt">
                <ul>
                    <li>
                        <a href="#overview">เรียนอะไรบ้าง<span>ภาพรวมคอร์ส</span></a>
                    </li>
                    <li>
                        <a href="#course">คอร์สเรียน<span>รายละเอียดคอร์ส</span></a>
                    </li>
                    <li>
                        <a href="#trainingroom">ห้องเรียน<span>รายละเอียดห้องอบรม</span></a>
                    </li>
                    <li>
                        <a href="#result">ผลงาน<span>ผลงานบางส่วน</span></a>
                    </li>
                    <li>
                        <a href="#purchase">ซื้อคอร์ส<span>สั่งซื้อคอร์สเรียน</span></a>
                    </li>
                </ul>
       
                <div class="clear"></div>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <i class="scroll-top-btn scroll-top show"></i>
    <footer class="footer-parallax light">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-3">
                    <h4>บริษัทเอ็นพีซีโซลูชั่นแอนด์เซอร์วิสจำกัด</h4>
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            <li>
                                <a href="https://npcsolutionandservice.com/">บริษัทเอ็นพีซีโซลูชั่นแอนด์เซอร์วิสจำกัด</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-lg-2">
                    <h4>เมนู</h4>
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            <li>
                                <a href="{{'/'}}#overview">เรียนอะไรบ้าง</a>
                            </li>
                            <li>
                                <a href="{{'/'}}#course">คอร์สเรียน</a>
                            </li>
                            <li>
                                <a href="{{'/'}}#trainingroom">ห้องเรียน</a>
                            </li>
                            <li>
                                <a href="{{'/'}}#result">ผลงาน</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4>นโยบายของธุรกิจ</h4>
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            <li>
                                <a href="/policy">เงื่อนไขและข้อตกลงในการใช้บริการ</a>
                            </li>
                            <li>
                                <a href="/policy">นโยบายความเป็นส่วนตัวและคุ้มครองข้อมูล</a>
                            </li>
                            <li>
                                <a href="/policy">นโยบายการคืนเงิน</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4>ติดต่อ</h4>
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            {{-- <li>
                                <span style="font-size: 15px;color:#c2cad8">บริษัท เอ็นพีซีโซลูชั่น แอนด์ เซอร์วิส จำกัด</span>
                            </li> --}}
                            <li>
                               <span style="font-size: 15px;font-weight:300;color:#c2cad8"> 105 หมู่ที่ 8 ตำบลเหมืองง่า อำเภอเมือง จังหวัดลำพูน 51000<br>อีเมล: fullstacktrainingclass@gmail.com<br>โทรศัพท์: 053-093254</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h4>ติดตาม</h4>
                    <div class="icon-links icon-social icon-links-grid social-colors">
                        <a href="https://www.facebook.com/fullstacktrainingclassofficial" class="facebook"><i class="icon-facebook"></i></a>
                        <a href="https://www.youtube.com/channel/UCIvpCh8hEqkNK-UwXOGEbLg" class="youtube"><i class="icon-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bar">
            <div class="container">
                {{-- <span>© Copyright 2022. บริษัท เอ็นพีซี โซลูชั่น แอนด์ เซอร์วิส จำกัด <a target="_blank" href="https://npcsolutionandservice.com/">>>เข้าสู่เว็บไซต์</a></span> --}}
                <span>© Copyright 2022-2023. <a href="{{url('/')}}">Full-Stack Training Class</a></span>
                {{-- <span><img src="{{asset('assets/images/npclogo.png')}}" alt="" /></span> --}}
                <span><img src="{{asset('assets/images/logo.png')}}" alt="" /></span>
            </div>
        </div>

        {{-- <script src="{{asset('assets/js/parallax.min.js')}}"></script> --}}
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('assets/js/glide.min.js')}}"></script>
        <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/tab-accordion.js')}}"></script>
        {{-- <script src="{{asset('assets/js/pagination.min.js')}}"></script> --}}
        {{-- <script src="{{asset('assets/js/imagesloaded.min.js')}}"></script> --}}
        {{-- <script src="{{asset('assets/js/contact-form.js')}}"></script> --}}
        {{-- <script src="{{asset('assets/js/progress.js')}}"></script> --}}
        <script src="{{asset('assets/js/custom.js')}}"></script>
        
        {{-- <script src="{{asset('assets/js/datepicker.min.js')}}"></script> --}}
        <script defer src="{{asset('assets/js/cookie/cookieconsent.js')}}"></script>
        <script defer src="{{asset('assets/js/cookie/cookieconsent-init.js')}}"></script>
        
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            var route = {
                url: "{{ url('/') }}",
                token: $('meta[name="csrf-token"]').attr('content'),
            };
        </script>

        @stack('js')
    </footer>
</body>

</html>
