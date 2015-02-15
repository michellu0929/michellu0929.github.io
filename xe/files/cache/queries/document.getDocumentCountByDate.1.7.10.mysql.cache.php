<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->moduleSrlList)) {
${'moduleSrlList18_argument'} = new ConditionArgument('moduleSrlList', $args->moduleSrlList, 'in');
${'moduleSrlList18_argument'}->createConditionValue();
if(!${'moduleSrlList18_argument'}->isValid()) return ${'moduleSrlList18_argument'}->getErrorMessage();
} else
${'moduleSrlList18_argument'} = NULL;if(${'moduleSrlList18_argument'} !== null) ${'moduleSrlList18_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate19_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate19_argument'}->createConditionValue();
if(!${'regDate19_argument'}->isValid()) return ${'regDate19_argument'}->getErrorMessage();
} else
${'regDate19_argument'} = NULL;if(${'regDate19_argument'} !== null) ${'regDate19_argument'}->setColumnType('date');
if(isset($args->statusList)) {
${'statusList20_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList20_argument'}->createConditionValue();
if(!${'statusList20_argument'}->isValid()) return ${'statusList20_argument'}->getErrorMessage();
} else
${'statusList20_argument'} = NULL;if(${'statusList20_argument'} !== null) ${'statusList20_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$moduleSrlList18_argument,"in")
,new ConditionWithArgument('`regdate`',$regDate19_argument,"like_prefix", 'and')
,new ConditionWithArgument('`status`',$statusList20_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>