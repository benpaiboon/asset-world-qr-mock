<?php 
  
  function getUsersFromLdap($ldapObj, $empId=''){
    // LDAP variables
    // $ldaphost = "10.1.230.21"; 
    // $ldapport = 389;                
    // $ldap_username = "kanitsorn.p@assetworld.co.th";
    // $ldap_password = "Awc@2018";

    if($empId == '') $empId = '*';  // $empId = samAccountName

    $ldaphost = $ldapObj['ldap_host']; 
    $ldapport = $ldapObj['ldap_port'];                
    $ldap_username = $ldapObj['ldap_username'];
    $ldap_password = $ldapObj['ldap_password'];
    $base_dn = $ldapObj['ldap_base_dn'];

    // Connecting to LDAP
    $ldapconn = ldap_connect($ldaphost, $ldapport)
                  or die("Could not connect to $ldaphost");

    if (FALSE === $ldapconn){
        // Uh-oh, something is wrong...
    }

    // We have to set this option for the version of Active Directory we are using.
    ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3) or die('Unable to set LDAP protocol version');
    ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0); // We need this for doing an LDAP search.

    if (TRUE === ldap_bind($ldapconn, $ldap_username, $ldap_password)){
        $ldap_base_dn = "$base_dn";
        $search_filter = "(&(objectCategory=Person)(samAccountName=$empId))";
        $attributes = array();
        $attributes[] = 'samaccountname';
        $attributes[] = 'sn';
        $attributes[] = 'givenname';
        $attributes[] = 'title';
        $attributes[] = 'department';
        $attributes[] = 'telephonenumber';
        $attributes[] = 'mobile';
        $attributes[] = 'facsimiletelephonenumber';
        $attributes[] = 'mail';
        $attributes[] = 'company';
        $attributes[] = 'wwwhomepage';
        $attributes[] = 'thumbnailphoto';
        $attributes[] = 'ipphone';
        $attributes[] = 'physicaldeliveryofficename';
        $attributes[] = 'streetaddress';
        $attributes[] = 'st';
        $attributes[] = 'l';
        $attributes[] = 'postalcode';
        $attributes[] = 'co';

        $result = ldap_search($ldapconn, $ldap_base_dn, $search_filter, $attributes);
        if (FALSE !== $result){
            $entries = ldap_get_entries($ldapconn, $result);
            for ($x=0; $x<$entries['count']; $x++){
              if($entries[$x]['ipphone'][0] == 1){
                $address = $entries[$x]['physicaldeliveryofficename'][0];
              }
              else{
                $address = $entries[$x]['streetaddress'][0].", ".$entries[$x]['st'][0]." ".$entries[$x]['l'][0]." ".$entries[$x]['postalcode'][0]." ".$entries[$x]['co'][0];
              }
              if (!empty($entries[$x]['samaccountname'][0]) &&
                  !empty($entries[$x]['sn'][0]) &&
                  !empty($entries[$x]['givenname'][0]) &&
                  !empty($entries[$x]['title'][0]) &&
                  !empty($entries[$x]['department'][0]) &&
                  !empty($entries[$x]['telephonenumber'][0]) &&
                  !empty($entries[$x]['mail'][0]) &&
                  !empty($entries[$x]['company'][0]) &&
                  !empty($entries[$x]['wwwhomepage'][0]) &&
                  !empty($entries[$x]['mobile'][0]) &&
                  !empty($entries[$x]['facsimiletelephonenumber'][0]) &&
                  !empty($entries[$x]['thumbnailphoto'][0]) &&
                  !empty($entries[$x]['ipphone'][0]) &&
                  'Shop' !== $entries[$x]['sn'][0] &&
                  'Account' !== $entries[$x]['sn'][0]){

                    // Inti Data into Array
                    $ad_users[strtoupper(trim($entries[$x]['samaccountname'][0]))] = array(
                      'staffid' => trim($entries[$x]['samaccountname'][0]),
                      'nameth' => trim($entries[$x]['sn'][0]),
                      'nameen' => trim($entries[$x]['givenname'][0]),
                      'position' => trim($entries[$x]['title'][0]),
                      'department' => trim($entries[$x]['department'][0]),
                      'tel' => trim($entries[$x]['telephonenumber'][0]),
                      'email' => strtolower(trim($entries[$x]['mail'][0])),
                      'company' => trim($entries[$x]['company'][0]),
                      'website' => trim($entries[$x]['wwwhomepage'][0]),
                      'mobile' => trim($entries[$x]['mobile'][0]),
                      'fax' => trim($entries[$x]['facsimiletelephonenumber'][0]),
                      'photo' => trim($entries[$x]['thumbnailphoto'][0]),
                      'address' => $address           
                    );
              }
            }
        }
        ldap_unbind($ldapconn); // Clean up after ourselves.
    }

    // $message .= "Retrieved ". count($ad_users) ." Active Directory users\n";
    // echo $message;

    // var_dump ($ad_users);
    return $ad_users;

  }

?>