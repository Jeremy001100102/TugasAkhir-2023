<?php 


//Meninggal Dunia

for ($i=0; $i < count($_SESSION['dataMD_bulan']); $i++) {
	

	if($i == 0) {
		$min_MD_Januari= 0;
		$max_MD_Januari = $_SESSION['kumu_Januari_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Januari'][$i] = "{$min_MD_Januari}-{$max_MD_Januari}";
		$_SESSION['interval_MD_Januari_Min'][$i] = $min_MD_Januari;
		$_SESSION['interval_MD_Januari_Max'][$i] = $max_MD_Januari;
	}else if($_SESSION['prob_MD_Januari'][$i] == 0.000){
		$max_MD_Januari = $_SESSION['kumu_Januari_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Januari'][$i] = "{$max_MD_Januari}";	
	}else{
		$min_MD_Januari = $max_MD_Januari + 1 ;
		$max_MD_Januari = $_SESSION['kumu_Januari_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Januari'][$i] = "{$min_MD_Januari}-{$max_MD_Januari}";
		$_SESSION['interval_MD_Januari_Min'][$i] = $min_MD_Januari;
		$_SESSION['interval_MD_Januari_Max'][$i] = $max_MD_Januari; 
	}


	if($i == 0) {
		$min_MD_Februari= 0;
		$max_MD_Februari = $_SESSION['kumu_Februari_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Februari'][$i] = "{$min_MD_Februari}-{$max_MD_Februari}";
		$_SESSION['interval_MD_Februari_Min'][$i] = $min_MD_Februari;
		$_SESSION['interval_MD_Februari_Max'][$i] = $max_MD_Februari; 	
	}else if($_SESSION['prob_MD_Februari'][$i] == 0.000){
		$max_MD_Februari = $_SESSION['kumu_Februari_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Februari'][$i] = "{$max_MD_Februari}";	
	}else{
		$min_MD_Februari = $max_MD_Februari + 1 ;
		$max_MD_Februari = $_SESSION['kumu_Februari_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Februari'][$i] = "{$min_MD_Februari}-{$max_MD_Februari}";
		$_SESSION['interval_MD_Februari_Min'][$i] = $min_MD_Februari;
		$_SESSION['interval_MD_Februari_Max'][$i] = $max_MD_Februari; 
	}


	if($i == 0) {
		$min_MD_Maret= 0;
		$max_MD_Maret = $_SESSION['kumu_Maret_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Maret'][$i] = "{$min_MD_Maret}-{$max_MD_Maret}";
		$_SESSION['interval_MD_Maret_Min'][$i] = $min_MD_Maret;
		$_SESSION['interval_MD_Maret_Max'][$i] = $max_MD_Maret; 	
	}else if($_SESSION['prob_MD_Maret'][$i] == 0.000){
		$max_MD_Maret = $_SESSION['kumu_Maret_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Maret'][$i] = "{$max_MD_Maret}";	
	}else{
		$min_MD_Maret = $max_MD_Maret + 1 ;
		$max_MD_Maret = $_SESSION['kumu_Maret_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Maret'][$i] = "{$min_MD_Maret}-{$max_MD_Maret}";
		$_SESSION['interval_MD_Maret_Min'][$i] = $min_MD_Maret;
		$_SESSION['interval_MD_Maret_Max'][$i] = $max_MD_Maret; 
	}


	if($i == 0) {
		$min_MD_April= 0;
		$max_MD_April = $_SESSION['kumu_April_MD'][$i] * 1000; 
		$_SESSION['interval_MD_April'][$i] = "{$min_MD_April}-{$max_MD_April}";
		$_SESSION['interval_MD_April_Min'][$i] = $min_MD_April;
		$_SESSION['interval_MD_April_Max'][$i] = $max_MD_April; 	
	}else if($_SESSION['prob_MD_April'][$i] == 0.000){
		$max_MD_April = $_SESSION['kumu_April_MD'][$i] * 1000; 
		$_SESSION['interval_MD_April'][$i] = "{$max_MD_April}";	
	}else{
		$min_MD_April = $max_MD_April + 1 ;
		$max_MD_April = $_SESSION['kumu_April_MD'][$i] * 1000; 
		$_SESSION['interval_MD_April'][$i] = "{$min_MD_April}-{$max_MD_April}";
		$_SESSION['interval_MD_April_Min'][$i] = $min_MD_April;
		$_SESSION['interval_MD_April_Max'][$i] = $max_MD_April; 
	}


	if($i == 0) {
		$min_MD_Mei= 0;
		$max_MD_Mei = $_SESSION['kumu_Mei_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Mei'][$i] = "{$min_MD_Mei}-{$max_MD_Mei}";
		$_SESSION['interval_MD_Mei_Min'][$i] = $min_MD_Mei;
		$_SESSION['interval_MD_Mei_Max'][$i] = $max_MD_Mei; 	
	}else if($_SESSION['prob_MD_Mei'][$i] == 0.000){
		$max_MD_Mei = $_SESSION['kumu_Mei_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Mei'][$i] = "{$max_MD_Mei}";	
	}else{
		$min_MD_Mei = $max_MD_Mei + 1 ;
		$max_MD_Mei = $_SESSION['kumu_Mei_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Mei'][$i] = "{$min_MD_Mei}-{$max_MD_Mei}";
		$_SESSION['interval_MD_Mei_Min'][$i] = $min_MD_Mei;
		$_SESSION['interval_MD_Mei_Max'][$i] = $max_MD_Mei; 
	}


	if($i == 0) {
		$min_MD_Juni = 0;
		$max_MD_Juni = $_SESSION['kumu_Juni_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Juni'][$i] = "{$min_MD_Juni}-{$max_MD_Juni}";
		$_SESSION['interval_MD_Juni_Min'][$i] = $min_MD_Juni;
		$_SESSION['interval_MD_Juni_Max'][$i] = $max_MD_Juni; 	
	}else if($_SESSION['prob_MD_Juni'][$i] == 0.000){
		$max_MD_Juni = $_SESSION['kumu_Juni_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Juni'][$i] = "{$max_MD_Juni}";	
	}else{
		$min_MD_Juni = $max_MD_Juni + 1 ;
		$max_MD_Juni = $_SESSION['kumu_Juni_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Juni'][$i] = "{$min_MD_Juni}-{$max_MD_Juni}";
		$_SESSION['interval_MD_Juni_Min'][$i] = $min_MD_Juni;
		$_SESSION['interval_MD_Juni_Max'][$i] = $max_MD_Juni; 
	}


	if($i == 0) {
		$min_MD_Juli= 0;
		$max_MD_Juli = $_SESSION['kumu_Juli_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Juli'][$i] = "{$min_MD_Juli}-{$max_MD_Juli}";
		$_SESSION['interval_MD_Juli_Min'][$i] = $min_MD_Juli;
		$_SESSION['interval_MD_Juli_Max'][$i] = $max_MD_Juli; 	
	}else if($_SESSION['prob_MD_Juli'][$i] == 0.000){
		$max_MD_Juli = $_SESSION['kumu_Juli_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Juli'][$i] = "{$max_MD_Juli}";	
	}else{
		$min_MD_Juli = $max_MD_Juli + 1 ;
		$max_MD_Juli = $_SESSION['kumu_Juli_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Juli'][$i] = "{$min_MD_Juli}-{$max_MD_Juli}";
		$_SESSION['interval_MD_Juli_Min'][$i] = $min_MD_Juli;
		$_SESSION['interval_MD_Juli_Max'][$i] = $max_MD_Juli; 
	}


	if($i == 0) {
		$min_MD_Agustus= 0;
		$max_MD_Agustus = $_SESSION['kumu_Agustus_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Agustus'][$i] = "{$min_MD_Agustus}-{$max_MD_Agustus}";
		$_SESSION['interval_MD_Agustus_Min'][$i] = $min_MD_Agustus;
		$_SESSION['interval_MD_Agustus_Max'][$i] = $max_MD_Agustus; 	
	}else if($_SESSION['prob_MD_Agustus'][$i] == 0.000){
		$max_MD_Agustus = $_SESSION['kumu_Agustus_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Agustus'][$i] = "{$max_MD_Agustus}";	
	}else{
		$min_MD_Agustus = $max_MD_Agustus + 1 ;
		$max_MD_Agustus = $_SESSION['kumu_Agustus_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Agustus'][$i] = "{$min_MD_Agustus}-{$max_MD_Agustus}";
		$_SESSION['interval_MD_Agustus_Min'][$i] = $min_MD_Agustus;
		$_SESSION['interval_MD_Agustus_Max'][$i] = $max_MD_Agustus; 
	}


	if($i == 0) {
		$min_MD_September= 0;
		$max_MD_September = $_SESSION['kumu_September_MD'][$i] * 1000; 
		$_SESSION['interval_MD_September'][$i] = "{$min_MD_September}-{$max_MD_September}";
		$_SESSION['interval_MD_September_Min'][$i] = $min_MD_September;
		$_SESSION['interval_MD_September_Max'][$i] = $max_MD_September; 	
	}else if($_SESSION['prob_MD_September'][$i] == 0.000){
		$max_MD_September = $_SESSION['kumu_September_MD'][$i] * 1000; 
		$_SESSION['interval_MD_September'][$i] = "{$max_MD_September}";	
	}else{
		$min_MD_September = $max_MD_September + 1 ;
		$max_MD_September = $_SESSION['kumu_September_MD'][$i] * 1000; 
		$_SESSION['interval_MD_September'][$i] = "{$min_MD_September}-{$max_MD_September}";
		$_SESSION['interval_MD_September_Min'][$i] = $min_MD_September;
		$_SESSION['interval_MD_September_Max'][$i] = $max_MD_September; 
	}


	if($i == 0) {
		$min_MD_Oktober= 0;
		$max_MD_Oktober = $_SESSION['kumu_Oktober_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Oktober'][$i] = "{$min_MD_Oktober}-{$max_MD_Oktober}";
		$_SESSION['interval_MD_Oktober_Min'][$i] = $min_MD_Oktober;
		$_SESSION['interval_MD_Oktober_Max'][$i] = $max_MD_Oktober; 	
	}else if($_SESSION['prob_MD_Oktober'][$i] == 0.000){
		$max_MD_Oktober = $_SESSION['kumu_Oktober_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Oktober'][$i] = "{$max_MD_Oktober}";	
	}else{
		$min_MD_Oktober = $max_MD_Oktober + 1 ;
		$max_MD_Oktober = $_SESSION['kumu_Oktober_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Oktober'][$i] = "{$min_MD_Oktober}-{$max_MD_Oktober}";
		$_SESSION['interval_MD_Oktober_Min'][$i] = $min_MD_Oktober;
		$_SESSION['interval_MD_Oktober_Max'][$i] = $max_MD_Oktober; 
	}


	if($i == 0) {
		$min_MD_November= 0;
		$max_MD_November = $_SESSION['kumu_November_MD'][$i] * 1000; 
		$_SESSION['interval_MD_November'][$i] = "{$min_MD_November}-{$max_MD_November}";
		$_SESSION['interval_MD_November_Min'][$i] = $min_MD_November;
		$_SESSION['interval_MD_November_Max'][$i] = $max_MD_November; 	
	}else if($_SESSION['prob_MD_November'][$i] == 0.000){
		$max_MD_November = $_SESSION['kumu_November_MD'][$i] * 1000; 
		$_SESSION['interval_MD_November'][$i] = "{$max_MD_November}";	
	}else{
		$min_MD_November = $max_MD_November + 1 ;
		$max_MD_November = $_SESSION['kumu_November_MD'][$i] * 1000; 
		$_SESSION['interval_MD_November'][$i] = "{$min_MD_November}-{$max_MD_November}";
		$_SESSION['interval_MD_November_Min'][$i] = $min_MD_November;
		$_SESSION['interval_MD_November_Max'][$i] = $max_MD_November; 
	}


	if($i == 0) {
		$min_MD_Desember= 0;
		$max_MD_Desember = $_SESSION['kumu_Desember_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Desember'][$i] = "{$min_MD_Desember}-{$max_MD_Desember}";
		$_SESSION['interval_MD_Desember_Min'][$i] = $min_MD_Desember;
		$_SESSION['interval_MD_Desember_Max'][$i] = $max_MD_Desember; 	
	}else if($_SESSION['prob_MD_Desember'][$i] == 0.000){
		$max_MD_Desember = $_SESSION['kumu_Desember_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Desember'][$i] = "{$max_MD_Desember}";	
	}else{
		$min_MD_Desember = $max_MD_Desember + 1 ;
		$max_MD_Desember = $_SESSION['kumu_Desember_MD'][$i] * 1000; 
		$_SESSION['interval_MD_Desember'][$i] = "{$min_MD_Desember}-{$max_MD_Desember}";
		$_SESSION['interval_MD_Desember_Min'][$i] = $min_MD_Desember;
		$_SESSION['interval_MD_Desember_Max'][$i] = $max_MD_Desember; 
	}


}

