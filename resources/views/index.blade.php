@extends('layouts.landing')
@section('content')
<section id="overview" class="section-image section-full-width light section-bottom-layer-2 align-center section-ovarlay-image bannerTitle" style="background-image:url({{asset('assets/images/bg.svg')}})">
    <div class="container smoothScroll">
        <hr class="space-lg in-visible-sm" />
        
        <h1 data-anima="fade-in" data-time="1000">
            คุณกำลังมองหา Salepage<br class="hidden-md" /> สำหรับดี ๆ ใช้ง่ายเพื่อ <span> ยิงแอด </span>  อยู่ใช่ไหม?.
        </h1>
        <p class="width-900" data-anima="fade-in" data-time="1000">
            สร้าง Sellpage ง่าย ๆ แค่ลากวางแล้วใส่คอนเทนต์ เรามี Salepage หลากหลายเหมาะสำหรับสินค้าหลายกลุ่มทั้งสินค้า Shipping, สินค้า Digital มีระบบเชื่อมต่อกับ Payment gateway ลูกค้าชำระเงินผ่าน QR payment, บัตรเครดิต/เดบิต, True Money Wallet ง่ายกว่านี้ไม่มีแล้ว
        </p>

        <a href="#purchase" class="btn btn-sm btn-circle shadow-1 full-width-sm btnBuycourse" data-anima="fade-in" data-time="1000" style="z-index: 1000">สั่งซื้อเลย</a><span class="space hidden-sm"></span>
        {{-- <a href="{{asset('assets/upload/course_syllabus.pdf')}}" class="btn btn-sm btn-circle shadow-1 full-width-sm btnDownload" data-anima="fade-in" data-time="1000" style="z-index: 1001">ดูแพ็คเกจ</a><span class="space hidden-sm"></span> --}}
        
        <hr class="space-sm visible-sm" />
        <hr class="space-50" />
        <img src="{{asset('assets/images/responsive.png')}}" alt="" />
    </div>
</section>



