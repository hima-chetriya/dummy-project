<html>
<head> 
<title>Demo by kishan Radadiya</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        // Countries
        var country_arr = new Array("Select Country","AUSTRALIA","INDIA","NEW ZEALAND","USA","UAE","MAURITIUS");

        $.each(country_arr, function (i, item) {
            $('#country').append($('<option>', {
                value: i,
                text : item,
            }, '</option>' ));
        });

        // States
        var s_a = new Array();
        s_a[0]="Select State";
        s_a[1]="Select State|QUEENSLAND|VICTORIA";
        s_a[2]="Select State|ANDHRAPRADESH|KARNATAKA|TAMILNADU|DELHI|GOA|W-BENGAL|GUJARAT|MADHYAPRADESH|MAHARASHTRA|RAJASTHAN";
        s_a[3]="Select State|AUCKLAND";
        s_a[4]="Select State|NEWJERSEY|ILLINOIS";
        s_a[5]="Select State|DUBAI";
        s_a[6]="Select State|MAURITIUS";

        // Cities
        var c_a = new Array();
        c_a['QUEENSLAND']="BRISBANE";
        c_a['VICTORIA']="MELBOURNE";
        c_a['ANDHRAPRADESH']="HYDERABAD";
        c_a['KARNATAKA']="BANGLORE";
        c_a['TAMILNADU']="CHENNAI";
        c_a['DELHI']="DELHI";
        c_a['GOA']="GOA";
        c_a['W-BENGAL']="KOLKATA";
        c_a['GUJARAT']="AHMEDABAD1|AHMEDABAD2|AHMEDABAD3|BARODA|BHAVNAGAR|MEHSANA|RAJKOT|SURAT|UNA";
        c_a['MADHYAPRADESH']="INDORE";
        c_a['MAHARASHTRA']="MUMBAI|PUNE";
        c_a['RAJASTHAN']="ABU";
        c_a['AUCKLAND']="AUCKLAND";
        c_a['NEWJERSEY']="EDISON";
        c_a['ILLINOIS']="CHICAGO";
        c_a['MAURITIUS']="MAURITIUS";
        c_a['DUBAI']="DUBAI";


        $('#country').change(function(){
            var c = $(this).val();
            var state_arr = s_a[c].split("|");
            $('#state').empty();
            $('#city').empty();
            if(c==0){
                $('#state').append($('<option>', {
                    value: '0',
                    text: 'Select State',
                }, '</option>'));
            }else {
                $.each(state_arr, function (i, item_state) {
                    $('#state').append($('<option>', {
                        value: item_state,
                        text: item_state,
                    }, '</option>'));
                });
            }
            $('#city').append($('<option>', {
                value: '0',
                text: 'Select City',
            }, '</option>'));
        });

        $('#state').change(function(){
            var s = $(this).val();
            if(s=='Select State'){
                $('#city').empty();
                $('#city').append($('<option>', {
                    value: '0',
                    text: 'Select City',
                }, '</option>'));
            }
            var city_arr = c_a[s].split("|");
            $('#city').empty();

            $.each(city_arr, function (j, item_city) {
                $('#city').append($('<option>', {
                    value: item_city,
                    text: item_city,
                }, '</option>'));
            });


        });
    });
</script>
</head>
<body>
<select name="country" id="country"></select> <br>
<select name="state" id="state"></select> <br>
<select name="city" id="city"></select>
</body>
</html>