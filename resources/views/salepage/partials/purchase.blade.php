<div id="{{$salepagesection->salepagename}}" class="contain-wrapp gray-container">
    <div class="container">
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="section-heading purchase-section">
                    <h4>ราคา</h4>
                    
                    <p>เลือกวิชาที่ต้องการหรือเลือก 'แพ็ครวม' ถ้าต้องการทุกวิชา เมื่อชำระเงินแล้วระบบจะลิงค์ไปที่หน้าดาวน์โหลดอัตโนมัติ</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="pricing">
                    <div class="pricing-head">
                        <h4>ฟิสิกส์</h4>
                    </div>
                    <div class="pricing-price">
                        <strong>250</strong>.00<span>บาท</span>
                    </div>
                    <div class="pricing-container">
                        <ul>
                            <li class="styled"> เฉลยละเอียด ปี 59-63</li>
                            <li>แยกเนื้อหาหมวดหมู่</li>
                            <li class="styled">เรียงลำดับง่ายไปยาก</li>
                            <li>เอกสารไฟล์ PDF</li>
                            <li class="styled" style="line-height: 22px"><strong>ฟรี!! เฉลยข้อสอบรอบแรก ปี2564</strong></li>
                        </ul>
                    </div>
                    <div class="pricing-action">
                        <button id="phy01" data-id="phy01" class="btn btn-default purchasebtn"><i id="spinner_phy01" class="fa-solid fa-spinner spinner" style="margin-right: 5px" ></i>ซื้อ</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="pricing">
                    <div class="pricing-head">
                        <h4>เคมี</h4>
                    </div>
                    <div class="pricing-price">
                        <strong>250</strong>.00<span>บาท</span>
                    </div>
                    <div class="pricing-container">
                        <ul>
                            <li class="styled"> เฉลยละเอียด ปี 59-63</li>
                            <li>แยกเนื้อหาหมวดหมู่</li>
                            <li class="styled">เรียงลำดับง่ายไปยาก</li>
                            <li>เอกสารไฟล์ PDF</li>
                            <li class="styled"  style="line-height: 22px"><strong>ฟรี!! ไฟล์โปสเตอร์ตารางธาตุ</strong></li>
                        </ul>
                    </div>
                    <div class="pricing-action">
                        <button id="chem01" data-id="chem01" class="btn btn-default purchasebtn"><i id="spinner_chem01" class="fa-solid fa-spinner spinner" style="margin-right: 5px" ></i>ซื้อ</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="pricing">
                    <div class="pricing-head">
                        <h4>ชีววิทยา</h4>
                    </div>
                    <div class="pricing-price">
                        <strong>250</strong>.00<span>บาท</span>
                    </div>
                    <div class="pricing-container">
                        <ul>
                            <li class="styled"> เฉลยละเอียด ปี 59-63</li>
                            <li>แยกเนื้อหาหมวดหมู่</li>
                            <li class="styled">เรียงลำดับง่ายไปยาก</li>
                            <li>เอกสารไฟล์ PDF</li>
                            <li class="styled" style="line-height: 22px"><strong>ฟรี!! ไฟล์โปสเตอร์ Human Organs</strong></li>
                        </ul>
                    </div>
                    <div class="pricing-action">
                        <button id="bio01" data-id="bio01" class="btn btn-default purchasebtn"><i id="spinner_bio01" class="fa-solid fa-spinner spinner" style="margin-right: 5px" ></i>ซื้อ</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="pricing popular">
                    <div class="pricing-head">
                        <h4>แพ็ครวม <span style="color:rgb(243, 85, 222);font-weight:600">**ขายดี</span></h4>
                    </div>
                    <div class="pricing-price">
                        <strong>650</strong>.00<span>บาท</span>
                    </div>
                    <div class="pricing-container">
                        <ul>
                            <li class="styled"> เฉลยละเอียด ปี 59-63</li>
                            <li>แยกเนื้อหาหมวดหมู่</li>
                            <li class="styled">เรียงลำดับง่ายไปยาก</li>
                            <li>เอกสารไฟล์ PDF</li>
                            <li class="styled" style="line-height: 22px"><strong>ฟรี!! เฉลยฟิสิกส์ 2564 และไฟล์โปสเตอร์</strong></li>
                        </ul>
                    </div>
                    <div class="pricing-action">
                        <button id="all01" data-id="all01" class="btn btn-primary purchasebtn"><i id="spinner_all01" class="fa-solid fa-spinner spinner" style="margin-right: 5px" ></i>ซื้อ</button>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="main-form-wrapp">
                    <div class="main-form">
                        <h4 style="text-align: center">สั่งซื้อ รวมทุกวิชา 650 บาท</h4>
                        <!-- Begin MailChimp Signup Form -->
                        <div id="mc_embed_signup">
                        {{-- <form action="{{route('getPrompayPaymentStatus')}}" method="post"> --}}
                            @csrf
                            <div id="mc_embed_signup_scroll">
                                <div class="mc-field-group">
                                    <label for="mce-FNAME">ชื่อ : </label>
                                    <input type="text" name="name" class="required" id="name" required value="ฟ้าใส">
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-EMAIL">นามสกุล : </label>
                                    <input type="text"  name="lastname" class="required email" id="lastname" required value="ทวีจันทร์">
                                </div>
                                <div class="mc-field-group size1of2">
                                    <label for="mce-FPHONE">เบอร์โทรศัพท์ : </label>
                                    <input type="text" name="phone" class="" id="phone" required value="0851245114">
                                </div>
                                <div class="mc-field-group size1of2">
                                    <label for="mce-FPHONE">อีเมล : </label>
                                    <input type="email" name="email" class="" id="email" required value="fahsaitharnchanok@gmail.com">
                                                  
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                               
                                <div class="clear">
                                    
                                    <button id="purchasefile" type="button" class="btn btn-primary btn-parallax-purchase" style="padding: 20px;font-size:22px;font-weight:600" ><i id="spinner" class="fa-solid fa-spinner spinner" style="margin-right: 5px" ></i>สั่งซื้อ</button>
                                    {{-- <button id="purchasefile" type="submit" class="btn btn-primary btn-parallax-purchase" style="padding: 20px;font-size:22px;font-weight:600" ><i id="spinner" class="fa-solid fa-spinner spinner" style="margin-right: 5px" ></i>สั่งซื้อ</button> --}}
                                </div>
                            </div>
                        {{-- </form> --}}
                        </div>
                        
                        <!--End mc_embed_signup-->
                    </div>
                </div>
            </div>
        </div>
       


    </div>
</div>	