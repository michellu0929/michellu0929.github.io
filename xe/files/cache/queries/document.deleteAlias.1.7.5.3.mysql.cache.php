<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteAlias");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->alias_srl)) {
${'alias_srl6_argument'} = new ConditionArgument('alias_srl', $args->alias_srl, 'equal');
${'alias_srl6_argument'}->checkFilter('number');
${'alias_srl6_argument'}->createConditionValue();
if(!${'alias_srl6_argument'}->isValid()) return ${'alias_srl6_argument'}->getErrorMessage();
} else
${'alias_srl6_argument'} = NULL;if(${'alias_srl6_argument'} !== null) ${'alias_srl6_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl7_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl7_argument'}->checkFilter('number');
${'document_srl7_argument'}->createConditionValue();
if(!${'document_srl7_argument'}->isValid()) return ${'document_srl7_argument'}->getErrorMessage();
} else
${'document_srl7_argument'} = NULL;if(${'document_srl7_argument'} !== null) ${'document_srl7_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl8_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl8_argument'}->checkFilter('number');
${'module_srl8_argument'}->createConditionValue();
if(!${'module_srl8_argument'}->isValid()) return ${'module_srl8_argument'}->getErrorMessage();
} else
${'module_srl8_argument'} = NULL;if(${'module_srl8_argument'} !== null) ${'module_srl8_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_document_aliases`', '`document_aliases`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`alias_srl`',$alias_srl6_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl7_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl8_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>