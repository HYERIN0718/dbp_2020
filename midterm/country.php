<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 나라별 데이터 분석 </title>

    <script src="../jquery.js.txt" type="text/javascript"></script>

   <script>
       function categoryChange(e) {
       var good_a = ["Aruba", "Anguilla", "Netherlands Antilles", "Antigua and Barbuda", "Bahamas", "Belize", "Bermuda",
       "Barbados", "Canada", "Costa Rica","Cuba", "Cayman Islands", "Dominican Republic ", "Guadeloupe",
       "Grenada", "Greenland","Guatemala", "Honduras", "Haiti", "Jamaica",
       "Saint Kitts and Nevis", "Saint Lucia", "Mexico", "Montserrat", "Martinique", "Nicaragua","Panama",
       "Puerto Rico", "El Salvador", "Saint Pierre and Miquelon", "Turks and Caicos Islands", "Trinidad and Tobago",
       "United States", "Saint Vincent and the Grenadines", "Virgin Islands, British", "Virgin Islands, U.S"];
       
       var good_b = ["Afghanistan", "United Arab Emirates", "Armenia", "Azerbaijan",
       "Bangladesh","Bahrain", "Brunei", "Bhutan", "China", "Cyprus", "Georgia", "Hong Kong",
       "Indonesia", "India", "Iran", "Iraq", "Israel","Jordan", "Japan", "Kazakstan", "Kyrgyzstan", "Cambodia",
       "South Korea", "Kuwait", "Laos", "Lebanon", "Sri Lanka", "Macao", "Maldives", "Myanmar", "Mongolia", "Malaysia", "Nepal", "Oman", "Pakistan", "Philippines",  "North Korea", "Palestine", "Qatar", "Saudi Arabia", "Singapore", "Syria", "Thailand",  "Tajikistan", "Turkmenistan", "East Timor", "Turkey", "Taiwan", "Uzbekistan", "Vietnam", "Yemen"];
       
       var good_c = ["Angola", "Burundi", "Benin", "Burkina Faso", "Botswana", "Central African Republic",
       "Côte d’Ivoire", "Cameroon", "Congo, The Democratic Republic of the Congo", "Comoros", "Cape Verde",
       "Djibouti", "Algeria", "Egypt", "Eritrea", "Western Sahara", "Ethiopia", "Gabon", "Ghana", "Guinea", "Gambia",
       "Guinea-Bissau", "Equatorial Guinea", "British Indian Ocean Territory",
       "Kenya", "Liberia", "Libyan Arab Jamahiriya", "Lesotho", "Morocco", "Madagascar", "Mali", "Mozambique",
        "Mauritania", "Mauritius", "Malawi", "Mayotte", "Namibia", "Niger", "Nigeria", "Réunion", "Rwanda", "Sudan",
        "Senegal", "Saint Helena", "Sierra Leone", "Somalia", "Sao Tome and Principe", "Swaziland", "Seychelles",
        "Chad", "Togo",  "Tunisia", "Tanzania", "Uganda", "South Africa", "Zambia", "Zimbabwe"];
      
      var good_d = ["Albania", "Andorra", "Austria", "Belgium", "Bulgaria", "Bosnia and Herzegovina", "Belarus",
      "Switzerland", "Czech Republic", "Germany", "Denmark", "Spain", "Estonia", "Finland", "France", "Faroe Islands",
      "United Kingdom", "Gibraltar", "Greece", "Croatia", "Hungary", "Ireland", "Iceland", "Italy", "Liechtenstein", "Lithuania",
      "Luxembourg", "Latvia", "Monaco", "Moldova", "Macedonia", "Malta", "Netherlands", "Norway", "Poland", "Portugal",
      "Romania", "Russian Federation", "Svalbard and Jan Mayen", "San Marino", "Slovakia", "Slovenia", "Sweden", "Ukraine",
      "Holy See (Vatican City State)", "Yugoslavia"];
       
       var good_e = ["Argentina", "Bolivia", "Brazil", "Chile", "Colombia", "Ecuador", "Falkland Islands", "French Guiana",
        "Guyana", "Peru", "Paraguay", "Suriname", "Uruguay", "Venezuela"];
       
       var good_f = ["American Samoa", "Australia", "Cocos (Keeling) Islands", "Cook Islands", "Christmas Island", "Fiji Islands",
          "Micronesia, Federated States of Guam", "Kiribati", "Marshall Islands", "Northern Mariana Islands", "New Caledonia",
          "Norfolk Island", "Niue", "Nauru", "New Zealand", "Pitcairn", "Palau", "Papua New Guinea", "French Polynesia",
          "Solomon Islands", "Tokelau", "Tonga", "Tuvalu", "United States Minor Outlying Islands", "Vanuatu", "Wallis and Futuna", "Samoa"];
       
       var good_g = ["Antarctica", "French Southern territories", "Bouvet Island", "Heard Island and McDonald Islands",
            "South Georgia and the South Sandwich Islands"];
       var target = document.getElementById("good");

       if(e.value == "a") var d = good_a;
       else if(e.value == "b") var d = good_b;
       else if(e.value == "c") var d = good_c;
       else if(e.value == "d") var d = good_d;
       else if(e.value == "e") var d = good_e;
       else if(e.value == "f") var d = good_f;
       else if(e.value == "g") var d = good_g;

       target.options.length = 0;

       for (x in d) {
           var opt = document.createElement("option");
           opt.value = d[x];
           opt.innerHTML = d[x];
           target.appendChild(opt);
       }
   }
   </script>


</head>

<body>
    <h1> 나라 정보 검색 </h1>
    <a href="country_select.php">(1) 도시 정보 검색 </a>
    <br>
    <br>
    <form action="city_name.php" method="POST">
        (2) 나라별 도시 검색하기 <br>
        <input type="text" name="CountryCode" placeholder="CountryCode">
        <input type="submit" value="찾기"> <br>
    </form>
    <br>
    <form action="city_population.php" method="POST">
        (3) 도시 인구 검색하기 <br>
        <input type="text" name="Name" placeholder="City">
        <input type="submit" value="찾기"> <br>
    </form>
<br>

<h4>(4) 독립 연도 검색하기</h4>

<form action="capital_name.php" method="POST">
<select onchange="categoryChange(this)">
    <option>대륙을 선택해주세요</option>
    <option value="a">North America</option>
    <option value="b">Asia</option>
    <option value="c">Africa</option>
    <option value="d">Europe</option>
    <option value="e">South America</option>
    <option value="f">Oceania</option>
    <option value="g">Antarctica</option>
</select>

<select name="good" id="good">
<option>나라를 선택해주세요</option>
</select>
<input type="submit" value="검색"> <br>
</form>



</body>

</html>
