<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title10_argument'} = new ConditionArgument('title', $args->title, 'in');
${'title10_argument'}->checkNotNull();
${'title10_argument'}->createConditionValue();
if(!${'title10_argument'}->isValid()) return ${'title10_argument'}->getErrorMessage();
if(${'title10_argument'} !== null) ${'title10_argument'}->setColumnType('varchar');

${'site_srl11_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl11_argument'}->ensureDefaultValue('0');
${'site_srl11_argument'}->createConditionValue();
if(!${'site_srl11_argument'}->isValid()) return ${'site_srl11_argument'}->getErrorMessage();
if(${'site_srl11_argument'} !== null) ${'site_srl11_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title10_argument,"in")
,new ConditionWithArgument('`site_srl`',$site_srl11_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>