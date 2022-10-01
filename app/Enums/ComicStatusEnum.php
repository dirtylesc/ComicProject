<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ComicStatusEnum extends Enum
{
    public const DANG_TIEN_HANH = 0;
    public const HOAN_THANH = 1;
    public const TAM_HOAN = 2;
}
