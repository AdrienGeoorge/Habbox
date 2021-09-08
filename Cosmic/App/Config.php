<?php
namespace App;

use App\Models\Core;

class Config
{    
   /**
     * Client settings
     */
    
    /* Example external_base: = "gordon/PRODUCTION-201904011212-888653470" */
    
    const client = [
      "client_radio"                => "https://icecast.skyrock.net/s/parisidf_aac_128k",
      "nitro_path"                  => "https://habbox.fr/client/"
    ];
  
    /**
     * Website settings
     * recaptcha v2: Create a inisible reCAPTCHA V2 @google website
     * Set null if you dont want a reCAPTCHA.
     */

    const site = [
      "domain"      => "https://habbox.fr",
      "cpath"       => "https://habbox.fr/nitro",
      "fpath"       => "https://images.habbox.fr/habbox-imaging",
      "gpath"       => "https://habbox.fr/habbo-imaging",
      "shortname"   => "Habbox",
      "sitename"    => "Habbox"
    ];
      
    const language = "FR";
    const region = "Europe/Amsterdam";
    const SECRET_TOKEN = "COSMIC-shdl3w5rvb4ef141spbed";

  
    /**
     * Mail: For sending emails when someone has forgotten their password
     */
  
    const mailHost      = "smtp.office365.com";
    const mailFrom      = "habbox-hotel@outlook.fr";
    const mailUser      = "habbox-hotel@outlook.fr";
    const mailPass      = "habboxhotel0294";
    const mailPort      = 587;

    /**
     * Register: Basic looks user can choose when they create an account
     * param @array
     */

    const look = array(
        "male" => array(
            "hr-802-37.hd-185-1.ch-804-82.lg-280-73.sh-3068-1408-1408.wa-2001",
            "hr-893-36.hd-208-8.ch-225-73.lg-270-64.sh-300-64.ea-1406.wa-2001",
            "hr-170-35.hd-190-10.ch-267-72.lg-3290-64.sh-3068-1408-72.cp-3125-64",
            "hr-125-31.hd-209-14.ch-3030-64.lg-275-64.sh-295-64.ha-1020.fa-1201",
            "hr-125-31.hd-209-14.ch-3030-64.lg-275-64.sh-295-64.ha-1020.fa-1201"
        ),
        "female" => array(
            "hr-890-35.hd-629-8.ch-665-76.lg-696-76.sh-730-64.ha-1003-64",
            "hr-890-37.hd-605-8.ch-650-76.lg-715-76.sh-907-71.he-3274-71.fa-3276-1408.ca-1812.wa-2008",
            "hr-545-45.hd-600-14.ch-650-76.lg-696-64.sh-907-76.he-1602-1408.wa-3210-1408-1408",
            "hr-890-42.hd-625-14.ch-3113-75-64.lg-720-64.sh-3115-75-64.he-1605-74",
            "hr-890-42.hd-625-14.ch-3113-75-64.lg-720-64.sh-3115-75-64.he-1605-74"
         )
    );
  
    /* DONT CHANGE  */
    const apiEnabled = true;
    const debug = true;
    const vpnLocation = "/../ASN.mmdb";
}


