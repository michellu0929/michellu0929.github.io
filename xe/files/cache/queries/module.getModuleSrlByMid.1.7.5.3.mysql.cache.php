<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSrlByMid");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl9_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl9_argument'}->createConditionValue();
if(!${'site_srl9_argument'}->isValid()) return ${'site_srl9_argument'}->getErrorMessage();
} else
${'site_srl9_argument'} = NULL;if(${'site_srl9_argument'} !== null) ${'site_srl9_argument'}->setColumnType('number');

${'mid10_argument'} = new ConditionArgument('mid', $args->mid, 'in');
${'mid10_argument'}->checkNotNull();
${'mid10_argument'}->createConditionValue();
if(!${'mid10_argument'}->isValid()) return ${'mid10_argument'}->getErrorMessage();
if(${'mid10_argument'} !== null) ${'mid10_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module_srl`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl9_argument,"equal")
,new ConditionWithArgument('`mid`',$mid10_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>