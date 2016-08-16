<?php
	include 'database/database.php';
	

	$style = '<style>div#fgdfront {background-image:url(bg.jpg); background-image-resize:6}</style>';

	
	$html = '';
	$pdo = Database::connect();

	$sql = 'SELECT * FROM tbl_reports WHERE rep_id = '. $_POST['id'];

	foreach ($pdo->query($sql) as $row) {
		$quarter = '';
		if ($row['rep_quarter'] == 1) {
			$quarter = '1<sup>st</sup>';
		}
		elseif ($row['rep_quarter'] == 2) {
			$quarter = '2<sup>nd</sup>';
		}
		elseif ($row['rep_quarter'] == 3) {
			$quarter = '3<sup>rd</sup>';
		}
		elseif ($row['rep_quarter'] == 4) {
			$quarter = '4<sup>th</sup>';
		}

		$html = '<h1 style="font-size: 12px; text-align:center;"><a name="bookmark0"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">ASSESSMENT REPORT ON BIODIVERSITY MONITORING SYSTEM</span></h1><h1 style="font-size: 12px; text-align:center;padding:0pt 0pt 15pt 0pt;"><a name="bookmark1"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">('.$quarter.' Quarter, F.Y. '.$row['rep_year'].')</span></h1><h1 style="font-size: 12px; text-indent:2pt;"><a name="bookmark2"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">I. Introduction</span></h1>
	<p style="font-size: 12px; text-align:justify;text-indent:20pt;padding:15pt 0pt 0pt 0pt;"><span class="font0" style="font-size: 12px; color:#4A4E52;">'.$row['rep_introduction'].'</span></p><h1 style="font-size: 12px; text-indent:2pt;padding:24pt 339pt 0pt 0pt;"><a name="bookmark3"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">II. Results and Discussion</span></h1>';


		$fgdsum = 'SELECT fgd_summary FROM tbl_fgd WHERE fgd_id = '. $row['fgd_id'];

		foreach ($pdo->query($fgdsum) as $row_fgd) {

		$html .='<h2 style="font-size: 12px; text-indent:2pt;padding:20pt 339pt 0pt 15pt;"><a name="bookmark3"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">A. Focus Group Discussion</span></h2><p style="font-size: 12px; text-align:justify;text-indent:44pt;padding:0pt 0pt 0pt 30pt;"><span class="font0" style="font-size: 12px; color:#4A4E52;">'.$row_fgd['fgd_summary'].'</span></p>';
		}
		//var_dump($html);
		$fdsum = 'SELECT fd_summary FROM tbl_field_diary WHERE fd_id = '. $row['fd_id'];

		foreach ($pdo->query($fdsum) as $row_fd) {

		$html .='<h2 style="font-size: 12px; text-indent:2pt;padding:20pt 339pt 0pt 15pt;"><a name="bookmark3"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">B. Field Diary</span></h2><p style="font-size: 12px; text-align:justify;text-indent:44pt;padding:0pt 0pt 0pt 30pt;"><span class="font0" style="font-size: 12px; color:#4A4E52;">'.$row_fd['fd_summary'].'</span></p>';
		}

		$pdsum = 'SELECT pd_summary FROM tbl_photo_doc WHERE pd_id = '. $row['pd_id'];

		foreach ($pdo->query($pdsum) as $row_pd) {

		$html .='<h2 style="font-size: 12px; text-indent:2pt;padding:20pt 339pt 0pt 15pt;"><a name="bookmark3"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">C. Photo Documentation</span></h2><p style="font-size: 12px; text-align:justify;text-indent:44pt;padding:0pt 0pt 0pt 30pt;"><span class="font0" style="font-size: 12px; color:#4A4E52;">'.$row_pd['pd_summary'].'</span></p>';
		}

		$tsectsum = 'SELECT tsect_summary FROM tbl_transect WHERE tsect_id = '. $row['tsect_id'];

		foreach ($pdo->query($tsectsum) as $row_tsect) {

		$html .='<h2 style="font-size: 12px; text-indent:2pt;padding:20pt 339pt 0pt 15pt;"><a name="bookmark3"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">D. Transect</span></h2><p style="font-size: 12px; text-align:justify;text-indent:44pt;padding:0pt 0pt 0pt 30pt;"><span class="font0" style="font-size: 12px; color:#4A4E52;">'.$row_tsect['tsect_summary'].'</span></p>';
		}
		$html .='<h1 style="font-size: 12px; text-align:justify;text-indent:1pt;padding:12pt 0pt 12pt 0pt;"><a name="bookmark5"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">III. SUMMARY AND CONCLUSION</span></h1>
		<p style="font-size: 12px; text-align:justify;text-indent:44pt;padding:0pt 0pt 0pt 30pt;"><span class="font0" style="font-size: 12px; color:#4A4E52;">'.$row['rep_conclusion'].'</span></p>
		<h1 style="font-size: 12px; text-align:justify;text-indent:1pt;padding:12pt 0pt 12pt 0pt;"><a name="bookmark6"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">IV. RECOMMENDATIONS</span></h1>
		<p style="font-size: 12px; text-align:justify;text-indent:35pt;padding:0pt 0pt 0pt 30pt;"><span class="font0" style="font-size: 12px; color:#4A4E52;">'.$row['rep_recommendation'].'</span></p>
		<div style="font-size: 12px; float:left;layout-flow:horizontal;"><img src="selection-1.jpg" style="font-size: 12px; width:107pt;height:51pt;"/></div>
		<p style="font-size: 12px; text-align:justify;text-indent:1pt;padding:24pt 0pt 30pt 0pt;"><span class="font0" style="font-size: 12px; color:#4A4E52;">Prepared by:</span></p><h1 style="font-size: 12px; text-align:justify;text-indent:1pt;padding:30pt 0pt 3pt 0pt;"><a name="bookmark7"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">CHARLENE J &nbsp;&nbsp;&nbsp;TANTINO</span></h1>
		<p style="font-size: 12px; text-align:justify;text-indent:1pt;padding:3pt 0pt 0pt 0pt;"><span class="font0" style="font-size: 12px; color:#4A4E52;">PASu Biologist</span></p>';

		$fgd_html='<div id="fgdfront" style="border:0.1mm solid #880000; background: transparent url(bg.jpg) repeat fixed right top; background-color:#ccffff; height:100%; width: 100%;"></div>';

		$fgd_content='';

		$fgd_all = 'SELECT fgd_id FROM tbl_fgd WHERE fgd_id = '. $row['fgd_id'];

		foreach ($pdo->query($fgd_all) as $fgd) {

			$fgd_content.='<h1 style="font-size: 12px; text-align:center;"><a name="bookmark0"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">REPORT ON FOCUS GROUP DISCUSSION</span></h1><h1 style="font-size: 12px; text-align:center;padding:0pt 0pt 15pt 0pt;"><a name="bookmark1"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">('.$quarter.' Quarter, F.Y. '.$row['rep_year'].')</span></h1><h1 style="font-size: 12px; text-indent:2pt;"><a name="bookmark2"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">I. Format 1 (Main Issues Discussed)</span></h1>';

			$fgd_format1_query = 'SELECT * FROM tbl_fgd_format1 WHERE fgd_id = '. $fgd['fgd_id'];

			$fgd_format1 = array();
			foreach ($pdo->query($fgd_format1_query) as $fgd1result) {
				$fgd_format1['fgd1_id'][] = $fgd1result['fgd1_id'];
			    $fgd_format1['fgd_id'][] = $fgd1result['fgd_id'] ;
			    $fgd_format1['fgd1_locality'][] = $fgd1result['fgd1_locality'] ;
			    $fgd_format1['fgd1_main_issue'][] = $fgd1result['fgd1_main_issue'] ;
			    $fgd_format1['fgd1_description'][] = $fgd1result['fgd1_description'] ;
			    $fgd_format1['fgd1_pasu_solution'][] = $fgd1result['fgd1_pasu_solution'] ;

			}
			$fgd1_locality = array();
			$fgd1_locality[0] = $fgd_format1['fgd1_locality'][0];

			for ($i = 1; $i < count($fgd_format1['fgd1_locality']); $i++) {
				$toadd = true;
				for ($j = 0; $j < count($fgd1_locality); $j++) {   
					if ($fgd1_locality[$j] == $fgd_format1['fgd1_locality'][$i]) {
						$toadd = false;
					}
				}
				if ($toadd) {
					array_push($fgd1_locality,$fgd_format1['fgd1_locality'][$i]);
				}
			}
			//var_dump($fgd1_locality);

			/*$localityCount = count($fgd1locality);
			if ($localityCount != 0) {
				
				# code...
			}
			$fgd_content.='<h2 style="font-size: 12px; text-indent:2pt;padding:20pt 339pt 0pt 15pt;"><a name="bookmark3"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">D. Transect</span></h2><p style="font-size: 12px; text-align:justify;text-indent:44pt;padding:0pt 0pt 0pt 30pt;"><span class="font0" style="font-size: 12px; color:#4A4E52;">'.$row_tsect['tsect_summary'].'</span></p><h1 style="font-size: 12px; text-indent:2pt;padding:24pt 339pt 0pt 0pt;"><a name="bookmark3"></a><span class="font0" style="font-size: 12px; font-weight:bold;color:#4A4E52;">II. Results and Discussion</span></h1>';*/
		}

		

		//$mpdf->WriteHTML('<p>'.$row['rep_introduction'].'</p>');

/*		echo '<center>'. $row['rep_id'] . '</center>';
		echo '<td>'. $row['pasu_fname'] . ' ' . $row['pasu_lname'] . '</td>';
		echo '<td>'. $row['rep_date'] . '</td>';
		echo '<td><div class="text-center">'. $row['rep_quarter'] . ' / ' . $row['rep_year'] . '</div></td>';
		echo '<td>'. $row['pa_name'] . '</td>';

		echo '<td><form action="report.php" method="POST" target="_blank">
		        <input type="hidden" name="id" value="'. $row['rep_id'] . '">
		        <input class="btn btn-block center-block bg-purple btn-sm" style="font-size: 12px; width: 50%;" type="submit" value="Submit">
		      </form>
		</td>';
		echo '</tr>';*/
	}
	Database::disconnect();
	/*include("../mpdf/mpdf.php");

	$mpdf=new mPDF(); 

	$mpdf->SetDisplayMode('fullpage');

	// LOAD a stylesheet
	// $stylesheet = file_get_contents('selection.css');
	// $mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text
	$mpdf->WriteHTML($style);
	$mpdf->WriteHTML($html);
	$mpdf->AddPage();
	$mpdf->WriteHTML($fgd_html);
	$mpdf->WriteHTML($fgd_content);

	

	$mpdf->Output();

	exit;*/
                    
?>

<!-- testing html -->
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<?echo $style;?>
</head>
<body>

<?php
	echo $html;
	echo $fgd_html;
	echo $fgd_content;
	var_dump($fgd_format1);
?>

</body>
</html>