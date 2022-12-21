@extends('layouts.salepage',[$title = $salepageurl->name])
@section('content')

	@foreach ($salepagesections as $salepagesection)
		@include($salepagesection->section,['sellpagesection' => $salepagesection])
	@endforeach

	<div id="small-dialog" class="mfp-hide" style="text-align: center">
		<img id="qrcode" style="max-width: 350px" src="https://api.omise.co/charges/chrg_test_5u6jjppxg2texlmn839/documents/docu_test_5u6jjpssf6vkf4j2irq/downloads/C63C997979865CC3" alt="">
	</div>

@push('js')
	<script>
         var checkPayment ;
        $("#spinner").hide();
		$('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,
                
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
        });
		$(document).on('click', '#purchasefile', function(e) {
            if (validateInput() == false){
                Swal.fire(
                    {
                        title: 'ผิดพลาด',
                        text: "กรุณากรอกข้อมูลให้ครบถ้วน!",
                        icon: 'warning',
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: '#47b2e4',
                    }
                )
                return;
            }
            $("#spinner").show();
			makeCharge($('#name').val(),$('#lastname').val(),$('#phone').val(),$('#email').val()).then(data => {
                $("#spinner").hide();
                console.log(data)
                        $('#qrcode').attr("src", data['image']);
                            $("#qrcode").on("load", function() {
                                $.magnificPopup.open({
                                items: {
                                    src: '#small-dialog',
                                },
                                type: 'inline',        
                                fixedContentPos: false,
                                fixedBgPos: true,

                                overflowY: 'auto',

                                closeBtnInside: true,
                                preloader: false,
                                
                                midClick: true,
                                removalDelay: 300,
                                mainClass: 'my-mfp-zoom-in',
                                callbacks: {
                                    elementParse: function(item) {
                                        checkPayment = setInterval(checkPrompayPaymentStatus, 3000,data['source_id'],data['charge_id']);
                                        // $("#spinner").hide();
                                        // $('#btnGetCharge').prop('disabled', false);
                                        // console.log(item);
                                    },
                                    close: function testt(){
                                        console.log('closed')
                                        clearInterval(checkPayment)
                                    }
                                }
                            });
                        })
                    })  
		});


        function checkPrompayPaymentStatus(source,charge) {
                // console.log(source + ' ' + charge)
                var formData = new FormData();
                formData.append('source',source);
                formData.append('charge',charge);
                    $.ajax({
                        url: `${route.url}/getPrompayPaymentStatus`,
                        type: 'POST',
                        headers: {"X-CSRF-TOKEN":route.token},
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(data){
                            // console.log(data)
                            if (data['status'] == 1){
                                clearInterval(checkPayment);
                                window.location.replace(data['uri']);
                            }
                    }
                });
            }


		function makeCharge(name,lastname,phone,email){
                return new Promise((resolve, reject) => {
                    $.ajax({
                    url: `${route.url}/getCharge`,
                    type: 'POST',
                    headers: {"X-CSRF-TOKEN":route.token},
                    data: {
                        'name': name,
                        'lastname': lastname,
                        'phone': phone,
                        'email': email
                    },
                    success: function(data) {
                        resolve(data)
                    },
                    error: function(error) {
                        reject(error)
                    },
                    })
                })
            }

        function validateInput(){
            if($('#name').val() !== '' && $('#lastname').val() !== '' && $('#email').val() !== '' && $('#phone').val() !== '' ){
                return true
            }else{
                return false
            }
        }
	</script>
@endpush

@endsection

