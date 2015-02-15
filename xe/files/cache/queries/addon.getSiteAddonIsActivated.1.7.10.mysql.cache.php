<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl66_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl66_argument'}->checkNotNull();
${'site_srl66_argument'}->createConditionValue();
if(!${'site_srl66_argument'}->isValid()) return ${'site_srl66_argument'}->getErrorMessage();
if(${'site_srl66_argument'} !== null) ${'site_srl66_argument'}->setColumnType('number');

${'addon67_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon67_argument'}->checkNotNull();
${'addon67_argument'}->createConditionValue();
if(!${'addon67_argument'}->isValid()) return ${'addon67_argument'}->getErrorMessage();
if(${'addon67_argument'} !== null) ${'addon67_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl66_argument,"equal")
,new ConditionWithArgument('`addon`',$addon67_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>