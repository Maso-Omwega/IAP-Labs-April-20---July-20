<?php
	//We create
	interface Crud{
		/*All these methods have to be implemented by any
		class that implements these interfaces*/
		public function save();
		public function readAll();
		public function readUnique();
		public function search();
		public function update();
		public function removeOne();
		public function removeAll();
	}
?>