//Luka Berat
for ($i=0; $i < count($_SESSION['dataLB_bulan']); $i++) {

	if($i == 0) {
		$min_LB_Januari= 0;
		$max_LB_Januari = $_SESSION['kumu_Januari_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Januari'][$i] = "{$min_LB_Januari}-{$max_LB_Januari}";
		$_SESSION['interval_LB_Januari_Min'][$i] = $min_LB_Januari;
		$_SESSION['interval_LB_Januari_Max'][$i] = $max_LB_Januari;
	}else if($_SESSION['prob_LB_Januari'][$i] == 0.000){
		$max_LB_Januari = $_SESSION['kumu_Januari_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Januari'][$i] = "{$max_LB_Januari}";	
	}else{
		$min_LB_Januari = $max_LB_Januari + 1 ;
		$max_LB_Januari = $_SESSION['kumu_Januari_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Januari'][$i] = "{$min_LB_Januari}-{$max_LB_Januari}";
		$_SESSION['interval_LB_Januari_Min'][$i] = $min_LB_Januari;
		$_SESSION['interval_LB_Januari_Max'][$i] = $max_LB_Januari; 
	}


	if($i == 0) {
		$min_LB_Februari= 0;
		$max_LB_Februari = $_SESSION['kumu_Februari_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Februari'][$i] = "{$min_LB_Februari}-{$max_LB_Februari}";
		$_SESSION['interval_LB_Februari_Min'][$i] = $min_LB_Februari;
		$_SESSION['interval_LB_Februari_Max'][$i] = $max_LB_Februari; 	
	}else if($_SESSION['prob_LB_Februari'][$i] == 0.000){
		$max_LB_Februari = $_SESSION['kumu_Februari_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Februari'][$i] = "{$max_LB_Februari}";	
	}else{
		$min_LB_Februari = $max_LB_Februari + 1 ;
		$max_LB_Februari = $_SESSION['kumu_Februari_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Februari'][$i] = "{$min_LB_Februari}-{$max_LB_Februari}";
		$_SESSION['interval_LB_Februari_Min'][$i] = $min_LB_Februari;
		$_SESSION['interval_LB_Februari_Max'][$i] = $max_LB_Februari; 
	}


	if($i == 0) {
		$min_LB_Maret= 0;
		$max_LB_Maret = $_SESSION['kumu_Maret_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Maret'][$i] = "{$min_LB_Maret}-{$max_LB_Maret}";
		$_SESSION['interval_LB_Maret_Min'][$i] = $min_LB_Maret;
		$_SESSION['interval_LB_Maret_Max'][$i] = $max_LB_Maret; 	
	}else if($_SESSION['prob_LB_Maret'][$i] == 0.000){
		$max_LB_Maret = $_SESSION['kumu_Maret_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Maret'][$i] = "{$max_LB_Maret}";	
	}else{
		$min_LB_Maret = $max_LB_Maret + 1 ;
		$max_LB_Maret = $_SESSION['kumu_Maret_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Maret'][$i] = "{$min_LB_Maret}-{$max_LB_Maret}";
		$_SESSION['interval_LB_Maret_Min'][$i] = $min_LB_Maret;
		$_SESSION['interval_LB_Maret_Max'][$i] = $max_LB_Maret; 
	}


	if($i == 0) {
		$min_LB_April= 0;
		$max_LB_April = $_SESSION['kumu_April_LB'][$i] * 1000; 
		$_SESSION['interval_LB_April'][$i] = "{$min_LB_April}-{$max_LB_April}";
		$_SESSION['interval_LB_April_Min'][$i] = $min_LB_April;
		$_SESSION['interval_LB_April_Max'][$i] = $max_LB_April; 	
	}else if($_SESSION['prob_LB_April'][$i] == 0.000){
		$max_LB_April = $_SESSION['kumu_April_LB'][$i] * 1000; 
		$_SESSION['interval_LB_April'][$i] = "{$max_LB_April}";	
	}else{
		$min_LB_April = $max_LB_April + 1 ;
		$max_LB_April = $_SESSION['kumu_April_LB'][$i] * 1000; 
		$_SESSION['interval_LB_April'][$i] = "{$min_LB_April}-{$max_LB_April}";
		$_SESSION['interval_LB_April_Min'][$i] = $min_LB_April;
		$_SESSION['interval_LB_April_Max'][$i] = $max_LB_April; 
	}


	if($i == 0) {
		$min_LB_Mei= 0;
		$max_LB_Mei = $_SESSION['kumu_Mei_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Mei'][$i] = "{$min_LB_Mei}-{$max_LB_Mei}";
		$_SESSION['interval_LB_Mei_Min'][$i] = $min_LB_Mei;
		$_SESSION['interval_LB_Mei_Max'][$i] = $max_LB_Mei; 	
	}else if($_SESSION['prob_LB_Mei'][$i] == 0.000){
		$max_LB_Mei = $_SESSION['kumu_Mei_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Mei'][$i] = "{$max_LB_Mei}";	
	}else{
		$min_LB_Mei = $max_LB_Mei + 1 ;
		$max_LB_Mei = $_SESSION['kumu_Mei_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Mei'][$i] = "{$min_LB_Mei}-{$max_LB_Mei}";
		$_SESSION['interval_LB_Mei_Min'][$i] = $min_LB_Mei;
		$_SESSION['interval_LB_Mei_Max'][$i] = $max_LB_Mei; 
	}


	if($i == 0) {
		$min_LB_Juni = 0;
		$max_LB_Juni = $_SESSION['kumu_Juni_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Juni'][$i] = "{$min_LB_Juni}-{$max_LB_Juni}";
		$_SESSION['interval_LB_Juni_Min'][$i] = $min_LB_Juni;
		$_SESSION['interval_LB_Juni_Max'][$i] = $max_LB_Juni; 	
	}else if($_SESSION['prob_LB_Juni'][$i] == 0.000){
		$max_LB_Juni = $_SESSION['kumu_Juni_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Juni'][$i] = "{$max_LB_Juni}";	
	}else{
		$min_LB_Juni = $max_LB_Juni + 1 ;
		$max_LB_Juni = $_SESSION['kumu_Juni_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Juni'][$i] = "{$min_LB_Juni}-{$max_LB_Juni}";
		$_SESSION['interval_LB_Juni_Min'][$i] = $min_LB_Juni;
		$_SESSION['interval_LB_Juni_Max'][$i] = $max_LB_Juni; 
	}


	if($i == 0) {
		$min_LB_Juli= 0;
		$max_LB_Juli = $_SESSION['kumu_Juli_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Juli'][$i] = "{$min_LB_Juli}-{$max_LB_Juli}";
		$_SESSION['interval_LB_Juli_Min'][$i] = $min_LB_Juli;
		$_SESSION['interval_LB_Juli_Max'][$i] = $max_LB_Juli; 	
	}else if($_SESSION['prob_LB_Juli'][$i] == 0.000){
		$max_LB_Juli = $_SESSION['kumu_Juli_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Juli'][$i] = "{$max_LB_Juli}";	
	}else{
		$min_LB_Juli = $max_LB_Juli + 1 ;
		$max_LB_Juli = $_SESSION['kumu_Juli_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Juli'][$i] = "{$min_LB_Juli}-{$max_LB_Juli}";
		$_SESSION['interval_LB_Juli_Min'][$i] = $min_LB_Juli;
		$_SESSION['interval_LB_Juli_Max'][$i] = $max_LB_Juli; 
	}


	if($i == 0) {
		$min_LB_Agustus= 0;
		$max_LB_Agustus = $_SESSION['kumu_Agustus_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Agustus'][$i] = "{$min_LB_Agustus}-{$max_LB_Agustus}";
		$_SESSION['interval_LB_Agustus_Min'][$i] = $min_LB_Agustus;
		$_SESSION['interval_LB_Agustus_Max'][$i] = $max_LB_Agustus; 	
	}else if($_SESSION['prob_LB_Agustus'][$i] == 0.000){
		$max_LB_Agustus = $_SESSION['kumu_Agustus_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Agustus'][$i] = "{$max_LB_Agustus}";	
	}else{
		$min_LB_Agustus = $max_LB_Agustus + 1 ;
		$max_LB_Agustus = $_SESSION['kumu_Agustus_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Agustus'][$i] = "{$min_LB_Agustus}-{$max_LB_Agustus}";
		$_SESSION['interval_LB_Agustus_Min'][$i] = $min_LB_Agustus;
		$_SESSION['interval_LB_Agustus_Max'][$i] = $max_LB_Agustus; 
	}


	if($i == 0) {
		$min_LB_September= 0;
		$max_LB_September = $_SESSION['kumu_September_LB'][$i] * 1000; 
		$_SESSION['interval_LB_September'][$i] = "{$min_LB_September}-{$max_LB_September}";
		$_SESSION['interval_LB_September_Min'][$i] = $min_LB_September;
		$_SESSION['interval_LB_September_Max'][$i] = $max_LB_September; 	
	}else if($_SESSION['prob_LB_September'][$i] == 0.000){
		$max_LB_September = $_SESSION['kumu_September_LB'][$i] * 1000; 
		$_SESSION['interval_LB_September'][$i] = "{$max_LB_September}";	
	}else{
		$min_LB_September = $max_LB_September + 1 ;
		$max_LB_September = $_SESSION['kumu_September_LB'][$i] * 1000; 
		$_SESSION['interval_LB_September'][$i] = "{$min_LB_September}-{$max_LB_September}";
		$_SESSION['interval_LB_September_Min'][$i] = $min_LB_September;
		$_SESSION['interval_LB_September_Max'][$i] = $max_LB_September; 
	}


	if($i == 0) {
		$min_LB_Oktober= 0;
		$max_LB_Oktober = $_SESSION['kumu_Oktober_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Oktober'][$i] = "{$min_LB_Oktober}-{$max_LB_Oktober}";
		$_SESSION['interval_LB_Oktober_Min'][$i] = $min_LB_Oktober;
		$_SESSION['interval_LB_Oktober_Max'][$i] = $max_LB_Oktober; 	
	}else if($_SESSION['prob_LB_Oktober'][$i] == 0.000){
		$max_LB_Oktober = $_SESSION['kumu_Oktober_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Oktober'][$i] = "{$max_LB_Oktober}";	
	}else{
		$min_LB_Oktober = $max_LB_Oktober + 1 ;
		$max_LB_Oktober = $_SESSION['kumu_Oktober_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Oktober'][$i] = "{$min_LB_Oktober}-{$max_LB_Oktober}";
		$_SESSION['interval_LB_Oktober_Min'][$i] = $min_LB_Oktober;
		$_SESSION['interval_LB_Oktober_Max'][$i] = $max_LB_Oktober; 
	}


	if($i == 0) {
		$min_LB_November= 0;
		$max_LB_November = $_SESSION['kumu_November_LB'][$i] * 1000; 
		$_SESSION['interval_LB_November'][$i] = "{$min_LB_November}-{$max_LB_November}";
		$_SESSION['interval_LB_November_Min'][$i] = $min_LB_November;
		$_SESSION['interval_LB_November_Max'][$i] = $max_LB_November; 	
	}else if($_SESSION['prob_LB_November'][$i] == 0.000){
		$max_LB_November = $_SESSION['kumu_November_LB'][$i] * 1000; 
		$_SESSION['interval_LB_November'][$i] = "{$max_LB_November}";	
	}else{
		$min_LB_November = $max_LB_November + 1 ;
		$max_LB_November = $_SESSION['kumu_November_LB'][$i] * 1000; 
		$_SESSION['interval_LB_November'][$i] = "{$min_LB_November}-{$max_LB_November}";
		$_SESSION['interval_LB_November_Min'][$i] = $min_LB_November;
		$_SESSION['interval_LB_November_Max'][$i] = $max_LB_November; 
	}


	if($i == 0) {
		$min_LB_Desember= 0;
		$max_LB_Desember = $_SESSION['kumu_Desember_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Desember'][$i] = "{$min_LB_Desember}-{$max_LB_Desember}";
		$_SESSION['interval_LB_Desember_Min'][$i] = $min_LB_Desember;
		$_SESSION['interval_LB_Desember_Max'][$i] = $max_LB_Desember; 	
	}else if($_SESSION['prob_LB_Desember'][$i] == 0.000){
		$max_LB_Desember = $_SESSION['kumu_Desember_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Desember'][$i] = "{$max_LB_Desember}";	
	}else{
		$min_LB_Desember = $max_LB_Desember + 1 ;
		$max_LB_Desember = $_SESSION['kumu_Desember_LB'][$i] * 1000; 
		$_SESSION['interval_LB_Desember'][$i] = "{$min_LB_Desember}-{$max_LB_Desember}";
		$_SESSION['interval_LB_Desember_Min'][$i] = $min_LB_Desember;
		$_SESSION['interval_LB_Desember_Max'][$i] = $max_LB_Desember; 
	}	
	
}