<section class="section-base" id="details" >
    <div class="container" >
        <div id="course" class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <img class="margin-23" src="{{asset('assets/images/pagedesign.png')}}" alt="ติดตั้งโปรแกรมและเครื่องมือที่ใช้ในการพัฒนาเว็บไซต์" />
            </div>
            <div class="col-lg-6 col-md-6 " data-anima="fade-right" data-time="1000">
                <h2>สร้างเซลเพจง่าย ๆ <br />ด้วยเครื่องมือ Drag and drop</h2>
                <p style="font-size: 20px">
                    ออกแบบเซลเพจด้วยตัวคุณเอง ด้วยวิดเกตลากงาง
                </p>
                <ul class="icon-list icon-circle ">
                    <li>Image วิดเกตสำหรับเพิ่มรูปภาพ</li>
                    <li>Text วิดเกตสำหรับเพิ่มรูปภาพ</li>
                    <li>Slide show วิดเกตสำหรับเพิ่มสไลด์รูปภาพ</li>
                    <li>Video วิดเกตสำหรับเพิ่มลิงค์วีดีโอยูทูป</li>
                    <li>Product วิดเกตสำหรับเพิ่มสินค้า</li>
                </ul>
            </div>
        </div>
        {{-- <hr class="space-sm" />
        <hr class="space-sm visible-md" /> --}}
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <h2>เรามี Partner Shipping<br />provider หลากหลาย</h2>
                <p style="font-size: 20px">
                    เรามี partner shipping provider หลากหลาย มี API ติดตามสถานะเรียลไทม์
                </p>
                <ul class="icon-list icon-circle">
                    <li>Partner Shipping หลากหลาย เช่น ไปรษณีย์ไทย, Flash, Kerry, J&T</li>
                    <li>สามารถดูสถานะสินค้าได้เรียลไทม์</li>
                    <li>แจ้งเตือนผ่านไลน์และอีเมลเมื่อลูกค้ารับสินค้า</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6" data-anima="fade-right" data-time="1000">
                <img  src="{{asset('assets/images/shipping.png')}}" alt="HTML และ CSS ที่สำคัญสำหรับการออกแบบ Responsive เว็บไซต์" />
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <img class="margin-23" src="{{asset('assets/images/paymentgateway.png')}}" alt="HTML และ CSS ที่สำคัญสำหรับการออกแบบ Responsive เว็บไซต์" />
            </div>
            <div class="col-lg-6 col-md-6 " data-anima="fade-right" data-time="1000">
                <h2>รองรับ Payment gateway<br />ลูกค้ามีช่องทางชำระเงินหลายหลาย</h2>
                <p style="font-size: 20px">
                    ระบบรองรับ Payment gateway API ทำให้ลูกค้าสามารถเลือกชำระเงินได้หลากลาย
                </p>
                <ul class="icon-list icon-circle ">
                    <li>OMISE payment gateway รองรับ QR payment, Truemoney wallet, บัตรเครดิต/เดบิต</li>
                    <li>GB Primpay payment gateway รองรับ QR payment, Truemoney wallet, บัตรเครดิต/เดบิต</li>
                    <li>SCB PAYMENT GATEWAY</li>
                    <li>KBANK PAYMENT GATEWAY</li>
                </ul>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <h2>มีระบบแจ้งเตือน<br />เมื่อลูกค้าชำระเงินหรือรับสินค้า</h2>
                <p style="font-size: 20px">
                    ระบบ API แจ้งเตือนเมื่อลูกค้าชำระเงินหรือรับสินค้า ผ่าน Line notification และอีเมล
                </p>
                <ul class="icon-list icon-circle ">
                    <li>ระบบ API แจ้งเตือนเมื่อลูกค้าชำระเงินผ่าน Line notification และอีเมล</li>
                    <li>ระบบ API แจ้งเตือนเมื่อลูกค้าชำระเงินผ่าน Line notification และอีเมล</li>
                    <li>ตั้งค่าง่าย ไม่ซับซ้อน</li>
                    {{-- <li>SCB PAYMENT GATEWAY</li>
                    <li>KBANK PAYMENT GATEWAY</li> --}}
                </ul>
            </div>
            <div class="col-lg-6 col-md-6" data-anima="fade-right" data-time="1000">
                <img class="margin-23" src="{{asset('assets/images/notification.png')}}" alt="สร้างโปรเจคด้วย Laravel9 และเชื่อมต่อฐานข้อมูล" />
            </div>
        </div>
        {{-- <div class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <img class="margin-23" src="{{asset('assets/images/git.png')}}" alt="สร้าง Github Repositoryและ Push โปรเจค" />
            </div>
            <div class="col-lg-6 col-md-6 " data-anima="fade-right" data-time="1000">
                <h2>สร้าง Github Repository<br />และ Push โปรเจค</h2>
                <p style="font-size: 20px">
                    เรียนรู้การสร้าง Github Repository สำหรับเป็นที่เก็บ  version control ของ Source code
                </p>
                <ul class="icon-list icon-circle">
                    <li>สมัครการใช้งาน Github</li>
                    <li>สร้าง Repository บน Github</li>
                    <li>เรียนรู้สำสั่ง Github เบื้องต้น</li>
                    <li>Add โปรเจค Laravel และ Push เข้าสู่ Github</li>
                </ul>
            </div>
        </div> --}}
        {{-- <div class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <h2>ติดตั้งเว็บเซิร์ฟเวอร์<br />และ pull โปรเจคจาก Github</h2>
                <p style="font-size: 20px">
                    เรียนรู้การสร้างคลาวด์เซิร์ฟเวอร์ Digital Ocean, การติดตั้ง Apache webserver, PHP8, PHP MyAdmin, การโคลนโปรเจคจาก Github
                </p>
                <ul class="icon-list icon-circle ">
                    <li>สร้างคลาวด์เซิร์ฟเวอร์ Digital Ocean (CentOS8)</li>
                    <li>การติดตั้งและอัพเดท Linux package</li>
                    <li>ติดตั้ง PHP8 บนคลาวด์เซิร์ฟเวอร์</li>
                    <li>ติดตั้ง PHP MyAdmin บนคลาวด์เซิร์ฟเวอร์</li>
                    <li>การสร้างฐานข้อมูล</li>
                    <li>การโคลนโปรเจค Laravel จาก Github</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6" data-anima="fade-right" data-time="1000">
                <img class="margin-23" src="{{asset('assets/images/server.png')}}" alt="ติดตั้งเว็บเซิร์ฟเวอร์และ Deploy โปรเจคจาก Github" />
            </div>
        </div> --}}
        {{-- <div class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <img class="margin-23" src="{{asset('assets/images/secure.png')}}" alt="สมัครโดเมนการคอนฟิก DNS และ SSL" />
            </div>
            <div class="col-lg-6 col-md-6 " data-anima="fade-right" data-time="1000">
                <h2>สมัครโดเมน<br />และการคอนฟิก DNS และ SSL</h2>
                <p style="font-size: 20px">
                    เรียนรู้การสมัครโดเมนจาก NameCheap.com ,การคอนฟิก DNS ให้เชื่อมต่อกับ IP ของคลาวด์เซิร์ฟเวอร์ การติดตั้ง SSL และ Auto Renew SSL
                </p>
                <ul class="icon-list icon-circle">
                    <li>สมัครซื้อโดเมนจาก NameCheap.com</li>
                    <li>คอนฟิก DNS ให้เชื่อมต่อกับ IP ของคลาวด์เซิร์ฟเวอร์</li>
                    <li>ติดตั้ง SSL package เพื่อให้สามารถใช้งาน HTTPS(Hypertext Transfer Protocol over Secure Socket Layer)</li>
                    <li>ตั้งค่า Cronjob ให้ทำ Auto Renew SSL</li>
                </ul>
            </div>
        </div> --}}
 
        {{-- <hr class="space-sm" />
        <hr class="space-sm visible-md" /> --}}
    </div>
