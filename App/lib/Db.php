<?php

	namespace App\lib;

	class Db {

		protected $db;

		public function __construct() {
			// config
		}

		public function getAll() {
			return $arr = [
				[
					'id' => '1',
					'title' => 'title1',
					'cost' => '1'
				],
				[
					'id' => '2',
					'title' => 'title2',
					'cost' => '2'
				]
			];
		}

		public function getProduct() {
			return $arr = [
				[
					'id' => '1',
					'title' => 'title1',
					'cost' => '1'
				]
			];
		}
	}