<?
class XmlSource extends DataSource {
	var $description = 'XML Data Source';
	var $FileUtil = null;
	var $File = null;
	
	function __construct($config=null) {
    	parent::__construct($config);
    	$this->connected = $this->connect();
    	return $config;
    }
    
    function __destruct() {
    	$this->connected = $this->close();
    	parent::__destruct();
    }
    
    function connect() {
    	App::import('Core','File');
        $this->FileUtil =& new File(WWW_ROOT.'files/'.$this->config['file']);
        $this->File = $this->FileUtil->read();
        if (!$this->File) {
        	return false;
        } else {
        	return true;
        }
    }
    
    function close() {
    	if ($this->FileUtil->close()) {
    		return false;
    	} else {
    		return true;
    	}
    }
    
    function findAll() {
    	App::import('Core','Xml');
    	$xml = Set::reverse(new Xml($this->File));
    	return Set::extract($xml,'Post');
    }
    
    
    function query() {
    
    }
    
    function describe() {
    
    }
    
    function listSources() {
    
    }
    
    function column() {
    
    }
    
    function isConnected() {
    	return $this->connected;
    }
    
    function disconnect() {
    	return !$this->connected;
    }
}
?>