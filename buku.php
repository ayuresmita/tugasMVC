<?
	class book{
		public $judul;
		public $pengarang;
		public $penerbit;
		public $tahun;
			
			public function_contruct($title,$author,$publisher,$year)
			{
				$this->judul = $title;
				$this->pengarang = $author;
				$this->penerbit = $publisher;
				$this->tahun =$year;
			}
	}
?>