<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin64_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin64_argument'}->ensureDefaultValue('.');
${'skin64_argument'}->createConditionValue();
if(!${'skin64_argument'}->isValid()) return ${'skin64_argument'}->getErrorMessage();
if(${'skin64_argument'} !== null) ${'skin64_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin64_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>