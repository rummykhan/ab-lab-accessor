<?php

namespace ABLab\Accessor;

use ABLab\Accessor\Request\GetTreatmentRequest;
use ABLab\Accessor\Response\TreatmentResponse;

interface ABLabAccessorInterface
{
    public function getTreatment(GetTreatmentRequest $treatmentRequest): string;

    public function getTreatmentResponse(GetTreatmentRequest $treatmentRequest): TreatmentResponse;
}