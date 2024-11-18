<style>
input{
	width:100%;
}
</style>

<?php
$koneksi = mysqli_connect("localhost", "root", "", "pmbni");
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Cheklist_Inventory_Network.xls");
$query = mysqli_query($koneksi, "SELECT id, cabang, alamat, tanggal_kunjungan, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36, i37, i38, i39, i40, i41, i42, i43, i44, i45, i46, i47, i48, i49, i50, i51, i52, i53, i54, i55, i56, i57, i58, i59, i60, i61, i62, i63, i64, i65, i66, i67, i68, i69, i70, i71, i72, i73, i74, i75, i76, i77, i78, i79, i80, i81, i82, i83, i84, i85, i86, i87, i88, i89, i90, i91, i92, i93, i94, i95, i96, i97, i98, i99, i100, i101, i102 , i103, i104 , i105 , i106 , i107 , i108 , i109 , i110 , i111 , i112 , i113 , i114 , i115 , i116 , i117 , i118, i119, i120, i121, i122, i123, i124, i125, i126, i127, i128, i129, i130, i131, i132, i133, i134, i135, i136, i137, i138, i139, i140, i141, i142, i143, i144, i145, i146, i147, i148, i149, i150, i151, i152, i153, i154, i155, i156, i157, i158, i159, i160, i161, i162, i163, i164, i165, i166, i167, i168, i169, i170, i171, i172, i173, i174, i175, i176, i177, i178, i179, i180, i181, i182,  i183, i184, i185, i186, i187, i188, i189, i190, i191, i192, i193, i194, i195, i196, i197, i198, i199, i200, i201, i202, i203, i204, i205, i206, i207, i208, i209, i210, i211, i212, i213, i214, i215, i216, i217, i218, i219, i220, i221, i222, i223, i224, i225, i226, i227, i228, i229, i230, i231, i232, i233, i234, i235, i236, i237, i238, i239, i240, i241, i242, i243, i244, i245, i246, i247, i248, i249, i250, i251, i252, i253, i254, i255, i256, i257, i258, i259, i260, i261, i262, i263, i264, i265, i266, i267, i268, i269, i270, i271, i272, i273, i274, i275, i276, i277, i278, i279, i280, i281, i282, i283, i284, i285, i286, i287, i288, i289, i290, i291, i292, i293, i294, i295, i296, i297, i298, i299, i300, i301, i302, i303, i304, i305, i306, i307, i308, i309, i310, i311, i312, i313, i314, i315, i316, i317, i318, i319, i320, i321, i322, i323, i324, i325, i326, i327, i328, i329, i330, i331, i332, i333, i334, i335, i336, i337, i338, i339, i340, i341, i342, i343, i344, i345, i346, i347, i348, i349, i350, i351, i352, i353, i354, i355, i356, i357, i358, i359, i360, i361, i362, i363, i364, i365, i366, i367, i368, i369, i370, i371, i372, i373, i374, i375, i376, i377, i378, i379, i380, i381, i382, i383, i384, i385, i386, i387, i388, i389, i390, i391, i392, i393, i394, i395, i396, i397, i398, i399, i400, i401, i402, i403, i404, i405, i406, i407, i408, i409, i410, i411, i412, i413, i414, i415, i416, i417, i418, i419, i420, i421, i422, i423, i424, i425, i426, i427, i428, i429, i430, i431, i432, i433, i434, i435, i436, i437, i438, i439, i440, i441, i442, i443, i444, i445, i446, i447, i448, i449, i450, i451, i452, i453, i454, i455, i456, i457, i458, i459, i460, i461, i462, i463, i464, i465, i466, i467, i468, i469, i470, i471, i472, i473, i474, i475, i476, i477, i478, i479, i480, i481, i482, i483, i484, i485, i486, i487, i488, i489, i490, i491, i492, i493, i494, i495, i496, i497, i498, i499, i500, i501, i502, i503, i504, i505, i506, i507, i508, i509, i510, i511, i512, i513  FROM inventorynetwork WHERE id='".$_GET['id']."'");
										while($data = mysqli_fetch_array($query)){
$id = $data['id'];
$cabang = $data['cabang'];
$alamat = $data['alamat'];
$tanggal_kunjungan = $data['tanggal_kunjungan'];
$i1 = $data['i1'];
$i2 = $data['i2'];
$i3 = $data['i3'];
$i4 = $data['i4'];
$i5 = $data['i5'];
$i6 = $data['i6'];
$i7 = $data['i7'];
$i8 = $data['i8'];
$i9 = $data['i9'];
$i10 = $data['i10'];
$i11 = $data['i11'];
$i12 = $data['i12'];
$i13 = $data['i13'];
$i14 = $data['i14'];
$i15 = $data['i15'];
$i16 = $data['i16'];
$i17 = $data['i17'];
$i18 = $data['i18'];
$i19 = $data['i19'];
$i20 = $data['i20'];
$i21 = $data['i21'];
$i22 = $data['i22'];
$i23 = $data['i23'];
$i24 = $data['i24'];
$i25 = $data['i25'];
$i26 = $data['i26'];
$i27 = $data['i27'];
$i28 = $data['i28'];
$i29 = $data['i29'];
$i30 = $data['i30'];
$i31 = $data['i31'];
$i32 = $data['i32'];
$i33 = $data['i33'];
$i34 = $data['i34'];
$i35 = $data['i35'];
$i36 = $data['i36'];
$i37 = $data['i37'];
$i38 = $data['i38'];
$i39 = $data['i39'];
$i40 = $data['i40'];
$i41 = $data['i41'];
$i42 = $data['i42'];
$i43 = $data['i43'];
$i44 = $data['i44'];
$i45 = $data['i45'];
$i46 = $data['i46'];
$i47 = $data['i47'];
$i48 = $data['i48'];
$i49 = $data['i49'];
$i50 = $data['i50'];
$i51 = $data['i51'];
$i52 = $data['i52'];
$i53 = $data['i53'];
$i54 = $data['i54'];
$i55 = $data['i55'];
$i56 = $data['i56'];
$i57 = $data['i57'];
$i58 = $data['i58'];
$i59 = $data['i59'];
$i60 = $data['i60'];
$i61 = $data['i61'];
$i62 = $data['i62'];
$i63 = $data['i63'];
$i64 = $data['i64'];
$i65 = $data['i65'];
$i66 = $data['i66'];
$i67 = $data['i67'];
$i68 = $data['i68'];
$i69 = $data['i69'];
$i70 = $data['i70'];
$i71 = $data['i71'];
$i72 = $data['i72'];
$i73 = $data['i73'];
$i74 = $data['i74'];
$i75 = $data['i75'];
$i76 = $data['i76'];
$i77 = $data['i77'];
$i78 = $data['i78'];
$i79 = $data['i79'];
$i80 = $data['i80'];
$i81 = $data['i81'];
$i82 = $data['i82'];
$i83 = $data['i83'];
$i84 = $data['i84'];
$i85 = $data['i85'];
$i86 = $data['i86'];
$i87 = $data['i87'];
$i88 = $data['i88'];
$i89 = $data['i89'];
$i90 = $data['i90'];
$i91 = $data['i91'];
$i92 = $data['i92'];
$i93 = $data['i93'];
$i94 = $data['i94'];
$i95 = $data['i95'];
$i96 = $data['i96'];
$i97 = $data['i97'];
$i98 = $data['i98'];
$i99 = $data['i99'];
$i100 = $data['i100'];
$i101 = $data['i101'];
$i102 = $data['i102'];
$i103 = $data['i103'];
$i104 = $data['i104'];
$i105 = $data['i105'];
$i106 = $data['i106'];
$i107 = $data['i107'];
$i108 = $data['i108'];
$i109 = $data['i109'];
$i110 = $data['i110'];
$i111 = $data['i111'];
$i112 = $data['i112'];
$i113 = $data['i113'];
$i114 = $data['i114'];
$i115 = $data['i115'];
$i116 = $data['i116'];
$i117 = $data['i117'];
$i118 = $data['i118'];
$i119 = $data['i119'];
$i120 = $data['i120'];
$i121 = $data['i121'];
$i122 = $data['i122'];
$i123 = $data['i123'];
$i124 = $data['i124'];
$i125 = $data['i125'];
$i126 = $data['i126'];
$i127 = $data['i127'];
$i128 = $data['i128'];
$i129 = $data['i129'];
$i130 = $data['i130'];
$i131 = $data['i131'];
$i132 = $data['i132'];
$i133 = $data['i133'];
$i134 = $data['i134'];
$i135 = $data['i135'];
$i136 = $data['i136'];
$i137 = $data['i137'];
$i138 = $data['i138'];
$i139 = $data['i139'];
$i140 = $data['i140'];
$i141 = $data['i141'];
$i142 = $data['i142'];
$i143 = $data['i143'];
$i144 = $data['i144'];
$i145 = $data['i145'];
$i146 = $data['i146'];
$i147 = $data['i147'];
$i148 = $data['i148'];
$i149 = $data['i149'];
$i150 = $data['i150'];
$i151 = $data['i151'];
$i152 = $data['i152'];
$i153 = $data['i153'];
$i154 = $data['i154'];
$i155 = $data['i155'];
$i156 = $data['i156'];
$i157 = $data['i157'];
$i158 = $data['i158'];
$i159 = $data['i159'];
$i160 = $data['i160'];
$i161 = $data['i161'];
$i162 = $data['i162'];
$i163 = $data['i163'];
$i164 = $data['i164'];
$i165 = $data['i165'];
$i166 = $data['i166'];
$i167 = $data['i167'];
$i168 = $data['i168'];
$i169 = $data['i169'];
$i170 = $data['i170'];
$i171 = $data['i171'];
$i172 = $data['i172'];
$i173 = $data['i173'];
$i174 = $data['i174'];
$i175 = $data['i175'];
$i176 = $data['i176'];
$i177 = $data['i177'];
$i178 = $data['i178'];
$i179 = $data['i179'];
$i180 = $data['i180'];
$i181 = $data['i181'];
$i182 = $data['i182'];
$i183 = $data['i183'];
$i184 = $data['i184'];
$i185 = $data['i185'];
$i186 = $data['i186'];
$i187 = $data['i187'];
$i188 = $data['i188'];
$i189 = $data['i189'];
$i190 = $data['i190'];
$i191 = $data['i191'];
$i192 = $data['i192'];
$i193 = $data['i193'];
$i194 = $data['i194'];
$i195 = $data['i195'];    
$i196 = $data['i196'];
$i197 = $data['i197'];
$i198 = $data['i198'];
$i199 = $data['i199'];
$i200 = $data['i200'];
$i201 = $data['i201'];
$i202 = $data['i202'];
$i203 = $data['i203'];
$i204 = $data['i204'];
$i205 = $data['i205'];
$i206 = $data['i206'];
$i207 = $data['i207'];
$i208 = $data['i208'];
$i209 = $data['i209'];
$i210 = $data['i210'];
$i211 = $data['i211'];
$i212 = $data['i212'];
$i213 = $data['i213'];
$i214 = $data['i214'];
$i215 = $data['i215'];
$i216 = $data['i216'];
$i217 = $data['i217'];
$i218 = $data['i218'];
$i219 = $data['i219'];
$i220 = $data['i220'];
$i221 = $data['i221'];
$i222 = $data['i222'];
$i223 = $data['i223'];
$i224 = $data['i224'];
$i225 = $data['i225'];
$i226 = $data['i226'];
$i227 = $data['i227'];
$i228 = $data['i228'];
$i229 = $data['i229'];
$i230 = $data['i230'];
$i231 = $data['i231'];
$i232 = $data['i232'];
$i233 = $data['i233'];
$i234 = $data['i234'];
$i235 = $data['i235'];
$i236 = $data['i236'];
$i237 = $data['i237'];
$i238 = $data['i238'];
$i239 = $data['i239'];
$i240 = $data['i240'];
$i241 = $data['i241'];
$i242 = $data['i242'];
$i243 = $data['i243'];
$i244 = $data['i244'];
$i245 = $data['i245'];
$i246 = $data['i246'];
$i247 = $data['i247'];
$i248 = $data['i248'];
$i249 = $data['i249'];
$i250 = $data['i250'];
$i251 = $data['i251'];
$i252 = $data['i252'];
$i253 = $data['i253'];
$i254 = $data['i254'];
$i255 = $data['i255'];
$i256 = $data['i256'];
$i257 = $data['i257'];
$i258 = $data['i258'];
$i259 = $data['i259'];
$i260 = $data['i260'];
$i261 = $data['i261'];
$i262 = $data['i262'];
$i263 = $data['i263'];
$i264 = $data['i264'];
$i265 = $data['i265'];
$i266 = $data['i266'];
$i267 = $data['i267'];
$i268 = $data['i268'];
$i269 = $data['i269'];
$i270 = $data['i270'];
$i271 = $data['i271'];
$i272 = $data['i272'];
$i273 = $data['i273'];
$i274 = $data['i274'];
$i275 = $data['i275'];
$i276 = $data['i276'];
$i277 = $data['i277'];
$i278 = $data['i278'];
$i279 = $data['i279'];
$i280 = $data['i280'];
$i281 = $data['i281'];
$i282 = $data['i282'];
$i283 = $data['i283'];
$i284 = $data['i284'];
$i285 = $data['i285'];
$i286 = $data['i286'];
$i287 = $data['i287'];
$i288 = $data['i288'];
$i289 = $data['i289'];
$i290 = $data['i290'];
$i291 = $data['i291'];
$i292 = $data['i292'];
$i293 = $data['i293'];
$i294 = $data['i294'];
$i295 = $data['i295'];
$i296 = $data['i296'];
$i297 = $data['i297'];
$i298 = $data['i298'];
$i299 = $data['i299'];
$i300 = $data['i300'];
$i301 = $data['i301'];
$i302 = $data['i302'];
$i303 = $data['i303'];
$i304 = $data['i304'];
$i305 = $data['i305'];
$i306 = $data['i306'];
$i307 = $data['i307'];
$i308 = $data['i308'];
$i309 = $data['i309'];
$i310 = $data['i310'];
$i311 = $data['i311'];
$i312 = $data['i312'];
$i313 = $data['i313'];
$i314 = $data['i314'];
$i315 = $data['i315'];
$i316 = $data['i316'];
$i317 = $data['i317'];
$i318 = $data['i318'];
$i319 = $data['i319'];
$i320 = $data['i320'];
$i321 = $data['i321'];
$i322 = $data['i322'];
$i323 = $data['i323'];
$i324 = $data['i324'];
$i325 = $data['i325'];
$i326 = $data['i326'];
$i327 = $data['i327'];
$i328 = $data['i328'];
$i329 = $data['i329'];
$i330 = $data['i330'];
$i331 = $data['i331'];
$i332 = $data['i332'];
$i333 = $data['i333'];
$i334 = $data['i334'];
$i335 = $data['i335'];
$i336 = $data['i336'];
$i337 = $data['i337'];
$i338 = $data['i338'];
$i339 = $data['i339'];
$i340 = $data['i340'];
$i341 = $data['i341'];
$i342 = $data['i342'];
$i343 = $data['i343'];
$i344 = $data['i344'];
$i345 = $data['i345'];
$i346 = $data['i346'];
$i347 = $data['i347'];
$i348 = $data['i348'];
$i349 = $data['i349'];
$i350 = $data['i350'];
$i351 = $data['i351'];
$i352 = $data['i352'];
$i353 = $data['i353'];
$i354 = $data['i354'];
$i355 = $data['i355'];
$i356 = $data['i356'];
$i357 = $data['i357'];
$i358 = $data['i358'];
$i359 = $data['i359'];
$i360 = $data['i360'];
$i361 = $data['i361'];
$i362 = $data['i362'];
$i363 = $data['i363'];
$i364 = $data['i364'];
$i365 = $data['i365'];
$i366 = $data['i366'];
$i367 = $data['i367'];
$i368 = $data['i368'];
$i369 = $data['i369'];
$i370 = $data['i370'];
$i371 = $data['i371'];
$i372 = $data['i372'];
$i373 = $data['i373'];
$i374 = $data['i374'];
$i375 = $data['i375'];
$i376 = $data['i376'];
$i377 = $data['i377'];
$i378 = $data['i378'];
$i379 = $data['i379'];
$i380 = $data['i380'];
$i381 = $data['i381'];
$i382 = $data['i382'];
$i383 = $data['i383'];
$i384 = $data['i384'];
$i385 = $data['i385'];
$i386 = $data['i386'];
$i387 = $data['i387'];
$i388 = $data['i388'];
$i389 = $data['i389'];
$i390 = $data['i390'];
$i391 = $data['i391'];
$i392 = $data['i392'];
$i393 = $data['i393'];
$i394 = $data['i394'];
$i395 = $data['i395'];
$i396 = $data['i396'];
$i397 = $data['i397'];
$i398 = $data['i398'];
$i399 = $data['i399'];
$i400 = $data['i400'];
$i401 = $data['i401'];
$i402 = $data['i402'];
$i403 = $data['i403'];
$i404 = $data['i404'];
$i405 = $data['i405'];
$i406 = $data['i406'];
$i407 = $data['i407'];
$i408 = $data['i408'];
$i409 = $data['i409'];
$i410 = $data['i410'];
$i411 = $data['i411'];
$i412 = $data['i412'];
$i413 = $data['i413'];
$i414 = $data['i414'];
$i415 = $data['i415'];
$i416 = $data['i416'];
$i417 = $data['i417'];
$i418 = $data['i418'];
$i419 = $data['i419'];
$i420 = $data['i420'];
$i421 = $data['i421'];
$i422 = $data['i422'];
$i423 = $data['i423'];
$i424 = $data['i424'];
$i425 = $data['i425'];
$i426 = $data['i426'];
$i427 = $data['i427'];
$i428 = $data['i428'];
$i429 = $data['i429'];
$i430 = $data['i430'];
$i431 = $data['i431'];
$i432 = $data['i432'];
$i433 = $data['i433'];
$i434 = $data['i434'];
$i435 = $data['i435'];
$i436 = $data['i436'];
$i437 = $data['i437'];
$i438 = $data['i438'];
$i439 = $data['i439'];
$i440 = $data['i440'];
$i441 = $data['i441'];
$i442 = $data['i442'];
$i443 = $data['i443'];
$i444 = $data['i444'];
$i445 = $data['i445'];
$i446 = $data['i446'];
$i447 = $data['i447'];
$i448 = $data['i448'];
$i449 = $data['i449'];
$i450 = $data['i450'];
$i451 = $data['i451'];
$i452 = $data['i452'];
$i453 = $data['i453'];
$i454 = $data['i454'];
$i455 = $data['i455'];
$i456 = $data['i456'];
$i457 = $data['i457'];
$i458 = $data['i458'];
$i459 = $data['i459'];
$i460 = $data['i460'];
$i461 = $data['i461'];
$i462 = $data['i462'];
$i463 = $data['i463'];
$i464 = $data['i464'];
$i465 = $data['i465'];
$i466 = $data['i466'];
$i467 = $data['i467'];
$i468 = $data['i468'];
$i469 = $data['i469'];
$i470 = $data['i470'];
$i471 = $data['i471'];
$i472 = $data['i472'];
$i473 = $data['i473'];
$i474 = $data['i474'];
$i475 = $data['i475'];
$i476 = $data['i476'];
$i477 = $data['i477'];
$i478 = $data['i478'];
$i479 = $data['i479'];
$i480 = $data['i480'];
$i481 = $data['i481'];
$i482 = $data['i482'];
$i483 = $data['i483'];
$i484 = $data['i484'];
$i485 = $data['i485'];
$i486 = $data['i486'];
$i487 = $data['i487'];
$i488 = $data['i488'];
$i489 = $data['i489'];
$i490 = $data['i490'];
$i491 = $data['i491'];
$i492 = $data['i492'];
$i493 = $data['i493'];
$i494 = $data['i494'];
$i495 = $data['i495'];
$i496 = $data['i496'];
$i497 = $data['i497'];
$i498 = $data['i498'];
$i499 = $data['i499'];
$i500 = $data['i500'];
$i501 = $data['i501'];
$i502 = $data['i502'];
$i503 = $data['i503'];
$i504 = $data['i504'];
$i505 = $data['i505'];
$i506 = $data['i506'];
$i507 = $data['i507'];
$i508 = $data['i508'];
$i509 = $data['i509'];
$i510 = $data['i510'];
$i511 = $data['i511'];
$i512 = $data['i512'];
$i513 = $data['i513'];

}
?>
<p><strong>Laporan Preventive Maintenance I/II Tahun</strong> <?php echo substr($tanggal_kunjungan,0,4); ?>
  <br /> 
  <br />
 <center>
   <strong>I.2 CHECKLIST INVENTORY NETWORK</strong>
 </center>
