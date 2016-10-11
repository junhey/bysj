<?php if ( ! defined('IN_DILICMS')) exit('No direct script access allowed');
$setting['models']['notices']=array (
  'id' => '3',
  'name' => 'notices',
  'description' => '通知表',
  'perpage' => '10',
  'hasattach' => '1',
  'built_in' => '0',
  'thumb_preferences' => '{"enabled":[],"default":"original"}',
  'fields' => 
  array (
    18 => 
    array (
      'id' => '18',
      'name' => 'noticeNo',
      'description' => '通知号',
      'model' => '3',
      'type' => 'int',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => '',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '1',
      'editable' => '1',
    ),
    20 => 
    array (
      'id' => '20',
      'name' => 'noticeTitle',
      'description' => '通知标题',
      'model' => '3',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '2',
      'editable' => '1',
    ),
    11 => 
    array (
      'id' => '11',
      'name' => 'noticeContent',
      'description' => '通知内容',
      'model' => '3',
      'type' => 'wysiwyg_basic',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '3',
      'editable' => '1',
    ),
    10 => 
    array (
      'id' => '10',
      'name' => 'noticeTime',
      'description' => '通知时间',
      'model' => '3',
      'type' => 'datetime',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '4',
      'editable' => '1',
    ),
    21 => 
    array (
      'id' => '21',
      'name' => 'thumb',
      'description' => '通知图片',
      'model' => '3',
      'type' => 'file',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => '',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '5',
      'editable' => '1',
    ),
    19 => 
    array (
      'id' => '19',
      'name' => 'instituteName',
      'description' => '学院编号',
      'model' => '3',
      'type' => 'select_from_model',
      'length' => '0',
      'values' => 'instituteCategory|instituteName',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '6',
      'editable' => '1',
    ),
  ),
  'listable' => 
  array (
    0 => '18',
    1 => '20',
    2 => '11',
    3 => '10',
    4 => '21',
    5 => '19',
  ),
  'searchable' => 
  array (
  ),
);