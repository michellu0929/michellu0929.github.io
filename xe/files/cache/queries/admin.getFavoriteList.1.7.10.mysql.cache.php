<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFavoriteList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl15_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl15_argument'}->createConditionValue();
if(!${'site_srl15_argument'}->isValid()) return ${'site_srl15_argument'}->getErrorMessage();
} else
${'site_srl15_argument'} = NULL;if(${'site_srl15_argument'} !== null) ${'site_srl15_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module16_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module16_argument'}->createConditionValue();
if(!${'module16_argument'}->isValid()) return ${'module16_argument'}->getErrorMessage();
} else
${'module16_argument'} = NULL;if(${'module16_argument'} !== null) ${'module16_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl15_argument,"equal")
,new ConditionWithArgument('`module`',$module16_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>