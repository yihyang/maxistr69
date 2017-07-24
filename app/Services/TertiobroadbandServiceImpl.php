<?php

namespace App\Services;


use App\Model\Tertiobroadband;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;
class TertiobroadbandServiceImpl implements TertiobroadbandService {

    private $tertiobroadband;

    public function __construct(Tertiobroadband $tertiobroadband)
    {
        $this->tertiobroadband = $tertiobroadband;
    }

    public function getAllTertiobroadband() {
        return $this->tertiobroadband->get();
    }

}
