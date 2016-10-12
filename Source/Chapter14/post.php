/* Add the following lines to the current Post model */
	function xmlFindAll() {
		$this->setDataSource('xml');
		$xml = $this->getDataSource();
		return $xml->findAll();
	}