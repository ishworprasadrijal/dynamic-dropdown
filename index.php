
<!doctype html>
<html class="home">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="dynamic dropdown">
	<title>Dynamic Dropdown Population</title>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

	<body>
		<div class="jumbotron">

			<div class="container">
				<h1>Dynamic Dropdown Population</h1>
				<em>Select country first. Only Nepal has provinces and districts data for now. You can add other data as per your need. This is only an example. After selecting "Nepal" Province will be populated. Type and search any province and select a province. Selecting a Province will dynamically populate districts of the corresponding province.</em>
				<div class="col-md-4"><h4>Country</h4></div>
				<div class="col-md-4"><h4>Province</h4></div>
				<div class="col-md-4"><h4>District</h4></div>

				<div class="col-md-4">
					<div class="select2-wrapper country">
						<select class="form-control countries_js">
							<option>Select Country </option>
							<option disabled value="AF">Afghanistan</option>
							<option disabled value="AX">Åland Islands</option>
							<option disabled value="AL">Albania</option>
							<option disabled value="DZ">Algeria</option>
							<option disabled value="AS">American Samoa</option>
							<option disabled value="AD">Andorra</option>
							<option disabled value="AO">Angola</option>
							<option disabled value="AI">Anguilla</option>
							<option disabled value="AQ">Antarctica</option>
							<option disabled value="AG">Antigua and Barbuda</option>
							<option disabled value="AR">Argentina</option>
							<option disabled value="AM">Armenia</option>
							<option disabled value="AW">Aruba</option>
							<option disabled value="AU">Australia</option>
							<option disabled value="AT">Austria</option>
							<option disabled value="AZ">Azerbaijan</option>
							<option disabled value="BS">Bahamas</option>
							<option disabled value="BH">Bahrain</option>
							<option disabled value="BD">Bangladesh</option>
							<option disabled value="BB">Barbados</option>
							<option disabled value="BY">Belarus</option>
							<option disabled value="BE">Belgium</option>
							<option disabled value="BZ">Belize</option>
							<option disabled value="BJ">Benin</option>
							<option disabled value="BM">Bermuda</option>
							<option disabled value="BT">Bhutan</option>
							<option disabled value="BO">Bolivia, Plurinational State of</option>
							<option disabled value="BQ">Bonaire, Sint Eustatius and Saba</option>
							<option disabled value="BA">Bosnia and Herzegovina</option>
							<option disabled value="BW">Botswana</option>
							<option disabled value="BV">Bouvet Island</option>
							<option disabled value="BR">Brazil</option>
							<option disabled value="IO">British Indian Ocean Territory</option>
							<option disabled value="BN">Brunei Darussalam</option>
							<option disabled value="BG">Bulgaria</option>
							<option disabled value="BF">Burkina Faso</option>
							<option disabled value="BI">Burundi</option>
							<option disabled value="KH">Cambodia</option>
							<option disabled value="CM">Cameroon</option>
							<option disabled value="CA">Canada</option>
							<option disabled value="CV">Cape Verde</option>
							<option disabled value="KY">Cayman Islands</option>
							<option disabled value="CF">Central African Republic</option>
							<option disabled value="TD">Chad</option>
							<option disabled value="CL">Chile</option>
							<option disabled value="CN">China</option>
							<option disabled value="CX">Christmas Island</option>
							<option disabled value="CC">Cocos (Keeling) Islands</option>
							<option disabled value="CO">Colombia</option>
							<option disabled value="KM">Comoros</option>
							<option disabled value="CG">Congo</option>
							<option disabled value="CD">Congo, the Democratic Republic of the</option>
							<option disabled value="CK">Cook Islands</option>
							<option disabled value="CR">Costa Rica</option>
							<option disabled value="CI">Côte d'Ivoire</option>
							<option disabled value="HR">Croatia</option>
							<option disabled value="CU">Cuba</option>
							<option disabled value="CW">Curaçao</option>
							<option disabled value="CY">Cyprus</option>
							<option disabled value="CZ">Czech Republic</option>
							<option disabled value="DK">Denmark</option>
							<option disabled value="DJ">Djibouti</option>
							<option disabled value="DM">Dominica</option>
							<option disabled value="DO">Dominican Republic</option>
							<option disabled value="EC">Ecuador</option>
							<option disabled value="EG">Egypt</option>
							<option disabled value="SV">El Salvador</option>
							<option disabled value="GQ">Equatorial Guinea</option>
							<option disabled value="ER">Eritrea</option>
							<option disabled value="EE">Estonia</option>
							<option disabled value="ET">Ethiopia</option>
							<option disabled value="FK">Falkland Islands (Malvinas)</option>
							<option disabled value="FO">Faroe Islands</option>
							<option disabled value="FJ">Fiji</option>
							<option disabled value="FI">Finland</option>
							<option disabled value="FR">France</option>
							<option disabled value="GF">French Guiana</option>
							<option disabled value="PF">French Polynesia</option>
							<option disabled value="TF">French Southern Territories</option>
							<option disabled value="GA">Gabon</option>
							<option disabled value="GM">Gambia</option>
							<option disabled value="GE">Georgia</option>
							<option disabled value="DE">Germany</option>
							<option disabled value="GH">Ghana</option>
							<option disabled value="GI">Gibraltar</option>
							<option disabled value="GR">Greece</option>
							<option disabled value="GL">Greenland</option>
							<option disabled value="GD">Grenada</option>
							<option disabled value="GP">Guadeloupe</option>
							<option disabled value="GU">Guam</option>
							<option disabled value="GT">Guatemala</option>
							<option disabled value="GG">Guernsey</option>
							<option disabled value="GN">Guinea</option>
							<option disabled value="GW">Guinea-Bissau</option>
							<option disabled value="GY">Guyana</option>
							<option disabled value="HT">Haiti</option>
							<option disabled value="HM">Heard Island and McDonald Islands</option>
							<option disabled value="VA">Holy See (Vatican City State)</option>
							<option disabled value="HN">Honduras</option>
							<option disabled value="HK">Hong Kong</option>
							<option disabled value="HU">Hungary</option>
							<option disabled value="IS">Iceland</option>
							<option disabled value="IN">India</option>
							<option disabled value="ID">Indonesia</option>
							<option disabled value="IR">Iran, Islamic Republic of</option>
							<option disabled value="IQ">Iraq</option>
							<option disabled value="IE">Ireland</option>
							<option disabled value="IM">Isle of Man</option>
							<option disabled value="IL">Israel</option>
							<option disabled value="IT">Italy</option>
							<option disabled value="JM">Jamaica</option>
							<option disabled value="JP">Japan</option>
							<option disabled value="JE">Jersey</option>
							<option disabled value="JO">Jordan</option>
							<option disabled value="KZ">Kazakhstan</option>
							<option disabled value="KE">Kenya</option>
							<option disabled value="KI">Kiribati</option>
							<option disabled value="KP">Korea, Democratic People's Republic of</option>
							<option disabled value="KR">Korea, Republic of</option>
							<option disabled value="KW">Kuwait</option>
							<option disabled value="KG">Kyrgyzstan</option>
							<option disabled value="LA">Lao People's Democratic Republic</option>
							<option disabled value="LV">Latvia</option>
							<option disabled value="LB">Lebanon</option>
							<option disabled value="LS">Lesotho</option>
							<option disabled value="LR">Liberia</option>
							<option disabled value="LY">Libya</option>
							<option disabled value="LI">Liechtenstein</option>
							<option disabled value="LT">Lithuania</option>
							<option disabled value="LU">Luxembourg</option>
							<option disabled value="MO">Macao</option>
							<option disabled value="MK">Macedonia, the former Yugoslav Republic of</option>
							<option disabled value="MG">Madagascar</option>
							<option disabled value="MW">Malawi</option>
							<option disabled value="MY">Malaysia</option>
							<option disabled value="MV">Maldives</option>
							<option disabled value="ML">Mali</option>
							<option disabled value="MT">Malta</option>
							<option disabled value="MH">Marshall Islands</option>
							<option disabled value="MQ">Martinique</option>
							<option disabled value="MR">Mauritania</option>
							<option disabled value="MU">Mauritius</option>
							<option disabled value="YT">Mayotte</option>
							<option disabled value="MX">Mexico</option>
							<option disabled value="FM">Micronesia, Federated States of</option>
							<option disabled value="MD">Moldova, Republic of</option>
							<option disabled value="MC">Monaco</option>
							<option disabled value="MN">Mongolia</option>
							<option disabled value="ME">Montenegro</option>
							<option disabled value="MS">Montserrat</option>
							<option disabled value="MA">Morocco</option>
							<option disabled value="MZ">Mozambique</option>
							<option disabled value="MM">Myanmar</option>
							<option disabled value="NA">Namibia</option>
							<option disabled value="NR">Nauru</option>
							<option value="NP">Nepal</option>
							<option disabled value="NL">Netherlands</option>
							<option disabled value="NC">New Caledonia</option>
							<option disabled value="NZ">New Zealand</option>
							<option disabled value="NI">Nicaragua</option>
							<option disabled value="NE">Niger</option>
							<option disabled value="NG">Nigeria</option>
							<option disabled value="NU">Niue</option>
							<option disabled value="NF">Norfolk Island</option>
							<option disabled value="MP">Northern Mariana Islands</option>
							<option disabled value="NO">Norway</option>
							<option disabled value="OM">Oman</option>
							<option disabled value="PK">Pakistan</option>
							<option disabled value="PW">Palau</option>
							<option disabled value="PS">Palestinian Territory, Occupied</option>
							<option disabled value="PA">Panama</option>
							<option disabled value="PG">Papua New Guinea</option>
							<option disabled value="PY">Paraguay</option>
							<option disabled value="PE">Peru</option>
							<option disabled value="PH">Philippines</option>
							<option disabled value="PN">Pitcairn</option>
							<option disabled value="PL">Poland</option>
							<option disabled value="PT">Portugal</option>
							<option disabled value="PR">Puerto Rico</option>
							<option disabled value="QA">Qatar</option>
							<option disabled value="RE">Réunion</option>
							<option disabled value="RO">Romania</option>
							<option disabled value="RU">Russian Federation</option>
							<option disabled value="RW">Rwanda</option>
							<option disabled value="BL">Saint Barthélemy</option>
							<option disabled value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
							<option disabled value="KN">Saint Kitts and Nevis</option>
							<option disabled value="LC">Saint Lucia</option>
							<option disabled value="MF">Saint Martin (French part)</option>
							<option disabled value="PM">Saint Pierre and Miquelon</option>
							<option disabled value="VC">Saint Vincent and the Grenadines</option>
							<option disabled value="WS">Samoa</option>
							<option disabled value="SM">San Marino</option>
							<option disabled value="ST">Sao Tome and Principe</option>
							<option disabled value="SA">Saudi Arabia</option>
							<option disabled value="SN">Senegal</option>
							<option disabled value="RS">Serbia</option>
							<option disabled value="SC">Seychelles</option>
							<option disabled value="SL">Sierra Leone</option>
							<option disabled value="SG">Singapore</option>
							<option disabled value="SX">Sint Maarten (Dutch part)</option>
							<option disabled value="SK">Slovakia</option>
							<option disabled value="SI">Slovenia</option>
							<option disabled value="SB">Solomon Islands</option>
							<option disabled value="SO">Somalia</option>
							<option disabled value="ZA">South Africa</option>
							<option disabled value="GS">South Georgia and the South Sandwich Islands</option>
							<option disabled value="SS">South Sudan</option>
							<option disabled value="ES">Spain</option>
							<option disabled value="LK">Sri Lanka</option>
							<option disabled value="SD">Sudan</option>
							<option disabled value="SR">Suriname</option>
							<option disabled value="SJ">Svalbard and Jan Mayen</option>
							<option disabled value="SZ">Swaziland</option>
							<option disabled value="SE">Sweden</option>
							<option disabled value="CH">Switzerland</option>
							<option disabled value="SY">Syrian Arab Republic</option>
							<option disabled value="TW">Taiwan, Province of China</option>
							<option disabled value="TJ">Tajikistan</option>
							<option disabled value="TZ">Tanzania, United Republic of</option>
							<option disabled value="TH">Thailand</option>
							<option disabled value="TL">Timor-Leste</option>
							<option disabled value="TG">Togo</option>
							<option disabled value="TK">Tokelau</option>
							<option disabled value="TO">Tonga</option>
							<option disabled value="TT">Trinidad and Tobago</option>
							<option disabled value="TN">Tunisia</option>
							<option disabled value="TR">Turkey</option>
							<option disabled value="TM">Turkmenistan</option>
							<option disabled value="TC">Turks and Caicos Islands</option>
							<option disabled value="TV">Tuvalu</option>
							<option disabled value="UG">Uganda</option>
							<option disabled value="UA">Ukraine</option>
							<option disabled value="AE">United Arab Emirates</option>
							<option disabled value="GB">United Kingdom</option>
							<option disabled value="US">United States</option>
							<option disabled value="UM">United States Minor Outlying Islands</option>
							<option disabled value="UY">Uruguay</option>
							<option disabled value="UZ">Uzbekistan</option>
							<option disabled value="VU">Vanuatu</option>
							<option disabled value="VE">Venezuela, Bolivarian Republic of</option>
							<option disabled value="VN">Viet Nam</option>
							<option disabled value="VG">Virgin Islands, British</option>
							<option disabled value="VI">Virgin Islands, U.S.</option>
							<option disabled value="WF">Wallis and Futuna</option>
							<option disabled value="EH">Western Sahara</option>
							<option disabled value="YE">Yemen</option>
							<option disabled value="ZM">Zambia</option>
							<option disabled value="ZW">Zimbabwe</option>
						</select>
					</div>
				</div>

				<div class="col-md-4 select2-wrapper province">
					<select class="form-control provinces_js"><option>Choose Country First</option></select>
				</div>

				<div class="col-md-4 select2-wrapper district">
					<select class="form-control districts_js"><option>Choose Province First</option></select>
				</div>
			</div>
			<hr/>
			<center>
			<em>Please do a favour to click on star above if you think that I did something helpful to you.</em><br/>
			<b> For more help, <a href="mailto:ishworsws@gmail.com"> Mail </a> , contact or hire <a href="https://github.com/ishworprasadrijal">Ishwor Prasad Rijal </a>. Thanks!</b>
		</center>
		</div>
	</div>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>

