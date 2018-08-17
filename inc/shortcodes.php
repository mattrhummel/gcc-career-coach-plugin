<?php

//career coach shortcodes
//register the shortcodes
function gcc_wp_2018_ccwidget_shortcodes() {
    //business shortcodes
    //[business_administration_ccwidget]
    add_shortcode( 'business_administration_ccwidget', 'business_administration_ccwidget_shortcode');     //[business_management_ccwidget]
    add_shortcode( 'business_management_ccwidget', 'business_management_ccwidget_shortcode');
    //[accounting_ccwidget]
    add_shortcode( 'accounting_ccwidget', 'accounting_ccwidget_shortcode');
    //[business_core_ccwidget]
    add_shortcode( 'business_core_ccwidget', 'business_core_ccwidget_shortcode');
    //[entrepreneurship_ccwidget]
    add_shortcode( 'entrepreneurship_ccwidget', 'entrepreneurship_ccwidget_shortcode');
    //[supervision_ccwidget]
    add_shortcode( 'supervision_ccwidget', 'supervision_ccwidget_shortcode');
    //nursing health shortcodes
    //[allied_health_ccwidget]
    add_shortcode( 'allied_health_ccwidget', 'allied_health_ccwidget_shortcode');
    //[dental_assisting_ccwidget]
    add_shortcode( 'dental_assisting_ccwidget', 'dental_assisting_ccwidget_shortcode');
    //[expanded_dental_ccwidget]
    add_shortcode( 'expanded_dental_ccwidget', 'expanded_dental_ccwidget_shortcode');
    //[hpe_ccwidget]
    add_shortcode( 'hpe_ccwidget', 'hpe_ccwidget_shortcode');
    //[bsn_ccwidget]
    add_shortcode( 'bsn_ccwidget', 'bsn_ccwidget_shortcode');
    //[healthcare_technician_ccwidget]
    add_shortcode( 'healthcare_technician_ccwidget', 'healthcare_technician_ccwidget_shortcode');
    //[indirect_dental_ccwidget]
    add_shortcode( 'indirect_dental_ccwidget', 'indirect_dental_ccwidget_shortcode');
    //[lpn_ccwidget]
    add_shortcode( 'lpn_ccwidget', 'lpn_ccwidget_shortcode');
    //[nursing_ccwidget]
    add_shortcode( 'nursing_ccwidget', 'nursing_ccwidget_shortcode');
    //[personal_training_ccwidget]
    add_shortcode( 'personal_training_ccwidget', 'personal_training_ccwidget_shortcode');
    //[pharmacy_technician_ccwidget]
    add_shortcode( 'pharmacy_technician_ccwidget', 'pharmacy_technician_ccwidget_shortcode');
    //[pta_ccwidget]
    add_shortcode( 'pta_ccwidget', 'pta_ccwidget_shortcode');
    //[practical_nursing_ccwidget]
    add_shortcode( 'practical_nursing_ccwidget', 'practical_nursing_ccwidget_shortcode');
    //[restorative_dental_ccwidget]
    add_shortcode( 'restorative_dental_ccwidget', 'restorative_dental_ccwidget_shortcode');
    //[surgical_scrub_ccwidget]
    add_shortcode( 'surgical_scrub_ccwidget', 'surgical_scrub_ccwidget_shortcode');
    //humaniites and arts
    //[general_studies_ccwidget]
    add_shortcode( 'general_studies_ccwidget', 'sgeneral_studies_ccwidget_shortcode');
    //[liberal_arts_ccwidget]
    add_shortcode( 'liberal_arts_ccwidget', 'liberal_arts_ccwidget_shortcode');
    //[fine_arts_ccwidget]
    add_shortcode( 'fine_arts_ccwidget', 'fine_arts_ccwidget_shortcode');
    //[graphic_communications_ccwidget]
    add_shortcode( 'graphic_communications_ccwidget', 'graphic_communications_ccwidget_shortcode');
    //it shortcodes
    //[ist_info_management_ccwidget]
    add_shortcode( 'ist_info_management_ccwidget', 'ist_info_management_ccwidget_shortcode');
    //[ist_networking_ccwidget]
    add_shortcode( 'ist_networking_ccwidget', 'ist_networking_ccwidget_shortcode');
    //[tech_studies_ccwidget]
    add_shortcode( 'tech_studies_ccwidget', 'tech_studies_ccwidget_shortcode');
    //[advanced_networking_ccwidget]
    add_shortcode( 'advanced_networking_ccwidget', 'advanced_networking_ccwidget_shortcode');
    //[automotive_diagnostician_ccwidget]
    add_shortcode( 'automotive_diagnostician_ccwidget', 'automotive_diagnostician_ccwidget_shortcode');
    //[automotive_technician_ccwidget]
    add_shortcode( 'automotive_technician_ccwidget', 'automotive_technician_ccwidget_shortcode');
    //[cybersecurity_ccwidget]
    add_shortcode( 'cybersecurity_ccwidget', 'cybersecurity_ccwidget_shortcode');
    //[ecommerce_ccwidget]
    add_shortcode( 'ecommerce_ccwidget', 'ecommerce_ccwidget_shortcode');
    //[industrial_maintenance_technology_ccwidget]
    add_shortcode( 'industrial_maintenance_technology_ccwidget', 'industrial_maintenance_technology_ccwidget_shortcode');
    //[microcomputer_applications_ccwidget]
    add_shortcode( 'microcomputer_applications_ccwidget', 'microcomputer_applications_ccwidget_shortcode');
    //[networking_ccwidget]
    add_shortcode( 'networking_ccwidget', 'networking_ccwidget_shortcode');
    //public service shortcodes
    //[gs_adj_ccwidget]
    add_shortcode( 'adj_ccwidget', 'adj_ccwidget_shortcode');
    //[adj_ccwidget_ccwidget]
    add_shortcode( 'adj_ccwidget', 'adj_ccwidget_shortcode');
    //[adj_certificate_ccwidget]
    add_shortcode( 'adj_certificate_ccwidget', 'adj_certificate_ccwidget_shortcode');
    //[adj_csc_ccwidget]
    add_shortcode( 'adj_csc_ccwidget', 'adj_csc_ccwidget_shortcode');
    //[asl_certificate_ccwidget]
    add_shortcode( 'asl_certificate_ccwidget', 'asl_certificate_ccwidget_shortcode');
    //[la_csc_ccwidget]
    add_shortcode( 'la_csc_ccwidget', 'la_csc_ccwidget_shortcode');
    //[pc_csc_ccwidget]
    add_shortcode( 'pc_csc_ccwidget', 'pc_csc_ccwidget_shortcode');
    //science & engineering shortcodes
    //[science_ccwidget_ccwidget]
    add_shortcode( 'science_ccwidget', 'science_ccwidget_shortcode');
    //[ee_ccwidget]
    add_shortcode( 'ee_ccwidget', 'ee_ccwidget_shortcode');
    //[ee_ccwidget]
    add_shortcode( 'ee_ccwidget', 'ee_mechanical_shortcode');
    //[et_csc_ccwidget]
    add_shortcode( 'et_csc_ccwidget', 'et_csc_ccwidget_shortcode');
    //social science & education shortcodes
    //[education_ccwidget]
    add_shortcode( 'education_ccwidget', 'education_ccwidget_shortcode');
    //[education_k8_ccwidget]
    add_shortcode( 'education_k8_ccwidget', 'education_k8_ccwidget_shortcode');
    //[gs_psychology_ccwidget]
    add_shortcode( 'gs_psychology_ccwidget', 'gs_psychology_ccwidget_shortcode');
    //[ecd_ccwidget]
    add_shortcode( 'ecd_ccwidget', 'ecd_ccwidget_shortcode');
    //[ecd_certificate_ccwidget]
    add_shortcode( 'ecd_certificate_ccwidget', 'ecd_certificate_ccwidget_shortcode');
    //[ge_certificate_ccwidget]
    add_shortcode( 'ge_certificate_ccwidget', 'ge_certificate_ccwidget_shortcod');
    //[ecd_csc_ccwidget]
    add_shortcode( 'ecd_csc_ccwidget', 'ecd_csc_ccwidget_shortcode');
}
?>
