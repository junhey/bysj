<?php if ( ! defined('IN_DILICMS')) exit('No direct script access allowed');
$setting['models']['messages']=array (
  'id' => '7',
  'name' => 'messages',
  'description' => '信息表',
  'perpage' => '10',
  'hasattach' => '0',
  'built_in' => '0',
  'thumb_preferences' => NULL,
  'fields' => 
  array (
    31 => 
    array (
      'id' => '31',
      'name' => 'messageNo',
      'description' => '信息号',
      'model' => '7',
      'type' => 'int',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '1',
      'editable' => '1',
    ),
    32 => 
    array (
      'id' => '32',
      'name' => 'sendContent',
      'description' => '发送内容',
      'model' => '7',
      'type' => 'wysiwyg',
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
    33 => 
    array (
      'id' => '33',
      'name' => 'sendDate',
      'description' => '发送日期',
      'model' => '7',
      'type' => 'datetime',
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
    34 => 
    array (
      'id' => '34',
      'name' => 'teacherNo',
      'description' => '工号',
      'model' => '7',
      'type' => 'int',
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
    35 => 
    array (
      'id' => '35',
      'name' => 'studentNo',
      'description' => '学号',
      'model' => '7',
      'type' => 'int',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '5',
      'editable' => '1',
    ),
  ),
  'listable' => 
  array (
    0 => '31',
    1 => '32',
    2 => '33',
    3 => '34',
    4 => '35',
  ),
  'searchable' => 
  array (
  ),
);