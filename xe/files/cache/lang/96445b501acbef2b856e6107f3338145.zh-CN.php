<?php
$lang->integration_search='综合搜索';
$lang->sample_code='代码';
$lang->about_target_module='所选模块作为搜索对象。请注意权限设置。';
$lang->about_sample_code='可把上述代码插入到相应布局当中即可实现搜索功能。';
$lang->msg_no_keyword='请输入搜索关键词。';
$lang->msg_document_more_search='利用\'继续搜索\'按钮可以进一步搜索。';
$lang->is_result_text='符合<strong>\'%s\'</strong>的搜索结果约有<strong>%d</strong>项';
$lang->multimedia='图片/视频';
$lang->include_search_target='只搜索所选对象';
$lang->exclude_search_target='所选对象从搜索中排除';
if(!is_array($lang->is_search_option)){
	$lang->is_search_option = array();
}
if(!is_array($lang->is_search_option['document'])){
	$lang->is_search_option['document'] = array();
}
$lang->is_search_option['document']['title_content']='标题+内容';
$lang->is_search_option['document']['title']='标题';
$lang->is_search_option['document']['content']='内容';
$lang->is_search_option['document']['tag']='标签';
if(!is_array($lang->is_search_option['trackback'])){
	$lang->is_search_option['trackback'] = array();
}
$lang->is_search_option['trackback']['url']='对象URL';
$lang->is_search_option['trackback']['blog_name']='对象网站名称';
$lang->is_search_option['trackback']['title']='标题';
$lang->is_search_option['trackback']['excerpt']='内容';
if(!is_array($lang->is_sort_option)){
	$lang->is_sort_option = array();
}
$lang->is_sort_option['regdate']='日期';
$lang->is_sort_option['comment_count']='评论';
$lang->is_sort_option['readed_count']='查看';
$lang->is_sort_option['voted_count']='推荐';
