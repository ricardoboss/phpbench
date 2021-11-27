<?php

namespace PhpBench\Model\Result;

use PhpBench\Model\ResultFactory;
use PhpBench\Model\ResultInterface;
use PhpBench\Model\Result\Exception\UnkownResultType;
use PhpBench\Model\Result\TimeResult;

final class HrTimeResultFactory implements ResultFactory
{
    public function create(array $data): ResultInterface
    {
        // TODO: This scales up to Microseconds but loses precision
        return new TimeResult(($data['net'] / 1000), $data['revs']);
    }
}
