<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();

/**
 * @var $fileInfoManager \Magento\Analytics\Model\FileInfoManager
 */
$fileInfoManager = $objectManager->create(\Magento\Analytics\Model\FileInfoManager::class);


/**
 * @var $fileInfo \Magento\Analytics\Model\FileInfo
 */
$fileInfo = $objectManager->create(\Magento\Analytics\Model\FileInfo::class);

$fileInfo->setPath('analytics/jsldjsfdkldf/data.tgz');
$fileInfo->setInitializationVector("binaryDataisdodssds8iui");

$fileInfoManager->save($fileInfo);
