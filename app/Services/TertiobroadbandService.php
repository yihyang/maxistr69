<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Request;
interface TertiobroadbandService {
    public function getAllTertiobroadband();
    public function findTertiobroadbandById($id);
}