</p>
<p><strong>Cabang :</strong> <?php echo $cabang; ?><br />
  <strong>Alamat :</strong> <?php echo $alamat; ?><br />
  <strong>Tanggal Kunjungan : </strong><?php echo date('d-m-Y',strtotime($tanggal_kunjungan)); ?><br />
  
  <br />		
  
  
  
  
</p>
<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST">
                          
                                <strong>Router</strong><br />
                                
                            <table width="100%" cellspacing="0" cellpadding="0" border="1">
                                  
                              <tr>
                                    <td rowspan="2"><div align="center"><strong>Merk</strong></div></td>
                                    <td colspan="2" rowspan="2"><div align="center"><strong>Type</strong></div></td>
                                    <td colspan="2" rowspan="2"><div align="center"><strong>SN</strong></div></td>
                                    <td colspan="8"><div align="center"><strong>Modules    Port (Detail)</strong></div></td>
                                    <td colspan="2" rowspan="2"><div align="center"><strong>Garansi (Label)</strong></div></td>
                                    <td colspan="2" rowspan="2"><div align="center"><strong>Keterangan</strong></div></td>
                              </tr>
                                  <tr>
                                    <td colspan="2"><div align="center"><strong>Serial</strong></div></td>
                                    <td colspan="2"><div align="center"><strong>Voice (FXO)</strong></div></td>
                                    <td colspan="2"><div align="center"><strong>Voice (FXS)</strong></div></td>
                                    <td colspan="2"><div align="center"><strong>Fast Inthernet</strong></div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><?php echo $i1; ?>&nbsp;</div></td>
                                    <td colspan="2"><div align="left"><?php echo $i2; ?></div></td>
                                    <td colspan="2"><div align="left"><?php echo $i3; ?></div></td>
                                    <td colspan="2"><div align="left"><?php echo $i4; ?></div></td>
                                    <td colspan="2"><div align="left"><?php echo $i5; ?></div></td>
                                    <td colspan="2"><div align="left"><?php echo $i6; ?></div></td>
                                    <td colspan="2"><div align="left"><?php echo $i7; ?></div></td>
                                    <td colspan="2"><div align="left"><?php echo $i8; ?></div></td>
                                    <td colspan="2"><div align="left"><?php echo $i9; ?></div></td>
                                  </tr>
                            </table>
                            <br />
                            <strong>Switches Summary</strong><br />
                            
                            
                            
                            <table width="100%" cellspacing="0" cellpadding="0" border="1">
                              <tr>
                                <td width="90"><div align="center"><strong>Switches No.</strong></div></td>
                                <td colspan="2"><div align="center"><strong>Merk</strong></div></td>
                                <td colspan="2"><div align="center"><strong>Type</strong></div></td>
                                <td colspan="2"><div align="center"><strong>SN</strong></div></td>
                                <td colspan="2"><div align="center"><strong>Garansi (Label)</strong></div></td>
                                <td colspan="8"><div align="center"><strong>Keterangan</strong></div></td>
                              </tr>
                              <tr>
                                <td><div align="left"><?php echo $i10; ?>&nbsp;</div></td>
                                <td colspan="2"><div align="left"><?php echo $i11;?></div></td>
                                <td colspan="2"> <div align="left"><?php echo $i12;?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i13;?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i14;?></div></td>
                                <td colspan="8"><div align="left"><?php echo $i15;?></div></td>
                              </tr>
                              <tr>
                                <td><div align="left"><?php echo $i16;?>&nbsp;</div></td>
                                <td colspan="2"><div align="left"><?php echo $i17;?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i18;?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i19;?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i20;?></div></td>
                                 <td colspan="8"><div align="left"><?php echo $i21;?></div></td>
                                
                              </tr>
                              <tr>
                                <td><div align="left"><?php echo $i22; ?>&nbsp;</div></td>
                                <td colspan="2"><div align="left"><?php echo $i23; ?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i24; ?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i25; ?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i26; ?></div></td>
                                <td colspan="8"><div align="left"><?php echo $i27; ?></div></td>
                              </tr>
                              <tr>
                                <td><div align="left"><?php echo $i28; ?>&nbsp;</div></td>
                                <td colspan="2"><div align="left"><?php echo $i29; ?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i30; ?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i31; ?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i32; ?></div></td>
                                <td colspan="8"><div align="left"><?php echo $i33; ?></div></td>
                              </tr>
                              <tr>
                                <td><div align="left"><?php echo $i34; ?>&nbsp;</div></td>
                                <td colspan="2"><div align="left"><?php echo $i35; ?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i36; ?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i37; ?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i38; ?></div></td>
                                <td colspan="8"><div align="left"><?php echo $i39; ?></div></td>
                              </tr>
                              <tr>
                                <td><div align="left"><?php echo $i40; ?>&nbsp;</div></td>
                                <td colspan="2"><div align="left"><?php echo $i41; ?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i42; ?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i43; ?></div></td>
                                <td colspan="2"><div align="left"><?php echo $i44; ?></div></td>
                                <td colspan="8"><div align="left"><?php echo $i45;?></div></td>
                              </tr>
                            </table>
                            <p>
                            <strong>Detail Spesifikasi Perangkat Keras</strong></p>
                            <p><strong>Swicthes..........No.1</strong></p>
                            <table width="100%" border="1" cellspacing="0" cellpadding="0">
                            
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 1</strong></div></td>
                                <td><div align="center"><strong>Port 3</strong></div></td>
                                <td><div align="center"><strong>Port 5</strong></div></td>
                                <td><div align="center"><strong>Port 7</strong></div></td>
                                <td><div align="center"><strong>Port 9</strong></div></td>
                                <td><div align="center"><strong>Port 11</strong></div></td>
                                <td><div align="center"><strong>Port 13</strong></div></td>
                                <td><div align="center"><strong>Port 15</strong></div></td>
                                <td><div align="center"><strong>Port 17</strong></div></td>
                                <td><div align="center"><strong>Port 19</strong></div></td>
                                <td><div align="center"><strong>Port 21</strong></div></td>
                                <td><div align="center"><strong>Port 23</strong></div></td>
                                <td><div align="center"><strong>Port 25</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><div align="left"><?php echo $i46; ?></div></td>
                                <td><div align="left"><?php echo $i47; ?></div></td>
                                <td><div align="left"><?php echo $i48; ?></div></td>
                                <td><div align="left"><?php echo $i49; ?></div></td>
                                <td><div align="left"><?php echo $i50; ?></div></td>
                                <td><div align="left"><?php echo $i51; ?></div></td>
                                <td><div align="left"><?php echo $i52; ?></div></td>
                                <td><div align="left"><?php echo $i53; ?></div></td>
                                <td><div align="left"><?php echo $i54; ?></div></td>
                                <td><div align="left"><?php echo $i55; ?></div></td>
                                <td><div align="left"><?php echo $i56; ?></div></td>
                                <td><div align="left"><?php echo $i57; ?></div></td>
                                <td><div align="left"><?php echo $i58; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><div align="left"><?php echo $i59; ?></div></td>
                                <td><div align="left"><?php echo $i60; ?></div></td>
                                <td><div align="left"><?php echo $i61; ?></div></td>
                                <td><div align="left"><?php echo $i62; ?></div></td>
                                <td><div align="left"><?php echo $i63; ?></div></td>
                                <td><div align="left"><?php echo $i64; ?></div></td>
                                <td><div align="left"><?php echo $i65; ?></div></td>
                                <td><div align="left"><?php echo $i66; ?></div></td>
                                <td><div align="left"><?php echo $i67; ?></div></td>
                                <td><div align="left"><?php echo $i68; ?></div></td>
                                <td><div align="left"><?php echo $i69; ?></div></td>
                                <td><div align="left"><?php echo $i70; ?></div></td>
                                <td><div align="left"><?php echo $i71; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><div align="left"><?php echo $i71; ?></div></td>
                                <td><div align="left"><?php echo $i72; ?></div></td>
                                <td><div align="left"><?php echo $i73; ?></div></td>
                                <td><div align="left"><?php echo $i74; ?></div></td>
                                <td><div align="left"><?php echo $i75; ?></div></td>
                                <td><div align="left"><?php echo $i76; ?></div></td>
                                <td><div align="left"><?php echo $i77; ?></div></td>
                                <td><div align="left"><?php echo $i78; ?></div></td>
                                <td><div align="left"><?php echo $i79; ?></div></td>
                                <td><div align="left"><?php echo $i80; ?></div></td>
                                <td><div align="left"><?php echo $i81; ?></div></td>
                                <td><div align="left"><?php echo $i82; ?></div></td>
                                <td><div align="left"><?php echo $i83; ?></div></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 2</strong></div></td>
                                <td><div align="center"><strong>Port 4</strong></div></td>
                                <td><div align="center"><strong>Port 6</strong></div></td>
                                <td><div align="center"><strong>Port 8</strong></div></td>
                                <td><div align="center"><strong>Port 10</strong></div></td>
                                <td><div align="center"><strong>Port 12</strong></div></td>
                                <td><div align="center"><strong>Port 14</strong></div></td>
                                <td><div align="center"><strong>Port 16</strong></div></td>
                                <td><div align="center"><strong>Port 18</strong></div></td>
                                 <td><div align="center"><strong>Port 20</strong></div></td>
                                <td><div align="center"><strong>Port 22</strong></div></td>
                                <td><div align="center"><strong>Port 24</strong></div></td>
                                <td><div align="center"><strong>Port 26</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><div align="left"><?php echo $i80; ?> </div></td>
                                <td><div align="left"><?php echo $i81; ?></div></td>
                                <td><div align="left"><?php echo $i82; ?></div></td>
                                <td><div align="left"><?php echo $i83; ?></div></td>
                                <td><div align="left"><?php echo $i84; ?></div></td>
                                <td><div align="left"><?php echo $i85; ?></div></td>
                                <td><div align="left"><?php echo $i86; ?></div></td>
                                <td><div align="left"><?php echo $i87; ?></div></td>
                                <td><div align="left"><?php echo $i93; ?></div></td>
                                <td><div align="left"><?php echo $i94; ?></div></td>
                                <td><div align="left"><?php echo $i95; ?></div></td>
                                <td><div align="left"><?php echo $i96; ?></div></td>
                                <td><div align="left"><?php echo $i97; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><div align="left"><?php echo $i98;?></div></td>
                                <td><div align="left"><?php echo $i99; ?></div></td>
                                <td><div align="left"><?php echo $i100; ?></div></td>
                                <td><div align="left"><?php echo $i101; ?></div></td>
                                <td><div align="left"><?php echo $i102; ?></div></td>
                                <td><div align="left"><?php echo $i103; ?></div></td>
                                <td><div align="left"><?php echo $i104; ?></div></td>
                                <td><div align="left"><?php echo $i105; ?></div></td>
                                <td><div align="left"><?php echo $i106; ?></div></td>
                                <td><div align="left"><?php echo $i107; ?></div></td>
                                <td><div align="left"><?php echo $i108; ?></div></td>
                                <td><div align="left"><?php echo $i109; ?></div></td>
                                <td><div align="left"><?php echo $i110; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><div align="left"><?php echo $i111; ?></div></td>
                                <td><div align="left"><?php echo $i112; ?></div></td>
                                <td><div align="left"><?php echo $i113; ?></div></td>
                                <td><div align="left"><?php echo $i114; ?></div></td>
                                <td><div align="left"><?php echo $i115; ?></div></td>
                                <td><div align="left"><?php echo $i116; ?></div></td>
                                <td><div align="left"><?php echo $i117; ?></div></td>
                                <td><div align="left"><?php echo $i118; ?></div></td>
                                <td><div align="left"><?php echo $i119; ?></div></td>
                                <td><div align="left"><?php echo $i120; ?></div></td>
                                <td><div align="left"><?php echo $i121; ?></div></td>
                                <td><div align="left"><?php echo $i122; ?></div></td>
                                <td><div align="left"><?php echo $i123; ?></div></td>
                              </tr>
                            </table>
                            <p><strong>Switches........No.2</strong></p>
                            <table width="100%" border="1" cellspacing="0" cellpadding="0">
                             
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 1</strong></div></td>
                                <td><div align="center"><strong>Port 3</strong></div></td>
                                <td><div align="center"><strong>Port 5</strong></div></td>
                                <td><div align="center"><strong>Port 7</strong></div></td>
                                <td><div align="center"><strong>Port 9</strong></div></td>
                                <td><div align="center"><strong>Port 11</strong></div></td>
                                <td><div align="center"><strong>Port 13</strong></div></td>
                                <td><div align="center"><strong>Port 15</strong></div></td>
                                <td><div align="center"><strong>Port 17</strong></div></td>
                                <td><div align="center"><strong>Port 19</strong></div></td>
                                <td><div align="center"><strong>Port 21</strong></div></td>
                                <td><div align="center"><strong>Port 23</strong></div></td>
                                <td><div align="center"><strong>Port 25</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><div align="left"><?php echo $i124; ?></div></td>
                                <td><div align="left"><?php echo $i125; ?></div></td>
                                <td><div align="left"><?php echo $i126; ?></div></td>
                                <td><div align="left"><?php echo $i127; ?></div></td>
                                <td><div align="left"><?php echo $i128; ?></div></td>
                                <td><div align="left"><?php echo $i129; ?></div></td>
                                <td><div align="left"><?php echo $i130; ?></div></td>
                                <td><div align="left"><?php echo $i131; ?></div></td>
                                <td><div align="left"><?php echo $i132; ?></div></td>
                                <td><div align="left"><?php echo $i133; ?></div></td>
                                <td><div align="left"><?php echo $i134; ?></div></td>
                                <td><div align="left"><?php echo $i135; ?></div></td>
                                <td><div align="left"><?php echo $i136; ?></div></td>
                                
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><div align="left"><?php echo $i137; ?></div></td>
                                <td><div align="left"><?php echo $i138; ?></div></td>
                                <td><div align="left"><?php echo $i139; ?></div></td>
                                <td><div align="left"><?php echo $i140; ?></div></td>
                                <td><div align="left"><?php echo $i141; ?></div></td>
                                <td><div align="left"><?php echo $i142; ?></div></td>
                                <td><div align="left"><?php echo $i143; ?></div></td>
                                <td><div align="left"><?php echo $i144; ?></div></td>
                                <td><div align="left"><?php echo $i145; ?></div></td>
                                <td><div align="left"><?php echo $i146; ?></div></td>
                                <td><div align="left"><?php echo $i147; ?></div></td>
                                <td><div align="left"><?php echo $i148; ?></div></td>
                                <td><div align="left"><?php echo $i149; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><div align="left"><?php echo $i150; ?></div></td>
                                <td><div align="left"><?php echo $i151; ?></div></td>
                                <td><div align="left"><?php echo $i152; ?></div></td>
                                <td><div align="left"><?php echo $i153; ?></div></td>
                                <td><div align="left"><?php echo $i154; ?></div></td>
                                <td><div align="left"><?php echo $i155; ?></div></td>
                                <td><div align="left"><?php echo $i156; ?></div></td>
                                <td><div align="left"><?php echo $i157; ?></div></td>
                                <td><div align="left"><?php echo $i158; ?></div></td>
                                <td><div align="left"><?php echo $i159; ?></div></td>
                                <td><div align="left"><?php echo $i160; ?></div></td>
                                <td><div align="left"><?php echo $i161; ?></div></td>
                                <td><div align="left"><?php echo $i162; ?></div></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 2</strong></div></td>
                                <td><div align="center"><strong>Port 4</strong></div></td>
                                <td><div align="center"><strong>Port 6</strong></div></td>
                                <td><div align="center"><strong>Port 8</strong></div></td>
                                <td><div align="center"><strong>Port 10</strong></div></td>
                                <td><div align="center"><strong>Port 12</strong></div></td>
                                <td><div align="center"><strong>Port 14</strong></div></td>
                                <td><div align="center"><strong>Port 16</strong></div></td>
                                <td><div align="center"><strong>Port 18</strong></div></td>
                                <td><div align="center"><strong>Port 20</strong></div></td>
                                <td><div align="center"><strong>Port 22</strong></div></td>
                                <td><div align="center"><strong>Port 24</strong></div></td>
                                <td><div align="center"><strong>Port 26</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><div align="left"><?php echo $i163; ?></div></td>
                                <td><div align="left"><?php echo $i164; ?></div></td>
                                <td><div align="left"><?php echo $i165; ?></div></td>
                                <td><div align="left"><?php echo $i166; ?></div></td>
                                <td><div align="left"><?php echo $i167; ?></div></td>
                                <td><div align="left"><?php echo $i168; ?></div></td>
                                <td><div align="left"><?php echo $i169; ?></div></td>
                                <td><div align="left"><?php echo $i170; ?></div></td>
                                <td><div align="left"><?php echo $i171; ?></div></td>
                                <td><div align="left"><?php echo $i172; ?></div></td>
                                <td><div align="left"><?php echo $i173; ?></div></td>
                                <td><div align="left"><?php echo $i174; ?></div></td>
                                <td><div align="left"><?php echo $i175; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><div align="left"><?php echo $i176; ?></div></td>
                                <td><div align="left"><?php echo $i177; ?></div></td>
                                <td><div align="left"><?php echo $i178; ?></div></td>
                                <td><div align="left"><?php echo $i179; ?></div></td>
                                <td><div align="left"><?php echo $i180; ?></div></td>
                                <td><div align="left"><?php echo $i181; ?></div></td>
                                <td><div align="left"><?php echo $i182; ?></div></td>
                                <td><div align="left"><?php echo $i183; ?></div></td>
                                <td><div align="left"><?php echo $i184; ?></div></td>
                                <td><div align="left"><?php echo $i185; ?></div></td>
                                <td><div align="left"><?php echo $i186; ?></div></td>
                                <td><div align="left"><?php echo $i187; ?></div></td>
                                <td><div align="left"><?php echo $i188; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><div align="left"><?php echo $i189; ?></div></td>
                                <td><div align="left"><?php echo $i190; ?></div></td>
                                <td><div align="left"><?php echo $i191; ?></div></td>
                                <td><div align="left"><?php echo $i192; ?></div></td>
                                <td><div align="left"><?php echo $i193; ?></div></td>
                                <td><div align="left"><?php echo $i194; ?></div></td>
                                <td><div align="left"><?php echo $i195; ?></div></td>
                                <td><div align="left"><?php echo $i196; ?></div></td>
                                <td><div align="left"><?php echo $i197; ?></div></td>
                                <td><div align="left"><?php echo $i198; ?></div></td>
                                <td><div align="left"><?php echo $i199; ?></div></td>
                                <td><div align="left"><?php echo $i200; ?></div></td>
                                <td><div align="left"><?php echo $i201; ?></div></td>
                              </tr>
                            </table>
                            <p><strong>Switches........No.3</strong></p>
                            <table width="100%" border="1" cellspacing="0" cellpadding="0">
                             
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 1</strong></div></td>
                                <td><div align="center"><strong>Port 3</strong></div></td>
                                <td><div align="center"><strong>Port 5</strong></div></td>
                                <td><div align="center"><strong>Port 7</strong></div></td>
                                <td><div align="center"><strong>Port 9</strong></div></td>
                                <td><div align="center"><strong>Port 11</strong></div></td>
                                <td><div align="center"><strong>Port 13</strong></div></td>
                                <td><div align="center"><strong>Port 15</strong></div></td>
                                <td><div align="center"><strong>Port 17</strong></div></td>
                                <td><div align="center"><strong>Port 19</strong></div></td>
                                <td><div align="center"><strong>Port 21</strong></div></td>
                                <td><div align="center"><strong>Port 23</strong></div></td>
                                <td><div align="center"><strong>Port 25</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><div align="left"><?php echo $i202; ?></div></td>
                                <td><div align="left"><?php echo $i203; ?></div></td>
                                <td><div align="left"><?php echo $i204; ?></div></td>
                                <td><div align="left"><?php echo $i205; ?></div></td>
                                <td><div align="left"><?php echo $i206; ?></div></td>
                                <td><div align="left"><?php echo $i207; ?></div></td>
                                <td><div align="left"><?php echo $i208; ?></div></td>
                                <td><div align="left"><?php echo $i209; ?></div></td>
                                <td><div align="left"><?php echo $i210; ?></div></td>
                                <td><div align="left"><?php echo $i211; ?></div></td>
                                <td><div align="left"><?php echo $i212; ?></div></td>
                                <td><div align="left"><?php echo $i213; ?></div></td>
                                <td><div align="left"><?php echo $i214; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><div align="left"><?php echo $i215; ?></div></td>
                                <td><div align="left"><?php echo $i216; ?></div></td>
                                <td><div align="left"><?php echo $i217; ?></div></td>
                                <td><div align="left"><?php echo $i218; ?></div></td>
                                <td><div align="left"><?php echo $i219; ?></div></td>
                                <td><div align="left"><?php echo $i220; ?></div></td>
                                <td><div align="left"><?php echo $i221; ?></div></td>
                                <td><div align="left"><?php echo $i222; ?></div></td>
                                <td><div align="left"><?php echo $i223; ?></div></td>
                                <td><div align="left"><?php echo $i224; ?></div></td>
                                <td><div align="left"><?php echo $i225; ?></div></td>
                                <td><div align="left"><?php echo $i226; ?></div></td>
                                <td><div align="left"><?php echo $i227; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><div align="left"><?php echo $i228; ?></div></td>
                                <td><div align="left"><?php echo $i229; ?></div></td>
                                <td><div align="left"><?php echo $i230; ?></div></td>
                                <td><div align="left"><?php echo $i231; ?></div></td>
                                <td><div align="left"><?php echo $i232; ?></div></td>
                                <td><div align="left"><?php echo $i233; ?></div></td>
                                <td><div align="left"><?php echo $i234; ?></div></td>
                                <td><div align="left"><?php echo $i235; ?></div></td>
                                <td><div align="left"><?php echo $i236; ?></div></td>
                                <td><div align="left"><?php echo $i237; ?></div></td>
                                <td><div align="left"><?php echo $i238; ?></div></td>
                                <td><div align="left"><?php echo $i239; ?></div></td>
                                <td><div align="left"><?php echo $i240; ?></div></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 2</strong></div></td>
                                <td><div align="center"><strong>Port 4</strong></div></td>
                                <td><div align="center"><strong>Port 6</strong></div></td>
                                <td><div align="center"><strong>Port 8</strong></div></td>
                                <td><div align="center"><strong>Port 10</strong></div></td>
                                <td><div align="center"><strong>Port 12</strong></div></td>
                                <td><div align="center"><strong>Port 14</strong></div></td>
                                <td><div align="center"><strong>Port 16</strong></div></td>
                                <td><div align="center"><strong>Port 18</strong></div></td>
                                <td><div align="center"><strong>Port 20</strong></div></td>
                                <td><div align="center"><strong>Port 22</strong></div></td>
                                <td><div align="center"><strong>Port 24</strong></div></td>
                                <td><div align="center"><strong>Port 26</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><div align="left"><?php echo $i241; ?></div></td>
                                <td><div align="left"><?php echo $i242; ?></div></td>
                                <td><div align="left"><?php echo $i243; ?></div></td>
                                <td><div align="left"><?php echo $i244; ?></div></td>
                                <td><div align="left"><?php echo $i245; ?></div></td>
                                <td><div align="left"><?php echo $i246; ?></div></td>
                                <td><div align="left"><?php echo $i247; ?></div></td>
                                <td><div align="left"><?php echo $i248; ?></div></td>
                                <td><div align="left"><?php echo $i249; ?></div></td>
                                <td><div align="left"><?php echo $i250; ?></div></td>
                                <td><div align="left"><?php echo $i251; ?></div></td>
                                <td><div align="left"><?php echo $i252; ?></div></td>
                                <td><div align="left"><?php echo $i253; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><div align="left"><?php echo $i254; ?></div></td>
                                <td><div align="left"><?php echo $i255; ?></div></td>
                                <td><div align="left"><?php echo $i256; ?></div></td>
                                <td><div align="left"><?php echo $i257; ?></div></td>
                                <td><div align="left"><?php echo $i258; ?></div></td>
                                <td><div align="left"><?php echo $i259; ?></div></td>
                                <td><div align="left"><?php echo $i260; ?></div></td>
                                <td><div align="left"><?php echo $i261; ?></div></td>
                                <td><div align="left"><?php echo $i262; ?></div></td>
                                <td><div align="left"><?php echo $i263; ?></div></td>
                                <td><div align="left"><?php echo $i264; ?></div></td>
                                <td><div align="left"><?php echo $i265; ?></div></td>
                                <td><div align="left"><?php echo $i266; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><div align="left"><?php echo $i267; ?></div></td>
                                <td><div align="left"><?php echo $i268; ?></div></td>
                                <td><div align="left"><?php echo $i269; ?></div></td>
                                <td><div align="left"><?php echo $i270; ?></div></td>
                                <td><div align="left"><?php echo $i271; ?></div></td>
                                <td><div align="left"><?php echo $i272; ?></div></td>
                                <td><div align="left"><?php echo $i273; ?></div></td>
                                <td><div align="left"><?php echo $i274; ?></div></td>
                                <td><div align="left"><?php echo $i275; ?></div></td>
                                <td><div align="left"><?php echo $i276; ?></div></td>
                                <td><div align="left"><?php echo $i277; ?></div></td>
                                <td><div align="left"><?php echo $i278; ?></div></td>
                                <td><div align="left"><?php echo $i279; ?></div></td>
                              </tr>
                            </table>
                            <p><strong>Switches........No.4</strong></p>
                            <table width="100%" border="1" cellspacing="0" cellpadding="0">
                            
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 1</strong></div></td>
                                <td><div align="center"><strong>Port 3</strong></div></td>
                                <td><div align="center"><strong>Port 5</strong></div></td>
                                <td><div align="center"><strong>Port 7</strong></div></td>
                                <td><div align="center"><strong>Port 9</strong></div></td>
                                <td><div align="center"><strong>Port 11</strong></div></td>
                                <td><div align="center"><strong>Port 13</strong></div></td>
                                <td><div align="center"><strong>Port 15</strong></div></td>
                                <td><div align="center"><strong>Port 17</strong></div></td>
                                <td><div align="center"><strong>Port 19</strong></div></td>
                                <td><div align="center"><strong>Port 21</strong></div></td>
                                <td><div align="center"><strong>Port 23</strong></div></td>
                                <td><div align="center"><strong>Port 25</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><div align="left"><?php echo $i280; ?></div></td>
                                <td><div align="left"><?php echo $i281; ?></div></td>
                                <td><div align="left"><?php echo $i282; ?></div></td>
                                <td><div align="left"><?php echo $i283; ?></div></td>
                                <td><div align="left"><?php echo $i284; ?></div></td>
                                <td><div align="left"><?php echo $i285; ?></div></td>
                                <td><div align="left"><?php echo $i286; ?></div></td>
                                <td><div align="left"><?php echo $i287; ?></div></td>
                                <td><div align="left"><?php echo $i288; ?></div></td>
                                <td><div align="left"><?php echo $i289; ?></div></td>
                                <td><div align="left"><?php echo $i290; ?></div></td>
                                <td><div align="left"><?php echo $i291; ?></div></td>
                                <td><div align="left"><?php echo $i292; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><div align="left"><?php echo $i293; ?></div></td>
                                <td><div align="left"><?php echo $i294; ?></div></td>
                                <td><div align="left"><?php echo $i295; ?></div></td>
                                <td><div align="left"><?php echo $i296; ?></div></td>
                                <td><div align="left"><?php echo $i297; ?></div></td>
                                <td><div align="left"><?php echo $i298; ?></div></td>
                                <td><div align="left"><?php echo $i299; ?></div></td>
                                <td><div align="left"><?php echo $i300; ?></div></td>
                                <td><div align="left"><?php echo $i301; ?></div></td>
                               <td><div align="left"><?php echo $i302; ?></div></td>
                                <td><div align="left"><?php echo $i303; ?></div></td>
                                <td><div align="left"><?php echo $i304; ?></div></td>
                               <td><div align="left"><?php echo $i305; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                         <td><div align="left"><?php echo $i306; ?></div></td>
                               <td><div align="left"><?php echo $i307; ?></div></td>
                            <td><div align="left"><?php echo $i308; ?></div></td>
                          <td><div align="left"><?php echo $i309; ?></div></td>
                              <td><div align="left"><?php echo $i310; ?></div></td>
                               <td><div align="left"><?php echo $i311; ?></div></td>
                                <td><div align="left"><?php echo $i312; ?></div></td>
                                <td><div align="left"><?php echo $i313; ?></div></td>
                                <td><div align="left"><?php echo $i314; ?></div></td>
                               <td><div align="left"><?php echo $i315; ?></div></td>
                              <td><div align="left"><?php echo $i316; ?></div></td>
                            <td><div align="left"><?php echo $i317; ?></div></td>
                                <td><div align="left"><?php echo $i318; ?></div></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 2</strong></div></td>
                                <td><div align="center"><strong>Port 4</strong></div></td>
                                <td><div align="center"><strong>Port 6</strong></div></td>
                                <td><div align="center"><strong>Port 8</strong></div></td>
                                <td><div align="center"><strong>Port 10</strong></div></td>
                                <td><div align="center"><strong>Port 12</strong></div></td>
                                <td><div align="center"><strong>Port 14</strong></div></td>
                                <td><div align="center"><strong>Port 16</strong></div></td>
                                <td><div align="center"><strong>Port 18</strong></div></td>
                                <td><div align="center"><strong>Port 20</strong></div></td>
                                <td><div align="center"><strong>Port 22</strong></div></td>
                                <td><div align="center"><strong>Port 24</strong></div></td>
                                <td><div align="center"><strong>Port 26</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><div align="left"><?php echo $i319; ?></div></td>
                                <td><div align="left"><?php echo $i320; ?></div></td>
                                <td><div align="left"><?php echo $i321; ?></div></td>
                                 <td><div align="left"><?php echo $i322; ?></div></td>
                                <td><div align="left"><?php echo $i323; ?></div></td>
                                 <td><div align="left"><?php echo $i324; ?></div></td>
                               <td><div align="left"><?php echo $i325; ?></div></td>
                                <td><div align="left"><?php echo $i326; ?></div></td>
                              <td><div align="left"><?php echo $i327; ?></div></td>
                                <td><div align="left"><?php echo $i328; ?></div></td>
                                <td><div align="left"><?php echo $i329; ?></div></td>
                              <td><div align="left"><?php echo $i330; ?></div></td>
                                 <td><div align="left"><?php echo $i331; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                               
                                 <td><div align="left"><?php echo $i332; ?></div></td>
                                
                                 <td><div align="left"><?php echo $i333; ?></div></td>
                              
                                 <td><div align="left"><?php echo $i334; ?></div></td>
                               
                                 <td><div align="left"><?php echo $i335; ?></div></td>
                                
                                 <td><div align="left"><?php echo $i336; ?></div></td>
                                
                                 <td><div align="left"><?php echo $i337; ?></div></td>
                              
                                 <td><div align="left"><?php echo $i338; ?></div></td>
                                
                                 <td><div align="left"><?php echo $i339; ?></div></td>
                               
                                 <td><div align="left"><?php echo $i340; ?></div></td>
                                
                                 <td><div align="left"><?php echo $i341; ?></div></td>
                              
                                 <td><div align="left"><?php echo $i342; ?></div></td>
                               
                                 <td><div align="left"><?php echo $i343; ?></div></td>
                               
                                 <td><div align="left"><?php echo $i344; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                               <td><div align="left"><?php echo $i345; ?></div></td>
                                <td><div align="left"><?php echo $i346; ?></div></td>
                                <td><div align="left"><?php echo $i347; ?></div></td>
                                <td><div align="left"><?php echo $i348; ?></div></td>
                                <td><div align="left"><?php echo $i349; ?></div></td>
                               <td><div align="left"><?php echo $i350; ?></div></td>
                              <td><div align="left"><?php echo $i351; ?></div></td>
                               <td><div align="left"><?php echo $i352; ?></div></td>
                                <td><div align="left"><?php echo $i353; ?></div></td>
                                <td><div align="left"><?php echo $i354; ?></div></td>
                                <td><div align="left"><?php echo $i355; ?></div></td>
                                <td><div align="left"><?php echo $i356; ?></div></td>
                               <td><div align="left"><?php echo $i357; ?></div></td>
                              </tr>
                            </table>
                            <p><strong>Switches........No.5</strong></p>
                            <table width="100%" border="1" cellspacing="0" cellpadding="0">
                              
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 1</strong></div></td>
                                <td><div align="center"><strong>Port 3</strong></div></td>
                                <td><div align="center"><strong>Port 5</strong></div></td>
                                <td><div align="center"><strong>Port 7</strong></div></td>
                                <td><div align="center"><strong>Port 9</strong></div></td>
                                <td><div align="center"><strong>Port 11</strong></div></td>
                                <td><div align="center"><strong>Port 13</strong></div></td>
                                <td><div align="center"><strong>Port 15</strong></div></td>
                                <td><div align="center"><strong>Port 17</strong></div></td>
                                <td><div align="center"><strong>Port 19</strong></div></td>
                                <td><div align="center"><strong>Port 21</strong></div></td>
                                <td><div align="center"><strong>Port 23</strong></div></td>
                                <td><div align="center"><strong>Port 25</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                 <td><div align="left"><?php echo $i358; ?></div></td>
                                 <td><div align="left"><?php echo $i359; ?></div></td>
                                <td><div align="left"><?php echo $i360; ?></div></td>
                                <td><div align="left"><?php echo $i361; ?></div></td>
                                <td><div align="left"><?php echo $i362; ?></div></td>
                               <td><div align="left"><?php echo $i363; ?></div></td>
                                <td><div align="left"><?php echo $i364; ?></div></td>
                                <td><div align="left"><?php echo $i365; ?></div></td>
                               <td><div align="left"><?php echo $i366; ?></div></td>
                                <td><div align="left"><?php echo $i367; ?></div></td>
                               <td><div align="left"><?php echo $i368; ?></div></td>
                                <td><div align="left"><?php echo $i369; ?></div></td>
                               <td><div align="left"><?php echo $i370; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                 <td><div align="left"><?php echo $i371; ?></div></td>
                                 <td><div align="left"><?php echo $i372; ?></div></td>
                                <td><div align="left"><?php echo $i373; ?></div></td>
                             <td><div align="left"><?php echo $i374; ?></div></td>
                             <td><div align="left"><?php echo $i375; ?></div></td>
                              <td><div align="left"><?php echo $i376; ?></div></td>
                                <td><div align="left"><?php echo $i377; ?></div></td>
                                <td><div align="left"><?php echo $i378; ?></div></td>
                                 <td><div align="left"><?php echo $i379; ?></div></td>
                                <td><div align="left"><?php echo $i380; ?></div></td>
                               <td><div align="left"><?php echo $i381; ?></div></td>
                                <td><div align="left"><?php echo $i382; ?></div></td>
                               <td><div align="left"><?php echo $i383; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                               <td><div align="left"><?php echo $i384; ?></div></td>
                               <td><div align="left"><?php echo $i385; ?></div></td>
                             <td><div align="left"><?php echo $i386; ?></div></td>
                              <td><div align="left"><?php echo $i387; ?></div></td>
                               <td><div align="left"><?php echo $i388; ?></div></td>
                               <td><div align="left"><?php echo $i399; ?></div></td>
                             <td><div align="left"><?php echo $i390; ?></div></td>
                              <td><div align="left"><?php echo $i391; ?></div></td>
                            <td><div align="left"><?php echo $i392; ?></div></td>
                               <td><div align="left"><?php echo $i393; ?></div></td>
                                <td><div align="left"><?php echo $i394; ?></div></td>
                               <td><div align="left"><?php echo $i395; ?></div></td>
                                <td><div align="left"><?php echo $i396; ?></div></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 2</strong></div></td>
                                <td><div align="center"><strong>Port 4</strong></div></td>
                                <td><div align="center"><strong>Port 6</strong></div></td>
                                <td><div align="center"><strong>Port 8</strong></div></td>
                                <td><div align="center"><strong>Port 10</strong></div></td>
                                <td><div align="center"><strong>Port 12</strong></div></td>
                                <td><div align="center"><strong>Port 14</strong></div></td>
                                <td><div align="center"><strong>Port 16</strong></div></td>
                                <td><div align="center"><strong>Port 18</strong></div></td>
                                <td><div align="center"><strong>Port 20</strong></div></td>
                                <td><div align="center"><strong>Port 22</strong></div></td>
                                <td><div align="center"><strong>Port 24</strong></div></td>
                                <td><div align="center"><strong>Port 26</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><div align="left"><?php echo $i397; ?></div></td>
                              <td><div align="left"><?php echo $i398; ?></div></td>
                                <td><div align="left"><?php echo $i399; ?></div></td>
                              <td><div align="left"><?php echo $i400; ?></div></td>
                              <td><div align="left"><?php echo $i401; ?></div></td>
                                <td><div align="left"><?php echo $i402; ?></div></td>
                             <td><div align="left"><?php echo $i403; ?></div></td>
                               <td><div align="left"><?php echo $i404; ?></div></td>
                                <td><div align="left"><?php echo $i405; ?></div></td>
                                <td><div align="left"><?php echo $i406; ?></div></td>
                               <td><div align="left"><?php echo $i407; ?></div></td>
                               <td><div align="left"><?php echo $i408; ?></div></td>
                                <td><div align="left"><?php echo $i409; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                               <td><div align="left"><?php echo $i410; ?></div></td>
                              <td><div align="left"><?php echo $i411; ?></div></td>
                                <td><div align="left"><?php echo $i412; ?></div></td>
                                <td><div align="left"><?php echo $i413; ?></div></td>
                               <td><div align="left"><?php echo $i414; ?></div></td>
                               <td><div align="left"><?php echo $i415; ?></div></td>
                                <td><div align="left"><?php echo $i416; ?></div></td>
                                <td><div align="left"><?php echo $i417; ?></div></td>
                               <td><div align="left"><?php echo $i418; ?></div></td>
                              <td><div align="left"><?php echo $i419; ?></div></td>
                               <td><div align="left"><?php echo $i420; ?></div></td>
                                <td><div align="left"><?php echo $i421; ?></div></td>
                              <td><div align="left"><?php echo $i422; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><div align="left"><?php echo $i423; ?></div></td>
                                 <td><div align="left"><?php echo $i424; ?></div></td>
                                <td><div align="left"><?php echo $i425; ?></div></td>
                              <td><div align="left"><?php echo $i426; ?></div></td>
                             <td><div align="left"><?php echo $i427; ?></div></td>
                                <td><div align="left"><?php echo $i428; ?></div></td>
                                 <td><div align="left"><?php echo $i429; ?></div></td>
                                 <td><div align="left"><?php echo $i430; ?></div></td>
                                 <td><div align="left"><?php echo $i431; ?></div></td>
                                 <td><div align="left"><?php echo $i432; ?></div></td>
                              <td><div align="left"><?php echo $i433; ?></div></td>
                             <td><div align="left"><?php echo $i434; ?></div></td>
                                 <td><div align="left"><?php echo $i435; ?></div></td>
                              </tr>
                            </table>
                            <p><br />
                            <strong>Switches........No.6</strong></p>
                            <table width="100%" border="1" cellspacing="0" cellpadding="0">
                            
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 1</strong></div></td>
                                <td><div align="center"><strong>Port 3</strong></div></td>
                                <td><div align="center"><strong>Port 5</strong></div></td>
                                <td><div align="center"><strong>Port 7</strong></div></td>
                                <td><div align="center"><strong>Port 9</strong></div></td>
                                <td><div align="center"><strong>Port 11</strong></div></td>
                                <td><div align="center"><strong>Port 13</strong></div></td>
                                <td><div align="center"><strong>Port 15</strong></div></td>
                                <td><div align="center"><strong>Port 17</strong></div></td>
                                <td><div align="center"><strong>Port 19</strong></div></td>
                                <td><div align="center"><strong>Port 21</strong></div></td>
                                <td><div align="center"><strong>Port 23</strong></div></td>
                                <td><div align="center"><strong>Port 25</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                 <td><div align="left"><?php echo $i436; ?></div></td>
                                 <td><div align="left"><?php echo $i437; ?></div></td>
                                <td><div align="left"><?php echo $i438; ?></div></td>
                                <td><div align="left"><?php echo $i439; ?></div></td>
                                <td><div align="left"><?php echo $i440; ?></div></td>
                                <td><div align="left"><?php echo $i441; ?></div></td>
                                <td><div align="left"><?php echo $i442; ?></div></td>
                             <td><div align="left"><?php echo $i443; ?></div></td>
                                <td><div align="left"><?php echo $i444; ?></div></td>
                                <td><div align="left"><?php echo $i445; ?></div></td>
                              <td><div align="left"><?php echo $i446; ?></div></td>
                               <td><div align="left"><?php echo $i447; ?></div></td>
                               <td><div align="left"><?php echo $i448; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                 <td><div align="left"><?php echo $i449; ?></div></td>
                                <td><div align="left"><?php echo $i450; ?></div></td>
                                 <td><div align="left"><?php echo $i451; ?></div></td>
                                 <td><div align="left"><?php echo $i452; ?></div></td>
                                <td><div align="left"><?php echo $i453; ?></div></td>
                              <td><div align="left"><?php echo $i454; ?></div></td>
                                 <td><div align="left"><?php echo $i455; ?></div></td>
                                 <td><div align="left"><?php echo $i456; ?></div></td>
                                <td><div align="left"><?php echo $i457; ?></div></td>
                                 <td><div align="left"><?php echo $i458; ?></div></td>
                                <td><div align="left"><?php echo $i459; ?></div></td>
                                 <td><div align="left"><?php echo $i460; ?></div></td>
                                <td><div align="left"><?php echo $i461; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                              <td><div align="left"><?php echo $i462; ?></div></td>
                                <td><div align="left"><?php echo $i463; ?></div></td>
                                 <td><div align="left"><?php echo $i464; ?></div></td>
                                 <td><div align="left"><?php echo $i465; ?></div></td>
                             <td><div align="left"><?php echo $i466; ?></div></td>
                                 <td><div align="left"><?php echo $i467; ?></div></td>
                                <td><div align="left"><?php echo $i468; ?></div></td>
                                <td><div align="left"><?php echo $i469; ?></div></td>
                              <td><div align="left"><?php echo $i470; ?></div></td>
                               <td><div align="left"><?php echo $i471; ?></div></td>
                               <td><div align="left"><?php echo $i472; ?></div></td>
                                 <td><div align="left"><?php echo $i473; ?></div></td>
                                 <td><div align="left"><?php echo $i474; ?></div></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 2</strong></div></td>
                                <td><div align="center"><strong>Port 4</strong></div></td>
                                <td><div align="center"><strong>Port 6</strong></div></td>
                                <td><div align="center"><strong>Port 8</strong></div></td>
                                <td><div align="center"><strong>Port 10</strong></div></td>
                                <td><div align="center"><strong>Port 12</strong></div></td>
                                <td><div align="center"><strong>Port 14</strong></div></td>
                                <td><div align="center"><strong>Port 16</strong></div></td>
                                <td><div align="center"><strong>Port 18</strong></div></td>
                                <td><div align="center"><strong>Port 20</strong></div></td>
                                <td><div align="center"><strong>Port 22</strong></div></td>
                                <td><div align="center"><strong>Port 24</strong></div></td>
                                <td><div align="center"><strong>Port 26</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                               <td><div align="left"><?php echo $i475; ?></div></td>
                               <td><div align="left"><?php echo $i476; ?></div></td>
                                 <td><div align="left"><?php echo $i477; ?></div></td>
                                 <td><div align="left"><?php echo $i478; ?></div></td>
                                 <td><div align="left"><?php echo $i479; ?></div></td>
                             <td><div align="left"><?php echo $i480; ?></div></td>
                                 <td><div align="left"><?php echo $i481; ?></div></td>
                               <td><div align="left"><?php echo $i482; ?></div></td>
                                 <td><div align="left"><?php echo $i483; ?></div></td>
                               <td><div align="left"><?php echo $i484; ?></div></td>
                               <td><div align="left"><?php echo $i485; ?></div></td>
                                 <td><div align="left"><?php echo $i486; ?></div></td>
                                 <td><div align="left"><?php echo $i487; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><div align="left"><?php echo $i488; ?></div></td>
                               <td><div align="left"><?php echo $i489; ?></div></td>
                              <td><div align="left"><?php echo $i490; ?></div></td>
                                <td><div align="left"><?php echo $i491; ?></div></td>
                             <td><div align="left"><?php echo $i492; ?></div></td>
                                <td><div align="left"><?php echo $i493; ?></div></td>
                            <td><div align="left"><?php echo $i494; ?></div></td>
                               <td><div align="left"><?php echo $i495; ?></div></td>
                               <td><div align="left"><?php echo $i496; ?></div></td>
                              <td><div align="left"><?php echo $i497; ?></div></td>
                              <td><div align="left"><?php echo $i498; ?></div></td>
                              <td><div align="left"><?php echo $i499; ?></div></td>
                               <td><div align="left"><?php echo $i500; ?></div></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><div align="left"><?php echo $i501; ?></div></td>
                                <td><div align="left"><?php echo $i502; ?></div></td>
                              <td><div align="left"><?php echo $i503; ?></div></td>
                                <td><div align="left"><?php echo $i504; ?></div></td>
                              <td><div align="left"><?php echo $i505; ?></div></td>
                                <td><div align="left"><?php echo $i506; ?></div></td>
                               <td><div align="left"><?php echo $i507; ?></div></td>
                               <td><div align="left"><?php echo $i508; ?></div></td>
                                <td><div align="left"><?php echo $i509; ?></div></td>
                                <td><div align="left"><?php echo $i510; ?></div></td>
                              <td><div align="left"><?php echo $i511; ?></div></td>
                                <td><div align="left"><?php echo $i512; ?></div></td>
                                <td><div align="left"><?php echo $i513; ?></div></td>
                              </tr>
                            </table>
                            <p>CATATAN :</p>
                            <p>Status (X) tidak dipakai. (V) dipakai, (S) Server, (R) Router, A (ATM), (UP) Uplink/Downlink, (v) jika ke modem VSAT</p>
                            <p>Label Cable = No. label cable yang terdapat pada patch cable di switch </p>
                            <p>*diisi oleh HO</p>
                            <p>&nbsp;</p>
                            <p align="right"><strong>BNI Cabang/Capem</strong></p>
                            <p align="right">&nbsp;</p>
                            <p align="right">&nbsp;</p>
                            <p align="right">(________________)</p>
                            <p><br />
                            </p>



						  </form>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
