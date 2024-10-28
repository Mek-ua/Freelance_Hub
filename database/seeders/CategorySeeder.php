<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category_groups;
use App\Models\User;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('categories')->truncate();
       $user = User::whereHas('role', function($query) {
        $query->where('type', 1);
      })->first()['id'];

      $categoryGroup = Category_groups::first()['id'];


       $categories = 
    [
      [
      "category_name"=> "accountant",
      "code"=> "101"
      ],
      [
      "category_name"=> "actor",
      "code"=> "102"
      ],
      [
      "category_name"=> "actuary",
      "code"=> "103"
      ],
      [
      "category_name"=> "adhesive bonding machine tender",
      "code"=> "104"
      ],
      [
      "category_name"=> "adjudicator",
      "code"=> "105"
      ],
      [
      "category_name"=> "administrative assistant",
      "code"=> "106"
      ],
      [
      "category_name"=> "administrative services manager",
      "code"=> "107"
      ],
      [
      "category_name"=> "adult education teacher",
      "code"=> "108"
      ],
      [
      "category_name"=> "advertising manager",
      "code"=> "109"
      ],
      [
      "category_name"=> "advertising sales agent",
      "code"=> "110"
      ],
      [
      "category_name"=> "aerobics instructor",
      "code"=> "111"
      ],
      [
      "category_name"=> "aerospace engineer",
      "code"=> "112"
      ],
      [
      "category_name"=> "aerospace engineering technician",
      "code"=> "113"
      ],
      [
      "category_name"=> "agent",
      "code"=> "114"
      ],
            
      [
      "category_name"=> "agricultural engineer",
      "code"=> "115"
      ],
      [
      "category_name"=> "agricultural equipment operator",
      "code"=> "116"
      ],
      [
      "category_name"=> "agricultural grader",
      "code"=> "117"
      ],
      [
      "category_name"=> "agricultural inspector",
      "code"=> "118"
      ],
      [
      "category_name"=> "agricultural manager",
      "code"=> "119"
      ],
      [
      "category_name"=> "agricultural sciences teacher",
      "code"=> "120"
      ],
      [
      "category_name"=> "agricultural sorter",
      "code"=> "121"
      ],
      [
      "category_name"=> "agricultural technician",
      "code"=> "122"
      ],
      [
      "category_name"=> "agricultural worker",
      "code"=> "123"
      ],
      [
      "category_name"=> "air conditioning installer",
      "code"=> "124"
      ],
      [
      "category_name"=> "air conditioning mechanic",
      "code"=> "125"
      ],
      [
      "category_name"=> "air traffic controller",
      "code"=> "126"
      ],
      [
      "category_name"=> "aircraft cargo handling supervisor",
      "code"=> "127"
      ],
      [
      "category_name"=> "aircraft mechanic",
      "code"=> "128"
      ],
      [
      "category_name"=> "aircraft service technician",
      "code"=> "129"
      ],
      [
      "category_name"=> "airline copilot",
      "code"=> "130"
      ],
      [
      "category_name"=> "airline pilot",
      "code"=> "131"
      ],
      [
      "category_name"=> "ambulance dispatcher",
      "code"=> "132"
      ],
      [
      "category_name"=> "ambulance driver",
      "code"=> "133"
      ],
      [
      "category_name"=> "amusement machine servicer",
      "code"=> "134"
      ],
      [
      "category_name"=> "anesthesiologist",
      "code"=> "135"
      ],
      [
      "category_name"=> "animal breeder",
      "code"=> "136"
      ],
      [
      "category_name"=> "animal control worker",
      "code"=> "137"
      ],
      [
      "category_name"=> "animal scientist",
      "code"=> "138"
      ],
      [
      "category_name"=> "animal trainer",
      "code"=> "139"
      ],
      [
      "category_name"=> "animator",
      "code"=> "140"
      ],
      [
      "category_name"=> "answering service operator",
      "code"=> "141"
      ],
      [
      "category_name"=> "anthropologist",
      "code"=> "142"
      ],
      [
      "category_name"=> "apparel patternmaker",
      "code"=> "143"
      ],
      [
      "category_name"=> "apparel worker",
      "code"=> "144"
      ],
      [
      "category_name"=> "arbitrator",
      "code"=> "145"
      ],
      [
      "category_name"=> "archeologist",
      "code"=> "146"
      ],
      [
      "category_name"=> "architect",
      "code"=> "147"
      ],
      [
      "category_name"=> "architectural drafter",
      "code"=> "148"
      ],
      [
  "category_name"=> "architectural manager",
      "code"=> "149"
      ],
      [
      "category_name"=> "archivist",
      "code"=> "150"
      ],
      [
      "category_name"=> "art director",
      "code"=> "151"
      ],
      [
      "category_name"=> "art teacher",
      "code"=> "152"
      ],
      [
      "category_name"=> "artist",
      "code"=> "153"
      ],
      [
      "category_name"=> "assembler",
      "code"=> "154"
      ],
      [
      "category_name"=> "astronomer",
      "code"=> "155"
      ],
      [
      "category_name"=> "athlete",
      "code"=> "156"
      ],
      [
      "category_name"=> "athletic trainer",
      "code"=> "157"
      ],
      [
      "category_name"=> "ATM machine repairer",
      "code"=> "158"
      ],
      [
      "category_name"=> "atmospheric scientist",
      "code"=> "159"
      ],
      [
      "category_name"=> "attendant",
      "code"=> "160"
      ],
      [
      "category_name"=> "audio and video equipment technician",
      "code"=> "161"
      ],
      [
      "category_name"=> "audio-visual and multimedia collections specialist",
      "code"=> "162"
      ],
      [
      "category_name"=> "audiologist",
      "code"=> "163"
      ],
      [
      "category_name"=> "auditor",
      "code"=> "164"
      ],
      [
      "category_name"=> "author",
      "code"=> "165"
      ],
      [
      "category_name"=> "auto damage insurance appraiser",
      "code"=> "166"
      ],
      [
      "category_name"=> "automotive and watercraft service attendant",
      "code"=> "167"
      ],
      [
      "category_name"=> "automotive glass installer",
      "code"=> "168"
      ],
      [
      "category_name"=> "automotive mechanic",
      "code"=> "169"
      ],
      [
      "category_name"=> "avionics technician",
      "code"=> "170"
      ],
      
      [
      "category_name"=> "back-end developer",
      "code"=> 1001
      ],
      [
      "category_name"=> "baggage porter",
      "code"=> 1002
      ],
      [
      "category_name"=> "bailiff",
      "code"=> 1003
      ],
      [
      "category_name"=> "baker",
      "code"=> 1004
      ],
      [
      "category_name"=> "barback",
      "code"=> 1005
      ],
      [
      "category_name"=> "barber",
      "code"=> 1006
      ],
      [
      "category_name"=> "bartender",
      "code"=> 1007
      ],
      [
      "category_name"=> "basic education teacher",
      "code"=> 1008
      ],
      [
      "category_name"=> "behavioral disorder counselor",
      "code"=> 1009
      ],
      [
      "category_name"=> "bellhop",
      "code"=> 1010
      ],
      [
      "category_name"=> "bench carpenter",
      "code"=> 1011
      ],
      [
      "category_name"=> "bicycle repairer",
      "code"=> 1012
      ],
      [
      "category_name"=> "bill and account collector",
      "code"=> 1013
      ],
      [
      "category_name"=> "billing and posting clerk",
      "code"=> 1014
      ],
      [
      "category_name"=> "biochemist",
      "code"=> 1015
      ],
      [
      "category_name"=> "biological technician",
      "code"=> 1016
      ],
      [
      "category_name"=> "biomedical engineer",
      "code"=> 1017
      ],
      [
      "category_name"=> "biophysicist",
      "code"=> 1018
      ],
      
      [
      "category_name"=> "blaster",
      "code"=> 123456
      ],
      [
      "category_name"=> "blending machine operator",
      "code"=> 987654
      ],
      [
      "category_name"=> "blockmason",
      "code"=> 456789
      ],
      [
      "category_name"=> "boiler operator",
      "code"=> 159753
      ],
      [
      "category_name"=> "boilermaker",
      "code"=> 753951
      ],
      [
      "category_name"=> "bookkeeper",
      "code"=> 951357
      ],
      [
      "category_name"=> "boring machine tool tender",
      "code"=> 357159
      ],
      [
      "category_name"=> "brazer",
      "code"=> 159357
      ],
      [
      "category_name"=> "brickmason",
      "code"=> 753951
      ],
      [
      "category_name"=> "bridge and lock tender",
      "code"=> 951753
      ],
      [
      "category_name"=> "broadcast news analyst",
      "code"=> 753159
      ],
      [
      "category_name"=> "broadcast technician",
      "code"=> 159951
      ],
      [
      "category_name"=> "brokerage clerk",
      "code"=> 951357
      ],
      [
      "category_name"=> "budget analyst",
      "code"=> 357951
      ],
      [
      "category_name"=> "building inspector",
      "code"=> 951159
      ],
      [
  "category_name"=> "bus mechanic",
      "code"=> 159753
      ],
      [
      "category_name"=> "butcher",
      "code"=> 951753
      ],
      [
      "category_name"=> "buyer",
      "code"=> 357159
      ],
      [
      "category_name"=> "cabinetmaker",
      "code"=> 753951
      ],
      [
      "category_name"=>"cafeteria attendant",
      "code"=>159753
      ],
      [
      "category_name"=>"cafeteria cook",
      "code"=>951357
      ],
      [
      "category_name"=>"camera operator",
      "code"=>753159
      ],
      [
      "category_name"=>"camera repairer",
      "code"=>159951
      ],
      [
      "category_name"=>"cardiovascular technician",
      "code"=>951357
      ],
      [
      "category_name"=>"cargo agent",
      "code"=>357159
      ],
      [
      "category_name"=>"carpenter",
      "code"=>753951
      ],
      [
      "category_name"=>"carpet installer",
      "code"=>159753
      ],
      [
      "category_name"=>"cartographer",
      "code"=>951357
      ],
      [
      "category_name"=>"cashier",
      "code"=>357159
      ],
      [
      "category_name"=>"caster",
      "code"=>753951
      ],
      [
      "category_name"=>"ceiling tile installer",
      "code"=>159753
      ],
      [
      "category_name"=>"cellular equipment installer",
      "code"=>951357
      ],
      [
      "category_name"=>"cement mason",
      "code"=>357159
      ],
      [
      "category_name"=>"channeling machine operator",
      "code"=>753951
      ],
      [
      "category_name"=>"chauffeur",
      "code"=>159753
      ],
      [
      "category_name"=>"checker",
      "code"=>951357
      ],
      [
      "category_name"=>"chef",
      "code"=>357159
      ],
      [
      "category_name"=>"chemical engineer",
      "code"=>753951
      ],
      [
      "category_name"=>"chemical plant operator",
      "code"=>159753
      ],
      [
      "category_name"=>"chemist",
      "code"=>951357
      ],
      [
      "category_name"=>"chemistry teacher",
      "code"=>357159
      ],
      [
      "category_name"=>"chief executive",
      "code"=>753951
      ],
      [
      "category_name"=>"child social worker",
      "code"=>159753
      ],
      [
      "category_name"=>"childcare worker",
      "code"=>951357
      ],
      [
      "category_name"=>"chiropractor",
      "code"=>357159
      ],
      [
      "category_name"=>"choreographer",
      "code"=>753951
      ],
      [
      "category_name"=>"civil drafter",
      "code"=>159753
      ],
      [
      "category_name"=>"civil engineer",
      "code"=>951357
      ],
      [
      "category_name"=>"civil engineering technician",
      "code"=>357159
      ],
      
      [
      "category_name"=>"claims adjuster",
      "code"=>12345
      ],
      [
      "category_name"=>"claims examiner",
      "code"=>67890
      ],
      [
      "category_name"=>"claims investigator",
      "code"=>24680
      ],
      [
      "category_name"=>"cleaner",
      "code"=>13579
      ],
      [
      "category_name"=>"clinical laboratory technician",
      "code"=>97531
      ],
      [
      "category_name"=>"clinical laboratory technologist",
      "code"=>86420
      ],
      [
      "category_name"=>"clinical psychologist",
      "code"=>75301
      ],
      [
      "category_name"=>"coating worker",
      "code"=>64208
      ],
      [
      "category_name"=>"coatroom attendant",
      "code"=>53197
      ],
      [
      "category_name"=>"coil finisher",
      "code"=>42086
      ],
      [
      "category_name"=>"coil taper",
      "code"=>31975
      ],
      [
      "category_name"=>"coil winder",
      "code"=>20864
      ],
      [
      "category_name"=>"coin machine servicer",
      "code"=>19753
      ],
      [
      "category_name"=>"commercial diver",
      "code"=>98642
      ],
      [
      "category_name"=>"commercial pilot",
      "code"=>97531
      ],
      [
      "category_name"=>"commodities sales agent",
      "code"=>86420
      ],
      [
      "category_name"=>"communications equipment operator",
      "code"=>75301
      ],
      [
      "category_name"=>"communications teacher",
      "code"=>64208
      ],
      [
      "category_name"=>"community association manager",
      "code"=>53197
      ],
      [
      "category_name"=>"community service manager",
      "code"=>42086
      ],
      [
      "category_name"=>"compensation and benefits manager",
      "code"=>31975
      ],
      [
      "category_name"=>"compliance officer",
      "code"=>20864
  ],
      [
      "category_name"=>"composer",
      "code"=>19753
      ],
      [
      "category_name"=>"computer hardware engineer",
      "code"=>98642
      ],
      [
      "category_name"=>"computer network architect",
      "code"=>97531
      ],
      [
      "category_name"=>"computer operator",
      "code"=>86420
      ],
      [
      "category_name"=>"computer programmer",
      "code"=>75301
      ],
      [
      "category_name"=>"computer science teacher",
      "code"=>64208
      ],
      [
      "category_name"=>"computer support specialist",
      "code"=>53197
      ],
      [
      "category_name"=>"computer systems administrator",
      "code"=>42086
      ],
      [
      "category_name"=>"computer systems analyst",
      "code"=>31975
      ],
      [
      "category_name"=>"concierge",
      "code"=>20864
      ],
      [
      "category_name"=>"conciliator",
      "code"=>19753
      ],
      [
      "category_name"=>"concrete finisher",
      "code"=>98642
      ],
      [
      "category_name"=>"conservation science teacher",
      "code"=>97531
      ],
      [
      "category_name"=>"conservation scientist",
      "code"=>86420
      ],
      [
      "category_name"=>"conservation worker",
      "code"=>75301
      ],
      [
      "category_name"=>"conservator",
      "code"=>64208
      ],
      [
      "category_name"=>"construction inspector",
      "code"=>53197
      ],
      [
      "category_name"=>"construction manager",
      "code"=>42086
      ],
      [
      "category_name"=>"construction painter",
      "code"=>31975
      ],
      [
      "category_name"=>"construction worker",
      "code"=>20864
      ],
      [
      "category_name"=>"continuous mining machine operator",
      "code"=>19753
      ],
      [
      "category_name"=>"convention planner",
      "code"=>88642
      ],
      [
      "category_name"=>"conveyor operator",
      "code"=>97531
      ],
      [
      "category_name"=>"cook",
      "code"=>86420
      ],
      [
      "category_name"=>"cooling equipment operator",
      "code"=>75301
      ],
      [
      "category_name"=>"copy marker",
      "code"=>64208
      ],
      [
      "category_name"=>"correctional officer",
      "code"=>53197
      ],
      [
      "category_name"=>"correctional treatment specialist",
      "code"=>42086
      ],
      [
      "category_name"=>"correspondence clerk",
      "code"=>31975
      ],
      [
      "category_name"=>"correspondent",
      "code"=>20864
      ],
      [
      "category_name"=>"cosmetologist",
      "code"=>19753
      ],
      [
      "category_name"=>"cost estimator",
      "code"=>18642
      ],
      [
      "category_name"=>"costume attendant",
      "code"=>97531
      ],
      [
      "category_name"=>"counseling psychologist",
      "code"=>86420
      ],
      [
      "category_name"=>"counselor",
      "code"=>75301
      ],
      [
      "category_name"=>"courier",
      "code"=>64208
      ],
      [
      "category_name"=>"court reporter",
      "code"=>53197
      ],
      [
      "category_name"=>"craft artist",
      "code"=>42086
      ],
      [
      "category_name"=>"crane operator",
      "code"=>31975
      ],
      [
      "category_name"=>"credit analyst",
      "code"=>20864
      ],
      
      ["category_name"=>"credit checker", 
      "code"=>713925],
      ["category_name"=>"credit counselor",
      "code"=>448782],
      ["category_name"=>"criminal investigator", 
      "code"=>159364],
      ["category_name"=>"criminal justice teacher",
      "code"=>997204],
      ["category_name"=>"crossing guard",
      "code"=>334587],
      ["category_name"=>"curator",
      "code"=>852319],
      ["category_name"=>"custom sewer",
      "code"=>671042],
      ["category_name"=>"customer service representative",
      "code"=>280765],
      ["category_name"=>"cutter",
      "code"=>519208],
      ["category_name"=>"cutting machine operator",
      "code"=>403691],
      ["category_name"=>"dancer",
      "code"=>786432],
      ["category_name"=>"data entry keyer",
      "code"=>241975],
      ["category_name"=>"database administrator",
      "code"=>632850],
      ["category_name"=>"decorating worker",
      "code"=>507313],
      ["category_name"=>"delivery services driver",
      "code"=>864072],
      ["category_name"=>"demonstrator",
      "code"=>395426],
      ["category_name"=>"dental assistant",
      "code"=>739185],
  ["category_name"=>"dental hygienist",
      "code"=>618527],
      ["category_name"=>"dental laboratory technician",
      "code"=>274960],
      ["category_name"=>"dentist",
      "code"=>453801],
        
          
      ["category_name"=>"developer",
      "code"=>927351],
      ["category_name"=>"diagnostic medical sonographer",
      "code"=>482619],
      ["category_name"=>"die maker",
      "code"=>765204],
      ["category_name"=>"diesel engine specialist",
      "code"=>314078],
      ["category_name"=>"dietetic technician",
      "code"=>651943],
      ["category_name"=>"dietitian",
      "code"=>239756],
      ["category_name"=>"dinkey operator",
      "code"=>876512],
      ["category_name"=>"director",
      "code"=>405297],
      ["category_name"=>"dishwasher",
      "code"=>734061],
      ["category_name"=>"dispatcher",
      "code"=>592418],
    
      ["category_name"=>"door-to-door sales worker",
      "code"=>478215],
      ["category_name"=>"drafter",
      "code"=>851963],
      ["category_name"=>"dragline operator", 
      "code"=>326407],
      ["category_name"=>"drama teacher",
      "code"=>744092],
      ["category_name"=>"dredge operator",
      "code"=>612538],
      ["category_name"=>"dressing room attendant",
      "code"=>279401],
      ["category_name"=>"dressmaker",
      "code"=>935762],
      ["category_name"=>"drier operator",
      "code"=>468213],
      ["category_name"=>"drilling machine tool operator",
      "code"=>754019],
      ["category_name"=>"dry-cleaning worker",
      "code"=>392876],
      ["category_name"=>"drywall installer",
      "code"=>621543],
      ["category_name"=>"dyeing machine operator",
      "code"=>834702],
      ["category_name"=>"earth driller",
      "code"=>476319],
      ["category_name"=>"economics teacher",
      "code"=>758204],
      ["category_name"=>"economist",
      "code"=>613957],
      ["category_name"=>"editor",
      "code"=>384762],
      ["category_name"=>"education administrator",
      "code"=>927531],
      ["category_name"=>"electric motor repairer",
      "code"=>254698],
      ["category_name"=>"electrical electronics drafter",
      "code"=>671320],
      ["category_name"=>"electrical engineer",
      "code"=>843957],
      ["category_name"=>"electrical equipment assembler",
      "code"=>475216],
      ["category_name"=>"electrical installer",
      "code"=>928317],
      ["category_name"=>"electrical power-line installer",
      "code"=>663571],
      ["category_name"=>"electrician",
      "code"=>752814],
      ["category_name"=>"electro-mechanical technician",
      "code"=>416932],
      ["category_name"=>"elementary school teacher",
      "code"=>975248],
      ["category_name"=>"elevator installer",
      "code"=>631907],
      ["category_name"=>"elevator repairer",
      "code"=>294563],
      ["category_name"=>"embalmer",
      "code"=>748163],
      ["category_name"=>"emergency management director",
      "code"=>526894],
      ["category_name"=>"emergency medical technician",
      "code"=>419763],
      ["category_name"=>"engine assembler",
      "code"=>670241],
      ["category_name"=>"engineer",
      "code"=>915376],
      ["category_name"=>"engineering manager",
      "code"=>783429],
      ["category_name"=>"engineering teacher",
      "code"=>248651],
      ["category_name"=>"english language teacher",
      "code"=>624917],
      ["category_name"=>"engraver",
      "code"=>379514],
      ["category_name"=>"entertainment attendant",
      "code"=>942087],
      ["category_name"=>"environmental engineer",
      "code"=>735268],
      ["category_name"=>"environmental science teacher",
      "code"=>462851],
      ["category_name"=>"environmental scientist",
      "code"=>816493],
      ["category_name"=>"epidemiologist",
      "code"=>375218],
      ["category_name"=>"escort",
      "code"=>694023],
      ["category_name"=>"etcher",
      "code"=>523914],
      ["category_name"=>"event planner",
      "code"=>867245],
      ["category_name"=>"excavating operator",
      "code"=>436981],
      ["category_name"=>"executive administrative assistant",
      "code"=>751932],
      ["category_name"=>"executive secretary",
      "code"=>628495],
      ["category_name"=>"exhibit designer",
      "code"=>417286],
      ["category_name"=>"expediting clerk",
  "code"=>946375],
      ["category_name"=>"explosives worker",
      "code"=>273864],
      ["category_name"=>"extraction worker",
      "code"=>591342],
      ["category_name"=>"family practitioner",
      "code"=>873541],
      ["category_name"=>"family social worker",
      "code"=>635409],
      ["category_name"=>"family therapist",
      "code"=>417982],
      ["category_name"=>"farm advisor",
      "code"=>796254],
      ["category_name"=>"farm equipment mechanic",
      "code"=>532879],
      ["category_name"=>"farm labor contractor",
      "code"=>674153],
      ["category_name"=>"farmer",
      "code"=>295864],
      ["category_name"=>"farmworker",
      "code"=>748326],
      ["category_name"=>"fashion designer",
      "code"=>591647],
      ["category_name"=>"fast food cook",
      "code"=>467813],
      ["category_name"=>"fence erector",
      "code"=>723958],
      ["category_name"=>"fiberglass fabricator",
      "code"=>465297],
      ["category_name"=>"fiberglass laminator",
      "code"=>819674],
      ["category_name"=>"file clerk",
      "code"=>976432],
      ["category_name"=>"filling machine operator",
      "code"=>248651],
      ["category_name"=>"film and video editor",
      "code"=>594031],
      ["category_name"=>"financial analyst",
      "code"=>746128],
      ["category_name"=>"financial examiner",
      "code"=>612847],
      ["category_name"=>"financial manager",
      "code"=>351968],
      ["category_name"=>"financial services sales agent",
      "code"=>926574],
      ["category_name"=>"fine artist",
      "code"=>438971],
      ["category_name"=>"fire alarm system installer",
      "code"=>745126],
      ["category_name"=>"fire dispatcher",
      "code"=>651982],
      ["category_name"=>"fire inspector",
      "code"=>439671],
      ["category_name"=>"fire investigator",
      "code"=>248651],
      ["category_name"=>"firefighter",
      "code"=>653497],
      ["category_name"=>"fish and game warden",
      "code"=>851632],
      ["category_name"=>"fish cutter",
      "code"=>648571],
      ["category_name"=>"fish trimmer",
      "code"=>846105],
      ["category_name"=>"fisher",
      "code"=>476392],
      ["category_name"=>"fitness studies teacher",
      "code"=>762543],
      ["category_name"=>"fitness trainer",
      "code"=>436819],
      ["category_name"=>"flight attendant",
      "code"=>598214],
      ["category_name"=>"floor finisher",
      "code"=>673915],
      ["category_name"=>"floor layer",
      "code"=>514876],
      ["category_name"=>"floor sander",
      "code"=>612843],
      ["category_name"=>"floral designer",
      "code"=>475698],
      ["category_name"=>"food batchmaker",
      "code"=>347258],
      ["category_name"=>"food cooking machine operator",
      "code"=>621379],
      ["category_name"=>"food preparation worker",
      "code"=>851673],
      ["category_name"=>"food science technician",
      "code"=>746328],
      ["category_name"=>"food scientist",
      "code"=>637541],
      ["category_name"=>"food server",
      "code"=>415786],
      ["category_name"=>"food service manager",
      "code"=>689234],
      ["category_name"=>"food technologist",
      "code"=>745891],
      ["category_name"=>"foreign language teacher",
      "code"=>346287],
      ["category_name"=>"foreign literature teacher",
      "code"=>623987],
      ["category_name"=>"forensic science technician",
      "code"=>612834],
      ["category_name"=>"forest fire inspector",
      "code"=>762843],
      ["category_name"=>"forest fire prevention specialist",
      "code"=>653427],
      ["category_name"=>"forest worker",
      "code"=>746283],
      ["category_name"=>"forester",
      "code"=>456328],
      ["category_name"=>"forestry teacher",
      "code"=>748265],
      ["category_name"=>"forging machine setter",
      "code"=>658234],
      ["category_name"=>"foundry coremaker",
      "code"=>456789],
      ["category_name"=>"freight agent",
      "code"=>742386],
      ["category_name"=>"freight mover",
      "code"=>653421],
      
      ["category_name"=>"front-end developer",
      "code"=>123456],
        
          
      
      
        [
          "category_name"=>"fundraising manager",
          "code"=>112031
        ],
        [
          "category_name"=>"funeral attendant",
          "code"=>394021
        ],
        [
          "category_name"=>"funeral director",
          "code"=>119061
        ],
        [
          "category_name"=>"funeral service manager",
          "code"=>119061
        ],
        [
          "category_name"=>"furnace operator",
          "code"=>514011
        ],
        [
          "category_name"=>"furnishings worker",
          "code"=>516092
        ],
        [
          "category_name"=>"furniture finisher",
          "code"=>517021
        ],
        [
          "category_name"=>"gaming booth cashier",
          "code"=>393011
        ],
        [
          "category_name"=>"gaming cage worker",
          "code"=>433041
        ],
        [
          "category_name"=>"gaming change person",
          "code"=>393011
        ],
        [
          "category_name"=>"gaming dealer",
          "code"=>393012
        ],
        [
          "category_name"=>"gaming investigator",
          "code"=>131041
        ],
        [
          "category_name"=>"gaming manager",
          "code"=>119071
        ],
        [
          "category_name"=>"gaming surveillance officer",
          "code"=>339031
        ],
        [
          "category_name"=>"garment mender",
          "code"=>516052
        ],
        [
          "category_name"=>"garment presser",
          "code"=>516021
        ],
        [
          "category_name"=>"gas compressor",
          "code"=>518093
        ],
        [
          "category_name"=>"gas plant operator",
          "code"=>518093
        ],
        [
          "category_name"=>"gas pumping station operator",
          "code"=>537061
        ],
        [
          "category_name"=>"general manager",
          "code"=>111021
        ],
        [
          "category_name"=>"general practitioner",
          "code"=>291062
        ],
        [
          "category_name"=>"geographer",
          "code"=>193092
        ],
        [
          "category_name"=>"geography teacher",
          "code"=>251064
        ],
        [
          "category_name"=>"geological engineer",
          "code"=>172171
        ],
        [
          "category_name"=>"geological technician",
          "code"=>194041
        ],
        [
          "category_name"=>"geoscientist",
          "code"=>192042
        ],
        [
          "category_name"=>"glazier",
          "code"=>472121
        ],
        [
          "category_name"=>"government program eligibility interviewer",
          "code"=>434061
        ],
        [
          "category_name"=>"graduate teaching assistant",
          "code"=>251191
        ],
        [
          "category_name"=>"graphic designer",
          "code"=>271024
        ],
        [
          "category_name"=>"groundskeeper",
          "code"=>373011
        ],
        [
          "category_name"=>"groundskeeping worker",
          "code"=>373011
        ],
        [
          "category_name"=>"gynecologist",
          "code"=>291064
        ],
        [
          "category_name"=>"hairdresser",
          "code"=>395012
        ],
        [
          "category_name"=>"hairstylist",
          "code"=>395012
        ],
        [
          "category_name"=>"hand grinding worker",
          "code"=>519021
        ],
        [
          "category_name"=>"hand laborer",
          "code"=>537062
        ],
        [
          "category_name"=>"hand packager",
          "code"=>537064
        ],
        [
          "category_name"=>"hand packer",
          "code"=>537064
        ],
        [
          "category_name"=>"hand polishing worker",
          "code"=>519021
        ],
        [
          "category_name"=>"hand sewer",
          "code"=>516052
        ],
        [
          "category_name"=>"hazardous materials removal worker",
          "code"=>474041
        ],
        [
          "category_name"=>"head cook",
          "code"=>351011
        ],
        [
          "category_name"=>"health and safety engineer",
          "code"=>172111
        ],
        [
          "category_name"=>"health educator",
          "code"=>211091
        ],
        [
          "category_name"=>"health information technician",
          "code"=>292071
        ],
        [
          "category_name"=>"health services manager",
          "code"=>119111
        ],
        [
          "category_name"=>"health specialties teacher",
          "code"=>251071
        ],
        [
          "category_name"=>"healthcare social worker",
          "code"=>211022
        ],
        [
          "category_name"=>"hearing officer",
          "code"=>231022
        ],
        [
          "category_name"=>"heat treating equipment setter",
          "code"=>514191
        ],
        [
          "category_name"=>"heating installer",
          "code"=>499021
        ],
        [
          "category_name"=>"heating mechanic",
          "code"=>499021
        ],
        [
          "category_name"=>"heavy truck driver",
          "code"=>533032
        ],
        [
          "category_name"=>"highway maintenance worker",
          "code"=>474051
        ],
        [
          "category_name"=>"historian",
          "code"=>193093
        ],
        [
          "category_name"=>"history teacher",
          "code"=>251125
        ],
        [
          "category_name"=>"hoist and winch operator",
          "code"=>537051
        ],
        [
          "category_name"=>"home appliance repairer",
          "code"=>499031
        ],
        [
          "category_name"=>"home economics teacher",
          "code"=>252021
        ],
        [
          "category_name"=>"home entertainment installer",
          "code"=>492097
        ],
        [
          "category_name"=>"home health aide",
          "code"=>311121
        ],
        [
          "category_name"=>"home management advisor",
          "code"=>273091
        ],
        [
          "category_name"=>"host",
          "code"=>353031
        ],
        [
          "category_name"=>"hostess",
          "code"=>353031
        ],
      [
        
          "category_name"=>"hydrologist",
          "code"=>111011
        ],
        [
          "category_name"=>"illustrator",
          "code"=>271013
        ],
        [
          "category_name"=>"industrial designer",
          "code"=>271021
        ],
        [
          "category_name"=>"industrial engineer",
          "code"=>172112
        ],
        [
          "category_name"=>"industrial engineering technician",
          "code"=>173026
        ],
        [
          "category_name"=>"industrial machinery mechanic",
          "code"=>499041
        ],
        [
          "category_name"=>"industrial production manager",
          "code"=>113051
        ],
        [
          "category_name"=>"industrial truck operator",
          "code"=>537051
        ],
        [
          "category_name"=>"industrial-organizational psychologist",
          "code"=>193033
        ],
        [
          "category_name"=>"information clerk",
          "code"=>434199
        ],
        [
          "category_name"=>"information research scientist",
          "code"=>151211
        ],
        [
          "category_name"=>"information security analyst",
          "code"=>151212
        ],
        [
          "category_name"=>"information systems manager",
          "code"=>113021
        ],
        [
          "category_name"=>"inspector",
          "code"=>131041
        ],
        [
          "category_name"=>"instructional coordinator",
          "code"=>259031
        ],
        [
          "category_name"=>"instructor",
          "code"=>253021
        ],
        [
          "category_name"=>"insulation worker",
          "code"=>472131
        ],
        [
          "category_name"=>"insurance claims clerk",
          "code"=>439041
        ],
        [
          "category_name"=>"insurance sales agent",
          "code"=>413021
        ],
        [
          "category_name"=>"insurance underwriter",
          "code"=>132053
        ],
        [
          "category_name"=>"intercity bus driver",
          "code"=>533021
        ],
        [
          "category_name"=>"interior designer",
          "code"=>271025
        ],
        [
          "category_name"=>"internist",
          "code"=>291063
        ],
        [
          "category_name"=>"interpreter",
          "code"=>273091
        ],
        [
          "category_name"=>"interviewer",
          "code"=>434111
        ],
        [
          "category_name"=>"investigator",
          "code"=>333021
        ],
        [
          "category_name"=>"jailer",
          "code"=>333012
        ],
        [
          "category_name"=>"janitor",
          "code"=>372011
        ],
        [
          "category_name"=>"jeweler",
          "code"=>519071
        ],
        [
          "category_name"=>"judge",
          "code"=>231023
        ],
        [
          "category_name"=>"judicial law clerk",
          "code"=>231012
        ],
        [
          "category_name"=>"kettle operator",
          "code"=>519081
        ],
        [
          "category_name"=>"kiln operator",
          "code"=>519061
        ],
        [
          "category_name"=>"kindergarten teacher",
          "code"=>252012
        ],
        [
          "category_name"=>"laboratory animal caretaker",
          "code"=>319096
        ],
        [
          "category_name"=>"landscape architect",
          "code"=>171012
        ],
        [
          "category_name"=>"landscaping worker",
          "code"=>373011
        ],
        [
          "category_name"=>"lathe setter",
          "code"=>514062
        ],
        [
          "category_name"=>"laundry worker",
          "code"=>519021
        ],
        [
          "category_name"=>"law enforcement teacher",
          "code"=>251111
        ],
        [
          "category_name"=>"law teacher",
          "code"=>251112
        ],
        [
          "category_name"=>"lawyer",
          "code"=>231011
        ],
        [
          "category_name"=>"layout worker",
          "code"=>519151
        ],
        [
          "category_name"=>"leather worker",
          "code"=>516091
        ],
        [
          "category_name"=>"legal assistant",
          "code"=>232011
        ],
        [
          "category_name"=>"legal secretary",
          "code"=>436012
        ],
        [
          "category_name"=>"legislator",
          "code"=>111031
        ],
        [
          "category_name"=>"librarian",
          "code"=>254021
        ],
        [
          "category_name"=>"library assistant",
          "code"=>434121
        ],
        [
          "category_name"=>"library science teacher",
          "code"=>251082
        ],
        [
          "category_name"=>"library technician",
          "code"=>254031
        ],
        [
          "category_name"=>"licensed practical nurse",
          "code"=>292061
        ],
        [
          "category_name"=>"licensed vocational nurse",
          "code"=>292061
        ],
        [
          "category_name"=>"life scientist",
          "code"=>191099
        ],
        [
          "category_name"=>"lifeguard",
          "code"=>339092
        ],
        [
          "category_name"=>"light truck driver",
          "code"=>533033
        ],
        [
          "category_name"=>"line installer",
          "code"=>499051
        ],
        [
          "category_name"=>"literacy teacher",
          "code"=>253011
        ],
        [
          "category_name"=>"literature teacher",
          "code"=>251123
        ],
        [
          "category_name"=>"loading machine operator",
          "code"=>537051
        ],
        [
          "category_name"=>"loan clerk",
          "code"=>433071
        ],
        [
          "category_name"=>"loan interviewer",
          "code"=>132072
        ],
        [
          "category_name"=>"loan officer",
          "code"=>132072
        ],
        [
          "category_name"=>"lobby attendant",
          "code"=>396012
        ],
        [
          "category_name"=>"locker room attendant",
          "code"=>393091
        ],
        [
          "category_name"=>"locksmith",
          "code"=>499094
        ],
        [
          "category_name"=>"locomotive engineer",
          "code"=>534011
        ],
        [
          "category_name"=>"locomotive firer",
          "code"=>534012
        ],
        [
          "category_name"=>"lodging manager",
          "code"=>119081
        ],
        [
          "category_name"=>"log grader",
          "code"=>454023
        ],
        [
          "category_name"=>"logging equipment operator",
          "code"=>454022
        ],
        [
          "category_name"=>"logistician",
          "code"=>131081
        ],
    
        [
          "category_name"=>"machine feeder",
          "code"=>"113011"
        ],
        [
          "category_name"=>"machinist",
          "code"=>"514041"
        ],
        [
          "category_name"=>"magistrate judge",
          "code"=>"231021"
        ],
        [
          "category_name"=>"magistrate",
          "code"=>"231020"
        ],
        [
          "category_name"=>"maid",
          "code"=>"372012"
        ],
        [
          "category_name"=>"mail clerk",
          "code"=>"435051"
        ],
        [
          "category_name"=>"mail machine operator",
          "code"=>"439051"
        ],
        [
          "category_name"=>"mail superintendent",
          "code"=>"113031"
        ],
        [
          "category_name"=>"maintenance painter",
          "code"=>"472141"
        ],
        [
          "category_name"=>"maintenance worker",
          "code"=>"499071"
        ],
        [
          "category_name"=>"makeup artist",
          "code"=>"395091"
        ],
        [
          "category_name"=>"management analyst",
          "code"=>"131111"
        ],
        [
          "category_name"=>"manicurist",
          "code"=>"395092"
        ],
        [
          "category_name"=>"manufactured building installer",
          "code"=>"472211"
        ],
        [
          "category_name"=>"mapping technician",
          "code"=>"173031"
        ],
    
        [
          "category_name"=>"marble setter",
          "code"=>"472044"
        ],
        [
          "category_name"=>"marine engineer",
          "code"=>"172121" 
        ],
        [
          "category_name"=>"marine oiler",
          "code"=>"535011"
        ],
        [
          "category_name"=>"market research analyst",
          "code"=>"131161"
        ],
        [
          "category_name"=>"marketing manager",
          "code"=>"112021"
        ],
        [
          "category_name"=>"marketing specialist",
          "code"=>"131161"
        ],
        [
          "category_name"=>"marriage therapist",
          "code"=>"211013"
        ],
        [
          "category_name"=>"massage therapist",
          "code"=>"319011"
        ],
        [
          "category_name"=>"material mover",
          "code"=>"537062"
        ],
        [
          "category_name"=>"materials engineer",
          "code"=>"172131"
        ],
        [
          "category_name"=>"materials scientist",
          "code"=>"192032"
        ],
        [
          "category_name"=>"mathematical science teacher",
          "code"=>"252021"
        ],
        [
          "category_name"=>"mathematical technician",
          "code"=>"152031"
        ],
        [
          "category_name"=>"mathematician",
          "code"=>"152021"
        ],
        [
          "category_name"=>"maxillofacial surgeon",
          "code"=>"291022"
      ],
        [
          "category_name"=>"measurer",
          "code"=>"435021"
        ],
        [
          "category_name"=>"meat cutter",
          "code"=>"513023"
      ],
        [
          "category_name"=>"meat packer",
          "code"=>"513022"
        ],
        [
          "category_name"=>"mechanical engineer",
          "code"=>172141
        ],
        [
          "category_name"=>"mechanical engineering technician",
          "code"=>173027
        ],
        [
          "category_name"=>"mediator",
          "code"=>231022
        ],
        [
          "category_name"=>"medical appliance technician",
          "code"=>499062
        ],
        [
          "category_name"=>"medical assistant",
          "code"=>319092
        ],
        [
          "category_name"=>"medical equipment preparer",
          "code"=>319093
        ],
        [
          "category_name"=>"medical equipment repairer",
          "code"=>499062
        ],
        [
          "category_name"=>"medical laboratory technician",
          "code"=>292012
        ],
        [
          "category_name"=>"medical laboratory technologist",
          "code"=>292011
        ],
        [
          "category_name"=>"medical records technician",
          "code"=>292071
        ],
        [
          "category_name"=>"medical scientist",
          "code"=>191042
        ],
        [
          "category_name"=>"medical secretary",
          "code"=>436013
        ],
        [
          "category_name"=>"medical services manager",
          "code"=>119111
        ],
        [
          "category_name"=>"medical transcriptionist",
          "code"=>319094
        ],
        [
          "category_name"=>"meeting planner",
          "code"=>131121
        ],
        [
          "category_name"=>"mental health counselor",
          "code"=>211014
        ],
        [
          "category_name"=>"mental health social worker",
          "code"=>211023
        ],
        [
          "category_name"=>"merchandise displayer",
          "code"=>271026
        ],
        [
          "category_name"=>"messenger",
          "code"=>435021
        ],
        [
          "category_name"=>"metal caster",
          "code"=>514021
  ],
        [
          "category_name"=>"metal patternmaker",
          "code"=>514061
        ],
        [
          "category_name"=>"metal pickling operator",
          "code"=>519061
        ],
        [
          "category_name"=>"metal pourer",
          "code"=>514022
        ],
        [
          "category_name"=>"metal worker",
          "code"=>519199
        ],
        [
          "category_name"=>"metal-refining furnace operator",
          "code"=>514051
        ],
        [
          "category_name"=>"metal-refining furnace tender",
          "code"=>514051
        ],
        [
          "category_name"=>"meter reader",
          "code"=>435041
        ],
        [
          "category_name"=>"microbiologist",
          "code"=>191022
        ],
        [
          "category_name"=>"middle school teacher",
          "code"=>252022
        ],
        [
          "category_name"=>"milling machine setter",
          "code"=>514041
        ],
        [
          "category_name"=>"millwright",
          "code"=>499044
        ],
        [
          "category_name"=>"mine cutting machine operator",
          "code"=>475041
        ],
        [
          "category_name"=>"mine shuttle car operator",
          "code"=>537111
        ],
        [
          "category_name"=>"mining engineer",
          "code"=>172151
        ],
        [
          "category_name"=>"mining safety engineer",
          "code"=>172151
        ],
        [
          "category_name"=>"mining safety inspector",
          "code"=>333021
        ],
        [
          "category_name"=>"mining service unit operator",
          "code"=>475013
        ],
        [
          "category_name"=>"mixing machine setter",
          "code"=>519023
        ],
        [
          "category_name"=>"mobile heavy equipment mechanic",
          "code"=>493042
        ],
        [
          "category_name"=>"mobile home installer",
          "code"=>474099
        ],
        [
          "category_name"=>"model maker",
          "code"=>519081
        ],
        [
          "category_name"=>"model",
          "code"=>271013
        ],
    
        [
          "category_name"=>"multimedia artist",
          "code"=>271014
        ],
        [
          "category_name"=>"museum technician",
          "code"=>254013
        ],
        [
          "category_name"=>"music director",
          "code"=>272041
        ],
        [
          "category_name"=>"music teacher",
          "code"=>251121
        ],
        [
          "category_name"=>"musical instrument repairer",
          "code"=>499063
        ],
        [
          "category_name"=>"musician",
          "code"=>272042
        ],
        [
          "category_name"=>"natural sciences manager",
          "code"=>119121
        ],
        [
          "category_name"=>"naval architect",
          "code"=>172121
        ],
        [
          "category_name"=>"network systems administrator",
          "code"=>151142
        ],
        [
          "category_name"=>"new accounts clerk",
          "code"=>433041
        ],
        [
          "category_name"=>"news vendor",
          "code"=>412022
        ],
        [
          "category_name"=>"nonfarm animal caretaker",
          "code"=>392021
        ],
        [
          "category_name"=>"nuclear engineer",
          "code"=>172161
        ],
        [
          "category_name"=>"nuclear medicine technologist",
          "code"=>292033
        ],
        [
          "category_name"=>"nuclear power reactor operator",
          "code"=>518011
        ],
        [
          "category_name"=>"nuclear technician",
          "code"=>194051
        ],
        [
          "category_name"=>"nursing aide",
          "code"=>311131
        ],
        [
          "category_name"=>"nursing instructor",
          "code"=>251072
        ],
        [
          "category_name"=>"nursing teacher",
          "code"=>251072
        ],
        [
          "category_name"=>"nutritionist",
          "code"=>291031
        ],
        [
          "category_name"=>"obstetrician",
          "code"=>291064
        ],
        [
          "category_name"=>"occupational health and safety specialist",
          "code"=>299011
        ],
        [
          "category_name"=>"occupational health and safety technician",
          "code"=>299012
        ],
        [
          "category_name"=>"occupational therapist",
          "code"=>291122
  ],
        [
          "category_name"=>"occupational therapy aide",
          "code"=>312012
        ],
        [
          "category_name"=>"occupational therapy assistant",
          "code"=>312011
        ],
        [
          "category_name"=>"offbearer",
          "code"=>537063
        ],
        [
          "category_name"=>"office clerk",
          "code"=>439061
        ],
        [
          "category_name"=>"office machine operator",
          "code"=>439071
        ],
        [
          "category_name"=>"operating engineer",
          "code"=>472073
        ],
        [
          "category_name"=>"operations manager",
          "code"=>111021
        ],
        [
          "category_name"=>"operations research analyst",
          "code"=>152031
        ],
        [
          "category_name"=>"ophthalmic laboratory technician",
          "code"=>292081
        ],
        [
          "category_name"=>"optician",
          "code"=>292081
        ],
        [
          "category_name"=>"optometrist",
          "code"=>291041
        ],
        [
          "category_name"=>"oral surgeon",
          "code"=>291022
        ],
        [
          "category_name"=>"order clerk",
          "code"=>433071
        ],
        [
          "category_name"=>"order filler",
          "code"=>435081
        ],
        [
          "category_name"=>"orderly",
          "code"=>311131
        ],
        [
          "category_name"=>"ordnance handling expert",
          "code"=>537041
        ],
        [
          "category_name"=>"orthodontist",
          "code"=>291023
        ],
        [
          "category_name"=>"orthotist",
          "code"=>292091
        ],
        [
          "category_name"=>"outdoor power equipment mechanic",
          "code"=>493053
        ],
        [
          "category_name"=>"oven operator",
          "code"=>513091
        ],
      
        [
          "category_name"=>"packaging machine operator",
          "code"=>1
        ],
        [
          "category_name"=>"painter",
          "code"=>2
        ],
        [
          "category_name"=>"painting worker",
          "code"=>3
        ],
        [
          "category_name"=>"paper goods machine setter",
          "code"=>4
        ],
        [
          "category_name"=>"paperhanger",
          "code"=>5
        ],
        [
          "category_name"=>"paralegal",
          "code"=>6
        ],
        [
          "category_name"=>"paramedic",
          "code"=>7
        ],
        [
          "category_name"=>"parking enforcement worker",
          "code"=>8
        ],
        [
          "category_name"=>"parking lot attendant",
          "code"=>9
        ],
        [
          "category_name"=>"parts salesperson",
          "code"=>10
        ],
        [
          "category_name"=>"paving equipment operator",
          "code"=>11
        ],
        [
          "category_name"=>"payroll clerk",
          "code"=>12
        ],
        [
          "category_name"=>"pediatrician",
          "code"=>13
        ],
        [
          "category_name"=>"pedicurist",
          "code"=>14
        ],
        [
          "category_name"=>"personal care aide",
          "code"=>15
        ],
        [
          "category_name"=>"personal chef",
          "code"=>16
        ],
        [
          "category_name"=>"personal financial advisor",
          "code"=>17
        ],
        [
          "category_name"=>"personal trainer",
          "code"=>18
        ],
    
        [
          "category_name"=>"pest control worker",
          "code"=>19
        ],
        [
          "category_name"=>"pesticide applicator",
          "code"=>20
        ],
        [
          "category_name"=>"pesticide handler",
          "code"=>21
        ],
        [
          "category_name"=>"pesticide sprayer",
          "code"=>22
        ],
        [
          "category_name"=>"petroleum engineer",
          "code"=>23
        ],
        [
          "category_name"=>"petroleum gauger",
          "code"=>24
        ],
        [
          "category_name"=>"petroleum pump system operator",
          "code"=>25
        ],
        [
          "category_name"=>"petroleum refinery operator",
          "code"=>26
        ],
        [
          "category_name"=>"petroleum technician",
          "code"=>27
        ],
        [
          "category_name"=>"pharmacist",
          "code"=>28
        ],
        [
          "category_name"=>"pharmacy aide",
          "code"=>29
        ],
        [
          "category_name"=>"pharmacy technician",
          "code"=>30
        ],
        [
          "category_name"=>"philosophy teacher",
          "code"=>31
        ],
        [
          "category_name"=>"photogrammetrist",
          "code"=>32
        ],
        [
          "category_name"=>"photographer",
          "code"=>33
        ],
        [
          "category_name"=>"photographic process worker",
          "code"=>34
        ],
        [
          "category_name"=>"photographic processing machine operator",
          "code"=>35
        ],
        [
          "category_name"=>"physical therapist aide",
          "code"=>36
        ],
        [
          "category_name"=>"physical therapist assistant",
          "code"=>37
        ],
        [
          "category_name"=>"physical therapist",
          "code"=>38
        ],
        [
          "category_name"=>"physician assistant",
          "code"=>39
        ],
        [
          "category_name"=>"physician",
          "code"=>40
        ],
        [
          "category_name"=>"physicist",
          "code"=>41
        ],
        [
          "category_name"=>"physics teacher",
          "code"=>42
        ],
        [
          "category_name"=>"pile-driver operator",
          "code"=>43
        ],
        [
          "category_name"=>"pipefitter",
          "code"=>44
        ],
        [
          "category_name"=>"pipelayer",
          "code"=>45
        ],
        [
          "category_name"=>"planing machine operator",
          "code"=>46
        ],
        [
          "category_name"=>"planning clerk",
          "code"=>47
        ],
        [
          "category_name"=>"plant operator",
          "code"=>48
        ],
        [
          "category_name"=>"plant scientist",
          "code"=>49
        ],
        [
          "category_name"=>"plasterer",
          "code"=>50
        ],
        [
          "category_name"=>"plastic patternmaker",
          "code"=>51
        ],
        [
          "category_name"=>"plastic worker",
          "code"=>52
        ],
        [
          "category_name"=>"plumber",
          "code"=>53
        ],
        [
          "category_name"=>"podiatrist",
          "code"=>54
        ],
        [
          "category_name"=>"police dispatcher",
          "code"=>55
        ],
        [
          "category_name"=>"police officer",
          "code"=>56
        ],
        [
          "category_name"=>"policy processing clerk",
          "code"=>57
        ],
        [
          "category_name"=>"political science teacher",
          "code"=>58
        ],
        [
          "category_name"=>"political scientist",
          "code"=>59
        ],
        [
          "category_name"=>"postal service clerk",
          "code"=>60
        ],
        [
          "category_name"=>"postal service mail carrier",
          "code"=>61
        ],
        [
          "category_name"=>"postal service mail processing machine operator",
          "code"=>62
        ],
        [
          "category_name"=>"postal service mail processor",
          "code"=>63
        ],
        [
          "category_name"=>"postal service mail sorter",
          "code"=>64
        ],
        [
          "category_name"=>"postmaster",
          "code"=>65
        ],
        [
          "category_name"=>"postsecondary teacher",
          "code"=>66
        ],
        [
          "category_name"=>"poultry cutter",
          "code"=>67
        ],
        [
          "category_name"=>"poultry trimmer",
          "code"=>68
        ],
        [
          "category_name"=>"power dispatcher",
          "code"=>69
        ],
        [
          "category_name"=>"power distributor",
          "code"=>70
        ],
        [
          "category_name"=>"power plant operator",
          "code"=>71
        ],
        [
          "category_name"=>"power tool repairer",
          "code"=>72
        ],
        [
          "category_name"=>"precious stone worker",
          "code"=>73
        ],
        [
          "category_name"=>"precision instrument repairer",
          "code"=>74
        ],
        [
          "category_name"=>"prepress technician",
          "code"=>75
        ],
        [
          "category_name"=>"preschool teacher",
          "code"=>76
        ],
        [
          "category_name"=>"priest",
          "code"=>77
        ],
        [
          "category_name"=>"print binding worker",
          "code"=>78
        ],
        [
          "category_name"=>"printing press operator",
          "code"=>79
        ],
        [
          "category_name"=>"private detective",
          "code"=>80
        ],
        [
          "category_name"=>"probation officer",
          "code"=>81
        ],
        [
          "category_name"=>"procurement clerk",
          "code"=>82
        ],
        [
          "category_name"=>"producer",
          "code"=>83
        ],
        [
          "category_name"=>"product promoter",
          "code"=>84
        ],
        [
          "category_name"=>"product manager",
          "code"=>85
        ],
      
        [
          "category_name"=>"production clerk",
          "code"=>537061
        ],
        [
          "category_name"=>"production occupation",
          "code"=>510000
        ],
        [
          "category_name"=>"proofreader",
          "code"=>439081
        ],
        [
          "category_name"=>"property manager",
          "code"=>119141
        ],
        [
          "category_name"=>"prosthetist",
          "code"=>292099
        ],
        [
          "category_name"=>"prosthodontist",
          "code"=>291024
        ],
        [
          "category_name"=>"psychiatric aide",
          "code"=>311013
        ],
        [
          "category_name"=>"psychiatric technician",
          "code"=>292053
        ],
        [
          "category_name"=>"psychiatrist",
          "code"=>291066
        ],
        [
          "category_name"=>"psychologist",
          "code"=>193031
        ],
        [
          "category_name"=>"psychology teacher",
          "code"=>251066
        ],
        [
          "category_name"=>"public relations manager",
          "code"=>112031
        ],
        [
          "category_name"=>"public relations specialist",
          "code"=>273031
        ],
        [
          "category_name"=>"pump operator",
          "code"=>537072
        ],
        [
          "category_name"=>"purchasing agent",
          "code"=>131023
        ],
        [
          "category_name"=>"purchasing manager",
          "code"=>113061
        ],
        [
          "category_name"=>"radiation therapist",
          "code"=>291124
        ],
        [
          "category_name"=>"radio announcer",
          "code"=>273012
        ],
        [
          "category_name"=>"radio equipment installer",
          "code"=>492021
        ],
        [
          "category_name"=>"radio operator",
          "code"=>274013
        ],
        [
          "category_name"=>"radiologic technician",
          "code"=>292034
        ],
        [
          "category_name"=>"radiologic technologist",
          "code"=>292034
        ],
        [
          "category_name"=>"rail car repairer",
          "code"=>493043
        ],
        [
          "category_name"=>"rail transportation worker",
          "code"=>534000
        ],
        [
          "category_name"=>"rail yard engineer",
          "code"=>534041
        ],
        [
          "category_name"=>"rail-track laying equipment operator",
          "code"=>474061
        ],
        [
          "category_name"=>"railroad brake operator",
          "code"=>534011
        ],
        [
          "category_name"=>"railroad conductor",
          "code"=>534031
        ],
        [
          "category_name"=>"railroad police",
          "code"=>333052
        ],
        [
          "category_name"=>"rancher",
          "code"=>119013
        ],
        [
          "category_name"=>"real estate appraiser",
          "code"=>132021
        ],
        [
          "category_name"=>"real estate broker",
          "code"=>419021
        ],
        [
          "category_name"=>"real estate manager",
          "code"=>119141
        ],
        [
          "category_name"=>"real estate sales agent",
          "code"=>419022
        ],
        [
          "category_name"=>"receiving clerk",
          "code"=>435081
        ],
        [
          "category_name"=>"receptionist",
          "code"=>434171
        ],
        [
          "category_name"=>"record clerk",
          "code"=>434199
        ],
        [
          "category_name"=>"recreation teacher",
          "code"=>253021
        ],
        [
          "category_name"=>"recreation worker",
          "code"=>399032
        ],
        [
          "category_name"=>"recreational therapist",
          "code"=>291125
        ],
        [
  "category_name"=>"recreational vehicle service technician",
          "code"=>493092
        ],
        [
          "category_name"=>"recyclable material collector",
          "code"=>537081
        ],
        [
          "category_name"=>"referee",
          "code"=>272023
        ],
        [
          "category_name"=>"refractory materials repairer",
          "code"=>474061
        ],
        [
          "category_name"=>"refrigeration installer",
          "code"=>499021
        ],
        [
          "category_name"=>"refrigeration mechanic",
          "code"=>499021
        ],
        [
          "category_name"=>"refuse collector",
          "code"=>537081
        ],
        [
          "category_name"=>"regional planner",
          "code"=>193051
        ],
        [
          "category_name"=>"registered nurse",
          "code"=>291141
        ],
        [
          "category_name"=>"rehabilitation counselor",
          "code"=>211015
        ],
        [
          "category_name"=>"reinforcing iron worker",
          "code"=>472171
        ],
        [
          "category_name"=>"reinforcing rebar worker",
          "code"=>472171
        ],
        [
          "category_name"=>"religion teacher",
          "code"=>251126
        ],
        [
          "category_name"=>"religious activities director",
          "code"=>212011
        ],
        [
          "category_name"=>"religious worker",
          "code"=>212099
        ],
        [
          "category_name"=>"rental clerk",
          "code"=>434141
        ],
        [
          "category_name"=>"repair worker",
          "code"=>499099
        ],
        [
          "category_name"=>"reporter",
          "code"=>273022
        ],
        [
          "category_name"=>"residential advisor",
          "code"=>399041
        ],
        [
          "category_name"=>"resort desk clerk",
          "code"=>434081
        ],
        [
          "category_name"=>"respiratory therapist",
          "code"=>291126
        ],
        [
          "category_name"=>"respiratory therapy technician",
          "code"=>292054
        ],
        [
          "category_name"=>"retail buyer",
          "code"=>131022
        ],
        [
          "category_name"=>"retail salesperson",
          "code"=>412031
        ],
        [
          "category_name"=>"revenue agent",
          "code"=>132081
        ],
        [
          "category_name"=>"rigger",
          "code"=>499098
        ],
        [
          "category_name"=>"rock splitter",
          "code"=>473011
        ],
        [
          "category_name"=>"rolling machine tender",
          "code"=>514021
        ],
        [
          "category_name"=>"roof bolter",
          "code"=>475081
        ],
        [
          "category_name"=>"roofer",
          "code"=>472181
        ],
      
              [
          "category_name"=>"Social Science Research Assistant",
          "code"=>190610
        ],
        [
          "category_name"=>"Social Sciences Teacher",
          "code"=>251066
        ],
        [
          "category_name"=>"Social Scientist",
          "code"=>193099
        ],
        [
          "category_name"=>"Social Service Assistant",
          "code"=>211093
        ],
        [
          "category_name"=>"Social Service Manager",
          "code"=>119151
        ],
        [
          "category_name"=>"Social Work Teacher",
          "code"=>251113
        ],
        [
          "category_name"=>"Social Worker",
          "code"=>211029
        ],
        [
          "category_name"=>"Sociologist",
          "code"=>193099
        ],
        [
          "category_name"=>"Sociology Teacher",
          "code"=>251067
        ],
        [
          "category_name"=>"Software Developer",
          "code"=>151252
        ],
        [
          "category_name"=>"Software Engineer",
          "code"=>151256
        ],
        [
          "category_name"=>"Soil Scientist",
          "code"=>191013
        ],
        [
          "category_name"=>"Solderer",
          "code"=>514121
        ],
        [
          "category_name"=>"Sorter",
          "code"=>435052
        ],
        [
          "category_name"=>"Sound Engineering Technician",
          "code"=>274014
        ],
        [
          "category_name"=>"Space Scientist",
          "code"=>192021
        ],
        [
          "category_name"=>"Special Education Teacher",
          "code"=>252059
        ],
  [
          "category_name"=>"Speech-Language Pathologist",
          "code"=>291127
        ],
        [
          "category_name"=>"Sports Book Runner",
          "code"=>433021
        ],
        [
          "category_name"=>"Sports Entertainer",
          "code"=>272099
        ],
        [
          "category_name"=>"Sports Performer",
          "code"=>272021
        ],
        [
          "category_name"=>"Stationary Engineer",
          "code"=>518021
        ],
        [
          "category_name"=>"Statistical Assistant",
          "code"=>152051
        ],
              
              [
          "category_name"=>"Teacher Assistant",
          "code"=>259041
        ],
        [
          "category_name"=>"Teacher",
          "code"=>252000
        ],
        [
          "category_name"=>"Team Assembler",
          "code"=>517011
        ],
        [
          "category_name"=>"Technical Writer",
          "code"=>273042
        ],
        [
          "category_name"=>"Telecommunications Equipment Installer",
          "code"=>499052
        ],
        [
          "category_name"=>"Telemarketer",
          "code"=>419041
        ],
        [
          "category_name"=>"Telephone Operator",
          "code"=>433041
        ],
        [
          "category_name"=>"Television Announcer",
          "code"=>271012
        ],
        [
          "category_name"=>"Teller",
          "code"=>433053
        ],
        [
          "category_name"=>"Terrazzo Finisher",
          "code"=>472053
        ],
        [
          "category_name"=>"Terrazzo Worker",
          "code"=>472022
        ],
        [
          "category_name"=>"Tester",
          "code"=>519032
        ],
        [
          "category_name"=>"Textile Bleaching Operator",
          "code"=>519041
        ],
        [
          "category_name"=>"Textile Cutting Machine Setter",
          "code"=>519062
        ],
        [
          "category_name"=>"Textile Knitting Machine Setter",
          "code"=>519061
        ],
        [
          "category_name"=>"Textile Presser",
          "code"=>516011
        ],
        [
          "category_name"=>"Textile Worker",
          "code"=>519099
        ],
        [
          "category_name"=>"Therapist",
          "code"=>291125
        ],
        [
          "category_name"=>"Ticket Agent",
          "code"=>435031
        ],
        [
          "category_name"=>"Ticket Taker",
          "code"=>439021
        ],
        [
          "category_name"=>"Tile Setter",
          "code"=>472044
        ],
        [
          "category_name"=>"Timekeeping Clerk",
          "code"=>433051
        ],
        [
          "category_name"=>"Timing Device Assembler",
          "code"=>512041
        ],
        [
          "category_name"=>"Tire Builder",
          "code"=>515011
        ],
        [
          "category_name"=>"Tire Changer",
          "code"=>848021
        ],
        [
          "category_name"=>"Tire Repairer",
          "code"=>499043
        ],
        [
          "category_name"=>"Title Abstractor",
          "code"=>433061
        ],
        [
          "category_name"=>"Title Examiner",
          "code"=>433061
        ],
        [
          "category_name"=>"Title Searcher",
          "code"=>433061
        ],
        [
          "category_name"=>"Tobacco Roasting Machine Operator",
          "code"=>519091
        ],
        [
          "category_name"=>"Tool Filer",
          "code"=>518041
        ],
        [
          "category_name"=>"Tool Grinder",
          "code"=>518041
        ],
        [
          "category_name"=>"Tool Maker",
          "code"=>514041
        ],
        [
          "category_name"=>"Tool Sharpener",
          "code"=>518041
        ],
        [
          "category_name"=>"Tour Guide",
          "code"=>413021
        ],
        [
          "category_name"=>"Tower Equipment Installer",
          "code"=>499052
        ],
        [
          "category_name"=>"Tower Operator",
          "code"=>518099
        ],
        [
          "category_name"=>"Track Switch Repairer",
          "code"=>499045
        ],
        [
          "category_name"=>"Tractor Operator",
          "code"=>452031
        ],
        [
          "category_name"=>"Tractor-Trailer Truck Driver",
          "code"=>533032
        ],
        [
          "category_name"=>"Traffic Clerk",
          "code"=>435071
        ],
        [
           "category_name"=>"Traffic Technician",
          "code"=>532021
        ],
              
      
      [
        
          "category_name"=>"Typist",
          "code"=>439021
        ],
        [
          "category_name"=>"Umpire",
          "code"=>272022
        ],
        [
          "category_name"=>"Undertaker",
          "code"=>319099
        ],
        [
          "category_name"=>"Upholsterer",
          "code"=>514121
        ],
        [
          "category_name"=>"Urban Planner",
          "code"=>193051
        ],
        [
          "category_name"=>"Usher",
          "code"=>439021
        ],
        [
          "category_name"=>"UX Designer",
          "code"=>271024
        ],
        [
          "category_name"=>"Valve Installer",
          "code"=>472111
        ],
        [
          "category_name"=>"Vending Machine Servicer",
          "code"=>499071
        ],
        [
          "category_name"=>"Veterinarian",
          "code"=>291131
        ],
        [
          "category_name"=>"Veterinary Assistant",
          "code"=>319092
        ],
        [
          "category_name"=>"Veterinary Technician",
          "code"=>292056
        ],
        [
          "category_name"=>"Vocational Counselor",
          "code"=>211013
        ],
        [
          "category_name"=>"Vocational Education Teacher",
          "code"=>252022
        ],
        [
          "category_name"=>"Waiter",
          "code"=>353031
        ],
        [
          "category_name"=>"Waitress",
          "code"=>353031
        ],
        [
          "category_name"=>"Watch Repairer",
          "code"=>493011
        ],
        [
          "category_name"=>"Water Treatment Plant Operator",
          "code"=>519093
        ],
        [
          "category_name"=>"Weaving Machine Setter",
          "code"=>519061
        ],
        [
          "category_name"=>"Web Developer",
          "code"=>151254
        ],
        [
          "category_name"=>"Weigher",
          "code"=>435111
        ],
        [
          "category_name"=>"Welder",
          "code"=>514121
        ],
        [
          "category_name"=>"Wellhead Pumper",
          "code"=>534021
        ],
        [
          "category_name"=>"Wholesale Buyer",
          "code"=>131023
        ],
        [
          "category_name"=>"Wildlife Biologist",
          "code"=>191023
        ],
        [
          "category_name"=>"Window Trimmer",
          "code"=>271025
        ],
        [
          "category_name"=>"Wood Patternmaker",
          "code"=>517011
        ],
        [
          "category_name"=>"Woodworker",
          "code"=>517011
        ],
        [
          "category_name"=>"Word Processor",
          "code"=>439021
        ],
        [
          "category_name"=>"Writer",
          "code"=>273043
        ],
      
              [
      "category_name"=>"Yardmaster",
      "code"=>532053
      ],
      [
      "category_name"=>"Zoologist",
      "code"=>191023
      ],
];
        $new = [];
        foreach($categories as $skill) {
          $cat = [];
          $cat['category_name'] = $skill['category_name'];
          $cat['category_group_id'] = $categoryGroup;
          $cat['user_id'] = $user;
          $new[] = $cat;
        }
        Categories::insert($new);
    }
    }
    

