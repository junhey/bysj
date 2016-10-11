<?php if ( ! defined('IN_DILICMS')) exit('No direct script access allowed');
$setting['models']['selcourse']=array (
  'id' => '8',
  'name' => 'selcourse',
  'description' => '选课表',
  'perpage' => '10',
  'hasattach' => '0',
  'built_in' => '0',
  'thumb_preferences' => NULL,
  'fields' => 
  array (
    36 => 
    array (
      'id' => '36',
      'name' => 'selCourseNo',
      'description' => '选课号',
      'model' => '8',
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
    37 => 
    array (
      'id' => '37',
      'name' => 'selStatus',
      'description' => '选课状态',
      'model' => '8',
      'type' => 'select_from_model',
      'length' => '0',
      'values' => 'selStatusCategory|statusName',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '2',
      'editable' => '1',
    ),
    38 => 
    array (
      'id' => '38',
      'name' => 'selDate',
      'description' => '选课日期',
      'model' => '8',
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
    39 => 
    array (
      'id' => '39',
      'name' => 'studentNo',
      'description' => '学号',
      'model' => '8',
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
    40 => 
    array (
      'id' => '40',
      'name' => 'teacherNo',
      'description' => '工号',
      'model' => '8',
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
    41 => 
    array (
      'id' => '41',
      'name' => 'courseNo',
      'description' => '课程号',
      'model' => '8',
      'type' => 'int',
      'length' => '0',
      'values' => '',
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
    0 => '36',
    1 => '37',
    2 => '38',
    3 => '39',
    4 => '40',
    5 => '41',
  ),
  'searchable' => 
  array (
  ),
);