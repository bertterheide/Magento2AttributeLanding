<?php

namespace Emico\AttributeLanding\Model\FilterHider;

use Emico\AttributeLanding\Api\Data\LandingPageInterface;
use Emico\Tweakwise\Model\Catalog\Layer\Filter\Item;
use Magento\Catalog\Model\Layer\Filter\FilterInterface;

/**
 * @author Bram Gerritsen <bgerritsen@emico.nl>
 * @copyright (c) Emico B.V. 2019
 */

interface FilterHiderInterface
{
    /**
     * @param LandingPageInterface $landingPage
     * @param FilterInterface $filter
     * @param Item|null $filterItem
     * @return bool
     */
    public function shouldHideFilter(LandingPageInterface $landingPage, FilterInterface $filter, Item $filterItem = null): bool;
}