<?php
/*
 * Copyright 2025.  Baks.dev <admin@baks.dev>
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is furnished
 *  to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 */

declare(strict_types=1);

namespace BaksDev\Wildberries\Manufacture\Messenger\UpdateWbStocks;

use BaksDev\Users\Profile\UserProfile\Type\Id\UserProfileUid;
use Symfony\Component\DependencyInjection\Attribute\Exclude;

#[Exclude]
final readonly class UpdateWbStocksMessage
{
    private string $profile;

    private string $barcode;

    private int $quantity;

    public function __construct(
        UserProfileUid|string $profile,
        string $barcode,
        int $quantity
    )
    {

        $this->profile = (string) $profile;
        $this->barcode = $barcode;
        $this->quantity = $quantity;
    }

    /**
     * Barcode
     */
    public function getBarcode(): string
    {
        return $this->barcode;
    }

    /**
     * Quantity
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Profile
     */
    public function getProfile(): UserProfileUid
    {
        return new UserProfileUid($this->profile);
    }


}