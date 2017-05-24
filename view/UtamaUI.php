<?php 
require_once 'View.php';
/**
* 
*/
class UtamaUi extends View
{
	
	public function tampilkanBerita()
	{
		include_once 'pages/beranda.php';
		include_once 'model/Berita.php';
		$this->end();
	}
}
 ?>