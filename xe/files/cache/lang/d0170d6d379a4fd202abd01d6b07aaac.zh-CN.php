<?php
$lang->poll='投票系统';
$lang->poll_stop_date='投票调查结束日期';
$lang->poll_join_count='投票者';
$lang->poll_checkcount='必选项目数';
$lang->cmd_poll_list='投票列表';
$lang->cmd_delete_checked_poll='删除所选';
$lang->cmd_apply_poll='参与投票';
$lang->cmd_view_result='查看结果';
$lang->success_poll='感谢您参与投票。';
$lang->msg_already_poll='不能重复投票！';
$lang->msg_poll_is_null='请选择要删除的问卷。';
$lang->msg_checked_poll_is_deleted='已删除%d个问卷。';
$lang->confirm_poll_delete='%s개의 설문을 삭제하시겠습니까?';
$lang->msg_check_poll_item='请选择问卷回应的项目。 (每个问卷调查有不同的必选项目)';
$lang->msg_poll_not_exists='您选择的问卷不存在！';
$lang->cmd_null_item='没有要登录为投票调查的值。 请重新设置。';
$lang->confirm_poll_submit='您要参与投票吗？';
if(!is_array($lang->search_poll_target_list)){
	$lang->search_poll_target_list = array();
}
$lang->search_poll_target_list['title']='标题';
$lang->search_poll_target_list['regdate']='登录日期';
$lang->search_poll_target_list['ipaddress']='IP 地址';
$lang->single_check='Single Check';
$lang->multi_check='Multi Check';
$lang->selected_poll='Selected poll';
