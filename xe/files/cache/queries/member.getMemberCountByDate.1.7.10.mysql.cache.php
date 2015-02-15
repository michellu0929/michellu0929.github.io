<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->regDate)) {
${'regDate17_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate17_argument'}->createConditionValue();
if(!${'regDate17_argument'}->isValid()) return ${'regDate17_argument'}->getErrorMessage();
} else
${'regDate17_argument'} = NULL;if(${'regDate17_argument'} !== null) ${'regDate17_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regDate17_argument,"like_prefix")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>