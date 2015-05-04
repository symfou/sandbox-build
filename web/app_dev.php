<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__ . '/../app/bootstrap.php.cache';
require_once __DIR__ . '/../app/AppKernel.php';

umask(0000);

$request = Sonata\PageBundle\Request\RequestFactory::createFromGlobals('host_with_path');

$kernel = new AppKernel('dev', true);

$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);