//Luka Ringan
for ($i=0; $i < count($_SESSION['dataLR_bulan']); $i++) {
	if($i == 0) {
		$min_LR_Januari= 0;
		$max_LR_Januari = $_SESSION['kumu_Januari_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Januari'][$i] = "{$min_LR_Januari}-{$max_LR_Januari}";
		$_SESSION['interval_LR_Januari_Min'][$i] = $min_LR_Januari;
		$_SESSION['interval_LR_Januari_Max'][$i] = $max_LR_Januari;
	}else if($_SESSION['prob_LR_Januari'][$i] == 0.000){
		$max_LR_Januari = $_SESSION['kumu_Januari_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Januari'][$i] = "{$max_LR_Januari}";	
	}else{
		$min_LR_Januari = $max_LR_Januari + 1 ;
		$max_LR_Januari = $_SESSION['kumu_Januari_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Januari'][$i] = "{$min_LR_Januari}-{$max_LR_Januari}";
		$_SESSION['interval_LR_Januari_Min'][$i] = $min_LR_Januari;
		$_SESSION['interval_LR_Januari_Max'][$i] = $max_LR_Januari; 
	}


	if($i == 0) {
		$min_LR_Februari= 0;
		$max_LR_Februari = $_SESSION['kumu_Februari_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Februari'][$i] = "{$min_LR_Februari}-{$max_LR_Februari}";
		$_SESSION['interval_LR_Februari_Min'][$i] = $min_LR_Februari;
		$_SESSION['interval_LR_Februari_Max'][$i] = $max_LR_Februari; 	
	}else if($_SESSION['prob_LR_Februari'][$i] == 0.000){
		$max_LR_Februari = $_SESSION['kumu_Februari_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Februari'][$i] = "{$max_LR_Februari}";	
	}else{
		$min_LR_Februari = $max_LR_Februari + 1 ;
		$max_LR_Februari = $_SESSION['kumu_Februari_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Februari'][$i] = "{$min_LR_Februari}-{$max_LR_Februari}";
		$_SESSION['interval_LR_Februari_Min'][$i] = $min_LR_Februari;
		$_SESSION['interval_LR_Februari_Max'][$i] = $max_LR_Februari; 
	}


	if($i == 0) {
		$min_LR_Maret= 0;
		$max_LR_Maret = $_SESSION['kumu_Maret_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Maret'][$i] = "{$min_LR_Maret}-{$max_LR_Maret}";
		$_SESSION['interval_LR_Maret_Min'][$i] = $min_LR_Maret;
		$_SESSION['interval_LR_Maret_Max'][$i] = $max_LR_Maret; 	
	}else if($_SESSION['prob_LR_Maret'][$i] == 0.000){
		$max_LR_Maret = $_SESSION['kumu_Maret_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Maret'][$i] = "{$max_LR_Maret}";	
	}else{
		$min_LR_Maret = $max_LR_Maret + 1 ;
		$max_LR_Maret = $_SESSION['kumu_Maret_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Maret'][$i] = "{$min_LR_Maret}-{$max_LR_Maret}";
		$_SESSION['interval_LR_Maret_Min'][$i] = $min_LR_Maret;
		$_SESSION['interval_LR_Maret_Max'][$i] = $max_LR_Maret; 
	}


	if($i == 0) {
		$min_LR_April= 0;
		$max_LR_April = $_SESSION['kumu_April_LR'][$i] * 1000; 
		$_SESSION['interval_LR_April'][$i] = "{$min_LR_April}-{$max_LR_April}";
		$_SESSION['interval_LR_April_Min'][$i] = $min_LR_April;
		$_SESSION['interval_LR_April_Max'][$i] = $max_LR_April; 	
	}else if($_SESSION['prob_LR_April'][$i] == 0.000){
		$max_LR_April = $_SESSION['kumu_April_LR'][$i] * 1000; 
		$_SESSION['interval_LR_April'][$i] = "{$max_LR_April}";	
	}else{
		$min_LR_April = $max_LR_April + 1 ;
		$max_LR_April = $_SESSION['kumu_April_LR'][$i] * 1000; 
		$_SESSION['interval_LR_April'][$i] = "{$min_LR_April}-{$max_LR_April}";
		$_SESSION['interval_LR_April_Min'][$i] = $min_LR_April;
		$_SESSION['interval_LR_April_Max'][$i] = $max_LR_April; 
	}


	if($i == 0) {
		$min_LR_Mei= 0;
		$max_LR_Mei = $_SESSION['kumu_Mei_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Mei'][$i] = "{$min_LR_Mei}-{$max_LR_Mei}";
		$_SESSION['interval_LR_Mei_Min'][$i] = $min_LR_Mei;
		$_SESSION['interval_LR_Mei_Max'][$i] = $max_LR_Mei; 	
	}else if($_SESSION['prob_LR_Mei'][$i] == 0.000){
		$max_LR_Mei = $_SESSION['kumu_Mei_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Mei'][$i] = "{$max_LR_Mei}";	
	}else{
		$min_LR_Mei = $max_LR_Mei + 1 ;
		$max_LR_Mei = $_SESSION['kumu_Mei_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Mei'][$i] = "{$min_LR_Mei}-{$max_LR_Mei}";
		$_SESSION['interval_LR_Mei_Min'][$i] = $min_LR_Mei;
		$_SESSION['interval_LR_Mei_Max'][$i] = $max_LR_Mei; 
	}


	if($i == 0) {
		$min_LR_Juni = 0;
		$max_LR_Juni = $_SESSION['kumu_Juni_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Juni'][$i] = "{$min_LR_Juni}-{$max_LR_Juni}";
		$_SESSION['interval_LR_Juni_Min'][$i] = $min_LR_Juni;
		$_SESSION['interval_LR_Juni_Max'][$i] = $max_LR_Juni; 	
	}else if($_SESSION['prob_LR_Juni'][$i] == 0.000){
		$max_LR_Juni = $_SESSION['kumu_Juni_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Juni'][$i] = "{$max_LR_Juni}";	
	}else{
		$min_LR_Juni = $max_LR_Juni + 1 ;
		$max_LR_Juni = $_SESSION['kumu_Juni_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Juni'][$i] = "{$min_LR_Juni}-{$max_LR_Juni}";
		$_SESSION['interval_LR_Juni_Min'][$i] = $min_LR_Juni;
		$_SESSION['interval_LR_Juni_Max'][$i] = $max_LR_Juni; 
	}


	if($i == 0) {
		$min_LR_Juli= 0;
		$max_LR_Juli = $_SESSION['kumu_Juli_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Juli'][$i] = "{$min_LR_Juli}-{$max_LR_Juli}";
		$_SESSION['interval_LR_Juli_Min'][$i] = $min_LR_Juli;
		$_SESSION['interval_LR_Juli_Max'][$i] = $max_LR_Juli; 	
	}else if($_SESSION['prob_LR_Juli'][$i] == 0.000){
		$max_LR_Juli = $_SESSION['kumu_Juli_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Juli'][$i] = "{$max_LR_Juli}";	
	}else{
		$min_LR_Juli = $max_LR_Juli + 1 ;
		$max_LR_Juli = $_SESSION['kumu_Juli_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Juli'][$i] = "{$min_LR_Juli}-{$max_LR_Juli}";
		$_SESSION['interval_LR_Juli_Min'][$i] = $min_LR_Juli;
		$_SESSION['interval_LR_Juli_Max'][$i] = $max_LR_Juli; 
	}


	if($i == 0) {
		$min_LR_Agustus= 0;
		$max_LR_Agustus = $_SESSION['kumu_Agustus_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Agustus'][$i] = "{$min_LR_Agustus}-{$max_LR_Agustus}";
		$_SESSION['interval_LR_Agustus_Min'][$i] = $min_LR_Agustus;
		$_SESSION['interval_LR_Agustus_Max'][$i] = $max_LR_Agustus; 	
	}else if($_SESSION['prob_LR_Agustus'][$i] == 0.000){
		$max_LR_Agustus = $_SESSION['kumu_Agustus_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Agustus'][$i] = "{$max_LR_Agustus}";	
	}else{
		$min_LR_Agustus = $max_LR_Agustus + 1 ;
		$max_LR_Agustus = $_SESSION['kumu_Agustus_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Agustus'][$i] = "{$min_LR_Agustus}-{$max_LR_Agustus}";
		$_SESSION['interval_LR_Agustus_Min'][$i] = $min_LR_Agustus;
		$_SESSION['interval_LR_Agustus_Max'][$i] = $max_LR_Agustus; 
	}


	if($i == 0) {
		$min_LR_September= 0;
		$max_LR_September = $_SESSION['kumu_September_LR'][$i] * 1000; 
		$_SESSION['interval_LR_September'][$i] = "{$min_LR_September}-{$max_LR_September}";
		$_SESSION['interval_LR_September_Min'][$i] = $min_LR_September;
		$_SESSION['interval_LR_September_Max'][$i] = $max_LR_September; 	
	}else if($_SESSION['prob_LR_September'][$i] == 0.000){
		$max_LR_September = $_SESSION['kumu_September_LR'][$i] * 1000; 
		$_SESSION['interval_LR_September'][$i] = "{$max_LR_September}";	
	}else{
		$min_LR_September = $max_LR_September + 1 ;
		$max_LR_September = $_SESSION['kumu_September_LR'][$i] * 1000; 
		$_SESSION['interval_LR_September'][$i] = "{$min_LR_September}-{$max_LR_September}";
		$_SESSION['interval_LR_September_Min'][$i] = $min_LR_September;
		$_SESSION['interval_LR_September_Max'][$i] = $max_LR_September; 
	}


	if($i == 0) {
		$min_LR_Oktober= 0;
		$max_LR_Oktober = $_SESSION['kumu_Oktober_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Oktober'][$i] = "{$min_LR_Oktober}-{$max_LR_Oktober}";
		$_SESSION['interval_LR_Oktober_Min'][$i] = $min_LR_Oktober;
		$_SESSION['interval_LR_Oktober_Max'][$i] = $max_LR_Oktober; 	
	}else if($_SESSION['prob_LR_Oktober'][$i] == 0.000){
		$max_LR_Oktober = $_SESSION['kumu_Oktober_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Oktober'][$i] = "{$max_LR_Oktober}";	
	}else{
		$min_LR_Oktober = $max_LR_Oktober + 1 ;
		$max_LR_Oktober = $_SESSION['kumu_Oktober_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Oktober'][$i] = "{$min_LR_Oktober}-{$max_LR_Oktober}";
		$_SESSION['interval_LR_Oktober_Min'][$i] = $min_LR_Oktober;
		$_SESSION['interval_LR_Oktober_Max'][$i] = $max_LR_Oktober; 
	}


	if($i == 0) {
		$min_LR_November= 0;
		$max_LR_November = $_SESSION['kumu_November_LR'][$i] * 1000; 
		$_SESSION['interval_LR_November'][$i] = "{$min_LR_November}-{$max_LR_November}";
		$_SESSION['interval_LR_November_Min'][$i] = $min_LR_November;
		$_SESSION['interval_LR_November_Max'][$i] = $max_LR_November; 	
	}else if($_SESSION['prob_LR_November'][$i] == 0.000){
		$max_LR_November = $_SESSION['kumu_November_LR'][$i] * 1000; 
		$_SESSION['interval_LR_November'][$i] = "{$max_LR_November}";	
	}else{
		$min_LR_November = $max_LR_November + 1 ;
		$max_LR_November = $_SESSION['kumu_November_LR'][$i] * 1000; 
		$_SESSION['interval_LR_November'][$i] = "{$min_LR_November}-{$max_LR_November}";
		$_SESSION['interval_LR_November_Min'][$i] = $min_LR_November;
		$_SESSION['interval_LR_November_Max'][$i] = $max_LR_November; 
	}


	if($i == 0) {
		$min_LR_Desember= 0;
		$max_LR_Desember = $_SESSION['kumu_Desember_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Desember'][$i] = "{$min_LR_Desember}-{$max_LR_Desember}";
		$_SESSION['interval_LR_Desember_Min'][$i] = $min_LR_Desember;
		$_SESSION['interval_LR_Desember_Max'][$i] = $max_LR_Desember; 	
	}else if($_SESSION['prob_LR_Desember'][$i] == 0.000){
		$max_LR_Desember = $_SESSION['kumu_Desember_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Desember'][$i] = "{$max_LR_Desember}";	
	}else{
		$min_LR_Desember = $max_LR_Desember + 1 ;
		$max_LR_Desember = $_SESSION['kumu_Desember_LR'][$i] * 1000; 
		$_SESSION['interval_LR_Desember'][$i] = "{$min_LR_Desember}-{$max_LR_Desember}";
		$_SESSION['interval_LR_Desember_Min'][$i] = $min_LR_Desember;
		$_SESSION['interval_LR_Desember_Max'][$i] = $max_LR_Desember; 
	}

}


