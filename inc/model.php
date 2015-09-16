<?php
/*
Create team model
*/

class TeamS {

  function __construct() {
      add_action('init', array($this, 'register_post_type'));
  }

  function register_post_type(){
      $labels = array(
        'name'=>'Команда',
        'singular_name'=>'Сотрудник',
        'add_new'=>'Добавить',
        'add_new_item'=>'Добавить',
        'edit_item'=>'Редактировать',
        'new_item'=>'Новый',
        'view_item'=>'Просмотр',
        'search_items'=>'Поиск',
        'not_found'=>'Не найден',
        'parent_item_colon'=>''
      );

     $supports = array(
      'editor',
      'title',
      'revisions',
      'thumbnail',
     );

    register_post_type('team-s', array(
        'supports'=> $supports,
        'label'=>$labels['singular_name'],
        'labels'=>$labels,
        'public'=>true,
        'menu_icon'   => 'dashicons-groups',
    	  'rewrite' => array(
          'slug'                => 'team',
          'with_front'          => true,
          'pages'               => true,
          'feeds'               => false,
        ),
        'has_archive'         => true,
        'query_var'=>true,
    ));
  }

} $TheTeamS = new TeamS;

add_image_size( 'team-thumb', 333, 333, true ); 
