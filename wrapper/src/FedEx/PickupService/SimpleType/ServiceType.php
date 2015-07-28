<?php
namespace FedEx\Pickup\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the collection of available FedEx transportation service options.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ServiceType
    extends AbstractSimpleType
{
    const _EUROPE_FIRST_INTERNATIONAL_PRIORITY = 'EUROPE_FIRST_INTERNATIONAL_PRIORITY';
    const _FEDEX_1_DAY_FREIGHT = 'FEDEX_1_DAY_FREIGHT';
    const _FEDEX_2_DAY = 'FEDEX_2_DAY';
    const _FEDEX_2_DAY_AM = 'FEDEX_2_DAY_AM';
    const _FEDEX_2_DAY_FREIGHT = 'FEDEX_2_DAY_FREIGHT';
    const _FEDEX_3_DAY_FREIGHT = 'FEDEX_3_DAY_FREIGHT';
    const _FEDEX_EXPRESS_SAVER = 'FEDEX_EXPRESS_SAVER';
    const _FEDEX_FIRST_FREIGHT = 'FEDEX_FIRST_FREIGHT';
    const _FEDEX_FREIGHT = 'FEDEX_FREIGHT';
    const _FEDEX_FREIGHT_ECONOMY = 'FEDEX_FREIGHT_ECONOMY';
    const _FEDEX_FREIGHT_PRIORITY = 'FEDEX_FREIGHT_PRIORITY';
    const _FEDEX_GROUND = 'FEDEX_GROUND';
    const _FEDEX_NATIONAL_FREIGHT = 'FEDEX_NATIONAL_FREIGHT';
    const _FIRST_OVERNIGHT = 'FIRST_OVERNIGHT';
    const _GROUND_HOME_DELIVERY = 'GROUND_HOME_DELIVERY';
    const _INTERNATIONAL_DISTRIBUTION_FREIGHT = 'INTERNATIONAL_DISTRIBUTION_FREIGHT';
    const _INTERNATIONAL_ECONOMY = 'INTERNATIONAL_ECONOMY';
    const _INTERNATIONAL_ECONOMY_DISTRIBUTION = 'INTERNATIONAL_ECONOMY_DISTRIBUTION';
    const _INTERNATIONAL_ECONOMY_FREIGHT = 'INTERNATIONAL_ECONOMY_FREIGHT';
    const _INTERNATIONAL_FIRST = 'INTERNATIONAL_FIRST';
    const _INTERNATIONAL_GROUND = 'INTERNATIONAL_GROUND';
    const _INTERNATIONAL_PRIORITY = 'INTERNATIONAL_PRIORITY';
    const _INTERNATIONAL_PRIORITY_DISTRIBUTION = 'INTERNATIONAL_PRIORITY_DISTRIBUTION';
    const _INTERNATIONAL_PRIORITY_FREIGHT = 'INTERNATIONAL_PRIORITY_FREIGHT';
    const _PRIORITY_OVERNIGHT = 'PRIORITY_OVERNIGHT';
    const _SAME_DAY_METRO_AFTERNOON = 'SAME_DAY_METRO_AFTERNOON';
    const _SAME_DAY_METRO_MORNING = 'SAME_DAY_METRO_MORNING';
    const _SAME_DAY_METRO_RUSH = 'SAME_DAY_METRO_RUSH';
    const _SMART_POST = 'SMART_POST';
    const _STANDARD_OVERNIGHT = 'STANDARD_OVERNIGHT';
    const _TRANSBORDER_DISTRIBUTION_CONSOLIDATION = 'TRANSBORDER_DISTRIBUTION_CONSOLIDATION';
}