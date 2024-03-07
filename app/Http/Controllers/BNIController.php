<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Services\BniService;
use Exception;
use Illuminate\Http\Request;

use function App\Helpers\statusInternalServerError;
use function App\Helpers\statusOK;
use function App\Helpers\statusUnproccessableContent;

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
		$request = $request->validate($request->rules());

		if (!$request) {
			return statusUnproccessableContent('Something Wrong in Validation');
		}

    try {
			$service = $this->bniService->newRecord($request);
			if ($service) {
				return statusOK('success register', $service);
			}
		} catch (Exception $error) {
			return statusInternalServerError($error->getMessage(), null);
		}
	}
}
