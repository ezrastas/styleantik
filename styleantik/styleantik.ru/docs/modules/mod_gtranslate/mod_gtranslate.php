<?php
/**
* @version   $Id: mod_gtranslate.php 167 2012-10-26 19:28:57Z edo888 $
* @package   GTranslate
* @copyright Copyright (C) 2008-2016 Edvard Ananyan. All rights reserved.
* @license   GNU/GPL v3 http://www.gnu.org/licenses/gpl.html
*/

defined('_JEXEC') or die('Restricted access');

require_once (dirname(__FILE__).'/helper.php');

$params = modGTranslateHelper::getParams($params);

$method = $params->get('method');
$load_jquery = $params->get('load_jquery');
$look = $params->get('look');
$flag_size = $params->get('flag_size');
$orientation = $params->get('orientation');
$pro_version = $params->get('pro_version');
$enterprise_version = $params->get('enterprise_version');
$new_tab = $params->get('new_tab');
$analytics = $params->get('analytics');
$language = $params->get('language');
$show_en = $params->get('show_en');
$show_ar = $params->get('show_ar');
$show_bg = $params->get('show_bg');
$show_zhCN = $params->get('show_zh-CN');
$show_zhTW = $params->get('show_zh-TW');
$show_hr = $params->get('show_hr');
$show_cs = $params->get('show_cs');
$show_da = $params->get('show_da');
$show_nl = $params->get('show_nl');
$show_fi = $params->get('show_fi');
$show_fr = $params->get('show_fr');
$show_de = $params->get('show_de');
$show_el = $params->get('show_el');
$show_hi = $params->get('show_hi');
$show_it = $params->get('show_it');
$show_ja = $params->get('show_ja');
$show_ko = $params->get('show_ko');
$show_no = $params->get('show_no');
$show_pl = $params->get('show_pl');
$show_pt = $params->get('show_pt');
$show_ro = $params->get('show_ro');
$show_ru = $params->get('show_ru');
$show_es = $params->get('show_es');
$show_sv = $params->get('show_sv');
$show_ca = $params->get('show_ca');
$show_tl = $params->get('show_tl');
$show_iw = $params->get('show_iw');
$show_id = $params->get('show_id');
$show_lv = $params->get('show_lv');
$show_lt = $params->get('show_lt');
$show_sr = $params->get('show_sr');
$show_sk = $params->get('show_sk');
$show_sl = $params->get('show_sl');
$show_uk = $params->get('show_uk');
$show_vi = $params->get('show_vi');
$show_sq = $params->get('show_sq');
$show_et = $params->get('show_et');
$show_gl = $params->get('show_gl');
$show_hu = $params->get('show_hu');
$show_mt = $params->get('show_mt');
$show_th = $params->get('show_th');
$show_tr = $params->get('show_tr');
$show_fa = $params->get('show_fa');
$show_af = $params->get('show_af');
$show_ms = $params->get('show_ms');
$show_sw = $params->get('show_sw');
$show_ga = $params->get('show_ga');
$show_cy = $params->get('show_cy');
$show_be = $params->get('show_be');
$show_is = $params->get('show_is');
$show_mk = $params->get('show_mk');
$show_yi = $params->get('show_yi');
$show_hy = $params->get('show_hy');
$show_az = $params->get('show_az');
$show_eu = $params->get('show_eu');
$show_ka = $params->get('show_ka');
$show_ht = $params->get('show_ht');
$show_ur = $params->get('show_ur');

// 2014-03-26 languages
$show_bn = $params->get('show_bn');
$show_bs = $params->get('show_bs');
$show_ceb = $params->get('show_ceb');
$show_eo = $params->get('show_eo');
$show_gu = $params->get('show_gu');
$show_ha = $params->get('show_ha');
$show_hmn = $params->get('show_hmn');
$show_ig = $params->get('show_ig');
$show_jw = $params->get('show_jw');
$show_kn = $params->get('show_kn');
$show_km = $params->get('show_km');
$show_lo = $params->get('show_lo');
$show_la = $params->get('show_la');
$show_mi = $params->get('show_mi');
$show_mr = $params->get('show_mr');
$show_mn = $params->get('show_mn');
$show_ne = $params->get('show_ne');
$show_pa = $params->get('show_pa');
$show_so = $params->get('show_so');
$show_ta = $params->get('show_ta');
$show_te = $params->get('show_te');
$show_yo = $params->get('show_yo');
$show_zu = $params->get('show_zu');

// 2016-02-15 languages
$show_my = $params->get('show_my');
$show_ny = $params->get('show_ny');
$show_kk = $params->get('show_kk');
$show_mg = $params->get('show_mg');
$show_ml = $params->get('show_ml');
$show_si = $params->get('show_si');
$show_st = $params->get('show_st');
$show_su = $params->get('show_su');
$show_tg = $params->get('show_tg');
$show_uz = $params->get('show_uz');

// 2016-02-21
$show_am = $params->get('show_am');
$show_co = $params->get('show_co');
$show_haw = $params->get('show_haw');
$show_ku = $params->get('show_ku');
$show_ky = $params->get('show_ky');
$show_lb = $params->get('show_lb');
$show_ps = $params->get('show_ps');
$show_sm = $params->get('show_sm');
$show_gd = $params->get('show_gd');
$show_sn = $params->get('show_sn');
$show_sd = $params->get('show_sd');
$show_fy = $params->get('show_fy');
$show_xh = $params->get('show_xh');

$main_url = $_SERVER['HTTP_HOST'];

if($_SERVER['SERVER_PORT'] != '80')
    $main_url = substr($main_url, 0, strpos($main_url, ':'));

require(JModuleHelper::getLayoutPath('mod_gtranslate'));