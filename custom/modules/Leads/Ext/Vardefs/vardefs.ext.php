<?php 
 //WARNING: The contents of this file are auto-generated


// SuiteEstate — Leads Extension Fields
$dictionary['Lead']['fields']['lead_type_c'] = array(
    'name' => 'lead_type_c',
    'vname' => 'LBL_LEAD_TYPE_C',
    'type' => 'enum',
    'options' => 'se_lead_type_dom',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['budget_range_c'] = array(
    'name' => 'budget_range_c',
    'vname' => 'LBL_BUDGET_RANGE_C',
    'type' => 'varchar',
    'len' => '100',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['preferred_area_c'] = array(
    'name' => 'preferred_area_c',
    'vname' => 'LBL_PREFERRED_AREA_C',
    'type' => 'varchar',
    'len' => '100',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['preferred_property_type_c'] = array(
    'name' => 'preferred_property_type_c',
    'vname' => 'LBL_PREF_PROP_TYPE_C',
    'type' => 'enum',
    'options' => 'se_property_type_dom',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['preferred_bedrooms_c'] = array(
    'name' => 'preferred_bedrooms_c',
    'vname' => 'LBL_PREF_BEDS_C',
    'type' => 'int',
    'len' => '11',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['buying_timeline_c'] = array(
    'name' => 'buying_timeline_c',
    'vname' => 'LBL_BUYING_TIMELINE_C',
    'type' => 'varchar',
    'len' => '100',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['lead_temperature_c'] = array(
    'name' => 'lead_temperature_c',
    'vname' => 'LBL_LEAD_TEMP_C',
    'type' => 'enum',
    'options' => 'se_lead_temp_dom',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['lead_score_c'] = array(
    'name' => 'lead_score_c',
    'vname' => 'LBL_LEAD_SCORE_C',
    'type' => 'int',
    'len' => '11',
    'default' => '0',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['pre_approved_c'] = array(
    'name' => 'pre_approved_c',
    'vname' => 'LBL_PRE_APPROVED_C',
    'type' => 'bool',
    'default' => '0',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['financing_status_c'] = array(
    'name' => 'financing_status_c',
    'vname' => 'LBL_FINANCING_C',
    'type' => 'enum',
    'options' => 'se_financing_dom',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['last_property_viewed_c'] = array(
    'name' => 'last_property_viewed_c',
    'vname' => 'LBL_LAST_PROP_VIEWED_C',
    'type' => 'varchar',
    'len' => '255',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['properties_viewed_count_c'] = array(
    'name' => 'properties_viewed_count_c',
    'vname' => 'LBL_PROPS_VIEWED_C',
    'type' => 'int',
    'len' => '11',
    'default' => '0',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['email_consent_c'] = array(
    'name' => 'email_consent_c',
    'vname' => 'LBL_EMAIL_CONSENT_C',
    'type' => 'bool',
    'default' => '0',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['sms_consent_c'] = array(
    'name' => 'sms_consent_c',
    'vname' => 'LBL_SMS_CONSENT_C',
    'type' => 'bool',
    'default' => '0',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['whatsapp_consent_c'] = array(
    'name' => 'whatsapp_consent_c',
    'vname' => 'LBL_WHATSAPP_CONSENT_C',
    'type' => 'bool',
    'default' => '0',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['call_consent_c'] = array(
    'name' => 'call_consent_c',
    'vname' => 'LBL_CALL_CONSENT_C',
    'type' => 'bool',
    'default' => '0',
    'source' => 'custom_fields',
);



 // created: 2026-05-27 09:33:00
$dictionary['Lead']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2026-05-27 09:33:00
$dictionary['Lead']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2026-05-27 09:32:59
$dictionary['Lead']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2026-05-27 09:32:59
$dictionary['Lead']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>