?>


<div class="position-relative mt-4">
	<div class="accordion w-100 position-absolute top-0 start-50 translate-middle-x" id="accordionExample">
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingOne">
				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					<h5>Meninggal</h5>
				</button>
			</h2>
			<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				<div class="accordion-body">
					<div class="position-relative">
						
						<div class="icon_utama" data-bs-toggle="collapse" data-bs-target=".MD_all">
							<span>Show All : </span><i class="fa-solid fa-plus"></i>
						</div>

						<!-- bulan january -->
						<table class="table mb-0">
							<caption class="caption-top text-center">Data Meninggal Dunia</caption>
							<thead>
								<tr class="table-dark text-center">
									<th class="col-12" colspan="6">Bulan</i></th>
								</tr>
								
							</thead>

							<tbody>
								<tr>
									<table class="table table-bordered table-sm mb-0">
										<thead>
											<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr1">
												<th colspan="6" style="border-left-color:blue;">Januari <i class="fa-solid fa-caret-down"></i></th>
											</tr>
											<tr class="text-center collapse accordion-collapse MD_all" id="MDr1" data-bs-parent=".table">
												<th>No</th>
												<th>Bulan</th>
												<th>Frekuensi</th>
												<th>Probabilitas</th>
												<th>Kumulatif</th>
												<th>Interval Angka Acak</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
											<tr class="text-center collapse accordion-collapse MD_all" id="MDr1" data-bs-parent=".table">
												<td><?= $no++; ?></td>
												<td class="text-justify">Januari <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
												<td><?= $_SESSION['dataMD_bulan'][$i]['Januari']['data_bulan'];  ?></td>
												<td><?= $_SESSION['prob_MD_Januari'][$i]; ?></td>
												<td><?= $_SESSION['kumu_Januari_MD'][$i]; ?></td>
												<td><?= $_SESSION['interval_MD_Januari'][$i]; ?></td>	
											</tr>
										<?php endfor; ?>	
										<tr class="text-center collapse accordion-collapse MD_all" id="MDr1" data-bs-parent=".table">
											<th colspan="2">Total</th>
											<td><?= $_SESSION['jumlahFrekuensiMD_Januari']; ?></td>
											<td><?= $_SESSION['jumlah_prob_Januari_MD'] ?></td>
										</tr>
									</tbody>
								</table>

								<!-- bulan February -->
								<table class="table table-bordered table-sm mb-0">

									<thead>
										<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr2">
											<th colspan="6" style="border-left-color:blue;">Februari <i class="fa-solid fa-caret-down"></i></th>
										</tr>
										<tr class="text-center collapse accordion-collapse MD_all" id="MDr2" data-bs-parent=".table">
											<th>No</th>
											<th>Bulan</th>
											<th>Frekuensi</th>
											<th>Probabilitas</th>
											<th>Kumulatif</th>
											<th>Interval Angka Acak</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
										<tr class="text-center collapse accordion-collapse MD_all" id="MDr2" data-bs-parent=".table">
											<td><?= $no++; ?></td>
											<td>Februari  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
											<td><?= $_SESSION['dataMD_bulan'][$i]['Februari']['data_bulan'];  ?></td>	<td><?= $_SESSION['prob_MD_Februari'][$i]; ?></td>
											<td><?= $_SESSION['kumu_Februari_MD'][$i]; ?></td>
											<td><?= $_SESSION['interval_MD_Februari'][$i]; ?></td>	
										</tr>
										<?php endfor; ?>	
									<tr class="text-center collapse accordion-collapse MD_all" id="MDr2" data-bs-parent=".table">
										<th  colspan="2">Total</th>
										<td><?= $_SESSION['jumlahFrekuensiMD_Februari']; ?></td>
										<td><?= $_SESSION['jumlah_prob_Februari_MD'] ?></td>
									</tr>
								</tbody>
							</table>

							<!-- bulan Maret -->
							<table class="table table-bordered table-sm mb-0">
								<thead>
									<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr3">
										<th colspan="6" style="border-left-color:blue;">Maret <i class="fa-solid fa-caret-down"></i></th>
									</tr>
									<tr class="text-center collapse accordion-collapse MD_all" id="MDr3" data-bs-parent=".table">
										<th>No</th>
										<th>Bulan</th>
										<th>Frekuensi</th>
										<th>Probabilitas</th>
										<th>Kumulatif</th>
										<th>Interval Angka Acak</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
									<tr class="text-center collapse accordion-collapse MD_all" id="MDr3" data-bs-parent=".table">
										<td><?= $no++; ?></td>
										<td class="text-justify">Maret  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
										<td><?= $_SESSION['dataMD_bulan'][$i]['Maret']['data_bulan'];  ?></td>	
										<td><?= $_SESSION['prob_MD_Maret'][$i]; ?></td>
										<td><?= $_SESSION['kumu_Maret_MD'][$i]; ?></td>
										<td><?= $_SESSION['interval_MD_Maret'][$i]; ?></td>	
									</tr>
								<?php endfor; ?>	
								<tr class="text-center collapse accordion-collapse MD_all" id="MDr3" data-bs-parent=".table">
									<th  colspan="2">Total</th>
									<td><?= $_SESSION['jumlahFrekuensiMD_Maret']; ?></td>
									<td><?= $_SESSION['jumlah_prob_Maret_MD'] ?></td>
								</tr>
							</tbody>
						</table>

						<!-- bulan April -->
						<table class="table table-bordered table-sm mb-0">
							<thead>
								<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr4">
									<th colspan="6" style="border-left-color:blue;">April <i class="fa-solid fa-caret-down"></i></th>
								</tr>
								<tr class="text-center collapse accordion-collapse MD_all" id="MDr4" data-bs-parent=".table">
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse MD_all" id="MDr4" data-bs-parent=".table">
									<td><?= $no++; ?></td>
									<td class="text-justify">April  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataMD_bulan'][$i]['April']['data_bulan'];  ?></td>	
									<td><?= $_SESSION['prob_MD_April'][$i]; ?></td>
									<td><?= $_SESSION['kumu_April_MD'][$i]; ?></td>
									<td><?= $_SESSION['interval_MD_April'][$i]; ?></td>	
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse MD_all" id="MDr4" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiMD_April']; ?></td>
								<td><?= $_SESSION['jumlah_prob_April_MD'] ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Mei -->
					<table class="table table-bordered table-sm mb-0">

						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr5">
								<th colspan="6" style="border-left-color:red;">Mei <i class="fa-solid fa-caret-down"></i></th>
							</tr>
							<tr class="text-center collapse accordion-collapse MD_all" id="MDr5" data-bs-parent=".table">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
								<th>Probabilitas</th>
								<th>Kumulatif</th>
								<th>Interval Angka Acak</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center collapse accordion-collapse MD_all" id="MDr5" data-bs-parent=".table">
								<td><?= $no++; ?></td>
								<td class="text-justify">Mei  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['Mei']['data_bulan'];  ?></td>
								<td><?= $_SESSION['prob_MD_Mei'][$i]; ?></td>
								<td><?= $_SESSION['kumu_Mei_MD'][$i]; ?></td>
								<td><?= $_SESSION['interval_MD_Mei'][$i]; ?></td>	
							</tr>
						<?php endfor; ?>	
						<tr class="text-center collapse accordion-collapse MD_all" id="MDr5" data-bs-parent=".table">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_Mei']; ?></td>
							<td><?= $_SESSION['jumlah_prob_Mei_MD'] ?></td>
						</tr>
					</tbody>
				</table>

				<!-- bulan Juni -->
				<table class="table table-bordered table-sm mb-0">
					<thead>
						<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr6">
							<th colspan="6" style="border-left-color:red;">Juni <i class="fa-solid fa-caret-down"></i></th>
						</tr>
						<tr class="text-center collapse accordion-collapse MD_all" id="MDr6" data-bs-parent=".table">
							<th>No</th>
							<th>Bulan</th>
							<th>Frekuensi</th>
							<th>Probabilitas</th>
							<th>Kumulatif</th>
							<th>Interval Angka Acak</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
						<tr class="text-center collapse accordion-collapse MD_all" id="MDr6" data-bs-parent=".table">
							<td><?= $no++; ?></td>
							<td class="text-justify">Juni  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataMD_bulan'][$i]['Juni']['data_bulan'];  ?></td>	
							<td><?= $_SESSION['prob_MD_Juni'][$i]; ?></td>
							<td><?= $_SESSION['kumu_Juni_MD'][$i]; ?></td>
							<td><?= $_SESSION['interval_MD_Juni'][$i]; ?></td>	
						</tr>
					<?php endfor; ?>	
					<tr class="text-center collapse accordion-collapse MD_all" id="MDr6" data-bs-parent=".table">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiMD_Juni']; ?></td>
						<td><?= $_SESSION['jumlah_prob_Juni_MD'] ?></td>
					</tr>
				</tbody>
			</table>

			<!-- bulan Juli -->
			<table class="table table-bordered table-sm mb-0">
				<thead>
					<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr7">
						<th colspan="6" style="border-left-color:red;">Juli <i class="fa-solid fa-caret-down"></i></th>
					</tr>
					<tr class="text-center collapse accordion-collapse MD_all" id="MDr7" data-bs-parent=".table">
						<th>No</th>
						<th>Bulan</th>
						<th>Frekuensi</th>
						<th>Probabilitas</th>
						<th>Kumulatif</th>
						<th>Interval Angka Acak</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
					<tr class="text-center collapse accordion-collapse MD_all" id="MDr7" data-bs-parent=".table">
						<td><?= $no++; ?></td>
						<td class="text-justify">Juli  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
						<td><?= $_SESSION['dataMD_bulan'][$i]['Juli']['data_bulan'];  ?></td>	
						<td><?= $_SESSION['prob_MD_Juli'][$i]; ?></td>
						<td><?= $_SESSION['kumu_Juli_MD'][$i]; ?></td>
						<td><?= $_SESSION['interval_MD_Juli'][$i]; ?></td>	
					</tr>	
					<?php endfor; ?>
				<tr class="text-center collapse accordion-collapse MD_all" id="MDr7" data-bs-parent=".table">
					<th  colspan="2">Total</th>
					<td><?= $_SESSION['jumlahFrekuensiMD_Juli']; ?></td>
					<td><?= $_SESSION['jumlah_prob_Juli_MD'] ?></td>
				</tr>
			</tbody>
		</table>

		<!-- bulan Agustus -->
		<table class="table table-bordered table-sm mb-0">
			<thead>
				<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr8">
					<th colspan="6" style="border-left-color:red;">Agustus <i class="fa-solid fa-caret-down"></i></th>
				</tr>
				<tr class="text-center collapse accordion-collapse MD_all" id="MDr8" data-bs-parent=".table">
					<th>No</th>
					<th>Bulan</th>
					<th>Frekuensi</th>
					<th>Probabilitas</th>
					<th>Kumulatif</th>
					<th>Interval Angka Acak</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
				<tr class="text-center collapse accordion-collapse MD_all" id="MDr8" data-bs-parent=".table">
					<td><?= $no++; ?></td>
					<td class="text-justify">Agustus  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
					<td><?= $_SESSION['dataMD_bulan'][$i]['Agustus']['data_bulan'];  ?></td>	
					<td><?= $_SESSION['prob_MD_Agustus'][$i]; ?></td>
					<td><?= $_SESSION['kumu_Agustus_MD'][$i]; ?></td>
					<td><?= $_SESSION['interval_MD_Agustus'][$i]; ?></td>	
				</tr>
			<?php endfor; ?>	
			<tr class="text-center collapse accordion-collapse MD_all" id="MDr8" data-bs-parent=".table">
				<th  colspan="2">Total</th>
				<td><?= $_SESSION['jumlahFrekuensiMD_Agustus']; ?></td>
				<td><?= $_SESSION['jumlah_prob_Agustus_MD'] ?></td>
			</tr>
		</tbody>
	</table>

	<!-- bulan September -->
	<table class="table table-bordered table-sm mb-0">
		<thead>
			<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr9">
				<th colspan="6" style="border-left-color:red;">September <i class="fa-solid fa-caret-down"></i></th>
			</tr>
			<tr class="text-center collapse accordion-collapse MD_all" id="MDr9" data-bs-parent=".table">
				<th>No</th>
				<th>Bulan</th>
				<th>Frekuensi</th>
				<th>Probabilitas</th>
				<th>Kumulatif</th>
				<th>Interval Angka Acak</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
			<tr class="text-center collapse accordion-collapse MD_all" id="MDr9" data-bs-parent=".table">
				<td><?= $no++; ?></td>
				<td class="text-justify">September  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
				<td><?= $_SESSION['dataMD_bulan'][$i]['September']['data_bulan'];  ?></td>		
				<td><?= $_SESSION['prob_MD_September'][$i]; ?></td>
				<td><?= $_SESSION['kumu_September_MD'][$i]; ?></td>
				<td><?= $_SESSION['interval_MD_September'][$i]; ?></td>	
			</tr>
		<?php endfor; ?>	
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr9" data-bs-parent=".table">
			<th  colspan="2">Total</th>
			<td><?= $_SESSION['jumlahFrekuensiMD_September']; ?></td>
			<td><?= $_SESSION['jumlah_prob_September_MD'] ?></td>
		</tr>
	</tbody>
