/* Add the following lines to the current Posts controller */
	function pdf($id = null) {
		if (!$id) {
			$this->redirect(array('action'=>'index'),null,true);
		}
		
		$text = $this->Post->read(null,$id);
		
		App::import('Vendor','pdf',array('file'=>'Zend/Pdf.php'));
		$pdf =& new Zend_Pdf();
		ini_set('include_path', CAKE_CORE_INCLUDE_PATH.PATH_SEPARATOR.ROOT.DS.APP_DIR.DS.PATH_SEPARATOR.ini_get('include_path'));
		
		$page = $pdf->newPage(Zend_Pdf_Page::SIZE_LETTER);
		$pdf->pages[] = $page;
		$page->setFont(Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA), 12);
		$text = wordwrap($text['Post']['content'], 80, "\n", false);
		$token = strtok($text, "\n");
		$y = 740;
		while ($token != false) {
			if ($y < 60) {
				$pdf->pages[] = ($page = $pdf->newPage(Zend_Pdf_Page::SIZE_LETTER));
				$y = 740;
			} else {
				$page->drawText($token, 40, $y);
				$y-=15;
			}
			$token = strtok("\n");
		}
		
		$data = $pdf->render();
		header("Content-Disposition: inline; filename=blog_post.pdf"); 
		header("Content-type: application/x-pdf"); 
		echo $data;
		exit();
	}