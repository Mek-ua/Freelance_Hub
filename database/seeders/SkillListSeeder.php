<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  App\Models\Skill_lists;
use App\Models\Skill_groups;
use  App\Models\User;

class SkillListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('skill_lists')->truncate();
        $isExist = Skill_lists::exists();
        if($isExist) return;

        $user = User::whereHas('role', function($query) {
          $query->where('type', 1);
        })->first()['id'];
  
        $skillGroupId = Skill_groups::first()['id'];

        $skills =

        [
          [
            "skill_name"=> "Communication Skills",
            "code"=> "COMM"

          ],
          [
            "skill_name"=> "Problem-Solving Skills",
            "code"=> "PRBM"
          ],
          [
            "skill_name"=> "Creativity",
            "code"=> "CRTY"
          ],
          [
            "skill_name"=> "Teamwork",
            "code"=> "TEAM"
          ],
          [
            "skill_name"=> "Leadership",
            "code"=> "LEAD"
          ],
          [
            "skill_name"=> "Analytical Skills",
            "code"=> "ANLY"
          ],
          [
            "skill_name"=> "Organizational Skills",
            "code"=> "ORGN"
          ],
          [
            "skill_name"=> "Technical Skills",
            "code"=> "TECH"
          ],
          [
            "skill_name"=> "Adaptability",
            "code"=> "ADPT"
          ],
          [
            "skill_name"=> "Innovation",
            "code"=> "INNO"
          ],
          [
            "skill_name"=> "Decision-Making Skills",
            "code"=> "DECS"
          ],
          [
            "skill_name"=> "Computer/IT Skills",
            "code"=> "CMPT"
          ],
          [
            "skill_name"=> "Language Skills",
            "code"=> "LANG"
          ],
          [
            "skill_name"=> "Research Skills",
            "code"=> "RSRH"
          ],
          [
            "skill_name"=> "Project Management",
            "code"=> "PRJM"
          ],
          [
            "skill_name"=> "Critical Thinking",
            "code"=> "CRTC"
          ],
          [
            "skill_name"=> "Relationship Building",
            "code"=> "RILT"
          ],
          [
            "skill_name"=> "Empathy",
            "code"=> "EMPY"
          ],
          [
            "skill_name"=> "Flexibility",
            "code"=> "FLXB"
          ],
          [
            "skill_name"=> "Integrity",
            "code"=> "INTG"
          ],
          [
            "skill_name"=> "Stress Management",
            "code"=> "STRS"
          ],
          [
            "skill_name"=> "Multitasking",
            "code"=> "MLTI"
          ],
          [
            "skill_name"=> "Adversity Management",
            "code"=> "ADVS"
          ],
          [
            "skill_name"=> "Focus",
            "code"=> "FOCS"
          ],
          [
            "skill_name"=> "Perseverance",
            "code"=> "PRSR"
          ],
          [
            "skill_name"=> "Digital Literacy",
            "code"=> "DGTL"
          ],
          [
            "skill_name"=> "Collaboration",
            "code"=> "COLL"
          ],
          [
            "skill_name"=> "Mechanical Skills",
            "code"=> "MCHN"
          ],
          [
            "skill_name"=> "Design Skills",
            "code"=> "DESG"
          ],
          [
            "skill_name"=> "Mathematical Skills",
            "code"=> "MATH"
          ],
          [
            "skill_name"=> "Scientific Skills",
            "code"=> "SCNC"
          ],
          [
            "skill_name"=> "Medical Skills",
            "code"=> "MDCL"
          ],
          [
            "skill_name"=> "Translational Skills",
            "code"=> "TRNS"
          ],
          [
            "skill_name"=> "Business Skills",
            "code"=> "BSNS"
          ],
          [
            "skill_name"=> "Marketing Skills",
            "code"=> "MRKT"
          ],
          [
            "skill_name"=> "Financial Skills",
            "code"=> "FINC"
          ],
          [
            "skill_name"=> "Legal Skills",
            "code"=> "LEGL"
          ],
          [
            "skill_name"=> "Educational Skills",
            "code"=> "EDUC"
          ],
          [
            "skill_name"=> "Social Skills",
            "code"=> "SOCI"
          ],
          [
            "skill_name"=> "Artistic Skills",
            "code"=> "ARTS"
          ],
        [
        "code"=> "MDIA",
        "skill_name"=> "Media Skills"
        ],
        [
        "code"=> "MNTL",
        "skill_name"=> "Mental Health Skills"
        ],
        [
        "code"=> "PHYS",
        "skill_name"=> "Physical Skills"
        ],
        [
        "code"=> "SPRT",
        "skill_name"=> "Sports Skills"
        ],
        [
        "code"=> "TCHL",
        "skill_name"=> "Teaching Skills"
        ],
        [
        "code"=> "RLGN",
        "skill_name"=> "Religious Skills"
        ],
        [
        "code"=> "CULR",
        "skill_name"=> "Cultural Skills"
        ],
        [
        "code"=> "ENVR",
        "skill_name"=> "Environmental Skills"
        ],
        [
        "code"=> "SUST",
        "skill_name"=> "Sustainability Skills"
        ],
        [
        "code"=> "GOVR",
        "skill_name"=> "Governmental Skills"
        ],
        [
        "code"=> "HRCS",
        "skill_name"=> "Human Resources Skills"
        ],
        [
        "code"=> "SEFT",
        "skill_name"=> "Self-Management Skills"
        ],
        [
        "code"=> "ETQT",
        "skill_name"=> "Etiquette Skills"
        ],
        [
        "code"=> "NURS",
        "skill_name"=> "Nursing Skills"
        ],
        [
        "code"=> "PRFT",
        "skill_name"=> "Professionalism"
        ],
        [
        "code"=> "WRIT",
        "skill_name"=> "Writing Skills"
        ],
        [
        "code"=> "PRES",
        "skill_name"=> "Presentation Skills"
        ],
        [
        "code"=> "NEGS",
        "skill_name"=> "Negotiation Skills"
        ],
        [
        "code"=> "CUST",
        "skill_name"=> "Customer Service Skills"
        ],
        [
        "code"=> "SELL",
        "skill_name"=> "Sales Skills"
        ],
        [
        "code"=> "OPER",
        "skill_name"=> "Operations Skills"
        ],
        [
        "code"=> "VSTC",
        "skill_name"=> "Visionary Thinking"
        ],
        [
        "code"=> "PLNG",
        "skill_name"=> "Planning Skills"
        ],
        [
        "code"=> "ASST",
        "skill_name"=> "Administrative Support"
        ],
        [
        "code"=> "TASK",
        "skill_name"=> "Task Management"
        ],
        [
        "code"=> "SMRT",
        "skill_name"=> "Strategic Thinking"
        ],
        [
        "code"=> "MNGT",
        "skill_name"=> "Management Skills"
        ],
        [
        "code"=> "PSYC",
        "skill_name"=> "Psychology Skills"
        ],
        [
        "code"=> "ACCT",
        "skill_name"=> "Accounting Skills"
        ],
        [
        "code"=> "ENGR",
        "skill_name"=> "Engineering Skills"
        ],
        [
        "code"=> "INVT",
        "skill_name"=> "Inventiveness"
        ],
        [
        "code"=> "QULT",
        "skill_name"=> "Quality Assurance"
        ],
        [
        "code"=> "TRDN",
        "skill_name"=> "Trades Skills"
        ],
        [
        "code"=> "MNFT",
        "skill_name"=> "Manufacturing Skills"
        ],
        [
        "code"=> "UXUI",
        "skill_name"=> "UX/UI Design"
        ],
        [
        "code"=> "MOBL",
        "skill_name"=> "Mobile Development"
        ],
        [
        "code"=> "GAME",
        "skill_name"=> "Game Development"
        ],
        [
        "code"=> "BIOM",
        "skill_name"=> "Biomedical Skills"
        ],
        [
        "code"=> "INTR",
        "skill_name"=> "Interpersonal Skills"
        ],
        [
        "code"=> "BRND",
        "skill_name"=> "Branding Skills"
        ],
        [
        "code"=> "ANLT",
        "skill_name"=> "Analytics Skills"
        ],
        [
        "code"=> "CRFT",
        "skill_name"=> "Craftsmanship"
        ],
        [
        "code"=> "EQMT",
        "skill_name"=> "Equipment Operation"
        ],
        [
        "code"=> "OTRS",
        "skill_name"=> "Outdoor Skills"
        ],
        [
        "code"=> "FRNS",
        "skill_name"=> "Forensic Skills"
        ],
        [
        "code"=> "CRML",
        "skill_name"=> "Criminal Justice Skills"
        ],
        [
        "code"=> "AVTN",
        "skill_name"=> "Aviation Skills"
        ],
        [
        "code"=> "NSRV",
        "skill_name"=> "Navigation and Surveying"
        ],
        [
        "code"=> "AGRC",
        "skill_name"=> "Agricultural Skills"
        ],
        [
        "code"=> "HRTC",
        "skill_name"=> "Horticulture Skills"
        ],
        [
        "code"=> "FOOD",
        "skill_name"=> "Culinary Skills"
        ],
        [
        "code"=> "HVAC",
        "skill_name"=> "HVAC Skills"
        ],
        [
        "code"=> "PLMB",
        "skill_name"=> "Plumbing Skills"
        ],
        [
        "code"=> "ELCT",
        "skill_name"=> "Electrical Skills"
        ],
        [
        "code"=> "CNST",
        "skill_name"=> "Construction Skills"
        ],
        [
        "code"=> "TRSP",
        "skill_name"=> "Transportation Skills"
        ],
        [
        "code"=> "LOCS",
        "skill_name"=> "Logistics Skills"
        ],
        [
        "code"=> "SUST",
        "skill_name"=> "Sustainability Skills"
        ],
        [
        "code"=> "GVRN",
        "skill_name"=> "Governance Skills"
        ],
        [
        "code"=> "HUMR",
        "skill_name"=> "Human Resources Skills"
        ],
        [
        "code"=> "SRVC",
        "skill_name"=> "Service Skills"
        ],
        [
        "code"=> "LEIT",
        "skill_name"=> "Leadership and Influence"
        ],
        [
        "code"=> "ASES",
        "skill_name"=> "Asset and Security"
        ],
        [
        "code"=> "FINA",
        "skill_name"=> "Financial Management"
        ],
        [
        "code"=> "PRJC",
        "skill_name"=> "Project Coordination"
        ],
        [
        "code"=> "MNIE",
        "skill_name"=> "Mining and Exploration"
        ],
        [
        "code"=> "ENRG",
        "skill_name"=> "Energy and Utilities"
        ],
        [
        "code"=> "LEIS",
        "skill_name"=> "Leisure and Hospitality"
        ],
        [
        "code"=> "HLTH",
        "skill_name"=> "Healthcare Skills"
        ],
        [
        "code"=> "EDUC",
        "skill_name"=> "Education and Training"
        ],
        [
        "code"=> "GVRN",
        "skill_name"=> "Government and Public Admin"
        ],
        [
        "code"=> "SCNC",
        "skill_name"=> "Science and Research"
        ],
        [
        "code"=> "TECH",
        "skill_name"=> "Information Technology"
        ],
        [
        "code"=> "ARTS",
        "skill_name"=> "Arts, Design, and Media"
        ],
        [
        "code"=> "BSNS",
        "skill_name"=> "Business and Finance"
        ],
        [
        "code"=> "HUMN",
        "skill_name"=> "Human Services"
        ],
        [
        "code"=> "TRDE",
        "skill_name"=> "Trades and Production"
        ],
        [
        "code"=> "AGRV",
        "skill_name"=> "Agriculture and Natural Resources"
        ]
        ];   

        $new = [];
        foreach($skills as $skill) {
          $skillList = [];
          $skillList['skill_name'] = $skill['skill_name'];
          $skillList['skill_group_id'] = $skillGroupId;
          $skillList['user_id'] = $user;
          $new[] = $skillList;
        }

        Skill_lists::insert($new);
    }
}
