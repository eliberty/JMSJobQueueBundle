<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Symfony\Set\SymfonySetList;

return RectorConfig::configure()
    ->withPaths([__DIR__])
    ->withSkip([__DIR__ . '/rector-sf6.php', __DIR__ . '/Tests'])
    ->withPhpVersion(\Rector\ValueObject\PhpVersion::PHP_84)
    ->withSets([
        SymfonySetList::SYMFONY_28, SymfonySetList::SYMFONY_30, SymfonySetList::SYMFONY_31,
        SymfonySetList::SYMFONY_32, SymfonySetList::SYMFONY_33, SymfonySetList::SYMFONY_34,
        SymfonySetList::SYMFONY_40, SymfonySetList::SYMFONY_41, SymfonySetList::SYMFONY_42,
        SymfonySetList::SYMFONY_43, SymfonySetList::SYMFONY_44, SymfonySetList::SYMFONY_50,
        SymfonySetList::SYMFONY_50_TYPES, SymfonySetList::SYMFONY_51, SymfonySetList::SYMFONY_52,
        SymfonySetList::SYMFONY_53, SymfonySetList::SYMFONY_54, SymfonySetList::SYMFONY_60,
        SymfonySetList::SYMFONY_61, SymfonySetList::SYMFONY_62, SymfonySetList::SYMFONY_63,
        SymfonySetList::SYMFONY_64,
    ]);
