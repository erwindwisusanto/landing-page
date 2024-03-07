<?php

namespace App\Repositories;

use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class BniRepository
{
	private $tableMaster = "kur_bni_n_rme_klinik_pintar";

	public function store($data) {
		try {
			DB::beginTransaction();
			$data['created_at'] = Carbon::now();
			$query = DB::table($this->tableMaster)->insert($data);
			DB::commit();
			return $query;
		} catch (QueryException $e) {
			DB::rollBack();
			return $e->getMessage();
		}
	}
}