</section>

<section class="section-base section-color" id="example">
    <hr class="space-sm" />
    <h2 class="align-center">ตัวอย่างเซลเพจ<span class="dot">.</span></h2>
    <div class="container" >
        <div id="demos" class="grid-list" data-columns="3" data-columns-md="2" data-columns-xs="1">
            <div class="grid-box">
                <div class="grid-item">
                    <a href="/ijsoworksheet" target="_blank" class="media-box media-box-down boxed">
                        <img src="{{asset('assets/images/example/screen_ijso_worksheet.png')}}" alt="" style="">
                        <div class="caption">
                            <h2>IJSO</h2>
                            <p>
                                รวมข้อสอบ IJSO
                            </p>
                        </div>
                    </a>
                </div>
                {{-- <div class="grid-item">
                    <a href="index-music.html" target="_blank" class="media-box media-box-down boxed">
                        <img src="{{asset('assets/images/example/screen-music.jpg')}}" alt="" style="">
                        <div class="caption">
                            <h2>Music</h2>
                            <p>
                                Music apps and video
                            </p>
                        </div>
                    </a>
                </div> --}}
                {{-- <div class="grid-item">
                    <a href="index-saas.html" target="_blank" class="media-box media-box-down boxed">
                        <img src="{{asset('assets/images/example/screen-saas.jpg')}}" alt="" style="">
                        <div class="caption">
                            <h2>Saas</h2>
                            <p>
                                Software and IT
                            </p>
                        </div>
                    </a>
                </div> --}}
                {{-- <div class="grid-item">
                    <a href="index-fintech.html" target="_blank" class="media-box media-box-down boxed">
                        <img src="{{asset('assets/images/example/screen-fintech.jpg')}}" alt="" style="">
                        <div class="caption">
                            <h2>Fintech</h2>
                            <p>
                                Financial and startup
                            </p>
                        </div>
                    </a>
                </div> --}}
                {{-- <div class="grid-item">
                    <a href="index-sport.html" target="_blank" class="media-box media-box-down boxed">
                        <img src="{{asset('assets/images/example/screen-sport.jpg')}}" alt="" style="">
                        <div class="caption">
                            <h2>Sport</h2>
                            <p>
                                Sports and nature
                            </p>
                        </div>
                    </a>
                </div> --}}
                {{-- <div class="grid-item">
                    <a href="index-food.html" target="_blank" class="media-box media-box-down boxed">
                        <img src="{{asset('assets/images/example/screen-food.jpg')}}" alt="" style="">
                        <div class="caption">
                            <h2>Food</h2>
                            <p>
                                Delivery and reservations
                            </p>
                        </div>
                    </a>
                </div> --}}
           
          
            </div>
        </div>
    </div>
</section>



