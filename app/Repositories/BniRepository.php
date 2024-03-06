<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class BniRepository
{
	private $tableMaster = "KUR_BNI_N_RME_KLINIK_PINTAR";

	public function store($data) {
		$query = DB::table($this->tableMaster)->insert($data);
	}
}
