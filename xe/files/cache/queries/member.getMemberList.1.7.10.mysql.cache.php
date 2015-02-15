<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin68_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin68_argument'}->createConditionValue();
if(!${'is_admin68_argument'}->isValid()) return ${'is_admin68_argument'}->getErrorMessage();
} else
${'is_admin68_argument'} = NULL;if(${'is_admin68_argument'} !== null) ${'is_admin68_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied69_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied69_argument'}->createConditionValue();
if(!${'is_denied69_argument'}->isValid()) return ${'is_denied69_argument'}->getErrorMessage();
} else
${'is_denied69_argument'} = NULL;if(${'is_denied69_argument'} !== null) ${'is_denied69_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls70_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls70_argument'}->createConditionValue();
if(!${'member_srls70_argument'}->isValid()) return ${'member_srls70_argument'}->getErrorMessage();
} else
${'member_srls70_argument'} = NULL;if(${'member_srls70_argument'} !== null) ${'member_srls70_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id71_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id71_argument'}->createConditionValue();
if(!${'s_user_id71_argument'}->isValid()) return ${'s_user_id71_argument'}->getErrorMessage();
} else
${'s_user_id71_argument'} = NULL;if(${'s_user_id71_argument'} !== null) ${'s_user_id71_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name72_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name72_argument'}->createConditionValue();
if(!${'s_user_name72_argument'}->isValid()) return ${'s_user_name72_argument'}->getErrorMessage();
} else
${'s_user_name72_argument'} = NULL;if(${'s_user_name72_argument'} !== null) ${'s_user_name72_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name73_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name73_argument'}->createConditionValue();
if(!${'s_nick_name73_argument'}->isValid()) return ${'s_nick_name73_argument'}->getErrorMessage();
} else
${'s_nick_name73_argument'} = NULL;if(${'s_nick_name73_argument'} !== null) ${'s_nick_name73_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name74_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name74_argument'}->createConditionValue();
if(!${'html_nick_name74_argument'}->isValid()) return ${'html_nick_name74_argument'}->getErrorMessage();
} else
${'html_nick_name74_argument'} = NULL;if(${'html_nick_name74_argument'} !== null) ${'html_nick_name74_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address75_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address75_argument'}->createConditionValue();
if(!${'s_email_address75_argument'}->isValid()) return ${'s_email_address75_argument'}->getErrorMessage();
} else
${'s_email_address75_argument'} = NULL;if(${'s_email_address75_argument'} !== null) ${'s_email_address75_argument'}->setColumnType('varchar');
if(isset($args->s_birthday)) {
${'s_birthday76_argument'} = new ConditionArgument('s_birthday', $args->s_birthday, 'like');
${'s_birthday76_argument'}->createConditionValue();
if(!${'s_birthday76_argument'}->isValid()) return ${'s_birthday76_argument'}->getErrorMessage();
} else
${'s_birthday76_argument'} = NULL;if(${'s_birthday76_argument'} !== null) ${'s_birthday76_argument'}->setColumnType('char');
if(isset($args->s_extra_vars)) {
${'s_extra_vars77_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars77_argument'}->createConditionValue();
if(!${'s_extra_vars77_argument'}->isValid()) return ${'s_extra_vars77_argument'}->getErrorMessage();
} else
${'s_extra_vars77_argument'} = NULL;if(${'s_extra_vars77_argument'} !== null) ${'s_extra_vars77_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate78_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate78_argument'}->createConditionValue();
if(!${'s_regdate78_argument'}->isValid()) return ${'s_regdate78_argument'}->getErrorMessage();
} else
${'s_regdate78_argument'} = NULL;if(${'s_regdate78_argument'} !== null) ${'s_regdate78_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login79_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login79_argument'}->createConditionValue();
if(!${'s_last_login79_argument'}->isValid()) return ${'s_last_login79_argument'}->getErrorMessage();
} else
${'s_last_login79_argument'} = NULL;if(${'s_last_login79_argument'} !== null) ${'s_last_login79_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more80_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more80_argument'}->createConditionValue();
if(!${'s_regdate_more80_argument'}->isValid()) return ${'s_regdate_more80_argument'}->getErrorMessage();
} else
${'s_regdate_more80_argument'} = NULL;if(${'s_regdate_more80_argument'} !== null) ${'s_regdate_more80_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less81_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less81_argument'}->createConditionValue();
if(!${'s_regdate_less81_argument'}->isValid()) return ${'s_regdate_less81_argument'}->getErrorMessage();
} else
${'s_regdate_less81_argument'} = NULL;if(${'s_regdate_less81_argument'} !== null) ${'s_regdate_less81_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more82_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more82_argument'}->createConditionValue();
if(!${'s_last_login_more82_argument'}->isValid()) return ${'s_last_login_more82_argument'}->getErrorMessage();
} else
${'s_last_login_more82_argument'} = NULL;if(${'s_last_login_more82_argument'} !== null) ${'s_last_login_more82_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less83_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less83_argument'}->createConditionValue();
if(!${'s_last_login_less83_argument'}->isValid()) return ${'s_last_login_less83_argument'}->getErrorMessage();
} else
${'s_last_login_less83_argument'} = NULL;if(${'s_last_login_less83_argument'} !== null) ${'s_last_login_less83_argument'}->setColumnType('date');

${'page86_argument'} = new Argument('page', $args->{'page'});
${'page86_argument'}->ensureDefaultValue('1');
if(!${'page86_argument'}->isValid()) return ${'page86_argument'}->getErrorMessage();

${'page_count87_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count87_argument'}->ensureDefaultValue('10');
if(!${'page_count87_argument'}->isValid()) return ${'page_count87_argument'}->getErrorMessage();

${'list_count88_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count88_argument'}->ensureDefaultValue('20');
if(!${'list_count88_argument'}->isValid()) return ${'list_count88_argument'}->getErrorMessage();

${'sort_index84_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index84_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index84_argument'}->isValid()) return ${'sort_index84_argument'}->getErrorMessage();

${'sort_order85_argument'} = new SortArgument('sort_order85', $args->sort_order);
${'sort_order85_argument'}->ensureDefaultValue('asc');
if(!${'sort_order85_argument'}->isValid()) return ${'sort_order85_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin68_argument,"equal")
,new ConditionWithArgument('`denied`',$is_denied69_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls70_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id71_argument,"like")
,new ConditionWithArgument('`user_name`',$s_user_name72_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name73_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$html_nick_name74_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address75_argument,"like", 'or')
,new ConditionWithArgument('`birthday`',$s_birthday76_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars77_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate78_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login79_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more80_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less81_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more82_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less83_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index84_argument'}, $sort_order85_argument)
));
$query->setLimit(new Limit(${'list_count88_argument'}, ${'page86_argument'}, ${'page_count87_argument'}));
return $query; ?>