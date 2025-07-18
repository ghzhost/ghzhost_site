<?php

use WHMCS\Product\ProductGroup;
use WHMCS\Database\Capsule;

add_hook('ClientAreaPage', 1, function($vars) {
    // Obtém todos os grupos de produtos
    $productGroups = Capsule::table('tblproductgroups')
        ->where('hidden', 0)
        ->get();

    // Inicializa um array para armazenar os grupos
    $groupList = [];

    foreach ($productGroups as $group) {
        $groupList[] = [
            'id' => $group->id,
            'name' => $group->name,
            'description' => $group->description,
        ];
    }

    // Adiciona a lista de grupos ao template
    return [
        'groupList' => $groupList,
    ];
});
