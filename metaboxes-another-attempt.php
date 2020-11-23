<?php 

/**
        * additional info
        * made with the meta box generator from market port GmbH
        */
        class customMetaBoxes{
        
        
        private $postTypes = array(
        'post',
                'page',
                
        );
       
        
           
        public function __construct() {
            add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
            add_action( 'admin_footer', array( $this, 'admin_footer' ) );
            add_action( 'save_post', array( $this, 'save_fields' ) );
            
        }
        public function add_meta_boxes() {
        
            foreach ( $this->postTypes as $postType ) {
                
                
                
             add_meta_box(
                'a_metabox',
                __( 'a metabox', '' ),
                array( $this, 'a_metabox_callback' ),
                $postType,
                'advanced',
                'default'
            );
            
             add_meta_box(
                'another_one',
                __( 'another one', '' ),
                array( $this, 'another_one_callback' ),
                $postType,
                'advanced',
                'default'
            );
            
             add_meta_box(
                'thetime',
                __( 'the time', '' ),
                array( $this, 'thetime_callback' ),
                $postType,
                'advanced',
                'default'
            );
            
             add_meta_box(
                'newinfo',
                __( 'newinfo', '' ),
                array( $this, 'newinfo_callback' ),
                $postType,
                'advanced',
                'default'
            );
            
             add_meta_box(
                'we',
                __( 'whatelse', '' ),
                array( $this, 'we_callback' ),
                $postType,
                'advanced',
                'default'
            );
            

            }
        }
        
        
            public function a_metabox_callback($post){
                
                wp_nonce_field( 'customMetaBoxes_data', 'customMetaBoxes_nonce' );
                ?>
                
                            <textarea id="content_additional" name="content_additional" class="box-input"><?php echo get_post_meta( $post->ID, 'content_additional', true ); ?></textarea>
                            
                            <input id="cheading" name="cheading" type="text" class="box-input" value="<?php echo get_post_meta( $post->ID, 'cheading', true ); ?>" placeholder="<?php _e('content heading', ''); ?>"  />
                            
                <?php
            }
            
            public function another_one_callback($post){
                
                wp_nonce_field( 'customMetaBoxes_data', 'customMetaBoxes_nonce' );
                ?>
                
                            <input id="field_6553" name="field_6553" type="text" class="box-input" value="<?php echo get_post_meta( $post->ID, 'field_6553', true ); ?>" placeholder="<?php _e('heading', ''); ?>"  />
                            
                            <textarea id="field_4429" name="field_4429" class="box-input"><?php echo get_post_meta( $post->ID, 'field_4429', true ); ?></textarea>
                            
                <?php
            }
            
            public function thetime_callback($post){
                
                wp_nonce_field( 'customMetaBoxes_data', 'customMetaBoxes_nonce' );
                ?>
                
                        
                        <?php wp_editor(get_post_meta( $post->ID, 'theeditor', true ), theeditor); ?>
                            <input id="timeofthe" name="timeofthe" type="text" class="datepicker" value="<?php echo date( 'd.m.Y', get_post_meta( $post->ID, 'timeofthe', true ) ); ?>" placeholder="<?php _e('the time', ''); ?>" autocomplete="off" />
                            
                <?php
            }
            
            public function newinfo_callback($post){
                
                wp_nonce_field( 'customMetaBoxes_data', 'customMetaBoxes_nonce' );
                ?>
                
                            <input id="thedatef" name="thedatef" type="text" class="datepicker" value="<?php echo get_post_meta( $post->ID, 'thedatef', true ); ?>" placeholder="<?php _e('the date', ''); ?>" autocomplete="off" />
                            
                            <input id="thetime" name="thetime" type="time" class="box-input" value="<?php echo get_post_meta( $post->ID, 'thetime', true ); ?>" placeholder="<?php _e('the time', ''); ?>"  />
                            
                            <input id="theurl" name="theurl" type="url" class="box-input" value="<?php echo get_post_meta( $post->ID, 'theurl', true ); ?>" placeholder="<?php _e('the url', ''); ?>"  />
                            
                <?php
            }
            
            public function we_callback($post){
                
                wp_nonce_field( 'customMetaBoxes_data', 'customMetaBoxes_nonce' );
                ?>
                
                            <?php
                            $meta_value = get_post_meta( $post->ID, 'mu', true );
                            $view = '';
                    
                            if ( wp_attachment_is_image( $meta_value ) ){
                                $view = wp_get_attachment_image( $meta_value, 'thumbnail' ).'<span class="delete-item button-link">'.__( 'Remove attachment', '' ).'</span>';
                            } elseif( !empty( $meta_value ) ) {
                                $view =  basename ( get_attached_file( $meta_value ) ).'<span class="delete-item button-link">'.__( 'Remove attachment', '' ).'</span>';
                            }
                            ?>
                    
                            <div id="mu_view" class="view-item">
                                <?php echo $view; ?>
                            </div>
                            <input id="mu" name="mu" type="hidden" value="<?php echo get_post_meta( $post->ID, 'mu', true ); ?>" /> <input style="width: 19%" class="button title-media" id="mu_button" name="mu_button" type="button" value="<?php _e('Upload', ''); ?>" />
                            
                            <?php $meta_value = get_post_meta( $post->ID, 'field_1221', true ); ?>
                        
                            <select id="field_1221" name="field_1221" >
                            <option value="what,else,can,be,done" <?php if( $meta_value == what,else,can,be,done ){ echo 'selected'; } ?>></option>
                            </select>
                        
                <?php
            }
            
                    
            public function save_fields( $post_id ) {
                if ( ! isset( $_POST['customMetaBoxes_nonce'] ) )
                    return $post_id;
               
                $nonce = $_POST['customMetaBoxes_nonce'];
                if ( !wp_verify_nonce( $nonce, 'customMetaBoxes_data' ) )
                    return $post_id;
                    
                if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
                    return $post_id;
                
                // Update metafields
                    	
                        if ( isset( $_POST['content_additional'] ) )
                            update_post_meta( $post_id, 'content_additional', esc_attr( $_POST['content_additional'] ) );	
                        if ( isset( $_POST['cheading'] ) )
                            update_post_meta( $post_id, 'cheading', esc_attr( $_POST['cheading'] ) );	
                        if ( isset( $_POST['field_6553'] ) )
                            update_post_meta( $post_id, 'field_6553', esc_attr( $_POST['field_6553'] ) );	
                        if ( isset( $_POST['field_4429'] ) )
                            update_post_meta( $post_id, 'field_4429', esc_attr( $_POST['field_4429'] ) );	
                        if ( isset( $_POST['theeditor'] ) )
                            update_post_meta( $post_id, 'theeditor', esc_attr( $_POST['theeditor'] ) );	
                        if ( isset( $_POST['timeofthe'] ) )
                            update_post_meta( $post_id, 'timeofthe', strtotime( $_POST['timeofthe'].'00:00') );	
                        if ( isset( $_POST['thedatef'] ) )
                            update_post_meta( $post_id, 'thedatef', esc_attr( $_POST['thedatef'] ) );	
                        if ( isset( $_POST['thetime'] ) )
                            update_post_meta( $post_id, 'thetime', esc_attr( $_POST['thetime'] ) );	
                        if ( isset( $_POST['theurl'] ) )
                            update_post_meta( $post_id, 'theurl', esc_url_raw( $_POST['theurl'] ) );	
                        if ( isset( $_POST['mu'] ) )
                            update_post_meta( $post_id, 'mu', esc_attr( $_POST['mu'] ) );	
                        if ( isset( $_POST['field_1221'] ) )
                            update_post_meta( $post_id, 'field_1221', esc_attr( $_POST['field_1221'] ) );

            }
            
            
        public function admin_footer() {
        ?>
            <style>
            .box-input { width: 100%; padding: 10px; margin-bottom: 15px;} 
            .input-label { margin-bottom: 5px; display: block } 
            .editor-input { margin-bottom: 25px; }
            .delete-item { display: block; margin-bottom: 5px !important; }
            ::-webkit-input-placeholder { font-style: italic; }
            ::-moz-placeholder { font-style: italic; }
            :-ms-input-placeholder { font-style: italic; }
            :-moz-placeholder { font-style: italic; }
            </style>
            
            
            <script>
                jQuery(document).ready(function($){
                    if ( typeof wp.media !== 'undefined' ) {
                        var _custom_media = true,
                            _orig_send_attachment = wp.media.editor.send.attachment;
                        $('.title-media').click(function(e) {
                            var send_attachment_bkp = wp.media.editor.send.attachment;
                            var button = $(this);
                            var id = button.attr('id').replace('_button', '');
                            var view = jQuery('#'+id+'_view');

                            _custom_media = true;
                            wp.media.editor.send.attachment = function(props, attachment){
                                if ( _custom_media ) {
                                    
                                    $('input#'+id).val(attachment.id);
                                    if( attachment.type === 'image' ){
                                        if( view.find('img').length > 0 ){ 
                                            view.find('img').attr('src', attachment.sizes.thumbnail.url);
                                        } else {
                                            view.html('<img src="'+attachment.sizes.thumbnail.url+'" /><span class="delete-item button-link"><?php _e('Remove attachment', ''); ?></span>');
                                        }
                                    } else {
                                        view.html(attachment.filename+'<span class="delete-item button-link"><?php _e('Remove attachment', ''); ?></span>');
                                        console.log(attachment.filename);
                                    }

                                } else {
                                    return _orig_send_attachment.apply( this, [props, attachment] );
                                };
                            }
                            wp.media.editor.open(button);
                            return false;
                        });
                        $('.add_media').on('click', function(){
                            _custom_media = false;
                        });
                    }
                    
                    
                     jQuery('.view-item').on('click', '.delete-item', function (e) {
                        e.preventDefault();
                        var to_delete = jQuery(this).parent().attr('id');
                        var to_delete_id = to_delete.replace('_view',"");
                        var view = jQuery('#'+to_delete_id+'_view');
        
                        jQuery('input#'+to_delete_id).val('');
                        view.html('');
                        console.log(to_delete);
                    });
                });
            </script>
            
              <script>
              jQuery(document).ready(function(){
                // If English, delete all german options.
                jQuery( ".datepicker" ).datepicker({
                    prevText: '&#x3c;zurück', prevStatus: '',
                    prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
                    nextText: 'Vor&#x3e;', nextStatus: '',
                    nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: '',
                    currentText: 'heute', currentStatus: '',
                    todayText: 'heute', todayStatus: '',
                    clearText: '-', clearStatus: '',
                    closeText: 'schließen', closeStatus: '',
                    monthNames: ['Januar','Februar','März','April','Mai','Juni',
                        'Juli','August','September','Oktober','November','Dezember'],
                    monthNamesShort: ['Jan','Feb','Mär','Apr','Mai','Jun',
                        'Jul','Aug','Sep','Okt','Nov','Dez'],
                    dayNames: ['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'],
                    dayNamesShort: ['So','Mo','Di','Mi','Do','Fr','Sa'],
                    dayNamesMin: ['So','Mo','Di','Mi','Do','Fr','Sa'],
                    showMonthAfterYear: false,
                    dateFormat:'dd.mm.yy'
                } );
            } );
             </script>
            
           <?php
        
        }
        
        
                public function admin_scripts( ){
                    if (!wp_script_is( 'jquery', 'enqueued' )) {
                        wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, false, true );
                    }
                
    
            
                    if (!wp_script_is( 'jqueryui', 'enqueued' )) {
                        wp_enqueue_script( 'jqueryui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array('jquery'), '1', true );
                    }
                    if (!wp_style_is( 'jqueryui', 'enqueued' )) {
                        wp_enqueue_style( 'jqueryui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css');
                    }
            
                $enqueue_media = ( did_action( 'wp_enqueue_media' ) < 1 )? true : false;
                if($enqueue_media){ 
                  wp_enqueue_media();
                }
            
            
                }
    
            
        
        }  
        new customMetaBoxes;
        //Source: http://tools.marketport.site/generators/metabox-generator/
        ?>
        
