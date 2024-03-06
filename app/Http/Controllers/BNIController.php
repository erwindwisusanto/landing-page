<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Services\BniService;
use Illuminate\Http\Request;

class BNIController extends Controller
{
	protected $bniService;

  public function __construct(
		BniService $bniService
		)
	{
		$this->bniService = $bniService;
	}

	public function submit(StoreRegisterRequest $request) {
		$applicant = $request->validate();
		$response = $this->bniService->newRecord($applicant);
	}
}
