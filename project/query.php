<?php

require_once('app/Mage.php');
Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('display_errors',1);
umask(0);
Mage::app();

// create a category
//$category = Mage::getModel('monaco_news/category');
//$category->setCode('top');
//$category->setName('Think Open');
//$category->setStatus(true);
//$category->save();

// load the category
$category = Mage::getModel('monaco_news/category')->load(1);
echo 'Category<hr>';
Zend_Debug::dump($category);
echo '<hr>';


// create a story
$story = Mage::getModel('monaco_news/story');
$story->setTitle('My Story 2');
$story->setContent('Lorem Ipsum 2');
$story->setStatus(1);
$story->setCategory($category);
$story->save();

echo '<hr>eccomi<hr><pre>';
Zend_Debug::dump($story);
echo '<hr>';
echo 'Category Name = ' . $story->getCategory()->getName();