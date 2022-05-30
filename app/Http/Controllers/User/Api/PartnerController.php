<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Http\Resources\PartnerResource;
use Illuminate\Support\Facades\Validator;
use App\Traits\Api\PartnerTrait;

class PartnerController extends Controller
{
    use PartnerTrait;

    public function index()
    {

        $partner = PartnerResource::collection(Partner::get());
        return $this->partnerApiResponse($partner, 'ok', 200);
    }

    public function show($id)
    {

        $partner = Partner::find($id);

        if ($partner) {
            return $this->partnerApiResponse(new PartnerResource($partner), 'ok', 200);
        }
        return $this->partnerApiResponse(null, 'The partner Not Found', 404);
    }
}
