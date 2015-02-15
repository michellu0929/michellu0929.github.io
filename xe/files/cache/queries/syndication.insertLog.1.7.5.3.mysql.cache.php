<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLog");
$query->setAction("insert");
$query->setPriority("");

${'log_srl17_argument'} = new Argument('log_srl', $args->{'log_srl'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'log_srl17_argument'}->ensureDefaultValue($sequence);
if(!${'log_srl17_argument'}->isValid()) return ${'log_srl17_argument'}->getErrorMessage();
if(${'log_srl17_argument'} !== null) ${'log_srl17_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl18_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl18_argument'}->isValid()) return ${'module_srl18_argument'}->getErrorMessage();
} else
${'module_srl18_argument'} = NULL;if(${'module_srl18_argument'} !== null) ${'module_srl18_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl19_argument'} = new Argument('document_srl', $args->{'document_srl'});
if(!${'document_srl19_argument'}->isValid()) return ${'document_srl19_argument'}->getErrorMessage();
} else
${'document_srl19_argument'} = NULL;if(${'document_srl19_argument'} !== null) ${'document_srl19_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title20_argument'} = new Argument('title', $args->{'title'});
if(!${'title20_argument'}->isValid()) return ${'title20_argument'}->getErrorMessage();
} else
${'title20_argument'} = NULL;if(${'title20_argument'} !== null) ${'title20_argument'}->setColumnType('varchar');
if(isset($args->summary)) {
${'summary21_argument'} = new Argument('summary', $args->{'summary'});
if(!${'summary21_argument'}->isValid()) return ${'summary21_argument'}->getErrorMessage();
} else
${'summary21_argument'} = NULL;if(${'summary21_argument'} !== null) ${'summary21_argument'}->setColumnType('varchar');

${'regdate22_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate22_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate22_argument'}->checkNotNull();
if(!${'regdate22_argument'}->isValid()) return ${'regdate22_argument'}->getErrorMessage();
if(${'regdate22_argument'} !== null) ${'regdate22_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`log_srl`', ${'log_srl17_argument'})
,new InsertExpression('`module_srl`', ${'module_srl18_argument'})
,new InsertExpression('`document_srl`', ${'document_srl19_argument'})
,new InsertExpression('`title`', ${'title20_argument'})
,new InsertExpression('`summary`', ${'summary21_argument'})
,new InsertExpression('`regdate`', ${'regdate22_argument'})
));
$query->setTables(array(
new Table('`xe_syndication_logs`', '`syndication_logs`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>