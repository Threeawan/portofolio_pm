<style>
input{
	width:100%;
}
</style>


<?php
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




<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <div align="center"><strong>CHECKLIST INVENTORY NETWORK</strong></div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST">
							  <div class="form-group">
									<label for="exampleInputName">Cabang</label>
									<input type="" class="form-control" id="exampleInputName" name="cabang" value="<?php echo $cabang; ?>" readonly="readonly">
							</div>
								<div class="form-group">
									<label for="exampleInputName">Alamat</label>
									<input type="" class="form-control" id="exampleInputName" name="alamat" value="<?php echo $alamat; ?>" readonly="readonly">
								</div>
                                
                            <div class="form-group">
									<label for="exampleInputPassword1">Tanggal Kunjungan</label>
									<input type="date" class="form-control" id="exampleInputName" placeholder="" name="tanggal_kunjungan" value="<?php echo $tanggal_kunjungan; ?>" readonly="readonly">
							</div>
                                
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
                                    <td colspan="2"><div align="center"><strong>Serial </strong></div></td>
                                    <td colspan="2"><div align="center"><strong>Voice (FXO)</strong></div></td>
                                    <td colspan="2"><div align="center"><strong>Voice (FXS)</strong></div></td>
                                    <td colspan="2"><div align="center"><strong>Fast Inthernet</strong></div></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i1" value="<?php echo $i1; ?>" readonly="readonly" /></td>
                                    <td colspan="2"><input type="text" name="i2" value="<?php echo $i2; ?>" readonly="readonly" /></td>
                                    <td colspan="2"><input type="text" name="i3" value="<?php echo $i3; ?>" readonly="readonly" /></td>
                                    <td colspan="2"><input type="text" name="i4" value="<?php echo $i4; ?>" readonly="readonly" /></td>
                                    <td colspan="2"><input type="text" name="i5" value="<?php echo $i5; ?>" readonly="readonly" /></td>
                                    <td colspan="2"><input type="text" name="i6" value="<?php echo $i6; ?>" readonly="readonly" /></td>
                                    <td colspan="2"><input type="text" name="i7" value="<?php echo $i7; ?>" readonly="readonly" /></td>
                                    <td colspan="2"><input type="text" name="i8" value="<?php echo $i8; ?>" readonly="readonly" /></td>
                                    <td colspan="2"><input type="text" name="i9" value="<?php echo $i9; ?>" readonly="readonly" /></td>
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
                                <td><input type="text" name="i10" value="<?php echo $i10; ?>" readonly="readonly" /></td>
                                <td colspan="2"> <input type="text" name="i11" value="<?php echo $i11;?>" readonly="readonly" /></td>
                                <td colspan="2"> <input type="text" name="i112" value="<?php echo $i12;?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i13" value="<?php echo $i13;?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i14" value="<?php echo $i14;?>" readonly="readonly" /></td>
                                <td colspan="8"><input type="text" name="i15" value="<?php echo $i15;?>" readonly="readonly" /></td>
                              </tr>
                              <tr>
                                <td><input type="text" name="i16" value="<?php echo $i16;?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i17" value="<?php echo $i17;?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i18" value="<?php echo $i18;?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i19" value="<?php echo $i19;?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i20" value="<?php echo $i20;?>" readonly="readonly" /></td>
                                 <td colspan="2"><input type="text" name="i21" value="<?php echo $i21;?>" readonly="readonly" /></td>
                                
                              </tr>
                              <tr>
                                <td><input type="text" name="i22" value="<?php echo $i22; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i23" value="<?php echo $i23; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i24" value="<?php echo $i24; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i25" value="<?php echo $i25; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i26" value="<?php echo $i26; ?>" readonly="readonly" /></td>
                                <td colspan="8"><input type="text" name="i27" value="<?php echo $i27; ?>" readonly="readonly" /></td>
                              </tr>
                              <tr>
                                <td><input type="text" name="i28" value="<?php echo $i28; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i29" value="<?php echo $i29; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i30" value="<?php echo $i30; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i31" value="<?php echo $i31; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i32" value="<?php echo $i32; ?>" readonly="readonly" /></td>
                                <td colspan="8"><input type="text" name="i33" value="<?php echo $i33; ?>" readonly="readonly" /></td>
                              </tr>
                              <tr>
                                <td><input type="text" name="i34" value="<?php echo $i34; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i35" value="<?php echo $i35; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i36" value="<?php echo $i36; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i37" value="<?php echo $i37; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i38" value="<?php echo $i38; ?>" readonly="readonly" /></td>
                                <td colspan="8"><input type="text" name="i39" value="<?php echo $i39; ?>" readonly="readonly" /></td>
                              </tr>
                              <tr>
                                <td><input type="text" name="i40" value="<?php echo $i40; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i41" value="<?php echo $i41; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i42" value="<?php echo $i42; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i43" value="<?php echo $i43; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i44" value="<?php echo $i44; ?>" readonly="readonly" /></td>
                                <td colspan="2"><input type="text" name="i45" value="<?php echo $i45; ?>" readonly="readonly" /></td>
                              </tr>
                            </table>
                            <p><br />
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
                                <td><input type="text" name="i46" value="<?php echo $i46; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i47" value="<?php echo $i47; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i48" value="<?php echo $i48; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i49" value="<?php echo $i49; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i50" value="<?php echo $i50; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i51" value="<?php echo $i51; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i52" value="<?php echo $i52; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i53" value="<?php echo $i53; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i54" value="<?php echo $i54; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i55" value="<?php echo $i55; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i56" value="<?php echo $i56; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i57" value="<?php echo $i57; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i58" value="<?php echo $i58; ?>" readonly="readonly" /></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i59" value="<?php echo $i59; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i60" value="<?php echo $i60; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i61" value="<?php echo $i61; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i62" value="<?php echo $i62; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i63" value="<?php echo $i63; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i64" value="<?php echo $i64; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i65" value="<?php echo $i65; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i66" value="<?php echo $i66; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i67" value="<?php echo $i67; ?>" readonly="readonly"  /></td>
                                <td><input type="text" name="i68" value="<?php echo $i68; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i69" value="<?php echo $i69; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i70" value="<?php echo $i70; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i71" value="<?php echo $i71; ?>" readonly="readonly"/></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i72" value="<?php echo $i72; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i73" value="<?php echo $i73; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i74" value="<?php echo $i74; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i75" value="<?php echo $i75; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i76" value="<?php echo $i76; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i77" value="<?php echo $i77; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i78" value="<?php echo $i78; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i79" value="<?php echo $i79; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i80" value="<?php echo $i80; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i81" value="<?php echo $i81; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i82" value="<?php echo $i82; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i83" value="<?php echo $i83; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i84" value="<?php echo $i84; ?>" readonly="readonly"/></td>
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
                                <td><input type="text" name="i85"  value="<?php echo $i85; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i86"  value="<?php echo $i86; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i87" value="<?php echo $i87; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i88" value="<?php echo $i88; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i89" value="<?php echo $i89; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i90" value="<?php echo $i90; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i91" value="<?php echo $i91; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i92" value="<?php echo $i92; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i93" value="<?php echo $i93; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i94" value="<?php echo $i94; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i95"  value="<?php echo $i95; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i96" value="<?php echo $i96; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i97" value="<?php echo $i97; ?>" readonly="readonly" /></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i98" value="<?php echo $i98; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i99" value="<?php echo $i99; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i100" value="<?php echo $i100; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i101" value="<?php echo $i101; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i102" value="<?php echo $i102; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i103" value="<?php echo $i103; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i104" value="<?php echo $i104; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i105" value="<?php echo $i105; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i106" value="<?php echo $i106; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i107" value="<?php echo $i107; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i108" value="<?php echo $i108; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i109" value="<?php echo $i109; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i110" value="<?php echo $i110; ?>" readonly="readonly" /></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i111" value="<?php echo $i111; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i112" value="<?php echo $i112; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i113" value="<?php echo $i113; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i114" value="<?php echo $i114; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i115" value="<?php echo $i115; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i116" value="<?php echo $i116; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i117" value="<?php echo $i117; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i118" value="<?php echo $i118; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i119" value="<?php echo $i119; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i120" value="<?php echo $i120; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i121" value="<?php echo $i121; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i122" value="<?php echo $i122; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i123" value="<?php echo $i123; ?>" readonly="readonly" /></td>
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
                                <td><input type="text" name="i124" value="<?php echo $i124; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i125"  value="<?php echo $i125; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i126"  value="<?php echo $i126; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i127" value="<?php echo $i127; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i128" value="<?php echo $i128; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i129" value="<?php echo $i129; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i130"  value="<?php echo $i130; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i131" value="<?php echo $i131; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i132" value="<?php echo $i132; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i133" value="<?php echo $i133; ?>" readonly="readonly"  /></td>
                                <td><input type="text" name="i134" value="<?php echo $i134; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i135" value="<?php echo $i135; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i136" value="<?php echo $i136; ?>" readonly="readonly"/></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i137" value="<?php echo $i137; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i138" value="<?php echo $i138; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i139" value="<?php echo $i139; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i140" value="<?php echo $i140; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i141" value="<?php echo $i141; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i142" value="<?php echo $i142; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i143" value="<?php echo $i143; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i144" value="<?php echo $i144; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i145" value="<?php echo $i145; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i146" value="<?php echo $i146; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i147" value="<?php echo $i147; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i148" value="<?php echo $i148; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i149" value="<?php echo $i149; ?>" readonly="readonly"/></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i150" value="<?php echo $i150; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i151" value="<?php echo $i151; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i152" value="<?php echo $i152; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i153" value="<?php echo $i153; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i154" value="<?php echo $i154; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i155" value="<?php echo $i155; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i156" value="<?php echo $i156; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i157" value="<?php echo $i157; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i158" value="<?php echo $i158; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i159" value="<?php echo $i159; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i160"  value="<?php echo $i160; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i161"  value="<?php echo $i161; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i162"  value="<?php echo $i162; ?>" readonly="readonly"/></td>
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
                                <td><input type="text" name="i163"  value="<?php echo $i163; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i164"  value="<?php echo $i164; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i165"  value="<?php echo $i165; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i166"  value="<?php echo $i166; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i167"  value="<?php echo $i167; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i168"  value="<?php echo $i168; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i169"  value="<?php echo $i169; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i170" value="<?php echo $i170; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i171" value="<?php echo $i171; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i172" value="<?php echo $i172; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i173" value="<?php echo $i173; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i174" value="<?php echo $i174; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i175" value="<?php echo $i175; ?>" readonly="readonly" /></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i176" value="<?php echo $i176; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i177" value="<?php echo $i177; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i178" value="<?php echo $i178; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i179" value="<?php echo $i179; ?>" readonly="readonly"></td>
                                <td><input type="text" name="i180" value="<?php echo $i180; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i181"  value="<?php echo $i181; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i182"  value="<?php echo $i182; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i183"  value="<?php echo $i183; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i184"  value="<?php echo $i184; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i185"  value="<?php echo $i185; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i186"  value="<?php echo $i186; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i187"  value="<?php echo $i187; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i188"  value="<?php echo $i188; ?>" readonly="readonly"/></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i189"  value="<?php echo $i189; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i190" value="<?php echo $i190; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i191" value="<?php echo $i191; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i192" value="<?php echo $i192; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i193" value="<?php echo $i193; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i194" value="<?php echo $i194; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i195" value="<?php echo $i195; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i196" value="<?php echo $i196; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i197" value="<?php echo $i197; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i198" value="<?php echo $i198; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i199" value="<?php echo $i199; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i200" value="<?php echo $i200; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i201" value="<?php echo $i201; ?>" readonly="readonly"/></td>
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
                                <td><input type="text" name="i202" value="<?php echo $i202; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i203" value="<?php echo $i203; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i204" value="<?php echo $i204; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i205" value="<?php echo $i205; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i206" value="<?php echo $i206; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i207" value="<?php echo $i207; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i208" value="<?php echo $i208; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i209" value="<?php echo $i209; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i210" value="<?php echo $i210; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i211" value="<?php echo $i211; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i212" value="<?php echo $i212; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i213" value="<?php echo $i213; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i214" value="<?php echo $i214; ?>" readonly="readonly"/></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i215" value="<?php echo $i215; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i216" value="<?php echo $i216; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i217" value="<?php echo $i217; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i218" value="<?php echo $i218; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i219" value="<?php echo $i219; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i220" value="<?php echo $i220; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i221" value="<?php echo $i221; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i222" value="<?php echo $i222; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i223" value="<?php echo $i223; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i224" value="<?php echo $i224; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i225" value="<?php echo $i225; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i226" value="<?php echo $i226; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i227" value="<?php echo $i227; ?>" readonly="readonly"/></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i228" value="<?php echo $i228; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i229" value="<?php echo $i229; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i230" value="<?php echo $i230; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i231" value="<?php echo $i231; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i232" value="<?php echo $i232; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i233" value="<?php echo $i233; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i234" value="<?php echo $i234; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i235" value="<?php echo $i235; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i236" value="<?php echo $i236; ?>" readonly="readonly"  /></td>
                                <td><input type="text" name="i237" value="<?php echo $i237; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i238" value="<?php echo $i238; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i239" value="<?php echo $i239; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i240" value="<?php echo $i240; ?>" readonly="readonly"/></td>
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
                                <td><input type="text" name="i241" value="<?php echo $i241; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i242" value="<?php echo $i242; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i243" value="<?php echo $i243; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i244" value="<?php echo $i244; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i245" value="<?php echo $i245; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i246" value="<?php echo $i246; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i247" value="<?php echo $i247; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i248" value="<?php echo $i248; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i249" value="<?php echo $i249; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i250" value="<?php echo $i250
								; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i251" value="<?php echo $i251; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i252" value="<?php echo $i252; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i253" value="<?php echo $i253; ?>" readonly="readonly"/></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i254" value="<?php echo $i254; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i255" value="<?php echo $i255; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i256" value="<?php echo $i256; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i257" value="<?php echo $i257; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i258" value="<?php echo $i258; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i259" value="<?php echo $i259; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i260" value="<?php echo $i260; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i261" value="<?php echo $i261; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i262" value="<?php echo $i262; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i263" value="<?php echo $i263; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i264" value="<?php echo $i264; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i265" value="<?php echo $i265; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i266" value="<?php echo $i266; ?>" readonly="readonly"/></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i267" value="<?php echo $i267; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i268" value="<?php echo $i268; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i269" value="<?php echo $i269; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i270" value="<?php echo $i270; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i271" value="<?php echo $i271; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i272" value="<?php echo $i272; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i273" value="<?php echo $i273; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i274" value="<?php echo $i274; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i275" value="<?php echo $i275; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i276" value="<?php echo $i276; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i277" value="<?php echo $i277; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i278" value="<?php echo $i278; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i279" value="<?php echo $i279; ?>" readonly="readonly"/></td>
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
                                <td><input type="text" name="i280" value="<?php echo $i280; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i281" value="<?php echo $i281; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i282" value="<?php echo $i282; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i283" value="<?php echo $i283; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i284" value="<?php echo $i284; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i285" value="<?php echo $i285; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i286" value="<?php echo $i286; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i287" value="<?php echo $i287; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i288" value="<?php echo $i288; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i289" value="<?php echo $i289; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i290"  value="<?php echo $i290; ?>" readonly="readonly"  /></td>
                                <td><input type="text" name="i291"  value="<?php echo $i291; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i292"  value="<?php echo $i292; ?>" readonly="readonly" /></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i293"  value="<?php echo $i293; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i294"  value="<?php echo $i294; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i295"  value="<?php echo $i295; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i296"  value="<?php echo $i296; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i297"  value="<?php echo $i297; ?>" readonly="readonly"  /></td>
                                <td><input type="text" name="i298"  value="<?php echo $i298; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i299"  value="<?php echo $i299; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i300" value="<?php echo $i300; ?>" readonly="readonly"  /></td>
                                <td><input type="text" name="i301" value="<?php echo $i301; ?>" readonly="readonly" /></td>
                               <td><input type="text" name="i302" value="<?php echo $i302; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i303" value="<?php echo $i303; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i304" value="<?php echo $i304; ?>" readonly="readonly" /></td>
                               <td><input type="text" name="i305" value="<?php echo $i305; ?>" readonly="readonly" /></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                         <td><input type="text" name="i306" value="<?php echo $i306; ?>" readonly="readonly" /></td>
                               <td><input type="text" name="i307" value="<?php echo $i307; ?>" readonly="readonly" /></td>
                            <td><input type="text" name="i308" value="<?php echo $i308; ?>" readonly="readonly"  /></td>
                          <td><input type="text" name="i309" value="<?php echo $i309; ?>" readonly="readonly" /></td>
                              <td><input type="text" name="i310" value="<?php echo $i310; ?>" readonly="readonly" /></td>
                               <td><input type="text" name="i311" value="<?php echo $i311; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i312" value="<?php echo $i312; ?>" readonly="readonly"  /></td>
                                <td><input type="text" name="i313" value="<?php echo $i313; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i314" value="<?php echo $i314; ?>" readonly="readonly" /></td>
                               <td><input type="text" name="i315" value="<?php echo $i315; ?>" readonly="readonly" /></td>
                              <td><input type="text" name="i316" value="<?php echo $i316; ?>" readonly="readonly" /></td>
                            <td><input type="text" name="i317" value="<?php echo $i317; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i318" value="<?php echo $i318; ?>" readonly="readonly"  /></td>
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
                                <td><input type="text" name="i319" value="<?php echo $i319; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i320" value="<?php echo $i320; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i321" value="<?php echo $i321; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i322" value="<?php echo $i322; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i323" value="<?php echo $i323; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i324" value="<?php echo $i324; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i325" value="<?php echo $i325; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i326" value="<?php echo $i326; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i327" value="<?php echo $i327; ?>" readonly="readonly" /></td>
                               <td><input type="text" name="i328" value="<?php echo $i328; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i329" value="<?php echo $i329; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i330" value="<?php echo $i330; ?>" readonly="readonly" /></td>
                                 <td><input type="text" name="i331" value="<?php echo $i331; ?>" readonly="readonly" /></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                               
                                 <td><input type="text" name="i332" value="<?php echo $i332; ?>" readonly="readonly" /></td>
                                
                                 <td><input type="text" name="i333" value="<?php echo $i333; ?>" readonly="readonly"/></td>
                              
                                 <td><input type="text" name="i334" value="<?php echo $i334; ?>" readonly="readonly"/></td>
                               
                                 <td><input type="text" name="i335" value="<?php echo $i335; ?>" readonly="readonly"/></td>
                                
                                 <td><input type="text" name="i336" value="<?php echo $i336; ?>" readonly="readonly"/></td>
                                
                                 <td><input type="text" name="i337" value="<?php echo $i337; ?>" readonly="readonly"/></td>
                              
                                 <td><input type="text" name="i338" value="<?php echo $i338; ?>" readonly="readonly"/></td>
                                
                                 <td><input type="text" name="i339" value="<?php echo $i339; ?>" readonly="readonly"/></td>
                               
                                 <td><input type="text" name="i340" value="<?php echo $i340; ?>" readonly="readonly" /></td>
                                
                                 <td><input type="text" name="i341" value="<?php echo $i341; ?>" readonly="readonly"/></td>
                              
                                 <td><input type="text" name="i342" value="<?php echo $i342; ?>" readonly="readonly"/></td>
                               
                                 <td><input type="text" name="i343" value="<?php echo $i343; ?>" readonly="readonly"/></td>
                               
                                 <td><input type="text" name="i344" value="<?php echo $i344; ?>" readonly="readonly"/></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                               <td><input type="text" name="i345" value="<?php echo $i345; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i346" value="<?php echo $i346; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i347" value="<?php echo $i347; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i348" value="<?php echo $i348; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i349" value="<?php echo $i349; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i350" value="<?php echo $i350; ?>" readonly="readonly" /></td>
                              <td><input type="text" name="i351" value="<?php echo $i351; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i352" value="<?php echo $i352; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i353" value="<?php echo $i353; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i354" value="<?php echo $i354; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i355" value="<?php echo $i355; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i356" value="<?php echo $i356; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i357" value="<?php echo $i357; ?>" readonly="readonly"/></td>
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
                                 <td><input type="text" name="i358" value="<?php echo $i358; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i359" value="<?php echo $i359; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i360" value="<?php echo $i360; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i361" value="<?php echo $i361; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i362" value="<?php echo $i362; ?>" readonly="readonly" /></td>
                               <td><input type="text" name="i363" value="<?php echo $i363; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i364" value="<?php echo $i364; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i365" value="<?php echo $i365; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i366" value="<?php echo $i366; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i367" value="<?php echo $i367; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i368" value="<?php echo $i368; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i369" value="<?php echo $i369; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i370" value="<?php echo $i370; ?>" readonly="readonly"/></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                 <td><input type="text" name="i371" value="<?php echo $i371; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i372" value="<?php echo $i372; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i373" value="<?php echo $i373; ?>" readonly="readonly"/></td>
                             <td><input type="text" name="i374" value="<?php echo $i374; ?>" readonly="readonly"/></td>
                             <td><input type="text" name="i375" value="<?php echo $i375; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i376" value="<?php echo $i376; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i377" value="<?php echo $i377; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i378" value="<?php echo $i378; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i379" value="<?php echo $i379; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i380" value="<?php echo $i380; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i381" value="<?php echo $i381; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i382" value="<?php echo $i382; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i383" value="<?php echo $i383; ?>" readonly="readonly"/></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                               <td><input type="text" name="i384" value="<?php echo $i384; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i385" value="<?php echo $i385; ?>" readonly="readonly"/></td>
                             <td><input type="text" name="i386" value="<?php echo $i386; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i387" value="<?php echo $i387; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i388" value="<?php echo $i388; ?>" readonly="readonly" /></td>
                               <td><input type="text" name="i389" value="<?php echo $i399; ?>" readonly="readonly"/></td>
                             <td><input type="text" name="i390" value="<?php echo $i390; ?>" readonly="readonly" /></td>
                              <td><input type="text" name="i391" value="<?php echo $i391; ?>" readonly="readonly"/></td>
                            <td><input type="text" name="i392" value="<?php echo $i392; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i393" value="<?php echo $i393; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i394" value="<?php echo $i394; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i395" value="<?php echo $i395; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i396" value="<?php echo $i396; ?>" readonly="readonly"/></td>
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
                                <td><input type="text" name="i397" value="<?php echo $i397; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i398" value="<?php echo $i398; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i399" value="<?php echo $i399; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i400"  value="<?php echo $i400; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i401"  value="<?php echo $i401; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i402"  value="<?php echo $i402; ?>" readonly="readonly"/></td>
                             <td><input type="text" name="i403"  value="<?php echo $i403; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i404"  value="<?php echo $i404; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i405"  value="<?php echo $i405; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i406"  value="<?php echo $i406; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i407"  value="<?php echo $i407; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i408"  value="<?php echo $i408; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i409"  value="<?php echo $i409; ?>" readonly="readonly"/></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                               <td><input type="text" name="i410" value="<?php echo $i410; ?>" readonly="readonly" /></td>
                              <td><input type="text" name="i411" value="<?php echo $i411; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i412" value="<?php echo $i412; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i413" value="<?php echo $i413; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i414" value="<?php echo $i414; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i415" value="<?php echo $i415; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i416" value="<?php echo $i416; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i417" value="<?php echo $i417; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i418" value="<?php echo $i418; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i419" value="<?php echo $i419; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i420" value="<?php echo $i420; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i421" value="<?php echo $i421; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i422" value="<?php echo $i422; ?>" readonly="readonly"/></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i423" value="<?php echo $i423; ?>" readonly="readonly" /></td>
                                 <td><input type="text" name="i424" value="<?php echo $i424; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i425" value="<?php echo $i425; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i426" value="<?php echo $i426; ?>" readonly="readonly"/></td>
                             <td><input type="text" name="i427" value="<?php echo $i427; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i428" value="<?php echo $i428; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i429" value="<?php echo $i429; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i430" value="<?php echo $i430; ?>" readonly="readonly" /></td>
                                 <td><input type="text" name="i431" value="<?php echo $i431; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i432" value="<?php echo $i432; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i433" value="<?php echo $i433; ?>" readonly="readonly"/></td>
                             <td><input type="text" name="i434" value="<?php echo $i434; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i435" value="<?php echo $i435; ?>" readonly="readonly"/></td>
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
                                 <td><input type="text" name="i436" value="<?php echo $i436; ?>" readonly="readonly" /></td>
                                 <td><input type="text" name="i437" value="<?php echo $i437; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i438" value="<?php echo $i438; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i439" value="<?php echo $i439; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i440" value="<?php echo $i440; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i441" value="<?php echo $i441; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i442" value="<?php echo $i442; ?>" readonly="readonly"/></td>
                             <td><input type="text" name="i443" value="<?php echo $i443; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i444" value="<?php echo $i444; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i445" value="<?php echo $i445; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i446" value="<?php echo $i446; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i447" value="<?php echo $i447; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i448" value="<?php echo $i448; ?>" readonly="readonly"/></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                 <td><input type="text" name="i449" value="<?php echo $i449; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i450" value="<?php echo $i450; ?>" readonly="readonly" /></td>
                                 <td><input type="text" name="i451" value="<?php echo $i451; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i452" value="<?php echo $i452; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i453" value="<?php echo $i453; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i454" value="<?php echo $i454; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i455" value="<?php echo $i455; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i456" value="<?php echo $i456; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i457" value="<?php echo $i457; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i458" value="<?php echo $i458; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i459" value="<?php echo $i459; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i460"  value="<?php echo $i460; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i461"  value="<?php echo $i461; ?>" readonly="readonly"/></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                              <td><input type="text" name="i462"  value="<?php echo $i462; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i463"  value="<?php echo $i463; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i464"  value="<?php echo $i464; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i465"  value="<?php echo $i465; ?>" readonly="readonly"/></td>
                             <td><input type="text" name="i466"  value="<?php echo $i466; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i467"  value="<?php echo $i467; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i468"  value="<?php echo $i468; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i469"  value="<?php echo $i469; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i470" value="<?php echo $i470; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i471" value="<?php echo $i471; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i472" value="<?php echo $i472; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i473" value="<?php echo $i473; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i474" value="<?php echo $i474; ?>" readonly="readonly"/></td>
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
                               <td><input type="text" name="i475" value="<?php echo $i475; ?>" readonly="readonly" /></td>
                               <td><input type="text" name="i476" value="<?php echo $i476; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i477" value="<?php echo $i477; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i478" value="<?php echo $i478; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i479" value="<?php echo $i479; ?>" readonly="readonly"/></td>
                             <td><input type="text" name="i480" value="<?php echo $i480; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i481" value="<?php echo $i481; ?>" readonly="readonly" /></td>
                               <td><input type="text" name="i482" value="<?php echo $i482; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i483" value="<?php echo $i483; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i484" value="<?php echo $i484; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i485" value="<?php echo $i485; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i486" value="<?php echo $i486; ?>" readonly="readonly"/></td>
                                 <td><input type="text" name="i487" value="<?php echo $i487; ?>" readonly="readonly"/></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i488" value="<?php echo $i488; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i489" value="<?php echo $i489; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i490" value="<?php echo $i490; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i491" value="<?php echo $i491; ?>" readonly="readonly"/></td>
                             <td><input type="text" name="i492" value="<?php echo $i492; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i493" value="<?php echo $i493; ?>" readonly="readonly"/></td>
                            <td><input type="text" name="i494" value="<?php echo $i494; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i495" value="<?php echo $i495; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i496" value="<?php echo $i496; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i497" value="<?php echo $i497; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i498" value="<?php echo $i498; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i499" value="<?php echo $i499; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i500" value="<?php echo $i500; ?>" readonly="readonly" /></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i501" value="<?php echo $i501; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i502" value="<?php echo $i502; ?>" readonly="readonly"/></td>
                              <td><input type="text" name="i503" value="<?php echo $i503; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i504" value="<?php echo $i504; ?>" readonly="readonly"  /></td>
                              <td><input type="text" name="i505" value="<?php echo $i505; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i506" value="<?php echo $i506; ?>" readonly="readonly"/></td>
                               <td><input type="text" name="i507" value="<?php echo $i507; ?>" readonly="readonly" /></td>
                               <td><input type="text" name="i508" value="<?php echo $i508; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i509" value="<?php echo $i509; ?>" readonly="readonly" /></td>
                                <td><input type="text" name="i510" value="<?php echo $i510; ?>" readonly="readonly" /></td>
                              <td><input type="text" name="i511" value="<?php echo $i511; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i512" value="<?php echo $i512; ?>" readonly="readonly"/></td>
                                <td><input type="text" name="i513" value="<?php echo $i513; ?>" readonly="readonly" /></td>
                              </tr>
                            </table>
                            <br />
<a href="printinventorynetwork.php?id=<?php echo $_GET['id']; ?>" target="_blank" class="btn btn-warning">Cetak</a>
<a href="?nav=inventorynetworkdata" class="btn btn-primary">Kembali</a> 
						  </form>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