</table>

<!-- bulan Oktober -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr10">
			<th colspan="6" style="border-left-color:red;">Oktober <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr10" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr10" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">Oktober  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['Oktober']['data_bulan'];  ?></td>		
			<td><?= $_SESSION['prob_MD_Oktober'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Oktober_MD'][$i]; ?></td>
			<td><?= $_SESSION['interval_MD_Oktober'][$i]; ?></td>	
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse MD_all" id="MDr10" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_Oktober']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Oktober_MD'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan November -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr11">
			<th colspan="6" style="border-left-color:blue;">November <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr11" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr11" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">November  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['November']['data_bulan'];  ?></td>	
			<td><?= $_SESSION['prob_MD_November'][$i]; ?></td>
			<td><?= $_SESSION['kumu_November_MD'][$i]; ?></td>
			<td><?= $_SESSION['interval_MD_November'][$i]; ?></td>	
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse MD_all" id="MDr11" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_November']; ?></td>
		<td><?= $_SESSION['jumlah_prob_November_MD'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan Desember -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr12">
			<th colspan="6" style="border-left-color:blue;">Desember <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr12" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr12" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">Desember  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['Desember']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_MD_Desember'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Desember_MD'][$i]; ?></td>
			<td><?= $_SESSION['interval_MD_Desember'][$i]; ?></td>	
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse MD_all" id="MDr12" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_Desember']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Desember_MD'] ?></td>
	</tr>
</tbody>
</table>
</tr>
</tbody>
<ul style="list-style-type:square;">
	<li style="color: blue;"><span style="color: gray;">Musim Hujan</span></li>
	<li style="color: red;"><span style="color: gray;">Musim Kemarau</span></li>
</ul> 
</caption>
</table>
</div>
</div>
</div>
</div>
<div class="accordion-item">
	<h2 class="accordion-header" id="headingTwo">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			<h5>Luka Berat</h5>
		</button>
	</h2>	
	<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<div class="position-relative">
				<div class="icon_utama" data-bs-toggle="collapse" data-bs-target=".LB_all">
					<span>Show All : </span><i class="fa-solid fa-plus"></i>
				</div>

			<!-- bulan january -->
						<table class="table mb-0">
							<caption class="caption-top text-center">Data Luka Berat</caption>
							<thead>
								<tr class="table-dark text-center">
									<th class="col-12" colspan="6">Bulan</i></th>
								</tr>
								
							</thead>

							<tbody>
								<tr>
									<table class="table table-bordered table-sm mb-0">
										<thead>
											<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr1">
												<th colspan="6" style="border-left-color:blue;">Januari <i class="fa-solid fa-caret-down"></i></th>
											</tr>
											<tr class="text-center collapse accordion-collapse LB_all" id="LBr1" data-bs-parent=".table">
												<th>No</th>
												<th>Bulan</th>
												<th>Frekuensi</th>
												<th>Probabilitas</th>
												<th>Kumulatif</th>
												<th>Interval Angka Acak</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
											<tr class="text-center collapse accordion-collapse LB_all" id="LBr1" data-bs-parent=".table">
												<td><?= $no++; ?></td>
												<td class="text-justify">Januari <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
												<td><?= $_SESSION['dataLB_bulan'][$i]['Januari']['data_bulan'];  ?></td>
												<td><?= $_SESSION['prob_LB_Januari'][$i]; ?></td>
												<td><?= $_SESSION['kumu_Januari_LB'][$i]; ?></td>
												<td><?= $_SESSION['interval_LB_Januari'][$i]; ?></td>	
											</tr>
										<?php endfor; ?>	
										<tr class="text-center collapse accordion-collapse LB_all" id="LBr1" data-bs-parent=".table">
											<th colspan="2">Total</th>
											<td><?= $_SESSION['jumlahFrekuensiLB_Januari']; ?></td>
											<td><?= $_SESSION['jumlah_prob_Januari_LB'] ?></td>
										</tr>
									</tbody>
								</table>

								<!-- bulan February -->
								<table class="table table-bordered table-sm mb-0">

									<thead>
										<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr2">
											<th colspan="6" style="border-left-color:blue;">Februari <i class="fa-solid fa-caret-down"></i></th>
										</tr>
										<tr class="text-center collapse accordion-collapse LB_all" id="LBr2" data-bs-parent=".table">
											<th>No</th>
											<th>Bulan</th>
											<th>Frekuensi</th>
											<th>Probabilitas</th>
											<th>Kumulatif</th>
											<th>Interval Angka Acak</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
										<tr class="text-center collapse accordion-collapse LB_all" id="LBr2" data-bs-parent=".table">
											<td><?= $no++; ?></td>
											<td>Februari  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
											<td><?= $_SESSION['dataLB_bulan'][$i]['Februari']['data_bulan'];  ?></td>	<td><?= $_SESSION['prob_LB_Februari'][$i]; ?></td>
											<td><?= $_SESSION['kumu_Februari_LB'][$i]; ?></td>
											<td><?= $_SESSION['interval_LB_Februari'][$i]; ?></td>	
										</tr>
										<?php endfor; ?>	
									<tr class="text-center collapse accordion-collapse LB_all" id="LBr2" data-bs-parent=".table">
										<th  colspan="2">Total</th>
										<td><?= $_SESSION['jumlahFrekuensiLB_Februari']; ?></td>
										<td><?= $_SESSION['jumlah_prob_Februari_LB'] ?></td>
									</tr>
								</tbody>
							</table>

							<!-- bulan Maret -->
							<table class="table table-bordered table-sm mb-0">
								<thead>
									<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr3">
										<th colspan="6" style="border-left-color:blue;">Maret <i class="fa-solid fa-caret-down"></i></th>
									</tr>
									<tr class="text-center collapse accordion-collapse LB_all" id="LBr3" data-bs-parent=".table">
										<th>No</th>
										<th>Bulan</th>
										<th>Frekuensi</th>
										<th>Probabilitas</th>
										<th>Kumulatif</th>
										<th>Interval Angka Acak</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
									<tr class="text-center collapse accordion-collapse LB_all" id="LBr3" data-bs-parent=".table">
										<td><?= $no++; ?></td>
										<td class="text-justify">Maret  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
										<td><?= $_SESSION['dataLB_bulan'][$i]['Maret']['data_bulan'];  ?></td>	
										<td><?= $_SESSION['prob_LB_Maret'][$i]; ?></td>
										<td><?= $_SESSION['kumu_Maret_LB'][$i]; ?></td>
										<td><?= $_SESSION['interval_LB_Maret'][$i]; ?></td>	
									</tr>
								<?php endfor; ?>	
								<tr class="text-center collapse accordion-collapse LB_all" id="LBr3" data-bs-parent=".table">
									<th  colspan="2">Total</th>
									<td><?= $_SESSION['jumlahFrekuensiLB_Maret']; ?></td>
									<td><?= $_SESSION['jumlah_prob_Maret_LB'] ?></td>
								</tr>
							</tbody>
						</table>

						<!-- bulan April -->
						<table class="table table-bordered table-sm mb-0">
							<thead>
								<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr4">
									<th colspan="6" style="border-left-color:blue;">April <i class="fa-solid fa-caret-down"></i></th>
								</tr>
								<tr class="text-center collapse accordion-collapse LB_all" id="LBr4" data-bs-parent=".table">
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LB_all" id="LBr4" data-bs-parent=".table">
									<td><?= $no++; ?></td>
									<td class="text-justify">April  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLB_bulan'][$i]['April']['data_bulan'];  ?></td>	
									<td><?= $_SESSION['prob_LB_April'][$i]; ?></td>
									<td><?= $_SESSION['kumu_April_LB'][$i]; ?></td>
									<td><?= $_SESSION['interval_LB_April'][$i]; ?></td>	
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LB_all" id="LBr4" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLB_April']; ?></td>
								<td><?= $_SESSION['jumlah_prob_April_LB'] ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Mei -->
					<table class="table table-bordered table-sm mb-0">

						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr5">
								<th colspan="6" style="border-left-color:red;">Mei <i class="fa-solid fa-caret-down"></i></th>
							</tr>
							<tr class="text-center collapse accordion-collapse LB_all" id="LBr5" data-bs-parent=".table">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
								<th>Probabilitas</th>
								<th>Kumulatif</th>
								<th>Interval Angka Acak</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center collapse accordion-collapse LB_all" id="LBr5" data-bs-parent=".table">
								<td><?= $no++; ?></td>
								<td class="text-justify">Mei  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['Mei']['data_bulan'];  ?></td>
								<td><?= $_SESSION['prob_LB_Mei'][$i]; ?></td>
								<td><?= $_SESSION['kumu_Mei_LB'][$i]; ?></td>
								<td><?= $_SESSION['interval_LB_Mei'][$i]; ?></td>	
							</tr>
						<?php endfor; ?>	
						<tr class="text-center collapse accordion-collapse LB_all" id="LBr5" data-bs-parent=".table">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_Mei']; ?></td>
							<td><?= $_SESSION['jumlah_prob_Mei_LB'] ?></td>
						</tr>
					</tbody>
				</table>

				<!-- bulan Juni -->
				<table class="table table-bordered table-sm mb-0">
					<thead>
						<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr6">
							<th colspan="6" style="border-left-color:red;">Juni <i class="fa-solid fa-caret-down"></i></th>
						</tr>
						<tr class="text-center collapse accordion-collapse LB_all" id="LBr6" data-bs-parent=".table">
							<th>No</th>
							<th>Bulan</th>
							<th>Frekuensi</th>
							<th>Probabilitas</th>
							<th>Kumulatif</th>
							<th>Interval Angka Acak</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
						<tr class="text-center collapse accordion-collapse LB_all" id="LBr6" data-bs-parent=".table">
							<td><?= $no++; ?></td>
							<td class="text-justify">Juni  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataLB_bulan'][$i]['Juni']['data_bulan'];  ?></td>	
							<td><?= $_SESSION['prob_LB_Juni'][$i]; ?></td>
							<td><?= $_SESSION['kumu_Juni_LB'][$i]; ?></td>
							<td><?= $_SESSION['interval_LB_Juni'][$i]; ?></td>	
						</tr>
					<?php endfor; ?>	
					<tr class="text-center collapse accordion-collapse LB_all" id="LBr6" data-bs-parent=".table">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiLB_Juni']; ?></td>
						<td><?= $_SESSION['jumlah_prob_Juni_LB'] ?></td>
					</tr>
				</tbody>
			</table>

			<!-- bulan Juli -->
			<table class="table table-bordered table-sm mb-0">
				<thead>
					<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr7">
						<th colspan="6" style="border-left-color:red;">Juli <i class="fa-solid fa-caret-down"></i></th>
					</tr>
					<tr class="text-center collapse accordion-collapse LB_all" id="LBr7" data-bs-parent=".table">
						<th>No</th>
						<th>Bulan</th>
						<th>Frekuensi</th>
						<th>Probabilitas</th>
						<th>Kumulatif</th>
						<th>Interval Angka Acak</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
					<tr class="text-center collapse accordion-collapse LB_all" id="LBr7" data-bs-parent=".table">
						<td><?= $no++; ?></td>
						<td class="text-justify">Juli  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
						<td><?= $_SESSION['dataLB_bulan'][$i]['Juli']['data_bulan'];  ?></td>	
						<td><?= $_SESSION['prob_LB_Juli'][$i]; ?></td>
						<td><?= $_SESSION['kumu_Juli_LB'][$i]; ?></td>
						<td><?= $_SESSION['interval_LB_Juli'][$i]; ?></td>	
					</tr>	
					<?php endfor; ?>
				<tr class="text-center collapse accordion-collapse LB_all" id="LBr7" data-bs-parent=".table">
					<th  colspan="2">Total</th>
					<td><?= $_SESSION['jumlahFrekuensiLB_Juli']; ?></td>
					<td><?= $_SESSION['jumlah_prob_Juli_LB'] ?></td>
				</tr>
			</tbody>
		</table>

		<!-- bulan Agustus -->
		<table class="table table-bordered table-sm mb-0">
			<thead>
				<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr8">
					<th colspan="6" style="border-left-color:red;">Agustus <i class="fa-solid fa-caret-down"></i></th>
				</tr>
				<tr class="text-center collapse accordion-collapse LB_all" id="LBr8" data-bs-parent=".table">
					<th>No</th>
					<th>Bulan</th>
					<th>Frekuensi</th>
					<th>Probabilitas</th>
					<th>Kumulatif</th>
					<th>Interval Angka Acak</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
				<tr class="text-center collapse accordion-collapse LB_all" id="LBr8" data-bs-parent=".table">
					<td><?= $no++; ?></td>
					<td class="text-justify">Agustus  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
					<td><?= $_SESSION['dataLB_bulan'][$i]['Agustus']['data_bulan'];  ?></td>	
					<td><?= $_SESSION['prob_LB_Agustus'][$i]; ?></td>
					<td><?= $_SESSION['kumu_Agustus_LB'][$i]; ?></td>
					<td><?= $_SESSION['interval_LB_Agustus'][$i]; ?></td>	
				</tr>
			<?php endfor; ?>	
			<tr class="text-center collapse accordion-collapse LB_all" id="LBr8" data-bs-parent=".table">
				<th  colspan="2">Total</th>
				<td><?= $_SESSION['jumlahFrekuensiLB_Agustus']; ?></td>
				<td><?= $_SESSION['jumlah_prob_Agustus_LB'] ?></td>
			</tr>
		</tbody>
	</table>

	<!-- bulan September -->
	<table class="table table-bordered table-sm mb-0">
		<thead>
			<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr9">
				<th colspan="6" style="border-left-color:red;">September <i class="fa-solid fa-caret-down"></i></th>
			</tr>
			<tr class="text-center collapse accordion-collapse LB_all" id="LBr9" data-bs-parent=".table">
				<th>No</th>
				<th>Bulan</th>
				<th>Frekuensi</th>
				<th>Probabilitas</th>
				<th>Kumulatif</th>
				<th>Interval Angka Acak</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
			<tr class="text-center collapse accordion-collapse LB_all" id="LBr9" data-bs-parent=".table">
				<td><?= $no++; ?></td>
				<td class="text-justify">September  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
				<td><?= $_SESSION['dataLB_bulan'][$i]['September']['data_bulan'];  ?></td>		
				<td><?= $_SESSION['prob_LB_September'][$i]; ?></td>
				<td><?= $_SESSION['kumu_September_LB'][$i]; ?></td>
				<td><?= $_SESSION['interval_LB_September'][$i]; ?></td>	
			</tr>
		<?php endfor; ?>	
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr9" data-bs-parent=".table">
			<th  colspan="2">Total</th>
			<td><?= $_SESSION['jumlahFrekuensiLB_September']; ?></td>
			<td><?= $_SESSION['jumlah_prob_September_LB'] ?></td>
		</tr>
	</tbody>
</table>

<!-- bulan Oktober -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr10">
			<th colspan="6" style="border-left-color:red;">Oktober <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr10" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr10" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">Oktober  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['Oktober']['data_bulan'];  ?></td>		
			<td><?= $_SESSION['prob_LB_Oktober'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Oktober_LB'][$i]; ?></td>
			<td><?= $_SESSION['interval_LB_Oktober'][$i]; ?></td>	
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LB_all" id="LBr10" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_Oktober']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Oktober_LB'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan November -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr11">
			<th colspan="6" style="border-left-color:blue;">November <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr11" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr11" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">November  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['November']['data_bulan'];  ?></td>	
			<td><?= $_SESSION['prob_LB_November'][$i]; ?></td>
			<td><?= $_SESSION['kumu_November_LB'][$i]; ?></td>
			<td><?= $_SESSION['interval_LB_November'][$i]; ?></td>	
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LB_all" id="LBr11" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_November']; ?></td>
		<td><?= $_SESSION['jumlah_prob_November_LB'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan Desember -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr12">
			<th colspan="6" style="border-left-color:blue;">Desember <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr12" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr12" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">Desember  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['Desember']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LB_Desember'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Desember_LB'][$i]; ?></td>
			<td><?= $_SESSION['interval_LB_Desember'][$i]; ?></td>	
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LB_all" id="LBr12" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_Desember']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Desember_LB'] ?></td>
	</tr>
</tbody>
</table>
</tr>
</tbody>
<ul style="list-style-type:square;">
	<li style="color: blue;"><span style="color: gray;">Musim Hujan</span></li>
	<li style="color: red;"><span style="color: gray;">Musim Kemarau</span></li>
</ul> 
</caption>
</table>

</div>
</div>
</div>
</div>
<div class="accordion-item">
	<h2 class="accordion-header" id="headingThree">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
			<h5>Luka Ringan</h5>
		</button>
	</h2>
	<div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<div class="position-relative">
				<div class="icon_utama" data-bs-toggle="collapse" data-bs-target=".LR_all">
					<span>Show All : </span><i class="fa-solid fa-plus"></i>
				</div>

			<!-- bulan january -->
						<table class="table mb-0">
							<caption class="caption-top text-center">Data Luka Ringan</caption>
							<thead>
								<tr class="table-dark text-center">
									<th class="col-12" colspan="6">Bulan</i></th>
								</tr>
								
							</thead>

							<tbody>
								<tr>
									<table class="table table-bordered table-sm mb-0">
										<thead>
											<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr1">
												<th colspan="6" style="border-left-color:blue;">Januari <i class="fa-solid fa-caret-down"></i></th>
											</tr>
											<tr class="text-center collapse accordion-collapse LR_all" id="LRr1" data-bs-parent=".table">
												<th>No</th>
												<th>Bulan</th>
												<th>Frekuensi</th>
												<th>Probabilitas</th>
												<th>Kumulatif</th>
												<th>Interval Angka Acak</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
											<tr class="text-center collapse accordion-collapse LR_all" id="LRr1" data-bs-parent=".table">
												<td><?= $no++; ?></td>
												<td class="text-justify">Januari <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
												<td><?= $_SESSION['dataLR_bulan'][$i]['Januari']['data_bulan'];  ?></td>
												<td><?= $_SESSION['prob_LR_Januari'][$i]; ?></td>
												<td><?= $_SESSION['kumu_Januari_LR'][$i]; ?></td>
												<td><?= $_SESSION['interval_LR_Januari'][$i]; ?></td>	
											</tr>
										<?php endfor; ?>	
										<tr class="text-center collapse accordion-collapse LR_all" id="LRr1" data-bs-parent=".table">
											<th colspan="2">Total</th>
											<td><?= $_SESSION['jumlahFrekuensiLR_Januari']; ?></td>
											<td><?= $_SESSION['jumlah_prob_Januari_LR'] ?></td>
										</tr>
									</tbody>
								</table>

								<!-- bulan February -->
								<table class="table table-bordered table-sm mb-0">

									<thead>
										<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr2">
											<th colspan="6" style="border-left-color:blue;">Februari <i class="fa-solid fa-caret-down"></i></th>
										</tr>
										<tr class="text-center collapse accordion-collapse LR_all" id="LRr2" data-bs-parent=".table">
											<th>No</th>
											<th>Bulan</th>
											<th>Frekuensi</th>
											<th>Probabilitas</th>
											<th>Kumulatif</th>
											<th>Interval Angka Acak</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
										<tr class="text-center collapse accordion-collapse LR_all" id="LRr2" data-bs-parent=".table">
											<td><?= $no++; ?></td>
											<td>Februari  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
											<td><?= $_SESSION['dataLR_bulan'][$i]['Februari']['data_bulan'];  ?></td>	<td><?= $_SESSION['prob_LR_Februari'][$i]; ?></td>
											<td><?= $_SESSION['kumu_Februari_LR'][$i]; ?></td>
											<td><?= $_SESSION['interval_LR_Februari'][$i]; ?></td>	
										</tr>
										<?php endfor; ?>	
									<tr class="text-center collapse accordion-collapse LR_all" id="LRr2" data-bs-parent=".table">
										<th  colspan="2">Total</th>
										<td><?= $_SESSION['jumlahFrekuensiLR_Februari']; ?></td>
										<td><?= $_SESSION['jumlah_prob_Februari_LR'] ?></td>
									</tr>
								</tbody>
							</table>

							<!-- bulan Maret -->
							<table class="table table-bordered table-sm mb-0">
								<thead>
									<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr3">
										<th colspan="6" style="border-left-color:blue;">Maret <i class="fa-solid fa-caret-down"></i></th>
									</tr>
									<tr class="text-center collapse accordion-collapse LR_all" id="LRr3" data-bs-parent=".table">
										<th>No</th>
										<th>Bulan</th>
										<th>Frekuensi</th>
										<th>Probabilitas</th>
										<th>Kumulatif</th>
										<th>Interval Angka Acak</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
									<tr class="text-center collapse accordion-collapse LR_all" id="LRr3" data-bs-parent=".table">
										<td><?= $no++; ?></td>
										<td class="text-justify">Maret  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
										<td><?= $_SESSION['dataLR_bulan'][$i]['Maret']['data_bulan'];  ?></td>	
										<td><?= $_SESSION['prob_LR_Maret'][$i]; ?></td>
										<td><?= $_SESSION['kumu_Maret_LR'][$i]; ?></td>
										<td><?= $_SESSION['interval_LR_Maret'][$i]; ?></td>	
									</tr>
								<?php endfor; ?>	
								<tr class="text-center collapse accordion-collapse LR_all" id="LRr3" data-bs-parent=".table">
									<th  colspan="2">Total</th>
									<td><?= $_SESSION['jumlahFrekuensiLR_Maret']; ?></td>
									<td><?= $_SESSION['jumlah_prob_Maret_LR'] ?></td>
								</tr>
							</tbody>
						</table>

						<!-- bulan April -->
						<table class="table table-bordered table-sm mb-0">
							<thead>
								<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr4">
									<th colspan="6" style="border-left-color:blue;">April <i class="fa-solid fa-caret-down"></i></th>
								</tr>
								<tr class="text-center collapse accordion-collapse LR_all" id="LRr4" data-bs-parent=".table">
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LR_all" id="LRr4" data-bs-parent=".table">
									<td><?= $no++; ?></td>
									<td class="text-justify">April  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLR_bulan'][$i]['April']['data_bulan'];  ?></td>	
									<td><?= $_SESSION['prob_LR_April'][$i]; ?></td>
									<td><?= $_SESSION['kumu_April_LR'][$i]; ?></td>
									<td><?= $_SESSION['interval_LR_April'][$i]; ?></td>	
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LR_all" id="LRr4" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLR_April']; ?></td>
								<td><?= $_SESSION['jumlah_prob_April_LR'] ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Mei -->
					<table class="table table-bordered table-sm mb-0">

						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr5">
								<th colspan="6" style="border-left-color:red;">Mei <i class="fa-solid fa-caret-down"></i></th>
							</tr>
							<tr class="text-center collapse accordion-collapse LR_all" id="LRr5" data-bs-parent=".table">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
								<th>Probabilitas</th>
								<th>Kumulatif</th>
								<th>Interval Angka Acak</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center collapse accordion-collapse LR_all" id="LRr5" data-bs-parent=".table">
								<td><?= $no++; ?></td>
								<td class="text-justify">Mei  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['Mei']['data_bulan'];  ?></td>
								<td><?= $_SESSION['prob_LR_Mei'][$i]; ?></td>
								<td><?= $_SESSION['kumu_Mei_LR'][$i]; ?></td>
								<td><?= $_SESSION['interval_LR_Mei'][$i]; ?></td>	
							</tr>
						<?php endfor; ?>	
						<tr class="text-center collapse accordion-collapse LR_all" id="LRr5" data-bs-parent=".table">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_Mei']; ?></td>
							<td><?= $_SESSION['jumlah_prob_Mei_LR'] ?></td>
						</tr>
					</tbody>
				</table>

				<!-- bulan Juni -->
				<table class="table table-bordered table-sm mb-0">
					<thead>
						<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr6">
							<th colspan="6" style="border-left-color:red;">Juni <i class="fa-solid fa-caret-down"></i></th>
						</tr>
						<tr class="text-center collapse accordion-collapse LR_all" id="LRr6" data-bs-parent=".table">
							<th>No</th>
							<th>Bulan</th>
							<th>Frekuensi</th>
							<th>Probabilitas</th>
							<th>Kumulatif</th>
							<th>Interval Angka Acak</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
						<tr class="text-center collapse accordion-collapse LR_all" id="LRr6" data-bs-parent=".table">
							<td><?= $no++; ?></td>
							<td class="text-justify">Juni  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataLR_bulan'][$i]['Juni']['data_bulan'];  ?></td>	
							<td><?= $_SESSION['prob_LR_Juni'][$i]; ?></td>
							<td><?= $_SESSION['kumu_Juni_LR'][$i]; ?></td>
							<td><?= $_SESSION['interval_LR_Juni'][$i]; ?></td>	
						</tr>
					<?php endfor; ?>	
					<tr class="text-center collapse accordion-collapse LR_all" id="LRr6" data-bs-parent=".table">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiLR_Juni']; ?></td>
						<td><?= $_SESSION['jumlah_prob_Juni_LR'] ?></td>
					</tr>
				</tbody>
			</table>

			<!-- bulan Juli -->
			<table class="table table-bordered table-sm mb-0">
				<thead>
					<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr7">
						<th colspan="6" style="border-left-color:red;">Juli <i class="fa-solid fa-caret-down"></i></th>
					</tr>
					<tr class="text-center collapse accordion-collapse LR_all" id="LRr7" data-bs-parent=".table">
						<th>No</th>
						<th>Bulan</th>
						<th>Frekuensi</th>
						<th>Probabilitas</th>
						<th>Kumulatif</th>
						<th>Interval Angka Acak</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
					<tr class="text-center collapse accordion-collapse LR_all" id="LRr7" data-bs-parent=".table">
						<td><?= $no++; ?></td>
						<td class="text-justify">Juli  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
						<td><?= $_SESSION['dataLR_bulan'][$i]['Juli']['data_bulan'];  ?></td>	
						<td><?= $_SESSION['prob_LR_Juli'][$i]; ?></td>
						<td><?= $_SESSION['kumu_Juli_LR'][$i]; ?></td>
						<td><?= $_SESSION['interval_LR_Juli'][$i]; ?></td>	
					</tr>	
					<?php endfor; ?>
				<tr class="text-center collapse accordion-collapse LR_all" id="LRr7" data-bs-parent=".table">
					<th  colspan="2">Total</th>
					<td><?= $_SESSION['jumlahFrekuensiLR_Juli']; ?></td>
					<td><?= $_SESSION['jumlah_prob_Juli_LR'] ?></td>
				</tr>
			</tbody>
		</table>

		<!-- bulan Agustus -->
		<table class="table table-bordered table-sm mb-0">
			<thead>
				<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr8">
					<th colspan="6" style="border-left-color:red;">Agustus <i class="fa-solid fa-caret-down"></i></th>
				</tr>
				<tr class="text-center collapse accordion-collapse LR_all" id="LRr8" data-bs-parent=".table">
					<th>No</th>
					<th>Bulan</th>
					<th>Frekuensi</th>
					<th>Probabilitas</th>
					<th>Kumulatif</th>
					<th>Interval Angka Acak</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
				<tr class="text-center collapse accordion-collapse LR_all" id="LRr8" data-bs-parent=".table">
					<td><?= $no++; ?></td>
					<td class="text-justify">Agustus  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
					<td><?= $_SESSION['dataLR_bulan'][$i]['Agustus']['data_bulan'];  ?></td>	
					<td><?= $_SESSION['prob_LR_Agustus'][$i]; ?></td>
					<td><?= $_SESSION['kumu_Agustus_LR'][$i]; ?></td>
					<td><?= $_SESSION['interval_LR_Agustus'][$i]; ?></td>	
				</tr>
			<?php endfor; ?>	
			<tr class="text-center collapse accordion-collapse LR_all" id="LRr8" data-bs-parent=".table">
				<th  colspan="2">Total</th>
				<td><?= $_SESSION['jumlahFrekuensiLR_Agustus']; ?></td>
				<td><?= $_SESSION['jumlah_prob_Agustus_LR'] ?></td>
			</tr>
		</tbody>
	</table>

	<!-- bulan September -->
	<table class="table table-bordered table-sm mb-0">
		<thead>
			<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr9">
				<th colspan="6" style="border-left-color:red;">September <i class="fa-solid fa-caret-down"></i></th>
			</tr>
			<tr class="text-center collapse accordion-collapse LR_all" id="LRr9" data-bs-parent=".table">
				<th>No</th>
				<th>Bulan</th>
				<th>Frekuensi</th>
				<th>Probabilitas</th>
				<th>Kumulatif</th>
				<th>Interval Angka Acak</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
			<tr class="text-center collapse accordion-collapse LR_all" id="LRr9" data-bs-parent=".table">
				<td><?= $no++; ?></td>
				<td class="text-justify">September  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
				<td><?= $_SESSION['dataLR_bulan'][$i]['September']['data_bulan'];  ?></td>		
				<td><?= $_SESSION['prob_LR_September'][$i]; ?></td>
				<td><?= $_SESSION['kumu_September_LR'][$i]; ?></td>
				<td><?= $_SESSION['interval_LR_September'][$i]; ?></td>	
			</tr>
		<?php endfor; ?>	
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr9" data-bs-parent=".table">
			<th  colspan="2">Total</th>
			<td><?= $_SESSION['jumlahFrekuensiLR_September']; ?></td>
			<td><?= $_SESSION['jumlah_prob_September_LR'] ?></td>
		</tr>
	</tbody>
</table>

<!-- bulan Oktober -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr10">
			<th colspan="6" style="border-left-color:red;">Oktober <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr10" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr10" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">Oktober  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['Oktober']['data_bulan'];  ?></td>		
			<td><?= $_SESSION['prob_LR_Oktober'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Oktober_LR'][$i]; ?></td>
			<td><?= $_SESSION['interval_LR_Oktober'][$i]; ?></td>	
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LR_all" id="LRr10" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_Oktober']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Oktober_LR'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan November -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr11">
			<th colspan="6" style="border-left-color:blue;">November <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr11" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr11" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">November  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['November']['data_bulan'];  ?></td>	
			<td><?= $_SESSION['prob_LR_November'][$i]; ?></td>
			<td><?= $_SESSION['kumu_November_LR'][$i]; ?></td>
			<td><?= $_SESSION['interval_LR_November'][$i]; ?></td>	
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LR_all" id="LRr11" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_November']; ?></td>
		<td><?= $_SESSION['jumlah_prob_November_LR'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan Desember -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr12">
			<th colspan="6" style="border-left-color:blue;">Desember <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr12" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr12" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">Desember  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['Desember']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LR_Desember'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Desember_LR'][$i]; ?></td>
			<td><?= $_SESSION['interval_LR_Desember'][$i]; ?></td>	
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LR_all" id="LRr12" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_Desember']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Desember_LR'] ?></td>
	</tr>
</tbody>
</table>
</tr>
</tbody>
<ul style="list-style-type:square;">
	<li style="color: blue;"><span style="color: gray;">Musim Hujan</span></li>
	<li style="color: red;"><span style="color: gray;">Musim Kemarau</span></li>
</ul> 
</caption>
</table>

</div>		
</div>
</div>
</div>
</div>
</div>

