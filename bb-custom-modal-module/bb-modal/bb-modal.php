<?php

/**
 * This is a modal module
 *
 * @class FLDlModalModule
 */
class FLDlModalModule extends FLBuilderModule {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Modal Module', 'fl-builder'),
            'description'   => __('This is a modal module.', 'fl-builder'),
            'category'		=> __('Advanced Modules', 'fl-builder'),
            'dir'           => BB_CUSTOM_MODAL_MODULE_DIR . 'bb-modal/',
            'url'           => BB_CUSTOM_MODAL_MODULE_URL . 'bb-modal/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));

        // Register and enqueue module css and js
        // Delete or comment out the two lines below you are already loading Bootstrap
        $this->add_css('bb-modal', $this->url . 'css/bootstrap.css');
        $this->add_js('bb-modal', $this->url . 'js/bootstrap.js', array('jquery'), '', true);
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FLDlModalModule', array(
    'general'       => array( // Tab
        'title'         => __('General', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Section Title', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'modal_image' => array(
                        'type'          => 'photo',
                        'label'         => __('Modal Image', 'fl-builder'),
                        'show_remove'	  => true
                    ),
                    'modal_title' => array(
                        'type'          => 'text',
                        'label'         => __('Modal Title', 'fl-builder'),
                        'default'       => '',
                        'placeholder'   => __('Enter title', 'fl-builder')
                    ),
                    'modal_description' => array(
                        'type'          => 'text',
                        'label'         => __('Modal Description', 'fl-builder'),
                        'default'       => '',
                        'placeholder'   => __('Enter description', 'fl-builder')
                    ),
                    'modal_editor' => array(
                        'type'          => 'editor',
                        'media_buttons' => true,
                        'rows'          => 10
                    ),
                )
            )
        )
    )
));
