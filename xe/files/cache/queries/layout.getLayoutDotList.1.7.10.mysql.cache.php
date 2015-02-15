<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl59_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl59_argument'}->checkFilter('number');
${'site_srl59_argument'}->ensureDefaultValue('0');
${'site_srl59_argument'}->checkNotNull();
${'site_srl59_argument'}->createConditionValue();
if(!${'site_srl59_argument'}->isValid()) return ${'site_srl59_argument'}->getErrorMessage();
if(${'site_srl59_argument'} !== null) ${'site_srl59_argument'}->setColumnType('number');

${'layout_type60_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type60_argument'}->ensureDefaultValue('P');
${'layout_type60_argument'}->createConditionValue();
if(!${'layout_type60_argument'}->isValid()) return ${'layout_type60_argument'}->getErrorMessage();
if(${'layout_type60_argument'} !== null) ${'layout_type60_argument'}->setColumnType('char');

${'layout61_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout61_argument'}->ensureDefaultValue('.');
${'layout61_argument'}->createConditionValue();
if(!${'layout61_argument'}->isValid()) return ${'layout61_argument'}->getErrorMessage();
if(${'layout61_argument'} !== null) ${'layout61_argument'}->setColumnType('varchar');

${'sort_index62_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index62_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index62_argument'}->isValid()) return ${'sort_index62_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl59_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type60_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout61_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index62_argument'}, "desc")
));
$query->setLimit();
return $query; ?>