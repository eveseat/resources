<?php
/*
This file is part of SeAT

Copyright (C) 2015, 2016  Leon Jacobs

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

$sde_name = 'sde-20240302-TRANQUILITY';

// Prepare the data that we want represented as JSON
$data = [
    'version' => $sde_name,
    'url'     => 'https://www.fuzzwork.co.uk/dump/:version/',
    'format'  => '.sql.bz2',
    'tables'  => [
        'chrFactions',
        'dgmTypeAttributes',
        'dgmTypeEffects',
        'invCategories',
        'invContrabandTypes',
        'invControlTowerResourcePurposes',
        'invControlTowerResources',
        'invFlags',
        'invGroups',
        'invItems',
        'invMarketGroups',
        'invMetaGroups',
        'invMetaTypes',
        'invNames',
        'invPositions',
        'invTypeMaterials',
        'invTypeReactions',
        'invTypes',
        'invUniqueNames',
        'mapDenormalize',
        'ramActivities',
        'staStations',
    ],
];

$file = __DIR__ . '/../sde.json';
$sde = json_encode($data) . PHP_EOL;
file_put_contents($file, $sde, LOCK_EX);
