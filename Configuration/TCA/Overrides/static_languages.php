<?php
defined('TYPO3_MODE') || die();

$initialize = function ($dataSetName) {
    $additionalFields = [
        'lg_name_en' => 'lg_name_ja'
    ];

    \Mselbach\StaticInfoTablesJA\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
};
$initialize('static_languages');
unset($initialize);
