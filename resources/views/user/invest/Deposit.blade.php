
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <base href="{{ asset('') }}">

    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet"type="text/css" href="css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />

    <title>@lang('Make Deposit')</title>
</head>
<style>
        .select-wrapper {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        .select-wrapper select {
            width: 100%;
            padding: 8px;
            appearance: none;
            background: none;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .select-wrapper::after {
            content: '▼';
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            pointer-events: none;
        }
        .custom-option {
            display: flex;
            align-items: center;
            padding: 8px;
        }
        .custom-option img {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }

/* Container for the input field and image */
.input-container {
    position: relative;
    width: 100%;
}

/* Image styles */
.avatar {
    position: absolute;
    left: 10px; /* Adjust as needed */
    top: 50%; /* Vertically center the image */
    transform: translateY(-50%); /* Center image vertically */
    width: 40px; /* Adjust as needed */
    height: 40px; /* Adjust as needed */
}

/* Input field styles */
.form-control {
    padding-left: 40px; /* Ensure text does not overlap the image */
    width: 100%;
}


    </style>




<body>
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="logo-img">
        <img src="images/logo/Nestnftdark.png" alt="logo" style="width:100px;height:auto">       
        </div>
        <div class="spinner-circle lg success">
            <span class="spinner-circle1 spinner-child"></span>
            <span class="spinner-circle2 spinner-child"></span>
            <span class="spinner-circle3 spinner-child"></span>
            <span class="spinner-circle4 spinner-child"></span>
            <span class="spinner-circle5 spinner-child"></span>
            <span class="spinner-circle6 spinner-child"></span>
            <span class="spinner-circle7 spinner-child"></span>
            <span class="spinner-circle8 spinner-child"></span>
            <span class="spinner-circle9 spinner-child"></span>
        </div>
    </div>
    <!-- /preload -->
    <div class="header fixed-top line-bt">
        <div class="left">
          <a href="javascript:void(0);" class="icon back-btn"><i class="icon-arrow-right"></i></a>
        </div>
        <h4>Deposit</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Deposit </h4>
                </div>
                <div class="card-body">
                <form method="post" name="add" action="{{ route('user.confirmDeposit') }}">
                {{ csrf_field() }}
                <fieldset class="mt-20 input-fill">
    <label>@lang('Enter Amount')</label>
    <div class="input-container">
        <div class="avatar">
            <img src="images/222.png" alt="">
        </div>
        <input type="text" placeholder="Enter your amount" name="Sum" class="form-control" style=" padding-left: 59px;">
    </div>
</fieldset>

                        <fieldset class="mt-20 input-fill">
                            <label>@lang('Select Payment Mode')</label>
                            
                            <select id="cars" class="form-control" type="text" name="PSys">
                        <option value="USDT.BEP20">USDT BEP20</option>
                        
                        <option value="USDT.TRC20">USDT TRC20</option>
                    </select>
                        </fieldset>
                      
                      
                        <button class="mt-20 tf-btn primary">Deposit</button>
                    </form>



                </div>
            </div>
               
        </div>
    </div>
    @include('partials.notify')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script>
	$(function(){
		$('input[name="Sum"]').on('change keyup',function () {
			let str = $(this).val();
			str = str.replace(',','.');
			$(this).val(str);
           let min =  $('#minimum_deposit').val();
           let max =  $('#maximum_deposit').val();
			let amount = parseFloat(str);
            if (amount>=min && amount<=max) 
            {
                $(".submit-btn").prop("disabled", false);
                $('.cashback-info-label').html('');
            }
            else
            {

            $(".submit-btn").prop("disabled", true);
            $('.cashback-info-label').html("minimum deposit is "+min+" USDT and maximum is "+max+" USDT !").css('color', 'red');

            }
		
			//console.log(summ_usd);
		});
		$('input[name="PSys"]').change(function () {
			let icon = $(this).data('icon');
			$('.amount-icon').attr('src','/assets/img/'+icon+'.svg');
		});
		$('.PSys').change(function () {
			let dep_curr_rate = parseFloat($(this).data('rate'));
			let curr = $(this).data('curr');
			let c_min = $(this).data('min');
			$('#dep_curr').text(curr);
			$('input[name="Sum"]').val('');

			let dep_min = 0;
			if(c_min>0){
				dep_min = parseFloat(c_min);
			}else{
				dep_min = parseFloat($('input[name="Plan"]:checked').data('min'));
			}

			let dep_max = parseFloat($('input[name="Plan"]:checked').data('max'));
			let dep_sum_min = parseFloat((dep_min/dep_curr_rate).toFixed(6));
			let dep_sum_max = parseFloat((dep_max/dep_curr_rate).toFixed(6));
			let dep_amount_min = parseFloat((dep_sum_min*dep_curr_rate));
			let dep_amount_max = parseFloat((dep_sum_max*dep_curr_rate));

			while (dep_amount_min < dep_min){
				dep_sum_min=dep_sum_min+0.000001;
				dep_amount_min = dep_sum_min*dep_curr_rate;
			}
			while (dep_amount_max > dep_max){
				dep_sum_max=dep_sum_max-0.000001;
				dep_amount_max = dep_sum_max*dep_curr_rate;
			}
			$('#dep_min').text(dep_sum_min.toFixed(6));
			$('#dep_max').text(dep_sum_max.toFixed(6));
            $('#minimum_deposit').val(dep_sum_min.toFixed(0));
			$('#maximum_deposit').val(dep_sum_max.toFixed(0));
			$('input[name="Sum"]:not(.ex_sum)').val(dep_sum_min.toFixed(6));
			$('#eq').text((dep_sum_min*dep_curr_rate).toFixed(2));
		});
		$('input[name="Plan"]').change(function () {
			let c_min = $('input[name="PSys"]:checked').data('min');
			let d_min = parseFloat($(this).data('min'));;
			let dep_min = 0;
			if(c_min>0 && c_min>=d_min){
				dep_min = parseFloat(c_min);
			}else{
				dep_min = d_min;
			}
            // alert(dep_min);
			let dep_max = parseFloat($(this).data('max'));
			let dep_curr_rate = parseFloat($('input[name="PSys"]:checked').data('rate'));
			let dep_sum_min = parseFloat((dep_min/dep_curr_rate).toFixed(6));
			let dep_sum_max = parseFloat((dep_max/dep_curr_rate).toFixed(6));
			let dep_amount_min = parseFloat((dep_sum_min*dep_curr_rate));
			let dep_amount_max = parseFloat((dep_sum_max*dep_curr_rate));

			$('#dep_min').text(dep_min.toFixed(2));
			$('#dep_max').text(dep_max.toFixed(2));
			$('#minimum_deposit').val(dep_min.toFixed(0));
			$('#maximum_deposit').val(dep_max.toFixed(0));
			$('#eq').text((dep_sum_min*dep_curr_rate).toFixed(2));
			$('input[name="Sum"]').val(dep_min.toFixed(2));
		});
		$('#dep_min,#dep_max').click(function () {
			let amount = $(this).text();
			$('input[name="Sum"]').val(amount).change();
		});
		$('.ex_sum').on('change keyup',function () {
			let rate = $('input.PSys:checked').data('rate');
			let amount = parseFloat($(this).val());
			let usd_amount = amount * rate;
			let hnb_rate = 0.9479;
			let htb_amount = (usd_amount/hnb_rate).toFixed(6);
			if(!isNaN(htb_amount)){
				$('#actual_hnbt').text(htb_amount);
			}else{
				$('#actual_hnbt').text('0.000000');
			}

		});
	})
</script>

<div class='d-none'>
</div>

<script>

$(document).ready(function() {

 	$('input[name="Sum"]').on('change keydown keypress', function() {
		setTimeout(function() {
			refreshBonus();
		}, 100);
	});

	$('input[name="Plan"]').on('change', function() {
		setTimeout(function() {
			refreshBonus(1);
		}, 100);
 	});

 	$('input[name="PSys"]').on('change', function() {
		setTimeout(function() {
			refreshBonus();
		}, 100);
 	});

	function timerEnded(bn) {
		$('#pbonus' + bn).hide();
	}
	btext = null;
	bval = [];
	plans = [{"id":"137","group":"0","name":"0.1% daily for 68 working days","min":"15.0000000000","max":"1000000.0000000000","days":"68","perc":"0.10","return":"100.00","period":"24"},{"id":"138","group":"0","name":"330% after 68 working days","min":"15.0000000000","max":"100000.0000000000","days":"96","perc":"230.00","return":"100.00","period":"2300"},{"id":"6","group":"1","name":"3.2% daily for 11 working days (Classic staking)","min":"15.0000000000","max":"3500.0000000000","days":"11","perc":"3.20","return":"100.00","period":"24"},{"id":"7","group":"1","name":"210% after 11 working days (Classic staking)","min":"350.0000000000","max":"35000.0100000000","days":"16","perc":"110.00","return":"100.00","period":"375"},{"id":"8","group":"1","name":"14% daily for 11 working days (Classic staking)","min":"400.0000000000","max":"75000.0100000000","days":"11","perc":"14.00","return":"0.00","period":"24"},{"id":"9","group":"2","name":"4.3% daily for 19 working days (Premium staking)","min":"1900.0000000000","max":"58000.0100000000","days":"19","perc":"4.30","return":"100.00","period":"24"},{"id":"10","group":"2","name":"330% after 19 working days (Premium staking)","min":"1800.0000000000","max":"68000.0100000000","days":"29","perc":"230.00","return":"100.00","period":"700"},{"id":"11","group":"2","name":"18% daily for 19 working days (Premium staking)","min":"2100.0000000000","max":"78000.0100000000","days":"19","perc":"18.00","return":"0.00","period":"24"},{"id":"12","group":"3","name":"5.5% daily for 25 working days (Deluxe staking)","min":"3700.0000000000","max":"89000.0100000000","days":"25","perc":"5.30","return":"100.00","period":"24"},{"id":"13","group":"3","name":"550% after 25 working days   (Deluxe staking)","min":"3500.0000000000","max":"99000.0100000000","days":"38","perc":"450.00","return":"100.00","period":"900"},{"id":"14","group":"3","name":"22% daily for 25 working days (Deluxe staking)","min":"4500.0000000000","max":"109000.0100000000","days":"25","perc":"22.00","return":"0.00","period":"24"},{"id":"15","group":"4","name":"1700% after 35 working days (Long Investment staking)","min":"10.0000000000","max":"100000.0100000000","days":"50","perc":"1600.00","return":"100.00","period":"1200"},{"id":"16","group":"4","name":"2400% after 40 working days (Long Investment staking)","min":"15.0000000000","max":"100000.0100000000","days":"58","perc":"2300.00","return":"100.00","period":"1400"},{"id":"17","group":"4","name":"6500% after 45 working days (Long Investment staking)","min":"20.0000000000","max":"100000.0100000000","days":"67","perc":"6400.00","return":"100.00","period":"1600"}];
	var vplans = {};

	for (bn in bval) {
		for (i in plans) {
			var planId = plans[i].id;
			if (!vplans[planId]) {
				vplans[planId] = {};
			}
			if (bn == 1) {
				vplans[planId].bonus = bval[bn];
			}
			if (bn == 2 && planId == 12) {
        vplans[planId].bonus = bval[bn];
      }
			if (bn == 3) {
				vplans[planId].cashback = bval[bn];
			}
			if (bn == 4 && planId == 12) {
				vplans[planId].cashback = bval[bn];
			}
			if (bn == 5 && planId == 14) {
				vplans[planId].cashback = bval[bn];
			}
		}
	}

	//Show all label
	for (var plan in vplans) {
		if (vplans[plan].bonus) {
			$('#plan-' + plan).next().prepend('<div class="epc-bonus">Bonus: +'+ vplans[plan].bonus[0] +'% <span class="timer" data-time="'+ vplans[plan].bonus[1] +'">'+ vplans[plan].bonus[1] +'</span></div>');
			timer($('#plan-' + plan).next().find('.timer'));
		}
	}
	
	function refreshBonus( refresh = 0 ) {
		sum = parseFloat($('input[name="Sum"]').val());
		plan = parseInt($('input[name="Plan"]:checked').val());
		curr = $('input[name="PSys"]:checked').data('curr');
		$('.bonus-info-label').html('');
		if (!vplans[plan].cashback) {
			$('.cashback-info-label').html('');
		}
		if (vplans[plan].bonus) {
			bonus = number_format(sum + sum * vplans[plan].bonus[0] / 100, 8, '.', '');
			$('.bonus-info-label').html('You will get <b>' + bonus + ' <span>' + curr + '</span></b> deposit');
		}
		if (vplans[plan].cashback) {
			cashback = number_format(sum * vplans[plan].cashback[0] / 100, 8, '.', '');
			if (!$('.cashback-info-label').html()) {
				$('.cashback-info-label').html('<div><p>After deposit you will get <b class="cashback-label-percent">'+vplans[plan].cashback[0]+'%</b> (<abbr class="cashback-label-amount">' + cashback + ' ' + curr + '</abbr>)<br/> cashback on your account balance.</p> Expires in: <span> [<i class="cahsback-timer" data-time="'+vplans[plan].cashback[1]+'"></i>]</span></div>');
				timer($('.cahsback-timer'));
			}
			else {
				$('.cashback-label-percent').text(vplans[plan].cashback[0]+'%');
				$('.cashback-label-amount').text( cashback + ' ' + curr );
				if (refresh) {
					$('.cahsback-timer').data('time',vplans[plan].cashback[1] );
					timer($('.cahsback-timer'),1);
				}
			}
		}
	}

	function number_format(number, decimals, decPoint, thousandsSep) {

		number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
		var n = !isFinite(+number) ? 0 : +number
		var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
		var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
		var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
		var s = ''

		var toFixedFix = function (n, prec) {
			if (('' + n).indexOf('e') === -1) {
				return +(Math.round(n + 'e+' + prec) + 'e-' + prec)
			} else {
				var arr = ('' + n).split('e')
				var sig = ''
				if (+arr[1] + prec > 0) {
					sig = '+'
				}
				return (+(Math.round(+arr[0] + 'e' + sig + (+arr[1] + prec)) + 'e-' + prec)).toFixed(prec)
			}
		}

		s = (prec ? toFixedFix(n, prec).toString() : '' + Math.round(n)).split('.')
		if (s[0].length > 3) {
			s[0] = s[0].replace(/\B(?=(?:\d3)+(?!\d))/g, sep)
		}
		if ((s[1] || '').length < prec) {
			s[1] = s[1] || ''
			s[1] += new Array(prec - s[1].length + 1).join('0')
		}

		return s.join(dec)
	}

	setTimeout(function() {
		refreshBonus();
	}, 100);

});


let intervalId; // объявляем переменную для хранения возвращаемого значения setInterval

function timer(el, refresh = 0) {
    let timerElem = el;
    let timeLeft = parseInt(timerElem.data('time'), 10);
		if (refresh) {
			if (intervalId) {
					clearInterval(intervalId); // останавливаем предыдущий таймер, если он существует
			}
		}

    intervalId = setInterval(function() { // сохраняем возвращаемое значение setInterval
        if (timeLeft <= 0) {
            timerElem.text("00:00:00");
            clearInterval(intervalId); // останавливаем таймер, если время истекло
            return;
        }

        timerElem.text(formatTime(timeLeft));
        timeLeft--;
    }, 1000);
}

function formatTime(seconds) {
	let days = Math.floor(seconds / (3600 * 24));
	seconds -= days * 3600 * 24;
	let hours = Math.floor(seconds / 3600);
	seconds -= hours * 3600;
	let minutes = Math.floor(seconds / 60);
	seconds -= minutes * 60;
	hours = hours.toString().padStart(2, '0');
	minutes = minutes.toString().padStart(2, '0');
	seconds = seconds.toString().padStart(2, '0');
	return days + 'd ' + hours + 'h '+ minutes + 'm ' + seconds + 's';
}
</script>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    
    
</body>
</html>