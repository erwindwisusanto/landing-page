<?php

namespace App\Services;

use App\Repositories\BniRepository;

class BniService
{
	protected $bniRepository;

  public function __construct(
		BniRepository $bniRepository
		)
	{
		$this->bniRepository = $bniRepository;
	}

	public function newRecord($applicant){

	}
}