<section id="plan" class="section-base " >
    <hr class="space-sm" />
    <h2 class="align-center">ราคาแพลน<span class="dot">.</span></h2>
    <div class="container">
        
        <div class="tab-box" data-tab-anima="fade-in">
            <div class="panel active">
                <div class="row" data-anima="" data-timeline="asc" data-time="2000">
                    <div class="col-lg-4 anima fade-bottom" style="position: relative; animation-duration: 2000ms; transition-timing-function: ease; transition-delay: 0ms;" aid="0.6571762332142113">
                        <div class="cnt-box cnt-pricing-table">
                            <div class="top-area">
                                <h2>Personal plan</h2>
                                <div class="price"><span>2,500</span></div>
                                <p>บาท/1 ต่อปี</p>
                            </div>
                            <ul>
                                <li>คำสั่งซื้อ</li>
                                <li>คลังสินค้า</li>
                                <li>API Payment gateway</li>
                                <li>API กับบริการขนส่ง</li>
                                <li>รายงานยอดขาย</li>
                                <li>ระบบแจ้งเตือนผ่าน Line และอีเมล</li>
                            </ul>
                            {{-- <div class="bottom-area">
                                <a class="btn btn-border btn-circle btn-sm" href="#">Purchase now</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 anima fade-bottom" style="position: relative; animation-duration: 2000ms; transition-timing-function: ease; transition-delay: 0ms;" aid="0.04549120154463537">
                        <div class="cnt-box cnt-pricing-table pricing-table-big">
                            <div class="top-area">
                                <h2>Business plan</h2>
                                <div class="price"><span>4,000</span></div>
                                <p>บาท/2 ต่อปี</p>
                            </div>
                            <ul>
                                <li>คำสั่งซื้อ</li>
                                <li>คลังสินค้า</li>
                                <li>API Payment gateway</li>
                                <li>API กับบริการขนส่ง</li>
                                <li>รายงานยอดขาย</li>
                                <li>ระบบแจ้งเตือนผ่าน Line และอีเมล</li>
                            </ul>
                            {{-- <div class="bottom-area">
                                <a class="btn btn-circle btn-sm" href="#">Purchase now</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 anima fade-bottom" style="position: relative; animation-duration: 2000ms; transition-timing-function: ease; transition-delay: 0ms;" aid="0.6579484995290694">
                        <div class="cnt-box cnt-pricing-table">
                            <div class="top-area">
                                <h2>Enterprise plan</h2>
                                <div class="price"><span>6,000</span></div>
                                <p>บาท/3 ต่อปี</p>
                            </div>
                            <ul>
                                <li>คำสั่งซื้อ</li>
                                <li>คลังสินค้า</li>
                                <li>API Payment gateway</li>
                                <li>API กับบริการขนส่ง</li>
                                <li>รายงานยอดขาย</li>
                                <li>ระบบแจ้งเตือนผ่าน Line และอีเมล</li>
                            </ul>
                            {{-- <div class="bottom-area">
                                <a class="btn btn-border btn-circle btn-sm" href="#">Purchase now</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
      
        </div>
  
    </div>
</section>




<section id="purchase" class="section-base section-color">
    <div class="container">
        <h2 class="align-center" style="margin-bottom: 15px">สั่งซื้อ
            {{-- @if (!empty($promocode))
                <span class="promotionMessage blink_me"> พิเศษ!! {{$promocode->campaignname}} ใช้โค้ด {{$promocode->name}} ลด {{$promocode->percentdiscount}}%</span>
            @endif --}}
        </h2>    
        <div class="row" data-anima="fade-bottom" data-time="1000">
            <div class="col-lg-12">
                <form class="form-box form-ajax boxed-area paymentForm" >
                {{-- <form class="form-box form-ajax boxed-area paymentForm" action="{{route('getCharge')}}" method="POST" > --}}
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <p>เลือกแพลน</p>
                            <select class="input-select" name="participant" id="participant" required>
                                <option value="">==เลือกแพลน==</option>
                                <option value="1" selected>Personal plan</option>
                                <option value="2">Business plan</option>
                                <option value="3">Enterprise plan</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <p>อีเมล</p>
                            <input id="email" name="email" placeholder="อีเมล" type="email" class="input-text" required value="" >
                        </div>
                        <div class="col-lg-6">
                            <p>รหัสผ่าน</p>
                            <input id="password" name="password" placeholder="รหัสผ่าน" type="password" class="input-text" required value="" >
                        </div>
                        <div class="col-lg-6">
                            <p>ชื่อ</p>
                            <input id="name" name="name" placeholder="ชื่อ" type="text" class="input-text" required value="">
                        </div>
                        <div class="col-lg-6">
                            <p>นามสกุล</p>
                            <input id="lastname" name="lastname" placeholder="นามสกุล" type="text" class="input-text" required value="">
                        </div>
                       
                      
                    </div>
                    <div style="text-align:right" >
                        <button id="btnGetCharge" class="btn btn-sm btn-circle float-right" type="button">ชำระเงิน</button>
                        {{-- <button class="btn btn-sm btn-circle float-right" type="submit">ชำระเงิน</button> --}}
                    </div>
                    <div class="success-box">
                        <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                    </div>
                    <div class="error-box">
                        <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                    </div>
                {{-- </form> --}}
            </div>
            
        </div>
    </div>

    <div id="small-dialog" class="mfp-hide">
      <img id="qrcode" src="" alt="">
    </div>

    @push('js')
    

    @endpush
</section>
@endsection