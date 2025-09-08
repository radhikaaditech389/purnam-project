<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/about_clinic', function () {
    return view('about_clinic');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/hair-problems', function () {
    return view('hair_care_service.hair_problems');
});

Route::get('/hair-fall-treatment', function () {
    return view('hair_care_service.hair_fall_treatment');
});

Route::get('/hair-breakage-solutions', function () {
    return view('hair_care_service.hair_breakage_solutions');
});

Route::get('/dull-hair-treatment', function () {
    return view('hair_care_service.dull_hair_treatment');
});

Route::get('/dry-hair-solutions', function () {
    return view('hair_care_service.dry_hair_solutions');
});

Route::get('/PRP-GFC-QR678', function () {
    return view('hair_care_service.PRP_GFC_QR678');
});

Route::get('/laser-light-meso-therapy', function () {
    return view('hair_care_service.laser_light_meso_therapy');
});

Route::get('/hair-transplant', function () {
    return view('hair_care_service.hair_transplant');
});

Route::get('/eczema', function () {
    return view('dermatology_skin_diseases.eczema');
});

Route::get('/psoriasis', function () {
    return view('dermatology_skin_diseases.psoriasis');
});

Route::get('/lichen-planus', function () {
    return view('dermatology_skin_diseases.lichen_planus');
});

Route::get('/autoimmune-diseases', function () {
    return view('dermatology_skin_diseases.autoimmune_diseases');
});

Route::get('/melasma', function () {
    return view('dermatology_skin_diseases.melasma');
});

Route::get('/bacterial-viral-fungal-infections', function () {
    return view('dermatology_skin_diseases.becterial_viral_fungal_infection');
});

Route::get('/allergy', function () {
    return view('dermatology_skin_diseases.allergy');
});

Route::get('/medical-management', function () {
    return view('vitiligo_treatment.medical_management');
});

Route::get('/narrowband-UVB-therapy', function () {
    return view('vitiligo_treatment.narrowband_UVB_therapy');
});

Route::get('/whole-body-photo-therapy-unit', function () {
    return view('vitiligo_treatment.whole_body_photo_therapy');
});

Route::get('/excimer-laser', function () {
    return view('vitiligo_treatment.excimer_laser');
});

Route::get('/vitiligo-surgery', function () {
    return view('vitiligo_treatment.vitiligo_surgery');
});

Route::get('/hydration', function () {
    return view('daily_skin_care.hydration');
});

Route::get('/purification', function () {
    return view('daily_skin_care.purification');
});

Route::get('/sun-protection', function () {
    return view('daily_skin_care.sun_protection');
});

Route::get('/repair-rejuvenation', function () {
    return view('daily_skin_care.repair_rejuvenation');
});

Route::get('/glowing-skin', function () {
    return view('daily_skin_care.glowing_skin');
});

Route::get('/age-reversal', function () {
    return view('daily_skin_care.age_reversal');
});

Route::get('/skin-care-treatments', function () {
    return view('daily_skin_care.skin_care_treatments');
});

Route::get('/hydra_facial', function () {
    return view('hydra_facial');
});
Route::get('/photo_facial', function () {
    return view('photo_facial');
});
Route::get('/carbon_facial', function () {
    return view('carbon_facial');
});
Route::get('/laser_facial', function () {
    return view('laser_facial');
});
Route::get('/vampire_facial', function () {
    return view('vampire_facial');
});
Route::get('/koreal_glass_facial', function () {
    return view('koreal_glass_facial');
});
Route::get('/hifu', function () {
    return view('hifu');
});

Route::get('/skin_rejuvenation', function () {
    return view('skin_rejuvenation');
});

Route::get('/anti_ageing', function () {
    return view('anti_ageing');
});

Route::get('/stimulate_collegen', function () {
    return view('stimulate_collegen');
});

Route::get('/lift_tighten_skin', function () {
    return view('lift_tighten_skin');
});

Route::get('/once_year_procedure', function () {
    return view('once_year_procedure');
});

Route::get('/daily_skin_care_anti_ageing', function () {
    return view('daily_skin_care_anti_ageing');
});

Route::get('/wrinkle_treatments', function () {
    return view('wrinkle_treatments');
});
Route::get('/dermal_filler', function () {
    return view('dermal_filler');
});

Route::get('/threadlift', function () {
    return view('threadlift');
});

Route::get('/threadlift', function () {
    return view('threadlift');
});

Route::get('/skin_booster', function () {
    return view('skin_booster');
});

Route::get('/glow_treatment', function () {
    return view('glow_treatment');
});

Route::get('/dark_circle_clear', function () {
    return view('dark_circle_clearance');
});

Route::get('/chemical_peeling', function () {
    return view('chemical_peeling');
});

Route::get('/carbon_peeling', function () {
    return view('carbon_peel');
});

Route::get('/laser_toning', function () {
    return view('laser_toning');
});

Route::get('/medical_treatment', function () {
    return view('medical_treatment');
});

Route::get('/chemical_peer_scar_treatment', function () {
    return view('chemical_peer_scar_treatment');
});

Route::get('/microdermabrasion', function () {
    return view('microdermabrasion');
});

Route::get('/microneedling', function () {
    return view('microneedling');
});

Route::get('/prp', function () {
    return view('prp');
});

Route::get('/laser_resurfacing', function () {
    return view('laser_resurfacing');
});

Route::get('/scar-revision', function () {
    return view('dermatosurgery.scar_revision');
});

Route::get('/wart-mole-skin-tag-removal', function () {
    return view('dermatosurgery.wart_mole_skin_tag_removal');
});

Route::get('/biopsy', function () {
    return view('dermatosurgery.biopsy');
});

Route::get('/vitiligo-surgery', function () {
    return view('dermatosurgery.vitiligo_surgery');
});

Route::get('/acne-scar-surgery', function () {
    return view('dermatosurgery.acne_scar_surgery');
});

Route::get('/keloid-hypertrophic-scar-treatment', function () {
    return view('dermatosurgery.keloid_hypertrophic_scar_treatment');
});

Route::get('/keloid-hypertrophic-scar-treatment', function () {
    return view('dermatosurgery.keloid_hypertrophic_scar_treatment');
});

Route::get('/earlobe-repair', function () {
    return view('dermatosurgery.earlobe_repair');
});

Route::get('/cyst-removal', function () {
    return view('dermatosurgery.cyst_removal');
});

Route::get('/plastic-surgery', function () {
    return view('dermatosurgery.plastic_surgery');
});