<script>
	$( ".countries_js" ).select2( {
		theme: "bootstrap",
		placeholder: "Select a Country",
		maximumSelectionSize: 6,
		containerCssClass: ':all:'
	});

	$(document).on('change','.countries_js',function(e){
		var country = $(this).val();
		reset_previous_elements();
		if(country=='NP'){
			provinces = document.createElement("select");
			$.ajax({
				url:'functions.php?q=provinces',
				type:'get',
				dataType:'json',
				success:function(response){
					response.forEach(function (value, i) {
					    var op = new Option();
						op.value = i+1;
						op.text = value;
						provinces.options.add(op);
					});
					$(provinces).addClass('form-control provinces_js');
					$('.province').html(provinces);

					/* also make province dropdown select2 */
					$(document).find(".provinces_js").select2( {
						theme: "bootstrap",
						placeholder: "Select a Province",
						maximumSelectionSize: 6,
						containerCssClass: ':all:'
					});
				}
			})
		}
	})

	function reset_previous_elements(){
		$(document).find('.province').html('<select class="form-control provinces_js"><option>Choose Country First</option></select>');
		$(document).find('.district').html('<select class="form-control districts_js"><option>Choose Province First</option></select>');
	}



	/* on changing province */
	$(document).on('change','.provinces_js',function(e){
		var district = $(this).val();
		districts = document.createElement("select");
		$.ajax({
			url:'functions.php?q=district'+district,
			type:'get',
			dataType:'json',
			success:function(response){
				response.forEach(function (value, i) {
				    var op = new Option();
					op.value = i;
					op.text = value;
					districts.options.add(op);
				});
				$(districts).addClass('form-control districts_js');
				$('.district').html(districts);

				/* also make district dropdown select2 */
				$(document).find(".districts_js").select2( {
					theme: "bootstrap",
					placeholder: "Select a District",
					maximumSelectionSize: 6,
					containerCssClass: ':all:'
				});
			}
		})
	})







</script>

	</body>
</html>
