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
		$(document).on('click', '.purchasebtn', function(e) {


			makeCharge($(this).data('id')).then(data => {
                console.log(data)
                        $('#qrcode').attr("src", data);
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
                                removalDelay: 50,
                                mainClass: 'my-mfp-zoom-in',
                                callbacks: {
                                    elementParse: function(item) {
                                        // $("#spinner").hide();
                                        // $('#btnGetCharge').prop('disabled', false);
                                        // console.log(item);
                                    }
                                }
                            });
                        })
                    })  
		});
		function makeCharge(productcode){
                return new Promise((resolve, reject) => {
                    $.ajax({
                    url: `${route.url}/getCharge`,
                    type: 'POST',
                    headers: {"X-CSRF-TOKEN":route.token},
                    data: {
                        'productcode': productcode
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
	</script>
@endpush

@endsection

