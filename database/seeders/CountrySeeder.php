<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $country = Country::exists();
        if($country) return;

        $countries = [
            [
            "name" => "Ethiopia",
            "code" => 251
            ],
            [
            "name" => "Albania",
            "code" => 355
            ],
            [
            "name" => "Algeria",
            "code" => 213
            ],
            [
            "name" => "American Samoa",
            "code" => 1684
            ],
            [
            "name" => "Andorra",
            "code" => 376
            ],
            [
            "name" => "Angola",
            "code" => 244
            ],
            [
            "name" => "Anguilla",
            "code" => 1264
            ],
            [
            "name" => "Antarctica",
            "code" => 0
            ],
            [
            "name" => "Antigua And Barbuda",
            "code" => 1268
            ],
            [
            "name" => "Argentina",
            "code" => 54
            ],
            [
            "name" => "Armenia",
            "code" => 374
            ],
            [
            "name" => "Aruba",
            "code" => 297
            ],
            [
            "name" => "Australia",
            "code" => 61
            ],
            [
            "name" => "Austria",
            "code" => 43
            ],
            [
            "name" => "Azerbaijan",
            "code" => 994
            ],
            [
            "name" => "Bahamas The",
            "code" => 1242
            ],
            [
            "name" => "Bahrain",
            "code" => 973
            ],
            [
            "name" => "Bangladesh",
            "code" => 880
            ],
            [
            "name" => "Barbados",
            "code" => 1246
            ],
            [
            "name" => "Belarus",
            "code" => 375
            ],
            [
            "name" => "Belgium",
            "code" => 32
            ],
            [
            "name" => "Belize",
            "code" => 501
            ],
            [
            "name" => "Benin",
            "code" => 229
            ],
            [
            "name" => "Bermuda",
            "code" => 1441
            ],
            [
            "name" => "Bhutan",
            "code" => 975
            ],
            [
            "name" => "Bolivia",
            "code" => 591
            ],
            [
            "name" => "Bosnia and Herzegovina",
            "code" => 387
            ],
            [
            "name" => "Botswana",
            "code" => 267
            ],
            [
            "name" => "Bouvet Island",
            "code" => 0
            ],
            [
            "name" => "Brazil",
            "code" => 55
            ],
            
            [
            "name" => "British Indian Ocean Territory",
            "code" => 246
            ],
            [
            "name" => "Brunei",
            "code" => 673
            ],
            [
            "name" => "Bulgaria",
            "code" => 359
            ],
            [
            "name" => "Burkina Faso",
            "code" => 226
            ],
            [
            "name" => "Burundi",
            "code" => 257
            ],
            [
            "name" => "Cambodia",
            "code" => 855
            ],
            [
            "name" => "Cameroon",
            "code" => 237
            ],
            [
            "name" => "Canada",
            "code" => 1
            ],
            [
            "name" => "Cape Verde",
            "code" => 238
            ],
            [
            "name" => "Cayman Islands",
            "code" => 1345
            ],
            [
            "name" => "Central African Republic",
            "code" => 236
            ],
            [
            "name" => "Chad",
            "code" => 235
            ],
            [
            "name" => "Chile",
            "code" => 56
            ],
            [
            "name" => "China",
            "code" => 86
            ],
            [
            "name" => "Christmas Island",
            "code" => 61
            ],
            [
            "name" => "Cocos (Keeling) Islands",
            "code" => 672
            ],
            [
            "name" => "Colombia",
            "code" => 57
            ],
            [
            "name" => "British Indian Ocean Territory",
            "code" => 246
            ],
            [
            "name" => "Brunei",
            "code" => 673
            ],
            [
            "name" => "Bulgaria",
            "code" => 359
            ],
            [
            "name" => "Burkina Faso",
            "code" => 226
            ],
            [
            "name" => "Burundi",
            "code" => 257
            ],
            [
            "name" => "Cambodia",
            "code" => 855
            ],
            [
            "name" => "Cameroon",
            "code" => 237
            ],
            [
            "name" => "Canada",
            "code" => 1
            ],
            [
            "name" => "Cape Verde",
            "code" => 238
            ],
            [
            "name" => "Cayman Islands",
            "code" => 1345
            ],
            [
            "name" => "Central African Republic",
            "code" => 236
            ],
            [
            "name" => "Chad",
            "code" => 235
            ],
            [
            "name" => "Chile",
            "code" => 56
            ],
            [
            "name" => "China",
            "code" => 86
            ],
            [
            "name" => "Christmas Island",
            "code" => 61
            ],
            [
            "name" => "Cocos (Keeling) Islands",
            "code" => 672
            ],
            [
            "name" => "Colombia",
            "code" => 57
            ],
            [
            "name" => "Comoros",
            "code" => 269
            ],
            [
            "name" => "Republic Of The Congo",
            "code" => 242
            ],
            [
            "name" => "Democratic Republic Of The Congo",
            "code" => 242
            ],
            [
            "name" => "Cook Islands",
            "code" => 682
            ],
            [
            "name" => "Costa Rica",
            "code" => 506
            ],
            [
            "name" => "Cote D'Ivoire (Ivory Coast)",
            "code" => 225
            ],
            [
            "name" => "Croatia (Hrvatska)",
            "code" => 385
            ],
            [
            "name" => "Cuba",
            "code" => 53
            ],
            [
            "name" => "Cyprus",
            "code" => 357
            ],
            [
            "name" => "Czech Republic",
            "code" => 420
            ],
            [
            "name" => "Denmark",
            "code" => 45
            ],
            [
            "name" => "Djibouti",
            "code" => 253
            ],
            [
            "name" => "Dominica",
            "code" => 1767
            ],
            [
            "name" => "Dominican Republic",
            "code" => 1809
            ],
            [
            "name" => "East Timor",
            "code" => 670
            ],
            [
            "name" => "Ecuador",
            "code" => 593
            ],
            [
            "name" => "Egypt",
            "code" => 20
            ],
            [
            "name" => "El Salvador",
            "code" => 503
            ],
            [
                "name" => "Equatorial Guinea",
                "code" => 240
            ],
            [
                "name" => "Eritrea",
                "code" => 291
            ],
            [
                "name" => "Estonia",
                "code" => 372
            ],
            [
                "name" => "Afghanistan",
                "code" => 93
            ],
            [
                "name" => "External Territories of Australia",
                "code" => 61
            ],
            [
                "name" => "Falkland Islands",
                "code" => 500
            ],
            [
                "name" => "Faroe Islands",
                "code" => 298
            ],
            [
                "name" => "Fiji Islands",
                "code" => 679
            ],
            [
                "name" => "Finland",
                "code" => 358
            ],
            [
                "name" => "France",
                "code" => 33
            ],
            [
                "name" => "French Guiana",
                "code" => 594
            ],
            [
                "name" => "French Polynesia",
                "code" => 689
            ],
            [
                "name" => "French Southern Territories",
                "code" => 0
            ],
            [
                "name" => "Gabon",
                "code" => 241
            ],
            [
                "name" => "Gambia The",
                "code" => 220
            ],
            [
                "name" => "Georgia",
                "code" => 995
            ],
            [
                "name" => "Germany",
                "code" => 49
            ],
            [
                "name" => "Ghana",
                "code" => 233
            ],
            [
                "name" => "Gibraltar",
                "code" => 350
            ],
            [
                "name" => "Greece",
                "code" => 30
            ],
            [
                "name" => "Greenland",
                "code" => 299
            ],
            [
                "name" => "Grenada",
                "code" => 1473
            ],
            [
                "name" => "Guadeloupe",
                "code" => 590
            ],
            [
                "name" => "Guam",
                "code" => 1671
            ],
            [
                "name" => "Guatemala",
                "code" => 502
            ],
            [
                "name" => "Guernsey and Alderney",
                "code" => 44
            ],
            [
                "name" => "Guinea",
                "code" => 224
            ],
            [
                "name" => "Guinea-Bissau",
                "code" => 245
            ],
            [
                "name" => "Guyana",
                "code" => 592
            ],
            [
                "name" => "Haiti",
                "code" => 509
            ],
            [
                "name" => "Heard and McDonald Islands",
                "code" => 0
            ],
            [
                "name" => "Honduras",
                "code" => 504
            ],
            [
                "name" => "Hong Kong S.A.R.",
                "code" => 852
            ],
            [
                "name" => "Hungary",
                "code" => 36
            ],
            [
            "name" => "Iceland",
            "code" => 354
            ],
            [
            "name" => "India",
            "code" => 91
            ],
            [
            "name" => "Indonesia",
            "code" => 62
            ],
            [
            "name" => "Iran",
            "code" => 98
            ],
            [
            "name" => "Iraq",
            "code" => 964
            ],
            [
            "name" => "Ireland",
            "code" => 353
            ],
            [
            "name" => "Israel",
            "code" => 972
            ],
            [
            "name" => "Italy",
            "code" => 39
            ],
            [
            "name" => "Jamaica",
            "code" => 1876
            ],
            [
            "name" => "Japan",
            "code" => 81
            ],
            [
            "name" => "Jersey",
            "code" => 44
            ],
            [
            "name" => "Jordan",
            "code" => 962
            ],
            [
            "name" => "Kazakhstan",
            "code" => 7
            ],
            [
            "name" => "Kenya",
            "code" => 254
            ],
            [
            "name" => "Kiribati",
            "code" => 686
            ],
            [
            "name" => "Korea North",
            "code" => 850
            ],
            [
            "name" => "Korea South",
            "code" => 82
            ],
            [
            "name" => "Kuwait",
            "code" => 965
            ],
            [
            "name" => "Kyrgyzstan",
            "code" => 996
            ],
            [
            "name" => "Laos",
            "code" => 856
            ],
            [
            "name" => "Latvia",
            "code" => 371
            ],
            [
            "name" => "Lebanon",
            "code" => 961
            ],
            [
            "name" => "Lesotho",
            "code" => 266
            ],
            [
            "name" => "Liberia",
            "code" => 231
            ],
            [
            "name" => "Libya",
            "code" => 218
            ],
            [
            "name" => "Liechtenstein",
            "code" => 423
            ],
            [
            "name" => "Lithuania",
            "code" => 370
            ],
            [
            "name" => "Luxembourg",
            "code" => 352
            ],
            [
            "name" => "Macau S.A.R.",
            "code" => 853
            ],
            [
            "name" => "Macedonia",
            "code" => 389
            ],
            [
            "name" => "Madagascar",
            "code" => 261
            ],
            [
            "name" => "Malawi",
            "code" => 265
            ],
            [
            "name" => "Malaysia",
            "code" => 60
            ],
            [
            "name" => "Maldives",
            "code" => 960
            ],
            [
            "name" => "Mali",
            "code" => 223
            ],
            [
            "name" => "Malta",
            "code" => 356
            ],
            [
            "name" => "Man (Isle of)",
            "code" => 44
            ],
            [
            "name" => "Marshall Islands",
            "code" => 692
            ],
            [
            "name" => "Martinique",
            "code" => 596
            ],
            [
            "name" => "Mauritania",
            "code" => 222
            ],
            [
            "name" => "Mauritius",
            "code" => 230
            ],
            [
            "name" => "Mayotte",
            "code" => 269
            ],
            [
            "name" => "Mexico",
            "code" => 52
            ],
            [
            "name" => "Micronesia",
            "code" => 691
            ],
            [
            "name" => "Moldova",
            "code" => 373
            ],
            [
            "name" => "Monaco",
            "code" => 377
            ],
            [
            "name" => "Mongolia",
            "code" => 976
            ],
            [
            "name" => "Montserrat",
            "code" => 1664
            ],
            [
            "name" => "Morocco",
            "code" => 212
            ],
            [
            "name" => "Mozambique",
            "code" => 258
            ],
            [
            "name" => "Myanmar",
            "code" => 95
            ],
            [
            "name" => "Namibia",
            "code" => 264
            ],
            [
            "name" => "Nauru",
            "code" => 674
            ],
            [
            "name" => "Nepal",
            "code" => 977
            ],
            [
            "name" => "Netherlands Antilles",
            "code" => 599
            ],
            [
            "name" => "Netherlands The",
            "code" => 31
            ],
            [
            "name" => "New Caledonia",
            "code" => 687
            ],
            [
            "name" => "New Zealand",
            "code" => 64
            ],
            [ 
            "name" => "Nicaragua",
            "code" => 505
            ],
            [
            "name" => "Niger",
            "code" => 227
            ],
            [
            "name" => "Nigeria",
            "code" => 234
            ],
            [
            "name" => "Niue",
            "code" => 683
            ],
            [
            "name" => "Norfolk Island",
            "code" => 672
            ],
            [
            "name" => "Northern Mariana Islands",
            "code" => 1670
            ],
            [
            "name" => "Norway",
            "code" => 47
            ],
            [
            "name" => "Oman",
            "code" => 968
            ],
            [
            "name" => "Pakistan",
            "code" => 92
            ],
            [
            "name" => "Palau",
            "code" => 680
            ],
            [
            "name" => "Palestinian Territory Occupied",
            "code" => 970
            ],
            [
            "name" => "Panama",
            "code" => 507
            ],
            [
            "name" => "Papua new Guinea",
            "code" => 675
            ],
            [
            "name" => "Paraguay",
            "code" => 595
            ],
            [
            "name" => "Peru",
            "code" => 51
            ],
            [
            "name" => "Philippines",
            "code" => 63
            ],
            [
            "name" => "Pitcairn Island",
            "code" => 0
            ],
            [
            "name" => "Poland",
            "code" => 48
            ],
            [
            "name" => "Portugal",
            "code" => 351
            ],
            [
            "name" => "Puerto Rico",
            "code" => 1787
            ],
            [
            "name" => "Qatar",
            "code" => 974
            ],
            [
            "name" => "Reunion",
            "code" => 262
            ],
            [
            "name" => "Romania",
            "code" => 40
            ],
            [
            "name" => "Russia",
            "code" => 70
            ],
            [
            "name" => "Rwanda",
            "code" => 250
            ],
            [
            "name" => "Saint Helena",
            "code" => 290
            ],
            [
            "name" => "Saint Kitts And Nevis",
            "code" => 1869
            ],
            [
            "name" => "Saint Lucia",
            "code" => 1758
            ],
            [
            "name" => "Saint Pierre and Miquelon",
            "code" => 508
            ],
            [
            "name" => "Saint Vincent And The Grenadines",
            "code" => 1784
            ],
            [
            "name" => "Samoa",
            "code" => 684
            ],
            [
            "name" => "San Marino",
            "code" => 378
            ],
            [
            "name" => "Sao Tome and Principe",
            "code" => 239
            ],
            [
            "name" => "Saudi Arabia",
            "code" => 966
            ],
            [
            "name" => "Senegal",
            "code" => 221
            ],
            [
            "name" => "Serbia",
            "code" => 381
            ],
            [
            "name" => "Seychelles",
            "code" => 248
            ],
            [
            "name" => "Sierra Leone",
            "code" => 232
            ],
            [
            "name" => "Singapore",
            "code" => 65
            ],
            [
            "name" => "Slovakia",
            "code" => 421
            ],
            [
            "name" => "Slovenia",
            "code" => 386
            ],
            [
            "name" => "Smaller Territories of the UK",
            "code" => 44
            ],
            [
            "name" => "Solomon Islands",
            "code" => 677
            ],
            [
            "name" => "Somalia",
            "code" => 252
            ],
            [
            "name" => "South Africa",
            "code" => 27
            ],
            [
            "name" => "South Georgia",
            "code" => 0
            ],
            [
            "name" => "South Sudan",
            "code" => 211
            ],
            [
            "name" => "Spain",
            "code" => 34
            ],
            [
            "name" => "Sri Lanka",
            "code" => 94
            ],
            [
            "name" => "Sudan",
            "code" => 249
            ],
            [
            "name" => "Suriname",
            "code" => 597
            ],
            [
            "name" => "Svalbard And Jan Mayen Islands",
            "code" => 47
            ],
            [
            "name" => "Swaziland",
            "code" => 268
            ],
            [
            "name" => "Sweden",
            "code" => 46
            ],
            [
            "name" => "Switzerland",
            "code" => 41
            ],
            [
            "name" => "Syria",
            "code" => 963
            ],
            [
            "name" => "Taiwan",
            "code" => 886
            ],
            [
            "name" => "Tajikistan",
            "code" => 992
            ],
            [
            "name" => "Tanzania",
            "code" => 255
            ],
            [
            "name" => "Thailand",
            "code" => 66
            ],
            [
            "name" => "Togo",
            "code" => 228
            ],
            [
            "name" => "Tokelau",
            "code" => 690
            ],
            [
            "name" => "Tonga",
            "code" => 676
            ],
            [
            "name" => "Trinidad And Tobago",
            "code" => 1868
            ],
            [
            "name" => "Tunisia",
            "code" => 216
            ],
            [
            "name" => "Turkey",
            "code" => 90
            ],
            [
            "name" => "Turkmenistan",
            "code" => 7370
            ],
            [
            "name" => "Turks And Caicos Islands",
            "code" => 1649
            ],
            [
            "name" => "Tuvalu",
            "code" => 688
            ],
            [
            "name" => "Uganda",
            "code" => 256
            ],
            [
            "name" => "Ukraine",
            "code" => 380
            ],
            [
            "name" => "United Arab Emirates",
            "code" => 971
            ],
            [
            "name" => "United Kingdom",
            "code" => 44
            ],
            [
            "name" => "United States",
            "code" => 1
            ],
            [
            "name" => "United States Minor Outlying Islands",
            "code" => 1
            ],
            [
            "name" => "Uruguay",
            "code" => 598
            ],
            [
            "name" => "Uzbekistan",
            "code" => 998
            ],
            [
            "name" => "Vanuatu",
            "code" => 678
            ],
            [
            "name" => "Vatican City State (Holy See)",
            "code" => 39
            ],
            [
            "name" => "Venezuela",
            "code" => 58
            ],
            [
            "name" => "Vietnam",
            "code" => 84
            ],
            [
            "name" => "Virgin Islands (British)",
            "code" => 1284
            ],
            [
            "name" => "Virgin Islands (US)",
            "code" => 1340
            ],
            [
            "name" => "Wallis And Futuna Islands",
            "code" => 681
            ],
            [
            "name" => "Western Sahara",
            "code" => 212
            ],
            [
            "name" => "Yemen",
            "code" => 967
            ],
            [
            "name" => "Yugoslavia",
            "code" => 38
            ],
            [
            "name" => "Zambia",
            "code" => 260
            ],
            [
            "name" => "Zimbabwe",
            "code" => 26
            ]
            ];

            Country::insert($countries);

}
}
